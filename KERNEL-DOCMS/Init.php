<?php
define('IP', str_replace('::1', '127.0.0.1', $_SERVER['REMOTE_ADDR']));
define('KERNEL', dirname(__FILE__) . DIRECTORY_SEPARATOR);

ini_set('default_charset', 'UTF-8');
ini_set('expose_php', 0);
ini_set('session.name', 'DO-BPP1');
ini_set('session.gc_probability', 10);
ini_set('session.gc_divisor', 100);
ini_set('session.cookie_httponly', 1);
ini_set('session.gc_maxlifetime', 600);
ini_set('zlib_output_compression', 'On');

$_SERVER['REQUEST_URI'] = str_replace('.php', '', strtolower($_SERVER['REQUEST_URI']));
if(strstr($_SERVER['REQUEST_URI'], '?')):
	define ('URI', explode('?', $_SERVER['REQUEST_URI'])[0]);
else:
	define ('URI', $_SERVER['REQUEST_URI']);
endif;

@session_start();

require(KERNEL .  "/Server.Config.php");

if(!empty($_SERVER['SERVER_NAME'])):
	$_Server = str_replace("www.", "", $_SERVER['SERVER_NAME']);

	if(!empty($Config['URL']["devPrivateServer"]) && ($Config['URL']["devPrivateServer"] === $_SERVER['SERVER_NAME'])):
		$Config['Lang'] = $Config['URL']['Default']['Lang'];
		define("SERVER", "http://" . $_SERVER['SERVER_NAME']);
		define("HOST", $_SERVER['SERVER_NAME']);
		define("sSERVER", "http://" . $_SERVER['SERVER_NAME']);
	elseif(isset($Config['URL']['Other'][$_Server])):
		$Config['MySQL'] = $Config['URL']['Other'][$_Server]['MySQL'];
		$Config['Lang'] = $Config['URL']['Other'][$_Server]['Lang'];
		define("SERVER", ($Config['URL']['Other'][$_Server]["Require.www"]) ? "http://www." . $_Server : "http://" . $_Server);
		define("HOST", ($Config['URL']['Other'][$_Server]["Require.www"]) ? "www." . $_Server : $_Server);
		define("sSERVER", ($Config['URL']['Other'][$_Server]["SSL.enabled"]) ? "https://" . HOST : "http://" . HOST);
	elseif(!empty($Config['URL']["Default"]["Server"])):
		$Config['Lang'] = $Config['URL']['Default']['Lang'];
		define("SERVER", ($Config["URL"]["Default"]["Require.www"]) ? "http://www." . $Config['URL']["Default"]["Server"] : "http://" . $Config['URL']["Default"]["Server"]);
		define("HOST", ($Config["URL"]["Default"]["Require.www"]) ? "www." . $Config['URL']["Default"]["Server"] : $Config['URL']["Default"]["Server"]);
		define("sSERVER", ($Config["URL"]["Default"]["SSL.enabled"]) ? "https://" . HOST : "http://" . HOST);
	else:
		echo "You don´t have access.";
		exit;
	endif;
else:
	exit;
endif;

$MySQLi = new mysqli($Config['MySQL']["host"], $Config['MySQL']["user"], $Config['MySQL']["pass"], $Config['MySQL']["dbname"]);

if ($MySQLi->connect_error) {
    die('Error de Conexión MySQLi (' . $MySQLi->connect_errno . ') '
            . $mysqli->connect_error);
}

$_mysqliCharacter = $MySQLi->character_set_name();

require 'Class.Core.php';
$Core = new Core();
require 'Class.Users.php';
$Users = new Users();

// AntiHTML & SQL Injection
$_POST = str_replace(['<', '>', '\'', '\'', '\\'], ['&lt;', '&gt;', '&quot;', '&#39;', '&#92;'], $_POST);
$_GET = str_replace(['<', '>', '\'', '\'', '\\'], ['&lt;', '&gt;', '&quot;', '&#39;', '&#92;'], $_GET);

DEFINE('FILES', KERNEL . 'Files/' . DIRECTORY_SEPARATOR . $Config['Lang'] . DIRECTORY_SEPARATOR);
DEFINE('GLOBALS', FILES . '/GLOBAL/');
?>
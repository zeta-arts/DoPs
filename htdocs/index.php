<?php
require '../KERNEL-DOCMS/Init.php';

if(isset($_POST['loginForm_default_username'], $_POST['loginForm_default_password'], $_POST['loginForm_default_login_submit']) && $_POST['loginForm_default_login_submit'] === 'Login'):
	$errorData = "";
	if(strlen($_POST['loginForm_default_password']) < 6 || strlen($_POST['loginForm_default_password']) > 20 || !preg_match('`[0-9]`', $_POST['loginForm_default_password']) || $_POST['loginForm_default_password'] === '******' || strlen($_POST['loginForm_default_username']) < 3 || strlen($_POST['loginForm_default_username']) > 20):
		$errorData .= '<p class="singup_errorMessage signup_errorMessage">Username and password combination doesn\'t exist.<br>Please check your info and try again.</p>';
	else:
		$query = $MySQLi->query('SELECT ID, Email FROM users WHERE Name = \'' .$_POST['loginForm_default_username'] . '\' AND pwHash = \'' . md5($_POST['loginForm_default_password']) . '\' LIMIT 1');
		if($query->num_rows === 1):
			$row = $query->fetch_assoc();
			$sessionId = $Core::GenerateRandom(18, true, false);
			$MySQLi->query('UPDATE users SET sessionId = \' ' . $sessionId . '\' WHERE ID = ' . $row['ID'] . '');
			$_SESSION['server1']['user']['sessionId'] = $sessionId;
			$_SESSION['server1']['user']['email'] = $row['Email'];
			header('Location: /indexInternal.es?action=internalStart');
		else:
			$errorData .= '<p class="singup_errorMessage signup_errorMessage">Username and password combination doesn\'t exist.<br>Please check your info and try again.</p>';
		endif;
	endif;
elseif(isset($_POST['signup_winnings'], $_POST['signup_username'], $_POST['signup_submit'], $_POST['signup_province'], $_POST['signup_passwordRepeat'], $_POST['signup_password'], $_POST['signup_newsletter'], $_POST['signup_instance'], $_POST['signup_email'], $_POST['signup_country'], $_POST['signup_birthdayYear'], $_POST['signup_birthdayMonth'], $_POST['signup_birthdayDay'])):
	if($_POST['signup_submit'] == 'Register'):
		$errorData = "";
		if(strlen($_POST['signup_password']) < 6):
			$errorData .= '<p class="singup_errorMessage signup_errorMessage">The password is too short. Please choose a new password which has between 4 and 20 characters.</p>';
		elseif(strlen($_POST['signup_password']) > 20):
			$errorData .= '<p class="singup_errorMessage signup_errorMessage">The password is too long. Please choose a new password which has between 4 and 20 characters.</p>';
		elseif(!preg_match('`[0-9]`', $_POST['signup_password'])):
			$errorData .= '<p class="singup_errorMessage signup_errorMessage">The password must include numbers.</p>';
		endif;
		
		if(strlen($_POST['signup_username']) < 3):
			$errorData .= '<p class="singup_errorMessage signup_errorMessage">This username is too short. Please choose a new username which has between 3 and 20 characters.</p>';
		elseif(strlen($_POST['signup_username']) > 20):
			$errorData .= '<p class="singup_errorMessage signup_errorMessage">This username is too long. Please choose a new username which has between 3 and 20 characters.</p>';
		endif;
		
		if(empty($_POST['signup_email']) || strlen($_POST['signup_email']) > 50 || preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $_POST['signup_email']) !== 1):
			$errorData .= '<p class="singup_errorMessage signup_errorMessage">Your e-mail address doesn\'t seem to be correct. Please enter a valid e-mail address.</p>';
		endif;
		
		if(!isset($_POST['signup_termsAndCondition']) || $_POST['signup_termsAndCondition'] !== '1'):
			$errorData .= '<p class="singup_errorMessage signup_errorMessage">Please confirm that you have accepted our Terms & Conditions. Afterwards, you may continue with your registration.</p>';
		endif;
		
		if($errorData === ''):
			if($MySQLi->query('SELECT null FROM users WHERE Name = \'' .$_POST['signup_username'] . '\'')->num_rows > 0):
				$errorData .= '<p class="singup_errorMessage signup_errorMessage">This username already exists. Please select another username.</p>';
			else:
				$sessionId = $Core::GenerateRandom(18, true, false);
				if($MySQLi->query('INSERT INTO users (Email, Name, pwHash, Servers, sessionId) VALUES (\'' . $_POST['signup_email'] . '\', \'' . $_POST['signup_username'] . '\', \'' . md5($_POST['signup_password']) . '\', \'\', ' . $sessionId . ');')):
					$userId = $MySQLi->insert_id;
					$MySQLi->multi_query('INSERT INTO server_1_players (userId, settings) VALUES (' . $userId . ', \'\');UPDATE users SET Servers = \'[{1:' . $MySQLi->insert_id . '}]\' WHERE ID = \'' . $userId . '\'');
					
					$_SESSION['server1']['user']['sessionId'] = $sessionId;
					$_SESSION['server1']['user']['email'] = $_POST['signup_email'];
					header('Location: /indexInternal.es?action=internalCompanyChoose');
				endif;
			endif;
		endif;
	endif;
endif;

require GLOBALS . 'doc.php';
require GLOBALS . 'header.php';
require FILES . 'INDEX/header.php';
require GLOBALS . 'sajax.php';
require GLOBALS . 'xajax.php';
require GLOBALS . 'headerEndJS.php';
require FILES . 'INDEX/jsSubmit.php';
echo '</head>';
require FILES . 'INDEX/bodyHeader.php';
require FILES . 'INDEX/body.php';
require FILES . 'INDEX/bodyFooter.php';
?>
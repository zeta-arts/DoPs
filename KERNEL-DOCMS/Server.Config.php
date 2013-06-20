<?php
## URL
$Config['URL'] = [
	'Default' => [
		'Require.www' => false, // www.example.com
		'SSL.enabled' => false, // https://
		'Server' => 'localhost',
		'Lang' => 'en_US' // GLOBAL.
	],
	'Other' => [
		//'example.com' => ['Require.www' => false, 'SSL.enabled' => false, 'Lang' => 'es_ES', 'MySQL' => ['host' => '127.0.0.1','user' => 'root','pass' => '','dbname' => 'cmsdb']]
	],
	'devPrivateServer' => 'localhost' // servidor privado de desarrollo
];

## SQL Server Data
$Config['MySQL'] = [
	'host' => 'localhost',
	'user' => 'root',
	'pass' => '',
	'dbname' => 'darkorbit'
];
?>
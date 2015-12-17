<?php
$dbhost = 'fsdhc.mysql.uhserver.com';
$dbuser = 'a_fsdhc';
$dbpass = '.a1b2c3d4e5';
$dbname = 'a_fsdhc';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
mysql_select_db($dbname);

?>
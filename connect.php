<?php


$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database		= 'test'; 




$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Мәліметтер базасымен қосыла алмай тұрмын.');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>
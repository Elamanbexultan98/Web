<?php
$connect= mysql_connect('localhost','root','');
mysql_select_db('test');
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$surname=$_POST['surname'];
	$Email=$_POST['Email'];
	$login=$_POST['login'];
	$password=$_POST['password'];
    $r_password=$_POST['r_password'];
	if($password==$r_password){
		$password=md5($password);
		$query=mysql_query("INSERT INTO users VALUES('','$username','$surname','Email','$login','$password')") or die(mysql_error());
	}
	else{
		die('password must match');
	}
}
?>
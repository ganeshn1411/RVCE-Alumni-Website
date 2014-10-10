<?php
//$_SESSION['username']=$uname;
session_start();
		if(/*$_SESSION['username']==NULL*/$_SESSION==NULL){
			//header('Location: index.php');
			echo "not logged in to logout"; //not logged in
		}
//session_start();
else{
$_SESSION=array();
session_destroy();
//echo "logged out";
header('Location: login.php');
	}
?>
<?php
include("../config.tpl");
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$email=$_POST['txtEmail'];
		$password=$_POST['txtPassword'];
		$captcha=$_POST['txtCaptcha'];
		if(!$email=="" && !$password=="" && !$captcha==""){
			if($_SESSION['botText']==$captcha){
				if($email=="aamirbashir.ahangar@gmail.com" && $password=="password"){
					echo "<p class='alert alert-success'>Welcome Sir</p>";
				}else{
					echo "<p class='alert alert-danger'>Invalid Credentials</p>";
				}
			}else{
				echo "<p class='alert alert-danger'>Invalid Captcha</p>";
			}
		}else{
			echo "<p class='alert alert-danger'>Please Fill All The Fields</p>";
		}
	}
?>

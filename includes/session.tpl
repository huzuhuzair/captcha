<?php
	class session{
		public static function start(){
		  if(!isset($_SESSION)){
				
				ini_set('session.cookie_httponly',true);
			session_start();
			}
		  
		  if(!isset($_SESSION['IP']))
		  	$_SESSION['IP']= gethostbyaddr($_SERVER['REMOTE_ADDR']);
		  if(!isset($_SESSION['UA']))
		  	$_SESSION['UA'] = $_SERVER['HTTP_USER_AGENT'];
			
			if(self::sessionIPSec()){
				if(self::sessionBrowserSec()){
					self::sessionTimeout();
				}else{
					unset($_SESSION[SESSION]);
					unset($_SESSION['UA']);
					header('Location: '.WEBPATH.'?RID=101');
				}
			}else{
				unset($_SESSION[SESSION]);
				unset($_SESSION['IP']);
				header('Location: '.WEBPATH.'?RID=102');
			}
	  }
	  private static function sessionIPSec(){
		  if($_SESSION['IP'] == gethostbyaddr($_SERVER['REMOTE_ADDR']))
		  	return true;
		return false;
	  }
	  private static function sessionBrowserSec(){
		  if($_SESSION['UA'] == $_SERVER['HTTP_USER_AGENT'])
		  	return true;
		 return false;
	  }
	  private static function sessionTimeout(){
		if (isset($_SESSION['active']) && 
		   (SESSIONTIME - $_SESSION['active']) > TIMEOUT) {
			unset($_SESSION['active']);
			self::start();
		}
			
	  }

	}
?>
<?php
   if($_SERVER['REQUEST_METHOD']=="POST"){
	   session_start();
		$_SESSION['botText'] =  rand(29999,99999); 
?>
	<img src="<?php echo 'images/loginVerify';?>" class="img-responsive" alt="Captcha"/>
<?php
   }
?>
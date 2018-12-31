<?php
// This file creates an image captcha

	session_start();

	$_SESSION['secure'] = rand(1000, 9999);
	

?>

<img src="generate.php" />
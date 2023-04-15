<?php

	session_start();
	session_destroy();

	setcookie("PHPSESSID", session_id());
	
	echo "<script>window.location.replace('../login.php')</script>";

?>
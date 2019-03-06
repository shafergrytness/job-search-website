<?php
	session_start();
	session_destroy();
	header('Location: /group_D/login.php');
	exit;
?>
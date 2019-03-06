<?php
	session_start();
	include 'LoginUtilities.php';
	include 'DatabaseUtilities.php';
	if (!empty($_POST['createname']) && !empty($_POST['createpass']) && !empty($_POST['createpass2']))
	{
		addNewUser($_POST['createname'], $_POST['createpass']);
		$_SESSION['createname'] = $_POST['createname'];//pass these over to questionnaire
		$_SESSION['createpass'] = $_POST['createpass'];
		header('Location: /group_D/questionnaire.php');
		exit;
	}
?>
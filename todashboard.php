<?php
	session_start();
	include 'LoginUtilities.php';
	if (!empty($_POST['loginname']) && !empty($_POST['loginpass']))
	{
		attemptLogin($_POST['loginname'], $_POST['loginpass']);
		$_SESSION['jobtitle'] = getPrefJobTitle($_SESSION['uid']);
		$_SESSION['location'] = getPrefJobLoc($_SESSION['uid']);
		header('Location: /group_D/dashboard.php');
		exit;
	}
?>
<?php

	session_start();

	if(!isset($_SESSION['lang']) && !isset($_GET['lang']))
		$_SESSION['lang'] = 'ar';
	elseif(isset($_GET['lang']) && !empty($_GET['lang']))
		if($_GET['lang'] == 'en')
			$_SESSION['lang'] = 'en';
		else
			$_SESSION['lang'] = 'ar';
	require_once "languages/". $_SESSION['lang'] . ".php";



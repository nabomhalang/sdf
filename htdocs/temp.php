<?php

	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {

		$uri = 'https://';

	} else {

		$uri = 'http://';

	}

	$uri .= $_SERVER['HTTP_HOST'];

	

	#header('Location: '.$uri.'/dashboard/');

	header('Location: '.$uri.'/phpMyAdmin-4.8.3/');

	exit;

?>
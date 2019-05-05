<?php
    phpinfo();
	
	require 'fb-src/facebook.php';
	
	$config = array();
	$config['appId'] = '435140049890925';
	$config['secret']= '3d997aaadc93d6372c7524eabb4db42d';
	$config['fileUpload'] = TRUE;
	
	$facebook = new Facebook($config);
	
	$user = $facebook->getUser();
?>
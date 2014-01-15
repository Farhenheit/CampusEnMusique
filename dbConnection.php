<?php

// connection a la base de donnee
	try {
		$db = new PDO('mysql:host=mysql2.alwaysdata.com;dbname=campusenmusiqueorsay_miniblog', '52998', 'bvxt5u');
		//$db = new PDO('mysql:host=mysql6.000webhost.com;dbname=a4115191_base', 'a4115191_user', 'cde34@5');
		//$db = new PDO('mysql:host=localhost;dbname=miniblog', 'root', '');
	} catch (Exception $e) {
		die('erreur'.$e->getMessage());
	}

?>


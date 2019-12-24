<?php
	$jpg = base64_decode($_POST['imagedata']);
	header('Content-Type: image/jpeg');
	header("Content-Disposition: attachment; filename=".$_GET['name']);
	echo $jpg;
?>
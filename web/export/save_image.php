<?php
	$png = base64_decode($_POST['imagedata']);
	header('Content-Type: image/png');
	header("Content-Disposition: attachment; filename=".$_GET['name']);
	echo $png;
?>
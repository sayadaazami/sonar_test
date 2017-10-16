<?php
	include_once 'helpers.php';

	$config = isset($_GET['config']) ? json_decode($_GET['config']) : [];
	$app = new App(['foo' => 'bar']);
	dd($app);
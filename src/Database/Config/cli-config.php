<?php

	require_once __DIR__.'/DatabaseConfig.php';

	$dbcon = new DatabaseConfig();
	$em = $dbcon->getManager();

	return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);

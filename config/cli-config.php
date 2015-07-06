<?php

	require_once __DIR__ . "/../vendor/autoload.php" ;


	use Symfony\Component\Yaml\Parser;
	use Doctrine\ORM\Tools\Setup;
	use Doctrine\ORM\EntityManager;
	use Entity\Users;

	class DatabaseConfig {

		private $em;

		public function __construct() {
			$yamlParser = new Parser();
			$dbParams = $yamlParser->parse(file_get_contents(__DIR__.'/parameters.yml'));
			$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__.'/../Entity'), true);
			$this->em = EntityManager::create($dbParams['database'], $config);
		}

		public function getManager() {
			return $this->em;
		}

	}

	$dbcon = new DatabaseConfig();
	$em = $dbcon->getManager();

	return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);

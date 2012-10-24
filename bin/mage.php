<?php
date_default_timezone_set('UTC');

$baseDir = dirname(dirname(__FILE__));

define('MAGALLANES_VERSION', '0.9.11');

// Preload
require_once $baseDir . '/Mage/spyc.php';
require_once $baseDir . '/Mage/Autoload.php';
spl_autoload_register(array('Mage_Autoload', 'autoload'));

// Clean arguments
array_shift($argv);

// Run Magallanes
$console = new Mage_Console;
$console->run($argv);

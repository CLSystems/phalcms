<?php

use CLSystems\PhalCMS\Lib\Factory;

define('BASE_PATH', dirname(__DIR__));
define('TEST_PHPUNIT_MODE', true);

require_once BASE_PATH . '/app/Lib/Factory.php';

Factory::getApplication();
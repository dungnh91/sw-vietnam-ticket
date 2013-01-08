<?php 

use Zend\Navigation\Page\Mvc;
chdir(dirname(__DIR__));

// Setup autoloading
require 'init_autoloader.php';

//Run Application
Zend\Mvc\Application::init(require 'config/application.config.php')->run();

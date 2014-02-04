<?php
 
use Zend\ServiceManager\ServiceManager;
use Zend\Mvc\Service\ServiceManagerConfig;
 
chdir(dirname(__DIR__));
 
include_once 'init_autoloader.php';
 
$testsPath = __DIR__;
if (is_readable($testsPath . '/TestConfiguration.php')) {
    require_once $testsPath . '/TestConfiguration.php';
} else {
    require_once $testsPath . '/TestConfiguration.php.dist';
}
 
$configuration = include 'config/application.config.php';
unset($configuration['module_listener_options']['config_glob_paths']);
unset($configuration['module_listener_options']['module_map_cache_enabled']);
 
$serviceManager = new ServiceManager(new ServiceManagerConfig($configuration));
$serviceManager->setService('ApplicationConfig', $configuration);
$moduleManager = $serviceManager->get('ModuleManager');
$moduleManager->loadModules();

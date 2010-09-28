<?php

if (!isset($app))
{
  $app = 'frontend';
}

require_once $_SERVER['SYMFONY'].'/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

function dmCommercePlugin_cleanup()
{
  sfToolkit::clearDirectory(dirname(__FILE__).'/../fixtures/project/cache');
  sfToolkit::clearDirectory(dirname(__FILE__).'/../fixtures/project/log');
}
dmCommercePlugin_cleanup();
register_shutdown_function('dmCommercePlugin_cleanup');

require_once dirname(__FILE__).'/../fixtures/project/config/ProjectConfiguration.class.php';
$configuration = ProjectConfiguration::getApplicationConfiguration($app, 'test', isset($debug) ? $debug : true);
sfContext::createInstance($configuration);

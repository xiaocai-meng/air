<?php

define('__ROOT__', dirname(__FILE__));
define('CORE', __ROOT__. '/core');
define('APP', __ROOT__. '/app');
define('DEBUG', TRUE);
define('MODULE', 'app');

require_once __ROOT__. '/vendor/autoload.php';

if (DEBUG) {
    //第三方错误展示类
    $whoops = new \Whoops\Run;
    $handler = new \Whoops\Handler\PrettyPageHandler;
    $handler->setPageTitle('框架出错了');
    $whoops->pushHandler($handler);
    $whoops->register();
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}


require_once CORE. '/common/function.php';

require_once CORE. '/air.php';

spl_autoload_register('core\air::load');

core\air::run();
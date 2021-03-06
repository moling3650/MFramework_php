<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-20 12:50:57
 * @version $Id$
 *
 * 入口文件
 * 1. 定义常量
 * 2. 加载函数库
 * 3. 启动框架
 */

// 定义常量
define('BASE_DIR', realpath('./'));
define('CORE', BASE_DIR.'/core');
define('CONFIG_DIR', BASE_DIR.'/core/config');
define('APP', BASE_DIR.'/app');
define('MODULE', 'app');

define('DEBUG', true);

require_once 'vendor/autoload.php';

if (DEBUG) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_error', 'On');
}
else {
    ini_set('display_error', 'Off');
}

// 加载函数库
require_once CORE.'/common/function.php';
require_once CORE.'/main.php';

spl_autoload_register('\core\main::load');
\Twig_Autoloader::register();

// 启动框架
\core\main::run();

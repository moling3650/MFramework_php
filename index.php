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
define('APP', BASE_DIR.'/app');

define('DEBUG', true);

if (DEBUG) {
    ini_set('display_error', 'On');
}
else {
    ini_set('display_error', 'Off');
}

// 加载函数库
require_once CORE.'/common/function.php';
require_once CORE.'/main.php';

// 启动框架
\core\main::run();

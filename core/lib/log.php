<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-21 21:23:38
 * @version $Id$
 */
namespace core\lib;
use core\lib\conf;

class log {
    static $class;

    static public function init()
    {
        $drive = conf::get('log', 'DRIVE');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    static public function log($message, $file='log')
    {
        self::$class->log($message, $file);
    }
}
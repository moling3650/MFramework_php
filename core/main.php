<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-20 13:31:52
 * @version $Id$
 */

namespace core;


class main {
    public static $classMap = array();

    static public function run() {
        $route = new \core\route();
    }

    // 自动加载类库
    // new \core\route() -> require_once BASE_DIR.'/core/route.php'
    static public function load($class)
    {
        $class = str_replace('\\', '/', $class);
        if(isset($classMap[$class])) {
            return ture;
        }
        else {

            $file = BASE_DIR.'/'.$class.'.php';
            if(is_file($file)) {
                require_once $file;
                self::$classMap[$class] = $class;
            }
            else {
                return false;
            }
        }
    }
}
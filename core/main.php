<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-20 13:31:52
 * @version $Id$
 */

namespace core;


class main
{
    public static $classMap = array();

    static public function run()
    {
        \core\lib\log::init();
        $route = new \core\lib\route();
        $ctrlName = $route->ctrl;
        $action = $route->action;
        $ctrlFile = APP.'/ctrl/'.$ctrlName.'Ctrl.php';
        $ctrlClass = '\\'.MODULE.'\\ctrl\\'.$ctrlName.'Ctrl';

        if(is_file($ctrlFile)) {
            require_once $ctrlFile;
            $ctrl = new $ctrlClass();
            $ctrl->$action();
            \core\lib\log::log($ctrlName.'->'.$action);
        }
        else {
            throw new \Exception("找不到控制器:".$ctrlName);

        }
    }

    // 自动加载类库
    // new \xxx\route() -> require_once BASE_DIR.'/xxx/route.php'
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

    public function display($file, $data=array())
    {
        if(is_file(APP.'/views/'.$file)) {
            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
                // 'cache' => BASE_DIR.'/log/cache',
            ));

            $twig->display($file, $data);
        }
    }
}
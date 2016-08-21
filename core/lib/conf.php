<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-21 10:38:14
 * @version $Id$
 */

namespace core\lib;

class conf
{
    static public $conf = array();
    static public function get($fileName, $name=NULL)
    {
        // 判断配置是否已缓存
        if(isset(self::$conf[$fileName])){
           $config = self::$conf[$fileName];
        }
        else {
            // 判断配置文件是否存在
            $file = BASE_DIR.'/core/config/'.$fileName.'.php';
            if(!is_file($file)) {
                throw new \Exception('没有这个配置文件');
            }
            $config = require_once $file;
            // 缓存配置
            self::$conf[$fileName] = $config;
        }
        // 如果$name没有设置则返回所有的设置
        if ($name === NULL) {
            return $config;
        }

        // 判断配置项是否存在
        if(!isset($config[$name])) {
            throw new \Exception('没有这个配置项');
        }
        // 返回配置
        return $config[$name];
    }
}
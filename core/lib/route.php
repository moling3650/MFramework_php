<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-20 14:16:38
 * @version $Id$
 *
 */

namespace core\lib;
use core\lib\conf;

class route
{

    public $ctrl;
    public $action;
    public function __construct(){
        // 获取控制器和方法
        if (!isset($_SERVER['REQUEST_URI'])) {
            die('Request URI must be setted.');
        }
        $patharr = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $this->ctrl = isset($patharr[1]) ? $patharr[1] : conf::get('route', 'CTRL');
        $this->action = isset($patharr[2]) ? $patharr[2] : conf::get('route', 'ACTION');
        // URL多余部分转换成GET参数
        $params = array_slice($patharr, 3);
        for($i=0; $i < (count($params) >> 1); $i++) {
            $_GET[$params[$i * 2]] = $params[$i * 2 + 1];
        }
    }
}
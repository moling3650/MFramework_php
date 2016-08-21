<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-20 18:34:42
 * @version $Id$
 */
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\main
{

    public function index()
    {
        $data = array(
            'title' => '视图文件',
            'data' => 'Hello world',
        );
        $this->display('index.html', $data);
    }
}
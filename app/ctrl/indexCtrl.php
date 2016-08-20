<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-20 18:34:42
 * @version $Id$
 */
namespace app\ctrl;

class indexCtrl extends \core\main
{

    public function index()
    {
        $data = 'Hello World';
        $title = '视图文件';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index.html');
    }
}
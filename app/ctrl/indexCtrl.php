<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-20 18:34:42
 * @version $Id$
 */
namespace app\ctrl;

class indexCtrl {

    public function index() {
        p('it is index');
        $model = new \core\lib\model();
        $sql = 'SELECT * FROM blogs';
        $res = $model->query($sql);
        p($res->fetchAll());
    }
}
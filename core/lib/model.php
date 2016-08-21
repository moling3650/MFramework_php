<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-20 22:12:46
 * @version $Id$
 */

namespace core\lib;
use core\lib\conf;

class model extends \medoo
{
    public function  __construct()
    {
        $option = conf::get('database');
        parent::__construct($option);

    }
}
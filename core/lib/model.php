<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-20 22:12:46
 * @version $Id$
 */

namespace core\lib;
use core\lib\conf;

class model extends \PDO
{
    public function  __construct()
    {
        $db = conf::get('database');
        try {
            parent::__construct($db['DSN'], $db['USERNAME'], $db['PASSWOD']);
        }
        catch(\PDOException $e) {
            p($e->getMessage());
        }

    }
}
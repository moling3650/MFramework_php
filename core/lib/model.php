<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-20 22:12:46
 * @version $Id$
 */

namespace core\lib;

class model extends \PDO {

    public function  __construct() {
        $dsn ='mysql:host=localhost;dbname=mblog';
        $user = 'root';
        $password = 'test';
        try {
            parent::__construct($dsn, $user, $password);
        }
        catch (\PDOException $e) {
            p($e->getMessage());
        }

    }
}
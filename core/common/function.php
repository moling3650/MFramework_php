<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-20 12:50:57
 * @version $Id$
 *
 * 公共函数库
 */

function p($var) {
    if (is_bool($var)) {
        var_dump($var);
    }
    else if (is_null($var)) {
        var_dump(NULL);
    }
    else {
        echo print_r($var, true);
    }
}
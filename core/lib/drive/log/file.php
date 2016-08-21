<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-21 21:45:36
 * @version $Id$
 */
namespace core\lib\drive\log;
use core\lib\conf;
// 文件系统
class file
{
    public $path; //日志存储位置

    public function __construct()
    {
        $this->path = conf::get('log', 'PATH');
    }

    public function log($message, $file='log')
    {
        if(!is_dir($this->path)) {
            mkdir($this->path, '0777',  true);
        }
        $message = date('Y-m-d H:i:s: ').json_encode($message).PHP_EOL;
        $file = $this->path.date('Ymd-').$file.'.php';
        return file_put_contents($file, $message, FILE_APPEND);

    }
}
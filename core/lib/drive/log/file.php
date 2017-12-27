<?php
namespace core\lib\drive\log;
use core\lib\conf;

class file
{
    public $path;

    public function __construct()
    {
        $this->path = conf::get('option', 'log')['path'];
    }

    public function log($message, $file = 'log')
    {
        if (!is_dir($this->path. '/'. date('Ymd')))
        {
            mkdir($this->path. '/'. date('Ymd'), '0777', TRUE);
        }
        return file_put_contents($this->path. '/'. date('Ymd'). '/'. $file. '.log', date('Y-m-d H:i:s'). '  '. json_encode($message). PHP_EOL, FILE_APPEND);
    }
}
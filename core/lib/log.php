<?php
namespace core\lib;

use core\lib\conf;
class log
{
    public static $class;

    public static function init()
    {
        $class = '\core\lib\drive\log\\'. conf::get('drive', 'log');
        self::$class = new $class;
    }
    
    public static function log($message, $file = 'log')
    {
        self::$class->log($message, $file);
    }
}
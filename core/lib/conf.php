<?php
namespace core\lib;

class conf
{
    public static $conf;
    
    public static function get($name, $file)
    {
        $file = __ROOT__. '/core/config/'. $file. '.php';
        //防止重复加载
        if (isset(self::$conf[$file]))
        {
            return self::$conf[$file][$name];
        } else {
            if (is_file($file)) {
                $conf = require_once $file;
                if (isset($conf[$name])) {
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                } else {
                    throw new \Exception('没有此配置项' . $name);
                }
            } else {
                throw new \Exception('找不到配置文件' . $file);
            }
        }
    }

    public static function all($file)
    {
        $file = __ROOT__. '/core/config/'. $file. '.php';
        //防止重复加载
        if (isset(self::$conf[$file]))
        {
            return self::$conf[$file];
        } else {
            if (is_file($file)) {
                $conf = require_once $file;
                if (!empty($conf)) {
                    self::$conf[$file] = $conf;
                    return $conf;
                } else {
                    throw new \Exception('此配置为空' . $file);
                }
            } else {
                throw new \Exception('找不到配置文件' . $file);
            }
        }
    }
}
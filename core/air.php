<?php
namespace core;

class air
{
    //防止重复require
    public static $classMap = [];

    public static function run() 
    {
        \core\lib\log::init();
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        if (is_file(APP. '/controller/'. $ctrlClass. 'Controller.php'))
        {
            $ctrlName = '\\'. MODULE. '\\controller\\' .$ctrlClass. 'Controller';
            $ctrl = new $ctrlName();
            $ctrl->$action();
            \core\lib\log::log('ctrl:'. $ctrlClass. '      '. 'action:'. $action);
        } else {
            throw new \Exception("找不到{$ctrlClass}控制器");
        }
    }

    //类的自动加载
    public static function load($classname)
    {
        if (isset(self::$classMap[$classname]))
        {
            return TRUE;
        } else {
            $classname = str_replace('\\', '/', $classname);
            if (is_file(__ROOT__. '/'.$classname. '.php'))
            {
                require_once __ROOT__. '/'.$classname. '.php';;
                self::$classMap[$classname] = __ROOT__. '/'.$classname. '.php';
            } else {
                return FALSE;
            }
        }
    }

    public function render($name, $array)
    {
        $str = substr(strrchr(get_class($this), '\\'), 1);
        $classname = substr($str, 0, strpos($str, 'C'));
        $file = APP. '/views/'. $classname. '/'. $name;
        $dir = APP. '/views';
        if (is_file($file))
        {
            //把数组打散
            //extract($array);
            //require_once $file;
            //使用twig引擎渲染前端页面
            $loader = new \Twig_Loader_Filesystem($dir);
            $twig = new \Twig_Environment($loader, array(
                'cache' => __ROOT__. '/cache',
                'debug' => DEBUG
            ));
            echo $twig->render($classname. '/'. $name, $array);
        }
    }

}
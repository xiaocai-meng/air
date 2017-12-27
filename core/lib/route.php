<?php
namespace core\lib;

use core\lib\conf;
class route
{
    public $ctrl;
    public $action;
    
    public function __construct()
    {
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/')
        {
            //index/index
            $path = explode('/', ltrim($_SERVER['REQUEST_URI'], '/'));
            if (isset($path[0]))
            {
                $this->ctrl = $path[0];   
            }
            if (isset($path[1]))
            {
                $this->action = $path[1];
            } else {
                $this->action = conf::get('action', 'route');
            }
            //url多余部分转成GET
            //id/1/str/2
            $count = count($path);
            $i = 2;
            while ($i < $count)
            {
                if (isset($path[$i + 1]))
                {
                    $_GET[$path[$i]] = $path[$i + 1];
                }
                $i = $i + 2;
            }
        } else {
            //www.test.com
            $this->ctrl = conf::get('controller', 'route');
            $this->action = conf::get('action', 'route');
        }
    }
}
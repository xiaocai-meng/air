<?php
namespace app\controller;

use app\model\user;
use core\lib\model;
use core\air;
use core\lib\conf;
class indexController extends air
{
    public function index()
    {
        //$model = new user();
        //dump($model->all());
        //dump($model->getById(4));
        //dump($model->updateOne(16, ['openid' => '22']));
        //dump($model);
        //dump($model->delById(16));
        //$sql = "select * from shop_user";
        //$res = $model->query($sql);
        //p($res->fetch());

        $temp = conf::get('controller', 'route');
        $temp = conf::get('action', 'route');
        //p(conf::$conf);

        $data = 'Hello World111';
        $this->render('index.html', ['data' => $data]);
    }
}
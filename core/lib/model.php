<?php
namespace core\lib;

use core\lib\conf;
class model extends \Medoo\medoo
{
    //new medoo
    public function __construct()
    {
        parent::__construct(conf::all('db'));
    }
}
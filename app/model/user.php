<?php
namespace app\model;

use core\lib\model;

class user extends model
{
    public $table = 'user';
    
    public function all()
    {
        return $this->select($this->table, '*');
    }

    public function getById($id)
    {
        return $this->get($this->table, '*', ['userid' => $id]);
    }

    public function updateOne($id, $data)
    {
        return $this->update($this->table, $data, ['userid' => $id]);
    }

    public function delById($id)
    {
        return $this->delete($this->table, ["AND" => ["userid" => $id]]);
    }
}
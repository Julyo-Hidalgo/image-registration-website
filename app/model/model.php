<?php

namespace app\model;

use app\dao\dao;

class model{
    public $id, $file, $rows;
    
    public function save(){
        (new dao())->insert($this);
    }
}
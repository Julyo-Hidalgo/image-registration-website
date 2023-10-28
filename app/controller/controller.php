<?php

namespace app\controller;

class controller{
    
    public static function save(){
        print_r($_POST);

        print_r($_FILES);

        echo(var_dump($_FILES["image"]));

        $image = base64_encode(addslashes(file_get_contents($_FILES['image']['tmp_name'])));

        echo"<img src= data:image/jpeg;base64," . $image . ">";
    }

}
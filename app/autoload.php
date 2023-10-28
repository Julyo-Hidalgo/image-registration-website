<?php

spl_autoload_register(
    function ($class_name){
        $class_name = str_replace("\\", "/", $class_name);

        $file = BASEDIR . $class_name . '.php';

        if(file_exists($file)){
            include $file;
        }else{
            exit("file : " . $file . " not find!");
        }
    }
);
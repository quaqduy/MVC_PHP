<?php

class Controller{
    public function model($model){
        // handle Database
        require_once "./app/models/".$model.".php";
        return new $model;
    }

    public function view(){
        return 0;
    }
}

?>
<?php

class App {
    protected $controller = "Home";
    protected $action = "getHome";
    protected $params = [];

    function __construct() {

        // Array ( [0] => controller [1] => action [2]... => params... )
        $arrUrl = $this->urlHandler();

        // Handle controller
        if(isset($arrUrl[0])){
            if(file_exists("./app/controllers/".$arrUrl[0].".php")){
                $this->controller = $arrUrl[0];
                unset($arrUrl[0]);
            }
        }
       
        require_once("./app/controllers/".$this->controller.".php");
        $this->controller = new $this->controller;
        
        // Handle action
        if(isset($arrUrl[1])){
            if(method_exists($this->controller, $arrUrl[1])){
                $this->action = $arrUrl[1];
            }
            unset($arrUrl[1]);
        }

        // Handle params
        $this->params = $arrUrl ? array_values($arrUrl) : [];
        call_user_func_array([$this->controller, $this->action], $this->params );
    }

    function urlHandler(){

        // Home/action/params
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}

?>
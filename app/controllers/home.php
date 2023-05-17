HOME PAGE

<?php 

class Home{
    function __construct(){

    }

    public static function getHome(){
        echo"Get home page";
    }

    public static function show($index){
        echo"Show action item ";
        print_r($index);
    }

    public static function news(){
        echo "New action";
    }
}

?>
<?php 

class Home extends Controller{
    function getHome(){
        $data = $this->model('studentModel');
        echo  $data->getStudent();
    }

    function show(){
    }

    function news(){
        echo "New action";
    }
}

?>
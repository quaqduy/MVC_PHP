<?php 

class Home extends Controller{
    function getHome(){
        $data = $this->model('studentModel');
        $listStudent = $data->getStudent();

        print_r($listStudent);

        $this->view('home',["dataStudent"=>$listStudent]);
    }

    function show(){
    }

    function news(){
        echo "New action";
    }
}

?>
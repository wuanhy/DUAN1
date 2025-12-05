<?php
namespace Src\Controllers;
use Src\Models\hdv;

class hdvController
{
    public function index()
    {
       
        $view = "hdv/tours";
        require_once block_path('main');
    }
    public function profile(){
        $view = "hdv/profile";
        require_once block_path('main');
    }
        public function tours(){
        if(!isset($_SESSION['userLogin'])){
            header("Location: ".BASE_URL."login");
            exit();
        }

        $guide_id = $_SESSION['userLogin']['id'];
        $model = new Hdv();
        $jobs = $model->getJobs($guide_id);

        $view = "hdv/tours";
        require_once block_path('main');
    }


}
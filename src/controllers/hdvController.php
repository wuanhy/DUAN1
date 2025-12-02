<?php
namespace Src\Controllers;

class hdvController
{
    public function index()
    {
       
        $view = "hdv/guide";
        require_once block_path('main');
    }
    public function profile(){
        $view = "hdv/profile";
        require_once block_path('main');
    }
    public function tours(){
        $view = "hdv/tours";
        require_once block_path('main');
    }

}
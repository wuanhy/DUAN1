<?php
namespace Src\Controllers;

class DashboardController
{
    public function index()
    {
       
        $title = "Trang dashboard";
        $view = "admin/dashboard";
        require_once block_path('main');
    }
}
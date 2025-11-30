<?php

namespace Src\Controllers;
// require_once PATH_MODEL . 'TourModel.php';

class DashboardController
{
    public function index()
    {
        $tourModel = new \Src\Models\TourModel();
        $tb_danhmuc = $tourModel->getAll();

        $title = "Trang dashboard";
        $view = "admin/dashboard";
        require_once block_path('main');
    }

}

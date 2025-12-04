<?php
namespace Src\Controllers;
use Src\Models\TourStatisticsModel;

class TourStatisticsController{
    public function index(){


        $lt = new TourStatisticsModel();
        $listdata = $lt->getAll();
        $view = 'admin/list_thong_ke';
        require_once block_path('main');
    }

}
?>
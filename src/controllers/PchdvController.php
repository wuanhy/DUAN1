<?php
namespace Src\Controllers;
use Src\Models\Hdv;

class PchdvController{
    public function index(){
        $hdvModel = new Hdv();
        
        $listdata = $hdvModel->getAll();
        $listHdv = $hdvModel->getHdv();

        $view = "admin/hdv";
        require_once block_path('main');
    }
}

<?php 
namespace Src\Controllers;

use Src\Models\Time; 
class TuorController{
    public function index(){
        $time = new Time();
        $listdata = $time->getList();

         $view = 'admin/list_time';
        require_once block_path('main');
    }
    
}
?>
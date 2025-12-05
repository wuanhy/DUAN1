<?php
namespace Src\Controllers;
use Src\Models\Hdv;

class PchdvController{

    public function assign(){

        $errors = [];
        $model = new hdv();

        if($_SERVER['REQUEST_METHOD']=="POST"){

            $booking_id = $_POST['booking_id'] ?? null;
            $guide_id   = $_POST['guide_id'] ?? null;

            if(!$guide_id){
                $errors[$booking_id]['guide_error'] = "Vui lòng chọn HDV";
            }
            if($model->checkAssign($booking_id,$guide_id)){
                $errors[$booking_id]['assigned'] = "HDV này đã được phân công ";
            }

            if(empty($errors)){
                $hdvModel = new Hdv();
                $hdvModel->assign($booking_id, $guide_id);

                $_SESSION['success']="Phân công thành công!";
                header("Location: ". BASE_URL ."admin-hdv");
                exit();
            }
        }

        $listdata = $model->getAll();
        $listHdv = $model->getHdv();

        $view = "admin/hdv";
        require_once block_path('main');
    }
}

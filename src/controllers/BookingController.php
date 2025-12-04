<?php
namespace Src\Controllers;
use Src\Models\Booking;

class BookingController{
   public function create() {
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $errors = [];
            $old=$_POST;
            $today = date("Y-m-d");
            if(empty($_POST['tour_id'])){
                $errors['tour_id']="Vui lòng chọn tour";
            }
            if(empty($_POST['ngay_dien_ra'])){
                $errors['ngay_dien_ra']="Vui lòng chọn ngày diễn ra";
            }elseif ($_POST['ngay_dien_ra'] <= $today){
                $errors['ngay_dien_ra'] = "Ngày diễn ra không hợp lệ ";
            }
            if(empty($_POST['so_cho'])){
                $errors['so_cho']="Vui lòng chọn số chỗ";
            }
               $tour = new Booking();
                if(empty($errors)){
                    $tour->create(
                        $_POST['tour_id'],
                        $_POST['ngay_dien_ra'],
                        $_POST['so_cho']
                    );
                    $_SESSION['success']="Đặt thành công";
                    header("Location:" .BASE_URL .'admin-hdv');
                    exit();
                }

                }
     
        $tourModel = new Booking();
        $listdata = $tourModel->getAll();

        $view = 'admin/booking';
        require_once block_path('main');
    }

}
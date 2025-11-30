<?php

namespace Src\Controllers;

// use Category;

class TourController
{
    public function adminTourList()
    {

        $tour = new \Src\Models\TourModel();
        $tb_danhmuc = $tour->getAll();

        $title = "Danh sách Tour";
        $view = "admin/tourlist";
        require_once block_path('main');
    }

    public function adminAddTour()
    {
        // $errors = [];
        // $old = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["ten_tour"]) || empty($_POST["dm_id"]) || empty($_POST["noi_xuat_phat"]) || empty($_POST["diem_den"]) || empty($_POST["so_cho_toi_da"])) {
                $_SESSION['error'][] = "Điền thông tin";
                header("Location:" . BASE_URL . '?act=admin-addtour');
                exit();
            }

            $tour = new \Src\Models\TourModel();
            $file = $_FILES['anh_tour'];
            $path = "";
            if (isset($file) && $file['error'] === UPLOAD_ERR_OK) {
                $newName = time() . $file['name'];
                $path = 'public/images/' . $newName;
                move_uploaded_file($file['tmp_name'], $path);
            }
            $tour->insertTour(
                $_POST['ma_tour'],
                $_POST['ten_tour'],
                $_POST['dm_id'],
                $_POST['gia_co_ban'],
                $_POST['so_cho_toi_da'],
                $path,
                $_POST['noi_xuat_phat'],
                $_POST['diem_den'],
                $_POST['mo_ta_tour'],
            );
            $_SESSION['success'][] = 'Thêm thành công';
            header("Location:" . BASE_URL . '?act=admin-tourlist');
            exit();
        }
        $category = new \Src\Models\Category();
        $tb_danhmuc = $category->getAll();

        $title = "Thêm tour mới";
        $view = 'admin/addtour';
        require_once block_path('main');
    }

    public function adminDeleteTour()
    {
        $tour = new \Src\Models\TourModel();
        $tour_id = $_GET['tour_id'];
        if($tour_id){
            $data = $tour->getOne($tour_id);
            $tour -> delete($tour_id);
        }
        // $data = $tour->delete($_GET['tour_id']);
        if (!empty($data['anh_tour']) && file_exists($data['anh_tour'])) {
            unlink($data['anh_tour']);
        }
        header("Location:" . BASE_URL . '?act=admin-tourlist');
        exit();
    }

    public function adminEditTour()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["ten_tour"]) || empty($_POST["dm_id"]) || empty($_POST["noi_xuat_phat"]) || empty($_POST["diem_den"]) || empty($_POST["so_cho_toi_da"])) {
                $_SESSION['error'][] = "Điền thông tin";
                header("Location:" . BASE_URL . '?act=admin-edittour&tour_id=' . $_GET['tour_id']);
                exit();
            }

            $tour = new \Src\Models\TourModel();
            $data = $tour->getOne($_GET['tour_id']);
            $file = $_FILES['anh_tour'];
            $path = $data['anh_tour'];
            if (isset($file) && $file['error'] === UPLOAD_ERR_OK) {
                $newName = time() . $file['name'];
                $path = 'public/images/' . $newName;
                move_uploaded_file($file['tmp_name'], $path);

                if (!empty($data['anh_tour']) && file_exists($data['anh_tour'])) {
                    unlink($data['anh_tour']);
                }
            }
            $tour->updateTour(
                $_GET['tour_id'],
                $_POST['ma_tour'],
                $_POST['ten_tour'],
                $_POST['dm_id'],
                $_POST['gia_co_ban'],
                $_POST['so_cho_toi_da'],
                $path,
                $_POST['noi_xuat_phat'],
                $_POST['diem_den'],
                $_POST['mo_ta_tour'],
            );
            $_SESSION['success'][] = 'Cập nhật thành công';
            header("Location:" . BASE_URL . '?act=admin-tourlist');
            exit();
        }

        $category = new \Src\Models\Category();
        $tb_danhmuc = $category->getAll();

        $tour = new \Src\Models\TourModel();
        $data = $tour->getOne($_GET['tour_id']);

        $title = "Cập nhật Tour";
        $view = "admin/edittour";
        require_once block_path('main');
    }

    public function adminBookingList()
    {
        $title = "Danh sách đặt chỗ";
        $view = "admin/bookinglist";
        require_once block_path('main');
    }

    public function adminRefundManage()
    {
        $title = "Quản lý hoàn tiền";
        $view = "admin/refundmanage";
        require_once block_path('main');
    }
}

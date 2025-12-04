<?php

namespace Src\Controllers;

// use Category;

class TourController
{
<<<<<<< HEAD
    public function index()
=======
    public function list()
>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708
    {

        $tour = new \Src\Models\TourModel();
        $tb_danhmuc = $tour->getAll();

        $title = "Danh sách Tour";
        $view = "admin/list_tour";
        require_once block_path('main');
    }

    public function create()
    {
        $errors = [];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
<<<<<<< HEAD
            $old=$_POST;
           if (empty($_POST["ten_tour"])) {
                    $errors['ten_tour'] = "Vui lòng nhập tên tour";
                }

                if (empty($_POST["dm_id"])) {
                    $errors['dm_id'] = "Vui lòng chọn danh mục";
                }

                if (empty($_POST["noi_xuat_phat"])) {
                    $errors['noi_xuat_phat'] = "Vui lòng nhập nơi xuất phát";
                }

                if (empty($_POST["diem_den"])) {
                    $errors['diem_den'] = "Vui lòng nhập điểm đến";
                }

                if (empty($_POST["so_cho_toi_da"])) {
                    $errors['so_cho_toi_da'] = "Vui lòng nhập số chỗ tối đa";
                }
                if (empty($_POST["ma_tour"])) {
                    $errors['ma_tour'] = "Vui lòng nhập mã tour";
                }
                if (empty($_POST["mo_ta_tour"])) {
                    $errors['mo_ta_tour'] = "Vui lòng nhập mô tả tour";
                }
                if (empty($_POST["gia_co_ban"])) {
                    $errors['gia_co_ban'] = "Vui lòng nhập giá tour";
                }
                if (empty($_FILES['anh_tour']['name'])) {
                        $errors['anh_tour'] = "Vui lòng chọn ảnh";
                }
                 if (empty($_POST["so_ngay"])) {
                    $errors['so_ngay'] = "Vui lòng nhập số ngày";
                }

=======
            if (empty($_POST["ten_tour"]) || empty($_POST["dm_id"]) || empty($_POST["noi_xuat_phat"]) || empty($_POST["diem_den"]) || empty($_POST["so_cho_toi_da"])) {
                $_SESSION['error'][] = "Điền thông tin";
                header("Location:" . BASE_URL . 'admin-create-tour');
                exit();
            }
>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708

            $tour = new \Src\Models\TourModel();
            if(empty($errors)){
                if(!empty($_FILES['anh_tour']['name'])){
                $file = $_FILES['anh_tour'];
                $newName = time() . $file['name'];
                $path = 'public/uploads/' . $newName;
                move_uploaded_file($file['tmp_name'],$path);
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
                $_POST['so_ngay'],

            );
<<<<<<< HEAD
            $_SESSION['success'] = 'Thêm thành công';
=======
            $_SESSION['success'][] = 'Thêm thành công';
>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708
            header("Location:" . BASE_URL . 'admin-list-tour');
            exit();
        }
    }
        $category = new \Src\Models\Category();
        $tb_danhmuc = $category->getAll();

<<<<<<< HEAD
        $view = 'admin/create_tour';
        require_once block_path('main');
}
=======
        $title = "Thêm tour mới";
        $view = 'admin/create_tour';
        require_once block_path('main');
    }

>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708
    public function delete()
    {
        $tour = new \Src\Models\TourModel();
        $tour_id = $_GET['tour_id'];
        $data = $tour->delete($_GET['tour_id']);

        if (!empty($data['anh_tour']) && file_exists($data['anh_tour'])) {
            unlink($data['anh_tour']);
        }
<<<<<<< HEAD
        $_SESSION['success']="Xóa thành công";
=======
>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708
        header("Location:" . BASE_URL . 'admin-list-tour');
        exit();
    }

    public function update()
    {
        $errors = [];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
<<<<<<< HEAD
            $old=$_POST;

            if (empty($_POST["ten_tour"])) {
                    $errors['ten_tour'] = "Vui lòng nhập tên tour";
                }

                if (empty($_POST["dm_id"])) {
                    $errors['dm_id'] = "Vui lòng chọn danh mục";
                }

                if (empty($_POST["noi_xuat_phat"])) {
                    $errors['noi_xuat_phat'] = "Vui lòng nhập nơi xuất phát";
                }

                if (empty($_POST["diem_den"])) {
                    $errors['diem_den'] = "Vui lòng nhập điểm đến";
                }

                if (empty($_POST["so_cho_toi_da"])) {
                    $errors['so_cho_toi_da'] = "Vui lòng nhập số chỗ tối đa";
                }
                if (empty($_POST["ma_tour"])) {
                    $errors['ma_tour'] = "Vui lòng nhập mã tour";
                }
                if (empty($_POST["mo_ta_tour"])) {
                    $errors['mo_ta_tour'] = "Vui lòng nhập mô tả tour";
                }
                if (empty($_POST["gia_co_ban"])) {
                    $errors['gia_co_ban'] = "Vui lòng nhập giá tour";
                }
                if (empty($_POST["so_ngay"])) {
                    $errors['so_ngay'] = "Vui lòng nhập số ngày";
                }
=======
            if (empty($_POST["ten_tour"]) || empty($_POST["dm_id"]) || empty($_POST["noi_xuat_phat"]) || empty($_POST["diem_den"]) || empty($_POST["so_cho_toi_da"])) {
                $_SESSION['error'][] = "Điền thông tin";
                header("Location:" . BASE_URL . 'admin-update-tour&tour_id=' . $_GET['tour_id']);
                exit();
            }
>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708

            $tour = new \Src\Models\TourModel();
            $data = $tour->getOne($_GET['tour_id']);

            $file = $_FILES['anh_tour'];
            $path = $data['anh_tour'];

            if(isset($file) && $file['error']===UPLOAD_ERR_OK){
                if(!empty($data['anh_tour']) && file_exists($data['anh_tour'])){
                        unlink($data['anh_tour']);
                
                }
                $newName = time() . $file['name'];
                $path = 'public/uploads/' . $newName;
                move_uploaded_file($file['tmp_name'],$path);

    }
        if(empty($errors)){
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
                $_POST['so_ngay'],

            );
<<<<<<< HEAD
            $_SESSION['success'] = 'Cập nhật thành công';
            header("Location:" . BASE_URL . 'admin-list-tour');
=======
            $_SESSION['success'][] = 'Cập nhật thành công';
            header("Location:" . BASE_URL . 'admin-tourlist');
>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708
            exit();
        }
    }
        $category = new \Src\Models\Category();
        $tb_danhmuc = $category->getAll();

        $tour = new \Src\Models\TourModel();
        $data = $tour->getOne($_GET['tour_id']);

<<<<<<< HEAD
        $view = "admin/update_tour";
=======
        $title = "Cập nhật Tour";
        $view = "admin/update_tour";
        require_once block_path('main');
    }

    public function booking()
    {
        $title = "Danh sách đặt chỗ";
        $view = "admin/booking";
        require_once block_path('main');
    }

    public function refund()
    {
        $title = "Quản lý hoàn tiền";
        $view = "admin/refund";
>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708
        require_once block_path('main');
    }
}
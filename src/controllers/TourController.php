<?php
namespace Src\Controllers;
use Src\Models\TourModel;
class TourController{
    public function thongKe(){
        $type = isset($_GET['type']) ? $_GET['type'] : 'sap_dien_ra';
        $tieu_de = "Danh Sach Tour";
        switch($type){
            case 'sap_dien_ra':
                $tieu_de .= " Sap Dien Ra (Chua khoi Hanh)";
                break;
            case 'dang_dien_ra':
                $tieu_de .= " Dang Dien Ra (Dang Chay)";
                break;
            case 'da_hoan_thanh':
                $tieu_de .= " Da Hoan Thanh (Da Ve)";
                break;
            default:
                $tieu_de = "Danh Sach Tour";
        }
        $list_tour = TourModel::getByStatus($type);
        include PATH_VIEW . 'admin/tour/list_thong_ke.php';
    }
    public function addLich(){
        $ds_tour = TourModel::getAllTours();
        include PATH_VIEW . 'admin/tour/add.php';
    }
    public function storeLich(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $tour_id= $_POST['tour_id'];
            $ngay_khoihanh = $_POST['ngay_khoihanh'];
            $so_cho = $_POST['so_cho'];
            // Tinh ngay_ketthuc dua tren ngay_khoihanh va so_ngay
            $tour= TourModel::getTourById($tour_id);
            $so_ngay = $tour['so_ngay'] ?? 1;
            //tinh ngay ve: di+ so ngay-1
            $date = new \DateTime($ngay_khoihanh);
            $date->add(new \DateInterval('P' . ($so_ngay - 1) . 'D'));
            $ngay_ketthuc = $date->format('Y-m-d');

            // Luu vao CSDL
            TourModel::insert($tour_id, $ngay_khoihanh, $ngay_ketthuc, $so_cho);
            // Chuyen huong ve danh sach
            header("Location: index.php?controller=tour&act=thongKe");
            exit();
        }
    }
}
?>
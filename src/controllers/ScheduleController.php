<?php

namespace Src\Controllers;

class ScheduleController
{
    public function adminScheduleTour()
    {
        $scheduleModel = new \Src\Models\ScheduleModel();
        $listSchedul = $scheduleModel->getAllSchedule();

        $title = "Danh sách lịch trình các chuyến Tour";
        $view = "admin/scheduletour";
        require_once block_path('main');
    }

    public function adminAddScheduleTour()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["tour_id"]) || empty($_POST["ngay_thu"]) || empty($_POST["tieu_de"]) || empty($_POST["noi_dung"])) {
                $_SESSION['error'][] = "Điền thông tin";
                header("Location:" . BASE_URL . '?act=admin-addscheduletour');
                exit();
            }
            $schedule = new \Src\Models\ScheduleModel();
            $schedule->insertSchedule(
                $_POST['tour_id'],
                $_POST['ngay_thu'],
                $_POST['tieu_de'],
                $_POST['noi_dung'],
            );
            $_SESSION['success'][] = 'Thêm thành công';
            header("Location:" . BASE_URL . '?act=admin-scheduletour');
            exit();
        }

        $tour = new \Src\Models\TourModel();
        $listTour = $tour->getAll();

        $title = "Thêm lịch trình các chuyến Tour";
        $view = "admin/addscheduletour";
        require_once block_path('main');
    }

    public function adminEditSchedule()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["danhmuc"]) || empty($_POST["ngay_thu"]) || empty($_POST["tieu_de"]) || empty($_POST["noi_dung"])) {
                $_SESSION['error'][] = "Điền thông tin";
                header("Location:" . BASE_URL . '?act=admin-edit-schedule&ltr_id=' . $_GET['ltr_id']);
                exit();
            }

            $schedule = new \Src\Models\ScheduleModel();
            $data = $schedule->getOne($_GET['ltr_id']);

            $schedule->updateSchedule(
                $_GET['ltr_id'],
                $_POST['danhmuc'],
                $_POST['ngay_thu'],
                $_POST['tieu_de'],
                $_POST['noi_dung'],
            );
            $_SESSION['success'][] = 'Cập nhật thành công';
            header("Location:" . BASE_URL . '?act=admin-scheduletour');
            exit();
        }
        $tour = new \Src\Models\TourModel();
        $listTour = $tour->getAll();

        $schedule = new \Src\Models\ScheduleModel();
        $data = $schedule->getOne($_GET['ltr_id']);

        $title = "Cập nhật lịch trình các chuyến Tour";
        $view = "admin/editscheduletour";
        require_once block_path('main');
    }

    public function adminDeleteSchedule()
    {
        $scheduleModel = new \Src\Models\ScheduleModel();
        $data = $scheduleModel->delete($_GET['ltr_id']);

        header("Location:" . BASE_URL . '?act=admin-scheduletour');
        exit();
    }
}

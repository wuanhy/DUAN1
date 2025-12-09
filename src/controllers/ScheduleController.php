<?php

namespace Src\Controllers;

class ScheduleController
{
    public function index()
    {
        $scheduleModel = new \Src\Models\ScheduleModel();
        $listSchedul = $scheduleModel->getAllSchedule();

        $group = [];
        foreach ($listSchedul as $schedule) {
            $tourName = $schedule['danhmuc'];
            if (!isset($group[$tourName])) {
                $group[$tourName] = [
                    'ten_tour' => $tourName,
                    'details' => [],
                ];
            }
            $group[$tourName]['details'][] = $schedule;
        }

        $title = "Danh sách lịch trình các chuyến Tour";
        $view = "admin/list_schedule";
        require_once block_path('main');
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $tourId = $_POST['tour_id'] ?? null;
            $errors = [];
            $old = $_POST;

            $schedules = $_POST['schedule'] ?? [];
            $uploaded_files = $_FILES['file_anh_ngay'] ?? [];

            if (empty($tourId)) {
                $errors['tour_id'] = "Vui lòng chọn 1 tour";
            }
            foreach ($schedules as $index => $schedule) {
                if (empty($schedule['ngay_thu'])) {
                    $errors['ngay_thu'][$index] = "Vui lòng nhập ngày thứ";
                }
                if (empty($schedule['dia_diem'])) {
                    $errors['dia_diem'][$index] = "Vui lòng nhập địa điểm";
                }
                if (empty($schedule['hoat_dong'])) {
                    $errors['hoat_dong'][$index] = "Vui lòng nhập hoạt động";
                }
                if (!isset($uploaded_files['name'][$index]) || empty($uploaded_files['name'][$index])) {
                    $errors['anh'][$index] = "Vui lòng chọn ảnh";
                }
            }
            if (!empty($errors)) {
                $_SESSION['errors'] = $errors;
                $_SESSION['old'] = $old;
                header('Location: ' . BASE_URL . "admin-create-schedule?tour_id=" . $tourId);
                exit();
            }
            $scheduleModel = new \Src\Models\ScheduleModel();
            $count = 0;

            foreach ($schedules as $index => $schedule) {
                $path = "";

                if (isset($uploaded_files['error'][$index]) && $uploaded_files['error'][$index] === UPLOAD_ERR_OK) {
                    $fileName = $uploaded_files['name'][$index];
                    $tmpName = $uploaded_files['tmp_name'][$index];

                    $newName = time() . '_' . $fileName;
                    $destination = 'public/uploads/' . $newName;
                    if (move_uploaded_file($tmpName, $destination)) {
                        $path = $destination;
                    }
                }
                $scheduleModel->insertSchedule(
                    $tourId,
                    $schedule['ngay_thu'],
                    $schedule['dia_diem'],
                    $schedule['hoat_dong'],
                    $path,
                );
                $count++;
            }
            $_SESSION['success'][] = "Đã thêm thành công lịch trình";
            header("Location: " . BASE_URL . "admin-list-schedule");
            exit();
        }
        $tour = new \Src\Models\TourModel();
        $listTour = $tour->getAll();

        $errors = $_SESSION['errors'] ?? [];
        $old = $_SESSION['old'] ?? [];
        unset($_SESSION['errors'], $_SESSION['old']);

        $title = "Thêm lịch trình các chuyến Tour";
        $view = "admin/create_schedule";
        require_once block_path('main');
    }

    public function update()
    {
        $tourId = $_POST['tour_id'] ?? $_GET['tour_id'];
        if (!$tourId) {
            $errors['tour_id'] = "Không tìm thấy Tour";
            header('Location: ' . BASE_URL . "admin-list-schedule");
            exit();
        }
        $scheduleModel = new \Src\Models\ScheduleModel();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $errors = [];
            $schedules = $_POST['schedule'];
            $uploaded_files = $_FILES['file_anh_ngay'];

            foreach ($schedules as $index => $schedule) {
                if (empty($schedule['ngay_thu'])) {
                    $errors['ngay_thu'][$index] = "Vui lòng nhập ngày thứ";
                }
                if (empty($schedule['dia_diem'])) {
                    $errors['dia_diem'][$index] = "Vui lòng nhập địa điểm hoạt động";
                }
                if (empty($schedule['hoat_dong'])) {
                    $errors['hoat_dong'][$index] = "Vui lòng nhập hoạt đông";
                }

                $anhCux = !empty($schedule['anh_cu']);
                $coFileMoi = isset($uploaded_files['name'][$index]) && !empty($uploaded_files['name'][$index]);

                if (!$anhCux && !$coFileMoi) {
                    $errors['anh'][$index] = "Vui lòng chọn ảnh";
                }
            }

            if (!empty($errors)) {
                $_SESSION['errors'] = $errors;
                $_SESSION['old'] = $_POST;
                header('Location: ' . BASE_URL . "admin-update-schedule?tour_id=" . $tourId);
                exit();
            }
            $update_count = 0;
            $insert_count = 0;

            foreach ($schedules as $index => $schedule) {
                $ltr_id = $schedule['ltr_id'];
                $path = $schedule['anh_cu'];

                if (isset($uploaded_files['error'][$index]) && $uploaded_files['error'][$index] === UPLOAD_ERR_OK) {
                    $fileName = time() . '_' . $uploaded_files['name'][$index];
                    $destination = 'public/uploads/' . $fileName;
                    if (move_uploaded_file($uploaded_files['tmp_name'][$index], $destination)) {
                        $path = $destination;
                    }
                }

                if (!empty($ltr_id)) {
                    $scheduleModel->updateSchedule(
                        $ltr_id,
                        $tourId,
                        $schedule['ngay_thu'],
                        $schedule['dia_diem'],
                        $schedule['hoat_dong'],
                        $path,
                    );
                    $update_count++;
                } else {
                    $scheduleModel->insertSchedule(
                        $tourId,
                        $schedule['ngay_thu'],
                        $schedule['dia_diem'],
                        $schedule['hoat_dong'],
                        $path,
                    );
                    $insert_count++;
                }
            }
            $_SESSION['success'][] = "Cập nhật thành công";
            header("Location: " . BASE_URL . "admin-list-schedule");
            exit();
        }

        $schedules = $scheduleModel->getAllScheduleByTourId($tourId);

        $data = [
            'schedule' => $schedules,
            'tour_id' => $tourId,
            'ten_tour' => $schedules[0]['ten_tour'],
        ];

        $errors = $_SESSION['errors'] ?? [];
        $old = $_SESSION['old'] ?? [];
        unset($_SESSION['errors'], $_SESSION['old']);

        $title = "Cập nhật lịch trình các chuyến Tour";
        $view = "admin/update_schedule";
        require_once block_path('main');
    }

    public function delete()
    {
        $tour_id = $_GET['tour_id'];
        if (!$tour_id) {
            $_SESSION['error_message'] = "Thiếu Tour ID để xóa lịch trình.";
            header("Location: " . BASE_URL . "admin-list-schedule");
            exit();
        }
        $scheduleModel = new \Src\Models\ScheduleModel();
        $schedules = $scheduleModel->getAllScheduleByTourId($tour_id);
        foreach ($schedules as $sch) {
            if (!empty($sch['anh']) && file_exists($sch['anh'])) {
                unlink($sch['anh']);
            }
        }
        $scheduleModel->delete($tour_id);

        $_SESSION['success'][] = "Xóa thành công!";
        header("Location:" . BASE_URL . 'admin-list-schedule');
        exit();
    }
}

<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/css/style.css"> 
 

</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-2">
            <?php include "views/admin/sidebar.php"; ?>
        </div>
        <div class="col-10" style="padding-top: 100px;">
        <div class="create-trans-container">
           <h1 class="fw-bold d-flex align-items-center gap-3 mb-4" style="color: #0d6efd;">
                <i class="bi bi-plus-circle-fill fs-1 text-primary"></i>
                Thêm lịch trình mới
            </h1>
            <form action="<?= BASE_URL .'admin-create-schedule' ?>" method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-end mb-3"> 
                    <a href="<?=BASE_URL .'admin-scheduletour' ?>" class="btn btn-primary btn-sm">Quay lai</a> 
                </div>

               <div class="container my-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="mb-3">
                <label for="tour-name" class="form-label fw-bold">Tên Tour*</label>
                <input type="text" class="form-control" id="tour-name" name="tour-name"  placeholder="Nhập tên tour">
            </div>
            <div class="mb-4">
                <label for="select-tour" class="form-label fw-bold">Chọn Tour*</label>
                <select class="form-select" id="select-tour" name="select-tour" >
                    <option selected disabled>-- Chọn Tour --</option>
                    </select>
            </div>

            <hr class="my-4">

            <div id="days-container">
                <div class="day-section border p-3 mb-3 rounded" data-day="1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="text-primary mb-0">🗓️ Ngày thứ 1</h5>
                        <button type="button" class="btn btn-sm btn-danger remove-day-btn" data-day-index="1" style="display: none;">
                            <i class="bi bi-trash"></i> - Xóa Ngày
                        </button>
                    </div>
                    
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="activity-1" class="form-label">Hoạt động</label>
                            <input type="text" class="form-control" id="activity-1" name="activity-1" placeholder="Ví dụ: Tham quan Lăng Bác">
                        </div>
                        <div class="col-md-6">
                            <label for="location-1" class="form-label">Địa điểm</label>
                            <input type="text" class="form-control" id="location-1" name="location-1" placeholder="Nhập địa điểm">
=======

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Travel - Trang chủ</title>
</head>

<body>
    <div class="containerr">
        <div class="row">
            <div class="col-2">
                <?php include "views/admin/sidebar.php"; ?>
            </div>
            <div class="col-10" style="padding-top: 100px;">
                <div class="tour-list-container">
                    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
                        <h1 class="h2">Thêm Lịch trình Khởi hành Mới</h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="p-4 rounded shadow-sm" style="background-color: #F8E8E8;">
                                <form action="admin-create-schedule" method="POST" class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="tour_id" class="form-label fw-bold">Chọn Tour:</label>
                                        <select class="form-select" id="tour_id" name="tour_id" required>
                                            <option value="" disabled selected>-- Chọn một Tour để thiết lập lịch trình
                                                --</option>
                                            <?php foreach ($listTour as $value) : ?>
                                            <option value="<?= $value['tour_id'] ?>">
                                                <?= $value['ten_tour'] ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ngay_thu" class="form-label fw-bold">Ngày thứ:</label>
                                        <input type="text" class="form-control" id="ngay_thu" name="ngay_thu" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tieu_de" class="form-label fw-bold">Tiêu đề</label>
                                        <input type="text" class="form-control" id="tieu_de" name="tieu_de" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="noi_dung" class="form-label fw-bold">Nội dung</label>
                                        <textarea type="text" class="form-control" id="noi_dung" name="noi_dung"
                                            required></textarea>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2">
                                        <button type="submit" name="btn-create-schedule" class="btn btn-success">
                                            Lưu Lịch trình
                                        </button>
                                        <a href="<?= BASE_URL . 'admin-list-schedule' ?>" class="btn btn-secondary">
                                            Quay lại
                                        </a>
                                    </div>
                                </form>
                            </div>
>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD

            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                <button type="button" id="add-day-btn" class="btn btn-success me-md-2">
                    <i class="bi bi-plus-circle"></i> + Thêm ngày mới
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Lưu Lịch Trình
                </button>
            </div>
        </div>
    </div>
</div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <style>
            body {
   background: linear-gradient(to right, #CFE8FF, #FAD4EC);
    min-height: 100vh;
    margin: 0;
    padding: 0;
}
    </style>
   <script src="public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
=======
        </div>
    </div>
    <style>
    * {
        box-sizing: border-box;
    }

    .col-10 {
        padding-right: 0 !important;
        padding-left: 0 !important;
        padding-top: 100px;
    }

    .tour-list-container {
        width: 95%;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        border-radius: 5px;
    }
    </style>
</body>

</html>
>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708

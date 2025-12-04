<!DOCTYPE html>
<html lang="en">

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
                                <form action="<?= BASE_URL . 'admin-update-schedule&ltr_id=' . $data['ltr_id'] ?>"
                                    method="POST" class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="tour_id" class="form-label fw-bold">Chọn Tour:</label>
                                        <select class="form-select" id="danhmuc" name="danhmuc" required>
                                            <option value="" disabled selected>-- Chọn một Tour để thiết lập lịch trình
                                                --</option>
                                            <?php foreach ($listTour as $value) : ?>
                                            <option value="<?= $value['tour_id'] ?>"
                                                <?= $data['tour_id']===$value['tour_id'] ? 'selected' : '' ?>>
                                                <?= $value['ten_tour'] ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ngay_thu" class="form-label fw-bold">Ngày thứ:</label>
                                        <input type="text" class="form-control" id="ngay_thu" name="ngay_thu" required
                                            value="<?= $data['ngay_thu'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tieu_de" class="form-label fw-bold">Tiêu đề</label>
                                        <input type="text" class="form-control" id="tieu_de" name="tieu_de" required
                                            value="<?= $data['tieu_de'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="noi_dung" class="form-label fw-bold">Nội dung</label>
                                        <textarea type="text" class="form-control" id="noi_dung" name="noi_dung"
                                            required><?= $data['noi_dung'] ?></textarea>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2">
                                        <button type="submit" name="btn-edit-schedule" class="btn btn-success">
                                            Cập nhật Lịch trình
                                        </button>
                                        <a href="<?= BASE_URL . 'admin-list-schedule' ?>" class="btn btn-secondary">
                                            Quay lại
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
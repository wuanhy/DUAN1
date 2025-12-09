<!DOCTYPE html>
<html lang="en">

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
                    <form action="<?= BASE_URL . 'admin-create-schedule' ?>" method="post" enctype="multipart/form-data">
                        <div class="d-flex justify-content-end mb-3">
                            <a href="<?= BASE_URL . 'admin-list-schedule' ?>" class="btn btn-primary btn-sm">Quay lai</a>
                        </div>

                        <div class="container my-5">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <label for="select-tour" class="form-label fw-bold">Chọn Tour*</label>
                                        <div class="input-group">
                                            <select class="form-select" id="tour_id" name="tour_id">
                                                <option value="" disabled selected>-- Chọn một Tour để thiết lập lịch trình --</option>
                                                <?php foreach ($listTour as $value) : ?>
                                                    <option value="<?= $value['tour_id'] ?>">
                                                        <?= $value['ten_tour'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <p id="tour_idError" class="text-danger small mt-1">
                                            <?= $errors['tour_id'] ?? '' ?>
                                        </p>
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
                                                <input type="hidden" name="schedule[1][ngay_thu]" value="1">
                                                <div class="col-md-6">
                                                    <label for="activity-1" class="form-label">Hoạt động</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="activity-1" name="schedule[1][hoat_dong]" placeholder="Ví dụ: Tham quan Lăng Bác">
                                                    </div>
                                                    <p id="hoat_dongError" class="text-danger small mt-1">
                                                        <?= $errors['hoat_dong'][1] ?? '' ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="location-1" class="form-label">Địa điểm</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="location-1" name="schedule[1][dia_diem]" placeholder="Nhập địa điểm">
                                                    </div>

                                                    <p id="dia_diemError" class="text-danger small mt-1">
                                                        <?= $errors['dia_diem'][1] ?? '' ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="anh" class="form-label">Ảnh hoạt động</label>
                                                    <div class="input-group">
                                                        <input type="file" name="file_anh_ngay[1]" id="anh" class="form-control file-input-day" data-day-index="1">
                                                    </div>
                                                    <img id="preview" src="" alt="Xem trước ảnh" style="margin-top:10px; max-width:200px; display:none;">
                                                    <p id="anhError" class="text-danger small mt-1">
                                                        <?= $errors['anh'][1] ?? '' ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
    <script>
        document.getElementById('anh').addEventListener('change', (e) => {
            const file = e.target.files[0];
            const preview = document.getElementById('preview');

            if (file) {
                const reader = new FileReader();
                reader.onload = (event) => {
                    preview.src = event.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>
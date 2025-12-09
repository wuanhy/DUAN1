<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Travel - Trang chủ</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php include "views/admin/sidebar.php"; ?>
            </div>
            <div class="col-10" style="padding-top: 100px;">

                <h1 class="fw-bold d-flex align-items-center gap-3 mb-4" style="color: #0d6efd;">
                    <i class="bi bi-pencil-square fs-1 text-primary"></i>
                    Cập nhật Lịch trình Tour
                </h1>

                <form action="<?= BASE_URL . 'admin-update-schedule' ?>"
                    method="POST" enctype="multipart/form-data">

                    <div class="d-flex justify-content-end mb-3">
                        <a href="admin-list-schedule" class="btn btn-primary btn-sm">Quay lai</a>
                    </div>

                    <input type="hidden" name="tour_id" value="<?= $data['tour_id'] ?>">

                    <div class="mb-3">
                        <label for="current_tour_name" class="form-label fw-bold">Tour đang cập nhật:</label>
                        <input type="text" class="form-control" id="current_tour_name" value="<?= $data['ten_tour'] ?? '' ?>" readonly>
                    </div>

                    <div class="days-container">
                        <?php
                        $day_index = 0;
                        foreach ($schedules as $schedule):
                            $day_index++;
                            $unique_id = $schedule['ltr_id'];
                        ?>
                            <div class="day-section border p-3 mb-3 rounded" data-day="<?= $day_index ?>">
                                <input type="hidden" name="schedule[<?= $day_index ?>][ltr_id]" value="<?= $unique_id ?>">
                                <input type="hidden" name="schedule[<?= $day_index ?>][ngay_thu]" value="<?= $schedule['ngay_thu'] ?>">
                                <input type="hidden" name="schedule[<?= $day_index ?>][anh_cu]" value="<?= $schedule['anh'] ?>">

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="text-primary mb-0">🗓️ Ngày thứ <?= $schedule['ngay_thu'] ?></h5>
                                </div>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="hoat_dong_<?= $unique_id ?>" class="form-label">Hoạt động</label>
                                        <input type="text" class="form-control" id="hoat_dong_<?= $unique_id ?>"
                                            name="schedule[<?= $day_index ?>][hoat_dong]"
                                            value="<?= htmlspecialchars($schedule['hoat_dong']) ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="dia_diem_<?= $unique_id ?>" class="form-label">Địa điểm</label>
                                        <input type="text" class="form-control" id="dia_diem_<?= $unique_id ?>"
                                            name="schedule[<?= $day_index ?>][dia_diem]"
                                            value="<?= htmlspecialchars($schedule['dia_diem']) ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="anh_<?= $unique_id ?>" class="form-label">Ảnh hoạt động</label>
                                        <div class="input-group">
                                            <input type="file" id="anh_<?= $unique_id ?>" name="file_anh_ngay[<?= $day_index ?>]" class="form-control file-input-day" data-day-index="<?= $day_index ?>">
                                        </div>
                                        <?php if (!empty($schedule['anh'])): ?>
                                            <p class="mt-2"><img src="<?= BASE_URL . $schedule['anh'] ?>" style="max-width:100px; height:auto;"></p>
                                        <?php endif; ?>
                                        <img id="preview-<?= $day_index ?>" src="" alt="Xem trước ảnh mới" style="margin-top:10px; max-width:200px; display:none;">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" id="add-day-btn" class="btn btn-success me-md-2">
                            <i class="bi bi-plus-circle"></i> + Thêm ngày mới
                        </button>
                        <button type="submit" name="btn-update-schedule" class="btn btn-primary">
                            Cập nhật Lịch trình
                        </button>
                    </div>
                </form>
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
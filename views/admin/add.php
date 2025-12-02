<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Lịch Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div class="containerr">
        <div class="row g-0">
            <div class="col-3">
                <?php require_once BASE_PATH . '/views/admin/sidebar.php'; ?>
            </div>

            <div class="col-9" style="padding-top: 100px; padding-left: 20px;">

                <div class="card shadow-sm border-0 rounded-4 mx-3" style="max-width: 800px;">
                    <div class="card-header bg-white py-3 border-0">
                        <h4 class="fw-bold text-primary mb-0"><i class="bi bi-calendar-plus me-2"></i> Tạo Lịch Khởi
                            Hành</h4>
                    </div>

                    <div class="card-body p-4">
                        <form action="<?= BASE_URL . 'store-lich' ?>" method="POST">

                            <div class="mb-4">
                                <label class="form-label fw-bold text-muted">Chọn Tour Mẫu</label>
                                <select name="tour_id" class="form-select form-select-lg" required>
                                    <option value="" selected disabled>-- Vui lòng chọn tour --</option>
                                    <?php foreach($ds_tour as $t): ?>
                                    <option value="<?= $t['tour_id'] ?>">
                                        [<?= $t['so_ngay'] ?> Ngày] - <?= $t['ten_tour'] ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="form-text">Hệ thống sẽ tự động tính ngày kết thúc dựa trên số ngày của tour.
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-bold text-muted">Ngày Khởi Hành</label>
                                    <input type="date" name="ngay_khoihanh" class="form-control form-control-lg"
                                        required>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-bold text-muted">Số Chỗ Mở Bán</label>
                                    <input type="number" name="so_cho" class="form-control form-control-lg" value="20"
                                        min="1" required>
                                </div>
                            </div>

                            <div class="d-flex gap-2 mt-3">
                                <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill shadow-sm">
                                    <i class="bi bi-save me-1"></i> Lưu Lịch
                                </button>
                                <a href="index.php?act=thongKe" class="btn btn-light btn-lg px-4 rounded-pill border">
                                    Quay lại
                                </a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
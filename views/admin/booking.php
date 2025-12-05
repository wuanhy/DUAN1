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

        <div class="col-10 d-flex justify-content-center align-items-start" style="padding-top:100px;">
            <div class="col-md-6"> 
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <form action="<?= BASE_URL . 'booking' ?>" method="post">

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Chọn Tour</label>
                                <select name="tour_id" class="form-control">
                                    <option value="">--Chọn Tour--</option>
                                    <?php foreach($listdata as $tour) :?>
                                        <option value="<?= $tour['tour_id'] ?>" <?= ($old['tour_id'] ?? '')==$tour['tour_id'] ? 'selected' : '' ?>>
                                            <?= $tour['ten_tour'] ?>
                                        </option>
                                    <?php endforeach;?>
                                </select>
                                <small class="text-danger"><?= $errors['tour_id'] ?? '' ?></small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Ngày diễn ra</label>
                                <input type="date" name="ngay_dien_ra" class="form-control" value="<?= htmlspecialchars($old['ngay_dien_ra'] ?? '') ?>">
                                <small class="text-danger"><?= $errors['ngay_dien_ra'] ?? '' ?></small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Số chỗ</label>
                                <input type="number" name="so_cho" min="1" class="form-control" value="<?= htmlspecialchars($old['so_cho'] ?? '') ?>">
                                <small class="text-danger"><?= $errors['so_cho'] ?? '' ?></small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Ngày kết thúc</label>
                                <input type="date" name="ngay_ket_thuc" class="form-control" value="<?= htmlspecialchars($old['ngay_ket_thuc'] ?? '') ?>">
                                <small class="text-danger"><?= $errors['ngay_ket_thuc'] ?? '' ?></small>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Thêm ngày & số chỗ</button>
                        </form>
                    </div>
                </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

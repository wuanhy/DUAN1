<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<div class="container">
    <div class="row">
        <div class="col-2">
            <?php include 'views/hdv/sidebar.php' ?>
        </div>
        <div class="col-10" style="padding-top: 80px;">
            <h3 class="fw-bold mb-3"><i class="bi bi-briefcase"></i> Công việc của bạn</h3>

            <div class="job-card">
                <?php if (empty($jobs)): ?>
                <div class="alert alert-warning text-center">
                    <i class="bi bi-exclamation-circle"></i> Hiện chưa có tour nào được phân công.
                </div>
                <?php else: ?>
                <table class="table">
                    <tr>
                        <th>ID Booking</th>
                        <th>Tên Tour</th>
                        <th>Ngày diễn ra</th>
                        <th>Ngày kết thúc</th>
                        <th>Ảnh Tour</th>
                        <th>Số chỗ</th>
                        <th>Nơi xuất phát</th>
                        <th>Điểm đến</th>
                        <th>Trạng thái</th>
                    </tr>

                    <?php foreach ($jobs as $job): ?>
                    <tr>
                        <td><?= $job['booking_id'] ?></td>
                        <td><?= $job['ten_tour'] ?></td>
                        <td><?= $job['ngay_dien_ra'] ?></td>
                        <td><?= $job['ngay_ket_thuc'] ?></td>
                        <td><?= $job['so_cho'] ?></td>
                        <td><?= $job['noi_xuat_phat'] ?></td>
                        <td><?= $job['diem_den'] ?></td>
                        <td><img src="<?= BASE_URL . $job['anh_tour'] ?>" width="120px"></td>
                        <?php
                            $today = date("Y-m-d");

                            if ($job['ngay_ket_thuc'] < $today) {
                                $status = "done";
                            } elseif ($job['ngay_dien_ra'] <= $today && $today <= $job['ngay_ket_thuc']) {
                                $status = "in_progress";
                            } else {
                                $status = "pending";
                            }
                            ?>
                        <td>
                            <?php if ($status == "done"): ?>
                            <span class="badge bg-success">✔ Hoàn thành</span>

                            <?php elseif ($status == "pending"): ?>
                            <span class="badge bg-primary">⌛ Sắp diễn ra</span>

                            <?php elseif ($status == "in_progress"): ?>
                            <span class="badge bg-danger">🔥 Đang diễn ra</span>
                            <?php endif; ?>
                        </td>

                    </tr>
                    <?php endforeach ?>
                </table>
                <?php endif ?>
            </div>
        </div>
    </div>

</div>
<style>
body {
    background: linear-gradient(to right, #CFE8FF, #FAD4EC);
    min-height: 100vh;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

</body>

</html>
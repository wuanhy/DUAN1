<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Tour</title>

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
            <div class="col-10" style="padding: 100px;">
                <h3 class="mb-3">Thống kê tour đã đặt</h3>
                <table class="table">
                    <tr>
                        <th>ID Booking</th>
                        <th>Tên Tour</th>
                        <th>Ngày diễn ra</th>
                        <th>Số chỗ</th>
                        <th>Ảnh tour</th>
                        <th>Trạng thái</th>
                    </tr>

                    <?php foreach ($listdata as $row): ?>
                        <tr>
                            <td><?= $row['booking_id'] ?></td>
                            <td><?= $row['ten_tour'] ?></td>
                            <td><?= $row['ngay_dien_ra'] ?></td>
                            <td><?= $row['so_cho'] ?></td>
                            <td><img src="<?=BASE_URL . $row['anh_tour']  ?>" width="80px"></td>
                            <?php
                            $today = date("Y-m-d");

                            if ($row['ngay_dien_ra'] < $today) {
                                $status = "done";
                            } elseif ($row['ngay_dien_ra'] == $today) {
                                $status = "in_progress";
                            } else {
                                $status = "pending";
                            }
                            ?>
                            <td>
                                <?php if ($row['status'] == "done"): ?>
                                    <span class="badge bg-success">✔ Hoàn thành</span>

                                <?php elseif ($row['status'] == "pending"): ?>
                                    <span class="badge bg-primary">⌛ Sắp diễn ra</span>

                                <?php elseif ($row['status'] == "in_progress"): ?>
                                    <span class="badge bg-danger">🔥 Đang diễn ra</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
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

</body>

</html>
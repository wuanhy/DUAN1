<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Danh sách lịch trình</title>

    <style>
        body {
            background: linear-gradient(to right, #CFE8FF, #FAD4EC);
            min-height: 100vh;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-2">
            <?php include "views/admin/sidebar.php"; ?>
        </div>

        <div class="col-10 px-0" style="padding-top: 100px;">
            <div class="list-schedule-container">

                <h1 class="fw-bold d-flex align-items-center gap-3 mb-4" style="color:#0d6efd;">
                    <i class="bi bi-calendar-week fs-1 text-primary"></i>
                    Danh sách lịch trình
                </h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Tour</th>
                        <th>Ngày thứ</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($listTour as $key => $value): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $value['ten_tour'] ?></td>
                            <td><?= $value['ngay_thu'] ?></td>
                            <td><?= $value['tieu_de'] ?></td>
                            <td class="content-limit"><?= $value['noi_dung'] ?></td>

                            <td>
                                <a href="<?= BASE_URL . 'admin-update-schedule&lt_id=' . $value['ltr_id'] ?>"
                                   class="btn btn-primary btn-sm">
                                    <i class="bi bi-pencil-square"></i> Sửa
                                </a>

                                <a href="<?= BASE_URL . 'admin-delete-schedule&lt_id=' . $value['ltr_id'] ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                                    <i class="bi bi-trash-fill"></i> Xóa
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

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
                <div class="tour-list-container">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Danh sách Tour Du lịch</h1>
                        <a href="<?= BASE_URL . 'admin-create-schedule' ?>" class="btn btn-sm btn-success">
                            <i class="fas fa-plus-circle"></i> Thêm Lịch Trình Mới
                        </a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="width: 20%;">Tên Tour</th>
                                <th>Ngày thứ</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt = 1; ?>
                            <?php foreach ($group as $value): ?>
                                <?php $scheduleCount = count($value['details']); ?>
                                <?php foreach ($value['details'] as $key => $scheduel): ?>
                                    <tr>
                                        <?php if ($key === 0): ?>
                                            <td rowspan="<?= $scheduleCount ?>"><?= $stt++ ?></td>
                                        <?php endif; ?>
                                        <?php if ($key === 0): ?>
                                            <td rowspan="<?= $scheduleCount ?>"><?= $value['ten_tour'] ?></td>
                                        <?php endif; ?>
                                        <td><?= $scheduel['ngay_thu'] ?></td>
                                        <td><?= $scheduel['dia_diem'] ?></td>
                                        <td class="content"><?= $scheduel['hoat_dong'] ?></td>
                                        <?php if ($key === 0): ?>
                                            <td rowspan="<?= $scheduleCount ?>">
                                                <a href="<?= BASE_URL . 'admin-update-schedule&ltr_id=' . $scheduel['ltr_id'] ?>" class="btn btn-primary btn-sm" rowpan="<?= $scheduleCount ?>"><i class="bi bi-pencil-square"></i>Sửa</a>
                                                <a href="<?= BASE_URL . 'admin-delete-schedule&ltr_id=' . $scheduel['ltr_id'] ?>" class="btn btn-outline-danger btn-sm" rowpan="<?= $scheduleCount ?>" onclick="return confirm('Bạn có muốn xóa lịch trình này không?')"><i class="bi bi-trash-fill"></i>Xóa</a>
                                            </td>
                                        <?php endif; ?>

                                    </tr>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <style>
        table td.content {
            max-width: 350px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

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
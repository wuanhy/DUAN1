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
                        <h1 class="h2">Danh sách Lịch trình</h1>
                        <a href="<?= BASE_URL . '?act=admin-addscheduletour'?>" class="btn btn-sm btn-success">
                            <i class="fas fa-calendar-plus"></i> Thêm Lịch trình mới
                        </a>
                    </div>
                    <div class="mb-4">
                        <form class="d-flex" action="" method="GET">
                            <input type="hidden" name="action" value="admin-scheduletour">
                            <input class="form-control me-2" type="search" placeholder="Tìm kiếm theo Tên Tour"
                                aria-label="Search" name="keyword">
                            <button class="btn btn-outline-primary" type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Tour</th>
                                    <th>Ngày thứ</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listSchedul as $key => $value): ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $value['danhmuc'] ?></td>
                                    <td><?= $value['ngay_thu'] ?></td>
                                    <td><?= $value['tieu_de'] ?></td>
                                    <td><?= $value['noi_dung'] ?></td>
                                    <td>
                                        <a href="<?= BASE_URL . '?act=admin-edit-schedule&lt_id=' . $value['lt_id'] ?>"
                                            class="btn btn-warning">Sửa</a>
                                        <a href="<?= BASE_URL . '?act=admin-delete-schedule&lt_id=' . $value['lt_id'] ?>"
                                            class="btn btn-danger"
                                            onclick="return confirm('Bạn có muốn xóa không')">Xóa</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                        </ul>
                    </nav>
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
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
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Danh sách Tour Du lịch</h1>
                        <a href="<?= BASE_URL . 'admin-addtour' ?>" class="btn btn-sm btn-success">
                            <i class="fas fa-plus-circle"></i> Thêm Tour Mới
                        </a>
                    </div>
                    <div class="mb-4 d-flex justify-content-between">
                        <form class="d-flex" action="<?= BASE_URL . 'admin-tourlist'?>" method="GET"
                            style="width: 100%;">
                            <input type="hidden" name="action" value="admin-tourlist">
                            <input class="form-control me-2" type="search" placeholder="Tìm kiếm theo Tên Tour"
                                aria-label="Search" name="keyword">
                            <select class="form-select me-2" style="width: 200px;" name="dm_id">
                                <option value="">-- Lọc theo Danh mục --</option>
                                <option value="1">Tour trong nước</option>
                                <option value="2">Tour quốc tế</option>
                            </select>
                            <button class="btn btn-outline-primary" type="submit">Tìm & Lọc</button>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Mã Tour</th>
                                    <th>Tên Tour</th>
                                    <th>Danh mục</th>
                                    <th>Giá</th>
                                    <th>Số chỗ</th>
                                    <th>Ảnh Tour</th>
                                    <th>Nơi xuất phát</th>
                                    <th>Điểm đến</th>
                                    <th>Mô tả</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tb_danhmuc as $key => $dm): ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $dm['ma_tour'] ?></td>
                                    <td><?= $dm['ten_tour'] ?></td>
                                    <td><?= $dm['danh_muc'] ?></td>
                                    <td><?= number_format($dm['gia_co_ban']) ?> vnđ</td>
                                    <td><?= $dm['so_cho_toi_da'] ?></td>
                                    <td>
                                        <img src="<?= $dm['anh_tour'] ?>" width="100px">
                                    </td>
                                    <td><?= $dm['noi_xuat_phat'] ?></td>
                                    <td><?= $dm['diem_den'] ?></td>
                                    <td><?= $dm['mo_ta_tour'] ?></td>
                                    <td>
                                        <a href="<?= BASE_URL . 'admin-edittour&tour_id=' . $dm['tour_id'] ?>"
                                            class="btn btn-warning">Sửa</a>
                                        <a href="<?= BASE_URL . 'admin-delete-tour&tour_id=' . $dm['tour_id'] ?>"
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
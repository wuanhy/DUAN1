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
                        <h1 class="h2">Thêm Tour Mới</h1>
                        <a href="admin-list-tour" class="btn btn-secondary btn-sm">
                            Quay lại Danh sách
                        </a>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="p-4 rounded shadow-sm" style="background-color: #F8E8E8;">

                                <form action="admin-create-tour" method="post" enctype="multipart/form-data">

                                    <div class="card mb-4 border-primary">
                                        <div class="card-header bg-primary text-white fw-bold">
                                            Thông tin Tour Cơ bản
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="ten_tour" class="form-label">Tên Tour</label>
                                                    <input type="text" class="form-control" id="ten_tour"
                                                        name="ten_tour" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="tb_danhmuc" class="form-label">Danh mục</label>
                                                    <select name="dm_id" id="" class="form-control">

                                                        <?php foreach ($tb_danhmuc as $dm) : ?>
                                                        <option value="<?= $dm['dm_id'] ?>">
                                                            <?= $dm['ten_danhmuc'] ?>
                                                        </option>
                                                        <?php endforeach; ?>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="noi_xuat_phat" class="form-label">Nơi Xuất Phát</label>
                                                    <input type="text" class="form-control" id="noi_xuat_phat"
                                                        name="noi_xuat_phat" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="diem_den" class="form-label">Điểm Đến Chính</label>
                                                    <input type="text" class="form-control" id="diem_den"
                                                        name="diem_den" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="ma_tour" class="form-label">Mã Tour (*)</label>
                                                <input type="text" class="form-control" id="ma_tour" name="ma_tour"
                                                    required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="mo_ta_tour" class="form-label">Mô tả Tour / Tóm tắt Lịch
                                                    trình</label>
                                                <textarea class="form-control" id="mo_ta_tour" name="mo_ta_tour"
                                                    rows="3"></textarea>
                                            </div>

                                            <div class="row align-items-end">
                                                <div class="col-md-6 mb-3">
                                                    <label for="anh_tour" class="form-label">Ảnh đại diện</label>
                                                    <input class="form-control" type="file" id="anh_tour"
                                                        name="anh_tour" accept="image/*" required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label for="so_cho_toi_da" class="form-label">Số chỗ tối đa</label>
                                                    <input type="number" class="form-control" id="so_cho_toi_da"
                                                        name="so_cho_toi_da" min="1">
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label for="gia_co_ban" class="form-label">Giá Tour</label>
                                                    <input type="number" class="form-control" id="gia_co_ban"
                                                        name="gia_co_ban" min="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mb-5">
                                        <button type="submit" name="btn-add" class="btn btn-primary btn-lg">
                                            Thêm Tour Mới
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
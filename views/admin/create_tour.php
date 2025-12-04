<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/css/style.css"> 
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-2 px-0">
            <?php include "views/admin/sidebar.php"; ?>
        </div>

        <div class="col-10" style="padding: 80px 40px;">

            <h1 class="fw-bold d-flex align-items-center gap-3 mb-4" style="color: #0d6efd;">
                <i class="bi bi-plus-circle-fill fs-1 text-primary"></i>
                Thêm Tour
            </h1>

            <form action="<?= BASE_URL .'admin-create-tour' ?>" method="post" enctype="multipart/form-data">

                <div class="d-flex justify-content-end mb-3">
                    <a href="<?= BASE_URL .'admin-list-tour' ?>" class="btn btn-primary btn-sm">
                        Quay lại
                    </a>
                </div>

                <div class="row">

                    <div class="col-md-8">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">

                                <h5 class="fw-bold mb-3">Thông tin Tour cơ bản</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Tên Tour</label>
                                        <input type="text" class="form-control" name="ten_tour" value="<?= htmlspecialchars($old['ten_tour'] ?? '') ?>">
                                        <small class="text-danger"><?= $errors['ten_tour'] ?? '' ?></small>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Danh mục</label>
                                        <select name="dm_id" class="form-control">
                                        <option value="">--Chọn Loại--</option>
                                            <?php foreach ($tb_danhmuc as $dm): ?>
                                                <option value="<?= $dm['dm_id'] ?>">
                                                    <?= $dm['ten_danhmuc'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    <small class="text-danger"><?= $errors['dm_id'] ?? '' ?></small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Nơi xuất phát</label>
                                        <input type="text" class="form-control" name="noi_xuat_phat" value="<?= htmlspecialchars($old['noi_xuat_phat'] ?? '') ?>" >
                                        <small class="text-danger"><?= $errors['noi_xuat_phat'] ?? '' ?></small>

                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Điểm đến chính</label>
                                        <input type="text" class="form-control" name="diem_den" value="<?= htmlspecialchars($old['diem_den'] ?? '') ?>" >
                                        <small class="text-danger"><?= $errors['diem_den'] ?? '' ?></small>

                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Mã Tour</label>
                                    <input type="text" class="form-control" name="ma_tour" value="<?= htmlspecialchars($old['ma_tour'] ?? '') ?>" >
                                        <small class="text-danger"><?= $errors['ma_tour'] ?? '' ?></small>

                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Mô tả Tour / Tóm tắt</label>
                                    <textarea class="form-control" name="mo_ta_tour" id="mo_ta_tour" rows="12" value="<?= htmlspecialchars($old['mo_ta_tour'] ?? '') ?>"></textarea>
                                    <small class="text-danger"><?= $errors['mo_ta_tour'] ?? '' ?></small>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">

                                <h5 class="fw-bold mb-3">Cài đặt Tour</h5>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Ảnh đại diện</label>
                                    <input class="form-control" type="file" name="anh_tour" id="anh_tour">
                                    <img id="preview" class="rounded mt-2 shadow-sm" style="max-width:150px; display:none;">
                                    <small class="text-danger"><?= $errors['anh_tour'] ?? '' ?></small>

                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Số chỗ tối đa</label>
                                    <input type="number" class="form-control" name="so_cho_toi_da" min="1" value="<?= htmlspecialchars($old['so_cho_toi_da'] ?? '') ?>">
                                    <small class="text-danger"><?= $errors['so_cho_toi_da'] ?? '' ?></small>
                                </div>

                                 <div class="mb-3">
                                    <label class="form-label fw-semibold">Số ngày đi</label>
                                    <input type="text" class="form-control" name="so_ngay" min="1" value="<?= htmlspecialchars($old['so_ngay'] ?? '') ?>">
                                    <small class="text-danger"><?= $errors['so_ngay'] ?? '' ?></small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Giá Tour</label>
                                    <input type="number" class="form-control" name="gia_co_ban" min="0" value="<?= htmlspecialchars($old['gia_co_ban'] ?? '') ?>">
                                    <small class="text-danger"><?= $errors['gia_co_ban'] ?? '' ?></small>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 mt-2">
                                    Thêm Tour Mới
                                </button>

                            </div>
                        </div>
                    </div>

                </div>

            </form>

        </div>
    </div>
</div>
<script>
document.getElementById('anh_tour').addEventListener('change',(e)=>{
    const file = e.target.files[0];
    const preview = document.getElementById('preview');

    if(file){
        const reader = new FileReader();
        reader.onload = (event) =>{
            preview.src = event.target.result;
            preview.style.display = 'block'; 
        }
        reader.readAsDataURL(file);
    } 
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <style>
            body {
                background: linear-gradient(to right, #CFE8FF, #FAD4EC);
                    min-height: 100vh;
                    margin: 0;
                    padding: 0;
}
.ck-editor__editable {
    min-height: 300px;
}
    </style>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    ClassicEditor
        .create(document.querySelector('#mo_ta_tour'))
        .catch(error => { console.error(error); });
});
</script>
=======
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
>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708
</body>

</html>
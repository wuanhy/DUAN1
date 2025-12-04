<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <i class="bi bi-pencil-square fs-1 text-primary"></i>
                Cập nhật Tour
            </h1>

            <form action="<?= BASE_URL . 'admin-update-tour&tour_id=' . $data['tour_id'] ?>"
                  method="post" enctype="multipart/form-data">

                <div class="d-flex justify-content-end mb-3">
                    <a href="admin-tourlist" class="btn btn-primary btn-sm">Quay lại</a>
                </div>

                <div class="row">

                    <div class="col-md-8">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">

                                <h5 class="fw-bold mb-3">Thông tin Tour cơ bản</h5>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Tên Tour</label>
                                        <input type="text" class="form-control" 
                                               name="ten_tour" 
                                               value="<?= htmlspecialchars($old['ten_tour'] ?? $data['ten_tour']) ?>">
                                        <small class="text-danger"><?= $errors['ten_tour'] ?? '' ?></small>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Danh mục</label>
                                        <select name="dm_id" class="form-control">
                                            <?php foreach ($tb_danhmuc as $dm): ?>
                                                <option value="<?= $dm['dm_id'] ?>"
                                                    <?=($old['dm_id'] ??  $data['dm_id']) === $dm['dm_id'] ? 'selected' : '' ?>>
                                                    <?= $dm['ten_danhmuc'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Nơi xuất phát</label>
                                        <input type="text" class="form-control"
                                               name="noi_xuat_phat"
                                              value="<?= htmlspecialchars($old['noi_xuat_phat'] ?? $data['noi_xuat_phat']) ?>">
                                              <small class="text-danger"><?= $errors['noi_xuat_phat'] ?? '' ?></small>
                                    </div>

                        

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">Điểm đến chính</label>
                                        <input type="text" class="form-control"
                                               name="diem_den"
                                            value="<?= htmlspecialchars($old['diem_den'] ?? $data['diem_den']) ?>">
                                            <small class="text-danger"><?= $errors['diem_den'] ?? '' ?></small>

                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Mã Tour</label>
                                    <input type="text" class="form-control"
                                           name="ma_tour"
                                    value="<?= htmlspecialchars($old['ma_tour'] ?? $data['ma_tour']) ?>">
                                    <small class="text-danger"><?= $errors['ma_tour'] ?? '' ?></small>

                                           
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Mô tả Tour / Tóm tắt</label>
                                    <textarea class="form-control" name="mo_ta_tour" rows="9" ><?= htmlspecialchars($old['mo_ta_tour'] ?? $data['mo_ta_tour']) ?></textarea>
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
                                    <label class="form-label fw-semibold">Ảnh đại diện</label><br>
                                    <?php if (!empty($data['anh_tour'])): ?>
                                        <img src="<?= BASE_URL . $data['anh_tour'] ?>" width="120" class="rounded mb-2 shadow-sm">
                                    <?php endif; ?>
                                    <input class="form-control" type="file"name="anh_tour" id="anh_tour">
                                    <img id="preview" style="display:none; margin-top:10px; max-width:150px;">

                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Số chỗ tối đa</label>
                                    <input type="number" class="form-control"
                                           name="so_cho_toi_da"
                                           value="<?= htmlspecialchars($old['so_cho_toi_da'] ?? $data['so_cho_toi_da']) ?>" min="1">
                                           <small class="text-danger"><?= $errors['so_cho_toi_da'] ?? '' ?></small>
                                </div>

                                   <div class="mb-3">
                                        <label class="form-label fw-semibold">Số ngày đi</label>
                                        <input type="text" class="form-control"
                                               name="so_ngay"
                                              value="<?= htmlspecialchars($old['so_ngay'] ?? $data['so_ngay']) ?>">
                                              <small class="text-danger"><?= $errors['so_ngay'] ?? '' ?></small>
                                    </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Giá Tour</label>
                                    <input type="number" class="form-control"
                                           name="gia_co_ban"
                                           value="<?= htmlspecialchars($old['gia_co_ban'] ?? $data['gia_co_ban']) ?>" min="0">
                                           <small class="text-danger"><?= $errors['gia_co_ban'] ?? '' ?></small>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">
                                    Cập nhật Tour
                                </button>

                            </div>
                        </div>
                    </div>

                </div>

            </form>

        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
body {
   background: linear-gradient(to right, #CFE8FF, #FAD4EC);
    min-height: 100vh;
    margin: 0;
    padding: 0;
}
    </style>
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
=======

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
                        <h1 class="h2">Cập nhật Tour</h1>
                        <a href="admin-list-tour" class="btn btn-secondary btn-sm">
                            Quay lại Danh sách
                        </a>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="p-4 rounded shadow-sm" style="background-color: #F8E8E8;">

                                <form action="<?=BASE_URL . 'admin-update-tour&tour_id=' . $data['tour_id']?>"
                                    method="post" enctype="multipart/form-data">

                                    <div class="card mb-4 border-primary">
                                        <div class="card-header bg-primary text-white fw-bold">
                                            Thông tin Tour Cơ bản
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="ten_tour" class="form-label">Tên Tour</label>
                                                    <input type="text" class="form-control" id="ten_tour"
                                                        name="ten_tour" required value="<?=$data['ten_tour']?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="tb_danhmuc" class="form-label">Danh mục</label>
                                                    <select name="dm_id" id="" class="form-control">

                                                        <?php foreach ($tb_danhmuc as $dm) : ?>
                                                        <option value="<?= $dm['dm_id'] ?>"
                                                            <?= $data['dm_id']===$dm['dm_id'] ? 'selected' : '' ?>>
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
                                                        name="noi_xuat_phat" required
                                                        value="<?=$data['noi_xuat_phat']?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="diem_den" class="form-label">Điểm Đến Chính</label>
                                                    <input type="text" class="form-control" id="diem_den"
                                                        name="diem_den" required value="<?=$data['diem_den']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="ma_tour" class="form-label">Mã Tour (*)</label>
                                                <input type="text" class="form-control" id="ma_tour" name="ma_tour"
                                                    required value="<?=$data['ma_tour']?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="mo_ta_tour" class="form-label">Mô tả Tour / Tóm tắt Lịch
                                                    trình</label>
                                                <textarea class="form-control" id="mo_ta_tour" name="mo_ta_tour"
                                                    rows="3"><?=$data['mo_ta_tour']?></textarea>
                                            </div>

                                            <div class="row align-items-end">
                                                <div class="col-md-6 mb-3">
                                                    <img src="<?= $data['anh_tour'] ?>" alt="" width="100px">
                                                    <label for="anh_tour" class="form-label">Ảnh đại diện</label>
                                                    <input class="form-control" type="file" id="anh_tour"
                                                        name="anh_tour" accept="image/*" required>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label for="so_cho_toi_da" class="form-label">Số chỗ tối đa</label>
                                                    <input type="number" class="form-control" id="so_cho_toi_da"
                                                        name="so_cho_toi_da" min="1"
                                                        value="<?=$data['so_cho_toi_da']?>">
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label for="gia_co_ban" class="form-label">Giá Tour</label>
                                                    <input type="number" class="form-control" id="gia_co_ban"
                                                        name="gia_co_ban" min="0" value="<?=$data['gia_co_ban']?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mb-5">
                                        <button type="submit" name="btn-add" class="btn btn-primary btn-lg">
                                            Cập nhật Tour
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
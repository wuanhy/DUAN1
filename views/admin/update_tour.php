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
</body>

</html>
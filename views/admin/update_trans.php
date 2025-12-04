<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <i class="bi bi-pencil-square fs-1 text-primary"></i>
                Cập nhật phương tiện
            </h1>

            <form action="<?= BASE_URL . 'admin-update-trans?id=' . ($data['pt_id']) ?>" 
                  method="post" enctype="multipart/form-data">

                <div class="d-flex justify-content-end mb-3">
                    <a href="<?= BASE_URL . 'admin-list-trans' ?>" class="btn btn-primary btn-sm">Quay lại</a>
                </div>

                <div class="row">

                    <div class="col-md-8">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tên Phương Tiện</label>
                                    <input type="text" name="ten_pt" class="form-control"
                                           value="<?= htmlspecialchars($old['ten_pt'] ?? $data['ten_pt']) ?>">
                                    <small class="text-danger"><?= $errors['ten_pt'] ?? '' ?></small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Biển Số</label>
                                    <input type="text" name="bien_so" class="form-control"
                                           value="<?= htmlspecialchars($old['bien_so'] ?? $data['bien_so']) ?>">
                                    <small class="text-danger"><?= $errors['bien_so'] ?? '' ?></small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tên Tài Xế</label>
                                    <input type="text" name="ten_tai_xe" class="form-control"
                                           value="<?= htmlspecialchars($old['ten_tai_xe'] ?? $data['ten_tai_xe']) ?>">
                                    <small class="text-danger"><?= $errors['ten_tai_xe'] ?? '' ?></small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Số chỗ ngồi</label>
                                    <input type="number" name="so_cho_ngoi" class="form-control"
                                           value="<?= htmlspecialchars($old['so_cho_ngoi'] ?? $data['so_cho_ngoi']) ?>">
                                    <small class="text-danger"><?= $errors['so_cho_ngoi'] ?? '' ?></small>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">

                                <h5 class="fw-bold mb-3">Cài đặt phương tiện</h5>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Loại Phương Tiện</label>
                                    <select name="loai_pt_id" class="form-control">
                                        <?php foreach ($listdata as $pt): ?>
                                            <option value="<?= $pt['id'] ?>" 
                                                <?= ($old['loai_pt_id'] ?? $data['loai_pt_id']) == $pt['id'] ? 'selected' : '' ?>>
                                                <?= $pt['name'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="text-danger"><?= $errors['loai_pt_id'] ?? '' ?></small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Ảnh phương tiện</label><br>
                                    <?php if (!empty($data['anh_pt'])): ?>
                                        <img src="<?= BASE_URL . $data['anh_pt'] ?>" 
                                             class="rounded mb-2 shadow-sm" width="150">
                                    <?php endif; ?>

                                    <input type="file" name="anh_pt" id="anh_pt" class="form-control">
                                    <img id="preview" class="rounded mt-2 shadow-sm" 
                                         style="max-width:150px; display:none;">
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Cập nhật phương tiện</button>

                            </div>
                        </div>
                    </div>

                </div>

            </form>

        </div>
    </div>
</div>

<style>
    body {
   background: linear-gradient(to right, #CFE8FF, #FAD4EC);
    min-height: 100vh;
    margin: 0;
    padding: 0;
}

</style>
<script>
document.getElementById('anh_pt').addEventListener('change',(e)=>{
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

</body>
</html>
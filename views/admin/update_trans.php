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
    <div class="container">
    <div class="row">
        <div class="col-2">
            <?php include "views/admin/sidebar.php"; ?>
        </div>
        <div class="col-10" style="padding-top: 100px;  ">
        <div class="update-trans-container">
            <form action="<?= BASE_URL .'?act=admin-update-trans&id=' . ($data['pt_id']) ?>" method="post" enctype="multipart/form-data">
         <div class="d-flex justify-content-end mb-3"> 
                    <a href="<?=BASE_URL .'?act=admin-list-trans' ?>" class="btn btn-primary">Quay lai</a> 
        </div>
    <div class="mb-3">
        <label class="form-label">Tên Phương Tiện</label>
        <input type="text" name="ten_pt" class="form-control"
               value="<?= htmlspecialchars($old['ten_pt'] ?? $data['ten_pt'] ) ?>">
        <small class="text-danger"><?= $errors['ten_pt'] ?? '' ?></small>
    </div>

    <div class="mb-3">
        <label class="form-label">Biển Số Phương Tiện</label>
        <input type="text" name="bien_so" class="form-control"
               value="<?= htmlspecialchars($old['bien_so'] ?? $data['bien_so'] ) ?>">
        <small class="text-danger"><?= $errors['bien_so'] ?? '' ?></small>
    </div>

    <div class="mb-3">
        <label class="form-label">Tên Tài Xế Phương Tiện</label>
        <input type="text" name="ten_tai_xe" class="form-control"
               value="<?= htmlspecialchars($old['ten_tai_xe'] ?? $data['ten_tai_xe'] ) ?>">
        <small class="text-danger"><?= $errors['ten_tai_xe'] ?? '' ?></small>
    </div>

    <div class="mb-3">
        <label class="form-label">Loại Phương Tiện</label>
        <select name="loai_pt_id" class="form-control">
            <option value="1" <?= (($data['loai_pt_id'] ?? 4) == 1) ? 'selected' : '' ?>>Xe du lịch</option>
            <option value="2" <?= (($data['loai_pt_id'] ?? 4) == 2) ? 'selected' : '' ?>>Tàu</option>
            <option value="3" <?= (($data['loai_pt_id'] ?? 4) == 3) ? 'selected' : '' ?>>Máy bay</option>
            <option value="4" <?= (($data['loai_pt_id'] ?? 4) == 4) ? 'selected' : '' ?>>Khác</option>
        </select>
        <small class="text-danger"><?= $errors['status'] ?? '' ?></small>
    </div>

    <div class="mb-3">
        <label class="form-label">Ảnh phương tiện</label>
        <?php if(!empty($data['anh_pt'])): ?>
        <div class="mb-2">
            <img src="<?= BASE_URL . $data['anh_pt'] ?>" alt="" width="100">
        </div>
        <?php endif; ?>
        <input type="file" name="anh_pt" class="form-control" id="anh_pt">
        <img id="preview" src="" alt="Xem trước ảnh" style="margin-top:10px; max-width:200px; display:none;">
    </div>

    <div class="mb-3">
        <label class="form-label">Số chỗ ngồi</label>
        <input type="text" name="so_cho_ngoi" class="form-control"
               value="<?= htmlspecialchars($old['so_cho_ngoi'] ?? $data['so_cho_ngoi'] ) ?>">
        <small class="text-danger"><?= $errors['so_cho_ngoi'] ?? '' ?></small>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
</div>
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


.update-trans-container,
.container,
.wrapper {
    background-color: transparent !important;
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
</body>
</html>
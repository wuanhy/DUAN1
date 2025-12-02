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
        <div class="col-10" style="padding-top: 100px;">
        <div class="create-trans-container">
           <h1 class="fw-bold d-flex align-items-center gap-3 mb-4" style="color: #0d6efd;">
                <i class="bi bi-plus-circle-fill fs-1 text-primary"></i>
                Thêm phương tiện
            </h1>
            <form action="<?= BASE_URL .'admin-create-trans' ?>" method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-end mb-3"> 
                    <a href="<?=BASE_URL .'admin-list-trans' ?>" class="btn btn-primary btn-sm">Quay lai</a> 
                </div>

                <div class="mb-3">
                <label class="form-label fw-semibold">Tên Phương Tiện</label>
                <div class="input-group">
                    <input type="text" id="ten_pt" name="ten_pt"
                        class="form-control"
                        placeholder="VD: Phương Tiện Xe Khách"
                        value="<?= htmlspecialchars($old['ten_pt'] ?? '') ?>">
                </div>
                <p id="ten_ptError" class="text-danger small mt-1">
                    <?= $errors['ten_pt'] ?? '' ?>
                </p>
                </div>

                <div class="mb-3">
                <label class="form-label fw-semibold">Mã Phương Tiện (Biển Số)</label>
                <div class="input-group">
                    <input type="text" id="bien_so" name="bien_so"
                        class="form-control"
                        placeholder="VD: 29B-12345"
                        value="<?= htmlspecialchars($old['bien_so'] ?? '') ?>">
                </div>
                <p id="bien_soError" class="text-danger small mt-1">
                    <?= $errors['bien_so'] ?? '' ?>
                </p>
                </div>

                <div class="mb-3">
                <label class="form-label fw-semibold">Tên Tài Xế Phương Tiện</label>
                <div class="input-group">
                    <input type="text" id="ten_tai_xe" name="ten_tai_xe"
                        class="form-control"
                        placeholder="VD: Nguyễn Văn A"
                        value="<?= htmlspecialchars($old['ten_tai_xe'] ?? '') ?>">
                </div>
                <p id="ten_tai_xeError" class="text-danger small mt-1">
                    <?= $errors['ten_tai_xe'] ?? '' ?>
                </p>
                </div>

                <div class="mb-3">
                <label class="form-label fw-semibold">Loại Phương Tiện</label>
                <div class="input-group">
                    <select name="loai_pt_id" id="loai_pt_id" class="form-control">
                        <option value="">--Chọn Loại Phương Tiện--</option>
                        <?php foreach($listdata as $pt) :?>
                            <option value="<?= $pt['id'] ?>">
                                <?= $pt['name']?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <p id="loai_pt_idError" class="text-danger small mt-1">
                    <?= $errors['loai_pt_id'] ?? '' ?>
                </p>
                </div>

           <div class="mb-3">
                <label class="form-label fw-semibold">Ảnh Phương Tiện</label>
                <div class="input-group">
                    <input type="file" id="anh_pt" name="anh_pt" class="form-control">
                </div>
                 <img id="preview" src="" alt="Xem trước ảnh" style="margin-top:10px; max-width:200px; display:none;">
                <p id="anh_ptError" class="text-danger small mt-1">
                    <?= $errors['anh_pt'] ?? '' ?>
                </p>
                
            </div>

                <div class="mb-3">
                <label class="form-label fw-semibold">Số chỗ ngồi</label>
                <div class="input-group">
                    <input type="number" id="so_cho_ngoi" name="so_cho_ngoi"
                        class="form-control"
                        placeholder="VD: 30"
                        value="<?= htmlspecialchars($old['so_cho_ngoi'] ?? '') ?>">
                </div>
                <p id="so_cho_ngoiError" class="text-danger small mt-1">
                    <?= $errors['so_cho_ngoi'] ?? '' ?>
                </p>
                </div>
                <button class="btn btn-primary btn-sm">Thêm Phương Tiện</button>
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


.create-trans-container,
.container,
.wrapper {
    background-color: transparent !important;
    padding-left: 50px;
    padding-right: 40px;
}

table {
    background-color: white; 
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
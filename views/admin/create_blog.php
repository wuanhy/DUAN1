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
                <i class="bi bi-plus-circle-fill fs-1 text-primary">
                </i> Thêm Blog 
            </h1>

            <form action="<?= BASE_URL . 'admin-create-blog' ?>" method="post" enctype="multipart/form-data">

                <div class="d-flex justify-content-end mb-3">
                    <a href="<?= BASE_URL . 'admin-list-blog' ?>" class="btn btn-primary btn-sm">Quay lại</a>
                </div>

                <div class="row">

                    <div class="col-md-8">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tiêu đề Blog</label>
                                    <input type="text" name="tieu_de" class="form-control"
                                           value="<?= htmlspecialchars($old['tieu_de'] ?? '') ?>">
                                    <small class="text-danger"><?= $errors['tieu_de'] ?? '' ?></small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Nội dung Blog</label>
                                    <textarea name="noi_dung" id="noi_dung" rows="12" class="form-control"><?= htmlspecialchars($old['noi_dung'] ?? '') ?></textarea>
                                    <small class="text-danger"><?= $errors['noi_dung'] ?? '' ?></small>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">

                                <h5 class="fw-bold mb-3">Cài đặt Blog</h5>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Ảnh đại diện</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                    <img id="preview" src="" class="mt-2 rounded shadow-sm" style="max-width:150px; display:none;">
                                    <small class="text-danger"><?= $errors['image'] ?? '' ?></small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tác giả</label>
                                    <select name="author_id" class="form-control">
                                        <option value="">--Chọn tác giả--</option>
                                        <?php foreach ($author as $a): ?>
                                            <option value="<?= $a['id'] ?>" <?= ($old['author_id'] ?? '') == $a['id'] ? 'selected' : '' ?>>
                                                <?= $a['name'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                    <small class="text-danger"><?= $errors['author_id'] ?? '' ?></small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Danh mục</label>
                                    <select name="category_id" class="form-control">
                                        <option value="">--Chọn danh mục--</option>
                                        <?php foreach ($category as $c): ?>
                                            <option value="<?= $c['dm_id'] ?>" <?= ($old['category_id'] ?? '') == $c['dm_id'] ? 'selected' : '' ?>>
                                                <?= $c['ten_danhmuc'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                    <small class="text-danger"><?= $errors['category_id'] ?? '' ?></small>
                                </div>

                                  <div class="mb-3"> 
                                    <label class="form-label fw-semibold">Trạng thái</label> 
                                    <select name="status" class="form-control"> 
                                        <option value="1" <?= (($old['status'] ?? 1) == 1) ? 'selected' : '' ?>>Xuất bản</option> 
                                        <option value="0" <?= (($old['status'] ?? 1) == 0) ? 'selected' : '' ?>>Lưu nháp</option> 
                                    </select> 
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Ngày xuất bản</label>
                                    <input type="date" name="created_at" class="form-control" value="<?= htmlspecialchars($old['created_at'] ?? '') ?>">
                                    <small class="text-danger"><?= $errors['created_at'] ?? '' ?></small>
                                </div>

                                <button class="btn btn-primary w-100">Thêm Blog</button>

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
.ck-editor__editable {
    min-height: 300px;
}
    </style>
<script>
document.getElementById('image').addEventListener('change',(e)=>{
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
<script>
document.addEventListener("DOMContentLoaded", function() {
    ClassicEditor
        .create(document.querySelector('#noi_dung'))
        .catch(error => { console.error(error); });
});
</script>

</body>
</html>
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
        <div class="col-10" style="padding-top:100px">
            <div class="create-blog-container">
                <h1 class="fw-bold d-flex align-items-center gap-3 mb-4" style="color: #0d6efd;">
                <i class="bi bi-plus-circle-fill fs-1 text-primary"></i>
                Thêm Blog
            </h1>
            <form action="<?= BASE_URL .'admin-create-blog' ?>" method="post" enctype="multipart/form-data">
                  <div class="d-flex justify-content-end mb-3"> 
                    <a href="<?=BASE_URL .'admin-list-blog' ?>" class="btn btn-primary btn-sm">Quay lai</a> 
                </div>  
                <div class="mb-3">
                <label class="form-label fw-semibold">Tiêu đề</label>
                <div class="input-group">
                    <input type="text" id="tieu_de" name="tieu_de" class="form-control" value="<?= htmlspecialchars($old['tieu_de'] ?? '') ?>">
                </div>
                    <p id="tieu_deError" class="text-danger small mt-1">
                            <?= $errors['tieu_de'] ?? '' ?>
                    </p>
                </div>
               <div class="mb-3">
                    <label class="form-label fw-semibold">Nội dung</label>
                    <textarea name="noi_dung" id="noi_dung" rows="10"><?= htmlspecialchars($old['noi_dung'] ?? '') ?></textarea>
                    <p id="noi_dungError" class="text-danger small mt-1">
                            <?= $errors['noi_dung'] ?? '' ?>
                    </p>
                </div>

                <div class="mb-3">
                <label class="form-label fw-semibold">Ảnh</label>
                <div class="input-group">
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                 <img id="preview" src="" alt="Xem trước ảnh" style="margin-top:10px; max-width:200px; display:none;">
                <p id="imageError" class="text-danger small mt-1">
                    <?= $errors['image'] ?? '' ?>
                </p>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold">Tác Giả</label>
                <div class="input-group">
                    <select name="author_id" class="form-control">
                        <option value="">--Chọn Tác Giả--</option>
                        <?php foreach($author as $authors) :?>
                            <option value="<?= $authors['id'] ?>" 
                                <?= (isset($old['author_id']) && $old['author_id']==$authors['id'])?'selected':'' ?>>
                                <?= $authors['name']?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <p id="author_idError" class="text-danger small mt-1">
                    <?= $errors['author_id'] ?? '' ?>
                </p>
            </div>

             <div class="mb-3">
                <label class="form-label fw-semibold">Danh mục</label>
                <div class="input-group">
                    <select name="category_id" class="form-control">
                        <option value="">--Danh mục--</option>
                        <?php foreach($category as $categorys) :?>
                            <option value="<?= $categorys['id'] ?>" 
                            <?= (isset($old['category_id']) && $old['category_id']==$categorys['id'])?'selected':'' ?>>
                                <?= $categorys['name']?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <p id="category_idError" class="text-danger small mt-1">
                    <?= $errors['category_id'] ?? '' ?>
                </p>
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
                <input type="date" name="created_at" class="form-control" 
                    value="<?= htmlspecialchars($old['created_at'] ?? '') ?>">
                <p class="text-danger small"><?= $errors['created_at'] ?? '' ?></p>
            </div>

            <button class="btn btn-primary btn-sm">Thêm Blog</button>
            </div> 
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
.ck-editor__editable {
    min-height: 300px;
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
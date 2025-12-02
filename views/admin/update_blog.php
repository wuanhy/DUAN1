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
                <?php include "views/admin/sidebar.php";?>
            </div>
            <div class="col-10" style="padding-top: 100px;  ">
        <div class="update-blog-container">
            <form action="<?= BASE_URL .'admin-update-blog&id=' . ($data['id']) ?>" method="post" enctype="multipart/form-data">
                    <div class="d-flex justify-content-end mb-3"> 
                    <a href="<?=BASE_URL .'admin-list-blog' ?>" class="btn btn-primary btn-sm">Quay lai</a> 
        </div>
    <div class="mb-3">
        <label class="form-label">Tiêu đề</label>
        <input type="text" name="tieu_de" class="form-control"
               value="<?= htmlspecialchars($old['tieu_de'] ?? $data['tieu_de'] ) ?>">
        <small class="text-danger"><?= $errors['tieu_de'] ?? '' ?></small>
    </div>

    <div class="mb-3">
        <label class="form-label fw-semibold">Nội dung</label>
        <textarea name="noi_dung" id="noi_dung" rows="10" class="form-control"><?= htmlspecialchars($old['noi_dung'] ?? $data['noi_dung']) ?></textarea>
        <small class="text-danger"><?= $errors['noi_dung'] ?? '' ?></small>
    </div>
        
    <div class="mb-3">
        <label class="form-label">Ảnh Blog</label>
        <?php if(!empty($data['image'])): ?>
        <div class="mb-2">
            <img src="<?= BASE_URL . $data['image'] ?>" alt="" width="100">
        </div>
        <?php endif; ?>
        <input type="file" name="image" class="form-control" id="image">
        <img id="preview" src="" alt="Xem trước ảnh" style="margin-top:10px; max-width:200px; display:none;">
    </div>

    <div class="mb-3">
        <label class="form-label">Tác Giả</label>
        <select name="author_id" class="form-control">
            <?php foreach ($author as $authors) : ?>
                <option value="<?= $authors['id'] ?>"
                    <?= (($old['author_id'] ?? $data['author_id']) == $authors['id']) ? 'selected' : '' ?>>
                    <?= $authors['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <small class="text-danger"><?= $errors['author_id'] ?? '' ?></small>
    </div>
    
     <div class="mb-3">
        <label class="form-label fw-semibold">Danh mục</label>
                <select name="category_id" class="form-control">
                        <?php foreach($category as $categorys) :?>
                            <option value="<?= $categorys['id'] ?>" 
                                <?= (($old['category_id'] ?? $data['category_id'])==$categorys['id']) ? 'selected' : '' ?>>
                                <?= $categorys['name']?>
                            </option>
                        <?php endforeach ?>
                    </select>
           <small class="text-danger"><?= $errors['category_id'] ?? '' ?></small>
    </div>

    <div class="mb-3">
    <label class="form-label fw-semibold">Trạng thái</label>
    <select name="status" class="form-control">
        <option value="1" <?= (($old['status'] ?? $data['status']) == 1) ? 'selected' : '' ?>>Xuất bản</option>
        <option value="0" <?= (($old['status'] ?? $data['status']) == 0) ? 'selected' : '' ?>>Lưu nháp</option>
    </select>
</div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
</div>
</div>
    </div>
</div>
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
<style>
    body {
   background: linear-gradient(to right, #CFE8FF, #FAD4EC);
    min-height: 100vh;
    margin: 0;
    padding: 0;
}


.update-blog-container,
.container,
.wrapper {
    background-color: transparent !important;
}
</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
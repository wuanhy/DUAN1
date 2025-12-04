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
        <div class="col-10" style="padding-top: 100px;">
            <form action="<?= BASE_URL .'admin-update-blog&id=' . $data['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-end mb-3"> <a href="<?=BASE_URL .'admin-list-blog' ?>" class="btn btn-primary btn-sm">Quay lai</a> </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <h4 class="fw-bold mb-3">Chỉnh sửa Blog</h4>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tiêu đề Blog</label>
                                    <input type="text" name="tieu_de" class="form-control"
                                        value="<?= htmlspecialchars($old['tieu_de'] ?? $data['tieu_de']) ?>">
                                    <small class="text-danger"><?= $errors['tieu_de'] ?? '' ?></small>

                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Nội dung Blog</label>
                                    <textarea name="noi_dung" rows="12" class="form-control"><?= htmlspecialchars($old['noi_dung'] ?? $data['noi_dung']) ?></textarea>
                                    <small class="text-danger"><?= $errors['noi_dung'] ?? '' ?></small>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3">Cài đặt xuất bản</h5>
                                <div class="mb-3"> 
                                    <label class="form-label fw-semibold">Trạng thái</label> 
                                    <select name="status" class="form-control"> 
                                        <option value="1" <?= (($old['status'] ?? $data['status']) == 1) ? 'selected' : '' ?>>Xuất bản</option>
                                         <option value="0" <?= (($old['status'] ?? $data['status']) == 0) ? 'selected' : '' ?>>Lưu nháp</option>
                                    </select> 

                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tác Giả</label>
                                    <select name="author_id" class="form-control">
                                        <?php foreach ($author as $authors): ?>
                                            <option value="<?= $authors['id'] ?>" <?= ($data['author_id'] == $authors['id'] ? 'selected' : '') ?>>
                                                <?= $authors['name'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>

                                </div>
                                <div class="mb-3"> 
                                    <label class="form-label fw-semibold">Danh mục</label> 
                                    <select name="category_id" class="form-control"> 
                                        <?php foreach($category as $categorys) :?> 
                                            <option value="<?= $categorys['dm_id'] ?>" <?= (($old['category_id'] ?? $data['category_id'])==$categorys['dm_id']) ? 'selected' : '' ?>>
                                                 <?= $categorys['ten_danhmuc']?> 
                                            </option> 
                                        <?php endforeach ?> 
                                        </select> 
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Ảnh đại diện</label><br>
                                    <?php if (!empty($data['image'])): ?>
                                        <img src="<?= BASE_URL . $data['image'] ?>" width="120" class="rounded mb-2 shadow-sm">
                                    <?php endif; ?>
                                    <input type="file" name="image" class="form-control" id="image">
                                    <img id="preview" style="display:none; margin-top:10px; max-width:150px;">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Ngày xuất bản</label>
                                    <input type="date" name="created_at" class="form-control"
                                        value="<?= date('Y-m-d', strtotime($data['created_at'])) ?>">
                                </div>
                                <button class="btn btn-primary w-100">Cập nhật</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
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
        <div class="update-user-container">
            <form action="<?= BASE_URL .'?act=admin-update-user&id=' . ($data['id']) ?>" method="post">
         <div class="d-flex justify-content-end mb-3"> 
                    <a href="<?=BASE_URL .'?act=admin-list-user' ?>" class="btn btn-primary">Quay lai</a> 
        </div>
    <div class="mb-3">
        <label class="form-label">UserName</label>
        <input type="text" name="name" class="form-control"
               value="<?= htmlspecialchars($old['name'] ?? $data['name'] ) ?>">
        <small class="text-danger"><?= $errors['name'] ?? '' ?></small>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control"
               value="<?= htmlspecialchars($old['email'] ?? $data['email'] ) ?>">
        <small class="text-danger"><?= $errors['email'] ?? '' ?></small>
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control"
               value="<?= htmlspecialchars($old['phone'] ?? $data['phone'] ) ?>">
        <small class="text-danger"><?= $errors['phone'] ?? '' ?></small>
    </div>

    <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="address" class="form-control"
               value="<?= htmlspecialchars($old['address'] ?? $data['address'] ) ?>">
        <small class="text-danger"><?= $errors['address'] ?? '' ?></small>
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-control">
            <option value="1" <?= (($data['status'] ?? 1) == 1) ? 'selected' : '' ?>>Hoạt động</option>
            <option value="0" <?= (($data['status'] ?? 1) == 0) ? 'selected' : '' ?>>Vô hiệu hóa</option>
        </select>
        <small class="text-danger"><?= $errors['status'] ?? '' ?></small>
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


.update-user-container,
.container,
.wrapper {
    background-color: transparent !important;
}
</style>
</body>
</html>
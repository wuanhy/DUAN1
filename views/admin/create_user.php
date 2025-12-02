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
        <div class="list-user-container">
            <form action="<?= BASE_URL .'admin-create-user' ?>" method="post" enctype="multipart/form-data"> 
                <div class="d-flex justify-content-end mb-3"> 
                    <a href="<?=BASE_URL .'admin-list-user' ?>" class="btn btn-primary btn-sm">Quay lai</a> 
                </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">UserName</label>

                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0 rounded-start-pill">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" id="name" name="name"
                        class="form-control rounded-end-pill py-2 border-start-0"
                        placeholder="UserName"
                        value="<?= htmlspecialchars($old['name'] ?? '') ?>">
                </div>
                <p id="nameError" class="text-danger small mt-1">
                    <?= $errors['name'] ?? '' ?>
                </p>
            </div>


            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>

                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0 rounded-start-pill">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input type="email" id="email" name="email"
                        class="form-control rounded-end-pill py-2 border-start-0"
                        placeholder="Email"
                        value="<?= htmlspecialchars($old['email'] ?? '') ?>">
                </div>
                <p id="emailError" class="text-danger small mt-1">
                    <?= $errors['email'] ?? '' ?>
                </p>
            </div>

                <div class="mb-2">
                <label class="form-label fw-semibold">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0 rounded-start-pill">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" id="password" name="password"
                        class="form-control rounded-end-pill py-2 border-start-0"
                        placeholder="Mật khẩu">
                </div>
                <p id="passwordError" class="text-danger small mt-1">
                    <?= $errors['password'] ?? '' ?>
                </p>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Số điện thoại</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0 rounded-start-pill">
                        <i class="bi bi-telephone"></i>
                    </span>
                    <input type="text" id="phone" name="phone"
                        class="form-control rounded-end-pill py-2 border-start-0"
                        placeholder="Phone"
                        value="<?= htmlspecialchars($old['phone'] ?? '') ?>">
                </div>
                <p id="phoneError" class="text-danger small mt-1">
                    <?= $errors['phone'] ?? '' ?>
                </p>
            </div>


            <div class="mb-3">
                <label class="form-label fw-semibold">Địa chỉ</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0 rounded-start-pill">
                        <i class="bi bi-geo-alt"></i>
                    </span>
                    <input type="text" id="address" name="address"
                        class="form-control rounded-end-pill py-2 border-start-0"
                        placeholder="Address"
                        value="<?= htmlspecialchars($old['address'] ?? '') ?>">
                </div>
                <p id="addressError" class="text-danger small mt-1">
                    <?= $errors['address'] ?? '' ?>
                </p>
            </div>
                <button type="submit" class="btn btn-primary">Thêm HDV</button>
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


.list-user-container,
.container,
.wrapper {
    background-color: transparent !important;
}
</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
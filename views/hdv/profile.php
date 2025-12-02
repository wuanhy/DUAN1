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
    <div class="main-container">
        <div class="row">
            <div class="col-2">
                <?php include "views/hdv/sidebar.php";?>
            </div>
            <div class="col-10" style="padding: 40px;">

    <h3 class="mb-4 fw-bold">Thông tin cá nhân</h3>

    <div class="card p-4 shadow-sm" style="border-radius: 12px;">
        <div class="row">

            <div class="col-md-3 text-center">
                <img src="<?= BASE_URL . ($_SESSION['userLogin']['avatar'] ?? 'public/image/meo.jpg') ?>" 
                     class="rounded-circle mb-3"
                     style="width: 120px; height: 120px; object-fit: cover;">
                
                <button class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-camera"></i> Thay đổi ảnh
                </button>
            </div>

            <div class="col-md-9">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Họ và tên</label>
                    <input type="text" class="form-control" 
                           value="<?= $_SESSION['userLogin']['name'] ?? '' ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" 
                           value="<?= $_SESSION['userLogin']['email'] ?? '' ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Phone</label>
                    <input type="email" class="form-control" 
                           value="<?= $_SESSION['userLogin']['phone'] ?? '' ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Address</label>
                    <input type="email" class="form-control" 
                           value="<?= $_SESSION['userLogin']['address'] ?? '' ?>" disabled>
                </div>
            </div>

        </div>
    </div>

</div>
</div>
    </div>
    <style>
        body {
        background: linear-gradient(to right, #CFE8FF, #FAD4EC);
         min-height: 100vh;
}
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
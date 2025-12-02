<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Tài Khoản - Elite Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    html {
        height: 100%;
    }

    body {
        height: 100%;
        background-image: linear-gradient(to right, #e3f2ff, #fff0f5);
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        overflow-y: auto;
        /* Cho phép cuộn nếu màn hình nhỏ */
        padding: 20px;
        /* Thêm padding để không bị sát mép khi cuộn */
    }

    .register-card {
        max-width: 400px;
        width: 100%;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        background-color: white;
        border-radius: 15px;
    }

    .btn-custom-blue {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 25px;
        font-weight: bold;
        padding: 10px 0;
        transition: background-color 0.3s;
    }

    .btn-custom-blue:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .text-custom-info {
        color: #6f42c1 !important;
        font-weight: bold;
    }

    .form-control.rounded-pill {
        height: 45px;
    }
    </style>
</head>

<body>
    
    <div class="card register-card p-5"> 
        <div class="card-body">
            <div class="text-center mb-4">
                 <img src="<?= BASE_URL . 'public/image/logo.png' ?>" alt="Tour Travel Logo" height="50"> 
            </div>

            <h5 class="card-title text-center fw-bold mb-4">Đăng ký tài khoản Tour Travel</h5>
            
            <form id="registerForm" action="<?= BASE_URL ?>register" method="post" novalidate>

    <!-- Email -->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text d-flex align-items-center justify-content-center" style="width:50px;">
                <i class="bi bi-envelope-fill"></i>
            </span>
            <input type="email" id="email" name="email" 
                   class="form-control rounded-end-pill py-2" 
                   placeholder="Email" value="<?= htmlspecialchars($old['email'] ?? '') ?>">
        </div>
        <p id="emailError" class="text-danger small mt-1"><?= $errors['email'] ?? '' ?></p>
    </div>

    <!-- Họ và tên -->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text d-flex align-items-center justify-content-center" style="width:50px;">
                <i class="bi bi-person-fill"></i>
            </span>
            <input type="text" id="name" name="name" 
                   class="form-control rounded-end-pill py-2" 
                   placeholder="Họ và Tên" value="<?= htmlspecialchars($old['name'] ?? '') ?>">
        </div>
        <p id="nameError" class="text-danger small mt-1"><?= $errors['name'] ?? '' ?></p>
    </div>

    <!-- Số điện thoại -->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text d-flex align-items-center justify-content-center" style="width:50px;">
                <i class="bi bi-telephone-fill"></i>
            </span>
            <input type="tel" id="phone" name="phone" 
                   class="form-control rounded-end-pill py-2" 
                   placeholder="Số điện thoại" value="<?= htmlspecialchars($old['phone'] ?? '') ?>">
        </div>
        <p id="telError" class="text-danger small mt-1"><?= $errors['phone'] ?? '' ?></p>
    </div>

    <!-- Mật khẩu -->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text d-flex align-items-center justify-content-center" style="width:50px;">
                <i class="bi bi-lock-fill"></i>
            </span>
            <input type="password" id="password" name="password" 
                   class="form-control py-2" 
                   placeholder="Mật khẩu">
        </div>
        <p id="passwordError" class="text-danger small mt-1"><?= $errors['password'] ?? '' ?></p>
    </div>

    <!-- Xác nhận mật khẩu -->
    <div class="mb-4">
        <div class="input-group">
            <span class="input-group-text d-flex align-items-center justify-content-center" style="width:50px;">
                <i class="bi bi-lock-fill"></i>
            </span>
            <input type="password" id="repass" name="repass" 
                   class="form-control py-2" 
                   placeholder="Xác nhận Mật khẩu">
        </div>
        <p id="repassError" class="text-danger small mt-1"><?= $errors['repass'] ?? '' ?></p>
    </div>

    <button type="submit" class="btn btn-custom-blue w-100">Đăng Ký</button>

    <p class="text-center mt-4 small">
        Đã có tài khoản? 
        <a href="<?= BASE_URL . 'login' ?>" class="text-custom-info text-decoration-none">Đăng nhập ngay</a>
    </p>

</form>

<script>
document.getElementById('registerForm').addEventListener('submit', function(e){
    let valid = true;

    //Lấy giá trị input
    const email = document.getElementById('email').value.trim();
    const name = document.getElementById('name').value.trim();
    const tel = document.getElementById('phone').value.trim();
    const password = document.getElementById('password').value;
    const confirm_password = document.getElementById('repass').value;

    //Lấy element báo lỗi
    const emailError = document.getElementById('emailError');
    const nameError = document.getElementById('nameError');
    const telError = document.getElementById('telError');
    const passwordError = document.getElementById('passwordError');
    const confirmPasswordError = document.getElementById('confirmPasswordError');

    //Reset lỗi
    emailError.textContent = '';
    nameError.textContent = '';
    telError.textContent = '';
    passwordError.textContent = '';
    confirmPasswordError.textContent = '';

    // Validate email
    if(email === ''){
        emailError.textContent = 'Vui lòng nhập email.';
        valid = false;
    } else {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(!emailPattern.test(email)){
            emailError.textContent = 'Email không hợp lệ.';
            valid = false;
        }
    }

    // Validate name
    if(name === ''){
        nameError.textContent = 'Vui lòng nhập họ và tên.';
        valid = false;
    }

   // Validate tel (số điện thoại 10-11 số)
    if(tel === ''){
        telError.textContent = 'Vui lòng nhập số điện thoại.';
        valid = false;
    } else {
        const telPattern = /^[0-9]{10,11}$/;
        if(!telPattern.test(tel)){
            telError.textContent = 'Số điện thoại không hợp lệ.';
            valid = false;
        }
    }

   // Validate password
    if(password === ''){
        passwordError.textContent = 'Vui lòng nhập mật khẩu.';
        valid = false;
    } else if(password.length < 6){
        passwordError.textContent = 'Mật khẩu phải từ 6 ký tự trở lên.';
        valid = false;
    }

    // Validate confirm password
    if(confirm_password === ''){
        confirmPasswordError.textContent = 'Vui lòng xác nhận mật khẩu.';
        valid = false;
    } else if(password !== confirm_password){
        confirmPasswordError.textContent = 'Mật khẩu xác nhận không khớp.';
        valid = false;
    }

    if(!valid) e.preventDefault(); 
});
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
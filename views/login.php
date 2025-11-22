<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Tài Khoản - Tour Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        html {
            height: 100%;
        }

        body {
            height: 100%; 
            
            background-image: linear-gradient(to right, #e3f2ff, #fff0f5); 
            
            display: flex;
            justify-content: center; /* Căn giữa ngang */
            align-items: center; /* Căn giữa dọc */
            margin: 0; 
            overflow: hidden; 
        }
        

        .login-card {
            max-width: 400px;
            width: 100%;
            /* Tăng shadow và đảm bảo nền trắng để nổi bật trên gradient */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); 
            background-color: white; 
            border-radius: 15px; 
        }
        .btn-custom-blue {
            background-color: #007bff; /* Xanh Dương */
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
        .text-custom-primary {
            color: #007bff !important; /* Xanh Dương cho link Quên mật khẩu */
            font-weight: bold;
        }
        .text-custom-info {
             color: #6f42c1 !important; /* Màu Tím/Violet cho link Đăng ký */
             font-weight: bold;
        }
        .form-control.rounded-pill {
            height: 45px;
        }
    </style>
</head>
<body>
            <?php
            
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];

// Sau khi lấy xong thì xóa để tránh hiển thị lại nhiều lần
unset($_SESSION['errors']);
unset($_SESSION['old']);
?>

    <div class="card login-card p-5 mx-auto my-5">
    <div class="card-body">
        <div class="text-center mb-4">
            <img src="<?= BASE_URL . 'assets/image/logotour.png' ?>" alt="Tour Travel Logo" height="50">
        </div>

        <h5 class="card-title text-center fw-bold mb-4">Chào mừng đến với Tour Travel</h5>

        <form action="<?= BASE_URL . '?action=login'?>" method="post" >
            <div class="mb-3">
                <input type="email" id="email" name="email" class="form-control rounded-pill py-2" placeholder="Email"
                       value="<?= htmlspecialchars($old['email'] ?? '') ?>">
                <p id="emailError" class="text-danger small mt-1">
                    <?= $errors['email'] ?? '' ?>
                </p>
            </div>

            <div class="mb-2">
                <input type="password" id="password" name="password" class="form-control rounded-pill py-2" placeholder="Mật khẩu">
                <p id="passwordError" class="text-danger small mt-1">
                    <?= $errors['password'] ?? '' ?>
                </p>
            </div>

            <div class="d-flex justify-content-end mb-4 me-3">
                <a href="#" class="text-custom-primary text-decoration-none small">Quên mật khẩu?</a>
            </div>
            <?php if (!empty($errors['login'])) : ?>
                <div class="alert alert-danger">
                    <?= $errors['login'] ?>
            </div>          
            <?php endif; ?>

            <button type="submit" class="btn btn-custom-blue w-100">Đăng Nhập</button>

            <p class="text-center mt-4 small">
                Bạn chưa có tài khoản?
                <a href="<?= BASE_URL . '?action=register' ?>" class="text-custom-info text-decoration-none">Đăng ký ngay</a>
            </p>
        </form>
    </div>
</div>

<!-- <script>
document.getElementById('loginForm').addEventListener('submit', function(e){
    let valid = true;

    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;

    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');

    emailError.textContent = '';
    passwordError.textContent = '';

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

    // Validate password
    if(password === ''){
        passwordError.textContent = 'Vui lòng nhập mật khẩu.';
        valid = false;
    } else if(password.length < 6){
        passwordError.textContent = 'Mật khẩu phải từ 6 ký tự trở lên.';
        valid = false;
    }

    if(!valid) e.preventDefault(); // Nếu không hợp lệ, ngăn submit
});
</script> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php

class HomeController
{
    public function index()
    {
        $view = "client/home";
        require_once PATH_VIEW . 'main.php';
    }
    
        public function login() {
        $errors = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        if (empty($email)) {
            $errors['email'] = "Vui lòng nhập email.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email không hợp lệ.";
        }

        if (empty($password)) {
            $errors['password'] = "Vui lòng nhập mật khẩu.";
        } elseif (strlen($password) < 6) {
            $errors['password'] = "Mật khẩu phải từ 6 ký tự trở lên.";
        }

        if (empty($errors)) {
            $user = new User();
            $check = $user->checkLogin($email, $password);

            if ($check) {
                $_SESSION['userLogin'] = [
                    'id' => $check['id'],
                    'name' => $check['name'],
                    'email' => $check['email'],
                    'role' => $check['role'],
                ];

                if ($check['role'] == 1) {
                    header("Location:" . BASE_URL . '?action=admin-dashboard');
                    exit();
                }
                header("Location:" . BASE_URL .'?action=');
                exit();
            } else {
                $errors['login'] = "Đăng nhập thất bại, email hoặc mật khẩu không đúng.";
            }
        }

        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = ['email' => $email];
    }

    // Load view
    $view = 'login';
    require_once PATH_VIEW . 'main.php';
}
    public function register(){
          $errors = [];
            $old = [];
          if($_SERVER["REQUEST_METHOD"]=="POST"){
            $old = $_POST;

            if (empty($_POST['name'])) {
                 $errors['name'] = "Vui lòng nhập họ tên."; 
                } 

            if (empty($_POST['email'])){ 
                $errors['email'] = "Vui lòng nhập email."; 
            }else { 
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                     $errors['email'] = "Email không hợp lệ."; 
                } 
            }
            if (empty($_POST['password'])) { 
                $errors['password'] = "Vui lòng nhập mật khẩu."; 
            } else { 
                if (strlen($_POST['password']) < 6) { 
                    $errors['password'] = "Mật khẩu phải từ 6 ký tự trở lên."; 
                }
            }

            if (empty($_POST['phone'])) { 
                $errors['phone'] = "Vui lòng nhập số điện thoại."; 
            }
            if (empty($_POST['repass'])) { 
                $errors['repass'] = "Vui lòng nhập xác nhận mật khẩu."; 
            }
            $user = new User(); 
            if (!empty($_POST['email']) && $user->checkEmail($_POST['email'])) { 
                $errors['email'] = "Email đã tồn tại."; 
            }
             if(empty($errors)){
             $user->register(
                $_POST['name'],
                $_POST['email'],
                $_POST['password'],
                $_POST['phone'],
                $_POST['role'] ?? 0
            );
            header("Location: " . BASE_URL . "?action=login");
            exit();
        }
    }
        
        $view = 'register';
        require_once PATH_VIEW .'main.php';
    }
    public function about(){
        $view = 'client/about';
        require_once PATH_VIEW .'main.php';
    }
    public function introduction(){
        $view = 'client/introduction';
        require_once PATH_VIEW .'main.php';
    }
    public function blog(){
        $view = 'client/blog';
        require_once PATH_VIEW .'main.php';
    }
     public function faq(){
        $view = 'client/faq';
        require_once PATH_VIEW .'main.php';
    }
}

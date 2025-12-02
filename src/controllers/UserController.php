<?php 
namespace Src\Controllers;

use Src\Models\User; 
class UserController{
    public function index(){
        $user = new User();
        $listdata = $user->getList();

        $view = 'admin/list_user';
        require_once block_path('main');
    }
    public function create(){
       $errors = [];
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
            if (empty($_POST['address'])) { 
                $errors['address'] = "Vui lòng nhập địa chỉ"; 
            }
            
        
            
            $user = new User(); 
            if (!empty($_POST['email']) && $user->checkEmail($_POST['email'])) { 
                $errors['email'] = "Email đã tồn tại."; 
            }
             if(empty($errors)){
                        $user->create(
                $_POST['name'],
                $_POST['email'],
                $_POST['password'],
                $_POST['phone'],
                $_POST['address'],
                $_POST['role'],

);
            $_SESSION['success']="Thêm thành công";
            header("Location: " . BASE_URL . "admin-list-user");
            exit();
        }
    }
    $view = 'admin/create_user';
    require_once block_path('main');
    
}
public function update(){
            $user = new User(); 
            $data = $user->getOne($_GET['id']);
            $errors = [];
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

            if (empty($_POST['phone'])) { 
                $errors['phone'] = "Vui lòng nhập số điện thoại."; 
            }
            if (empty($_POST['address'])) { 
                $errors['address'] = "Vui lòng nhập địa chỉ"; 
            }
            
             if(empty($errors)){
                        $user->update(
                $_GET['id'],
                $_POST['name'],
                $_POST['email'],
                $_POST['phone'],
                $_POST['address'],
                $_POST['status'],
);
            $_SESSION['success']="Sửa thành công";
            header("Location: " . BASE_URL . "admin-list-user");
            exit();
        }
    }
    $user = new User();
    $listdata = $user->getList();
    $view = 'admin/update_user';
    require_once block_path('main');
}
public function delete(){
    $user = new User();
    $user->delete($_GET['id']);
    $_SESSION['success']="Xóa thành công";
    header("Location:" . BASE_URL .'admin-list-user');
    exit();
}
}
?>
<?php 
namespace Src\Controllers;

use Src\Models\Trans; 
class TransController{
        public function index(){

        $trans = new Trans();
        $listdata = $trans->getList();
        $view = 'admin/list_trans';
        require_once block_path('main');    
        }

        public function create(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
                $errors=[];
                $old=$_POST;
                if(empty($_POST['ten_pt'])){
                        $errors['ten_pt']="Vui lòng nhập tên phương tiện";
                }
                if(empty($_POST['bien_so'])){
                        $errors['bien_so']="Vui lòng nhập biến số xe";
                }
                if(empty($_POST['ten_tai_xe'])){
                        $errors['ten_tai_xe']="Vui lòng nhập tên tài xế";
                }
                if($_POST['loai_pt_id']==""){
                        $errors['loai_pt_id']="Vui lòng chọn loại phương tiện";
                }
                if (empty($_FILES['anh_pt']['name'])) {
                        $errors['anh_pt'] = "Vui lòng chọn ảnh";
                }

                if(empty($_POST['so_cho_ngoi'])){
                        $errors['so_cho_ngoi']="Nhập số chỗ tối đa cho xe";
                }
                $trans = new Trans();
                if(empty($errors)){
                        if(!empty($_FILES['anh_pt']['name'])){
                        $file = $_FILES['anh_pt'];
                        $newName = time() . $file['name'];
                        $path = 'public/uploads/' . $newName;
                        move_uploaded_file($file['tmp_name'],$path);
            }
                        $trans->create(
                                $_POST['ten_pt'],
                                $_POST['bien_so'],
                                $_POST['ten_tai_xe'],
                                $_POST['loai_pt_id'],
                                $path,
                                $_POST['so_cho_ngoi'],
                        );
                        $_SESSION['success']='Thêm phương tiện thành công';
                        header("Location:" . BASE_URL .'admin-list-trans');
                        exit();
                }

        }
        $trans = new Trans();
        $listdata=$trans->getAll();
        $view = 'admin/create_trans';
        require_once block_path('main'); 
        }

        public function update(){
                $errors=[];
                if($_SERVER['REQUEST_METHOD']=="POST"){
                $old=$_POST;
                if(empty($_POST['ten_pt'])){
                        $errors['ten_pt']="Vui lòng nhập tên phương tiện";
                }
                if(empty($_POST['bien_so'])){
                        $errors['bien_so']="Vui lòng nhập biến số xe";
                }
                if(empty($_POST['ten_tai_xe'])){
                        $errors['ten_tai_xe']="Vui lòng nhập tên tài xế";
                }
                if($_POST['loai_pt_id']==""){
                        $errors['loai_pt_id']="Vui lòng chọn loại phương tiện";
                }
                if(empty($_POST['so_cho_ngoi'])){
                        $errors['so_cho_ngoi']="Nhập số chỗ tối đa cho xe";
                }
                $trans = new Trans();
                $data=$trans->getOne($_GET['id']);
                
                $file = $_FILES['anh_pt'];
                $path=$data['anh_pt'];
                if(isset($file) && $file['error']===UPLOAD_ERR_OK){

                        if(!empty($data['anh_pt']) && file_exists($data['anh_pt'])){
                        unlink($data['anh_pt']);
                }
                                $newName = time() . $file['name'];
                                $path = 'public/uploads/' . $newName;
                                move_uploaded_file($file['tmp_name'],$path);
                }
                if(empty($errors)){
                        $trans->update(
                        $_GET['id'],
                        $_POST['ten_pt'],
                        $_POST['bien_so'],
                        $_POST['ten_tai_xe'],
                        $_POST['loai_pt_id'],
                        $path,
                        $_POST['so_cho_ngoi'],

                );
                $_SESSION['success']='Sửa thành công';
                 header("Location:" .BASE_URL .'admin-list-trans');
                exit();
        }
}
        
        $trans= new Trans();
        $listdata = $trans->getAll();

        $data = $trans->getOne($_GET['id']);
        $view = 'admin/update_trans';
        require_once block_path('main');
        }

        public function delete(){
                $trans = new Trans();
                $data = $trans->getOne($_GET['id']);
                $trans->delete($_GET['id']);
                if(!empty($data['anh_pt']) && file_exists($data['anh_pt'])){
                        unlink($data['anh_pt']);
                }
                $_SESSION['success']="Xóa thành công";
                header("Location:" . BASE_URL .'admin-list-trans');
                exit();   
        }
    
}
?>
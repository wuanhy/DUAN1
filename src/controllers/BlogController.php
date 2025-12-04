<?php
namespace Src\Controllers;
use Src\Models\Blog;

class BlogController{
    public function index(){
        $blog = new Blog();
        $listdata = $blog->getAll();

        $view = 'admin/list_blog';
        require_once block_path('main');
    }
    public function blog(){
    $blog = new Blog();
    $listdata = $blog->getBlog();

    $view = 'client/blog';
    require_once block_path('main');
}

    public function create(){
        $errors=[];
        $old=$_POST;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST['tieu_de'])){
            $errors['tieu_de']="Vui lòng nhập tiêu đề";
        }
        if(empty($_POST['noi_dung'])){
            $errors['noi_dung']="Vui lòng nhập nội dung";
        }
       if (empty($_FILES['image']['name'])) {
            $errors['image'] = "Vui lòng chọn ảnh";
        }
        if(empty($_POST['author_id'])){
            $errors['author_id']="Vui lòng chọn tác giả";
        }
        if(empty($_POST['category_id'])){
            $errors['category_id']="Vui lòng chọn danh mục";
        }
        if (empty($_POST['created_at'])) {
            $errors['created_at'] = "Vui lòng chọn ngày xuất bản";
        }
        $blog= new Blog();
        if(empty($errors)){
            if(!empty($_FILES['image']['name'])){
            $file = $_FILES['image'];
            $newName = time() . $file['name'];
            $path = 'public/uploads/' . $newName;
            move_uploaded_file($file['tmp_name'],$path);
        }
            $blog->create(
                $_POST['tieu_de'],
                $_POST['noi_dung'],
                $path,
                $_POST['author_id'],
                $_POST['category_id'],
                $_POST['created_at'],
                $_POST['status'] ?? 1,

            );
             $_SESSION['success']='Thêm blog thành công';
                header("Location:" . BASE_URL .'admin-list-blog');
                exit();
        }


    }
    $blog = new Blog();
    $category = $blog->getList();
    $author = $blog->getAllAuthors();
    $listdata = $blog->getAll();


    $view = 'admin/create_blog';
    require_once block_path('main');
    }
    public function update(){
        $errors=[];
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $old=$_POST;
        if(empty($_POST['tieu_de'])){
            $errors['tieu_de']="Vui lòng nhập tiêu đề";
        }
        if(empty($_POST['noi_dung'])){
            $errors['noi_dung']="Vui lòng nhập nội dung";
        }
        if(empty($_POST['author_id'])){
            $errors['author_id']="Vui lòng chọn tác giả";
        }
        if(empty($_POST['category_id'])){
            $errors['category_id']="Vui lòng chọn danh mục";
        }
        if (empty($_POST['created_at'])) {
            $errors['created_at'] = "Vui lòng chọn ngày xuất bản";
        }
        $blog = new Blog();
        $data=$blog->getOne($_GET['id']);

        $file = $_FILES['image'];
        $path=$data['image'];

        if(isset($file) && $file['error']===UPLOAD_ERR_OK){
           if(!empty($data['image']) && file_exists($data['image'])){
                unlink($data['image']);
          
        }
                $newName = time() . $file['name'];
                $path = 'public/uploads/' . $newName;
                move_uploaded_file($file['tmp_name'],$path);

    }
        if(empty($errors)){
            $blog->update(
                $_GET['id'],
                $_POST['tieu_de'],
                $_POST['noi_dung'],
                $path,
                $_POST['author_id'],
                $_POST['category_id'],
                $_POST['created_at'],
                $_POST['status'],

            );
            $_SESSION['success']='Sửa blog thành công';
            header("Location:" . BASE_URL .'admin-list-blog');
            exit();
        }
    }

    $blog= new Blog();
    $category = $blog->getList();
    $data = $blog->getOne($_GET['id']);
    $author = $blog->getAllAuthors();

    $view = 'admin/update_blog';
    require_once block_path('main');
    }
    public function delete(){
                 $blog = new Blog();
                $data = $blog->getOne($_GET['id']);
                $blog->delete($_GET['id']);
                if(!empty($data['image']) && file_exists($data['image'])){
                        unlink($data['image']);
                }
                $_SESSION['success']="Xóa thành công";
                header("Location:" . BASE_URL .'admin-list-blog');
                exit();  
    }
    public function detail(){
        
    }
}
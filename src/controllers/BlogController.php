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
    $listdata = $blog->getAll();

    $view = 'client/blog';
    require_once block_path('main');
}

    public function create(){
        
    }
    public function update(){

    }
    public function delete(){
        
    }
}
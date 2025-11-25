<?php
namespace Src\Models;
class Blog extends BaseModel{
    public function getAll(){
        $sql = "SELECT blog.*, tb_user.name AS author_name, tb_danhmuc.name AS category_name
                FROM blog
                JOIN tb_user ON blog.author_id = tb_user.id
                JOIN tb_danhmuc ON blog.category_id = tb_danhmuc.id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
}
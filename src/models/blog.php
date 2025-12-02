<?php
namespace Src\Models;
use PDO;
class Blog extends BaseModel{
    public function getAll(){
        $sql = "SELECT blog.*, tb_user.name AS author_name, tb_danhmuc.name AS category_name 
                FROM blog
                JOIN tb_user ON blog.author_id = tb_user.id
                JOIN tb_danhmuc ON blog.category_id = tb_danhmuc.id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
      public function getBlog(){
        $sql = "SELECT blog.*, tb_user.name AS author_name, tb_danhmuc.name AS category_name 
                FROM blog
                JOIN tb_user ON blog.author_id = tb_user.id
                JOIN tb_danhmuc ON blog.category_id = tb_danhmuc.id WHERE blog.status=1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllAuthors(){ 
    $sql = "SELECT id, name FROM tb_user WHERE role_id=1"; 
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function getList(){
    $sql = "SELECT * FROM tb_danhmuc";
    $stmt=$this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

public function create($tieu_de,$noi_dung,$path,$author_id,$category_id,$created_at,$status=1){
    $sql = "INSERT INTO blog (tieu_de,noi_dung,image,author_id,category_id,created_at,status) VALUES (:tieu_de,:noi_dung,:image,:author_id,:category_id,:created_at,:status)";
    $stmt=$this->pdo->prepare($sql);
    $stmt->execute([
        ':tieu_de'=>$tieu_de,
        ':noi_dung'=>$noi_dung,
        ':image'=>$path,
        ':author_id'=>$author_id,
        ':category_id'=>$category_id,
        ':created_at'=>$created_at,
        ':status'=>$status
    ]);
}
        public function getOne($id){
            $sql = "SELECT * FROM blog WHERE id=:id";
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute([
                ':id'=>$id,
            ]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    public function update($id,$tieu_de,$noi_dung,$path,$author_id,$category_id,$created_at,$status){
            $sql = "UPDATE blog SET tieu_de=:tieu_de,noi_dung=:noi_dung,image=:image,author_id=:author_id,category_id=:category_id,created_at=:created_at,status=:status WHERE id=:id";
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute([
                ':id'=>$id,
                ':tieu_de'=>$tieu_de,
                ':noi_dung'=>$noi_dung,
                ':image'=>$path,
                ':author_id'=>$author_id,
                ':category_id'=>$category_id,
                ':created_at'=>$created_at,
                ':status'=>$status,
            ]);
        }

        public function delete($id){
        $sql = "DELETE FROM `blog` WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
    }

}
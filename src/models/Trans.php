<?php
namespace Src\Models;
use PDO;
use Src\Models\BaseModel;
    class Trans extends BaseModel{
        public function getList(){
            $sql = "SELECT tb_phuongtien.*,tb_danhmuc_pt.name AS danhmucpt FROM tb_phuongtien JOIN tb_danhmuc_pt ON tb_phuongtien.loai_pt_id = tb_danhmuc_pt.id ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getAll(){
            $sql = "SELECT * FROM tb_danhmuc_pt";
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function create($ten_pt,$bien_so,$ten_tai_xe,$loai_pt_id,$path,$so_cho_ngoi){
            $sql ="INSERT INTO tb_phuongtien (ten_pt,bien_so,ten_tai_xe,loai_pt_id,anh_pt,so_cho_ngoi) VALUES (:ten_pt,:bien_so,:ten_tai_xe,:loai_pt_id,:anh_pt,:so_cho_ngoi)";
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute([
                ':ten_pt'=>$ten_pt,
                ':bien_so'=>$bien_so,
                ':ten_tai_xe'=>$ten_tai_xe,
                ':loai_pt_id'=>$loai_pt_id,
                ':anh_pt'=>$path,
                ':so_cho_ngoi'=>$so_cho_ngoi,
            ]);
        }
        public function getOne($pt_id){
        $sql = "SELECT * FROM tb_phuongtien WHERE pt_id=:pt_id";
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute([
                ':pt_id'=>$pt_id,
            ]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function update($pt_id,$ten_pt,$bien_so,$ten_tai_xe,$loai_pt_id,$path,$so_cho_ngoi){
            $sql = "UPDATE tb_phuongtien SET ten_pt=:ten_pt,bien_so=:bien_so,ten_tai_xe=:ten_tai_xe,loai_pt_id=:loai_pt_id,anh_pt=:anh_pt,so_cho_ngoi=:so_cho_ngoi WHERE pt_id=:pt_id";
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute([
                ':pt_id'=>$pt_id,
                ':ten_pt'=>$ten_pt,
                ':bien_so'=>$bien_so,
                ':ten_tai_xe'=>$ten_tai_xe,
                ':loai_pt_id'=>$loai_pt_id,
                ':anh_pt'=>$path,
                ':so_cho_ngoi'=>$so_cho_ngoi,
            ]);
        }
        public function delete($pt_id){
        $sql = "DELETE FROM `tb_phuongtien` WHERE pt_id = :pt_id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':pt_id' => $pt_id,
        ]);
        }
    }
?>
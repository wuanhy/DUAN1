<?php
namespace Src\Models;
use PDO;
class User extends BaseModel{
   
    public function checkEmail($email){
        $sql = "SELECT * FROM `tb_user` WHERE email = :email";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            'email' => $email
        ]);
        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }
    public function register($name, $email, $password, $phone, $role_id = "0", $address = ""){
        $sql = "INSERT INTO tb_user(name, email, password, phone, address, role_id) VALUES (:name, :email, :password, :phone, :address, :role_id)";  
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => md5($password),
            ':phone' => $phone,
            ':address' => $address,
            ':role_id' => intval($role_id)
        ]);
        return $this->pdo->lastInsertId();
    }
    public function checkLogin($email, $password){
        $sql = "SELECT * FROM tb_user WHERE email = :email AND password = :password";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':email' => $email,
            ':password' => md5($password)
        ]);
        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }
    public function getList(){
        $sql = "SELECT tb_user.*,tb_role.name AS role_name FROM tb_user JOIN tb_role ON tb_user.role_id=tb_role.id WHERE tb_user.role_id!=1";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne($id){
        $sql = "SELECT * FROM `tb_user` WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':id' => $id
        ]);
        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }
    public function create($name,$email,$password,$phone,$address,$role=0){
        $sql = "INSERT INTO tb_user (name,email,password,phone,address,role_id) VALUES(:name,:email,:password,:phone,:address,:role_id)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":name"=>$name,
            ":email"=>$email,
            ":password"=>md5($password),
            ":phone"=>$phone,
            ":address"=>$address,
            ":role_id" => intval($role)
        ]);

    }
    public function update($id, $name, $email, $phone, $address, $status){
        $sql = "UPDATE `tb_user` SET `name`=:name,`email`=:email,`phone`=:phone,`address`=:address,`status`=:status WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':address' => $address,
            ':status'=>$status,
        ]);
    }
    public function delete($id){
        $sql = "DELETE FROM `tb_user` WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
    }
 
    
}
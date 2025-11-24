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
    public function register($name, $email, $password, $phone, $role = "0", $address = ""){
        $sql = "INSERT INTO tb_user(name, email, password, phone, address, role) VALUES (:name, :email, :password, :phone, :address, :role)";  
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => md5($password),
            ':phone' => $phone,
            ':address' => $address,
            ':role' => intval($role)
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
        $sql = "SELECT * FROM `tb_user`";
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
    public function update($id, $name, $email, $password, $phone, $address, $role){
        $sql = "UPDATE `tb_user` SET `name`=:name,`email`=:email,`password`=:password,`phone`=:phone,`address`=:address,`role`=:role WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
            ':name' => $name,
            ':email' => $email,
            ':password' => md5($password),
            ':phone' => $phone,
            ':address' => $address,
            ':role' => intval($role)
        ]);
    }
    public function delete($id){
        $sql = "DELETE FROM `tb_user` WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
    }
    
    public function isAdmin(){
        return isset($this->role) && $this->role == 1;
    }
    
    public function isGuide(){
        return isset($this->role) && $this->role == 2;
    }
}
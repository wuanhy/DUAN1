<?php
class User extends BaseModel{
   
    public function checkEmail($email){
        $sql = "SELECT * FROM `user` WHERE email = :email";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            'email' => $email
        ]);
        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }
    public function register($name, $email, $password, $phone, $address, $role = "0"){
        $sql = "INSERT INTO user(name, email, password, phone, address, role) VALUES (:name, :email, :password, :phone, :address, :role)";  
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => md5($password),
            ':phone' => $phone,
            ':address' => $address,
            ':role' => intval($role)
        ]);
        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }
    public function checkLogin($email, $password){
        $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':email' => $email,
            ':password' => md5($password)
        ]);
        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }
    public function getList(){
        $sql = "SELECT * FROM `user`";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
    public function getOne($id){
        $sql = "SELECT * FROM `user` WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':id' => $id
        ]);
        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }
    public function update($id, $name, $email, $password, $phone, $address, $role){
        $sql = "UPDATE `user` SET `name`=:name,`email`=:email,`password`=:password,`phone`=:phone,`address`=:address,`role`=:role WHERE id = :id";
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
        $sql = "DELETE FROM `user` WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> execute([
            ':id' => $id,
        ]);
    }
}
?>
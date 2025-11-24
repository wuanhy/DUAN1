<?php
namespace Src\Models;
class Blog extends BaseModel{
    public function getAll(){
        $sql = "SELECT * FROM blog";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
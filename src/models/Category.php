<?php
namespace Src\Models;
// use Src\Models\BaseModel;

class Category extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT * FROM tb_danhmuc";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

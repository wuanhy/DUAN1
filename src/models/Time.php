<?php
namespace Src\Models;
use PDO;
use Src\Models\BaseModel;
class Time extends BaseModel{
    public function getList(){
        $sql = "SELECT tuor_time.* , tb_tour.ten_tour AS name_tour, tb_tour.so_cho_toi_da , tb_tour.diem_den
        FROM tuor_time 
        JOIN tb_tour ON tuor_time.tour_id = tb_tour.tour_id 
        ORDER BY ngay ASC";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
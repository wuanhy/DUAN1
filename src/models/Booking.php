<?php
namespace Src\Models;
use Src\Models\BaseModel;
class Booking extends BaseModel{
    public function getAll(){
        $sql = "SELECT * FROM tb_tour";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
   
    public function create($tour_id, $ngay_dien_ra, $so_cho) {
        $sql = "INSERT INTO booking (tour_id, ngay_dien_ra, so_cho)
                VALUES (:tour_id, :ngay_dien_ra, :so_cho)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':tour_id' => $tour_id,
            ':ngay_dien_ra' => $ngay_dien_ra,
            ':so_cho' => $so_cho
        ]);
    }
}
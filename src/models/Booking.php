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
   
   public function create($tour_id, $ngay_dien_ra, $so_cho,$ngay_ket_thuc) {
        $sql = "INSERT INTO tb_booking (tour_id, ngay_dien_ra, so_cho,ngay_ket_thuc)
                VALUES (:tour_id, :ngay_dien_ra, :so_cho,:ngay_ket_thuc)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':tour_id' => $tour_id,
            ':ngay_dien_ra' => $ngay_dien_ra,
            ':so_cho' => $so_cho,
            ':ngay_ket_thuc' =>$ngay_ket_thuc,
        ]);
    }
}
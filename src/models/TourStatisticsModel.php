<?php
namespace Src\Models;
  use PDO;
class TourStatisticsModel extends BaseModel{
    public function getAll(){
        $sql = "SELECT 
                tb_booking.booking_id,
                tb_booking.tour_id,
                tb_tour.ten_tour,
                tb_booking.ngay_dien_ra,
                tb_booking.so_cho,
                tb_booking.status,
                tb_tour.anh_tour,
                tb_booking.ngay_ket_thuc
            FROM tb_booking 
            JOIN tb_tour  ON tb_booking.tour_id = tb_tour.tour_id
            ORDER BY tb_booking.ngay_dien_ra DESC
";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
   
}
    
?>
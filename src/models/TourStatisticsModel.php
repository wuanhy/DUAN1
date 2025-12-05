<?php
namespace Src\Models;
  use PDO;
class TourStatisticsModel extends BaseModel{
    public function getAll(){
        $sql = "SELECT 
                booking.booking_id,
                booking.tour_id,
                tb_tour.ten_tour,
                booking.ngay_dien_ra,
                booking.so_cho,
                booking.status,
                tb_tour.anh_tour
            FROM booking 
            JOIN tb_tour  ON booking.tour_id = tb_tour.tour_id
            ORDER BY booking.ngay_dien_ra DESC
";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
   
}
    
?>
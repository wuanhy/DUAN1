<?php
namespace Src\Models;
use PDO;
class Hdv extends BaseModel{
    public function getAll(){
                $sql = "SELECT 
                booking.booking_id,
                booking.tour_id,
                tb_tour.ten_tour,
                booking.ngay_dien_ra,
                booking.so_cho,
                booking.status
            FROM booking 
            JOIN tb_tour  ON booking.tour_id = tb_tour.tour_id
            ORDER BY booking.ngay_dien_ra DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getHdv(){
        $sql = "SELECT * FROM tb_user WHERE role_id=0 AND status=1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function assign($booking_id, $guide_id){
        $sql = "INSERT INTO assignment (booking_id, guide_id) VALUES (:booking_id, :guide_id)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ":booking_id"=>$booking_id, 
            ":guide_id"=>$guide_id
        ]);
    }
    public function getJobs($guide_id){
    $sql = "SELECT booking.booking_id, tb_tour.ten_tour, booking.ngay_dien_ra, booking.so_cho, booking.status
            FROM assignment 
            JOIN booking  ON assignment.booking_id = booking.booking_id
            JOIN tb_tour  ON booking.tour_id = tb_tour.tour_id
            WHERE assignment.guide_id = :guide_id
            ORDER BY booking.ngay_dien_ra DESC";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([':guide_id'=>$guide_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


}
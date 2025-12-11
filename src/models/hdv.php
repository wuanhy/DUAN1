<?php

namespace Src\Models;

use PDO;

class Hdv extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT 
                tb_booking.booking_id,
                tb_booking.tour_id,
                tb_booking.ngay_dien_ra,
                tb_booking.so_cho,
                tb_booking.status,
                tb_booking.ngay_ket_thuc,
                tb_tour.anh_tour,
                tb_tour.ten_tour,
                tb_tour.noi_xuat_phat,
                tb_tour.diem_den,
                (
                    SELECT tb_assignment.guide_id
                    FROM tb_assignment 
                    WHERE tb_assignment.booking_id = tb_booking.booking_id
                    ORDER BY tb_assignment.assignment_id DESC
                    LIMIT 1
                ) AS assigned_guide
                
            FROM tb_booking 
            JOIN tb_tour ON tb_booking.tour_id = tb_tour.tour_id
            ORDER BY tb_booking.ngay_dien_ra DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getHdv()
    {
        $sql = "SELECT * FROM tb_user WHERE role_id=0 AND status=1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function assign($booking_id, $guide_id,)
    {
        $sql = "INSERT INTO tb_assignment (booking_id, guide_id) VALUES (:booking_id, :guide_id)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ":booking_id" => $booking_id,
            ":guide_id" => $guide_id
        ]);
    }
    public function getJobs($guide_id)
    {
        $sql = "SELECT tb_booking.booking_id, tb_tour.ten_tour, tb_booking.ngay_dien_ra, tb_booking.so_cho, tb_booking.status , tb_booking.ngay_ket_thuc , tb_tour.anh_tour,tb_tour.noi_xuat_phat,tb_tour.diem_den
            FROM tb_assignment 
            JOIN tb_booking  ON tb_assignment.booking_id = tb_booking.booking_id
            JOIN tb_tour  ON tb_booking.tour_id = tb_tour.tour_id
            WHERE tb_assignment.guide_id = :guide_id
            ORDER BY tb_booking.ngay_dien_ra DESC";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':guide_id' => $guide_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function checkAssign($booking_id, $guide_id)
    {
        $sql = "SELECT * FROM tb_assignment WHERE booking_id = :booking_id AND guide_id = :guide_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":booking_id" => $booking_id,
            ":guide_id" => $guide_id
        ]);
        return $stmt->rowCount() > 0;
    }
}
<?php

namespace Src\Models;

class TourModel extends BaseModel
{
    public function insertTour($ma_tour, $ten_tour, $dm_id, $gia_co_ban, $so_cho_toi_da, $path, $noi_xuat_phat, $diem_den, $mo_ta_tour,$so_ngay)
    {
        $sql = "INSERT INTO `tb_tour` (ma_tour, ten_tour, dm_id, gia_co_ban, so_cho_toi_da, anh_tour, noi_xuat_phat, diem_den, mo_ta_tour,so_ngay) VALUES (:ma_tour, :ten_tour, :dm_id, :gia_co_ban, :so_cho_toi_da, :anh_tour, :noi_xuat_phat, :diem_den, :mo_ta_tour,:so_ngay)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":ma_tour" => $ma_tour,
            ":ten_tour" => $ten_tour,
            ":dm_id" => $dm_id,
            ":gia_co_ban" => $gia_co_ban,
            ":so_cho_toi_da" => $so_cho_toi_da,
            ":anh_tour" => $path,
            ":noi_xuat_phat" => $noi_xuat_phat,
            ":diem_den" => $diem_den,
            ":mo_ta_tour" => $mo_ta_tour,
            ":so_ngay"=>$so_ngay,
        ]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getAll()
    {
        $sql = "SELECT tb_tour.* , tb_danhmuc.ten_danhmuc AS danh_muc FROM tb_tour JOIN tb_danhmuc ON tb_tour.dm_id = tb_danhmuc.dm_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getOne($tour_id)
    {
        $sql = "SELECT * FROM tb_tour WHERE tour_id = :tour_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':tour_id' => $tour_id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getAllDanhMuc()
    {
        $sql = "SELECT * FROM tb_danhmuc ORDER BY dm_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function updateTour($tour_id, $ma_tour, $ten_tour, $dm_id, $gia_co_ban, $so_cho_toi_da, $path, $noi_xuat_phat, $diem_den, $mo_ta_tour,$so_ngay)
    {
        $sql = "UPDATE `tb_tour` SET ma_tour = :ma_tour, ten_tour = :ten_tour, dm_id = :dm_id, gia_co_ban = :gia_co_ban, so_cho_toi_da = :so_cho_toi_da, anh_tour = :anh_tour, noi_xuat_phat = :noi_xuat_phat, diem_den = :diem_den, mo_ta_tour = :mo_ta_tour,so_ngay=:so_ngay WHERE tour_id = :tour_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":tour_id" => $tour_id,
            ":ma_tour" => $ma_tour,
            ":ten_tour" => $ten_tour,
            ":dm_id" => $dm_id,
            ":gia_co_ban" => $gia_co_ban,
            ":so_cho_toi_da" => $so_cho_toi_da,
            ":anh_tour" => $path,
            ":noi_xuat_phat" => $noi_xuat_phat,
            ":diem_den" => $diem_den,
            ":mo_ta_tour" => $mo_ta_tour,
            ":so_ngay" => $so_ngay,

        ]);
    }

    public function delete($tour_id)
    {
        $sql = "DELETE FROM tb_tour WHERE tour_id=:tour_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":tour_id" => $tour_id
        ]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
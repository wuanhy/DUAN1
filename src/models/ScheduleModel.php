<?php

namespace Src\Models;

class ScheduleModel extends BaseModel
{
    public function insertSchedule($tour_id, $ngay_thu, $dia_diem, $hoat_dong, $path)
    {
        $sql = "INSERT INTO tb_lich_trinh (tour_id, ngay_thu, dia_diem, hoat_dong, anh) VALUES (:tour_id, :ngay_thu, :dia_diem, :hoat_dong, :anh)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":tour_id" => $tour_id,
            ":ngay_thu" => $ngay_thu,
            ":dia_diem" => $dia_diem,
            ":hoat_dong" => $hoat_dong,
            ":anh" => $path,
        ]);
    }

    public function getAllSchedule()
    {
        $sql = "SELECT tb_lich_trinh.* , tb_tour.ten_tour AS danhmuc FROM tb_lich_trinh JOIN tb_tour ON tb_lich_trinh.tour_id = tb_tour.tour_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getOne($ltr_id)
    {
        $sql = "SELECT * FROM tb_lich_trinh WHERE ltr_id = :ltr_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([":ltr_id" => $ltr_id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($tour_id)
    {
        $sql = "DELETE FROM tb_lich_trinh WHERE tour_id = :tour_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([":tour_id" => $tour_id]);
        return $stmt->rowCount();
    }

    public function updateSchedule($ltr_id, $tour_id, $ngay_thu, $dia_diem, $hoat_dong, $path)
    {
        $sql = "UPDATE tb_lich_trinh SET tour_id = :tour_id, ngay_thu = :ngay_thu, dia_diem = :dia_diem, hoat_dong = :hoat_dong, anh = :anh WHERE ltr_id = :ltr_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            "ltr_id" => $ltr_id,
            "tour_id" => $tour_id,
            "ngay_thu" => $ngay_thu,
            "dia_diem" => $dia_diem,
            "hoat_dong" => $hoat_dong,
            "anh" => $path,
        ]);
    }

    public function getAllScheduleByTourId($tour_id)
    {
        $sql = "SELECT tb_lich_trinh.* , tb_tour.ten_tour FROM tb_lich_trinh JOIN tb_tour ON tb_lich_trinh.tour_id = tb_tour.tour_id WHERE tb_lich_trinh.tour_id = :tour_id ORDER BY ngay_thu";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":tour_id" => $tour_id
        ]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

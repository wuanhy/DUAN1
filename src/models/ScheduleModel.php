<?php

namespace Src\Models;

class ScheduleModel extends BaseModel
{
    public function insertSchedule($tour_id, $ngay_thu, $tieu_de, $noi_dung)
    {
        $sql = "INSERT INTO tb_lich_trinh (tour_id, ngay_thu, tieu_de, noi_dung) VALUES (:tour_id, :ngay_thu, :tieu_de, :noi_dung)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":tour_id" => $tour_id,
            ":ngay_thu" => $ngay_thu,
            ":tieu_de" => $tieu_de,
            ":noi_dung" => $noi_dung,
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

    public function delete($ltr_id)
    {
        $sql = "DELETE FROM tb_lich_trinh WHERE ltr_id = :ltr_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([":ltr_id" => $ltr_id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function updateSchedule($ltr_id, $tour_id, $ngay_thu, $tieu_de, $noi_dung){
        $sql = "UPDATE tb_lich_trinh SET tour_id = :tour_id, ngay_thu = :ngay_thu, tieu_de = :tieu_de, noi_dung = :noi_dung WHERE ltr_id = :ltr_id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt->execute([
            "ltr_id" => $ltr_id,
            "tour_id" => $tour_id,
            "ngay_thu" => $ngay_thu,
            "tieu_de" => $tieu_de,
            "noi_dung" => $noi_dung,
        ]);
    }
}

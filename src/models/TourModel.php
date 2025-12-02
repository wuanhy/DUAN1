<?php
namespace Src\Models;
  use PDO;
class TourModel{
    // lấy danh sach tour theo trạng thái (static method   )
    // cách gọi: TourModel::getByStatus(sap_dien_ra/dang_dien_ra/da_hoan_thanh)
    public static function getByStatus($loai_thong_ke){
        $conn = getDB();
        if($conn === null){
            return[];
        }
        
        $sql = "SELECT lkh.*, t.ten_tour, t.ma_tour, t.gia_co_ban
                FROM tb_lich_khoihanh lkh
                INNER JOIN tb_tour t ON lkh.tour_id = t.tour_id
                WHERE lkh.trang_thai !='cancel' ";
        $today = date('Y-m-d');
                
        switch($loai_thong_ke){
            case 'sap_dien_ra':
                $sql .= " AND lkh.ngay_khoihanh > '$today' ORDER BY lkh.ngay_khoihanh ASC";
                break;
            case 'dang_dien_ra':
                $sql .= " AND lkh.ngay_khoihanh <= '$today' AND lkh.ngay_ketthuc >= '$today' ORDER BY lkh.ngay_khoihanh ASC";
                break;
            case 'da_hoan_thanh':
                $sql .= " AND lkh.ngay_ketthuc < '$today' ORDER BY lkh.ngay_khoihanh DESC";
                break;
            default:
                return[];
        }
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
                //them lich
    }

    public static function insert($tour_id, $ngay_khoihanh, $ngay_ketthuc, $so_cho){
        $conn = getDB();
        $sql = "INSERT INTO tb_lich_khoihanh (tour_id, ngay_khoihanh, ngay_ketthuc, so_cho_con_lai, trang_thai)
                VALUES (?, ?, ?, ?, 'open')";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$tour_id, $ngay_khoihanh, $ngay_ketthuc, $so_cho]);
    }

    public static function delete($lkh_id){
        $conn = getDB();
    $sql = "DELETE FROM tb_lich_khoihanh WHERE lkh_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$lkh_id]);
    }   

    public static function find($lkh_id){
        $conn = getDB();
    $sql = "SELECT * FROM tb_lich_khoihanh WHERE lkh_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$lkh_id]); 
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function update($lkh_id,$tour_id, $ngay_khoihanh, $ngay_ketthuc, $so_cho, $trang_thai){
       $conn = getDB();
       $sql = "UPDATE tb_lich_khoihanh 
                SET tour_id = ?, ngay_khoihanh = ?, ngay_ketthuc = ?, so_cho_con_lai = ?, trang_thai = ?
                WHERE lkh_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$tour_id, $ngay_khoihanh, $ngay_ketthuc, $so_cho, $trang_thai, $lkh_id]);
    }
    public static function getAllTours(){
        $conn= getDB();
        $sql="SELECT tour_id, ten_tour, so_ngay FROM tb_tour";
        $stmt= $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        
    }
    public static function getTourbyId($id){
        $conn= getDB();
        $sql="SELECT * FROM tb_tour WHERE tour_id=?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
    
?>
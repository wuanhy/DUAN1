<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/css/style.css"> 
</head>
<body>
    <div class="containerr">
        <div class="row">
            <div class="col-2">
                <?php include "views/admin/sidebar.php";?>
            </div>
            <div class="col-10 content-box" style="padding-top: 100px;">
                <form action="<?=BASE_URL .'?act=admin-list-time' ?>" method="post">
                    <div class="d-flex justify-content-end mb-3"> 
                    <a href="<?=BASE_URL .'?act=admin-create-time' ?>" class="btn btn-primary">Thêm ngày và số chỗ mới</a> 
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ten Tour</th>
                            <th>Điểm đến</th>
                            <th>Ngày diễn ra </th>
                            <th>Trạng thái tuor</th>
                            <th>Số chỗ còn lại</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listdata as $key=>$value) :?>
                            <tr>
                                <td><?= $key +1 ?></td>
                                <td><?= $value['name_tour'] ?></td>
                                <td><?= $value['diem_den'] ?></td>
                                <td><?= date('d/m/Y', strtotime($value['ngay'])) ?></td>
                                <td><?= renderStatus($value['ngay']) ?></td>
                                <td><?= $value['so_cho_toi_da'] ?></td>
                                <td>
                                <a href="<?=BASE_URL .'?act=admin-update-time&id=' . $value['id']?>" class="btn btn-warning">Sua</a> 
                                <a href="<?=BASE_URL .'?act=admin-delete-time&id=' . $value['id']?>" class="btn btn-warning" onclick="return confirm('Ban co muon xoa khong')">Xoa</a> 

                                </td>
                            </tr>

                          <?php endforeach;?>  
                    </tbody>
                </table>
                </form>
            </div>
        </div>

    </div>
    <?php

function renderStatus($ngay) {
    $today = date('Y-m-d');
    if ($ngay < $today) 
         return '<span style="color: #28a745; font-weight:bold;">Đã hoàn thành</span>';
    elseif ($ngay == $today) 
       return '<span style="color: #007bff; font-weight:bold;">Đang diễn ra</span>';
    else 
        return '<span style="color: #0b5d85ff;font-weight:bold;">Sắp diễn ra</span>';
}
?>
</body>
</html>
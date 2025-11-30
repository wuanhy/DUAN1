<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="public/css/style.css"> 
</head>
<body>
    <div class="main-container">
        <div class="row">
            <div class="col-2">
                <?php include "views/admin/sidebar.php";?>
            </div>
            <div class="col-10" style="padding-top: 100px;">
                <div class="list-time-container">
                    <h1 class="fw-bold d-flex align-items-center gap-3 mb-4" style="color: #0d6efd;">
                        <i class="bi bi-calendar-week fs-1 text-primary"></i>
                        Danh sách phương tiện
                    </h1>

                <form action="<?=BASE_URL .'?act=admin-list-trans' ?>" method="post">
                    <div class="d-flex justify-content-end mb-3"> 
                    <a href="<?=BASE_URL .'?act=admin-create-trans' ?>" class="btn btn-primary btn-sm">Thêm phương tiện</a> 
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên tài xế</th>
                            <th>Tên Phương Tiện</th>
                            <th>Loại Phương Tiện</th>
                            <th>Ảnh Phương Tiện </th>
                            <th>Mã Phương Tiện (Biển Số)</th>
                            <th>Số chỗ ngồi</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listdata as $key=>$value) :?>
                            <tr>
                                <td><?= $key +1 ?></td>
                                <td><?= $value['ten_tai_xe'] ?></td>
                                <td><?= $value['ten_pt'] ?></td>
                                <td><?=$value['danhmucpt']?></td>     
                                <td>
                                    <img src="<?= $value['anh_pt'] ?>" alt="" width="80px">
                                </td>
                                <td><?= $value['bien_so'] ?></td>
                                <td><?= $value['so_cho_ngoi']  ?></td>
                                <td>
                                <a href="<?=BASE_URL .'?act=admin-update-trans&id=' . $value['pt_id']?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>Sửa</a> 
                                <a href="<?=BASE_URL .'?act=admin-delete-trans&id=' . $value['pt_id']?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Ban co muon xoa khong')"><i class="bi bi-trash-fill"></i>Xóa</a> 

                                </td>
                            </tr>

                          <?php endforeach;?>  
                    </tbody>
                </table>
                </form>
            </div>
        </div>
        </div>
    </div>
    <?php

function renderStatus($ngay) {
    $today = date('Y-m-d');
    if ($ngay < $today) 
         return '<span class="badge bg-success bg-opacity-25 text-success p-2 rounded-pill">Đã hoàn thành</span>';
    elseif ($ngay == $today) 
       return '<span class="badge bg-info bg-opacity-25 text-info p-2 rounded-pill">Đang diễn ra</span>';
    else 
        return '<span class="badge bg-primary bg-opacity-25 text-primary p-2 rounded-pill">Sắp diễn ra</span>';
}
?>
<style>
body {
   background: linear-gradient(to right, #CFE8FF, #FAD4EC);
    min-height: 100vh;
    margin: 0;
    padding: 0;
}


.list-time-container,
.container,
.wrapper {
    background-color: transparent !important;
    padding-left: 50px;
    padding-right: 40px;
}

table {
    background-color: white; 
}
.table th,
.table td {
    white-space: nowrap; 
}
    </style>
    <?php if(!empty($_SESSION['success'])) :?>
    <script>
        setTimeout(()=>{
            Swal.fire({
            toast : true,
            position : 'top-end',
            icon: 'success',
            title : '<?= $_SESSION['success'] ?>',
            showConfirmButton : false,
            timer : 2000,
            timerProgressBar:true,
            didOpen:(toast)=>{
                const progress = toast.querySelector('.swal2-timer-progress-bar');
                if(progress){
                    progress.style.background='#28a745';
                }
            }
            });

        },100);
    </script>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>
</body>
</html>
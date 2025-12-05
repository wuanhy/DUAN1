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
        <div class="row">
            <div class="col-2">
                <?php include "views/admin/sidebar.php"; ?>
            </div>
            <div class="col-10" style="padding-top: 100px;">
                <div class="tour-list-container">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Danh sách Tour Du lịch</h1>
                        <a href="<?= BASE_URL . 'admin-create-tour' ?>" class="btn btn-sm btn-success">
                            <i class="fas fa-plus-circle"></i> Thêm Tour Mới
                        </a>
                    </div>

                        <table class="table">
                            <thead >
                                <tr>
                                    <th>ID</th>
                                    <th>Mã Tour</th>
                                    <th>Tên Tour</th>
                                    <th>Danh mục</th>
                                    <th>Giá</th>
                                    <th>Số chỗ</th>
                                    <th>Số ngày đi</th>
                                    <th>Ảnh Tour</th>
                                    <th>Nơi xuất phát</th>
                                    <th>Điểm đến</th>
                                    <th>Mô tả</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tb_danhmuc as $key => $dm): ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $dm['ma_tour'] ?></td>
                                    <td><?= $dm['ten_tour'] ?></td>
                                    <td><?= $dm['danh_muc'] ?></td>
                                    <td><?= number_format($dm['gia_co_ban']) ?> vnđ</td>
                                    <td><?= $dm['so_cho_toi_da'] ?></td>
                                    <td><?=$dm['so_ngay']  ?></td>
                                    <td>
                                        <img src="<?= $dm['anh_tour'] ?>" width="100px">
                                    </td>
                                    <td><?= $dm['noi_xuat_phat'] ?></td>
                                    <td><?= $dm['diem_den'] ?></td>
                                    <td class="content"><?= $dm['mo_ta_tour'] ?></td>
                                    <td>
                                        <a href="<?= BASE_URL . 'admin-update-tour&tour_id=' . $dm['tour_id'] ?>"
                                           class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>Sửa</a> 
                                        <a href="<?= BASE_URL . 'admin-delete-tour&tour_id=' . $dm['tour_id'] ?>"
                                            class="btn btn-outline-danger btn-sm" onclick="return confirm('Ban co muon xoa khong')"><i class="bi bi-trash-fill"></i>Xóa</a> 
                                            </td> 
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
    <style>
            body {
   background: linear-gradient(to right, #CFE8FF, #FAD4EC);
    min-height: 100vh;
    margin: 0;
    padding: 0;
}
table td.content {
    max-width: 250px;
    white-space: nowrap; 
    overflow: hidden;
    text-overflow: ellipsis;
}
.table thead tr th {
        white-space: nowrap; 
        padding: 8px 10px;  
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
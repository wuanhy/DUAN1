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
                <?php include "views/admin/sidebar.php"; ?>
            </div>

            <div class="col-10" style="padding-top: 100px;">
                <div class="list-user-container">   
                    <h1 class="fw-bold d-flex align-items-center gap-3 mb-4" style="color: #0d6efd;">
                        <i class="bi bi-calendar-week fs-1 text-primary"></i>
                        Danh sách HDV
                    </h1>
                    <form action="<?= BASE_URL .'admin-list-user' ?>" method="post">
                        
                        <div class="d-flex justify-content-end mb-3">
                            <a href="<?= BASE_URL .'admin-create-user' ?>" class="btn btn-primary btn-sm">
                                Tạo tài khoản HDV
                            </a>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Nhân Viên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Ngày tạo</th>
                                    <th>Trạng Thái</th>
                                    <th>Vai trò</th>
                                    <th>Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listdata as $key => $value): ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value['name'] ?></td>
                                        <td><?= $value['email'] ?></td>
                                        <td><?= $value['phone'] ?></td>
                                        <td><?= $value['create_at'] ?></td>

                                        <td>
                                            <?php if ($value['status'] == 1): ?>
                                                <span class="status-active">Hoạt động</span>
                                            <?php else: ?>
                                                <span class="status-inactive">Vô hiệu hóa</span>
                                            <?php endif; ?>
                                        </td>
                                           <td><?= $value['role_name'] ?>
                                        </td>
                                        <td>
                                            <a href="<?= BASE_URL .'admin-update-user&id=' . $value['id'] ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>Sửa</a>

                                            <?php if ($_SESSION['userLogin']['id'] != $value['id']): ?>
                                                <a href="<?= BASE_URL .'admin-delete-user&id=' . $value['id'] ?>"
                                                class="btn btn-outline-danger btn-sm"
                                                onclick="return confirm('Bạn có muốn xóa không?')"><i class="bi bi-trash-fill"></i>
                                                    Xóa
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                    </form>
                </div>
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


.list-user-container,
.container,
.wrapper {
    background-color: transparent !important;
    
}

table {
    background-color: white; 
    
}
.status-active {
   background-color: #a3fea9ff;
    color: #38703a;         
    padding: 4px 10px;
    border-radius: 10px;
    font-size: 14px;
    display: inline-block;
}
.status-inactive {
    background-color: #ed4a4dff;
    color: #842029;          
    padding: 4px 10px;
    border-radius: 10px;
    font-size: 14px;
    display: inline-block;
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

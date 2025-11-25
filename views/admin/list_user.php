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
            <?php include "views/admin/sidebar.php"; ?>
        </div>
        <div class="col-10 content-box" style="padding-top: 100px;  ">
            <form action="<?= BASE_URL .'?act=admin-list-user' ?>" method="post"> 
                <div class="d-flex justify-content-end mb-3"> 
                    <a href="<?=BASE_URL .'?act=admin-create-user' ?>" class="btn btn-primary">Tạo tài khoản HDV</a> 
                </div>
                <table class="table"> 
                    <thead> 
                        <tr>
                            <th>ID</th> 
                            <th>Tên Nhân Viên</th>
                            <th>Email</th> 
                            <th>Password</th> 
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Trạng Thái</th>
                            <th>Hành Động</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php foreach($listdata as $key=>$value) :?> 
                            <tr > 
                                <td><?=$key + 1?></td> 
                                <td><?=$value['name']?></td> 
                                <td><?=$value['email']?></td> 
                                <td><?=$value['password']?></td> 
                                <td><?=$value['phone']?></td> 
                                <td><?= $value['address'] ?></td>
                                <td>
                                    <?php if($value['status'] == 1): ?>
                                        <span class="text-success">Hoạt động</span>
                                    <?php else: ?>
                                        <span class="text-danger">Vô hiệu hóa</span>
                                    <?php endif; ?>
                                </td>
                                <td> 
                                <a href="<?=BASE_URL .'?act=admin-update-user&id=' . $value['id']?>" class="btn btn-warning">Sua</a> 
                                
                                <?php if($_SESSION['userLogin']['id'] != $value['id']): ?>
                                    <a href="<?=BASE_URL .'?act=admin-delete-user&id=' . $value['id']?>" 
                                    class="btn btn-danger" 
                                    onclick="return confirm('Bạn có muốn xóa không?')">
                                    Xóa
                                    </a>
                                <?php endif; ?>
                            </td> 
                        </tr> <?php endforeach ?> 
                    </tbody> 
                </table> 
            </form>
        </div>
        </div>
</div>
</body>
</html>
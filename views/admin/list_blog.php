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
            <form action="<?= BASE_URL .'?act=admin-list-blog' ?>" method="post"> 
                <div class="d-flex justify-content-end mb-3"> 
                    <a href="<?=BASE_URL .'?action=admin-create-blog' ?>" class="btn btn-primary">Thêm Blog</a> 
                </div>
                <table class="table"> 
                    <thead> 
                        <tr>
                            <th>ID</th> 
                            <th>Tên Tuor</th>
                            <th>Nội dung</th> 
                            <th>Ảnh</th> 
                            <th>Tác giả</th>
                            <th>Danh mục</th>
                            <th>Trạng thái</th>
                            <th>Ngày xuất bản</th> 
                            <th>Hành Động</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php foreach($listdata as $key=>$value) :?> 
                            <tr > 
                                <td><?=$key + 1?></td> 
                                <td><?=$value['tieu_de']?></td> 
                                <td><?=$value['noi_dung']?></td> 
                                <td> 
                                    <img src="<?=BASE_URL . '/public/image/' . $value["image"] ?>" alt="" width="100px"> 
                                </td>
                                <td><?=$value['author_name']?></td> 
                                <td><?=$value['category_name']?></td> 
                                <td><?= $value['status'] ?></td>
                                <td><?=$value['created_at'] ?></td> 
                                <td> 
                                <a href="<?=BASE_URL .'?act=admin-update-blog&id=' . $value['id']?>" class="btn btn-danger">Sua</a> 
                                <a href="<?=BASE_URL .'?act=admin-delete-blog&id=' . $value['id']?>" class="btn btn-warning" onclick="return confirm('Ban co muon xoa khong')">Xoa</a> 
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
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
    <div class="container">
    <div class="row">
        <div class="col-2">
            <?php include "views/admin/sidebar.php"; ?>
        </div>
        <div class="col-10" style="padding-top: 100px;  ">
            <div class="list-blog-container">
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
                                <a href="<?=BASE_URL .'?act=admin-update-blog&id=' . $value['id']?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>Sua</a> 
                                <a href="<?=BASE_URL .'?act=admin-delete-blog&id=' . $value['id']?>"class="btn btn-outline-danger btn-sm" onclick="return confirm('Ban co muon xoa khong')"><i class="bi bi-trash-fill"></i>Xoa</a> 
                            </td> 
                        </tr> <?php endforeach ?> 
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
}


.list-blog-container,
.container,
.wrapper {
    background-color: transparent !important;
}

table {
    background-color: white; 
}
.table th {
    white-space: nowrap; 
}
table td:nth-child(3) { 
    max-width: 300px;            
}
    </style>
</body>
</html>
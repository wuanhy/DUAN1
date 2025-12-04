<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
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
        <div class="list-booking">
            <form action="<?=BASE_URL .'booking'  ?>" method="post">
                     <div class="col-md-8">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Chọn Tour</label>
                                        <select name="tour_id" id="" class="form-control">
                                            <option value="" class="text-center">--Chọn Tour--</option>
                                            <?php foreach($listdata as $tour) :?>
                                                <option value="<?= $tour['tour_id'] ?>" <?= ($old['tour_id'] ?? '')==$tour['tour_id'] ? 'selected' : '' ?>>
                                                    <?= $tour['ten_tour'] ?>
                                                </option>
                                             <?php endforeach;?>   
                                        </select>
                                    <small class="text-danger"><?= $errors['tour_id'] ?? '' ?></small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Ngày diễn ra</label>
                                    <input type="date" name="ngay_dien_ra" class="form-control" value="<?= htmlspecialchars($old['ngay_dien_ra'] ?? '') ?>">
                                    <small class="text-danger"><?= $errors['ngay_dien_ra'] ?? '' ?></small>
                                </div>

                                 <div class="mb-3">
                                    <label class="form-label fw-semibold">Số chỗ </label>
                                    <input type="number" class="form-control" name="so_cho" min="1" value="<?= htmlspecialchars($old['so_cho'] ?? '') ?>">
                                    <small class="text-danger"><?= $errors['so_cho'] ?? '' ?></small>
                                </div>
                                    
                                <button type="submit" class="btn btn-primary btn-sm">Thêm ngày & số chỗ</button>
                            </div>
                        </div>
                    </div>
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



</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
=======

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Travel - Trang chủ</title>
</head>

<body>
    <div class="containerr">
        <div class="row">
            <div class="col-2">
                <?php include "views/admin/sidebar.php"; ?>
            </div>
            <div class="col-10" style="padding-top: 100px;">
                <div class="tour-list-container">
                    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
                        <h1 class="h2">Danh sách Đơn Đặt chỗ</h1>
                    </div>
                    <div class="mb-4">
                        <form class="d-flex" action="" method="GET">
                            <input type="hidden" name="action" value="admin-booking">
                            <input class="form-control me-2" type="search" placeholder="Tìm kiếm theo Mã Đơn hoặc Tên Khách hàng" aria-label="Search" name="keyword">
                            <select class="form-select me-2" style="width: 200px;" name="status">
                                <option value="">-- Lọc theo Trạng thái --</option>
                                <option value="0">Chờ thanh toán</option>
                                <option value="1">Đã thanh toán</option>
                                <option value="2">Đã hủy</option>
                            </select>
                            <button class="btn btn-outline-primary" type="submit">Tìm & Lọc</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>Mã Đơn</th>
                                    <th>Tour & Ngày Khởi hành</th>
                                    <th>Khách hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Ngày đặt</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <style>
        * {
            box-sizing: border-box;
        }

        .col-10 {
            padding-right: 0 !important;
            padding-left: 0 !important;
            padding-top: 100px;
        }

        .tour-list-container {
            width: 95%;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            border-radius: 5px;
        }
    </style>
</body>

>>>>>>> 87aceb48da2557efa1d65211a6b3a8e73f64c708
</html>
<!DOCTYPE html>
<html lang="en">

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
                        <h1 class="h2">Quản lý Yêu cầu Hoàn tiền</h1>
                    </div>
                    <div class="mb-4">
                        <form class="d-flex" action="" method="GET">
                            <input type="hidden" name="action" value="admin-refund">
                            <input class="form-control me-2" type="search" placeholder="Tìm kiếm theo Mã Đơn hoặc Khách hàng" aria-label="Search" name="keyword">
                            <select class="form-select me-2" style="width: 200px;" name="refund_status">
                                <option value="">-- Lọc theo Trạng thái --</option>
                                <option value="0">Chờ duyệt (Mới)</option>
                                <option value="1">Đã duyệt / Chờ xử lý</option>
                                <option value="2">Đã hoàn tiền</option>
                                <option value="3">Từ chối hoàn tiền</option>
                            </select>
                            <button class="btn btn-outline-primary" type="submit">Tìm & Lọc</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>Mã Đơn</th>
                                    <th>Tour</th>
                                    <th>Khách hàng</th>
                                    <th>Số tiền Hoàn lại</th>
                                    <th>Ngày yêu cầu</th>
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

</html>
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
                        <h1 class="h2">Danh sách Đơn Đặt chỗ</h1>
                    </div>
                    <div class="mb-4">
                        <form class="d-flex" action="" method="GET">
                            <input type="hidden" name="action" value="admin-bookinglist">
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
                                <?php if (empty($bookingList)) : ?>
                                    <tr>
                                        <td colspan="7" class="text-center py-4">
                                            <h4>Hiện chưa có đơn đặt chỗ nào được ghi nhận.</h4>
                                            <p>Đơn đặt chỗ sẽ xuất hiện tại đây sau khi khách hàng hoàn tất đặt Tour.</p>
                                        </td>
                                    </tr>
                                <?php endif; ?>
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
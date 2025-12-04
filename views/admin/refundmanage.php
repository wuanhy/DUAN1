<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Travel - Trang chủ</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php include "views/admin/sidebar.php"; ?>
            </div>
            <div class="col-10" style="padding-top: 100px;">
                <div class="tour-list-container">
                    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
                        <h1 class="fw-bold d-flex align-items-center gap-3 mb-4" style="color: #0d6efd;">
                        <i class="bi bi-calendar-week fs-1 text-primary"></i>
                            Danh sách yêu cầu hoàn tiền
                        </h1>
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
                                <?php if (empty($refundList)) : ?>
                                    <tr>
                                        <td colspan="7" class="text-center py-4">
                                            <h4>Hiện không có yêu cầu hoàn tiền nào đang chờ xử lý.</h4>
                                            <p>Các yêu cầu sẽ xuất hiện tại đây sau khi đơn đặt chỗ bị hủy.</p>
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
        body {
   background: linear-gradient(to right, #CFE8FF, #FAD4EC);
    min-height: 100vh;
    margin: 0;
    padding: 0;
}
    </style>
</body>

</html>
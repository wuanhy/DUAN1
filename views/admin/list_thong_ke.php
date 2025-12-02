<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Tour</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row g-0">
            <div class="col-3">
                <?php 
                    
                    if(defined('BASE_PATH')) {
                        require_once BASE_PATH . '/views/admin/sidebar.php'; 
                    } else {
                        
                        echo "Lỗi: Không tìm thấy Sidebar!"; 
                    }
                ?>
            </div>

            <div class="col-9" style="padding-top: 100px; padding-left: 20px; padding-right: 20px;">

                <div class="p-4 rounded-3 shadow-sm mb-4 dashboard-header-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 fw-bold text-primary mb-1">
                                <i class="bi bi-airplane-engines-fill me-2"></i> <?= $tieu_de ?? 'Danh Sách Tour' ?>
                            </h1>
                            <p class="text-muted mb-0" style="font-size: 0.9rem;">
                                Quản lý lịch trình, trạng thái và vé bán ra.
                            </p>
                        </div>

                        <div>
                            <a href="<?= BASE_URL. '' ?>" class="btn btn-primary btn-sm rounded-pill shadow-sm">
                                <i class="bi bi-plus-circle me-1"></i> Tạo Lịch Mới
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mb-4 filter-group">
                    <a href="<?= BASE_URL. 'admin-thongKe?type=sap_dien_ra' ?>"
                        class="btn btn-sm <?= ($_GET['type'] ?? 'sap_dien_ra') == 'sap_dien_ra' ? 'btn-primary' : 'btn-light border' ?>">
                        <i class="bi bi-hourglass-split"></i> Sắp diễn ra
                    </a>
                    <a href="<?= BASE_URL. 'admin-thongKe?type=dang_dien_ra' ?>"
                        class="btn btn-sm <?= ($_GET['type'] ?? '') == 'dang_dien_ra' ? 'btn-success text-white' : 'btn-light border' ?>">
                        <i class="bi bi-play-circle-fill"></i> Đang diễn ra
                    </a>
                    <a href="<?= BASE_URL. 'admin-thongKe?type=da_hoan_thanh' ?>"
                        class="btn btn-sm <?= ($_GET['type'] ?? '') == 'da_hoan_thanh' ? 'btn-secondary' : 'btn-light border' ?>">
                        <i class="bi bi-check-circle-fill"></i> Đã hoàn thành
                    </a>
                </div>

                <div class="card shadow mb-5 border-0 table-card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover custom-table mb-0 align-middle">
                                <thead class="thead-light" style="background-color: #f8f9fa;">
                                    <tr>
                                        <th class="ps-4">Mã Tour</th>
                                        <th>Tên Tour</th>
                                        <th>Lịch Trình</th>
                                        <th>Giá Vé</th>
                                        <th class="text-center">Chỗ Còn</th>
                                        <th class="text-center">Trạng Thái</th>
                                        <th class="text-end pe-4">Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($list_tour)): ?>
                                    <?php foreach ($list_tour as $tour): ?>
                                    <tr>
                                        <td class="ps-4">
                                            <span
                                                class="tour-code-badge fw-bold text-primary bg-light px-2 py-1 rounded">
                                                <?= $tour['ma_tour'] ?>
                                            </span>
                                        </td>

                                        <td style="max-width: 250px;">
                                            <span class="fw-bold text-dark"><?= $tour['ten_tour'] ?></span>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column" style="font-size: 0.85rem;">
                                                <span class="text-success"><i class="bi bi-calendar-check me-1"></i>
                                                    <?= date('d/m/Y', strtotime($tour['ngay_khoihanh'])) ?></span>
                                                <span class="text-danger"><i class="bi bi-calendar-x me-1"></i>
                                                    <?= date('d/m/Y', strtotime($tour['ngay_ketthuc'])) ?></span>
                                            </div>
                                        </td>

                                        <td class="fw-bold text-secondary">
                                            <?= number_format($tour['gia_co_ban']) ?>đ
                                        </td>

                                        <td class="text-center">
                                            <span class="badge bg-info text-dark rounded-pill px-3">
                                                <?= $tour['so_cho_con_lai'] ?> vé
                                            </span>
                                        </td>

                                        <td class="text-center">
                                            <?php if($tour['trang_thai'] == 'open'): ?>
                                            <span
                                                class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3">Mở
                                                bán</span>
                                            <?php elseif($tour['trang_thai'] == 'full'): ?>
                                            <span
                                                class="badge bg-danger bg-opacity-10 text-danger border border-danger rounded-pill px-3">Hết
                                                chỗ</span>
                                            <?php else: ?>
                                            <span class="badge bg-secondary rounded-pill px-3">Đóng</span>
                                            <?php endif; ?>
                                        </td>

                                        <td class="text-end pe-4">
                                            <a href="<?= BASE_URL . 'sua-lich&id=' .    $tour['lkh_id'] ?>"
                                                class="btn btn-warning btn-sm rounded-circle shadow-sm me-1"
                                                title="Sửa">
                                                <i class="bi bi-pencil-square text-white"></i>
                                            </a>

                                            <a href="<?= BASE_URL . 'xoa-lich&id=' . $tour['lkh_id'] ?>"
                                                class="btn btn-danger btn-sm rounded-circle shadow-sm"
                                                onclick="return confirm('Bạn chắc chắn muốn xóa lịch này?')"
                                                title="Xóa">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center py-5 text-muted">
                                            <i class="bi bi-inbox fs-1 d-block mb-2 opacity-50"></i>
                                            <p>Chưa có dữ liệu chuyến tour nào!</p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
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
    <div class="containerr">
        <div class="row">
            <div class="col-2">
                <?php require_once BASE_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'sidebar.php'; ?>
            </div>
            <div class="col-10" style="padding-top: 100px;">
                <div class="p-4 mx-3 rounded-3 shadow-sm mb-4 dashboard-header-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 fw-bold text-primary mb-1">
                                <i class="bi bi-trophy-fill me-2"></i> Dashboard Analytics
                            </h1>
                            <p class="text-muted mb-0" style="font-size: 0.9rem;">Tổng quan chi tiết và hoạt động kinh
                                doanh và hiệu suất hệ thống</p>
                        </div>
                        <button class="btn btn-sm btn-outline-primary" style="white-space: nowrap;"><i
                                class="bi bi-calendar me-1"></i> Tất cả Dịch vụ</button>
                    </div>
                </div>
                <div class=" p-4 mx-3 card analytics-card mb-4 border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-muted mb-3"><i class="bi bi-table me-2"></i> Thống kê đặt chỗ
                        </h5>

                        <div class="row g-3 mb-4">
                            <div class="col-md-3">
                                <div class="stat-box bg-total">
                                    <small>Tổng đặt chỗ</small>
                                    <h3 class="mt-1">10</h3>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="stat-box bg-pending">
                                    <small>Chờ thanh toán</small>
                                    <h3 class="mt-1">0</h3>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="stat-box bg-paid">
                                    <small>Đã thanh toán</small>
                                    <h3 class="mt-1">10</h3>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="stat-box bg-cancel">
                                    <small>Đã hủy</small>
                                    <h3 class="mt-1">0</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 align-items-center">
                            <div class="col-md-6">
                                <p class="mb-1 fw-bold text-muted" style="font-size: 0.9rem;">Tỷ lệ hoàn thành</p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted">10/10 đặt chỗ đã hoàn thành</small>
                                <small class="float-end fw-bold">100%</small>
                            </div>

                            <div class="col-md-6">
                                <p class="mb-1 fw-bold text-muted" style="font-size: 0.9rem;">Tỷ lệ hủy</p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 0%;"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted">0/10 đặt chỗ đã hủy</small>
                                <small class="float-end fw-bold">0%</small>
                            </div>
                        </div>

                        <div class="alert-orange mt-4 text-center">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> Cần xử lý: 0 đơn đặt chỗ cần xác nhận
                            ngay.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(!empty($_SESSION['success'])):?>
        <script>
            setTimeout(()=>{
                Swal.fire({
                    toast : true,
                    position:'top-end',
                    icon:'success',
                    title : '<?= $_SESSION['success'] ?>',
                    showConfirmButton : false,
                    timer:2000,
                    timerProgressBar : true,
                    didOpen:(toast)=>{
                        const progress=toast.querySelector('.swal2-timer-progress-bar');
                        if(progress){
                            progress.style.background='#28a745';
                        }
                    }
                });
            },100);
        </script>
<?php unset($_SESSION['success']);?>
    <?php endif; ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
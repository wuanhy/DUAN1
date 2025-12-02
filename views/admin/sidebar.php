<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Elite Travel - Trang chủ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top custom-gradient-navbar" id="main-navbar">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="#"><img src="<?= BASE_URL . 'public/image/logo.png' ?>"
                        alt="Elite Travel Logo" height="50"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <aside class="sidebar bg-white w-64 border-r border-gray-200 flex flex-col h-full overflow-y-auto">

        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse"
            style="position: fixed; top: 60px; bottom: 0; left: 0; z-index: 100; padding: 0; overflow-y: auto;">
            <div class="position-sticky pt-3">

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                            Hệ Thống
                        </h6>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center" href="#collapseTour"
                            data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseTour">
                            <i class="bi bi-globe me-2"></i>
                            Các Chuyến Tham Quan
                            <i class="bi bi-chevron-down ms-auto sidebar-icon-toggle"></i>
                        </a>
                        <div class="collapse list-unstyled ps-3" id="collapseTour" data-bs-parent="#sidebarMenu">
                            <a class="nav-link text-muted py-2" href="<?= BASE_URL . 'admin-tourlist' ?>">Danh sách
                                Tour</a>
                            <a class="nav-link text-muted py-2" href="<?= BASE_URL . 'admin-addtour' ?>">Thêm Tour
                                mới</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center" href="#collapseSchedule"
                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="collapseSchedule">
                            <i class="bi bi-calendar me-2"></i>
                            Lịch Trình Các Chuyến
                            <i class="bi bi-chevron-down ms-auto sidebar-icon-toggle"></i>
                        </a>
                        <div class="collapse list-unstyled ps-3" id="collapseSchedule" data-bs-parent="#sidebarMenu">
                            <a class="nav-link text-muted py-2" href="<?= BASE_URL . 'admin-scheduletour' ?>">Danh
                                sách Lịch trình các chuyến Tuor</a>
                            <a class="nav-link text-muted py-2" href="<?= BASE_URL . 'admin-addscheduletour' ?>">Thêm
                                Lịch trình các chuyến
                                Tuor</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center" href="#collapseBooking"
                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="collapseBooking">
                            <i class="bi bi-ticket-fill me-2"></i>
                            Quản Lý Đặt Chỗ
                            <i class="bi bi-chevron-down ms-auto sidebar-icon-toggle"></i> </a>
                        <div class="collapse list-unstyled ps-3" id="collapseBooking" data-bs-parent="#sidebarMenu">
                            <a class="nav-link text-muted py-2" href="<?= BASE_URL . 'admin-bookinglist' ?>">Danh
                                sách Đặt chỗ</a>
                            <a class="nav-link text-muted py-2" href="<?= BASE_URL . 'admin-refundmanage' ?>">Quản
                                lý hoàn tiền</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center"
                            href="<?= BASE_URL . 'admin-thongKe' ?>">

                            <i class="bi bi-bar-chart-fill me-2"></i>
                            Thống Kê Tour

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center" href="#collapseBlog"
                            data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseBlog">
                            <i class="bi bi-journal-text me-2"></i> Quản Lý Blog <i
                                class="bi bi-chevron-down ms-auto sidebar-icon-toggle"></i>
                        </a>
                        <div class="collapse list-unstyled ps-3" id="collapseBlog" data-bs-parent="#sidebarMenu">
                            <a class="nav-link text-muted py-2" href="#">Danh sách bài viết</a>
                            <a class="nav-link text-muted py-2" href="#">Thêm bài mới</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center" href="#collapseTransport"
                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="collapseTransport">
                            <i class="bi bi-heart-fill me-2"></i>
                            Quản Lý Thời Gian Tour
                            <i class="bi bi-chevron-down ms-auto sidebar-icon-toggle"></i>
                        </a>
                        <div class="collapse list-unstyled ps-3" id="collapseTransport" data-bs-parent="#sidebarMenu">
                            <a class="nav-link text-muted py-2" href="#">Danh sách thời gian Tuor</a>
                            <a class="nav-link text-muted py-2" href="#">Thêm thời gian tuor</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center" href="#collapseAccount"
                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="collapseAccount">
                            <i class="bi bi-person-fill me-2"></i>
                            Quản Lý Tài Khoản
                            <i class="bi bi-chevron-down ms-auto sidebar-icon-toggle"></i>
                        </a>
                        <div class="collapse list-unstyled ps-3" id="collapseAccount" data-bs-parent="#sidebarMenu">
                            <a class="nav-link text-muted py-2" href="#">Tài khoản khách hàng</a>
                            <a class="nav-link text-muted py-2" href="#">Tài khoản HDV</a>
                            <a class="nav-link text-muted py-2" href="#">Phân công HDV</a>
                        </div>
                    </li>
                    <a href="<?= BASE_URL . 'logout' ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Đăng xuất</p>
                    </a>
                </ul>
            </div>
        </nav>
    </aside>
</body>

</html>
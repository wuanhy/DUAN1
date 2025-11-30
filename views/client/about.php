<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item"><a class="nav-link mx-3 text-dark"
                                href="<?= BASE_URL . '?act=welcome' ?>">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark"
                                href="<?= BASE_URL . '?act=about' ?>">Các địa điểm du lịch</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark"
                                href="<?= BASE_URL . '?act=introduction'?>">Giới thiệu</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark"
                                href="<?= BASE_URL . '?act=blog'?>">Blog</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark" href="<?= BASE_URL . '?act=faq'?>">Các
                                câu hỏi thường gặp</a></li>
                    </ul>

                    <a href="<?=BASE_URL .'?act=login' ?>" class="btn btn-primary fw-bold rounded-pill px-4">Đăng
                        nhập</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="search-hero py-5 mt-5">
            <div class="container text-center pt-5">
                <h2 class="display-6 fw-bold text-dark">
                    Bạn lựa chọn địa điểm du lịch nào?
                </h2>
                <p class="text-muted mb-4">
                    12 điểm hấp dẫn đang chờ bạn khám phá
                </p>

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="input-group mb-3 shadow-sm rounded-pill overflow-hidden">
                            <input type="text" class="form-control border-0 py-2 ps-4" placeholder="Nhập tên địa điểm"
                                aria-label="Nhập tên địa điểm">
                            <button class="btn btn-success fw-bold px-4" type="button" id="button-addon2">
                                Tìm kiếm
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tour-cards py-5">
            <div class="container py-5">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/nhatrang.png" class="card-img-top" alt="Nha Trang"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold">Nha Trang - Biển Nhũ Tiên - Chùa Long Sơn</h5>
                                <p class="text-muted small mb-1">Mã tour: TT002</p>


                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-decoration-line-through text-muted me-2">10.690.000₫</span>
                                    <span class="text-danger fs-4 fw-bolder">9.590.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 3 ngày
                                    2 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Nha
                                    Trang - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/nb.png" class="card-img-top" alt="Ninh Bình"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold">Tour Ninh Bình 2N1Đ - Tràng An, Tam Cốc</h5>
                                <p class="text-muted small mb-1">Mã tour: TT005</p>

                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-danger fs-4 fw-bolder">12.675.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 2 ngày
                                    1 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Ninh
                                    Bình - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/qn.png" class="card-img-top" alt="Quy Nhơn"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold">Tour Quy Nhơn - Phú Yên 4 ngày - 3 đêm </h5>
                                <p class="text-muted small mb-1">Mã tour: TT023</p>

                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-danger fs-4 fw-bolder">17.980.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 4 ngày
                                    3 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Quy
                                    Nhơn - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/halong.png" class="card-img-top" alt="Quy Nhơn"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold">Tour Hà Nội - Côn Đảo - Hạ Long</h5>
                                <p class="text-muted small mb-1">Mã tour: TT025</p>

                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-danger fs-4 fw-bolder">21.980.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 5 ngày
                                    4 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Hà
                                    Nội - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/tb.png" class="card-img-top" alt="Quy Nhơn"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold">Tour Sapa - Tây Bắc 4 ngày 3 đêm</h5>
                                <p class="text-muted small mb-1">Mã tour: TT035</p>

                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-danger fs-4 fw-bolder">26.980.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 4 ngày
                                    3 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Sapa
                                    - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/tutinh.png" class="card-img-top" alt="Quy Nhơn"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold">Tour Tứ Tỉnh Miền Tây 4 ngày 3 đêm</h5>
                                <p class="text-muted small mb-1">Mã tour: TT034</p>

                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-danger fs-4 fw-bolder">13.980.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 4 ngày
                                    3 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Bến
                                    Tre - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/catba.png" class="card-img-top" alt="Quy Nhơn"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold">Tour Hà Nội - Cát Bà 3 ngày 2 đêm</h5>
                                <p class="text-muted small mb-1">Mã tour: TT092</p>

                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-danger fs-4 fw-bolder">14.980.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 3 ngày
                                    2 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Cát
                                    Bà - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/taybac.png" class="card-img-top" alt="Quy Nhơn"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold">Tour Tây Bắc - Mộc Châu</h5>
                                <p class="text-muted small mb-1">Mã tour: TT031</p>

                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-danger fs-4 fw-bolder">17.980.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 5 ngày
                                    5 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Sapa
                                    - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/camranh.png" class="card-img-top" alt="Quy Nhơn"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold">Tour Cam Ranh - Ninh Thuận</h5>
                                <p class="text-muted small mb-1">Mã tour: TT048</p>

                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-danger fs-4 fw-bolder">18.980.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 4 ngày
                                    3 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Nha
                                    Trang - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/danang.png" class="card-img-top" alt="Quy Nhơn"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold">Tour Đà Nẵng 4 ngày 3 đêm</h5>
                                <p class="text-muted small mb-1">Mã tour: TT059</p>

                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-danger fs-4 fw-bolder">9.980.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 4 ngày
                                    3 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Đà
                                    Nẵng - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/ch.png" class="card-img-top" alt="Quy Nhơn"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold">Tour Chùa Hương - Chùa Thiên Trù</h5>
                                <p class="text-muted small mb-1">Mã tour: TT050</p>

                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-danger fs-4 fw-bolder">14.980.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 4 ngày
                                    3 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Hà
                                    Nội - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="public/image/pq.png" class="card-img-top" alt="Quy Nhơn"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-bold"> Tuor Phú Quốc – Hòn Thơm – Bãi Sao</h5>
                                <p class="text-muted small mb-1">Mã tour: TT027</p>

                                <div class="d-flex align-items-baseline mb-2">
                                    <span class="text-danger fs-4 fw-bolder">15.980.000₫</span>
                                </div>

                                <p class="card-text mb-1"><i class="bi bi-clock me-2 text-primary"></i>Thời gian: 3 ngày
                                    2 đêm</p>
                                <p class="card-text mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Địa điểm: Phú
                                    Quốc - Việt Nam</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-primary fw-bold px-4">Đặt ngay</a>
                                    <a href="#" class="text-secondary text-decoration-none small">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer-section pt-5 pb-3 text-white">
        <div class="container">

            <div class="row text-center mb-5">
                <div class="col-12">
                    <h3 class="fw-bold mb-3">Đăng ký nhận thông tin tour mới nhất từ Tuor Travel</h3>
                    <form class="d-flex justify-content-center">
                        <div class="input-group" style="max-width: 400px;">
                            <input type="email" class="form-control" placeholder="john@box.com" aria-label="Email"
                                required>
                            <button class="btn btn-dark" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <hr class="mb-4 opacity-25">

            <div class="row">

                <div class="col-md-6 col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">Tuor Travel</h5>
                    <p class="text-sm">
                        Tuor Travel - chuyên tổ chức tour du lịch trong và ngoài nước, mang đến trải nghiệm du lịch đẳng
                        cấp, an toàn và đáng nhớ cho mọi khách hàng.
                    </p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-md-2 col-lg-2 mb-4">
                    <h5 class="fw-bold mb-3">Services</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#" class="text-white text-sm">Marketing</a></li>
                        <li><a href="#" class="text-white text-sm">Graphic Design</a></li>
                        <li><a href="#" class="text-white text-sm">App Development</a></li>
                        <li><a href="#" class="text-white text-sm">Web Development</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-lg-2 mb-4">
                    <h5 class="fw-bold mb-3">About</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#" class="text-white text-sm">Careers</a></li>
                        <li><a href="#" class="text-white text-sm">History</a></li>
                        <li><a href="#" class="text-white text-sm">Our Team</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-lg-2 mb-4">
                    <h5 class="fw-bold mb-3">Support</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="<?= BASE_URL . '?act=faq'?>" class="text-white text-sm">FAQs</a></li>
                        <li><a href="#" class="text-white text-sm">Contact</a></li>
                        <li><a href="#" class="text-white text-sm">Live Chat</a></li>
                    </ul>
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="text-sm opacity-75">&copy; 2025 Tuor Travel. Đơn vị lữ hành quốc tế.</p>
                </div>
            </div>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
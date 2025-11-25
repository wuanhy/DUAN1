<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu - Elite Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/css/style.css">

</head>

<body>
    <!-- HEADER -->
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

    <!-- MAIN -->
    <main class="py-5 mt-5">
        <div class="container py-5">
            <h1 class="text-center fw-bold mb-5 text-secondary pt-4">Thông tin chung</h1>

            <div class="accordion accordion-flush" id="introductionAccordion">

                <!-- GIỚI THIỆU -->
                <div class="accordion-item shadow-sm mb-3 border rounded-3">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed fw-bold fs-5 text-primary py-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            Giới thiệu về Elite Travel
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#introductionAccordion">
                        <div class="accordion-body bg-light">
                            <h3 class="h5 fw-bold text-dark border-bottom pb-2">1. Chúng tôi là Elite Travel</h3>
                            <p class="text-secondary mt-2">
                                Elite Travel là sản phẩm chính thức của Công ty TNHH Du lịch và Dịch vụ Elite Travel...
                            </p>
                            <h3 class="h5 fw-bold text-dark mt-4 border-bottom pb-2">2. Tại sao chọn chúng tôi?</h3>
                            <p class="text-secondary mt-2">
                                Chúng tôi mong muốn du khách tận hưởng các dịch vụ du lịch chất lượng...
                            </p>
                            <div class="row g-4 mt-2">
                                <div class="col-md-6">
                                    <div class="card h-100 p-3 shadow-sm border">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="text-info fs-3">💎</div>
                                            <div>
                                                <h4 class="fw-semibold h6">Đội ngũ chuyên nghiệp, tâm huyết</h4>
                                                <p class="text-secondary mt-1 small">Chúng tôi có đội ngũ nhân viên kinh
                                                    nghiệm...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 p-3 shadow-sm border">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="text-info fs-3">⭐</div>
                                            <div>
                                                <h4 class="fw-semibold h6">Sản phẩm phong phú</h4>
                                                <p class="text-secondary mt-1 small">Du khách dễ dàng tìm thấy du thuyền
                                                    sang trọng...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 p-3 shadow-sm border">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="text-info fs-3">💲</div>
                                            <div>
                                                <h4 class="fw-semibold h6">Mức giá hấp dẫn</h4>
                                                <p class="text-secondary mt-1 small">Elite Travel luôn cam kết đem đến
                                                    dịch vụ chất lượng...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 p-3 shadow-sm border">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="text-info fs-3">🔒</div>
                                            <div>
                                                <h4 class="fw-semibold h6">Bảo mật thông tin</h4>
                                                <p class="text-secondary mt-1 small">Chúng tôi cam kết giữ bí mật tuyệt
                                                    đối thông tin khách hàng.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ĐIỀU KHOẢN -->
                <div class="accordion-item shadow-sm mb-3 border rounded-3">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed fw-bold fs-5 text-primary py-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Điều khoản & Điều kiện
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#introductionAccordion">
                        <div class="accordion-body bg-light">
                            <h5 class="fw-bold text-dark">Quy định chung</h5>
                            <p>Tất cả các dịch vụ đặt tour đều tuân theo các điều khoản và điều kiện được Elite Travel
                                công bố.</p>
                            <h5 class="fw-bold text-dark mt-3">Chính sách hủy và hoàn tiền</h5>
                            <ul class="text-secondary">
                                <li>Hủy trước 30 ngày: Hoàn lại 100% giá trị tour (trừ phí dịch vụ).</li>
                                <li>Hủy trước 15 ngày: Hoàn lại 50% giá trị tour.</li>
                                <li>Hủy trong vòng 7 ngày: Không hoàn tiền.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- QUYỀN RIÊNG TƯ -->
                <div class="accordion-item shadow-sm mb-3 border rounded-3">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed fw-bold fs-5 text-primary py-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            Chính sách quyền riêng tư
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#introductionAccordion">
                        <div class="accordion-body bg-light">
                            <h5 class="fw-bold text-dark">Bảo mật thông tin cá nhân</h5>
                            <p>Chúng tôi cam kết bảo mật tuyệt đối thông tin cá nhân của khách hàng...</p>
                        </div>
                    </div>
                </div>

                <!-- LIÊN HỆ -->
                <div class="accordion-item shadow-sm mb-3 border rounded-3">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed fw-bold fs-5 text-primary py-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            Liên hệ & Thông tin Công ty
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#introductionAccordion">
                        <div class="accordion-body bg-light">
                            <h4 class="fw-bold text-lg uppercase">Công ty TNHH Du Lịch và Dịch Vụ Elite Travel</h4>
                            <p class="text-sm text-secondary">Elite Travel and Service Company Limited</p>
                            <p class="text-secondary mt-2"><i class="bi bi-geo-alt-fill me-2 text-info"></i>Địa chỉ: Số
                                25 - Ngõ 38 Phố Yên Lãng – Quận Đống Đa – Hà Nội</p>
                            <p class="text-secondary"><i class="bi bi-telephone-fill me-2 text-info"></i>Điện thoại:
                                0922222016</p>
                            <p class="text-secondary"><i class="bi bi-envelope-fill me-2 text-info"></i>Email:
                                elitebooking.tour@gmail.com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
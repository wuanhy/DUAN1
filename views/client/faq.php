<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuor Travel - Trang chủ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <script src="<?= BASE_URL . 'public/js/main.js' ?>"></script>
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
                                href="<?= BASE_URL . 'welcome' ?>">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark"
                                href="<?= BASE_URL . 'about' ?>">Các địa điểm du lịch</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark"
                                href="<?= BASE_URL . 'introduction'?>">Giới thiệu</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark"
                                href="<?= BASE_URL . 'blog'?>">Blog</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark" href="<?= BASE_URL . 'faq'?>">Các
                                câu hỏi thường gặp</a></li>
                    </ul>

                    <a href="<?=BASE_URL .'login' ?>" class="btn btn-primary fw-bold rounded-pill px-4">Đăng
                        nhập</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="faq-hero py-5" style="margin-top: 70px;">
            <div class="container text-center">
                <h1 class="display-5 fw-bold text-dark">Câu hỏi thường gặp</h1>
                <p class="lead text-muted">Chúng tôi vinh hạnh vì đã có cơ hội đồng hành với 10,000 khách hàng trên khắp
                    thế giới</p>
            </div>
        </section>

        <section class="faq-content py-5 custom-blue-bg">
            <div class="container">

                <div class="accordion accordion-flush" id="faqAccordion">

                    <div class="row">

                        <div class="col-lg-6 mb-3">
                            <div class="accordion-item shadow-sm rounded">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        Điều kiện đăng ký tour như thế nào?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Quý khách chỉ cần cung cấp thông tin cá nhân cơ bản (họ tên, ngày sinh, CCCD/Hộ
                                        chiếu) và thanh toán một khoản đặt cọc theo quy định của từng tour. Thông tin
                                        chi tiết sẽ được nhân viên tư vấn.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <div class="accordion-item shadow-sm rounded">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Cần phải đăng ký tour trước bao lâu? Hồ sơ cần chuẩn bị trước bao lâu?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Chúng tôi khuyến nghị nên đăng ký tour sớm, ít nhất là **2 tuần** đối với tour
                                        nội địa và **1-2 tháng** đối với tour nước ngoài để đảm bảo vé máy bay, phòng
                                        khách sạn và kịp thời chuẩn bị visa (nếu có).
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-6 mb-3">
                            <div class="accordion-item shadow-sm rounded">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Khách lớn tuổi đi tour cần điều kiện gì? Tôi đăng ký mua tour trực tiếp khách
                                        lớn tuổi mà không được?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Đối với khách từ **75 tuổi** trở lên, chúng tôi yêu cầu có người thân/người bảo
                                        hộ đi kèm và giấy chứng nhận sức khỏe đủ điều kiện du lịch từ bác sĩ. Điều này
                                        nhằm đảm bảo an toàn tuyệt đối cho quý khách trong suốt hành trình.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <div class="accordion-item shadow-sm rounded">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Khách dưới 18 tuổi đăng ký tour cần điều kiện gì?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Khách dưới 18 tuổi phải có bố/mẹ hoặc người được ủy quyền hợp pháp đi cùng. Nếu
                                        đi cùng người thân khác, cần có giấy ủy quyền đồng ý của bố/mẹ kèm theo hồ sơ
                                        tour.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-6 mb-3">
                            <div class="accordion-item shadow-sm rounded">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Tôi có thể thanh toán tiền mặt ở đâu? Có cần phải đến công ty không?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Quý khách có thể thanh toán tiền mặt trực tiếp tại văn phòng công ty chúng tôi.
                                        Ngoài ra, chúng tôi có dịch vụ thu tiền tận nơi tại khu vực nội thành (áp dụng
                                        cho hóa đơn trên 5 triệu VNĐ).
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <div class="accordion-item shadow-sm rounded">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">
                                        Tôi có thể thanh toán bằng hình thức thẻ được không? Cá thẻ có mất phí gì không?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Chúng tôi chấp nhận thanh toán qua thẻ tín dụng/thẻ ghi nợ (Visa, Mastercard,
                                        JCB). Hiện tại, chúng tôi **không thu thêm phí quẹt thẻ** cho khách hàng.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-6 mb-3">
                            <div class="accordion-item shadow-sm rounded">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        Giá tour đã bao gồm VAT chưa? Tôi muốn xuất hóa đơn được?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Giá niêm yết của tour **chưa bao gồm VAT**. Nếu Quý khách cần xuất hóa đơn VAT,
                                        vui lòng thông báo trước khi thanh toán và chịu thêm phí 10% VAT.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <div class="accordion-item shadow-sm rounded">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        Điểm tham quan ở nước ngoài có an toàn không?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Chúng tôi luôn chọn các điểm đến và đối tác có độ tin cậy cao, đảm bảo an toàn
                                        tối đa cho du khách. Hướng dẫn viên của chúng tôi được đào tạo để xử lý mọi tình
                                        huống khẩn cấp theo tiêu chuẩn quốc tế.
                                    </div>
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
                        <li><a href="<?= BASE_URL . 'faq'?>" class="text-white text-sm">FAQs</a></li>
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
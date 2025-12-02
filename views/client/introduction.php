<?php require_once 'views/layouts/blocks/header.php'; ?>

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
                <<<<<<< HEAD=======<div class="col-md-2 col-lg-2 mb-4">
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

            >>>>>>> dev/dat
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
<?php require_once 'views/layouts/blocks/footer.php'; ?>
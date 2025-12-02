<?php require_once 'views/layouts/blocks/header.php'; ?>

<section class="hero-section">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-6 col-md-12 hero-left text-white z-2">
                <h1 class="display-4 fw-bolder mb-3">Du lịch cùng Elite Travel</h1>
                <p class="fs-5 mb-4 opacity-75">Với nguồn lực dồi dào, kinh nghiệm và uy tín trong lĩnh vực dịch vụ
                    du lịch, lữ hành Elite Travel luôn mang đến cho khách hàng những dịch vụ du lịch giá trị nhất.
                </p>
                <button class="btn btn-light btn-lg fw-bold rounded-pill text-primary px-5">Tìm hiểu ngay</button>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-end hero-right z-1">
                <img src="<?= BASE_URL . 'public/image/banner.png' ?>" alt="Elite Travel"
                    class="img-fluid w-100 banner-img">
            </div>
        </div>
    </div>

    <div class="row justify-content-center search-bar-row position-absolute w-100 start-0" style="bottom: -40px;">
        <div class="col-lg-8 col-md-10 search-popover-wrapper">

            <div class="input-group p-2 rounded-pill bg-white shadow-lg search-bar-custom z-3 position-relative">
                <span class="input-group-text border-0 bg-transparent ps-3">
                    <i class="bi bi-geo-alt text-muted fs-5"></i>
                </span>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Bạn muốn đi đâu?"
                    id="mainSearchInput">
                <button class="btn btn-primary rounded-pill px-4 fw-bold ms-2">
                    <i class="bi bi-search me-1"></i> Tìm kiếm
                </button>
            </div>

            <div class="search-suggestions-box bg-white p-4 shadow-lg rounded-3 border mt-2" style="display: none;"
                id="searchSuggestions">
                <div class="row">
                    <div class="col-md-6 border-end">
                        <h6 class="fw-bold text-primary mb-3">Tour được tìm kiếm nhiều nhất</h6>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-dark mb-3 hover-effect">
                            <img src="<?= BASE_URL . 'public/image/nhatrang.png' ?>" class="rounded me-3"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <p class="mb-0 fw-bold small">Nha Trang - Bãi Rêu Tiên - Chùa Long Sơn</p>
                                <p class="mb-0 text-muted small">Tour 3 ngày | Chỉ từ <span
                                        class="text-danger fw-bold">6.990.000 đ</span></p>
                            </div>
                        </a>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-dark mb-3 hover-effect">
                            <img src="<?= BASE_URL . 'public/image/nb.png' ?>" class="rounded me-3"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <p class="mb-0 fw-bold small">Tour Ninh Bình 2N1Đ - Tràng An, Tam Cốc</p>
                                <p class="mb-0 text-muted small">Tour 2 ngày | Chỉ từ <span
                                        class="text-danger fw-bold">2.500.000 đ</span></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <h6 class="fw-bold text-primary mb-3">Điểm đến nổi bật</h6>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-dark mb-3 hover-effect">
                            <img src="<?= BASE_URL . 'public/image/hl.png' ?>" class="rounded me-3"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <p class="mb-0 fw-bold small">Tour Hà Nội - Côn Đảo - Hạ Long</p>
                                <p class="mb-0 text-muted small">Tour 4 ngày | Chỉ từ <span
                                        class="text-danger fw-bold">8.195.000 đ</span></p>
                            </div>
                        </a>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-dark mb-3 hover-effect">
                            <img src="<?= BASE_URL . 'public/image/tb.png' ?>" class="rounded me-3"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <p class="mb-0 fw-bold small">Tour Sapa - Tây Bắc 4 ngày 3 đêm</p>
                                <p class="mb-0 text-muted small">Tour 4 ngày | Chỉ từ <span
                                        class="text-danger fw-bold">7.650.000 đ</span></p>
                            </div>
                        </a>
                    </div>
                </div>
                <p class="text-end mt-3 mb-0">
                    <button type="button" class="btn btn-sm btn-secondary" id="closeSuggestions">Đóng</button>
                </p>
            </div>

        </div>
    </div>

</section>
<section class="about-section">
    <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h5 class="text-uppercase text-primary fw-bold mb-2">Về chúng tôi</h5>
                <h2 class="display-6 fw-bold text-info mb-4">Công ty cổ phần <span class="text-primary">Elite
                        Travel</span></h2>

                <p class="text-muted mb-4">
                    Chúng tôi luôn lắng nghe và chia sẻ mong muốn của từng khách hàng, mang lại sự hài lòng về dịch
                    vụ cũng như thái độ phục vụ...
                </p>

                <div class="stats-list mt-4">
                    <div class="stat-item mb-3 d-flex align-items-center">
                        <span class="stat-number text-primary fw-bold display-6 me-3" style="width: 60px;">27</span>
                        <span class="stat-text fs-5 text-secondary fw-medium">Năm hình thành và phát triển</span>
                    </div>
                    <div class="stat-item mb-3 d-flex align-items-center">
                        <span class="stat-number text-primary fw-bold display-6 me-3" style="width: 60px;">06</span>
                        <span class="stat-text fs-5 text-secondary fw-medium">Văn phòng nước ngoài</span>
                    </div>
                    <div class="stat-item mb-3 d-flex align-items-center">
                        <span class="stat-number text-primary fw-bold display-6 me-3" style="width: 60px;">43</span>
                        <span class="stat-text fs-5 text-secondary fw-medium">Chi nhánh và giao dịch</span>
                    </div>
                    <div class="stat-item mb-3 d-flex align-items-center">
                        <span class="stat-number text-primary fw-bold display-6 me-3" style="width: 60px;">15</span>
                        <span class="stat-text fs-5 text-secondary fw-medium">Công ty thành viên</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 text-center position-relative">
                <div class="about-images-stack-3">
                    <img src="<?= BASE_URL . 'public/image/halong.png' ?>" class="img-fluid img-stack-3-behind"
                        alt="Hạ Long">
                    <img src="<?= BASE_URL . 'public/image/hoguom.png' ?>" class="img-fluid img-stack-3-middle"
                        alt="Hồ Gươm">
                    <img src="<?= BASE_URL . 'public/image/baibien.png' ?>" class="img-fluid img-stack-3-front"
                        alt="Phú Quốc">
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-4 g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 p-3 feature-card bg-light-subtle">
                    <div class="card-body text-center">
                        <div class="icon-box mb-3">
                            <i class="bi bi-globe2"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Các Thông Tin Tour Mới Nhất</h5>
                        <p class="text-muted small">Luôn cập nhật các thông tin mới nhất, đầy đủ nhất về các tour
                            tốt nhất hiện nay.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 p-3 feature-card bg-light-subtle">
                    <div class="card-body text-center">
                        <div class="icon-box mb-3">
                            <i class="bi bi-people-fill text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Chuyên Gia Tư Vấn Chi Tiết Nhất</h5>
                        <p class="text-muted small">Các tư vấn viên chuyên nghiệp luôn sẵn sàng hỗ trợ bạn tận tâm
                            và chi tiết nhất.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 p-3 feature-card bg-light-subtle">
                    <div class="card-body text-center">
                        <div class="icon-box mb-3">
                            <i class="bi bi-lightning-charge-fill text-warning fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Khuyến Mãi & Giá Luôn Tốt Nhất</h5>
                        <p class="text-muted small">Các chương trình khuyến mãi hấp dẫn và giá tour cạnh tranh được
                            cập nhật liên tục.</p>
                    </div>
                </div>
            </div>
        </div>
        <<<<<<< HEAD </div>
</section>
<section class="destinations-section py-5">
    <div class="container pt-5">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-bold text-dark mb-3">Các địa điểm và phố biến nhất</h2>
                <p class="fs-5 text-muted">
                    Tận hưởng sự xa hoa và đẳng cấp tối đa trên du thuyền mới nhất và phố biến nhất. Khám phá mọi
                    hành trình tuyệt vời đưa bạn vào thế giới của sự sang trọng, nghỉ ngơi và trải nghiệm không thể
                    quên.
                </p>
            </div>
        </div>

        <div id="destinationCarousel" class="carousel slide carousel-multi-item" data-bs-ride="carousel"
            data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/hgg.jpg' ?>" alt="Hà Nội Cổ Kính"
                                    class="img-fluid destination-img">

                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Du Lịch Văn Hóa Hà Nội 3N2Đ</h5>
                                    <p class="small opacity-75">Tham quan Hồ Gươm, Lăng Bác, Văn Miếu Quốc Tử Giám.
                                    </p>
                                </div>

                                <div class="card-overlay">
                                    <a href="#" class="stretched-link" title="Xem chi tiết tour"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/lbb.png' ?>" alt="Lăng Bác - Quảng Trường"
                                    class="img-fluid destination-img">

                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Tham Quan Quảng Trường Ba Đình</h5>
                                    <p class="small opacity-75">Viếng Lăng Chủ Tịch, khám phá Khu di tích Phủ Chủ
                                        Tịch.</p>
                                </div>

                                <div class="card-overlay">
                                    <a href="#" class="stretched-link" title="Xem chi tiết tour"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/dn.png' ?>" alt="Tour Đà Nẵng Team Building"
                                    class="img-fluid destination-img">

                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Tour Đà Nẵng Team Building 3 ngày 2 đêm từ TP. HCM</h5>
                                    <p class="small opacity-75">Tour nghỉ dưỡng 4 ngày tại Vinpearl Resort.</p>
                                </div>

                                <div class="card-overlay">
                                    <a href="#" class="stretched-link" title="Xem chi tiết tour"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/baibien.png' ?>" alt="Biển Nha Trang"
                                    class="img-fluid destination-img">

                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Nha Trang - Tuyệt Tác Biển Đảo</h5>
                                    <p class="small opacity-75">Tour nghỉ dưỡng 4 ngày tại Vinpearl Resort.</p>
                                </div>

                                <div class="card-overlay">
                                    <a href="#" class="stretched-link" title="Xem chi tiết tour"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/mc.jpg' ?>" alt="Mộc Châu Mùa Hoa"
                                    class="img-fluid destination-img">

                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Mộc Châu - Mùa Hoa Cải</h5>
                                    <p class="small opacity-75">Tour Tây Bắc 4 ngày 3 đêm, trải nghiệm du lịch nông
                                        trại.</p>
                                </div>

                                <div class="card-overlay">
                                    <a href="#" class="stretched-link" title="Xem chi tiết tour"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/hll.jpg' ?>" alt="Vịnh Hạ Long"
                                    class="img-fluid destination-img">

                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Tour Du Thuyền Hạ Long 5 Sao</h5>
                                    <p class="small opacity-75">Trải nghiệm du thuyền cao cấp 2 ngày 1 đêm.</p>
                                </div>

                                <div class="card-overlay">
                                    <a href="#" class="stretched-link" title="Xem chi tiết tour"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/cm.jpg' ?>" alt="Cam Ranh"
                                    class="img-fluid destination-img">

                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Tour Cam Ranh - Ninh Thuận</h5>
                                    <p class="small opacity-75">Trải nghiệm bãi biển 3 ngày 2 đêm</p>
                                </div>

                                <div class="card-overlay">
                                    <a href="#" class="stretched-link" title="Xem chi tiết tour"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/qnn.png' ?>" alt="Vịnh Hạ Long"
                                    class="img-fluid destination-img">

                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Tour Quy Nhơn - Phú Yên</h5>
                                    <p class="small opacity-75">Trải nghiệm du thuyền cao cấp 2 ngày 1 đêm.</p>
                                </div>

                                <div class="card-overlay">
                                    <a href="#" class="stretched-link" title="Xem chi tiết tour"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6 d-none d-lg-block"></div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#destinationCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#destinationCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section class="destinationss-section py-5">
    <div class="container pt-5">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-bold text-dark mb-3">Các gói du lịch trong nước & ngoài nước</h2>
                <p class="fs-5 text-muted">
                    Khám phá những điểm đến tuyệt vời trong và ngoài nước với các gói tour được thiết kế hoàn hảo
                    mang đến những trải nghiệm du lịch đáng nhớ và giá trị tốt nhất
                </p>
            </div>
        </div>

        <div id="destinationMarquee" class="carousel slide carousel-multi-item" data-bs-ride="false">
            <div class="carousel-inner marquee-inner">

                <div class="carousel-item active">
                    <div class="row g-4 justify-content-start flex-nowrap mx-0">

                        <div class="col-lg-3 col-md-6 marquee-item">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/hgg.jpg' ?>" alt="Hà Nội Cổ Kính"
                                    class="img-fluid destination-img">
                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Du Lịch Văn Hóa Hà Nội 3N2Đ</h5>
                                    <p class="small opacity-75">Tham quan Hồ Gươm, Lăng Bác.</p>
                                </div>
                                <div class="card-overlay"><a href="#" class="stretched-link"
                                        title="Xem chi tiết tour"></a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 marquee-item">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/lbb.png' ?>" alt="Lăng Bác - Quảng Trường"
                                    class="img-fluid destination-img">
                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Tham Quan Quảng Trường Ba Đình</h5>
                                    <p class="small opacity-75">Viếng Lăng Chủ Tịch, khám phá Khu di tích.</p>
                                </div>
                                <div class="card-overlay"><a href="#" class="stretched-link"
                                        title="Xem chi tiết tour"></a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 marquee-item">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/dn.png' ?>" alt="Tour Đà Nẵng Team Building"
                                    class="img-fluid destination-img">
                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Tour Đà Nẵng Team Building</h5>
                                    <p class="small opacity-75">Tour nghỉ dưỡng 4 ngày tại Vinpearl Resort.</p>
                                </div>
                                <div class="card-overlay"><a href="#" class="stretched-link"
                                        title="Xem chi tiết tour"></a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 marquee-item">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/baibien.png' ?>" alt="Biển Nha Trang"
                                    class="img-fluid destination-img">
                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Nha Trang - Tuyệt Tác Biển Đảo</h5>
                                    <p class="small opacity-75">Tour nghỉ dưỡng 4 ngày tại Vinpearl Resort.</p>
                                </div>
                                <div class="card-overlay"><a href="#" class="stretched-link"
                                        title="Xem chi tiết tour"></a></div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 marquee-item">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/hgg.jpg' ?>" alt="Hà Nội Cổ Kính"
                                    class="img-fluid destination-img">
                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Du Lịch Văn Hóa Hà Nội 3N2Đ</h5>
                                    <p class="small opacity-75">Tham quan Hồ Gươm, Lăng Bác.</p>
                                </div>
                                <div class="card-overlay"><a href="#" class="stretched-link"
                                        title="Xem chi tiết tour"></a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 marquee-item">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/lbb.png' ?>" alt="Lăng Bác - Quảng Trường"
                                    class="img-fluid destination-img">
                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Tham Quan Quảng Trường Ba Đình</h5>
                                    <p class="small opacity-75">Viếng Lăng Chủ Tịch, khám phá Khu di tích.</p>
                                </div>
                                <div class="card-overlay"><a href="#" class="stretched-link"
                                        title="Xem chi tiết tour"></a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 marquee-item">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/dn.png' ?>" alt="Tour Đà Nẵng Team Building"
                                    class="img-fluid destination-img">
                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Tour Đà Nẵng Team Building</h5>
                                    <p class="small opacity-75">Tour nghỉ dưỡng 4 ngày tại Vinpearl Resort.</p>
                                </div>
                                <div class="card-overlay"><a href="#" class="stretched-link"
                                        title="Xem chi tiết tour"></a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 marquee-item">
                            <div class="destination-card position-relative overflow-hidden rounded-3 shadow-lg">
                                <img src="<?= BASE_URL . 'public/image/baibien.png' ?>" alt="Biển Nha Trang"
                                    class="img-fluid destination-img">
                                <div class="card-hover-content">
                                    <h5 class="fw-bold mb-1">Nha Trang - Tuyệt Tác Biển Đảo</h5>
                                    <p class="small opacity-75">Tour nghỉ dưỡng 4 ngày tại Vinpearl Resort.</p>
                                </div>
                                <div class="card-overlay"><a href="#" class="stretched-link"
                                        title="Xem chi tiết tour"></a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once 'views/layouts/blocks/footer.php'; ?>
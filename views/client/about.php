<?php require_once 'views/layouts/blocks/header.php'; ?>
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
<?php require_once 'views/layouts/blocks/footer.php'; ?>
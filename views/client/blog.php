<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Travel - Trang chủ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                        <li class="nav-item"><a class="nav-link mx-3 text-dark" href="<?= BASE_URL . 'welcome' ?>">Trang
                                chủ</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark" href="<?= BASE_URL . 'about' ?>">Các địa
                                điểm du lịch</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark"
                                href="<?= BASE_URL . 'introduction'?>">Giới thiệu</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark" href="<?= BASE_URL . 'blog'?>">Blog</a>
                        </li>
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
        <div class="d-flex justify-content-center py-3">
            <img src="<?=BASE_URL .'public/image/logo.jpg' ?>" alt="">
        </div>
        <h2 class="mb-4 text-center fw-bold">Bài viết mới nhất</h2>
        <div class="row g-4">
            <?php foreach($listdata as $b): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="<?= BASE_URL . 'blog_detail&id=' . $b['id'] ?>" class="blog-card-link text-decoration-none">
                    <div class="card blog-post-card shadow-sm">
                        <img src="<?=BASE_URL . $b['image'] ?>" class="card-img-top blog-thumb"
                            alt="<?= $b['tieu_de'] ?>">

                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold mt-1 blog-title">
                                <?= htmlspecialchars($b['tieu_de']) ?>
                            </h5>

                            <p class="card-text blog-summary">
                                <?= strip_tags($b['noi_dung']) ?>
                            </p>
                            <p class="blog-author">
                                <?= strip_tags($b['author_name']) ?>
                            </p>

                        </div>

                    </div>
                </a>
            </div>
            <?php endforeach; ?>
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
    <script src="<?= BASE_URL . 'public/js/main.js' ?>"></script>
    <style>
    .blog-thumb {
        height: 220px;
        width: 100%;
        object-fit: cover;
        border-radius: 6px 6px 0 0;
    }

    .blog-post-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .blog-post-card {
        height: 100%;
        margin-left: 30px;
        margin-right: 30px;


    }

    .blog-summary {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        height: 70px;
    }

    .blog-author {
        font-size: 14px;
        color: #555;
        margin-bottom: 10px;
    }

    .blog-title:hover {
        color: #007bff;
        transition: color 0.3s ease;
    }
    </style>
</body>

</html>
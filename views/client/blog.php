<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Travel - Trang chủ</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    
    <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top custom-gradient-navbar" id="main-navbar">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="#"><img src="<?= BASE_URL . 'assets/image/logotour.png' ?>" alt="Tour Travel Logo" height="50"></a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mb-2 mb-lg-0 mx-auto"> 
                        <li class="nav-item"><a class="nav-link mx-3 text-dark" href="<?= BASE_URL . '?action=about' ?>">Các địa điểm du lịch</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark" href="<?= BASE_URL . '?action=introduction'?>">Giới thiệu</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark" href="<?= BASE_URL . '?action=blog'?>">Blog</a></li>
                        <li class="nav-item"><a class="nav-link mx-3 text-dark" href="<?= BASE_URL . '?action=faq'?>">Các câu hỏi thường gặp</a></li>
                    </ul>
                    
                    <a href="<?=BASE_URL .'?action=login' ?>" class="btn btn-primary fw-bold rounded-pill px-4">Đăng nhập</a>
                </div>
            </div>
        </nav>
    </header>
   <main>  <div class="d-flex justify-content-center py-3">
    <img src="<?=BASE_URL .'assets/image/logo.jpg' ?>" alt="">
</div>
    <section class="main-blog-content py-5 custom-blue-bg">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9">
                    <div class="row"> 
                        
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="<?= BASE_URL . '?action=blog_detail&id=1' ?>" class="blog-card-link">
                                <div class="card blog-post-card shadow-sm">
                                    <img src="<?=BASE_URL .'assets/image/camranh.png' ?>" class="card-img-top blog-thumb" alt="Cam Ranh">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold mt-1">Cam Ranh - Thiên đường biển đảo của miền Trung</h5>
                                        <p class="card-text blog-summary">Nằm ở tỉnh Khánh Hòa, cách thành phố Nha Trang khoảng 60km, Cam Ranh đang trở thành điểm đến lý tưởng cho du khách trong và ngoài nước...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="<?= BASE_URL . '?action=blog_detail&id=2' ?>" class="blog-card-link">
                                <div class="card blog-post-card shadow-sm">
                                    <img src="<?=BASE_URL .'assets/image/tb.png' ?>" class="card-img-top blog-thumb" alt="Sapa">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold mt-1">Khám phá Sapa: Thị trấn trong sương mờ</h5>
                                        <p class="card-text blog-summary">Chỉ cách Hà Nội khoảng 80km, Sapa từ lâu đã là địa điểm du lịch lý tưởng cho những ai muốn tìm một chốn nghỉ dưỡng, tránh xa khói bụi đô thị...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="<?= BASE_URL . '?action=blog_detail&id=10' ?>" class="blog-card-link">
                                <div class="card blog-post-card shadow-sm">
                                    <img src="<?=BASE_URL .'assets/image/halong.png' ?>" class="card-img-top blog-thumb" alt="Vịnh Hạ Long"> 
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold mt-1">Hạ Long - Kỳ quan thiên nhiên thế giới</h5>
                                        <p class="card-text blog-summary">Hạ Long: Vịnh tuyệt đẹp với núi đá vôi, đảo nhỏ kỳ vĩ, nước biển xanh biếc, thiên nhiên hùng vĩ, di sản thế giới, thu hút du khách từ khắp nơi...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="<?= BASE_URL . '?action=blog_detail&id=4' ?>" class="blog-card-link">
                                <div class="card blog-post-card shadow-sm">
                                    <img src="<?=BASE_URL .'assets/image/pq.png' ?>" class="card-img-top blog-thumb" alt="Phú Quốc">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold mt-1">Phú Quốc - Thiên đường nghỉ dưỡng biển đảo</h5>
                                        <p class="card-text blog-summary">Phú Quốc: Hòn đảo ngọc xinh đẹp với bãi biển trắng mịn, nước biển trong xanh, rừng nguyên sinh rộng lớn...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="<?= BASE_URL . '?action=blog_detail&id=11' ?>" class="blog-card-link">
                                <div class="card blog-post-card shadow-sm">
                                    <img src="<?=BASE_URL .'assets/image/catba.png' ?>" class="card-img-top blog-thumb" alt="Phong Nha">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold mt-1">Khám Phá về Cát Bà - Du lịch sinh thái</h5>
                                        <p class="card-text blog-summary">Cát Bà – hòn đảo thiên đường của Vịnh Hạ Long, biển xanh mênh mông, núi đá vôi hùng vĩ...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="<?= BASE_URL . '?action=blog_detail&id=12' ?>" class="blog-card-link">
                                <div class="card blog-post-card shadow-sm">
                                    <img src="<?=BASE_URL .'assets/image/ch.png' ?>" class="card-img-top blog-thumb" alt="Đà Lạt">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold mt-1">Chùa Hương miền đất Phật giữa chốn bống lai tiên cảnh</h5>
                                        <p class="card-text blog-summary">Chùa Hương – miền đất Phật yên bình, núi non trùng điệp, suối nước trong xanh, hương trầm lan tỏa ...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div> 
                    </div> 
                <div class="col-lg-3">
                    <aside class="sidebar p-3 rounded shadow-sm bg-white">
                        <h2 class="h5 mb-3 text-dark border-bottom pb-2">Bài viết nổi bật</h2>
                        
                        <a href="#" class="sidebar-post-link d-flex align-items-center mb-3">
                            <img src="<?=BASE_URL .'assets/image/hg.png' ?>" alt="Hà Nội" class="sidebar-thumb me-3">
                            <div><p class="mb-0 sidebar-title">Hà Nội - Trái tim của Việt Nam</p></div>
                        </a>
                        <a href="#" class="sidebar-post-link d-flex align-items-center mb-3">
                            <img src="<?=BASE_URL .'assets/image/camranh.png' ?>" alt="Cam Ranh" class="sidebar-thumb me-3">
                            <div><p class="mb-0 sidebar-title">Cam Ranh - Thiên đường biển đảo</p></div>
                        </a>
                        <a href="#" class="sidebar-post-link d-flex align-items-center mb-3">
                            <img src="<?=BASE_URL .'assets/image/nhatrang.png' ?>" alt="Nha Trang" class="sidebar-thumb me-3">
                            <div><p class="mb-0 sidebar-title">Nha Trang - Thành phố biển xinh đẹp</p></div>
                        </a>
                        <a href="#" class="sidebar-post-link d-flex align-items-center mb-3">
                            <img src="<?=BASE_URL .'assets/image/danang.png' ?>" alt="Đà Nẵng" class="sidebar-thumb me-3">
                            <div><p class="mb-0 sidebar-title">Đà Nẵng - Di sản thiên nhiên</p></div>
                        </a>
                        <a href="#" class="sidebar-post-link d-flex align-items-center mb-3">
                            <img src="<?=BASE_URL .'assets/image/pq.png' ?>" alt="Đà Nẵng" class="sidebar-thumb me-3">
                            <div><p class="mb-0 sidebar-title">Phú Quốc - Thiên đường nghỉ dưỡng biển đảo</p></div>
                        </a>
                        <a href="#" class="sidebar-post-link d-flex align-items-center mb-3">
                            <img src="<?=BASE_URL .'assets/image/ch.png' ?>" alt="Đà Nẵng" class="sidebar-thumb me-3">
                            <div><p class="mb-0 sidebar-title">Chùa Hương miền đất Phật giữa chốn bống lai tiên cảnh</p></div>
                        </a>
                        <a href="#" class="sidebar-post-link d-flex align-items-center mb-3">
                            <img src="<?=BASE_URL .'assets/image/halong.png' ?>" alt="Đà Nẵng" class="sidebar-thumb me-3">
                            <div><p class="mb-0 sidebar-title">Hạ Long - Kỳ quan thiên nhiên thế giới</p></div>
                        </a>
                    </aside>
                </div>
                </div>
            </div>
    </section>
    
    <div class="floating-chat-btn">
        <i class="fas fa-comment"></i>
    </div>
    
</main>
<footer class="footer-section pt-5 pb-3 text-white">
        <div class="container">
            
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h3 class="fw-bold mb-3">Đăng ký nhận thông tin tour mới nhất từ Tuor Travel</h3>
                    <form class="d-flex justify-content-center">
                        <div class="input-group" style="max-width: 400px;">
                            <input type="email" class="form-control" placeholder="john@box.com" aria-label="Email" required>
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
                        Tuor Travel - chuyên tổ chức tour du lịch trong và ngoài nước, mang đến trải nghiệm du lịch đẳng cấp, an toàn và đáng nhớ cho mọi khách hàng.
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
                        <li><a href="<?= BASE_URL . '?action=faq'?>" class="text-white text-sm">FAQs</a></li>
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
    <script src="<?= BASE_URL . 'assets/js/main.js' ?>"></script>
</body>
</html>
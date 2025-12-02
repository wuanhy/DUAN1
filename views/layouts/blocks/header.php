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
    <script src="<?= BASE_URL . 'public/js/main.js' ?>"></script>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top custom-gradient-navbar" id="main-navbar">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="#"><img src="<?= BASE_URL . 'public/image/logo.png' ?>"
                        alt=" Elite Travel Logo" height="50"></a>
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
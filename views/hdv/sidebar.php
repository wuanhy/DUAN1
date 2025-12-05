<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
 <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top custom-gradient-navbar" id="main-navbar">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="#"><img src="<?= BASE_URL . 'public/image/logotour.png' ?>"
                        alt="Elite Travel Logo" height="50"></a>
                        <?php
                         if(!isset($_SESSION['userLogin'])){
                            header("Location: " .BASE_URL .'login');
                         }
                         ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                         <?php if(isset($_SESSION['userLogin'])) : ?>
                            <span class="fw-semibold text-black me-3">
                                    Hi, <?= htmlspecialchars($_SESSION['userLogin']['name']) ?>
                            </span>
                            <div class="dropdown">
                            <a href="#" class="d-block" id="avatarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?= BASE_URL . ($_SESSION['userLogin']['avatar'] ?? 'public/image/meo.jpg') ?>"
                                     alt="Avatar" class="rounded-circle" width="40" height="40">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="avatarDropdown">
                                <li>
                                    <a class="dropdown-item" href="<?= BASE_URL . 'hdv-profile' ?>">Xem hồ sơ</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= BASE_URL . 'logout' ?>">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                        <?php endif; ?>

            </div>
            </div>
        </nav>
    </header>
 <aside class="sidebar bg-white w-64 border-r border-gray-200 flex flex-col h-full overflow-y-auto">
                            
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse"
            style="position: fixed; top: 60px; bottom: 0; left: 0; z-index: 100; padding: 0; overflow-y: auto;">
            <div class="position-sticky pt-3">
            <h6 class="text-muted text-uppercase px-3 mb-3">Hệ Thống HDV</h6>

         <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a class="nav-link text-dark d-flex align-items-center" href="<?= BASE_URL . 'hdv-profile' ?>">
                <i class="bi bi-person-fill me-2"></i>
                Hồ sơ cá nhân
            </a>
        </li>

        <li class="nav-item mb-2">
            <a class="nav-link text-dark d-flex align-items-center" href="<?= BASE_URL . 'hdv-tours' ?>">
                <i class="bi bi-briefcase-fill me-2"></i>
                Tour được giao
            </a>
        </li>

        <li class="nav-item mt-auto">
            <a class="nav-link text-dark d-flex align-items-center" href="<?= BASE_URL . 'logout' ?>">
                <i class="bi bi-box-arrow-right me-2"></i>
                Đăng xuất
            </a>
        </li>
    </ul>
    </div>
    </nav>
</aside>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
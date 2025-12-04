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
<?php require_once 'views/layouts/blocks/header.php'; ?>
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
    <?php require_once 'views/layouts/blocks/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
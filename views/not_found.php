<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Trang không tìm thấy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .not-found-card {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            text-align: center;
            max-width: 500px;
        }
        .not-found-header h1 {
            font-size: 4rem;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 1rem;
        }
        .not-found-header .subtitle {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }
        .btn-welcome {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.3s;
        }
        .btn-welcome:hover {
            transform: translateY(-2px);
            color: white;
        }
    </style>
</head>
<body>
    <div class="not-found-card">
        <div class="not-found-header">
            <i class="bi bi-exclamation-triangle-fill" style="font-size: 5rem; color: #ffc107;"></i>
            <h1>404</h1>
            <div class="subtitle">
                Rất tiếc, trang bạn đang tìm kiếm không tồn tại
            </div>
        </div>
        <div class="card-body">
            <p class="text-muted mb-4">
                Trang bạn đang tìm kiếm không tồn tại hoặc đã bị xóa.<br>
                Vui lòng kiểm tra lại đường dẫn hoặc quay về trang chủ.
            </p>
            <div class="text-center mt-4">
                <a href="<?= BASE_URL ?>" class="btn-welcome">
                    <i class="bi bi-house-door-fill me-2"></i>
                    Quay về trang chủ
                </a>
            </div>
        </div>
    </div>
</body>
</html>


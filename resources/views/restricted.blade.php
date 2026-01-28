<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Giới Hạn Tuổi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 500px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }
        p {
            color: #666;
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.6;
        }
        .user-info {
            background: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .user-info strong {
            color: #667eea;
        }
        .btn {
            display: inline-block;
            padding: 12px 30px;
            margin-top: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: transform 0.2s;
            font-weight: bold;
        }
        .btn:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✓ Xác Nhận Độ Tuổi</h1>
        <p>Bạn đã được xác nhận độ tuổi và được phép truy cập trang này.</p>
        <div class="user-info">
            <p>Tuổi của bạn: <strong>{{ session('age') }} tuổi</strong></p>
        </div>
        <p>Đây là trang được bảo vệ bởi middleware kiểm tra độ tuổi.</p>
        <a href="/age" class="btn">Quay Lại</a>
    </div>
</body>
</html>

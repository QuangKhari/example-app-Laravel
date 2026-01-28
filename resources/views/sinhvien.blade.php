<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            max-width: 500px;
            width: 100%;
        }
        h1 {
            color: #667eea;
            text-align: center;
            margin-bottom: 30px;
        }
        .info-group {
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
        }
        .info-group:last-child {
            border-bottom: none;
        }
        label {
            font-weight: bold;
            color: #555;
            font-size: 14px;
            text-transform: uppercase;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            color: #333;
            font-size: 18px;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 4px solid #667eea;
            border-radius: 4px;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .back-link:hover {
            background-color: #764ba2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông tin sinh viên</h1>
        
        <div class="info-group">
            <label>Họ và tên:</label>
            <div class="value">{{ $name }}</div>
        </div>

        <div class="info-group">
            <label>Mã số sinh viên:</label>
            <div class="value">{{ $mssv }}</div>
        </div>

        <a href="/" class="back-link">← Quay lại</a>
    </div>
</body>
</html>

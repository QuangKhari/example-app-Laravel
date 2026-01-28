<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Tuổi</title>
</head>
<body>
    <h1>Nhập Tuổi</h1>
    <form action="{{ url('save-age') }}" method="POST">
        @csrf
        <label for="age">Tuổi của bạn:</label>
        <input type="text" id="age" name="age" required placeholder="Nhập tuổi">
        <button type="submit">Lưu Tuổi</button>
    </form>
    @if (session('age'))
        <p>Tuổi của bạn: {{ session('age') }} tuổi</p>
    @endif
</body>
</html>

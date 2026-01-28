<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <h1>Đăng Ký Tài Khoản</h1>
    <form action="/checksignin" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="repass">Re-enter Password:</label>
        <input type="password" id="repass" name="repass" required><br><br>

        <label for="mssv">MSSV:</label>
        <input type="text" id="mssv" name="mssv" required><br><br>

        <label for="lopmonhoc">Lớp Môn Học:</label>
        <input type="text" id="lopmonhoc" name="lopmonhoc" required><br><br>

        <label for="gioitinh">Giới Tính:</label>
        <select id="gioitinh" name="gioitinh" required>
            <option value="nam">Nam</option>
            <option value="nu">Nữ</option>
        </select><br><br>

        <button type="submit">Sign In</button>
    </form>
</body>
</html>
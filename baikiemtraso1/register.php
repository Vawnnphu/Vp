<?php
session_start();
ob_start();

$error = ""; // Biến lưu lỗi

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Kiểm tra xác nhận mật khẩu
    if ($password !== $confirm_password) {
        $error = "Mật khẩu xác nhận không khớp!";
    } else {
        // Lưu thông tin vào cookie (7 ngày)
        setcookie('saved_email', $email, time() + (86400 * 7), "/");
        setcookie('saved_password', $password, time() + (86400 * 7), "/");

        $_SESSION['success_message'] = "Đăng ký thành công! Hãy đăng nhập.";
        header("Location: login.php");
        exit();
    }
}
ob_end_flush(); // Đẩy output ra trình duyệt
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F0F9FF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 350px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #374151;
        }
        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 16px;
        }
        button {
            padding: 12px;
            background-color: #3B82F6;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #2563EB;
        }
        .links {
            text-align: center;
            margin-top: 20px;
        }
        .links span {
            color: #000000;
        }
        .links a {
            color: #1D4ED8;
            text-decoration: none;
        }
        .links a:last-child {
            display: block;
            margin-top: 5px;
        }
        .links a:hover {
            text-decoration: underline;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Đăng Ký</h2>

        <?php if (!empty($error)) : ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form action="" method="POST">
            <label for="name">Họ và Tên</label>
            <input type="text" id="name" name="name" placeholder="Nhập họ tên" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Nhập email" required>

            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>

            <label for="confirm_password">Xác nhận mật khẩu</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Xác nhận mật khẩu" required>

            <button type="submit">Đăng Ký</button>
        </form>

        <div class="links">
            <span>Đã có tài khoản?</span> <a href="login.php">Đăng Nhập</a>
            <a href="reset-password.php">Quên mật khẩu?</a>
        </div>
    </div>
</body>
</html>

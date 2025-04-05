
<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(166, 205, 243);
            color: #374151;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header, footer {
            background-color: #60A5FA;
            color: white;
            padding: 10px 20px;
        }
        header .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo h2 {
            color: white; /* ✅ Logo màu trắng */
        }
        nav a {
            color: #E0E7FF;
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            color: #BFDBFE;
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            padding: 20px;
        }
        .contact-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            text-align: center;
        }
        h2 {
            color: #374151;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        label {
            text-align: left;
            font-weight: bold;
            color: #4B5563;
            font-size: 14px;
        }
        input, textarea {
            width: 93%;
            padding: 12px;
            border: 1px solid #D1D5DB;
            border-radius: 8px;
            font-size: 14px;
            background-color: #F9FAFB;
        }
        textarea {
            resize: none;
            height: 80px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #3B82F6;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #60A5FA;
        }
        footer {
            text-align: center;
            padding: 15px 0;
            background-color: #60A5FA;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h2>LOGO</h2>
            </div>
            <nav class="nav-links">
                <a href="index.php">Trang Chủ</a>
                <a href="#">Giới Thiệu</a>
                <a href="contact.php">Liên Hệ</a>   
            </nav>
        </div>
    </header>

    <div class="content">
        <div class="contact-box">
            <h2>Liên Hệ Với Chúng Tôi</h2>
            <form action="" method="POST">
                <label for="name">Họ và Tên</label>
                <input type="text" id="name" name="name" placeholder="Nhập họ và tên" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>

                <label for="subject">Chủ Đề</label>
                <input type="text" id="subject" name="subject" placeholder="Nhập chủ đề liên hệ" required>

                <label for="message">Nội Dung</label>
                <textarea id="message" name="message" placeholder="Nhập nội dung tin nhắn của bạn" required></textarea>

                <button type="submit">Gửi Tin Nhắn</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Bản quyền thuộc Van Phu</p>
    </footer>
</body>
</html>

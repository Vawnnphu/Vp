<?php
// Kiểm tra nếu người dùng gửi form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? 0;
    $description = $_POST['description'] ?? '';

    // Giả lập lưu dữ liệu (hiện tại không có database)
    $message = "Sản phẩm '$name' đã được thêm thành công!";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F3F4F6;
        }
        .container {
            width: 50%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #3B82F6;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
        }
        input, textarea {
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }
        .btn {
            margin-top: 15px;
            padding: 10px;
            background: #3B82F6;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
        .btn:hover {
            background: #2563EB;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #3B82F6;
            text-decoration: none;
            font-weight: bold;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .message {
            text-align: center;
            color: green;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Thêm Sản Phẩm</h2>

        <?php if (!empty($message)): ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>

        <form action="create.php" method="POST">
            <label for="name">Tên Sản Phẩm:</label>
            <input type="text" id="name" name="name" required>

            <label for="price">Giá (VNĐ):</label>
            <input type="number" id="price" name="price" required>

            <label for="description">Mô Tả:</label>
            <textarea id="description" name="description" rows="4"></textarea>

            <button type="submit" class="btn">Thêm Sản Phẩm</button>
        </form>

        <a href="index.php" class="back-link">← Quay lại Danh Sách Sản Phẩm</a>
    </div>

</body>
</html>

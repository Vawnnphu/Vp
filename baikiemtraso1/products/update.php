<?php
// Giả lập danh sách sản phẩm (Không sử dụng database)
$products = [
    1 => ["name" => "Sản phẩm A", "price" => 100000, "description" => "Mô tả sản phẩm A"],
    2 => ["name" => "Sản phẩm B", "price" => 200000, "description" => "Mô tả sản phẩm B"],
    3 => ["name" => "Sản phẩm C", "price" => 300000, "description" => "Mô tả sản phẩm C"],
];

// Kiểm tra nếu có ID sản phẩm được truyền vào
$product_id = $_GET['id'] ?? null;
$product = $product_id && isset($products[$product_id]) ? $products[$product_id] : null;

// Xử lý cập nhật sản phẩm khi form được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? 0;
    $description = $_POST['description'] ?? '';
    
    // Giả lập cập nhật dữ liệu
    $message = "Sản phẩm '$name' đã được cập nhật thành công!";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Sản Phẩm</title>
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
        <h2>Cập Nhật Sản Phẩm</h2>

        <?php if (!empty($message)): ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>

        <?php if ($product): ?>
            <form action="update.php?id=<?php echo $product_id; ?>" method="POST">
                <label for="name">Tên Sản Phẩm:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>

                <label for="price">Giá (VNĐ):</label>
                <input type="number" id="price" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required>

                <label for="description">Mô Tả:</label>
                <textarea id="description" name="description" rows="4"><?php echo htmlspecialchars($product['description']); ?></textarea>

                <button type="submit" class="btn">Cập Nhật Sản Phẩm</button>
            </form>
        <?php else: ?>
            <p class="message" style="color: red;">Sản phẩm không tồn tại!</p>
        <?php endif; ?>

        <a href="index.php" class="back-link">← Quay lại Danh Sách Sản Phẩm</a>
    </div>

</body>
</html>

<?php
// Mảng danh sách sản phẩm mẫu
$products = [
    ["id" => 1, "name" => "Sản phẩm A", "price" => 100000],
    ["id" => 2, "name" => "Sản phẩm B", "price" => 200000],
    ["id" => 3, "name" => "Sản phẩm C", "price" => 300000],
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #3B82F6; 
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
            padding: 20px; 
            text-align: center; 
            background-color: white;
            margin: 20px auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            flex-grow: 1;
            width: 80%;
            border-radius: 10px;
        }
        .welcome-text { 
            color: #4B5563; 
            font-size: 24px;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #3B82F6;
            color: white;
        }
        .btn {
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
        }
        .btn-edit {
            background-color: #FBBF24;
            color: white;
        }
        .btn-delete {
            background-color: #EF4444;
            color: white;
        }
        .btn-add {
            background-color: #22C55E;
            color: white;
            padding: 10px 16px;
            display: inline-block;
            margin-bottom: 15px;
        }
        .btn:hover {
            opacity: 0.8;
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
                <a href="about.php">Giới Thiệu</a>
                <a href="contact.php">Liên Hệ</a>
                <a href="index.php" onclick="return confirm('Bạn có chắc chắn muốn đăng xuất không?');">Đăng Xuất</a>
            </nav>
        </div>
    </header>

    <div class="content">
        <p class="welcome-text">Chào mừng đến với trang web</p>

        <a href="add.php" class="btn btn-add">+ Thêm Sản Phẩm</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá (VNĐ)</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?php echo $product['id']; ?></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo number_format($product['price'], 0, ',', '.'); ?> đ</td>
                            <td>
                                <a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-edit">Sửa</a>
                                <a href="delete.php?id=<?php echo $product['id']; ?>" class="btn btn-delete" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">Chưa có sản phẩm nào.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <footer>
        <p>&copy; 2025 Bản quyền thuộc Trần Biển</p>
    </footer>
</body>
</html>

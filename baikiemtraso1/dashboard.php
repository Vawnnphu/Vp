<?php
// dashboard.php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Dữ liệu tổng quan (giá trị giả lập)
$total_products = 120;
$total_users = 45;
$total_orders = 87;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        .dashboard-container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        .stats {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .stat {
            padding: 15px;
            background-color: #E0F2FE;
            border-radius: 8px;
            width: 30%;
        }
        .stat h3 {
            margin: 0;
            font-size: 24px;
        }
        .stat p {
            margin: 5px 0 0;
            color: #555;
        }
        a.button {
            padding: 12px 20px;
            background-color: #3B82F6;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        a.button:hover {
            background-color: #2563EB;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Bảng Điều Khiển</h2>
        <div class="stats">
            <div class="stat">
                <h3><?php echo $total_products; ?></h3>
                <p>Sản Phẩm</p>
            </div>
            <div class="stat">
                <h3><?php echo $total_users; ?></h3>
                <p>Người Dùng</p>
            </div>
            <div class="stat">
                <h3><?php echo $total_orders; ?></h3>
                <p>Đơn Hàng</p>
            </div>
        </div>
        <a href="products.php" class="button">Danh Sách Sản Phẩm</a>
    </div>
</body>
</html>

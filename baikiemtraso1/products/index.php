<?php
// Giả lập đăng nhập thành công
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

// Số liệu tổng quan (dữ liệu mẫu, có thể thay đổi)
$total_products = 10;
$total_users = 5;
$total_orders = 20;
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
            background-color: #F3F4F6;
        }
        .container {
            width: 80%;
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
        .stats {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .stat-box {
            background: #60A5FA;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 30%;
        }
        .stat-box h3 {
            margin: 0;
            font-size: 24px;
        }
        .stat-box p {
            margin: 5px 0 0;
            font-size: 18px;
        }
        .btn {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #22C55E;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            width: 200px;
            text-transform: uppercase;
            font-weight: bold;
        }
        .btn:hover {
            background: #16A34A;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Dashboard</h2>

        <div class="stats">
            <div class="stat-box">
                <h3><?php echo $total_products; ?></h3>
                <p>Sản phẩm</p>
            </div>
            <div class="stat-box">
                <h3><?php echo $total_users; ?></h3>
                <p>Người dùng</p>
            </div>
            <div class="stat-box">
                <h3><?php echo $total_orders; ?></h3>
                <p>Đơn hàng</p>
            </div>
        </div>

        <a href="products/index.php" class="btn">Danh Sách Sản Phẩm</a>
    </div>

</body>
</html>

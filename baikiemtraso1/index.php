    <?php
    // index.php
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
                padding: 0px; 
                text-align: center; 
                background-color: white;
                margin: 0;
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                flex-grow: 1;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .action-buttons { 
                display: flex; 
                justify-content: center; 
                gap: 20px; 
                margin-top: 30px; 
            }
            .action-buttons a { 
                padding: 14px 28px; 
                background-color: #3B82F6; 
                color: white; 
                text-decoration: none; 
                border-radius: 50px; 
                box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
                transition: background-color 0.3s ease, transform 0.3s ease; 
                font-weight: bold; 
                font-size: 16px;
            }
            .action-buttons a:nth-child(2) { 
                background-color: #DBEAFE; 
                color: #1D4ED8; 
            }
            .action-buttons a:hover { 
                background-color: #2563EB; 
                transform: translateY(-2px); 
            }
            .action-buttons a:nth-child(2):hover { 
                background-color: #BFDBFE; 
                transform: translateY(-2px); 
            }
            .intro-text { 
                margin-bottom: 30px; 
                color: #4B5563; 
                font-size: 18px;
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
            <h1>Chào Mừng Đến Với Trang Chủ</h1>
            <p class="intro-text">Đây là nơi bạn có thể khám phá các dịch vụ tuyệt vời của chúng tôi. Hãy đăng ký hoặc đăng nhập để trải nghiệm ngay hôm nay!</p>
            <div class="action-buttons">
                <a href="register.php">Đăng Ký</a>
                <a href="login.php">Đăng Nhập</a>
            </div>
        </div>

        <footer>
            <p>&copy; 2025 Bản quyền thuộc Van Phu</p>
        </footer>
    </body>
    </html>
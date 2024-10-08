<?php
session_start();

// ตรวจสอบว่าผู้ใช้ได้เข้าสู่ระบบหรือยัง
if (!isset($_SESSION["Username"])) {
    // หากยังไม่ได้เข้าสู่ระบบ เปลี่ยนเส้นทางไปยังหน้าเข้าสู่ระบบ
    header("Location: ../Sign-In/signin.php");
    exit();
}

// ดึงชื่อผู้ใช้จาก session
$username = htmlspecialchars($_SESSION["Username"]);
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chic-hub - ร้านขายเสื้อผ้าออนไลน์</title>
    <!-- ลิงก์ไปยัง Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- ลิงก์ไปยังไฟล์ CSS -->
    <link rel="stylesheet" href="../styles/styles.css">
    <script src="script.js"></script>
    <style>
        header{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 999;
        }
        .banner{
            margin-top: 10%;
        }
    </style>
</head>

<body>

    <!-- ส่วนหัว (Header) -->
    <header>
        <div class="container-header">
            <div class="logo">
                <h1 class="chic-hub"><a href="./home.php">ChicHub</a></h1>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="./home.php">หน้าหลัก</a></li>
                    <li><a href="../Shop/shop.html">ร้านค้า</a></li>
                    <li><a href="#">โปรโมชั่น</a></li>
                    <li><a href="../Contact-us/contact-us.html">ติดต่อเรา</a></li>
                    <li><a href="../User/userpage.php"><i class="fas fa-user"></i> สวัสดี, <?php echo $username; ?></a></li>
                    <li><a href="logout.php"> ออกจากระบบ</a></li>
                    <li><a href="../Cart/cart.html"><i class="fas fa-shopping-cart"></i> รถเข็น</a></li>
                </ul>
                <!-- ปุ่ม Hamburger สำหรับมือถือ -->
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Blur Background -->
    <div class="blur-background"></div>

    <!-- ส่วนแบนเนอร์โปรโมชั่น -->
    <section class="banner">
        <div class="container">
            <img src="https://via.placeholder.com/1200x400" alt="โปรโมชั่น">
            <div class="banner-text">
                <h2>โปรโมชั่นลดราคาสูงสุด 50%</h2>
                <a href="#" class="btn">ช้อปเลย</a>
            </div>
        </div>
    </section>

    <!-- ส่วนแสดงสินค้า -->
    <section class="featured-products">
        <div class="container">
            <h2>สินค้ายอดนิยม</h2>
            <div class="products">
                <div class="product-card">
                    <img src="https://via.placeholder.com/300x400" alt="สินค้า 1">
                    <h3>เสื้อยืดคลาสสิก</h3>
                    <p>฿500</p>
                    <a href="#" class="btn">เพิ่มในรถเข็น</a>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/300x400" alt="สินค้า 2">
                    <h3>กางเกงยีนส์</h3>
                    <p>฿800</p>
                    <a href="#" class="btn">เพิ่มในรถเข็น</a>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/300x400" alt="สินค้า 3">
                    <h3>เสื้อแจ็คเก็ตสตรีท</h3>
                    <p>฿1200</p>
                    <a href="#" class="btn">เพิ่มในรถเข็น</a>
                </div>
                <!-- เพิ่มสินค้าเพิ่มเติมได้ที่นี่ -->
            </div>
        </div>
    </section>

    <!-- ส่วนลิงก์ไปยังหมวดหมู่สินค้า -->
    <section class="categories">
        <div class="container">
            <h2>หมวดหมู่สินค้า</h2>
            <div class="category-list">
                <div class="category-item">
                    <img class="tshirt" src="../../img/tshirt.png" alt="">
                    <a href="#">เสื้อยืด</a>
                </div>
                <div class="category-item">
                    <img class="shirt" src="../../img/shirt.png" alt="">
                    <a href="#">เสื้อเชิ้ต</a>
                </div>
                <div class="category-item">
                    <img class="pant" src="../../img/pant.png" alt="">
                    <a href="#">กางเกง</a>
                </div>
                <div class="category-item">
                    <img class="jacket" src="../../img/jacket.png" alt="">
                    <a href="#">เสื้อแจ็คเก็ต</a>
                </div>
                <!-- เพิ่มหมวดหมู่เพิ่มเติมได้ที่นี่ -->
            </div>
        </div>
    </section>

    <!-- ส่วนฟุตเตอร์ (Footer) -->
    <footer>
        <div class="container">
            <div class="footer-links">
                <a href="#">เกี่ยวกับเรา</a>
                <a href="#">นโยบายความเป็นส่วนตัว</a>
                <a href="#">เงื่อนไขการใช้งาน</a>
                <a href="Contact-us/contact-us.html">ติดต่อเรา</a>
            </div>
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <!-- เพิ่มช่องทางโซเชียลเพิ่มเติมได้ที่นี่ -->
            </div>
            <p>&copy; 2024 Chic-hub. สงวนลิขสิทธิ์.</p>
        </div>
    </footer>
    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        const blurBackground = document.querySelector('.blur-background');
      
        hamburger.addEventListener('click', () => {
          navLinks.classList.toggle('active');
          blurBackground.classList.toggle('active'); // เบลอพื้นหลังเมื่อเมนูเปิด
        });
      
        // ปิดเมนูเมื่อคลิกที่เบลอพื้นหลัง
        blurBackground.addEventListener('click', () => {
          navLinks.classList.remove('active');
          blurBackground.classList.remove('active');
        });
    </script>
</body>

</html>

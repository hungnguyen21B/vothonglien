<?php
require 'controller/productController.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lien Shop</title>
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="header"> 
        <div class="header-top">
            <div>
                <span class="hotline">Liên hệ: 0342609687 | 0838 538 558</span>
            </div>
            <div>
            <marquee class="greet">
            Chào mừng bạn đến với trang web của Lê Liên.
            </marquee>
            </div>
        </div>
    </div>
    <div class="slideshow">
        <div class="slide">
            <img src="asset/images/slide1.jpg" alt="" id="slide">
            <div class="num-slide">
                <div onclick="showSlide(1)" id="num-slide1">1</div>
                <div onclick="showSlide(2)" id="num-slide2">2</div>
                <div onclick="showSlide(3)" id="num-slide3">3</div>
                <div onclick="showSlide(4)" id="num-slide4">4</div>
            </div>
        </div>
        
    </div>
    <div class="content"> 
        <div class="content-left">
            <div class="content-title menu">
            <h2>| Các loại sản phẩm</h2>
            </div>
            <ul>
            <form action="" method="POST"><li><button name='all'>Tất cả sản phẩm</button></li></form>
            <form action="" method="POST"><li><button name='vothong'>Vỏ thông</button></li></form>
            <form action="" method="POST"><li><button name='tui'>Túi</button> </li></form>
            <form action="" method="POST"><li><button name='phanbon'>Phân bón</button> </li></form>
            <form action="" method="POST"><li><button  name='chau'>Chậu</button></li></form>
            <form action="" method="POST"><li><button name='khac'>Khác...</button> </li></form>
            </ul>
        </div>
        <div class="content-right">
            <div class="content-title">
                <h2>| Sản phẩm</h2>
            </div>
            <div class="container">
            <?php foreach($products as $product){ ?>
                <div class="card">
                    <img src="asset/images/<?php echo $product->image ?>" alt="">
                    <div>
                        <h3><?php echo $product->name ?></h3>
                    </div>
                    <div class="card-price">
                        <div><?php echo number_format($product->price) ?>VND</div>
                        <div class="promotion"><?php echo number_format($product->oldPrice) ?>VND</div>
                    </div>
                    <div class="card-btn">
                        <div>
                            <button class="btn-card" onclick="showInfo()">Thêm hàng</button>
                        </div>
                        <div>
                            <button class="btn-detail" onclick="showInfo()">Chi tiết</button>
                        </div>
                    </div>
                </div>
             <?php }
             ?>
            </div>
        </div>
    </div>
    <div class="footer"> 
        <div>
            <h3>Liên hệ: </h3>
            <br>
            <p> Địa chỉ: Lê Thị Liên <br>
                Xóm Phường - Sen Thủy - Lệ Thủy - Quảng Bình
            </p>
            <br>
            <p>
            Liên hệ: 0342609687 | 0838 538 558
            </p>
        </div>
        <div class="footer-center">
            <h3>Kết nối: </h3>
            <div class="footer-center-image">
                <div><a href="https://www.facebook.com/profile.php?id=100007925927020" title="Nhấn để đến facebook của Lê Liên"><img src="asset/images/fb.png" alt=""></a></div>
                <div><img src="asset/images/zl.png" alt=""></div>
            </div>
           
        </div>
        <div>
            <h3>Được vận hành bởi:</h3>
            <br>
            <p>
                Nguyễn Văn Hùng
            </p>
            <p class="spam">
                @developer
            </p>
        </div>
    </div>
    <script src="asset/js.js"></script>
</body>
</html>

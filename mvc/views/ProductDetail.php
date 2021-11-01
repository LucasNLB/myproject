<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/Pagemain.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="../orther/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/ProductDetail.css">
</head>

<body>



<div class="container">
    <?php
if(pg_num_rows($data["img"]) > 0){
            while($row = pg_fetch_assoc($data["img"])){ ?>
    <div class="row">
        <div class="col-xs-8 col-sm-8" ><img  src="../../img/<?php echo $row['nameimg']; ?>" alt="" width="100%" height="450vh" ></div>
        <div class="col-xs-4 col-sm-4">
            <div class="productName">ádasdasd</div>
            <div class="priceProduct">15000000</div>
            <div class="box-oder">
                <button class="btnOder">Thêm vào giỏ hảng</button><br>
                <button class="btnOder">Mua ngay</button>
            </div>
        </div>
    </div> 
    <?php   }} ?>
</div>

<div class="container">
    <div class="row">
        <h1>Gợi Ý dành cho bạn</h1>
        <div class="col-xs-6 col-sm-4"> 
            <div class="img-product"><img src="../Img/adasdasd.jpg" alt=""></div>
            <div class="name-product">Ốp mới</div>
            <div class="price-product">12.000</div>
        </div>
        <div class="col-xs-6 col-sm-4"> 
            <div class="img-product"><img src="../Img/adasdasd.jpg" alt=""></div>
            <div class="name-product">Ốp mới</div>
            <div class="price-product">12.000</div>
        </div>
        <div class="col-xs-6 col-sm-4"> 
            <div class="img-product"><img src="../Img/adasdasd.jpg" alt=""></div>
            <div class="name-product">Ốp mới</div>
            <div class="price-product">12.000</div>
        </div>
    </div>
    
</div>
<div class="container">
    <div class="row">
        <h1>Sản Phẩm Liên Quan</h1>
        <div class="col-xs-4 col-sm-4"> 
            <div class="img-product"><img src="../Img/adasdasd.jpg" alt=""></div>
            <div class="name-product">Ốp mới</div>
            <div class="price-product">12.000</div>
        </div>
        <div class="col-xs-4 col-sm-4"> 
            <div class="img-product"><img src="../Img/adasdasd.jpg" alt=""></div>
            <div class="name-product">Ốp mới</div>
            <div class="price-product">12.000</div>
        </div>
        <div class="col-xs-4 col-sm-4"> 
            <div class="img-product"><img src="../Img/adasdasd.jpg" alt=""></div>
            <div class="name-product">Ốp mới</div>
            <div class="price-product">12.000</div>
        </div>
    </div>
</div>



</body>
</html>
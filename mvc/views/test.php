<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Css -->
    <link rel="stylesheet" href="/css/test.css">

    <!-- owl -->
    <link rel="stylesheet" href="../../other/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../other/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../../other/bootstrap-5.1.3-dist/css/bootstrap.min.css">



</head>
<body>




    <!-- header -->
    <header>
        <div class="Logo" style="text-align: center;">
            <a href=""> <img src="../../img/LogoShop.png" alt="" width="100px" height="100px"> </a>
            <div class="Intro">
                <p class="p1"><i>Supply all kinds of cases for iphone models </i></p>
                <p class="p2"><i> Let us make your phone different</i></p>
            </div>
            <div class="Search_Cart_login">
                <span>
                    <a href="#"><i class="fas fa-search"></i></a>
                </span>
                <span>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <span>
                    <a href="#"><i class="fas fa-user"></i></a>
                </span>
                
            </div>
            <div class="nav_header">
                <ul>
                    <li><a href="">Shop</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contract</a></li>
                </ul>
            </div>
        </div>
        
    </header>

<!-- slide -->
<div class="slide">
    <div class="owl-carousel owl-theme">
        <div class="item"><a href=""><img src="../../img/Slide1.jpg" alt=""></a></div>
        <div class="item"><a href=""><img src="../../img/Slide3.jpg" alt=""></a></div>
        <div class="item"><a href=""><img src="../../img/Slide2.jpg" alt=""></a></div>
    </div>
</div>




<!-- container product -->
<div class="container hot">
    <H1>HOT</H1>
    
        <div class= "row">
        <?php
        if(pg_num_rows($data["img"]) > 0){
            while($row = pg_fetch_assoc($data["img"])){ ?>

         
            <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/<?php $row=['nameimg'] ?>" alt=""></div>
                <div class="name-product">Ốp mới</div>
                <div class="price-product">12.000</div>
            </div>

            <?php   }} ?>
    
</div>

<div class="container new">
    <h1>NEW</h1>
  
        <div class= "row">
        <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <div class="name-product">Ốp mới</div>
                <div class="price-product">12.000</div>
            </div>
            <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <div class="name-product">Ốp mới</div>
                <div class="price-product">12.000</div>
            </div>
            <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <div class="name-product">Ốp mới</div>
                <div class="price-product">12.000</div>
            </div>
        </div>

</div>

<div class="container sale">
    <h1>Sale</h1>
        <div class= "row">
        <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <div class="name-product">Ốp mới</div>
                <div class="price-product">12.000</div>
            </div>
            <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <div class="name-product">Ốp mới</div>
                <div class="price-product">12.000</div>
            </div>
            <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <div class="name-product">Ốp mới</div>
                <div class="price-product">12.000</div>
            </div>
        </div>
</div>

    <footer>
        <div class="aside_adress">
            <div>
                <span><i class="fas fa-home" style="color: rgb(160,224,244);"> Hồ Chí Minh </i></span> <br>
                <span style="color: rgb(160,224,244);">
                    <b>Store 1:</b> ádasdasdasd <br>

                    <b>Store 2:</b> ádasdasdasdasdasd
                </span>
                           
            </div><br>
            <div>
                <span><i class="fas fa-phone-alt" style="color: rgb(160,224,244);"> 0886350732 </i></span>            
            </div><br>

            
            <span><i class="fas fa-envelope" style="color: rgb(160,224,244);"> Buit.bgvmm@gmail.com</i></span>
        </div>
        <div class="aside_connetMXH">
            <div class="facebook_page">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FplumstoreTHINH%2F&tabs=272&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
        <div class="Flollow_us">
            <div style="margin: 10px 10px;">
                <h4 style="color: rgb(160,224,244);">Flollow us</h4>
            </div>
            <span><a href=""><i class="fab fa-facebook-f"></i></a></span>
            <span><a href=""><i class="fab fa-instagram"></i></a></span> 
            <span><a href=""><i class="fab fa-youtube"></i></a></span>
        </div>
    </footer>

    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../other/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="../../js/Slide.js"></script>
</body>
</html>
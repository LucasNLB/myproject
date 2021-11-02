<?php
include_once ('mvc/views/header_footer/header.php');
?>



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


<?php
include_once ('mvc/views/header_footer/footer.php');
?>
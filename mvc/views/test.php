
<?php
include_once ('mvc/views/header_footer/header.php');
?>
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
                <a href="/ProductDetail/producID/<?php echo $row['id']; ?>"><div class="img-product"><img src="../../img/<?php echo $row['nameimg']; ?>" alt="" ></div></a>
                <a href="/ProductDetail/producID/" class="name-product">Ốp mới</a> <br>
                <a href="/ProductDetail/producID/" class="price-product">12.000</a>
            </div>

            <?php   }} ?>
    
</div>

<div class="container new">
    <h1>NEW</h1>
  
        <div class= "row">
        <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <a href="/ProductDetail/producID/" class="name-product">Ốp mới</a><br>
                <a href="/ProductDetail/producID/" class="price-product">12.000</a>
            </div>
            <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <a href="/ProductDetail/producID/" class="name-product">Ốp mới</a><br>
                <a href="/ProductDetail/producID/" class="price-product">12.000</a>
            </div>
            <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <a href="/ProductDetail/producID/" class="name-product">Ốp mới</a><br>
                <a href="/ProductDetail/producID/" class="price-product">12.000</a>
            </div>
        </div>

</div>

<div class="container sale">
    <h1>Sale</h1>
        <div class= "row">
        <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <a href="/ProductDetail/producID/" class="name-product">Ốp mới</a><br>
                <a href="/ProductDetail/producID/" class="price-product">12.000</a>
            </div>
            <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <a href="/ProductDetail/producID/" class="name-product">Ốp mới</a><br>
                <a href="/ProductDetail/producID/" class="price-product">12.000</a>
            </div>
            <div class="col-xs-6 col-sm-4"> 
                <div class="img-product"><img src="../../img/Slide2.jpg" alt=""></div>
                <a href="/ProductDetail/producID/" class="name-product">Ốp mới</a><br>
                <a href="/ProductDetail/producID/" class="price-product">12.000</a>
            </div>
        </div>
</div>

<?php
include_once ('mvc/views/header_footer/footer.php');
?>
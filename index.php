<?php
require'header.php';
require'db_config.php';

?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://source.unsplash.com/collection/farm/1100x800" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>First slide label</h5>
                <p>
                    Some representative placeholder content for the first slide.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/collection/pesticides/1100x800" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Second slide label</h5>
                <p>
                    Some representative placeholder content for the second slide.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/collection/farming/1100x800" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Third slide label</h5>
                <p>
                    Some representative placeholder content for the third slide.
                </p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="veg_section layout_paddingn mt-4">
    <div class="container">
        <div class="heading_container text-center mt-2">
            <h2>
                <hr>
                Categories
            </h2>
            <p>
                which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
            </p>
        </div>
        <div class="row">
            <?php
            $show = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $show);
            $num = mysqli_num_rows($result);
            if ($num > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-sm-6 my-3">
                <div class="card m-auto shadow border" style="width: 18rem;">
                    <div class="card-body ">';
                    ?>
                    <div class="">
                    <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($row['cat_img']); ?>" height="200" width="200" class="card-img-top"/>
                    </div>
                    <?php
                    echo '<h5 class="card-title mt-2 text-center">'.$row['cat_name'].'</h5>
                        <p class="card-text text-center">'.
                            substr($row['cat_desc'], 0, 90).'...
                        </p>
                        <a href="products.php?category='.($row['cat_id']).'" class="btn btn-success d-flex justify-content-center">Show Products</a>
                    </div>
                </div>
            </div>';
                   }
                   }?>
           
            
        </div>
    </div>
<div class="d-flex justify-content-center my-4">
    <button type="submit" class="btn btn-success" style="width: 18rem;">View More</button>
</div>
<hr>
</div>
</section>

<section class="about_section text-center" id="About">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-inner">

<div class="carousel-item active">

<img src="https://source.unsplash.com/collection/farm/700x800" class="d-block w-100" alt="...">

<div class="carousel-caption mt-2" style="
position: absolute;
top: 0;
">
<div class="heading_container">
<h2>
<b>About <span>Us</span></b>
</h2>
<hr>
<h2>
We Provide <br>
Agro Products
</h2>
</div>
<p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad ex, sequi amet similique necessitatibus quas minus repudiandae quae culpa optio ipsum quibusdam praesentium saepe qui dolore voluptate iure sit aut.
</p>
<a href="about.php" class="btn btn-success">Read More</a>
</div>
</div>
</div>
</div>

</section>



<section class="contact_section layout_padding my-4 text-center" id="Contact">
<div class="container">
<div class="heading_container">
<h2>
<b>Contact <span>Us</span></b>
</h2>
</div>
<div class="row">
<div class="">
<div class="form_container contact-form ">

<form class="mx-auto justify-content-center">
<div class="mb-3 ">

<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name">

</div>
<div class="mb-3">

<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
</div>
<div class="mb-3">

<input type="email" class="form-control" id="exampleInputPassword1" placeholder="E mail">
</div>
<div class="mb-3">

<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
</div>

<button type="submit" class="btn btn-success" style="width: 18rem;">Send</button>
</form>



</div>
</div>

</div>
<hr>
</div>
</section>
<!-- end contact section -->

<section class="client_section layout_padding-bottom">
<div class="container">
<div class="heading_container heading_center">
<h2>

</h2>
</div>
<div class="heading_container text-center mt-2">
<h2>
Owners
</h2>
<p>
which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
</p>
</div>

<div class="row">
<div class="col-sm-6 my-2">
<div class="card m-auto shadow border" style="width: 18rem;">
<div class="card-body">
<img src="mayur.jpg/200x300" class="card-img-top" alt="...">
<h5 class="card-title mt-2">Mayur Aahire</h5>
<p class="card-text">
With supporting text below as a natural lead-in to additional content.
</p>
<a href="#" class="btn btn-success">Know More</a>
</div>
</div>
</div>
<div class="col-sm-6 my-2">
<div class="card m-auto shadow border " style="width: 18rem;">
<div class="card-body">
<img src="jagdish.jpg/200x300" class="card-img-top" alt="...">
<h5 class="card-title mt-2">Jagdish Aahire</h5>
<p class="card-text">
With supporting text below as a natural lead-in to additional content.
</p>
<a href="#" class="btn btn-success">Know More</a>
</div>
</div>
</div>
</div>
<hr>

</div>
</section>

<section class="Partner_section layout_padding-bottom my-4">
<div class="container">
<div class="heading_container heading_center">
<h2>

</h2>
</div>
<div class="heading_container text-center mt-2">
<h2>
Authorised Business Partner
</h2>
<p>
We are glad to tell you, we are Authorised Business partner with JAIN IRRIGATION SYSTEM LIMITED, jalgaon...
</p>
</div>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<img src="jain_irrigation.jpg/1500x700" class="d-block w-100" alt="...">
</div>

</div>
</div>
<hr>

</div>
</section>

<?php
require'footer.php';
?>
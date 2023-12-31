<?php
require'header.php';
require'db_config.php';
?>
<section class="veg_section layout_paddingn mt-4">
    <div class="container">
        <div class="heading_container text-center mt-2">
            <?php
            $cat_id = $_GET['category'];
            $sql = "SELECT * FROM `categories` WHERE `categories`.`cat_id` = $cat_id";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<h2>
                <hr>
                '.$row['cat_name'].'
            </h2>
            <div class="card card-body text-left">
           <span>
 '. substr($row['cat_desc'], 0, 90).'
 <p class="collapse" id="collapseExample">
 '.substr($row['cat_desc'], 90).'
  </p>
  </span>
  <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> More</a>
</div>';
                }
            }
            ?>
        </div>
        <div class="row">
            <?php
            $cat_id = $_GET['category'];
            $sql = "SELECT * FROM `products` WHERE `products`.`cat_id` = $cat_id";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                     $img1 =  $row['img1'];
                    $img2 = $row['img2'];
                    $img3 = $row['img3'];
                    $img4 = $row['img4'];
                    $img5 = $row['img5'];
                    echo '<div class="col-sm-6 my-3">
                <div class="card m-auto shadow border" style="width: 18rem;">
                    <div class="card-body ">';
                    ?>
                    <div class="">
                        
                        <?php if ($img1 != null) {?>
                            
                        
                            <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img1); ?>" height="200" width="200" class="card-img-top">
                       
                        <?php }
                       elseif ($img2 != null) {?>
                            
                        
                      
                            <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img2); ?>" height="200" width="200" class="card-img-top">
                       
                         <?php }
                       elseif ($img3 != null) {?>
                       
                           <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img3); ?>" height="200" width="200" class="card-img-top">
                       
                         <?php }
                      elseif ($img4 != null) {?>
                        
                            <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img4); ?>" height="200" width="200" class="card-img-top">
                        
                         <?php }
                      elseif ($img5 != null) {?>
                       
                           <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img5); ?>" height="200" width="200" class="card-img-top">
                        
                         <?php }?>
                        
                       
                    </div>
                    <?php
                     
                    echo '<h5 class="card-title mt-2 text-center text-uppercase fs-3 text-success fw-bold">'.$row['pr_name'].'</h5>
                    <p class="card-title mt-2 text-center"><s class="text-danger fs-5">Rs.'.$row['main_price'].'/-</s> <b class="text-success fs-3">    Rs. '.$row['discounted_price'].'/- </b></p>
                        <p class="card-text text-center">'.
                    substr($row['pr_desc'], 0, 90).'...
                        </p>
                        <a href="product_detail.php?category='.$cat_id.'&&product='.$row['sr_no'].'" class="btn btn-success d-flex justify-content-center"><b>View Product</b></a>
                    </div>
                </div>
            </div>';
                }
            } ?>


        </div>
    </div>
    <div class="d-flex justify-content-center my-4">
        <button type="submit" class="btn btn-success" style="width: 18rem;">View More</button>
    </div>
    <hr>
</div>
</section>

<?php
require'footer.php';
?>
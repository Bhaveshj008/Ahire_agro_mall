<?php
require 'header.php';

$pr_id = $_GET['product'];
$cat_id = $_GET['category'];
$sql ="SELECT * FROM `products` WHERE `products`.`sr_no` = $pr_id";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $img1 =  $row['img1'];
                    $img2 = $row['img2'];
                    $img3 = $row['img3'];
                    $img4 = $row['img4'];
                    $img5 = $row['img5'];
                    echo '<h1 class="card-title mt-2 text-center text-uppercase fs-1 text-success fw-bold">'.$row['pr_name'].'</h1>';
                   
?>
<div class="row">
    
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <?php if ($img1 != null) {?>
                            
                        <div class="carousel-item active">
                            <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img1); ?>" class="d-block w-100" class="d-block w-100" alt="...">
                        </div>
                        <?php }
                       if ($img2 != null) {?>
                            
                        
                        <div class="carousel-item">
                            <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img2); ?>" class="d-block w-100" class="d-block w-100" alt="...">
                        </div>
                         <?php }
                       if ($img3 != null) {?>
                        <div class="carousel-item ">
                           <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img3); ?>" class="d-block w-100" class="d-block w-100" alt="...">
                        </div>
                         <?php }
                      if ($img4 != null) {?>
                        <div class="carousel-item ">
                            <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img4); ?>" class="d-block w-100" class="d-block w-100" alt="...">
                        </div>
                         <?php }
                      if ($img5 != null) {?>
                        <div class="carousel-item ">
                           <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img5); ?>" class="d-block w-100" class="d-block w-100" alt="...">
                        </div>
                         <?php }?>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group me-2" role="group" aria-label="First group">
                         <?php 
                        if ($img1 != null) {?>
                        <button type="button" class="btn" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"> <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img1); ?>" class="d-block w-100" class="d-block w-100" alt="..."></button>
                         <?php }
                      if ($img2 != null) {?>
                        <button type="button" class="btn" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"> <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img2); ?>" class="d-block w-100" class="d-block w-100" alt="..."></button>
                         <?php }
                      if ($img3 != null) {?>
                        <button type="button" class="btn" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"> <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img3); ?>" class="d-block w-100" class="d-block w-100" alt="..."></button>
                         <?php }
                       if ($img4 != null) {?>
                        <button type="button" class="btn" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"> <img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img4); ?>" class="d-block w-100" class="d-block w-100" alt="..."></button>
                         <?php }
                       if ($img5 != null) {?>
                        <button type="button" class="btn" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"><img src="data:products/jpg;charset=utf8;base64,<?php echo base64_encode($img5); ?>" class="d-block w-100" class="d-block w-100" alt="..."></button>
                         <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
 <?php
                     
                    echo '  
                    <h class="card-title mt-6 text-uppercase fs-3 text-success fw-bold">'.$row['pr_name'].' <p class= "fs-5 fw-light">( '.$row['pr_manufacturer'].' )</p></h>
                    <p class="card-title mt-6 "><s class="text-danger fs-5">Rs.'.$row['main_price'].'/-</s> <b class="text-success fs-4">    Rs. '.$row['discounted_price'].'/- </b></p>
                    <hr>
                      <h class="card-title mt-3 text-uppercase fs-5 ">Details :</h>   
                       
                
            ';
            switch ($cat_id) {
                case 1:
                    echo '    
                    <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Seed type :</div>
    <div class="col-4 text-success">'. $row['seed_type'].'</div>
  </div>
  <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Net. wt :</div>
    <div class="col-4 text-success">'. $row['net_wt'].' kg.</div>
  </div>
                    
                   
           ';
           break;
                   
                case 2:
                    echo '     <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">size :</div>
    <div class="col-6 text-success">'. $row['width'].' x '.$row['breadth'].' metre</div>
  </div>';
  break;
                case 3:
                    echo '     <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Form :</div>
    <div class="col-4 text-success">'. $row['pr_state'].'</div>
  </div>
   <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Net. wt :</div>
    <div class="col-4 text-success">'. $row['net_wt'].' ml.</div>
  </div>
  ';
break;
case 4:
    echo '     <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Form :</div>
    <div class="col-4 text-success">'. $row['pr_state'].'</div>
  </div>
   <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Net. wt :</div>
    <div class="col-4 text-success">'. $row['net_wt'].' kg.</div>
  </div>
  ';
    break;
    case 5:
    echo '     <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Form :</div>
    <div class="col-4 text-success">'. $row['pr_state'].'</div>
  </div>
   <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Net. wt :</div>
    <div class="col-4 text-success">'. $row['net_wt'].' kg.</div>
  </div>
  ';
    break;
    case 6:
    echo '     <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Form :</div>
    <div class="col-4 text-success">'. $row['pr_state'].'</div>
  </div>
   <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Net. wt :</div>
    <div class="col-4 text-success">'. $row['net_wt'].' kg.</div>
  </div>
  ';
    break;
    case 7:
    echo '     <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Form :</div>
    <div class="col-4 text-success">'. $row['pr_state'].'</div>
  </div>
   <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Net. wt :</div>
    <div class="col-4 text-success">'. $row['net_wt'].' kg.</div>
  </div>
  ';
    break;
    case 8:
    echo '     <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Form :</div>
    <div class="col-4 text-success">'. $row['pr_state'].'</div>
  </div>
   <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Net. wt :</div>
    <div class="col-4 text-success">'. $row['net_wt'].' kg.</div>
  </div>
  ';
    break;
    case 9:
    echo '     <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Form :</div>
    <div class="col-4 text-success">'. $row['pr_state'].'</div>
  </div>
   <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Net. wt :</div>
    <div class="col-4 text-success">'. $row['net_wt'].' kg.</div>
  </div>
  ';
    break;
    case 10:
    echo '     <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Form :</div>
    <div class="col-4 text-success">'. $row['pr_state'].'</div>
  </div>
   <div class="row text-uppercase fs-6 fw-normal mt-2">
    <div class="col-6">Net. wt :</div>
    <div class="col-4 text-success">'. $row['net_wt'].' kg.</div>
  </div>
  ';
    break;
            }
          
             echo '
             <div class = "mt-2">
              <h class="card-title text-uppercase fs-5 ">Discription :</h>   
            <p class="lead">
 '.$row['pr_desc'].'
</p> </div>
             <a class="btn btn-success d-flex mt-2 justify-content-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><b>Buy Now</b></a>';?>
             <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade  modal-dialog-scrollable" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Buy Now</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
	<div class="row">
 <div class="col-lg-2 mb-3">
       <lable class="mb-3">Quantity : </lable>
                                        <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number fa fa-minus"  data-type="minus" data-field="">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                  
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000" placeholder="Quantity">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number fa fa-plus" data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>
                        </div>
                        </div>
<div class="mb-3">

<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Address"></textarea>
</div>
<div class="mb-3">

<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Pincode">
</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Buy Now</button>
      </div>
      </form>
    </div>
  </div>
</div>
             <?php
                }
            } ?>
            </div>
            </div>
</div>
            </div>
        </div>
    </div>
</div>


<?php

require "footer.php"
?>

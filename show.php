<?php include "config/config.php";
$sql_prd = "SELECT p.*,c.* FROM   product as p  
 INNER JOIN category as c ON p.cate_id = c.cate_id";
$rs_prd = mysql_query($sql_prd);

?>

    <!-- Page Header Start -->
   
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center py-5">
               <div class="badum-title">
               <h1 class="display-4 text-white animated slideInDown mb-4">
                    PRODUCTS & SERVICES
                </h1>
               </div>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item">
                            <a class="text-white" href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#fcfcfc;font-weight:600">
                            PRODUCTS & SERVICES
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    <!-- Page Header End -->


<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <aside class="col-lg-3 order-1 order-lg-0 mb-5">
                <?php include("list.php");  ?>
            </aside>
            <div class="col-lg-9 order-0 order-lg-1 mb-5">
                <!-- Service Start -->
                <div class="row g-4 ">
                    <?php while ($rowprd = mysql_fetch_array($rs_prd)) { ?>
                        <div class="col-lg-4 col-md-6 mb-5 portfolio-item ">
                            <div class="portfolio-inner rounded">
                                <img class="img-fluid" src="<?php echo $rowprd["images"];  ?>" alt="">
                                <div class="portfolio-text">
                                    <h4 class="text-white mb-4 text-center"><?php echo $rowprd["product_name"]; ?></h4>
                                    <div class="d-flex">
                                        <a class="btn btn-lg-square rounded-circle mx-2" href="<?php echo $rowprd["images"];  ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-lg-square rounded-circle mx-2" href="product.php?act=detail&cate_id=<?php echo $rowprd["cate_id"] ?>&product_id=<?php echo $rowprd["product_id"]; ?>"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
						
                    <?php } ?>
                </div>
                <!-- Service End -->
            </div>
        </div>
    </div>
</div>
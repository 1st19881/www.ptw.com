<?php include "config/config.php";

$product_id = $_GET["product_id"];
$cate_id = $_GET["cate_id"];

$sql_producttype = "SELECT p.*,c.*,g.* FROM   product as p  
 INNER JOIN category as c ON p.cate_id = c.cate_id
 LEFT JOIN gallery as g ON p.product_id = g.product_id
 WHERE p.product_id = $product_id";
$rs_prdtype = mysql_query($sql_producttype);
$row = mysql_fetch_array($rs_prdtype);


$sql_ggg = "SELECT g.* FROM  gallery as g
 LEFT JOIN product as p ON g.product_id = p.product_id
 WHERE p.product_id = $product_id";
$rs_gggg = mysql_query($sql_ggg);

?>




<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <div class="badum-title">
            <h1 class="display-4 text-white animated slideInDown mb-4" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                <?php echo $row["product_name"]   ?>
            </h1>
        </div>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color:#fcfcfc;font-weight:600;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                    <?php echo $row["product_name"]   ?>
                </li>
            </ol>
        </nav>
    </div>
</div>


<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <aside class="col-lg-3 order-1 order-lg-0 mb-5">
                <?php include("list.php");  ?>
            </aside>
            <div class="col-lg-9 order-0 order-lg-1 mb-5">
                <!-- Service Start -->
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-12  wow fadeInUp" data-wow-delay="0.1s">
                        <center> <img class="img-thumbnail" src="<?php echo $row["images"]   ?>" alt="" style="object-fit: cover;border-radius:5px;border:none;" /></center>
                        <div class="content-body2 py-5">
                            <h3 class=" text-center"><?php echo $row["product_name"]   ?></h3>
                        </div>
                    </div>
                    <?php while ($row_gggg = mysql_fetch_array($rs_gggg)) {  ?>
                        <div class="col-lg-4  wow fadeInUp" data-wow-delay="0.1s">
                            <a href="<?php echo $row_gggg["gall_img"]   ?>" data-lightbox="portfolio">
                                <img class="img-thumbnail" src="<?php echo $row_gggg["gall_img"]   ?>" alt="" width="100%" style="object-fit: cover;border-radius:5px;border:none;border:solid #000 2px;" />
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <!-- Service End -->
            </div>
        </div>
    </div>
</div>
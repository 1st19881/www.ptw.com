<?php $menu = "map";   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>พีทีดับบลิว เทคโนโลยี รับออกแบบ-สร้าง ระบบอัตโนมัติ Jig & Fixture และเครื่องจักรกลทุกชนิด ตามลูกค้าต้องการ รับเขียนโปรแกรม PLC, SCADA,PC Window Base รับออกแบบสร้าง Line การผลิตแบบอัตโนมัติ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="บริษัท พีทีดับบลิว เทคโนโลยี จำกัด รับออกแบบ-สร้าง ระบบอัตโนมัติ Jig & Fixture และเครื่องจักรกลทุกชนิด ตามลูกค้าต้องการ รับเขียนโปรแกรม PLC, SCADA,PC Window Base รับออกแบบสร้าง Line การผลิตแบบอัตโนมัติ" name="description">

    <?php include("link.php");  ?>
</head>
<style>
    .images-contacts img {
        border-radius: 5px;
        border: solid #37884f 3px;
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php include("top_bar.php");   ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include("navbar.php");   ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                MAP
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page" style="color:#fcfcfc;font-weight:600">
                        MAP
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="map-body">
                <a href="images/ptw-map.png" target="_blank"> <img src="images/ptw-map.png" width="100%" alt=""></a>
            </div>
        </div>
    </div>
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d75551.8246358105!2d100.745476!3d14.058414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89ce1396151a1456!2sPTW%20Technology%20Co.%2CLtd.!5e1!3m2!1sth!2sth!4v1665981774805!5m2!1sth!2sth" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Contact End -->



    <?php include("footer.php"); ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg  btn-lg-square rounded-circle back-to-top" style="background-color: #0e4194 ;color:#fff;"><i class="bi bi-arrow-up"></i></a>

    <?php include("js.php"); ?>

</body>

</html>
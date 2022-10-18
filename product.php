<?php $menu = "product";   ?>
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
<style type="text/css">
    .sidebar li .submenu {
        list-style: none;
        margin: 0;
        padding: 0;
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: var(--bs-dark);
    }

    .sidebar .nav-link:hover {
        color: var(--bs-primary);
    }

    .relative .card {
        position: relative;
    }

    .relative .card {
        overflow: hidden;
    }


    .relative .card img {
        transform: scale(1.2);
        -webkit-transition: all 0.5s ease-in-out;
        -khtml-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }

    .relative:hover .card img {
        transform: scale(1);
        -webkit-transition: all 0.5s ease-in-out;
        -khtml-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }

    @media only screen and (max-width: 414px) {
        .badum-title h1 {
            font-size: 1.3rem;
        }

        .page-header .breadcrumb-item,
        .page-header .breadcrumb-item a {
            font-size: 10px;
            color: var(--light);
        }
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




    <div class="row">
        <div class="col-lg-12">
            <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if ($act == 'showtype') {
                include('showtype.php');
            } else if ($act == 'detail') {
                include('showall.php');
            } else {
                include('show.php');
            }
            ?>
        </div>
    </div>


    <?php include("footer.php"); ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg  btn-lg-square rounded-circle back-to-top" style="background-color: #0e4194 ;color:#fff;"><i class="bi bi-arrow-up"></i></a>

    <?php include("js.php"); ?>

</body>

</html>
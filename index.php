<?php $menu = "index";   ?>
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
    .index-about-title h3 {}

    .index-about-content p {
        font-size: 18px;
        font-weight: 500;
    }

    .index-about-content li {
        font-size: 18px;
        font-weight: 500;
    }

    .relative .card {
        position: relative;
    }

    .relative .card {
        overflow: hidden;
    }


    .relative .card img {
        transform: scale(1.1);
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

    .videoWrapper {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 */
        padding-top: 25px;
        height: 0;
    }

    .videoWrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }


    @media only screen and (max-width: 390px) {
        .index-about-title h3{
            font-size: calc(1.2rem + .6vw);
        }
        .title-slider h1{
            font-size:  10px;
        }
    }

    @media only screen and (max-width: 414px) {
        /* .index-about-title h3{
            font-size: calc(1.2rem + .6vw);
        } */
        .title-slider h1{
            font-size: calc(1.3rem + .6vw);
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


    <!-- Carousel Start -->
    <?php include("carousel.php"); ?>
    <!-- Carousel End -->


    <!-- Top Feature Start -->
    <div class="container-fluid top-feature py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Address</h4>
                                <span>55/7 Moo1 T.Klong7 Klongluang Pathumtani 12120</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Email</h4>
                                <span><a href="mailto:samrithbo@ptwtechnology.com">samrithbo@ptwtechnology.com</a></span>
                                <br>
                                <span><a href="mailto:ptw_tech@yahoo.com">ptw_tech@yahoo.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-phone text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Tel</h4>
                                <span><a href="tel:02-152 5827">02-152 5827</a></span>
                                <br>
                                <span><a href="tel:02-159 00715">02-159 00715</a></span>
                                <br>
                                <span><a href="tel:02-159 0716">02-159 0716</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Feature End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="index-about-title">
                <h3 class="mb-5 text-center">บริษัท พีทีดับบลิว เทคโนโลยี จำกัด</h3>
            </div>
            <div class="index-about-content">
                <p>
                    ก่อตั้งเมื่อ พ.ศ 2547 ทุนจดทะเบียน :3,000,000 บาท
                <p>
                    สินค้าและบริการ :
                </p>
                <p>
                    <li>รับออกแบบ-สร้าง ระบบอัตโนมัติ</li>
                </p>
                <p>
                    <li> Jig & Fixture และเครื่องจักรกลทุกชนิด ตามลูกค้าต้องการ</li>
                </p>
                <p>
                    <li> รับเขียนโปรแกรม PLC, SCADA,PC Window Base</li>
                </p>
                <p>
                    <li>
                        รับออกแบบสร้าง Line การผลิตแบบอัตโนมัติ
                    </li>
                </p>
                </p>
                <p>
                    พื้นที่ทำงาน : 390 ตร.ม. พนักงาน : แอดมิน 4 คน วิศวกร 5 คน ช่างเทคนิค 12 คน
                </p>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-4 wow fadeInUp mb-3" data-wow-delay="0.1s">
                <h1 class="py-3">CUSTOMIZEAutomation Machine / Line</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="relative">
                        <div class="team-item rounded card">
                            <img class="img-fluid" src="images/index/1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="relative">
                        <div class="team-item rounded card">
                            <img class="img-fluid" src="images/index/2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="relative">
                        <div class="team-item rounded card">
                            <img class="img-fluid" src="images/index/3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-4 wow fadeInUp mb-3" data-wow-delay="0.1s">
                <h1 class="py-3">MEDICAL Platform Machine</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="relative">
                        <div class="team-item rounded card">
                            <img class="img-fluid" src="images/index/4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="relative">
                        <div class="team-item rounded card">
                            <img class="img-fluid" src="images/index/5.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="relative">
                        <div class="team-item rounded card">
                            <img class="img-fluid" src="images/index/6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-4 wow fadeInUp mb-3" data-wow-delay="0.1s">
                <h1 class="py-3">Assembly JIG & FIXTURES</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="relative">
                        <div class="team-item rounded card">
                            <img class="img-fluid" src="images/index/7.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="relative">
                        <div class="team-item rounded card">
                            <img class="img-fluid" src="images/index/8.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="relative">
                        <div class="team-item rounded card">
                            <img class="img-fluid" src="images/index/9.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
        <h1 class="text-center my-3 text-white">INTRODUCTION</h1>
        <div class="container py-5">



            <!-- <iframe width="100%" height="700" src="https://www.youtube.com/embed/WSzSPHaUGlM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

            <div class="videoWrapper">
                <iframe width="460" height="315" src="https://www.youtube.com/embed/WSzSPHaUGlM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>



        </div>
    </div>
    <!-- Facts End -->


    <?php include("footer.php"); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg  btn-lg-square rounded-circle back-to-top" style="background-color: #0e4194 ;color:#fff;"><i class="bi bi-arrow-up"></i></a>

    <?php include("js.php"); ?>

</body>

</html>
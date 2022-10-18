<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <div class="navbar-logo">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="images/logo/ptw.png" width="220px" alt="">
        </a>
    </div>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link <?php if ($menu == "index") {
                echo "active";
            } ?>">HOME</a>
            <a href="product.php" class="nav-item nav-link <?php if ($menu == "product") {
                echo "active";
            } ?>">PRODUCTS & SERVICES</a>
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PRODUCTS & SERVICES</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="" class="dropdown-item">Features</a>
                    <a href="" class="dropdown-item">Free Quote</a>
                </div>
            </div> -->
            <a href="map.php" class="nav-item nav-link <?php if ($menu == "map") {
                echo "active";
            } ?>">MAP</a>
            <a href="contact.php" class="nav-item nav-link <?php if ($menu == "contact") {
                    echo "active";
                } ?>">CONTACT US</a>
            <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
        </div>
        <!-- <a href="" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> -->
    </div>
</nav>
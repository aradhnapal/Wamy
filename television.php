<?php include('header.php') ?>


<section class="google-background">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-12  text-center"> <!-- Added text-center here -->
                <div class="text-muted p-4">
                    <h2 class=" text-dark ">Televisions</h2>
                    <p class="mb-4 text-dark lead"> Home | <span class="text-danger"> Televisions</span></p>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="container py-5">
    <div class="row align-items-center g-4 g-lg-5">
        <!-- Image Section -->
        <div class="col-12 col-lg-6 order-lg-1 order-2">
            <img class="img-fluid rounded-3 mb-4 mb-lg-0" src="./image/Android TV 001.png" alt="feature image 2" >
        </div>

        <!-- Text Section -->
        <div class="col-12 col-lg-6 order-lg-2 order-1">
            <!-- <h2 class="mb-4 display-4 ">Android TV</h2> -->
            <h2 class="text-start">Android Tv</h2>
             <hr  class="hr-line">
            <p class="mb-4 mt-4 fs-4 lead">Monitor energy consumption across all appliances with real-time comparisons to help reduce costs and enhance energy efficiency.</p>
            <a href="androidtv.php" class="btn  text-white  btn-lg px-4 py-2 ">
                Read More
            </a>
        </div>
    </div>
</div>

<style>
    @media (max-width: 991px) {

        /* For tablet and mobile screens, order changes: image comes after text */
        .order-1 {
            order: 2;
        }

        .order-2 {
            order: 1;
        }
    }
</style>
<div class="google-background">
    <div class="container py-1">
        <div class="row align-items-center g-5">
            <div class="col-12 col-lg-6">
                <div class="text-muted">
                <h2 class="text-start text-dark">Google TV</h2>
                <hr  class="hr-line">
                    <p class="mb-4 text-dark lead">Track your weaving production in real-time from anywhere, ensuring optimal performance and instant insights into every aspect of your operations.</p>
                    <a href="googletv.php" class="btn text-white btn-lg px-4 py-2">
                        Read More
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-lg-end">
                <img class="img-fluid rounded-lg" src="./image/Google TV 001.png" alt="dashboard feature image" >
            </div>
        </div>
    </div>
</div>



<div class="container ">
    <div class="row align-items-center g-4 g-lg-5">
        <!-- Image Section -->
        <div class="col-12 col-lg-6 order-lg-1 order-2">
            <img class="img-fluid rounded-3 mb-4 mb-lg-0" src="./image/WebOS TV 001.jpg" alt="feature image 2" >
        </div>

        <!-- Text Section -->
        <div class="col-12 col-lg-6 order-lg-2 order-1">
        
            <h2 class="text-start">WebOs Hub TV</h2>
             <hr  class="hr-line">
            <p class="mb-4 mt-4 fs-4 lead">Monitor energy consumption across all appliances with real-time comparisons to help reduce costs and enhance energy efficiency.</p>
            <a href="webostv.php" class="btn  text-white  btn-lg px-4 py-2 ">
                Read More
            </a>
        </div>
    </div>
</div>














<?php include('footer.php') ?>
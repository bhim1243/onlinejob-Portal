<?php
session_start();
include "header.php"
?>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-dark bg-secondary">
        <div class="max-width">
            <div class="logo"><a href="#">JOB<span>PROTAL</span></a>
            </div>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <ul class="menu">
                <li><a href="home.php" class="menu-btn">Home</a></li>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <li><a href="jobs.php" class="menu-btn">jobs</a></li>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <li><a href="About.php" class="menu-btn">About</a></li>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <li><a href="contact.php" class="munu-btn">contact</a></li>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <li> <a href="login.php" class="meun-btn">Login</a></li>

            </ul>

        </div>
    </nav>
    <!-- navbar end -->
    <!-- search bar start  -->
    <?php
    include "search.php"
    ?>
    <!-- search bar end -->
    <!-- team code start -->

    <section class="our-webcoderskull padding-lg">
        <div class="container">
            <div class="row heading heading-icon">
                <h2>Our Team</h2>
            </div>
            <ul class="row">
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="img/1650260331465.jpg" class="img-responsive" alt=""></figure>
                        <h3><a href="https://www.youtube.com/channel/UCeHTEWWEaXtBjBtz6fIHfyg">bhim brd shahi</a></h3>
                        <p> Web Developer</p>
                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#https://www.youtube.com/channel/UCeHTEWWEaXtBjBtz6fIHfyg"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>

                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
                        <h3><a href="#">prerana chaudhary</a></h3>
                        <p> Web Developer</p>
                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
                        <h3><a href="">bimala yadav</a></h3>
                        <p>Web Developer</p>
                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
                        <h3><a href="">ASHOK SIR </a></h3>
                        <p>Coordinator</p>
                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </section>


    <!-- team code end -->
    <!-- contact start -->
    <?php
    include "contact.php"
    ?>
    <!-- contact end -->

    <!-- footerstart -->
    <div>
        <?php
        include "footer.php"
        ?>
    </div>


    <!-- footerend -->

</body>

</html>
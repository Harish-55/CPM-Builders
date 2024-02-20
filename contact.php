<?php include('header.php') ?>

<!-- start banner area -->
<section class="inner-page banner" data-img="assets/images/inner/banner-bg.jpg">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content text-center">
                        <h2>contact page</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='index.php'>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner area -->

<!-- start quote area -->
<section class="home2 quote pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="image">
                                <img src="assets/images/home2/quote-img.png" alt="Quote">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="content">
                                <div class="section-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                                    <h2>get a free quote</h2>
                                </div>
                                <form action="mail.php" method="POST" class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label for="name">
                                                <input type="text" id="name" placeholder="your name" class="inputs" name="name">
                                                <i class="far fa-user"></i>
                                            </label>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label for="email">
                                                <input type="email" id="email" placeholder="your email" class="inputs" name="email">
                                                <i class="far fa-envelope-open"></i>
                                            </label>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label for="phn">
                                                <input type="tel" id="phn" placeholder="phone no." class="inputs" name="phone">
                                                <i class="fas fa-phone-alt"></i>
                                            </label>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label for="sub">
                                                <input type="text" id="sub" placeholder="subject" class="inputs" name="subject">
                                                <i class="far fa-edit"></i>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="msg" class="msg">
                                                <textarea class="inputs" id="msg" placeholder="your message" name="message"></textarea>
                                                <i class="fas fa-comment-dots"></i>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="button-style">send message <i class="fas fa-arrow-circle-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end quote area -->

<!-- Map section start -->
<section class="contact-page location">
    <div class="google-map-wrapper" data-latitude='40.7656561' data-longitude='-73.7691858' data-zoom='11'></div>
    <div id="map"></div>
</section>
<!-- Map section end -->

<?php include('footer.php') ?>
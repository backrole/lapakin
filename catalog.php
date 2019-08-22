<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>detail</title>
   <?php include 'link.php';?>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="margin-top: -26px;margin-bottom: 13px;">
        <div class="container"><a class="navbar-brand" href="#" style="font-family: Atma, cursive;font-size: 23px;">Lapak Malang</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Produk</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Cara Order</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Tentang</a></li>
                </ul><span class="navbar-text actions"> <a href="#" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span></div>
        </div>
    </nav>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="row product-list">
                        <?php for ($i=0; $i < 4; $i++) { 
                         ?>
                        <div class="col-sm-6 col-md-4 product-item">
                            <div class="product-container">
                                <div class="row">
                                    <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/iphone6.jpg"></a></div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <h2><a href="#">iPhone 6s</a></h2>
                                    </div>
                                    <div class="col-4"><a href="#" class="small-text">compare </a></div>
                                </div>
                                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a href="#" class="small-text">82 reviews</a></div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                                            <div class="col-6">
                                                <p class="product-price">$599.00 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark" style="height:100%;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Customizable-Carousel-swipe-enabled.js"></script>
    <script src="assets/js/Bold-BS4-Jumbotron-with-Particles-js.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Card-Carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/MUSA_carousel-extended.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
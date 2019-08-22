<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index</title>
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
    <div class="jumbotron jumbotron-fluid jumbotron-main"><script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <div id="particles-js">
	<canvas class="particles-js-canvas-el" width="1409" height="319" style="width: 100%; height: 100%;"></canvas>
	</div>
        <div class="container center-vertically-holder" style="margin-top:-20px;">
            <div class="row center-vertically">
                <div class="col-md-8 offset-sm-0 offset-md-2 text-center" style="margin-top: 100px;margin-bottom: 100px;height: 148px;">
                    <h1 style="font-family: Atma, cursive;font-size: 55px;">Lapak Malang<br><br></h1>
                    <hr style="border-top:1px;color:rgba(255,255,255,0.9);width:60%;margin:0px;margin-top:-50px;margin-bottom:10px;margin-left:20%;">
                    <p style="margin-top: -23px;">Sebuah website yang menyediakan barang kebutuhan pokok atau non-pokok keluarga anda</p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron" style="background-color: rgb(255,255,255);margin-top: -153px;">
            <div class="card">
                <div class="card-body" style="height: 114px;margin-top: 7px;">
                    <p class="card-text">Cari Barang Anda Disini...</p>
                    <div class="row padMar">
                        <div class="col padMar">
                            <div class="input-group">
                                <div class="input-group-prepend"></div><input class="form-control" type="search">
                                <div class="input-group-append"><button class="btn btn-warning" type="button"><i class="fa fa-search"></i></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: -50px;">
    <div class="row product-list">
        
        <?php 
        for ($i=0; $i < 4; $i++) { 
        ?>
        <div class="col-sm-4 col-md-3 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/iphone6.jpg"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">iPhone 6s</a></h2>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12"><button class="btn btn-light" type="button">Buy Now!</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
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
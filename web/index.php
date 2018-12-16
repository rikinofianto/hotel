<?php
if (!empty($_GET['act']) && $_GET['act'] == 'reservation') {
    include 'reservation.php';
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo WEB_TITLE;?></title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="<?=WEB_DIR;?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?=WEB_DIR;?>css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=WEB_DIR;?>css/chocolat.css" type="text/css" media="screen">
    <link href="<?=WEB_DIR;?>css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="<?=WEB_DIR;?>css/flexslider.css" type="text/css" media="screen" property=""/>
    <link rel="stylesheet" href="<?=WEB_DIR;?>css/jquery-ui.css"/>
    <link href="<?=WEB_DIR;?>css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="<?=WEB_DIR;?>js/modernizr-2.6.2.min.js"></script>
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?=WEB_DIR;?>css/swipebox.css">
    <!--//fonts-->
</head>
<body>
    <div class="banner-top">
        <div class="social-bnr-agileits">
            <ul class="social-icons3">
                <li>
                    <a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"></a>
                </li>
                <li>
                    <a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"></a>
                </li>
                <li>
                    <a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"></a>
                </li>
            </ul>
        </div>
        <div class="contact-bnr-w3-agile">
            <ul>
                <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a href="mailto:info@example.com">reservation@queenofthesouth-resort.com</a>
                </li>
                <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>+(62) 274 - 367136
                </li>
                <li class="s-bar">
                    <div class="search">
                        <input class="search_box" type="checkbox" id="search_box">
                        <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                        <div class="search_form">
                            <form action="#" method="post">
                                <input type="search" name="Search" placeholder=" " required/>
                                <input type="submit" value="Search" style="padding: 5px 25px;"></form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="w3_navigation">
        <div class="container">
            <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="index.php">QUEEN <span>OF THE SOUTH</span>
                <p class="logo_w3l_agile_caption">WELLCOME TO <?php echo WEB_TITLE;?></p>
                </a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--iris">
                <ul class="nav navbar-nav menu__list">
                    <li class="menu__item menu__item--current">
                        <a href="/" class="menu__link">Beranda</a>
                    </li>
                    <li class="menu__item">
                        <a href="#about" class="menu__link scroll">Tentang</a>
                    </li>
                    <li class="menu__item">
                        <a href="#gallery" class="menu__link scroll">Gallery</a>
                    </li>
                    <li class="menu__item">
                        <a href="#rooms" class="menu__link scroll">Kamar</a>
                    </li>
                    <li class="menu__item">
                        <a href="#contact" class="menu__link scroll">Kontak</a>
                    </li>
                </ul>
                </nav>
            </div>
            </nav>
        </div>
    </div>

    <?php include 'home.php'; ?>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <!-- Modal1 -->
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>QUEEN <span>OF THE SOUTH</span></h4>
                    <img src="images/1.jpg" alt=" " class="img-responsive">
                    <h5>Kami tahu apa yang Anda sukai</h5>
                    <p>
                        Memberikan tamu pemandangan yang unik dan mempesona dari kamar mereka dengan fasilitas yang luar biasa, menjadikan Star Hotel salah satu yang terbaik di jenisnya. Cobalah menu makanan kami, layanan yang luar biasa dan staf yang ramah saat Anda berada di sini.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="availability-agileits">
        <div class="col-md-12 book-form-left-w3layouts">
            <a href="#rooms" class="scroll"><h2>PESAN KAMAR</h2></a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="banner-bottom">
        <div class="container">
            <div class="agileits_banner_bottom">
                <h3><span>Nikmati pengalaman menginap yang menyenangkan, nikmati penawaran fantastis</span> Temukan sambutan ramah kami</h3>
            </div>
            <div class="w3ls_banner_bottom_grids">
                <ul class="cbp-ig-grid">
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_road"></span>
                            <h4 class="cbp-ig-title">MASTER BEDROOMS</h4>
                            <span class="cbp-ig-category">QUEEN HOTEL</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_cube"></span>
                            <h4 class="cbp-ig-title">SEA VIEW BALCONY</h4>
                            <span class="cbp-ig-category">QUEEN HOTEL</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_users"></span>
                            <h4 class="cbp-ig-title">LARGE CAFE</h4>
                            <span class="cbp-ig-category">QUEEN HOTEL</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_ticket"></span>
                            <h4 class="cbp-ig-title">WIFI COVERAGE</h4>
                            <span class="cbp-ig-category">QUEEN HOTEL</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'about.php';?>

    <div class="advantages">
        <div class="container">
            <div class="advantages-main">
                <h3 class="title-w3-agileits">Layanan Kami</h3>
                <div class="advantage-bottom">
                    <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
                        <div class="advantage-block ">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <h4>Nginap dulu, bayar kemudian!</h4>
                            <p>
                                Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
                            </p>
                            <p>
                                <i class="fa fa-check" aria-hidden="true"></i>Kamar yang dihias, AC yang tepat
                            </p>
                            <p>
                                <i class="fa fa-check" aria-hidden="true"></i>Balkon pribadi
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
                        <div class="advantage-block">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4>Restoran 24 Jam</h4>
                            <p>
                                Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
                            </p>
                            <p>
                                <i class="fa fa-check" aria-hidden="true"></i>Layanan kamar 24 jam
                            </p>
                            <p>
                                <i class="fa fa-check" aria-hidden="true"></i>Layanan Pramutamu 24 jam
                            </p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'galeri.php';?>
    <?php include 'kamar.php';?>
    <?php include 'kontak.php';?>

    <div class="copy">
        <p>
            © <?php echo WEB_TITLE;?>
        </p>
    </div>
    <?php include 'login_modal.php';?>
    <!-- js -->
    <script type="text/javascript" src="<?=WEB_DIR;?>js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?=WEB_DIR;?>js/bootstrap-3.1.1.min.js"></script>
    <script src="<?=WEB_DIR;?>js/jqBootstrapValidation.js"></script>
    <script src="<?=WEB_DIR;?>js/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#check_in,#check_out,#datepicker2,#datepicker3" ).datepicker({
                'format': 'yyyy-mm-dd'
            });
        });
    </script>
    <script src="<?=WEB_DIR;?>js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>
    <script type="text/javascript" src="<?=WEB_DIR;?>js/move-top.js"></script>
    <script type="text/javascript" src="<?=WEB_DIR;?>js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <script defer src="<?=WEB_DIR;?>js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <script src="<?=WEB_DIR;?>js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider4").responsiveSlides({
                auto: true,
                pager:true,
                nav:false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <script src="<?=WEB_DIR;?>js/main.js"></script>
    <script src="<?=WEB_DIR;?>js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true,   // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
            */
            $().UItoTop({ easingType: 'easeOutQuart' });
            $('.exit').on('click', function () {
                $('#loginModal').modal('hide');
            })
        });
    </script>
    <div class="arr-w3ls">
        <a href="#home" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    </div>
    <script src="<?=WEB_DIR;?>js/custom.js"></script>
</body>
</html>
<?php
}
?>
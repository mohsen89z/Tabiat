<!DOCTYPE html>
<!--<html lang="en" manifest="index.appcache">-->
<html lang="en">
<?php
if (empty($_GET["id"])) {
    echo "Access Denied!";
    die(0);
} else {
    $id = $_GET["id"];

    include_once 'ServerConf.php';

    $trip = json_decode(file_get_contents(ServerConf::getHost() . '/tabiat-service/service/trips.php?method=trip&id=' . $id));
    $images = json_decode(file_get_contents(ServerConf::getHost() . '/tabiat-service/service/trips.php?method=trpimgs&id=' . $id));
}
?>


<head>
    <title>طبیعت</title>

    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Fresh Bootstrap theme for your next projects, Influence is fully responsive, well documented, built with premium plugins.">

    <!-- 'theme-color' will set background color in Chrome browser on Android 5.0+ -->
    <meta name="theme-color" content="#263238">

    <!-- Favicon - this tools will help you generate favicons for all platform - http://realfavicongenerator.net/ -->
    <link rel="shortcut icon" href="../assets/img/favicons/favicon.png">

    <!-- MAIN STYLES -->
    <!-- If you want change theme, you need to remove old one and new one, how for Bootstrap, so for custom theme -->
    <link href="../assets/css/bootstrap/themes/cyan-b.css" rel="stylesheet" id="bootstrapTheme">
    <!--<link href="../assets/css/main-theme/themes/red-b.css" rel="stylesheet" id="mainTheme">-->
    <link href="../assets/css/main-theme/themes/cyan-m.css" rel="stylesheet" id="mainTheme">
    <!--<link href="../assets/css/main-theme/themes/red-m.css" rel="stylesheet" id="mainTheme">-->

    <!-- FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">

    <!-- PLUGINS -->
    <link rel="stylesheet" href="../assets/css/plugins/animations.css">
    <link rel="stylesheet" href="../assets/css/plugins/animate.css">
    <link rel="stylesheet" href="../assets/css/plugins/slider-revolution.css">
    <link rel="stylesheet" href="../assets/css/plugins/cubeportfolio.css">
    <link rel="stylesheet" href="../assets/css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/plugins/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/plugins/devicons.css">
    <link rel="stylesheet" href="../assets/css/main-theme/edu.css">
    <link rel="stylesheet" href="../assets/css/main-theme/fonts.css">
    <link rel="stylesheet" href="../assets/css/main-theme/fa.css">
    <link rel="stylesheet" href="../assets/css/main-theme/tabiat.css">

    <link rel="stylesheet" href="../assets/css/main-theme/bootstrap.min.css">
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../assets/css/CircleHoverEffects/demo.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/CircleHoverEffects/common.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/CircleHoverEffects/style5.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'/>
    <script type="text/javascript" src="../assets/js/modernizr.custom.79639.js"></script>

    <link rel="stylesheet" href="../assets/css/inner/modal.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/inner/k2.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/inner/bootstrap.min.rtl.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/inner/bootstrap-responsive.min.rtl.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/inner/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/inner/mobile-menu.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/inner/template.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/inner/preset5.css" type="text/css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">

    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap-datepicker.min.css" type="text/css">
    <script src="../assets/js/plugins/bootstrap-datepicker.min.js"></script>


    <link rel="stylesheet" href="../assets/css/main-theme/inner-trip.css">

</head>

<body>

<!-- PRELOADER -->
<div class="preloader-wrap clearfix  bg-coolblue2" id="preloader">
    <div class="hv-center">
        <iframe src="../assets/frame/fa/stroke.html"></iframe>
    </div>
</div>
<!-- /PRELOADER -->

<!--===============================
            MAIN WRAP
 ===============================-->
<div id="page-wrap">

    <!-- NAVIGATION -->
    <div class="navbar navbar-trn navbar-fixed-top navbar-height" role="navigation" id="navbarSettings">
        <div class="container">
            <div class="navbar-header" style="max-height: 60px;">
                <!-- Mobile Navigation -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--/END Mobile Navigation -->
                <!-- Logo/Name -->
                <a class="scroll navbar-brand scroll" href="#sTop">
                </a>
            </div>

            <div class="collapse navbar-collapse RoyaWeb-Regular pull-right" id="bs-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" id="nav">
                    <li class="dropdown pull-right">
                        <a href="#sTop">
                            صفحه ی اصلی
                        </a>
                    </li>
                    <li class="dropdown pull-right">
                        <a href="#sStory">
                            سفر های داخلی
                        </a>
                    </li>
                    <li class="dropdown pull-right">
                        <a href="#sWhat">
                            سفر های خارجی
                        </a>
                    </li>
                    <li class="dropdown pull-right">
                        <a href="#sVision">
                            تقویم سفر ها
                        </a>
                    </li>
                    <li class="dropdown pull-right">
                        <a href="#sJoin">
                            گالری
                        </a>
                    </li>
                    <li class="dropdown pull-right">
                        <a href="#sContact">
                            تماس با ما
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#sContact">
                            ارتباط با ما
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="navbarSpaceBottom"></div>
    <!-- /NAVIGATION -->

    <span class="breakPoint" id="tripHolder"></span>
    <div class="section-xlg no-padding row Iran-Sans">
        <div class="inner-trip-title">
            <h4 class="trip-directory">
                <a href="/tabiat/fa/index.php">
                    صفحه ی اصلی
                </a>
                >
                <?php echo $trip->name; ?>
            </h4>
            <h1>
                <?php echo $trip->name; ?>
            </h1>
        </div>
        <div class="trip-desc row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <h1>
                    <?php echo $trip->name; ?>
                </h1>
                <?php echo $trip->attractions; ?>
                <div class="row" style="margin-top: 140px;">
                    <?php
                    foreach ($images as $img)
                        echo '<img src="' . $img . '" class="col-md-4">';
                    ?>
                    <img src="../assets/img/trips/trip-date.jpg" class="col-md-4">
                </div>
            </div>
            <div class="col-md-4">
                <img src="../assets/img/trips/map.jpg"/>
            </div>
        </div>
        <div class="container bg-lightgray section">
            <h2>
                <span class="glyphicon glyphicon-road"> </span>
                حرکت
            </h2>
        </div>
        <div class="container section">
            <img src="../assets/img/trips/move.jpg"/>
        </div>
        <div class="container section">
            <img src="../assets/img/trips/sug.jpg"/>
        </div>
        <div class="container section">
            <img src="../assets/img/trips/med.jpg"/>
        </div>
    </div>


    <!-- NEWS GROUP -->
    <span class="breakPoint" id="sNewsContainer"></span>
    <div id="newsFeed" class="bg-dark section-xlg row">
        <div class="col-md-2"></div>
        <div class="Iran-Sans col-md-3 feed-form" style="text-align: center">
            <form id="login-form" class="text-left">
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                    <div class="login-group">
                        <h1>
                            عضویت در خبر نامه
                        </h1>
                        <h3>
                            با عضویت در خبرنامه از اخرین تورها مطلع شوید.
                        </h3>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" id="uLogin" placeholder="نام و نام خانوادگی">
                                <label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" id="uEmail" placeholder="پست الکترونیکی">
                                <label for="uEmail" class="input-group-addon glyphicon glyphicon-envelope"></label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-block login">
                        عضویت
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-7"></div>
    </div>

    <!--OUR PARTNERS-->
    <div class="section-xlg no-padding">
        <span class="breakPoint" id="Sponsers"></span>
        <div class="container section">
            <div style="text-align: center;">
                <img src="../assets/img/edu/slides/sponsers.png">
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer iran-sans">
        <br/>
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-md-3">
                    <h3>
                        منو بار
                    </h3>
                    <ul style="list-style: none;">
                        <li>
                            <a>
                                خانه
                            </a>
                        </li>
                        <li>
                            <a>
                                آموزش
                            </a>
                        </li>
                        <li>
                            <a>
                                در سفر
                            </a>
                        </li>
                        <li>
                            <a>
                                دست نوشته ها
                            </a>
                        </li>
                        <li>
                            <a>
                                اخبار
                            </a>
                        </li>
                        <li>
                            <a>
                                دیگر فعالیت ها
                            </a>
                        </li>
                        <li>
                            <a>
                                در باره ی ما
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>
                        دیگر فعالیت ها
                    </h3>
                    <ul style="list-style: none;">
                        <li>
                            <a>
                                باشگاه هنر و طبیعت
                            </a>
                        </li>
                        <li>
                            <a>
                                کافه طبیعت
                            </a>
                        </li>
                        <li>
                            <a>
                                کانون کوهنوردی طبیعت
                            </a>
                        </li>
                        <li>
                            <a>
                                بچه های طبیعت
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>
                        تماس با ما
                    </h3>
                    <ul style="list-style: none;">
                        <li>
                            <h4>
                                آدرس
                            </h4>
                        </li>
                        <li>
                            <a>
                                خیابان سید جمال اسد آبادی(یوسف آباد)، نرسیده به میدان فرهنگ،
                                روبروی قنادی پوپک، شماره 267، طبقه ی اول، واحد
                            </a>
                        </li>
                        <li>
                            <h4>
                                تلفن
                            </h4>
                        </li>
                        <li>
                            <a>
                                88103928, 88103927
                                <br/>
                                66930777, 66930663
                            </a>
                        </li>
                        <li>
                            <h4>
                                رایانامه
                            </h4>
                        </li>
                        <li>
                            <a>
                                info@tabiat.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div id="cal_container"></div>
                </div>
            </div>
            <div class="space-sm"></div>
            <ul class="dark-icons icons-list center-block">
                <li>
                    <a href="https://twitter.com/" title="Follow us">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" title="Follow us">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/" title="Follow us">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.pinterest.com/" title="Follow us">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /FOOTER -->


    <!--=== BACK TO TOP ===-->
    <a href="#" class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--===/End BACK TO TOP ===-->
</div>

<!--===============================
            /MAIN WRAP
 ===============================-->

<!-- SCRIPTS -->
<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>-->
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->

<script src="../assets/js/libs/jquery.min.js"></script>
<script src="../assets/js/libs/jquery-ui.min.js"></script>
<script src="../assets/js/libs/bootstrap.min.js"></script>

<script src="../assets/js/plugins/modernizr-latest.js"></script>
<script src="../assets/js/plugins/picturefill.js"></script>
<script src="../assets/js/plugins/smoothScroll.js"></script>
<script src="../assets/js/plugins/wow.js"></script>
<script src="../assets/js/plugins/classie.js"></script>
<script src="../assets/js/plugins/jquery.nav.js"></script>
<script src="../assets/js/plugins/jquery.stellar.js"></script>
<script src="../assets/js/plugins/jquery.themepunch.tools.js"></script>
<script src="../assets/js/plugins/jquery.themepunch.revolution.js"></script>
<script src="../assets/js/plugins/owl.carousel.js"></script>
<script src="../assets/js/plugins/jquery.knob.js"></script>
<script src="../assets/js/plugins/form.js"></script>
<script src="../assets/js/plugins/dialogFx.js"></script>
<script src="../assets/js/plugins/jquery.cubeportfolio.js"></script>
<script src="../assets/js/plugins/awesome-work.js"></script>
<script src="../assets/js/plugins/jquery.modalEffects.js"></script>
<script src="../assets/js/plugins/cssParser.js"></script>

<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/style-switcher.js"></script>
<script>
    $(function () {
        //Plugins Init
        $('[data-toggle="tooltip"]').tooltip();
        Plugins.init();
        Plugins.animations();
        Plugins.wow();
        Plugins.parallaxStellar();
        Plugins.revolutionSlider();
        Plugins.dialogEffects();
        Plugins.onePageNav();
        Plugins.owlCarousel();
        Plugins.knobs(".lbKnob", "#26C6DA");
        Plugins.modalEffects();

        //Custom JS Init
        Custom.init();
        Custom.loadMoreNews();
        Custom.mobileMenuAnimation();
    });
</script>

<script src="../assets/js/plugins/bootstrap-datepicker.fa.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#cal_container").datepicker({
            inline: true,
            minDate: 0,
            maxDate: 0,
            showButtonPanel: false
        });
    });
</script>

<!-- RELOAD PAGE BY APPCACHE UPDATE-->
<script>
    if (window.applicationCache) {
        window.applicationCache.addEventListener('updateready', function () {
            if (confirm('An update is available. Reload now?')) {
                window.location.reload();
            }
        });
    }
</script>

<!--[if lt IE 9]>
<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- /SCRIPTS -->
</body>

</html>

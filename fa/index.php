<?php
include_once 'ServerConf.php';

$normals = json_decode(file_get_contents(ServerConf::getHost() . '/tabiat-service/service/trips.php?method=normal'));
$specials = json_decode(file_get_contents(ServerConf::getHost() . '/tabiat-service/service/trips.php?method=special'));

?>

<!DOCTYPE html>
<!--<html lang="en" manifest="index.appcache">-->
<html lang="en">

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

    <style>
        <?php
        $normalCnt = 1;
        foreach ($normals as $normal) {
            ?>
        .lTrip-no<?php echo ceil($normalCnt / 3); ?>-<?php echo $normalCnt % 3; ?> {
            background: url('<?php echo trim(file_get_contents(ServerConf::getHost() . '/tabiat-service/service/trips.php?method=trpimg&id=' . $normal->id)); ?>') no-repeat !important;
            background-size: cover !important;
        }

        <?php
        $normalCnt++;
    }
    ?>
        <?php
        $specialCnt = 1;
        foreach ($specials as $special) {
            ?>
        .ftrip-no<?php echo $specialCnt; ?> {
            background: url('<?php echo trim(file_get_contents(ServerConf::getHost() . '/tabiat-service/service/trips.php?method=trpimg&id=' . $special->id)); ?>') no-repeat !important;
            background-size: cover !important;
        }

        <?php
        $specialCnt++;
    }
    ?>
    </style>

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

    <span class="breakPoint" id="sTop"></span>
    <!--LANDING-->

    <span class="breakPoint" id="sLandingContainer"></span>
    <div class="tp-banner-container">
        <div class="tp-banner Iran-Sans">
            <ul>
                <!-- SLIDE 2 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                    data-thumb="../assets/img/edu/slides/03-tumb.jpg" data-saveperformance="off"
                    data-title="به طبیعت خوش آمدید">
                    <!-- MAIN IMAGE -->
                    <img src="../assets/img/edu/slides/03.jpg" alt="Welcome to Influence"
                         data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <div class="tp-caption s-title-v2 customin stt  tp-resizeme" data-x="center" data-y="150"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000" data-start="1100" data-easing="Power4.easeOut" data-splitin="none"
                         data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endeasing="Power4.easeIn" data-endspeed="500"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        به طبیعت خوش آمدید.
                    </div>
                </li>
                <!-- SLIDE 2 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                    data-thumb="../assets/img/edu/slides/04-tumb.jpg" data-saveperformance="off"
                    data-title="به طبیعت خوش آمدید">
                    <!-- MAIN IMAGE -->
                    <img src="../assets/img/edu/slides/04.jpg" alt="Welcome to Influence"
                         data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                </li>
                <!-- SLIDE 1 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                    data-thumb="../assets/img/edu/slides/01-tumb.jpg" data-saveperformance="off"
                    data-title="دوره ی آموزش زبان">
                    <!-- MAIN IMAGE -->
                    <img src="../assets/img/edu/slides/01.jpg" alt="Welcome to Influence"
                         data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                </li>
                <!-- SLIDE 2 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                    data-thumb="../assets/img/edu/slides/02-tumb.jpg" data-saveperformance="off"
                    data-title="به طبیعت خوش آمدید">
                    <!-- MAIN IMAGE -->
                    <img src="../assets/img/edu/slides/02.jpg" alt="Welcome to Influence"
                         data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                </li>
                <!-- TIMER -->
                <div class="tp-bannertimer tp-bottom"></div>
            </ul>
        </div>
    </div>


    <span class="breakPoint" id="sSearchContainer"/> </span>
    <div class="bg-dark2 section-xlg">
        <div class="container section Iran-Sans-Regular">
            <div class="search-button-txt">
                جستجو ی پیشرفته
            </div>
            <select>
                <option>
                    مقصد خود را مشخص کنید
                </option>
                <option>
                    گیلان
                </option>
            </select>

            <select>
                <option>
                    تعداد روز ها را مشخص کنید
                </option>
                <option>
                    یک روزه
                </option>
                <option>
                    دو روزه
                </option>
            </select>

            <select>
                <option>
                    نوع سفر را مشخص کنید
                </option>
                <option>
                    داخلی
                </option>
                <option>
                    خارجی
                </option>
            </select>
        </div>
    </div>

    <!-- FEATURED TRIP SECTION -->
    <span class="breakPoint" id="sFeaturedTripContainer"></span>
    <div id="FeaturedTrip" align="center">
        <div class="section bg-grey partner" margin="auto">
            <div class="container">
                <h2 class="big-title Iran-Sans-Medium Dark-Gray">
                    تور های برگزیده
                </h2>
                <div style="margin-bottom: 15px">
                    کوه های هزار دره ترکمن صحرا، آشنایی با فرهنگ و اقوام مردم ترکمن صحرا، مقبره ی خالد نبی،
                    گورستان سنگی،موسیقی ترکمنی،برج گنبد کاووس،بازدید از مرکز پرورش اسب، جزیره آشوراده، آبشار کبودال،
                    بازار
                    بندر ترکمن،
                    قایق سواری دریای خزر
                </div>
            </div>
            <?php
            if (count($specials) == 0) {
                ?>
                <div>
                    هیچ سفری برای نمایش موجود نیست.
                </div>
                <?php
            } else {
                ?>
                <div class="row">
                    <?php
                    $specialCnt = 1;
                    foreach ($specials as $special) {
                        ?>
                        <div class="selected-trip col-md-3 ftrip-no<?php echo $specialCnt++; ?>">
                            <div class="trip-title">
                                <?php echo $special->name; ?>
                            </div>
                            <div class="trip-desc">
                                سفر
                                <?php echo $special->duration; ?>
                                روزه
                            </div>
                            <div class="trip-duration">
                                <?php echo $special->start_date; ?>
                            </div>
                        </div>

                        <?php
                    }
                    ?>

                </div>
                <?php
            }

            ?>
        </div>
    </div>

    <!-- NORMAL TRIP SECTION -->
    <span class="breakPoint" id="sTripContainer"></span>
    <div id="Trip" align="center">
        <div class="section bg-lightgray2 partner" margin="auto">
            <div class="container">
                <h2 class="big-title Iran-Sans-Medium Dark-Gray">
                    با ما همسفر شوید
                </h2>
                <div>
                    <a href="#" class="torLinks">
                        تورهای یک روزه
                    </a>
                    <a href="#" class="torLinks">
                        تور های چند روزه
                    </a>
                    <a href="#" class="torLinks">
                        تورهای خارجی
                    </a>
                    <a href="#" class="torLinks">
                        نوروز 96
                    </a>
                </div>
                <br/>
            </div>

            <?php

            if (count($normals) == 0) {
                ?>
                <div>
                    هیچ سفری برای نمایش موجود نیست.
                </div>
                <?php
            } else {
                ?>
                <div class="row">
                <?php
                $normalCnt = 1;
                foreach ($normals as $normal) {
                    ?>
                    <div
                        class="trip-list col-md-4 lTrip-no<?php echo ceil($normalCnt / 3); ?>-<?php echo $normalCnt % 3; ?>">
                        <div class="trip-price">
                            <?php echo number_format($normal->price); ?>
                            تومان
                        </div>
                        <div class="trip-title">
                            <?php echo $normal->name; ?>
                        </div>
                        <div class="trip-desc">
                            <?php echo $normal->description; ?>
                        </div>
                        <div class="trip-duration">
                            سفر
                            <?php echo $normal->duration; ?>
                            روزه
                        </div>
                        <div class="trip-icos">
                            <?php
                            foreach ($normal->trip_spec as $spec) {
                                echo "<img src='../assets/img/trip-icos/" . $spec . ".png' data-toggle=\"tooltip\" title=\"سفر نیازمند چمدان است\">";
                            }
                            ?>

                        </div>
                    </div>
                    <?php
                    if ($normalCnt++ == 3) {
                        ?>
                        </div>
                        <div class="row">
                        <?php
                    }
                }
                ?>
                </div>
                <?php
            }

            ?>
        </div>
    </div>

    <!-- ALL TRIPS -->
    <span class="breakPoint" id="sAllTripContainer"></span>
    <div class="bg-lightgray section-xlg">
        <div class="container section Iran-Sans">
            <div class="download" style="text-align: center">
                <div class="btn-group">
                    <button type="button" class="btn btn-success glyphicon glyphicon-list-alt">
                        دریافت لیست سفر ها
                    </button>
                    <button type="button" class="btn btn-success glyphicon glyphicon-cloud-upload   ">
                        به اشتراک بگذارید
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>نام سفر</th>
                            <th>استان</th>
                            <th>تاریخ شروع</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $lists = json_decode(file_get_contents(ServerConf::getHost() . '/tabiat-service/service/trips.php?method=list'));

                        if (count($lists) == 0) {
                            ?>
                            <div>
                                هیچ سفری برای نمایش موجود نیست.
                            </div>
                            <?php
                        } else {
                            foreach ($lists as $list) {
                                ?>
                                <tr>
                                    <td><?php echo $list->name; ?></td>
                                    <td><?php echo $list->province; ?></td>
                                    <td><?php echo $list->date; ?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>

    <!-- EDU -->
    <span class="breakPoint" id="sRiftContainer"></span>
    <div class="section-xlg row Iran-Sans" style="text-align: center">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <img src="../assets/img/slides/780/edu.jpg">
        </div>
        <div class="col-md-4">
            <h1>
                <span class="glyphicon glyphicon-facetime-video"></span>
                همسفر مجازی
            </h1>
            <div>
                <a href="#" class="torLinks">
                    ویدئو
                </a>
                <a href="#" class="torLinks">
                    عکس
                </a>
                <a href="#" class="torLinks">
                    فایل
                </a>
                <a href="#" class="torLinks">
                    اخبار
                </a>
            </div>
            <h3>
                کوه های هزار دره ترکمن صحرا، آشنایی با فرهنگ و اقوام مردم ترکمن صحرا، مقبره ی خالد نبی،
                گورستان سنگی،موسیقی ترکمنی،برج گنبد کاووس،بازدید از مرکز پرورش اسب، جزیره آشوراده، آبشار کبودال، بازار
                بندر ترکمن،
                قایق سواری دریای خزر
            </h3>
            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-2 linksImg links_1_1"></div>
                <div class="col-md-2 linksImg links_1_2"></div>
                <div class="col-md-2 linksImg links_1_3"></div>
                <div class="col-md-2 linksImg links_1_4"></div>
                <div class="col-md-2 linksImg links_1_5"></div>
            </div>
            <div class="row">
                <div class="col-md-2 linksImg links_2_1"></div>
                <div class="col-md-2 linksImg links_2_2"></div>
                <div class="col-md-2 linksImg links_2_3"></div>
                <div class="col-md-2 linksImg links_2_4"></div>
                <div class="col-md-2 linksImg links_2_5"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ebcore Farmework">
    <meta name="author" content="Sajjad Bandezadeh">
    <title>Welcome | Ebcore v1.0.0</title>
    <link rel="stylesheet" href="https://bandezadeh.ir/portfolio/ebcore/assets/css/bootstrap.min.css">
    <script src="https://bandezadeh.ir/portfolio/ebcore/assets/js/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon"
          href="https://raw.githubusercontent.com/sajjadbandezadeh/ebcore-framework/refs/heads/master/logo.svg"/>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext,vietnamese');

        body {
            width: 100%;
            display: block;
            overflow-x: hidden;
            background-color: #1f2029;
            color: #c4c3ca;
            font-family: 'Muli', sans-serif;
        }

        ::selection {
            background-color: #000;
            color: #fff;
        }

        ::-moz-selection {
            background-color: #000;
            color: #fff;
        }

        a:hover {
            text-decoration: none;
        }

        .cursor,
        .cursor2,
        .cursor3 {
            position: fixed;
            border-radius: 50%;
            transform: translateX(-50%) translateY(-50%);
            pointer-events: none;
            left: -100px;
            top: 50%
        }

        .cursor {
            background-color: #fff;
            height: 0;
            width: 0;
            z-index: 99999;
        }

        .cursor2, .cursor3 {
            height: 36px;
            width: 36px;
            z-index: 99998;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out
        }

        .cursor2.hover,
        .cursor3.hover {
            -webkit-transform: scale(2) translateX(-25%) translateY(-25%);
            transform: scale(2) translateX(-25%) translateY(-25%);
            border: none
        }

        .cursor2 {
            border: 2px solid #fff;
            box-shadow: 0 0 22px rgba(255, 255, 255, 0.6);
        }

        .cursor2.hover {
            background: rgba(255, 255, 255, .1);
            box-shadow: 0 0 12px rgba(255, 255, 255, 0.2);
        }

        @media screen and (max-width: 1200px) {
            .cursor, .cursor2, .cursor3 {
                display: none
            }
        }

        .shadow-title {
            position: fixed;
            top: 0;
            margin-top: 30px;
            left: 20px;
            width: 100%;
            height: 300%;
            text-align: left;
            font-family: 'Muli', sans-serif;
            -webkit-writing-mode: vertical-lr;
            writing-mode: vertical-lr;
            font-size: 18vw;
            line-height: 1;
            color: rgba(200, 200, 200, .1);
            background: linear-gradient(90deg, rgba(200, 200, 200, 0), rgba(200, 200, 200, 0.35));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 900;
            z-index: 1;
        }

        .section-parallax {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
            z-index: 2;
        }

        .section {
            position: relative;
            width: 100%;
            display: block;
        }

        .full-height {
            height: 100vh;
        }

        .section.z-bigger {
            z-index: 100;
        }

        .section.z-bigger-2 {
            z-index: 200;
        }

        .section-title-wrap {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            transform: translateY(-50%);
            z-index: 3;
        }

        .section-title-wrap p {
            letter-spacing: 2px;
            font-size: 22px;
            font-weight: 700;
            padding: 0;
            color: #6f598f;
        }

        .section-title-wrap h1 {
            margin: 0;
            padding: 0;
            font-size: 5vw;
            letter-spacing: 0px;
            font-weight: 900;
            color: #fff;
            line-height: 1;
        }

        .padding-top-bottom {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .over-hide {
            overflow: hidden;
        }

        .background-dark {
            background-color: #101010;
        }

        .project-link-wrap {
            position: relative;
            display: block;
            width: 100%;
            text-align: center;
            margin: 0 auto;
            cursor: pointer;
        }

        .project-link-wrap p {
            font-size: 100px;
            line-height: 80px;
            color: #c4c3ca;
            font-weight: 900;
            text-align: center;
            margin: 0 auto;
            cursor: pointer;
            opacity: 0.35;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .project-link-wrap:hover p {
            opacity: 0.15;
        }

        .case-study-wrapper {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 10;
            width: auto;
            margin: 0;
            padding: 8px 15px;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            list-style: none;
            background-color: rgba(31, 32, 41, .8);
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, .8);
        }

        .case-study-wrapper .case-study-name {
            margin: 5px;
            display: inline-block;
        }

        .case-study-wrapper .case-study-name a {
            position: relative;
            list-style: none;
            margin: 0 auto;
            display: block;
            text-align: center;
            padding: 0;
            font-size: 14px;
            font-weight: 800;
            line-height: 1;
            letter-spacing: 2px;
            color: #8e8d9a;
            opacity: 0.5;
            text-decoration: none;
            text-transform: uppercase;
            -webkit-transition: all 300ms linear;
            transition: all 300ms linear;
        }

        .case-study-wrapper .case-study-name a:hover {
            text-decoration: none;
        }

        .case-study-wrapper .case-study-name.active a {
            opacity: 1;
            color: #fff;
        }

        .case-study-images {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            z-index: 2;
        }

        .case-study-images li {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            list-style: none;
            -webkit-transition: all 300ms linear;
            transition: all 300ms linear;
        }

        .case-study-images li .img-hero-background {
            position: absolute;
            width: calc(100% - 80px);
            max-width: 950px;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            top: 50%;
            left: 50%;
            overflow: hidden;
            list-style: none;
            opacity: 0;
            border-radius: 20px;
            box-shadow: 0 0 50px rgba(0, 0, 0, .6);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 300ms linear;
            transition: all 300ms linear;
        }

        .case-study-images li .img-hero-background img {
            width: 100%;
            height: auto;
            display: block;
        }

        .case-study-images li.show .img-hero-background {
            opacity: 1;
        }

        .case-study-images li .case-study-title {
            position: absolute;
            top: 0;
            height: 100%;
            text-align: center;
            left: 30px;
            display: block;
            opacity: 0;
            z-index: 19;
            letter-spacing: 1px;
            font-size: 14px;
            -webkit-writing-mode: vertical-lr;
            writing-mode: vertical-lr;
            font-weight: 400;
            line-height: 16px;
            color: #fff;
            font-style: italic;
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            -webkit-transition: all 300ms linear;
            transition: all 300ms linear;
        }

        .case-study-images li.show .case-study-title {
            opacity: 1;
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }

        .case-study-images li .hero-number-back {
            position: absolute;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            display: block;
            list-style: none;
            opacity: 0;
            font-size: 100px;
            font-weight: 900;
            line-height: 1;
            color: rgba(255, 255, 255, .2);
            z-index: 5;
            -webkit-transition: all 300ms linear;
            transition: all 300ms linear;
        }

        .case-study-images li .hero-number {
            position: absolute;
            bottom: 40px;
            left: 50%;
            width: 40px;
            margin-left: -70px;
            display: block;
            letter-spacing: 2px;
            text-align: center;
            list-style: none;
            opacity: 0;
            font-size: 13px;
            font-weight: 300;
            line-height: 1;
            color: #fff;
            z-index: 6;
            -webkit-transform: translateY(100%);
            transform: translateY(100%);
            -webkit-transition: all 300ms linear;
            transition: all 300ms linear;
        }

        .case-study-images li .hero-number-fixed {
            position: absolute;
            bottom: 40px;
            left: 50%;
            margin-left: 30px;
            width: 40px;
            text-align: center;
            display: block;
            letter-spacing: 2px;
            list-style: none;
            font-size: 13px;
            font-weight: 300;
            line-height: 1;
            color: #fff;
            z-index: 6;
        }

        .case-study-images li .hero-number-fixed:before {
            position: absolute;
            content: '';
            top: 50%;
            left: -60px;
            width: 60px;
            height: 1px;
            z-index: 1;
            background-color: rgba(255, 255, 255, .4);
        }

        .case-study-images li.show .hero-number {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .case-study-images li.show .hero-number-back {
            opacity: 1;
        }

        .scroll-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            opacity: 0;
            visibility: hidden;
            width: 10px;
            height: 40px;
            z-index: 251;
            background-repeat: no-repeat;
            background-position: top center;
            background-size: 10px 40px;
            cursor: pointer;
            background-image: url('https://bandezadeh.ir/portfolio/ebcore/assets/img/arrow-up.png');
            transform: translateY(-15px);
            -webkit-transition: all 250ms linear;
            transition: all 250ms linear;
        }

        .scroll-to-top:hover {
            bottom: 32px;
        }

        .scroll-to-top.active-arrow {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        @media (max-width: 1200px) {
            .scroll-to-top {
                right: 13px;
            }

            .case-study-images li .case-study-title {
                left: 13px;
            }
        }

        @media (max-width: 991px) {
            .case-study-images li .hero-number-back {
                font-size: 26vw;
            }
        }

        @media (max-width: 767px) {
            .case-study-wrapper {
                background-color: rgba(31, 32, 41, .95);
                box-shadow: 0 0 10px rgba(0, 0, 0, .8);
            }

            .case-study-wrapper .case-study-name a {
                font-size: 11px;
                letter-spacing: 1px;
                text-align: center;
                margin: 5px;
            }

            .case-study-wrapper .case-study-name {
                margin: 0 auto;
                text-align: center;
            }

            .case-study-images li .hero-number-back {
                font-size: 32vw;
            }
        }

        .link-to-portfolio {
            position: fixed;
            top: 30px;
            right: 30px;
            z-index: 20;
            cursor: pointer;
            width: 40px;
            height: 40px;
            text-align: center;
            border-radius: 3px;
            background-position: center center;
            background-size: cover;
            background-image: url('https://raw.githubusercontent.com/sajjadbandezadeh/ebcore-framework/refs/heads/master/logo.svg');
            box-shadow: 0 0 0 2px rgba(255, 255, 255, .1);
            transition: opacity .2s, border-radius .2s, box-shadow .2s;
            transition-timing-function: ease-out;
        }

        .link-to-portfolio:hover {
            opacity: 0.8;
            border-radius: 50%;
            box-shadow: 0 0 0 20px rgba(255, 255, 255, .1);
        }
    </style>

</head>
<body>
<div style="position: absolute; left: 0;top: 0; padding:3px; border-radius: 7px; background-color: black;color: #8ffd45; font-size: 10px; margin: 4px">
    version 1.0.0 (lastest release)
</div>
<div style="z-index: 500;position: fixed; left: 0;bottom: 0; padding:4px; border-radius: 5px; background-color: black;color: white; font-size: 11.5px;">
    <?php
    function echo_memory_usage() {
        $mem_usage = memory_get_usage(false);
        if ($mem_usage < 1024)
            echo $mem_usage." bytes";
        elseif ($mem_usage < 1048576)
            echo round($mem_usage/1024,2)." kilobytes";
        else
            echo round($mem_usage/1048576,2)." megabytes";
    }
    ?>
    <b>OS : </b><?php echo php_uname('s'); ?>
    <b> | Hostname :</b> <?php echo php_uname('n'); ?>
    <b> | Memory :</b> <?php echo echo_memory_usage(); ?>
    <b> | Host :</b> <?php echo $_SERVER["HTTP_HOST"] ?>
    <b> | Database : <?php try { ebcore\framework\DB\Model::getConnection(); echo "<span style='color: greenyellow'>Connected</span>"; } catch (Exception $e) { echo "<span style='color: red'>Not Connected</span>"; } ?></b>
</div>
<div class="shadow-title parallax-top-shadow">Ebcore</div>
<div class="section-parallax parallax-00"
     style="background-image: url('http://www.ivang-design.com/svg-load/parallax/parallax-0.png');"></div>
<div class="section-parallax parallax-01"
     style="background-image: url('http://www.ivang-design.com/svg-load/parallax/parallax-01.png');"></div>

<div class="section full-height">
    <div class="section-title-wrap">
        <div class="container">
            <div class="row">
                <div class="col-6 text-center parallax-fade-top mt-5 pt-5">
                    <p style="text-align: left">inspired by Entity-Based architecture</p>
                    <h1 style="text-align: left;font-size: 3vw">Ebcore <br>PHP Framework</h1>
                </div>
                <div class="col-6 text-center parallax-fade-top">
                <pre style="text-align: left; color: white;
                 background-color: rgba(31,32,41,0.42);
                 background: rgba(31,32,41,0.2);
                 border-radius: 16px;
                 box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                 backdrop-filter: blur(5px);
                 -webkit-backdrop-filter: blur(5px);">
                    my-project/
                    ├── app/
                    │   └── entities/
                    │       └── User/
                    │           ├── Controllers/
                    │           │   └── UserController.php
                    │           ├── Events/
                    │           │   └── UserRegisterEvent.php
                    │           └── Middlewares/
                    │               └── PermissionMiddleware.php
                    ├── config/
                    │   ├── app.json
                    │   ├── database.json
                    │   └── middleware.json
                    ├── public/
                    │   ├── .htaccess
                    │   └── index.php
                    ├── routes/
                    │   └── web.php
                    └── vendor/
                        └── ebcore/
                            ├── Core/
                            ├── Middlewares/
                            └── Packages/
                </pre>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section full-height z-bigger">
    <ul class="case-study-wrapper" style="margin-top: 40px !important;">
        <li class="case-study-name">
            <a href="https://bandezadeh.ir/portfolio/ebcore/docs/index.html#entity" class="hover-target">Entity-Based</a>
        </li>
        <li class="case-study-name">
            <a href="https://bandezadeh.ir/portfolio/ebcore/docs/index.html#routes" class="hover-target">Routes</a>
        </li>
        <li class="case-study-name">
            <a href="https://bandezadeh.ir/portfolio/ebcore/docs/index.html#middleware" class="hover-target">Middlewares</a>
        </li>
        <li class="case-study-name">
            <a href="https://bandezadeh.ir/portfolio/ebcore/docs/index.html#events" class="hover-target">Events</a>
        </li>
    </ul>
    <ul class="case-study-images">
        <li>
            <div class="img-hero-background" style="position: relative; align-items: center">
                <img src="https://bandezadeh.ir/portfolio/ebcore/assets/img/1.png" alt="">
            </div>
            <div class="hero-number-back">01</div>
            <div class="hero-number">01</div>
            <div class="hero-number-fixed">04</div>
            <div class="case-study-title">Entity-Based Architecture</div>
        </li>
        <li>
            <div class="img-hero-background" style="position: relative; align-items: center">
                <img src="https://bandezadeh.ir/portfolio/ebcore/assets/img/2.png" alt="">
            </div>
            <div class="hero-number-back">02</div>
            <div class="hero-number">02</div>
            <div class="case-study-title">Modern Routing System</div>
        </li>
        <li>
            <div class="img-hero-background" style="position: relative; align-items: center">
                <img src="https://bandezadeh.ir/portfolio/ebcore/assets/img/3.png" alt="">
            </div>
            <div class="hero-number-back">03</div>
            <div class="hero-number">03</div>
            <div class="case-study-title">Powerful Middleware System</div>
        </li>
        <li>
            <div class="img-hero-background" style="position: relative; align-items: center">
                <img src="https://bandezadeh.ir/portfolio/ebcore/assets/img/4.png" alt="">
            </div>
            <div class="hero-number-back">04</div>
            <div class="hero-number">04</div>
            <div class="case-study-title">Event System</div>
        </li>
    </ul>
</div>

<div class="section padding-top-bottom over-hide background-dark z-bigger-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <a href="https://bandezadeh.ir/portfolio/ebcore/docs/index.html" class="hover-target">
                    <div class="project-link-wrap">
                        <p>Documnents</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="scroll-to-top hover-target"></div>
<div class='cursor' id="cursor"></div>
<div class='cursor2' id="cursor2"></div>
<div class='cursor3' id="cursor3"></div>

<a href="https://bandezadeh.ir/portfolio/ebcore/" class="link-to-portfolio hover-target" target=”_blank”></a>
<script>
    (function ($) {
        "use strict";

        function scrollBanner() {
            $(document).on('scroll', function () {
                var scrollPos = $(this).scrollTop();
                $('.parallax-fade-top').css({
                    'top': (scrollPos / 2) + 'px',
                    'opacity': 1 - (scrollPos / 700)
                });
                $('.parallax-00').css({
                    'top': (scrollPos / -3.5) + 'px'
                });
                $('.parallax-01').css({
                    'top': (scrollPos / -2.8) + 'px'
                });
                $('.parallax-top-shadow').css({
                    'top': (scrollPos / -2) + 'px'
                });
            });
        }

        scrollBanner();
        document.getElementsByTagName("body")[0].addEventListener("mousemove", function (n) {
            t.style.left = n.clientX + "px",
                t.style.top = n.clientY + "px",
                e.style.left = n.clientX + "px",
                e.style.top = n.clientY + "px",
                i.style.left = n.clientX + "px",
                i.style.top = n.clientY + "px"
        });
        var t = document.getElementById("cursor"),
            e = document.getElementById("cursor2"),
            i = document.getElementById("cursor3");

        function n(t) {
            e.classList.add("hover"), i.classList.add("hover")
        }

        function s(t) {
            e.classList.remove("hover"), i.classList.remove("hover")
        }

        s();
        for (var r = document.querySelectorAll(".hover-target"), a = r.length - 1; a >= 0; a--) {
            o(r[a])
        }

        function o(t) {
            t.addEventListener("mouseover", n), t.addEventListener("mouseout", s)
        }

        $(document).ready(function () {
            var offset = 300;
            var duration = 400;
            jQuery(window).on('scroll', function () {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.scroll-to-top').addClass('active-arrow');
                } else {
                    jQuery('.scroll-to-top').removeClass('active-arrow');
                }
            });
            jQuery('.scroll-to-top').on('click', function (event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, duration);
                return false;
            })
            $('.case-study-name:nth-child(1)').on('mouseenter', function () {
                $('.case-study-name.active').removeClass('active');
                $('.case-study-images li.show').removeClass("show");
                $('.case-study-images li:nth-child(1)').addClass("show");
                $('.case-study-name:nth-child(1)').addClass('active');
            })
            $('.case-study-name:nth-child(2)').on('mouseenter', function () {
                $('.case-study-name.active').removeClass('active');
                $('.case-study-images li.show').removeClass("show");
                $('.case-study-images li:nth-child(2)').addClass("show");
                $('.case-study-name:nth-child(2)').addClass('active');
            })
            $('.case-study-name:nth-child(3)').on('mouseenter', function () {
                $('.case-study-name.active').removeClass('active');
                $('.case-study-images li.show').removeClass("show");
                $('.case-study-images li:nth-child(3)').addClass("show");
                $('.case-study-name:nth-child(3)').addClass('active');
            })
            $('.case-study-name:nth-child(4)').on('mouseenter', function () {
                $('.case-study-name.active').removeClass('active');
                $('.case-study-images li.show').removeClass("show");
                $('.case-study-images li:nth-child(4)').addClass("show");
                $('.case-study-name:nth-child(4)').addClass('active');
            })
            $('.case-study-name:nth-child(1)').trigger('mouseenter')
        });
    })(jQuery);
</script>
</body>
</html>
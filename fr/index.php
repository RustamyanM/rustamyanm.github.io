<?php
require(__DIR__ . '/../includes/language.php');
switch (get_browser_language('en')) {
    case'en':
       // header('location: /');
        break;
    default:
}
?><!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
    <title>CAPSA | ACEPA</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/styles/framework.css">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/fonts/css/fontawesome-all.min.css">

    <script type="text/javascript" src="/scripts/languagedetect.js"></script>
    <script>
        if('serviceWorker' in navigator) {


            navigator.serviceWorker
                .register('/sw.js')
                .then(function() { console.log("Service Worker Registered 22"); });
        }
    </script>
    <!-- Bootstrap core CSS-->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <!-- <link href="https://card.ingeniousmedia.ca/capsa/css/main.css" rel="stylesheet"> -->
    <link href="/css/main.css" rel="stylesheet">
    <meta name="chromesniffer" id="chromesniffer_meta"
          content="{&quot;jQuery&quot;:&quot;2.1.0&quot;,&quot;Bootstrap&quot;:-1}">
    <!-- <script type="text/javascript" src="chrome-extension://fhhdlnnepfjhlhilgmeepgkhjmhhhjkh/js/detector.js"></script>    -->

    <link rel="stylesheet" href="/web/viewer.css">

</head>

<body class="theme-light" data-background="none" data-highlight="blue2" style="background-color:#173152">
<a id="opener">
    <div id="page">

        <div id="page-preloader">
            <div class="loader-main">
                <div class="preload-spinner border-highlight"></div>
            </div>
        </div>

        <div id="footer-menu" class="footer-menu-5-icons footer-menu-style-1">
            <a href="/fr" class="active-nav"><i class="fa fa-home"></i><span>Accueil</span></a>
            <a href="tel:1-613-686-6657"><i class="fa fa-phone"></i><span>Tél</span></a>
            <a href="mailto:info@capsa.ca"><i class="fa fa-envelope"></i><span>Courriel</span></a>
            <a href="https://capsa.ca"><i class="fa fa-globe-americas"></i><span>Web</span></a>
            <a href="https://www.canadahelps.org/en/dn/31324"><i class="fa fa-donate"></i><span>Don</span></a>
            <div class="clear"></div>
        </div>

        <div class="page-content header-clear-small">
        <a href="/" class="switchlang" data-id="en" style="color:#ffffff;font-size:0.8em;text-align:right;position:absolute;top:2px;right:15px;"><span>english</span></a>
        <div class="owl-stage-outer top-5">    
            <div class="single-slider owl-carousel owl-dots owl-loaded owl-drag">
                <div data-height="150" class="caption caption-margins">
                    <div class="caption-center right-10 top-60 text-right">
                        <!-- <div class="back-button button button-xs button-border">
                            <a style="color:#FFFFFF;" href="#" data-menu="menu-share-list">
                                <span>Activités</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div> -->
                    </div>

                    <div class="caption-top top-10 left-15 text-left">
                        <h1 class="color-white bolder"><?php echo mb_strtoupper('jour de récupération') ?></h1>
                        <p class="under-heading color-white opacity-90 bottom-0">
                            OTTAWA
                        </p>
                    </div>
                    <div class="caption-overlay bg-black opacity-50"></div>
                    <div class="caption-bg bg-recovery-day"></div>
                </div>
                <div data-height="150" class="caption caption-margins">
                    <div class="caption-center right-10 top-60 text-right">
                        <div class="back-button button button-xs button-border">
                            <a style="color:#FFFFFF;" href="https://streamable.com/g0gb2">
                                <span>VISIONNER</span>
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="caption-top top-10 left-15 text-left">
                        <h1 class="color-white bolder">ACEPA Vidéo</h1>                        
                    </div>
                    <div class="caption-overlay bg-black opacity-50"></div>
                    <div class="caption-bg bg-acepa"></div>
                </div>
            </div>
        </div>


            <div class="content">
                <div class="one-half">
                    <!-- <a href="/images/docs/changing-talk.pdf" data-height="220" class="caption round-tiny shadow-tiny bottom-20"> -->
                    <!-- <a href="web/pdf1.html" data-height="160" class="caption shadow-tiny bottom-20">                         -->
                    <a href="/fr/doc6.html" data-height="160" class="caption shadow-tiny bottom-20">
                        <div class="caption-center center-text">
                            <i class="fa fa-mobile-alt fa-3x color-theme-blue top-30 bottom-10"></i>
                            <h3 class="color-theme bolder bottom-0">La Façon</h3>
                            <p class="color-highlight-blue under-heading bottom-50 font-12">Changer la façon de parler.</p>
                        </div>
                        <div class="caption-bottom center-text">
                            <p class="bottom-10 font-11 color-theme-orange">Appuyez pour lire</p>
                        </div>
                        <div class="caption-overlay bg-theme"></div>
                    </a>
                </div>
                <div class="one-half last-column">
                    <a href="/fr/doc7.html" data-height="160" class="caption shadow-tiny bottom-20">
                        <div class="caption-center center-text">
                            <i class="fa fa-file fa-3x color-theme-blue top-30 bottom-10"></i>
                            <h3 class="color-theme bolder bottom-0">Les Données</h3>
                            <p class="color-highlight-blue under-heading bottom-50 font-12">Les préjudicees sont réels.</p>
                        </div>
                        <div class="caption-bottom center-text">
                            <p class="bottom-10 font-11 color-theme-orange">Appuyez pour lire</p>
                        </div>
                        <div class="caption-overlay bg-theme"></div>
                    </a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="content">
                <div class="">
                    <a href="/fr/doc3.html" data-height="160" class="caption shadow-tiny bottom-20">
                        <div class="caption-center center-text">
                            <i class="fa fa-camera fa-3x color-theme-blue top-30 bottom-10"></i>
                            <h3 class="color-theme bolder bottom-0">Reflection (Anglais)</h3>
                            <p class="color-highlight-blue under-heading bottom-50 font-12">A stigma self-reflection tool.</p>
                        </div>
                        <div class="caption-bottom center-text">
                            <p class="bottom-10 font-11 color-theme-orange">Appuyez pour lire</p>
                        </div>
                        <div class="caption-overlay bg-theme"></div>
                    </a>
                </div>
                <!-- <div class="one-half last-column">
                    <a href="web/pdf4.html" data-height="160" class="caption shadow-tiny bottom-20">
                        <div class="caption-center center-text">
                            <i class="fa fa-bars fa-3x color-theme-blue top-30 bottom-10"></i>
                            <h3 class="color-theme bolder bottom-0">Stigma</h3>
                            <p class="color-highlight-blue under-heading bottom-50 font-12">A training tool.</p>
                        </div>
                        <div class="caption-bottom center-text">
                            <p class="bottom-10 font-11 color-theme-orange">Tap to View</p>
                        </div>
                        <div class="caption-overlay bg-theme"></div>
                    </a>
                </div> -->
            </div>
            <div class="clear"></div>
            <!-- <div class="content-boxed">
                <div class="footer">

                    <div class="footer-socials">
                        <a href="/switch.php?lang=en" class="round-tiny shadow-medium bg-facebook">
                            <div class="flag flag-us"></div>
                        </a>
                        <a href="/switch.php?lang=fr" class="round-tiny shadow-medium bg-twitter">
                            <div class="flag flag-fr"></div>
                        </a>

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div> -->
                <div class="menu-hider"></div>
            </div>
            <div id="menu-share-list"
                 class="menu menu-box-modal round-medium"
                 data-menu-width="310"
                 data-menu-height="270"
                 data-menu-effect="menu-over">
                <div class="link-list link-list-1 content bottom-0">
                    <a href="#">
                        <i class="font-18 fa fa-hands-helping"></i>
                        <span class="font-13">10:00 AM | Workshop 1: Title 1</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="font-18 fas fa-dna"></i>
                        <span class="font-13">11:35 AM | Workshop 2: Title 2</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="font-18 fa fa-heart"></i>
                        <span class="font-13">12:06 PM | Chocolate Bars: Yummy</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="font-18 fa fa-gift"></i>
                        <span class="font-13">2:00 PM | Sponsors 1</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="font-18 fas fa-user-plus"></i>
                        <span class="font-13">4:00 PM | Networking</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>


        <script type="text/javascript" src="/scripts/jquery.js"></script>
            <script type="text/javascript" src="/scripts/plugins.js"></script>
            <script type="text/javascript" src="/scripts/custom.js"></script>

            <script>
                var a = document.getElementById('opener'), w;
                a.onclick = function () {
                    if (!w || w.closed) {
                        w = window.open("https://www.google.com", "_blank", "menubar=0,scrollbars=0");
                    } else {
                        console.log('window is already opened');
                    }
                    w.focus();
                };
            </script>
</a>
</body>
</html>

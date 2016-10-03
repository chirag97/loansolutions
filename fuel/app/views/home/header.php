<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">

        <title>Homepage</title>
        <link rel="icon" href="favicon.png" type="image/png">
        <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

        <?php
        echo \Fuel\Core\Asset::css(array('bootstrap.css', 'style.css', 'font-awesome.css', 'responsive.css', 'animate.css',
            'unslider.css', 'unslider-dots.css'));
        ?>


        <style>
            .mortgageform>label>input
            {
                color: red;
            }


            /* ABSOLUTE / FIXED FORM DIVS */

            #instant-callback-div {
                font-family: "Open Sans", Arial, sans-serif;
                padding: 0 0 24px;
                position: fixed;
                right: -246px;
                top: 40%;
                vertical-align: top;
                z-index: 300;
            }

            #instant-callback-div .instant-switch {
                /*background: #fff url("../..//..//..//assets/img/Portfolio-pic3.jpg") no-repeat scroll 0 0;*/
                box-shadow: -2px 2px 2px -2px rgba(0, 0, 0, 0.33), -1px -2px 2px -2px rgba(0, 0, 0, 0.19);
                cursor: pointer;
                display: inline-block;
                height: 184px;
                position: relative;
                vertical-align: top;
                width: 36px;
            }

            #instant-callback-div .content-switcher {
                background-color: #e7e7e7;
                border: 3px solid #fff;
                border-bottom-left-radius: 6px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.33);
                display: inline-block;
                margin: 0 0 0 -7px;
                padding: 0 16px 12px;
                vertical-align: top;
                width: 245px;
                font-family: "Raleway";
            }

            #instant-callback-div h4 {
                box-shadow: 0 -1px rgba(147, 147, 147, 0.35) inset;
                border-bottom: 1px solid #fff;
                margin-bottom: 20px;
                padding-bottom: 15px;
                padding-top: 5px;
            }

            #instant-callback-div p {
                margin: 5px 0 !important;
                padding: 4px 0;
            }

            #instant-callback-div input[type="submit"] {
                width: 95%;
            }

            #instant-callback-div input:not([type="submit"]) {
                box-shadow: 1px 1px 3px #777 inset;
                border-radius: 3px;
            }

            #instant-callback-div input {
                display: block;
                width: 95%;
                margin: 6px 0 0 0;
                border: 1px solid #CCC;
                padding: 6px 10px;
            }

            /* FF browser specific css hack. More Details: http://www.webmonkey.com/2010/02/browser-specific_css_hacks/#Firefox */
            @-moz-document url-prefix() {
                #instant-callback-div .intl-tel-input, x:-moz-any-link, x:default {
                    margin-top: 8px;
                    margin-bottom:-4px;
                }
            }

            #instant-callback-div .intl-tel-input {    
                margin-top:6px;
                width:96%;
            }
            #instant-callback-div .intl-tel-input .flag-container{
                top:-5px;
            }
            #instant-callback-div .intl-tel-input input[name="mobile"]{    
                padding-left:42px;
                width:99%;
                /*margin-bottom:6px !important;*/
            }

            /* ABSOLUTE / FIXED FORM DIVS */

            #instant-callback-div {
                font-family: "Open Sans", Arial, sans-serif;
                padding: 0 0 24px;
                position: fixed;
                right: -246px;
                top: 40%;
                vertical-align: top;
                z-index: 300;
            }

            #instant-callback-div .instant-switch {
                background: #fff url("assets/img/handle.png") no-repeat scroll 0 0;
                box-shadow: -2px 2px 2px -2px rgba(0, 0, 0, 0.33), -1px -2px 2px -2px rgba(0, 0, 0, 0.19);
                cursor: pointer;
                display: inline-block;
                height: 184px;
                position: relative;
                vertical-align: top;
                width: 36px;
            }

            #instant-callback-div .content-switcher {
                background-color: #e7e7e7;
                border: 3px solid #fff;
                border-bottom-left-radius: 6px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.33);
                display: inline-block;
                margin: 0 0 0 -7px;
                padding: 0 16px 12px;
                vertical-align: top;
                width: 245px;
                font-family: "Raleway";
            }

            #instant-callback-div h4 {
                box-shadow: 0 -1px rgba(147, 147, 147, 0.35) inset;
                border-bottom: 1px solid #fff;
                margin-bottom: 20px;
                padding-bottom: 15px;
                padding-top: 5px;
            }

            #instant-callback-div p {
                margin: 5px 0 !important;
                padding: 4px 0;
            }

            #instant-callback-div input[type="submit"] {
                width: 95%;
            }

            #instant-callback-div input:not([type="submit"]) {
                box-shadow: 1px 1px 3px #777 inset;
                border-radius: 3px;
            }

            #instant-callback-div input {
                display: block;
                width: 95%;
                margin: 6px 0 0 0;
                border: 1px solid #CCC;
                padding: 6px 10px;
            }

            .read-more-state {
                display: none;
            }

            .read-more-target {
                opacity: 0;
                max-height: 0;
                font-size: 0;
                transition: .25s ease;
            }

            .read-more-state:checked ~ .read-more-wrap .read-more-target {
                opacity: 1;
                font-size: inherit;
                max-height: 999em;
            }

            .read-more-state ~ .read-more-trigger:before {
                content: 'Read more';
            }

            .read-more-state:checked ~ .read-more-trigger:before {
                content: 'Read less';
            }

            .read-more-trigger {
                cursor: pointer;
                display: inline-block;
                padding: 0 .5em;
                color: #666;
                font-size: .9em;
                line-height: 2;
                border: 1px solid #ddd;
                border-radius: .25em;
            }

            .loanlogo
            {
                height: 70px !important;
                width: 100px !important;

            }


        </style>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->
        <?php
        echo \Fuel\Core\Asset::js(array('jquery.1.8.3.min.js', 'bootstrap.js', 'jquery-scrolltofixed.js',
            'jquery.easing.1.3.js', 'jquery.isotope.js', 'wow.js', 'classie.js', 'http://cdn.mlcalc.com/widget-api.js', 'unslider-min.js'));
        ?>

        <!--[if lt IE 9]>
            <script src="js/respond-1.1.0.min.js"></script>
            <script src="js/html5shiv.js"></script>
            <script src="js/html5element.js"></script>
        <![endif]-->



        <script type="text/javascript">
            $(window).load(function () {
                $('#myModal').modal('show');
            });
        </script>
    </head>
    <body>
        <div style="overflow:hidden;">
            <header class="header" id="header"><!--header-start-->
                <div class="container">
                    <figure class="logo animated fadeInDown delay-07s">
                        <a href="#"><img src="assets/img/loansolutions_logo.png" alt=""></a>	
                    </figure>	
                    <h1 class="animated fadeInDown delay-07s">Welcome To loansolutions</h1>
                    <ul class="we-create animated fadeInUp delay-1s">
                        <li>The road to easier loan begins here...</li>
                    </ul>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg link fadeInUp delay-1s" data-toggle="modal" data-target="#LoanModal">
                        Home Loan
                    </button>      
                    <button type="button" class="btn btn-primary btn-lg link fadeInUp delay-1s" data-toggle="modal" data-target="#MortgageModal">
                        Mortgage Loan
                    </button>      
                </div>
        </div>
    </header><!--header-end-->


    <nav class="main-nav-outer" id="test"><!--main-nav-start-->
        <div class="container">
            <ul class="main-nav">
                <li><a href="#header">Home</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#bankrates">Bank Rates</a></li>
                <li class="small-logo"><a href="#header"><img class="loanlogo" src="assets/img/loansolutions_logo.png" alt=""></a></li>
                <li><a href="#client">Clients</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
        </div>
    </nav><!--main-nav-end-->



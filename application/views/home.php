<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title ?>
    </title>

    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- cdn bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        html {
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        p {
            font-size: 0.9rem;
            line-height: 1.6;
            font-weight: 400;
            color: #606060;
        }

        .extradiv h2,
        .servicediv h2 {
            font-size: 0.9rem;
            margin: 20px 0 15px 0;
            font-weight: bold;
            line-height: 1.1;
            word-spacing: 4px;
        }

        i {
            color: #2fccd0;
        }

        /* XXXXXXXXXXXXXXXXXXXXX common style ends here XXXXXXXXXXXXXXXXXXX */
        .header {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0, 168, 255, 0.3), rgba(0, 168, 255, 0.3)), url("../image/header-bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            clip-path: polygon(100% 0, 100% 77%, 50% 100%, 0 75%, 0 0);
            position: relative;
        }

        .header::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0.4;
            z-index: -1;
            background: linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%);
        }

        .navbar::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0.4;
            z-index: -1;
            background: linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%);
        }

        .nav-item a {
            color: #fff !important;
            font-weight: bold;
        }

        .header-section {
            width: 100%;
            height: inherit;
            color: #fff;
            text-align: center;
            position: relative;
        }

        .center-div {
            position: absolute;
            width: 100%;
            height: auto;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
        }

        .header-buttons a {
            border: 1px solid #fff;
            border-radius: 100px;
            margin: 0 5px;
            padding: 12px 35px;
            outline: none;
            color: #fff;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.4;
            text-align: center;
        }

        .header-buttons a:hover {
            text-decoration: none;
            color: #50d1c0;
            background-color: #fff;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
        }

        .center-div p {
            font-size: 1.3rem;
            padding: 10px 0 20px 0;
            color: #fff;
        }

        /* ********************* three extra header div starts ******************** */

        .header-extradiv {
            width: 100%;
            height: auto;
            margin: 100px 0;
            text-align: center;
        }

        .extradiv p {
            text-align: justify;
        }

        .extradiv {
            background-color: #fff;
            border: none;
            padding: 30px !important;
            border-radius: 3px;
            transition: 0.3s;
        }

        .extradiv:hover {
            box-shadow: -10px 0px 20px 0 rgba(0, 0, 0, 0.3);
            transform: translateY(-20px);
        }

        /* ********************* three extra header div ends ******************** */

        /* ******************* service offer css start ********************** */

        .serviceoffers {
            background-color: #f7f7f9;
            padding: 50px 0;
            margin-bottom: 50px;
        }

        .headings {
            margin-bottom: 50px;
        }

        .headings h1 {
            font-size: 1.5rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .names h1 {
            color: #2e2e2e;
            font-size: 0.9rem;
            text-transform: uppercase;
            font-weight: bold;
        }

        .service-icons {

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .progress {
            height: 0.6rem !important;
            margin-bottom: 25px !important;
        }

        /* ******************* service offer css ends ********************** */

        /* ********************* project (completed) starts ****************************** */

        .project-work {
            margin: 100px 0;
        }

        .project-work h1 {
            font-size: 2rem;
            text-align: center;
        }

        /* ********************* project (completed) ends ****************************** */

        /* ********************* our pricing starts ******************************  */

        .pricing {
            width: 100%;
            height: 100vh;
            padding: 50px;
            position: relative;
        }

        .pricing::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
            background: linear-gradient(160deg, #16c9f6 55%, #fff 0%);
        }

        .money {
            font-size: 40px;
            line-height: 1;
            color: #606060;
        }

        .card {
            transition: 0.4s ease;

        }

        .card-header {
            font-size: 1.6rem;
            font-weight: bold;
            background: #fff !important;
            padding: 25px 0 !important;
        }

        .card-body {
            padding: 30px 0 !important;
        }

        .card-body li {
            margin: 10px 0;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.6;
            color: #606060;
        }

        .card-footer {
            background: #fff !important;
            padding: 30px 0 !important;
        }

        .card-footer a {
            border: 1px solid #50c1d0;
            border-radius: 100px;
            margin: 0 5px;
            padding: 12px 35px;
            outline: none;
            color: #50d1c0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.4;
            text-align: center;
        }

        .card:hover .card-footer a {
            text-decoration: none;
            color: #fff;
            background-color: #50d1c0;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
        }

        .card:hover {
            transform: translateY(-20px);
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
        }

        .card:hover .card-header,
        .card:hover .money {
            color: #50d1c0;
        }

        .card-second {
            transform: translateY(-20px);
            /* box-shadow: 0 0 20px 0 rgba(0,0,0,0.3); */
        }

        /* ********************* our pricing ends ****************************** */


        /* ********************* our happy clients starts ******************************  */

        .happyclients {
            width: 100%;
            height: 100vh;
            padding: 80px 0;
        }

        .box {
            text-align: center;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
            border-radius: 2px;
            transition: 0.3s ease;
        }

        .box:hover {
            background: #16c9f6;
        }

        .box:hover p {
            color: #fff;
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: -60px !important;
        }

        .carousel-indicators li {
            background-color: #16c9f6 !important;
        }

        .box a {
            position: relative;
        }

        .box a img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-top: 20px;
        }

        .box a::after {
            content: "\f10d";
            font-family: FontAwesome;
            width: 40px;
            height: 40px;
            background: linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%);
            color: #fff;
            position: absolute;
            top: 120%;
            left: 70%;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box h1 {
            font-size: 18px;
            font-weight: 700;
            color: #000;
            margin-bottom: 10px;
        }

        .box h2 {
            font-size: 13px;
            font-weight: 400;
            color: #666666;
            margin-bottom: 20px;
        }

        /* ********************* our happy clients ends ******************************  */


        /* ********************* contact us starts ******************************  */

        .contactus {
            width: 100%;
            height: 100vh;
            padding: 80px 0;
            position: relative;
        }

        .contactus::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
            background: linear-gradient(330deg, #16c9f6 55%, #fff 0%);
        }

        .form-button button {
            border: 1px solid #50c1d0;
            border-radius: 100px;
            margin: 0 5px;
            padding: 12px 35px;
            outline: none;
            color: #50d1c0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.4;
            text-align: center;
            background: transparent;
        }

        form:hover .form-button button {
            background: #fff;
            color: #50d1c0;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
        }

        ::placeholder {
            font-size: 0.85rem;
        }

        /* ********************* contact us ends ******************************  */

        /* ********************* newsletter starts ****************************** */

        .newsletter {
            width: 100%;
            height: auto;
            margin: 80px 0;
        }

        .newsletter-input {
            border-radius: 100px 0px 0px 100px !important;
            min-width: 150px;
            min-height: 45px;
        }

        .input-group-text {
            color: #fff !important;
            background: #5bc0de !important;
            border-radius: 0 100px 100px 0 !important;
            min-width: 130px;
            min-height: 45px;
        }

        .input-group-text:hover {
            cursor: pointer;
            opacity: 0.8;
        }

        /* *********************  newsletter ends ****************************** */

        /* *********************  footer starts ****************************** */

        .footersection {
            width: 100%;
            height: auto;
            padding: 70px 0 20px 0;
            background: #00abff;
            position: relative;
        }

        .footersection p {
            color: #fff;
        }

        .footer-navlinks {
            text-align: center;
        }

        .footersection li a {
            font-size: 0.9rem;
            line-height: 1.6;
            font-weight: 400;
            color: #fff;
            text-transform: capitalize;
        }

        .footersection h3 {
            text-transform: uppercase;
            color: #fff;
            margin-bottom: 25px;
            font-size: 1.2rem !important;
            font-weight: 600;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
        }

        #myBtn {
            /* display: none; */
            position: fixed;
            bottom: 20px;
            right: 40px;
            z-index: 10;
            border: none;
            color: #fff;
            background: #00abff;
            padding: 10px;
            border-radius: 10px;
        }

        #myBtn:hover {
            background: #606060;
        }

        /* *********************  footer ends ****************************** */


        /* ****************** Media Queries ********************** */
        @media (max-width: 768px) {
            .nav-item {
                text-align: center !important;
            }

            .pricing,
            .happyclients,
            .contactus {
                height: auto;
                margin-top: 50px;
            }

            .card-second {
                transform: translateY(0px);
                margin: 30px 0;
            }

            .contactus p {
                padding: 0 50px;
            }

            .footer-navlinks {
                text-align: left;
            }

            .footer-div {
                margin: 30px 0;
            }
        }
    </style>
</head>

<body>

    <div class="header" id="topheader">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container text-uppercase p-2">
                <a class="navbar-brand font-weight-bold text-white" href="#">WEBSITE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicediv">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricingdiv">Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#newsletterdiv">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactdiv">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="header-section">
            <div class="center-div">
                <h1 class="font-weight-bold">Welcome to Codeigniter 3</h1>
                <p>We creates the world best websites</p>
                <div class="header-buttons">
                    <a href="auth">Login</a>
                    <a href="auth">Register</a>
                </div>
            </div>
        </section>
    </div>

    <!-- ***************** header part end ************************** -->

    <!-- ********************* three extra header div starts ******************** -->

    <section class="header-extradiv">
        <div class="container">
            <div class="row">
                <div class="extradiv col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-desktop"></i></a>
                    <h2>EASY TO USE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <div class="extradiv col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-trophy"></i></a>
                    <h2>AWESOME DESIGN</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <div class="extradiv col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-magic"></i></a>
                    <h2>EASY TO CUSTOMIZE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ********************* three extra header div starts ******************** -->



    <!-- ********************* our pricing start ****************************** -->

    <section class="pricing" id="pricingdiv">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold text-white">OUR BEST PRICING</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">BASIC</div>
                        <div class="card-body">
                            <li>$<span class="money">20</span>/website</li>
                            <li>Responsive Websites</li>
                            <li>Domain Name Free</li>
                            <li>Mobile Friendly</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </div>
                        <div class="card-footer">
                            <a href="#">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 card-second">
                    <div class="card text-center">
                        <div class="card-header">STANDARD</div>
                        <div class="card-body">
                            <li>$<span class="money">40</span>/website</li>
                            <li>Responsive Websites</li>
                            <li>Domain Name Free</li>
                            <li>Mobile Friendly</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </div>
                        <div class="card-footer">
                            <a href="#">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">UNLIMITED</div>
                        <div class="card-body">
                            <li>$<span class="money">60</span>/website</li>
                            <li>Responsive Websites</li>
                            <li>Domain Name Free</li>
                            <li>Mobile Friendly</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </div>
                        <div class="card-footer">
                            <a href="#">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************* our pricing end ****************************** -->

    <!-- ********************* our happy clients starts ****************************** -->

    <section class="happyclients">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">OUR HAPPY CLIENTS</h1>
            <p class="text-center text-captalize pt-1">Our Satisfied Customer Says</p>
        </div>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner container">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                <h1>Anil Swami</h1>
                                <h2>Web Developer</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                <h1>Anil Swami</h1>
                                <h2>Web Developer</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                <h1>Anil Swami</h1>
                                <h2>Web Developer</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                <h1>Anil Swami</h1>
                                <h2>Web Developer</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                <h1>Anil Swami</h1>
                                <h2>Web Developer</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                <h1>Anil Swami</h1>
                                <h2>Web Developer</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                <h1>Anil Swami</h1>
                                <h2>Web Developer</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                <h1>Anil Swami</h1>
                                <h2>Web Developer</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="image/clients-thumb.jpg" class="img-fluid img-thumbnail"></a>
                                <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                <h1>Anil Swami</h1>
                                <h2>Web Developer</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </section>


    <!-- ********************* our happy clients end ****************************** -->

    <!-- ********************* contact us starts ****************************** -->

    <section class="contactus" id="contactdiv">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">CONTACT US</h1>
            <p class="text-center text-captalize pt-1">We're here to help and answer any question you might have. we
                look forward to hearing from you.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">

                    <form action="/action_page.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Your Name" id="username"
                                autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Email" id="email"
                                autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Enter Mobile Number" id="mobile"
                                autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Enter Your Message"
                                id="comment"></textarea>
                        </div>
                        <div class="d-flex justify-content-center form-button">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <!-- ********************* contact us ends ****************************** -->

    <!-- ********************* newsletter starts ****************************** -->

    <section class="newsletter" id="newsletterdiv">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">SUBSCRIBE TO OUR NEWS LETTER</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12 ">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control newsletter-input" placeholder="Your Email">
                        <div class="input-group-append">
                            <span class="input-group-text">Subscribe</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************* newsletter ends ****************************** -->


    <!-- ********************* foter starts ****************************** -->

    <footer class="footersection" id="footerdiv">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 footer-div">
                    <div>
                        <h3>ABOUT ME</h3>
                        <p>The world has become so fast paced that people don't want to stand by reading a page of
                            information to be they would much rather look at a presentstion and understand the message.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 footer-div">
                    <div class="footer-navlinks">
                        <h3>CONTACT US</h3>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Price</a></li>
                        <li><a href="#">About</a></li>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 footer-div">
                    <div>
                        <h3>NEWSLETTER</h3>
                        <p>For business professionals caught between high OEM price and mediocre print and graphic
                            output.</p>
                        
                    </div>
                </div>
            </div>
            <div class="mt-5 text-center">
                <p>Copyright &copy;2020 All rights reserved </p>
            </div>
            <div class="scrolltop float-right">
                <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
            </div>
        </div>
    </footer>

</body>

</html>
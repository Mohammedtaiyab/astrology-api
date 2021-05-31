    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Zodiac Zone</title>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
        <!-- fontawesome css link -->
        <link rel="stylesheet" href="<?= DEMO_BASE_URL ?>/assets/css/fontawesome-all.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" href="<?= DEMO_BASE_URL ?>/assets/font/flaticon.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="<?= DEMO_BASE_URL ?>/assets/css/magnific-popup.css">
        <!-- nice-select css -->
        <link rel="stylesheet" href="<?= DEMO_BASE_URL ?>/assets/css/nice-select.css">
        <!-- bootstrap css link -->
        <link rel="stylesheet" href="<?= DEMO_BASE_URL ?>/assets/css/bootstrap.min.css">
        <!-- swipper css link -->
        <link rel="stylesheet" href="<?= DEMO_BASE_URL ?>/assets/css/swiper.min.css">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?= DEMO_BASE_URL ?>/assets/images/fav.png" type="image/x-icon">
        <!-- odometer css -->
        <link rel="stylesheet" href="<?= DEMO_BASE_URL ?>/assets/css/odometer.css">
        <!-- animate.css -->
        <link rel="stylesheet" href="<?= DEMO_BASE_URL ?>/assets/css/animate.css">
        <!-- main style css link -->
        <link rel="stylesheet" href="<?= DEMO_BASE_URL ?>/assets/css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <style>
            * {
                font-family: 'Comfortaa', cursive;
            }

            .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 1000;
                display: none;
                float: left;
                min-width: 10rem;
                padding: 0.5rem 11px;
                margin: .125rem 0 0;
                font-size: 1rem;
                color: #212529;
                text-align: left;
                list-style: none;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, .15);
                border-radius: .25rem;
            }

            .card-body svg {
                width: 100%;
            }
        </style>
    </head>

    <body>
        <!-- header-section start -->
        <header class="header-section header-section-two">
            <div class="header">
                <div class="header-bottom-area">
                    <div class="container">
                        <div class="header-menu-content">
                            <nav class="navbar navbar-expand-lg p-0">
                                <a class="site-logo site-title" href="index.html"><img src="assets/images/logo-2.png" alt="site-logo"></a>
                                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fas fa-bars"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav main-menu ml-auto">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Services </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"></a></li>
                                                <li><a class="dropdown-item" href="#"> </a></li>
                                                <li><a class="dropdown-item" href="#"> </a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Astrology </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Auspicious Period</a></li>
                                                <li><a class="dropdown-item" href="#">Chart</a></li>
                                                <li><a class="dropdown-item" href="#">Choghadiya</a></li>
                                                <li><a class="dropdown-item" href="#">Inauspicious Period</a></li>
                                                <li><a class="dropdown-item" href="#">Kaalsarp Dosha</a></li>
                                                <li><a class="dropdown-item" href="#">Kundli</a></li>
                                                <li><a class="dropdown-item" href="#">Kundli Matching</a></li>
                                                <li><a class="dropdown-item" href="#">Mangal Dosha</a></li>
                                                <li><a class="dropdown-item" href="#">Birth Details</a></li>
                                                <li><a class="dropdown-item" href="#">Nakshatra Porutham</a></li>
                                                <li><a class="dropdown-item" href="#">Panchang</a></li>
                                                <li><a class="dropdown-item" href="#">Papasamyam Check</a></li>
                                                <li><a class="dropdown-item" href="#">Papasamyam</a></li>
                                                <li><a class="dropdown-item" href="#">Planet Position</a></li>
                                                <li><a class="dropdown-item" href="#">Porutham</a></li>
                                                <li><a class="dropdown-item" href="#">Sade-Sati</a></li>
                                                <li><a class="dropdown-item" href="#">Thirumana Porutham</a></li>

                                            </ul>
                                        </li>

                                        <li><a href="#">Experts</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>

                                    </ul>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-section end -->

        <script>
            const CLIENT_ID = '<?= $clientId ?>';
        </script>
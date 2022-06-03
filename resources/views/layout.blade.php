<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Miranda</title>
    <script type="module" src="/js/apiGoogleMaps.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/css/base.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="../css/header.css"/> -->
    <link rel="stylesheet" type="text/css" href="/css/header.css"/>
    <link rel="stylesheet" type="text/css" href="/css/footer.css"/>
    <link rel="stylesheet" href="/css/home.css" />
    <link rel="stylesheet" type="text/css" href="/css/contact.css"/>
    <link rel="stylesheet" href="/css/csslider.css" />
    <link rel="stylesheet" href="/css/commonslide.css" />
</head>
<body>
    <!-- start Header -->
    <div class="nav-bar">  
        <header class="container">
            <div class="logo-header">
                <a href="{{ route('home')}}">
                    <img src="../images/H_logo.PNG" alt="logo_miranda" />
                    <img src="../images/hotel_miranda_text.png" alt="texto_miranda" />
                </a>
            </div>
            <nav class="menu-nav">
                <label for="menu-responsive" class="menu-hamburguer"><i class="fal fa-bars"></i></label>
                <input type="checkbox" id="menu-responsive" />
                <ul class="menu-items" id="menu-hamburguer-items">
                    <li><a href="{{ route('about')}}">About Us</a></li>
                    <li><a href="{{ route('rooms.index')}}">Rooms</a></li>
                    <li><a href="{{ route('offers.index')}}">Offers</a></li>
                    <li><a href="{{ route('contact')}}">Contact</a></li>
                </ul>
            </nav>
            <div class="user-menu">
                <a href="" class="link-user-menu" id="user-area"><i class="fal fa-user"></i></a>
                <a href="" class="link-user-menu" id="searcher"><i class="fal fa-search"></i></a>
                <a href="" class="link-user-menu" id="menu-bars"><i class="fal fa-bars"></i></a>
            </div>
        </header>
    </div>
    <!-- end Header -->
    <!-- start Content -->
    @yield('content')
    <!-- end Content -->
    <!-- start footer -->
<footer>
    <div class="footer-container">
        <div class="miranda-info">
            <div class="miranda-info--logo">
                <img src="../images/H_logo_footer.PNG" alt="Logo_miranda" />
                <img src="../images/hotel_miranda_text.png" alt="logo-miranda" />
            </div>
            <div clas="miranda-info--content">
                <p class="footer-content">
                Lorem ipsum dolor sit amet, consect etur <br>
                adipisicing elit, sed doing eius mod tempor incididunt <br>
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>
                quis nostrud exercitat ion ullamco laboris nisi.<br>
                </p>
            </div>
            <div class="miranda-info--rrss">
                <i class="fab fa-facebook-square"></i> 
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-behance-square"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
        <div class="miranda-services">
        <p class="footer-title">Services.</p>
        <span>
            <ul>
                <li class="footer-content">Restaurant & Bar</li>
                <li class="footer-content">Swimming Pool</li>
                <li class="footer-content">Wellness & Spa</li>
                <li class="footer-content">Restaurant</li>
                <li class="footer-content">Conference Room</li>
                <li class="footer-content">Cocktail Party House</li>
            </ul>
            <ul>
                <li class="footer-content">Gaming Zone</li>
                <li class="footer-content">Marriage Party</li>
                <li class="footer-content">Party Planning</li>
                <li class="footer-content">Tour Consultancy</li>
            </ul>    
        </span>
    </div>
    <div class="miranda-contact">
        <p class="footer-title">Contact Us.</p>
        <div class="miranda-contact--phone">
            <img src="../images/contact-phone.png" alt="phone-icon" />
            <div class="miranda-contact--info">
                <p class="footer-subtitle">Phone Number</p>
                <p class="footer-content">+987 87 67 78</p>
            </div>
        </div>
        <div class="miranda-contact--mail">
            <img src="../images/contact-mail.png" alt="mail-icon" />
            <div class="miranda-contact--info">
                <p class="footer-subtitle">Phone Number</p>
                <p class="footer-content">+987 87 67 78</p>
            </div>
        </div>
        <div class="miranda-contact--location">
            <img src="../images/contact-position.png" alt="location-icon" />
            <div class="miranda-contact--info">
                <p class="footer-subtitle">Phone Number</p>
                <p class="footer-content">+987 87 67 78</p>
            </div>
        </div>
    </div>
    </div>
    <div class="sub-footer">
        <div class="sub-footer--container">
            <h4>Copyright &copy;Miranda - 2022</h4>
            <div class="legal-texts">
                <h4><a  href="#">Terms of Use</a></h4> 
                <h4>|</h4>
                <h4><a href="">Privacy Environment Policy</a></h4>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
</body>
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxfjcvpmoqJdnr0_fokyCg_6ngevrqXhs&callback=initMap"></script>
</html>
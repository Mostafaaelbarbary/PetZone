    <!DOCTYPE html>
    <html>

    <head>
        <style>
            .inner_main_menu { margin: 0 auto; width: 1170px; }
            .inner_main_menu ul { margin: 0; padding: 20px 0 0; list-style: none; text-align: right; }
            .inner_main_menu ul li { float: none; display: inline-block; position: relative; }
            .inner_main_menu ul li:nth-child(1) { float: left; }
            .inner_main_menu ul li:nth-child(2) { float: left; }
            .inner_main_menu ul li:nth-child(3) { float: left; }
            .inner_main_menu ul li a { color: #262626; font-size: 20px; text-transform: uppercase; text-decoration: none; display: block; padding: 10px 20px; }
            .inner_main_menu ul li a:hover { color: #6FDA44; }
            .inner_main_menu ul li ul { position: absolute; top: 40px; left: -9999999px; width: 200px; background: #f7a14c; padding: 0; } /* Change the background color here to brown */
            .inner_main_menu ul li:hover ul { left: 0px; }
            .inner_main_menu ul li ul li { float: left; width: 100%; text-align: left; }
            .inner_main_menu ul li ul li a { color: #fff; text-transform: capitalize; font-size: 15px; }
            .inner_main_menu ul li ul li a:hover { background: #ddd; color: #262626; }
            .inner_main_menu ul li ul li ul { top: 0; left: -999999px; }
            .inner_main_menu ul li ul li:hover ul { top: 0; left: 200px; }
            .inner_main_menu ul li:hover a { color: #f7a14c; }
            .inner_main_menu ul li:hover ul li a { color: #ffffff; }
            .inner_main_menu ul li ul li a:hover { color: #262626; }
            .inner_main_menu ul li ul li:hover a { background: #ddd; color: #262626; }
            .inner_main_menu ul li ul li:hover ul li a { background: #262626; color: #fff; }
            .inner_main_menu ul li ul li ul li a:hover { background: #ddd; color: #262626; }
            /* Add this CSS to create the brown background for the header */
            .inner_main_menu::before {
                content: "";
                position: absolute;
                left: 0;
                right: 0;
                top: -8px;
                bottom: 100px;
                background:#7e2d20; /* Background color for the header */
                z-index: -1;
                height: 106px;
            }
        
        
            .slicknav_menu {
                background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                font-size: 16px;
                padding: 5px;
                display: none;
                position: fixed;
                right: 0;
                width: 100%;
                z-index: 99999;
            }
            ul.slicknav_nav {
                background: #262626 none repeat scroll 0 0;
                left: 0;
                position: absolute;
                top: 0;
                width: 80%; 
            }
            .slicknav_btn { top: 35px; }
            #main_menu { width: 100%; position: relative; }
            .logo_area { width: 100%; height: 100px; position: absolute; text-align: center; }
            .logo_area img {
                height: 100px;
                width: 100px;
                margin: -6px auto; /* Center the logo vertically and horizontally */
            }
            @media only screen and (min-width: 100px) and (max-width: 17px) {
                .slicknav_menu { display: block; }
                .inner_main_menu { display: none; }
            }
        
    
    image {
        text-align: center;
        margin-top: 1200px; /* Adjust the margin to control the distance from the navbar */
    margin-right:50%;
    
    }

    .image img {
        max-width: 100%;
        height: 650px;
        width: 2000px;
        display: block;
        margin-right:50%;
        margin-top: 35px; /* Adjust the margin to control the distance from the navbar */

        
    }
    .welcome
            {
                font-size:14px;
                content: "";
                position: absolute;
                left: 0;
                right: 0;
                top:-400;
                background:#EBEBEB; /* Background color for the header */
                z-index: -1;
                height: 94px;
                font-family: sans-serif;    
                text-align: center; 
            }
        .button
        {
            color:#7e2d20; /* Background color for the header */
            padding: 2rem 3rem;
            
        }
        .txt
        {
            margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    color: black;

        }
        .vertical-line
        {
            width: 2px;
            height:100px;
            background-color: silver;
        margin-left:800px;
        margin-top:-187px;
        }
        .our {
            text-align:center;
            margin-bottom:10px;
            margin-left: -400px;
            margin-right:-400px;
        }

        .service {
            height: 200px;
            width: 1500px;
            background: #EBEBEB;
            margin-bottom: 500px;
            margin-right: -600px;
            text-align: center;
        }

        .image-container {
            display: flex;
            margin-left: 450px;
        }

        .img2 {
            text-align: center;
            width: 150px;
            height: 150px;
            margin: 10px;
            display: flex;
            flex-direction: column;
        }

        .img2 img {
            width: 100%;
            height: 100%;
            display: block;
            margin: 0 auto;
            border-radius: 50%;
            /* Apply border-radius for a circular shape */
        }

        .img2 h4 {
            margin-top: 10px;
        }
        .site-footer {
    background-color: #7e2d20;
    padding: 45px 0 20px;
    font-size: 15px;
    line-height: 15px;
    color: #737373;
    margin-top:133px;
}

.site-footer hr {
    border-top-color: #bbb;
    opacity: 0.5
}

.site-footer hr.small {
    margin: 20px 0
}

.site-footer h6 {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    margin-top: 5px;
    letter-spacing: 2px
}

.site-footer a {
    color: #737373;
}

.site-footer a:hover {
    color: #3366cc;
    text-decoration: none;
}

.footer-links {
    padding-left: 0;
    list-style: none
}

.footer-links li {
    display: block
}

.footer-links a {
    color: #737373
}

.footer-links a:active,
.footer-links a:focus,
.footer-links a:hover {
    color: #3366cc;
    text-decoration: none;
}

.footer-links.inline li {
    display: inline-block
}

.site-footer .social-icons {
    text-align: right
}

.site-footer .social-icons a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin-left: 6px;
    margin-right: 0;
    border-radius: 100%;
    background-color: #33353d
}

.copyright-text {
    margin: 0
}

@media (max-width:991px) {
    .site-footer [class^=col-] {
        margin-bottom: 30px
    }
}

@media (max-width:767px) {
    .site-footer {
        padding-bottom: 0
    }

    .site-footer .copyright-text,
    .site-footer .social-icons {
        text-align: center
    }
}

.social-icons {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.social-icons li {
    display: inline-block;
    margin-bottom: 4px
}

.social-icons li.title {
    margin-right: 15px;
    text-transform: uppercase;
    color: #96a2b2;
    font-weight: 700;
    font-size: 13px
}

.social-icons a {
    background-color: #eceeef;
    color: #818a91;
    font-size: 16px;
    display: inline-block;
    line-height: 44px;
    width: 44px;
    height: 44px;
    text-align: center;
    margin-right: 8px;
    border-radius: 100%;
    -webkit-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear
}

.social-icons a:active,
.social-icons a:focus,
.social-icons a:hover {
    color: #fff;
    background-color: #29aafe
}

.social-icons.size-sm a {
    line-height: 34px;
    height: 34px;
    width: 34px;
    font-size: 14px
}

.social-icons a.facebook:hover {
    background-color: #3b5998
}

.social-icons a.twitter:hover {
    background-color: #00aced
}

.social-icons a.linkedin:hover {
    background-color: #007bb6
}

.social-icons a.dribbble:hover {
    background-color: #ea4c89
}

@media (max-width:767px) {
    .social-icons li.title {
        display: block;
        margin-right: 0;
        font-weight: 600
    }
}
.err{
    color: red;
}
        </style>
    </head>

    <body>
        <div id="main_menu">
            <div class="logo_area">
                <a href=""><img src="banners/Logo.jpg" alt=""></a>
            </div>
            <div class="inner_main_menu">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Our Doctor</a></li>
                    <li><a href="">Locate Us</a></li>
                    <li><a href="">Sign In</a></li>
                    <li><a href="">Sign Out</a></li>
                </ul>
            </div>
        </div>
        <div class="image">
            <img src="banners/image13.jpg" alt="">
    </div>
    <div class="welcome">
    <h3>Your pet is suffering?pet zone offer you the best treatment to your animal <h3>
        <button style="font-size:18px; background-color:#7e2d20;border-radius:30px; padding:2rem 1rem;" >Make an Appointment</button>
    </div>
    

        </div>
    <div class="txt">
    <h2 > WELCOME TO PET ZONE VETERINARY CLINIC</h2> 
    <p>Pet Zone clinic is a veterinary  Clinic that include many professional doctors and professional staff,<br>
    new technologies has been used there,Pet Zone also has many branches</p>
        </div>

        <div class="vertical-line"></div>
        <div class="our"></div>
        <h2>Our Service</h2>
        <div class="service">
        <div class="image-container">
        <div class="img2">
            <img src="banners/medication.jpg" alt="">
            <h4>medication</h4>
        </div>
        <div class="img2">
            <img src="banners/castraction_1.jpg" alt="">
            <h4>castraction</h4>
        </div>
        <div class="img2">
            <img src="banners/vaccination.jpg" alt="">
            <h4>vaccination</h4>
        </div>
        <div class="img2">
            <img src="banners/checkout.jpg" alt="">
            <h4>checkout</h4>
        </div>
    </div>

        
    <section id="f">
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Pet Zone clinic is a veterinary  Clinic that include many professional doctors and professional staff,<br>
    new technologies has been used there,Pet Zone also has many branches.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/about/">About Us</a></li>
                        <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                        <a href="#">Scanfcode</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</section>
 </body>

    </html>

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
            background: #8B4513; /* Background color for the header */
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

    </style>
</head>

<body>
    <div id="main_menu">
        <div class="logo_area">
            <a href=""><img src="Logo.jpg" alt=""></a>
        </div>
        <div class="inner_main_menu">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Sign Up</a></li>
                <li><a href="">Sign in</a></li>
                <li><a href="">Our Doctors</a></li>
                <li><a href="">Locate Us</a></li>
            </ul>
        </div>
    </div>
    <div class="image">
        <img src="images1.jpg" alt="">
</div>
<div class="welcome">
   <h2> Welcome To Petzone Veterinary Clinic</h2>
</div>
</body>

</html>

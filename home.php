<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html lang=""><head>
<title>CODEHUB</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('img/2.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><i class="fas fa-phone rgtspace-5"></i> +254 743 157 388</li>
          <li><i class="far fa-envelope rgtspace-5"></i> codehub@gmail.com</li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
      <div class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><a href="#"><i class="fas fa-home"></i></a></li>
          <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
          <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
          <li id="searchform">
            <div>
              <form action="#" method="post">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input placeholder="Enter search term…" type="text">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
              </form>
            </div>
          </li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <!-- ################################################################################################ -->
        <h1><a href="#">CODEHUB</a></h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">LEARN</a>
            <ul>
              <li><a href="pages/gallery.html">C</a></li>
              <li><a href="pages/full-width.html">C++</a></li>
              <li><a href="pages/sidebar-left.html">JAVA</a></li>
              <li><a href="pages/sidebar-right.html">PYTHON</a></li>
              <li><a href="pages/basic-grid.html">DJANGO</a></li>
              <li><a href="pages/font-icons.html">KOTLIN</a></li>
            </ul>
          </li>
          <li><a class="drop" href="pages/services.html">SERVICES</a>
            <ul>
             


               <li><a class="drop" href="pages/business.html">BUSINESS</a>
                <ul>
                  <li><a href="pages/design.html">DESIGN</a></li>
                  <li><a href="pages/design.html">CODING</a></li>
                  <li><a href="pages/graphics.html">MOBILE APP DEVELOPMENT</a></li>
                </ul>
              </li>


             
              <li><a href="pages/consultancy.html">CONSULTANCY</a></li>
            </ul>
          </li>
           <li > <a href="pages/codelab.html">CODELAB</a></li>
          <li><a href="pages/aboutus.html">ABOUT US</a></li>
          <li><a href="pages/contacts.html">CONTACTS</a></li>
          
        </ul>
        <!-- ################################################################################################ -->
     </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h3 class="heading"><img src="logo.jpg" style="width: 300px; height:150px; opacity: 0.8; align-content: center;"></h3>
      <h3>DEVELOPERS FOR DEVELOPERS</h3>
      <HR style="border: 5px solid white;
  border-radius: 5px;">
      <P>We build products that empower developers and connect them to solutions that enable productivity, growth, and discovery.</P>
      <p>CODING MADE EASY</p>
      <footer>
       <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>  
      </footer>
    </article>
    
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="bgded overlay">
  <section id="splitfifty" class="hoc container clear">
    <div class="sectiontitle">
      <p class="nospace font-xs">BECOME AN EXPERT PROGRAMMER</p>
      <p class="heading underline font-x2">LEARN WITH US</p>
    </div>
    <div class="bgded clear" style="background-image:url('images/demo/programming2.jpg');"> 
      <!-- ################################################################################################ -->
      <article>
        <h6 class="heading font-x2">we work synergistically to provide results</h6>
        <p>make use of free resources and time to make the most out of yourself</p>
        <footer><a class="btn" href="#">our blog</a></footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<div class="wrapper bgded" style="background-image:url('img/3.jpg');">
  <section id="testimonials" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_half overlay">
      <ul class="nospace">
        <li>
          <blockquote>A WORLD WITHOUT CODE IS A WORLD WITH CHAOS.
          LETS MAKE CODE EASY!</blockquote>
          <figure class="clear"><img class="circle" src="img/ce.jpg" alt="CEO">
            <figcaption>
              <h6 class="heading">Z. Kibochi</h6>
              <em>CEO / CODEHUB</em></figcaption>
          </figure>
        </li>
        <li>
          <footer><a class="btn inverse" href="#">View More</a></footer>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="bgded overlay row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h6 class="heading">CODEHUB</h6>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="http://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="http://www.google.com"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="http://www.linkedin.com"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
      
      </ul>
      <p class="nospace">FOLLOW US ON SOCIAL MEDIA</p>
    </div>
    <!-- ################################################################################################ -->
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <div class="group btmspace-50">
       <div class="one_quarter first">
        <h6 class="heading">CHATROOM</h6>
        <p class="nospace btmspace-15">DISCUSS CODE ISSUES WITH FRIENDS</p>
         <iframe src="https://deadsimplechat.com/XqAYOwJzR" width="250px" height="300px"></iframe>
      </div>
      <div class="one_quarter">
        <h6 class="heading">MAKING PROFESSIONAL CODERS</h6>
        <ul class="nospace linklist">
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="signup.html">JOHN KEMUNYA</a></p>
              <time class="block font-xs" datetime="2045-04-06">JOINED: Friday, 6<sup>th</sup> April 2019</time>
            </article>
          </li>
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="signup.html">MWANZIA PETER</a></p>
              <time class="block font-xs" datetime="2045-04-05">JOINED: Thursday, 5<sup>th</sup> April 2019</time>
            </article>
          </li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">POPULAR SERVICES AT CODEHUB</h6>
        <ul class="nospace linklist">
          <li><a href="#">WEB DESIGN</a></li>
          <li><a href="#">MOBILE APP DEVELOPMENT</a></li>
          <li><a href="#">DESKTOP APP DEVELOPMENT</a></li>
          <li><a href="#">IOT APP DEVELOPMENT</a></li>
         
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">MARKETABLE LANGUAGES</h6>
        <ul class="nospace clear latestimg">
          <li><a class="imgover" href="pages/sidebar-left.html"><img src="images/demo/java.jpg"style="width:100px;height:80px" alt=""></a></li>
          <li><a class="imgover" href="pages/font-icons.html"><img src="images/demo/kotlinlogo.jpeg" style="width:100px;height:80px" alt=""></a></li>
          <li><a class="imgover" href="pages/sidebar-right.html"><img src="images/demo/python.jpeg" style="width:100px;height:80px" alt=""></a></li>
          <li><a class="imgover" href="pages/full-width.html"><img src="images/demo/c++.jpg" style="width:100px;height:80px" alt=""></a></li>
          <li><a class="imgover" href="pages/basic-grid.html"><img src="images/demo/django1.png" style="width:100px;height:80px" alt=""></a></li>
          <li><a class="imgover" href="pages/gallery.html"><img src="images/demo/c.png" style="width:100px;height:80px" alt=""></a></li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <div id="ctdetails" class="clear">
      <ul class="nospace clear">
        <li class="one_quarter first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +254 743 157 388</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong>  codehub@gmail.com</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Saturday:</strong> 08.00am - 18.00pm</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> jkuat juja<a href="#"> oposite equity bank</a></span></div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright © 2018 - All Rights Reserved - <a href="#">CODEHUB</a></p>
  
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
 

        
        
    

</html>
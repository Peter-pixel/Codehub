<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<html>
  <head>
      <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
 <link href="login.css" rel="stylesheet" type="text/css">
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
          <li><a href="login.php"><i class="fas fa-home"></i></a></li>
          <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
          <li><a href="login.php" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="signup.php" title="Sign Up"><i class="fas fa-edit"></i></a></li>
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
        <h1><a href="index.html">CODEHUB</a></h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="index.html">WHY CODEHUB?</a></li>
          <li><a href="whatyoulearn.html">WHAT YOU LEARN</a>
           
          </li>
          <li><a href="pricing.html">PRICING</a>
            
          </li>
         
          
        </ul>
        <!-- ################################################################################################ -->
    
    </header>
  </div>
  <body>
     <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
             <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" style="color:black" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>  <br>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" style="color:black" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>  <br> 
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" style="color:black" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div> <br> 
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
             
        </form>
    </div>    
  </body>
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
        <h6 class="heading">FILL IN BELOW TO CREATE ACCOUNT</h6>
        <p class="nospace btmspace-15">PLEASE ENTER VALID NAME AND EMAIL</p>
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
          <input class="btmspace-15" value="" placeholder="Username" type="text">
            <input class="btmspace-15" value="" placeholder="Password" type="text">
            <input class="btmspace-15" value="" placeholder="Confirm Password" type="text">
            <button type="submit" value="submit">SIGN UP</button>
          </fieldset>
        </form>
      </div>
      <div class="one_quarter">
        <h6 class="heading">MAKING PROFESSIONAL CODERS</h6>
        <ul class="nospace linklist">
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="#">JOHN KEMUNYA</a></p>
              <time class="block font-xs" datetime="2045-04-06">JOINED: Friday, 6<sup>th</sup> April 2019</time>
            </article>
          </li>
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="#">MWANZIA PETER</a></p>
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
           <li><a class="imgover" href="#"><img src="../images/demo/java.jpg"style="width:100px;height:80px" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="../images/demo/kotlinlogo.jpeg" style="width:100px;height:80px" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="../images/demo/python.jpeg" style="width:100px;height:80px" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="../images/demo/c++.jpg" style="width:100px;height:80px" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="../images/demo/django1.png" style="width:100px;height:80px" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="../images/demo/c.png" style="width:100px;height:80px" alt=""></a></li>
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


</html>
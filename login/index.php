<?php 

require "/tempconfig.php";

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $hostname?></title>
  <meta name="description" content="<?php echo $descp?>">
  <meta name="author" content="SitePoint">

  <meta property="og:title" content="<?php echo $hostname?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $url?>">
  <meta property="og:description" content="<?php echo $descp?>">
  <meta property="og:image" content="<?php echo $thumburl?>">

  <link rel="stylesheet" href="login.css">

  <link rel="shortcut icon" type="image/jpg" href="<?php echo $favurl"/>

  <link rel="stylesheet" href="css/landing.css?v=1.0">

</head>
   <body>
       
                <div class="error">
             
             <h1><?php 
             
             $error1=$_GET["pgeterror"];
             if ($error1 == 1) {
                 
                 echo "We could not find your user or password in our databases.";
                 
             }
             
             ?></h1>
             <h1><?php
             
             $error2=$_GET["pinco"];
             if ($error2 == 1) {
                 
                 echo "Your user or password is incorrect.";
                 
             }
             
             ?></h1>
         </div>
       
       
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               <?php echo $hostname ?> Login
            </div>
            <div class="title signup">
               <?php echo $hostname ?> Signup
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="login.php" class="login" method="post">
                  <div class="field">
                     <input type="text" name="user" placeholder="Username" required>
                  </div>
                  <div class="field">
                     <input type="password" name="pass" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="forgot.php">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="signup.php" class="signup" method="post">
                  <div class="field">
                     <input type="email" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="text" name="username" placeholder="Username" required>
                  </div>
                  <div class="field">
                     <input type="password" name="pass" placeholder="Password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>

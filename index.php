<?php

require "tempconfig.php";

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

  <link rel="shortcut icon" type="image/jpg" href="<?php echo $favurl"/>

  <link rel="stylesheet" href="css/landing.css?v=1.0">

</head>

<body>

<h1>Login at <a href="/login">this page</a><h1>


  <script src="js/landing.js"></script>
</body>
</html>

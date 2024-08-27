<!doctype html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" media="screen" href="./assets/vendor/jquery-1.8.3.min.js" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/style.css" >
</head>

<body>
  <!--container start-->
  <div class="container">
     <!--header section start-->
     <header>
      <div class="wrapper">
        <div class="hamburger">
          <span class="line line1">line1</span>
          <span class="line line2">line2</span>
          <span class="line line3">line3</span>
        </div>
        <div class="header-content">
        <h1>
          <a
            href="./index.html"
            title="Gymer"
            class="first-letter-caps"
            target="_self"
            >gymer</a
          >
        </h1>
             
        <?php wp_nav_menu(array("theme_location" => "primary-menu", "menu_class" => "header-right"))
          ?>
        <div class="header-right">
          <a href="#FIXME" class="all-caps" target="_self">contact</a>
        </div>
      </div>
      </div>
    </header>
    <!--header section end-->

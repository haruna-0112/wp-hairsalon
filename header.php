<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Libre+Caslon+Display&display=swap"
    rel="stylesheet" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <title>Hair salon</title>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="js/main.js" type="text/javascript"></script>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
 
  <?php wp_head(); ?>
</head>


<body>
<?php if(is_home()){ ?>
  <div class="firstview bg-slider">
    <div class="header">
        <h1 id="top-btn" class="header-logo">HAIR MIKU</h1>
   
        <nav class="header-nav">
          <li><a href="#concept1" class="concept-nav">CONCEPT</a></li>
          <li><a href="#stylist">STYLIST</a></li>
          <li><a href="#hair">HAIR  MENU</a></li>
          <li><a href="#blog">BLOG</a></li>
          <li><a href="#access1">ACCESS</a></li>
        </nav>
        
    </div>

    <a href="" class="top-img-btn">予約はこちら</a>
  
</div>
<!-- hambager-->
<div class="hamburger">
  <span></span>
  <span></span>
  <span></span>
</div>

<nav class="globalMenuSp">
  <ul class="globalMenuSp-nav"> 
    <li><a href="#concept1" class="concept-nav">CONCEPT</a></li>
          <li><a href="#stylist">STYLIST</a></li>
          <li><a href="#hair">HAIR  MENU</a></li>
          <li><a href="#blog">BLOG</a></li>
          <li><a href="#access1">ACCESS</a></li>

  </ul>
</nav>
<!-- hambagerおわり -->
<?php }else{ ?>
<div class="header">
        <h1 id="top-btn" class="header-logo"><a href="http://localhost/wordpress/">HAIR MIKU</a></h1>
   
        <nav class="header-nav">
          <li><a href="http://localhost/wordpress/" class="concept-nav">CONCEPT</a></li>
          <li><a href="http://localhost/wordpress/">STYLIST</a></li>
          <li><a href="http://localhost/wordpress/">HAIR  MENU</a></li>
          <li><a href="http://localhost/wordpress/">BLOG</a></li>
          <li><a href="http://localhost/wordpress/">ACCESS</a></li>
        </nav>
        
    </div>
    <!-- hambager-->
<div class="hamburger">
  <span></span>
  <span></span>
  <span></span>
</div>

<nav class="globalMenuSp">
  <ul class="globalMenuSp-nav"> 
    <li><a href="http://localhost/wordpress/"class="concept-nav">CONCEPT</a></li>
          <li><a href="http://localhost/wordpress/">STYLIST</a></li>
          <li><a href="http://localhost/wordpress/">HAIR  MENU</a></li>
          <li><a href="http://localhost/wordpress/">BLOG</a></li>
          <li><a href="http://localhost/wordpress/">ACCESS</a></li>

  </ul>
  
</nav>
<!-- hambagerおわり -->
    <?php } ?>
<!DOCTYPE html>
<html lang="ua">
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>
<?php foreach($styles as $style): ?>
<link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
rel="stylesheet" type="text/css" />
<?php endforeach; ?>
<?php foreach($scripts as $script) { 
echo HTML::script($script, NULL, TRUE), "\n"; }?>
</head>
<body>
<!-- Header -->
<div class="container">
  <div class="header row">
    <div class="span12">
      <div class="navbar">
        <div class="navbar-inner">
          <h1> <a class="brand" href="/">Best fotograf - ...</a> </h1>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li class="current-page"> <a href="/"><i class="icon-home"></i><br />
                Головна</a> </li>
              <li> <a href="<?php echo URL::site('portfolio');?>"><i class="icon-camera"></i><br />
                Портфоліо</a> </li>
              <li> <a href="<?php echo URL::site('acount');?>"><i class="icon-tasks"></i><br />
                Особистий кабінет</a> </li>
              <li> <a href="<?php echo URL::site('about'); ?>"><i class="icon-user"></i><br />
                Про сервіс</a> </li>
              <li> <a href="<?php echo URL::site('contact');?>"><i class="icon-envelope-alt"></i><br />
                Контакти</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Slider -->
<div class="slider">
  <div class="login" align="right"> <?php echo $login; ?>&ensp;&ensp;&ensp;</div> 
  <div class="container">&ensp; <?php echo $slider; ?> </div>
</div>

<!-- Serch fotograf --> 
<?php echo $serch;


?> 

<!-- Kontent 2 -->
<div class="portfolio container"> <?php echo $content; ?> </div>

<!-- Testimonials -->
<div class="testimonials container"> <?php echo $fotografi; ?> </div>

<!-- Footer -->
<footer> <?php echo $footer; ?> 













</footer>
</body>
</html>
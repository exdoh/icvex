<?php require_once('header.php'); ?>

<!-- HOME -->
<div id="home_container" class="container">
  <!-- First Row -->
  <div class="row">
    <div id="home_industry-at-glance" class="col-xs-4 bg-red reset_side-paddings scrollable-column">
      <h3>Industry at Glance</h3>
      <ul>
        <li>Asian Development Bank estimated that Myanmar’s per capita income could triple by 2030.</li>
        <li>Number of Myanmar’s Ultra-Rich could grow 68% in one decade from 40 to 307 and the growth rate would make Myanmar a true economic frontier, according to World Ultra Wealth Report published by Wealth-X.</li>
        <li>Myanmar’s economic growth rise of income level boost consumer spending on healthcare service and pharmaceuticals from basic medicine to vitamins and dietary supplements. Pharmaceutical markets projected to grow from $430 million in 2012 to$ 945 million by 2015.</li>
        <li>Insufficient medical resources and lack of advanced medical devices prompt a big number of Myanmar people traveling overseas for medical treatment and services. Top destinations for medical services for Myanmar people are Thailand, Singapore, India and UK.</li>
        <li>10-15% of foreign patients are from Myanmar, according to Thai Private hospitals such as Bangkok general & Priyavate hospitals.</li>
        <li>After Myanmar’s reforms, Thailand’s Bangkok General Hospitals experienced a growth of 30-40% patients from Myanmar. Not less than 22,000 patients from Myanmar alone received medical service at Bangkok General Hospital in 2012</li>
      </ul>
    </div>
    <div id="main-banner" class="col-xs-8"></div>
  </div>
  <!-- First Row -->

  <!-- Second Row -->
  <div class="row">
    <div id="home_main-actions" class="col-xs-4">
      <div class="row" data-target="#booking" data-toggle="modal" data-backdrop="static" data-keyboard="false">
        <img src="images/ic_booking.png" class="pull-left">
        <h4 class="pull-left">Space Booking</h4>
      </div>
      <div class="row">
        <img src="images/ic_registration.png" class="pull-left">
        <h4 class="pull-left">Visitor Registration</h4>
      </div>
      <div class="row">
        <img src="images/ic_activities.png" class="pull-left">
        <h4 class="pull-left">Activities</h4>
      </div>
    </div>
    <div id="home_carousel" class="col-xs-5 no_side-paddings">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/img_carousel-img1.png" alt="First slide">
        </div>
        <div class="item">
          <img src="images/img_carousel-img2.png" alt="Second slide">
        </div>
        <div class="item">
          <img src="images/img_carousel-img3.png" alt="Third slide">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    </div>
    <div id="home_news-n-press" class="col-xs-3 bg-light reset_side-paddings">
      <h4>News And Press</h4>
      <a href="news.php#news_launch_myanmar"><p>Press Conference : ICVeX  launch exhibition in Myanmar</p></a>
      <a href="news.php#brochure"><p>Myanmar Medihealth 2014 Brochure</p></a>
      <!-- <hr>
      <p>Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
      <hr>
      <p>Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p> -->
      <a href="news.php"><p class="pull-right">more</p></a>
    </div>
  </div>
  <!-- Second Row -->

  <!-- Third Row -->
  <div class="row">
    <div id="home_organized-by" class="col-xs-2">
      <p>Organized by</p>
      <img src="images/logo_icvex.png">
    </div>
    <div id="home_subsidized-by" class="col-xs-5">
      <p>Subsidiary of</p>
      <img src="images/logo_index.png">
      <img src="images/logo_index-myanmar.png">
    </div>
    <div id="home_supported-by" class="col-xs-3">
      <p>Supported by: Singapore Industrial Automation Association</p>
      <img src="images/logo_siaa.png">
    </div>
    <div id="home_colocated-by" class="col-xs-2">
      <p>Co-located with</p>
      <a href="http://www.myanmaredufair.com" target="_blank" title="myanmarinternationaleducation">
        <img src="images/logo_mie.png">
      </a>
    </div>
  </div>
  <!-- Third Row -->
</div> <!-- /container -->
<!-- HOME -->

<?php require_once('booking.php'); ?>

<?php require_once('footer.php'); ?>
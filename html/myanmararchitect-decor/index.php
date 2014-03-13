<?php require_once('header.php'); ?>

<!-- HOME -->
<div id="home_container" class="container">
  <!-- First Row -->
  <div class="row">
    <div id="home_industry-at-glance" class="col-xs-4 bg-red reset_side-paddings scrollable-column">
      <h3>Industry at Glance</h3>
      <ul>
        <li>Resulting from economic reform, the market for infrastructure and construction in Myanmar has been boosted actively by foreign investors particularly those from Thailand, China, South Korea and Hong Kong.</li>
        <li>Foreign investment in construction and infrastructure resulted to fast development of new hotels, residential, commercial and institutional buildings.</li>
        <li>The growth of construction industry by 25.4% has driven to huge demand of construction materials, interior related, décor, furniture, and accessories.</li>
        <li>Business opportunities for import of construction materials and interior related product owing to the limited supply at the stage.</li>
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
          <img src="images/img_carousel-img1.jpg" alt="First slide">
        </div>
        <div class="item">
          <img src="images/img_carousel-img2.jpg" alt="Second slide">
        </div>
        <div class="item">
          <img src="images/img_carousel-img3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    </div>
    <div id="home_news-n-press" class="col-xs-3 bg-light reset_side-paddings">
      <h4>News And Press</h4>
      <a href="news.php#news_launch_myanmar"><p>Press Conference : ICVeX  launch exhibition in Myanmar</p></a>
      <a href="news.php#brochure"><p>Myanmar Architect & Decor 2014 Brochure</p></a>
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
    <div id="home_subsidized-by" class="col-xs-9">
      <p>Subsidiary of</p>
      <img src="images/logo_index.png">
      <img src="images/logo_index-myanmar.png">
    </div>
  </div>
  <!-- Third Row -->
</div> <!-- /container -->
<!-- HOME -->

<?php require_once('booking.php'); ?>

<?php require_once('footer.php'); ?>
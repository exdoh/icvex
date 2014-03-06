<?php require_once('header.php'); ?>

<!-- HOME -->
<div id="home_container" class="container">
  <!-- First Row -->
  <div class="row">
    <div id="home_industry-at-glance" class="col-xs-4 bg-red reset_side-paddings scrollable-column">
      <h3>Industry at Glance</h3>
      <ul>
        <li>Asian Development Bank forecasted that Myanmar will enjoy 7-8% GDP growth during the next decade and turn to be middle-income country by 2030, rising incomes and infrastructure development will surely boost customer demand for new vehicles and automotive products.</li>
        <li>Myanmar’s continued 'Roadmap to Democracy’ helps reform the investment mechanism to be market- oriented.  The lifting of import restrictions and currency reform reflects a huge potential for automotive industry particularly auto parts, accessories, service and repair equipment.</li>
        <li>Under Myanmar Government’s new policy to promote FDI, 5-year tax holiday will be provided to foreign-registered companies. Additionally, the import of auto parts and machinery in Myanmar is tax free.</li>
        <li>The automotive market has been currently dominated by reconditioned and second hand car.</li>
        <li>The country’s market reform policy will attract more and more major car and motorcycle manufacturers to enter the market resulting to a big room for auto parts aftermarket.</li>
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
      <a href="news.php#brochure"><p>Myanmar Auto Plus 2014 Brochure</p></a>
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
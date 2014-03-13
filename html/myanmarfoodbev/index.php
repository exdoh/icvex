<?php require_once('header.php'); ?>

<!-- HOME -->
<div id="home_container" class="container">
  <!-- First Row -->
  <div class="row">
    <div id="home_industry-at-glance" class="col-xs-4 bg-red reset_side-paddings scrollable-column">
      <h3>Industry at Glance</h3>
      <ul>
        <li>Asian Development Bank forecasted that Myanmar, with over 60 million populations, will enjoy 7-8% GDP growth during the next decade and turn to be middle-income country by 2030</li>
        <li>Economic reform in Myanmar has moved faster than what Eastern European countries did in the past when they opened their economies.</li>
        <li>Myanmar food industry experienced a growth rate of over 40% in 2013.</li>
        <li>Supported by Government’s policy which encourages more foreign investment and tourist inflow, the industry is expected to continue growing very fast. </li>
        <li>World-famous food and beverages companies such as Coca Cola, Pepsi and Unilever have already built plants or cooperated with local partners in Myanmar. Other international companies such as Heineken, Carlsberg, Beer Chang and Pokka, are beginning construction of their plants in the country.</li>
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
        <li data-target="#myCarousel" data-slide-to="3"></li>
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
        <div class="item">
          <img src="images/img_carousel-img4.png" alt="Fourth slide">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    </div>
    <div id="home_news-n-press" class="col-xs-3 bg-light reset_side-paddings">
      <h4>News And Press</h4>
      <a href="news.php#news_launch_myanmar"><p>Press Conference : ICVeX  launch exhibition in Myanmar</p></a>
      <a href="news.php#newsletter"><p>e newsletter no.1</p></a>
      <a href="news.php#brochure"><p>Myanmar International Food & Beverage 2014 Brochure</p></a>
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
      <p>Official Publication</p>
        <a href="http://www.apfoodonline.com/" target="_black"><img src="images/food_industry.png" width="170px"></a>
    </div>
    <div id="home_organized-by" class="col-xs-2">
      <p>Co-located with</p>
      <a href="http://www.myanmarhoreca.com" target="_blank" title="myanmarhoreca">
        <img src="images/logo_horeca.png">
      </a>
    </div>
  </div>
  <!-- Third Row -->
</div> <!-- /container -->
<!-- HOME -->

<?php require_once('booking.php'); ?>

<?php require_once('footer.php'); ?>
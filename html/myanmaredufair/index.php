<?php require_once('header.php'); ?>

<!-- HOME -->
<div id="home_container" class="container">
  <!-- First Row -->
  <div class="row">
    <div id="home_industry-at-glance" class="col-xs-4 bg-red reset_side-paddings scrollable-column">
      <h3>Industry at Glance</h3>
      <ul>
        <li>Asian Development Bank estimated that Myanmar’s per capita income could triple by 2030.</li>
        <li>Number of Myanmar’s Ultra-Rich could grow 687% in one decade from 40 to 307 and the growth rate would make Myanmar a true economic frontier, according to World Ultra Wealth Report published by Wealth-X.</li>
        <li>Myanmar’s economic growth and rise of income level result to parents spending more for their children’s education.</li>
        <li>Inadequate educational tools, science and laboratory equipment in local education institutes caused middle class and upper class families sending their children study abroad for higher education.</li>
        <li>Top destinations for study abroad are UK and USA for rich families while others go for Singapore, Malaysia and Australia. After Myanmar’s reform, Thailand with its short-travel location, similarity in culture and reasonable cost of living becomes another choice of preference.</li>
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
      <a href="news.php#brochure"><p>Myanmar International Education Fair 2014 Brochure</p></a>
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
    <div id="home_subsidized-by" class="col-xs-7">
      <p>Subsidiary of</p>
      <img src="images/logo_index.png">
      <img src="images/logo_index-myanmar.png">
    </div>
    <div id="home_organized-by" class="col-xs-2">
      <p>Co-located with</p>
      <a href="http://myanmarmedihealth.com/" target="_blank" title="myanmarfoodbev">
        <img src="images/logo_medihelth.png">
      </a>
    </div>
  </div>
  <!-- Third Row -->
</div> <!-- /container -->
<!-- HOME -->

<?php require_once('booking.php'); ?>

<?php require_once('footer.php'); ?>
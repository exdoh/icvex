<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ICVeX</title>
    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="stylesheets/app.css" />
    <!-- specific css -->
    <link rel="stylesheet" href="stylesheets/vandor/jquery.bxslider.css" />
    <!-- main js -->
    <script src="js/modernizr.js"></script>
    <style>
      [data-dismiss="modal"] {
        display: none;
      }
    </style>
  </head>
  <body>
    <div id="main-nav"> 
      <div class="row">
        <nav class="top-bar sticky" data-topbar>
          <ul class="title-area">
            <li class="name">
              <a href="index.php"><img src="images/icvex/logo/logo_color.png" alt=""></a>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>

          <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
              <li class="active"><a href="#">Home</a></li>
              <li class=""><a href="about.html">About us</a></li>
              <li class=""><a href="exhibition.html">Exhibition calendar</a></li>
              <li class=""><a href="media_center.html">Media center</a></li>
              <li class=""><a href="contact.html">Contact us</a></li>
            </ul>
          </section>
        </nav>
      </div>
    </div>

    <div class="col-xs-6 col-xs-offset-3" style="background-color:white;">
      <?php require_once('register_biz.php'); ?>
    </div>

    <div id="main-footer">
      <footer>
        <div class="row">
          <div class="small-12 medium-12 large-12">
            <!-- <img src="icvex_moc/logo_bw.png" alt=""> -->
            <p>ICVeX copyright 2013</p>
          </div>
        </div>
      </footer>
    </div>
    <!-- main js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/vandor/jquery.bxslider.min.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      var elem = $('#register_blink');
      setInterval(function() {
          if (elem.css('visibility') == 'hidden') {
              elem.css('visibility', 'visible');
          } else {
              elem.css('visibility', 'hidden');
          }    
      }, 500);
      
    });
    </script>
  </body>
</html>
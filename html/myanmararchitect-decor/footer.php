    </div>

    <div id="footer">
      <div class="container">
        <p class="pull-left">© Myanmar Architect & Decor. Copyright 2013</p>
        <p class="pull-right">Organized by ICVeX</p>
      </div>
    </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>
    <script src="js/ekko-lightbox.min.js"></script>

    <!-- Active Tab -->
    <?php 
      $path = explode('/', trim($_SERVER['SCRIPT_NAME'])); 
      $path = $path[count($path)-1];
    ?>

    <script>
      $('#nav_bar li').removeClass('active');
      var target = $('#nav_bar li a[href="<?php echo $path ?>"]');
      target.closest('#nav_bar > li').addClass('active'); // 1st level
      target.closest('li').addClass('active'); // sub level
    </script>

    <!-- Form Validate -->
    <?php if($path == 'index.php'){ ?>
      <script src="js/jquery.validate.min.js"></script>
      <script>
        $("#booking_form").validate();
      </script>
    <?php } ?>

  </body>
</html>
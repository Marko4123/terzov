<footer>
        <div class="container">
          <div class="created">
            <p>
              &copy;
              <a href="http://reklamatavi.com" target="_blank"
                >Reklamatavi.com</a
              >
            </p>
          </div>
          <div class="social">
            <a href=""><img src="img/facebook_2.png" alt="Facebook"/></a>
          </div>
          <div style="clear:both;"></div>
        </div>
      </footer>
      <a href="#top" class="top-btn" id="myBtn"></a>
    </div>
    <!-- end wrapper -->
    <script src="http://terzov.reklamatavi.com/js/jquery-3.3.1.min.js"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script>
      var cb = function() {
        var l = document.createElement("link");
        l.rel = "stylesheet";
        l.href =
          "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css";
        var h = document.getElementsByTagName("head")[0];
        h.parentNode.insertBefore(l, h);
      };
      var raf =
        requestAnimationFrame ||
        mozRequestAnimationFrame ||
        webkitRequestAnimationFrame ||
        msRequestAnimationFrame;
      if (raf) raf(cb);
      else window.addEventListener("load", cb);
    </script>
    <script>
      var cb2 = function() {
        var l2 = document.createElement("link");
        l2.rel = "stylesheet";
        l2.href = "https://use.fontawesome.com/releases/v5.6.1/css/all.css";
        var h2 = document.getElementsByTagName("head")[0];
        h2.parentNode.insertBefore(l2, h2);
      };
      var raf2 =
        requestAnimationFrame ||
        mozRequestAnimationFrame ||
        webkitRequestAnimationFrame ||
        msRequestAnimationFrame;
      if (raf2) raf(cb2);
      else window.addEventListener("load", cb2);
    </script>
    <script>
      $(document).ready(function() {
        //Check to see if the window is top if not then display button
        $(window).scroll(function() {
          if ($(this).scrollTop() > 300) {
            $(".top-btn").fadeIn();
          } else {
            $(".top-btn").fadeOut();
          }
        });

        //Click event to scroll to top
        $(".top-btn").click(function() {
          $("html, body").animate({ scrollTop: 0 }, 800);
          return false;
        });
      });
    </script>
    <?php if ($page =="machines" || $page == "gallery") {echo '<script src="js/lightbox.min.js"></script>';} ?>
    <?php if ($page =="contacts") {echo '<script src="https://www.google.com/recaptcha/api.js?hl=bg"></script>';}?>
    <?php if ($page =="contacts") {echo '<script src="js/inbox.js"></script>';}?>
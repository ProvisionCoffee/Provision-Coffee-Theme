<<<<<<< HEAD
<footer class="dark">
=======
    <!-- Footer -->
    <footer>
>>>>>>> bf57d3846f304426099c232fc5108b29f523dfce
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <ul class="list-inline">
<<<<<<< HEAD
              <li><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
=======
              <li><i class="fa fa-facebook fa-3x"></i></li>
              <li><i class="fa fa-twitter fa-3x"></i></li>
>>>>>>> bf57d3846f304426099c232fc5108b29f523dfce
            </ul>
            <div class="top-scroll">
              <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
            </div>
            <hr>
            <p>Copyright &copy; Provision Coffee 2013</p>
          </div>
        </div>
      </div>
    </footer>
<<<<<<< HEAD

    <!-- JavaScript -->
    <script>
      jQuery(function() {
        jQuery('a[href*=#]:not([href=#])').click(function() {
=======
    <!-- /Footer -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
>>>>>>> bf57d3846f304426099c232fc5108b29f523dfce
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
<<<<<<< HEAD
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
=======
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
>>>>>>> bf57d3846f304426099c232fc5108b29f523dfce
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
<<<<<<< HEAD
    <?php wp_footer(); // js scripts are inserted using this function ?>

=======
    <?php wp_footer(); ?>
>>>>>>> bf57d3846f304426099c232fc5108b29f523dfce
  </body>

</html>
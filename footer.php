<footer class="dark">
      <div class="container">
        <div class="row">
        	<div class="col-md-3">
        		<ul class="list-inline" id="social">
              <li><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
			  </ul>
			</div>
        	<div class="col-md-3"><?php if ( dynamic_sidebar('footer1') ) : else : endif; ?></div>
        	<div class="col-md-3"><?php if ( dynamic_sidebar('footer2') ) : else : endif; ?></div>
        	<div class="col-md-3"><?php if ( dynamic_sidebar('footer3') ) : else : endif; ?></div>
          </div>
          <div class="row">
          <div class="col-md-12">
          <hr>
            <p>Copyright &copy; Provision Coffee 2013</p>
          </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script>
      jQuery(function() {
        jQuery('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
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
    <?php wp_footer(); // js scripts are inserted using this function ?>

  </body>

</html>
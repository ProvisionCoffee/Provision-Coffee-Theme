<<<<<<< HEAD
<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
							<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
							
							<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_content( __("Read more &raquo;","wpbootstrap") ); ?>
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
=======
<?php

get_header();

?>
    <!-- Jumps -->
    <div id="Jumps" class="Jumps">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Join Our Movement</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-2 text-center">
            <div class="Jump-item">
              <i class="Jump-icon fa fa-pagelines"></i>
              <h4>Our Story</h4>
              <p>Provision Coffee wants you to make memories around the table with people you care about while truly making a difference in the lives of farmers.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="Jump-item">
              <i class="Jump-icon fa fa-coffee"></i>
              <h4>Specialty Coffees</h4>
              <p>Browse our diverse selection of specialty coffees, and learn about the farmers who produce them.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="Jump-item">
              <i class="Jump-icon fa fa-gift"></i>
              <h4>Subscriptions</h4>
              <p>Become a subscriber of Provision Coffee, and receive freshly-roasted coffee direct to your door.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="Jump-item">
              <i class="Jump-icon fa fa-heart"></i>
              <h4>Hard Goods</h4>
              <p>Share the word of Provision with one of our many merchandise items.</p>
            </div>
          </div>       
        </div>
      </div>
    </div>
    <!-- /Jumps -->

    <!-- Empowering -->
    <div class="empowering">
      <div class="vert-text">
        <h1>Empowering Farmers</h1>
      </div>
    </div>
    <!-- /Empowering -->
    
    <!-- Intro -->
    <div id="about" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2>We work directly with coffee farmers in developing countries to ensure them economic stability</h2>
            <p class="lead">Find out more about the farms we've worked with and our future goals <a href="#">here</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->

    <!-- Coffees -->
    <div id="coffees" class="coffees">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Our Coffees</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
            <div class="coffees-item">
              <a href="#"><img class="img-coffees img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/label-red.jpg"></a>
              <h4>Red Label</h4>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="coffees-item">
              <a href="#"><img class="img-coffees img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/label-black.jpg"></a>
              <h4>Black Label</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
            <div class="coffees-item">
              <a href="#"><img class="img-coffees img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/label-white.jpg"></a>
              <h4>White Label</h4>
            </div>
          </div>
          <!-- <div class="col-md-4 text-center">
            <div class="coffees-item">
              <a href="#"><img class="img-coffees img-responsive" src=""></a>
              <h4>Last Item</h4>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <!-- /coffees -->

    <!-- Call to Action -->
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3>What are you waiting for, subscribe today!</h3>
            <a href="#" class="btn btn-lg btn-default">Subscribe Now</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Call to Action -->
    
<?php

get_footer();
>>>>>>> bf57d3846f304426099c232fc5108b29f523dfce

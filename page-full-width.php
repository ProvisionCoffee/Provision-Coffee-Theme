<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
			<script>
				jQuery(document).ready(function() {
    jQuery(window).scroll(function(e) {
        var s = jQuery(window).scrollTop(),
            d = jQuery(document).height(),
            c = jQuery(window).height(),
            opacityVal = (s / 150);

        jQuery('.blurred-image').css('opacity', opacityVal);
    });
});
			</script>
			<!-- Page Banner -->
			<div id="blurred-image-container" class="page-head">
			<h1><?php the_title(); ?></h1>
			<h3>This is a page description/tagline</h3>
    <div class="img-src" style="background-image:url('http://www.me.kylecesmat.com/wp-content/themes/provision/library/img/farmers-orig.jpg')"></div>
    <div class="img-src blurred-image" style="background-image:url('http://www.me.kylecesmat.com/wp-content/themes/provision/library/img/farmers-orig-blur.jpg');opacity:0"></div>
</div>
			
<!-- <div id="top"  style="background: url(http://www.me.kylecesmat.com/wp-content/themes/provision/library/img/farmers-orig.jpg) no-repeat center center fixed; ">
    	<div class="page-desc">
    	<h1><?php the_title(); ?></h1>
    	<h3>This is a page description/tagline</h3>
    	</div>
    </div> -->
			<div id="content" class="container foreground">
			
				<div id="main" class="col col-lg-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
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
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
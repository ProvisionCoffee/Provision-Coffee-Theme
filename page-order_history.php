<?php
/*
Template Name: Order History
*/
?>

<?php get_header(); ?>
						<!-- Page Banner -->
						<div id="content" class="container">
			
				<div id="account-header" class="row">
					<div class="col-md-12">
						<h1>Account Settings</h1>
						<h2>username@gmail.com</h2>
					</div>
				</div>
				<div id="account-content" class="row">
					<div class="col-md-6" id="manage">
						<ul class="nav nav-tabs">
							<li><a href="<?php echo get_option('home'); ?>/account-management">Account Details</a></li>
							<li><a href="<?php echo get_option('home'); ?>/manage-subscription">Manage Subscription</a></li>
							<li class="active"><a href="<?php echo get_option('home'); ?>/order-history">Order History</a></li>
						</ul>
		
		<div id="order-history" class="col-xs-12">
			<ul>
			<li class="recent-order"><span id="date">11/21/13</span><span id="item">Monthly Subscription</span><span id="invoice"><a href="#">View Invoice</a></span></li>
			<li class="recent-order"><span id="date">11/9/13</span><span id="item">Cafe de la Esperanza</span><span id="invoice"><a href="#">View Invoice</a></span></li>
			<li class="recent-order"><span id="date">11/21/13</span><span id="item">Monthly Subscription</span><span id="invoice"><a href="#">View Invoice</a></span></li>
			<li class="recent-order"><span id="date">11/9/13</span><span id="item">Cafe de la Esperanza</span><span id="invoice"><a href="#">View Invoice</a></span></li>
			<li class="recent-order"><span id="date">11/21/13</span><span id="item">Monthly Subscription</span><span id="invoice"><a href="#">View Invoice</a></span></li>
			<li class="recent-order"><span id="date">11/9/13</span><span id="item">Cafe de la Esperanza</span><span id="invoice"><a href="#">View Invoice</a></span></li>

			</ul>
		</div>
		
		
							</div>
					<div class="col-md-6" id="misc">
						<div class="row">
							<div class="col-xs-offset-4 col-xs-8">
							
							<div class="membership-details" id="account-meta-box">
							<h5>Membership Details</h5>
								<div id="member-name"><i class="fa fa-user"></i> Kyle Cesmat</div>
								<div id="member-email"><i class="fa fa-globe"></i> kylecesmat@gmail.com</div>
								<div id="member-since"><i class="fa fa-calendar"></i> January 2013</div>
								<div id="member-rank" class="goldRank"><i class="fa fa-trophy"></i> Gold</div>
								<button class="btn-sm btn-default">Edit Profile</button>
							</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-offset-4 col-xs-8">
							
							<div class="membership-details" id="featured-products">
							<h5>Featured Products</h5>
								<div class="featured-banner">
								</div>
							</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-offset-4 col-xs-8">
							
							<div class="membership-details" id="social-share">
							<h5>Social Share</h5>
							<ul>
								<li>Facebook</li>
								<li>Instagram</li>
								<li>Twitter</li>
								<li>YouTube</li>
								<li>Blog</li>
							</ul>
							</div>
							</div>
						</div>
					</div>
				</div>
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
<?php
/*
Template Name: Account Details
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
							<li class="active"><a href="<?php echo get_option('home'); ?>/account-management">Account Details</a></li>
							<li><a href="<?php echo get_option('home'); ?>/manage-subscription">Manage Subscription</a></li>
							<li><a href="<?php echo get_option('home'); ?>/order-history">Order History</a></li>
						</ul>
		<form class="form-horizontal" id="account-managment" role="form">
    <div class="form-group">
	<div class="col-sm-12"><h4>Name</h4></div>
    <div class="col-sm-12"><input type="fname" class="form-control" id="fname" placeholder="First Name"></div>
    <div class="col-sm-12"><input type="lname" class="form-control" id="lname" placeholder="Last Name"></div>      
    </div>
	<div class="form-group">
    <div class="col-sm-12"><h4>Email</h4></div>
    <div class="col-sm-12"><input type="email" class="form-control" id="inputEmail3" placeholder="Email"></div>
    </div>
 	<div class="form-group">   
    <div class="col-sm-12"><h4>Change Password</h4></div>
    <div class="col-sm-12"><input type="password" class="form-control" id="inputPassword1" placeholder="New Password"></div>
    <div class="col-sm-12"><input type="password" class="form-control" id="inputPassword2" placeholder="Verify Password"></div>
    <div class="col-sm-12"><button class="btn btn-lg btn-primary btn-block" type="submit">Update Profile</button></div>
		</div>

      </form>
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
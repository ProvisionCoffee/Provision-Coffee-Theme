<?php
/*
Template Name: Subscription Start
*/
?>

<?php get_header(); ?>
			

    <div class="container">
    <section class="subscription-builder">
    	<div class="row">
	    <div class="col-md-4">
	    <h1>How It Works</h1>
	    <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Step 1 - Roasting
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Step 2 - Packaging
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Step 3 - Shipping
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.      </div>
    </div>
  </div>
</div>
	    </div>
	    <div class="col-md-8">
	    	<div class="row ">
	    		<div class="col-sm-4 col-xs-4 item-preview">
	    			<div class="coffee-image" id="black">
	    				<div class="bag-img"></div>
	    			</div>
					<p class="desc">
	    				Chocolatey & rich. Ideal for espresso & auto-drip coffee makers.
	    			</p>
				</div>
				<div class="col-sm-4 col-xs-4 item-preview">
					<div class="coffee-image" id="red">
	    				<div class="bag-img"></div>
	    			</div>
					<p class="desc">
	    				Fruity & flavorful. Ideal for manual brewing and coffee purists.
	    			</p>
				</div>
				<div class="col-sm-4 col-xs-4 item-preview">
					<div class="coffee-image" id="white">
	    				<div class="bag-img"></div>
	    			</div>
	    			<p class="desc">
	    				Decaf. Just as delicious, but less caffeine.
	    			</p>
				</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-6">
	    			<h2>First Bag</h2>
	    			<select class="selectpicker">
						<option>Red Label</option>
						<option>Black Label</option>
						<option>White Label</option>
					</select>
	    		</div>
	    		<div class="col-md-6">
	    			<h2>Second Bag</h2>
	    			<select class="selectpicker">
						<option>Red Label</option>
						<option>Black Label</option>
						<option>White Label</option>
					</select>
	    		</div>
	    	</div>
	    	<div class="row">
		    	<div class="col-md-12 item-end">
		    		<small class="desc">Each subscription includes <b>two 12oz bags</b> of our seasonal/national/rotating coffees</small>
					<button class="btn btn-lg btn-primary">Subscribe <i class="fa fa-angle-double-right"></i></button>
		    	</div>
	    	</div>
	    </div>
	    <!--<div class="col-md-6 preview">
	    <div class="col-md-6">
	    	<div id="item1">
				<div id="red-label">
				<img src="http://www.me.kylecesmat.com/wp-content/uploads/2014/02/red-label-small.png">
				<small class="desc">Our red label coffee is perfect for individuals who prefer more citrusy notes or favor brewing by hand</small>
				</div>
	    	</div>
	    	<select class="selectpicker">
				<option>Red Label</option>
				<option>Black Label</option>
				<option>White Label</option>
			</select>
	    </div>
	    <div class="col-md-6">
	    	<!-- Right Coffee Selection
	    	<div id="item2">
	    		<img src="http://www.me.kylecesmat.com/wp-content/uploads/2014/02/white-label-small.png">
	    		<small class="desc">Our white label coffee is naturally decaffeinated and pairs extremely well with cream</small>
	    	</div>
	    	<select class="selectpicker">
				<option>Red Label</option>
				<option>Black Label</option>
				<option>White Label</option>
			</select>

	  </div>
	    <small class="desc">Each subscription includes <b>two 12oz bags</b> of our seasonal/national/rotating coffees</small>
	    <button class="btn btn-lg btn-primary">Subscribe <i class="fa fa-angle-double-right"></i></button>
    	</div>-->
	    
    	</div>
    </section>
    
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

<script type="text/javascript">
      window.onload=function(){
      jQuery('.selectpicker').selectpicker();
      };
    </script>
<?php get_footer(); ?>
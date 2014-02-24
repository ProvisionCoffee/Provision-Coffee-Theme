<?php
/*
Template Name: Payment-Form
*/
?>

<?php get_header(); ?>
			

    <div class="container">
    <section class="checkout">
    	<div class="row">
    	<div class="col-md-4">
    	</div>
    	<div class="col-md-4">
    	<h1 style="text-align:center;">Checkout</h1>
    	<div id="order-message" style="text-align:center;">
	    	<p><b>You're almost there!</b> We just have to collect a few more things from you before we can send out your delicious coffee!</p>
	    	<p>Your coffee will arrive by <b>February 29th</b></p>
    	</div>
	    <div class="credit-card-input no-js" id="skeuocard">
	    <!-- Need detection & better degredation -->
  <p class="no-support-warning">
    Either you have Javascript disabled, or you're using an unsupported browser, amigo! That's why you're seeing this old-school credit card input form instead of a fancy new Skeuocard. On the other hand, at least you know it gracefully degrades...
  </p>
  <label for="cc_type">Card Type</label>
  <select name="cc_type">
    <option value="">...</option>
    <option value="visa">Visa</option>
    <option value="discover">Discover</option>
    <option value="mastercard">MasterCard</option>
    <option value="maestro">Maestro</option>
    <option value="jcb">JCB</option>
    <option value="unionpay">China UnionPay</option>
    <option value="amex">American Express</option>
    <option value="dinersclubintl">Diners Club</option>
  </select>
  <label for="cc_number">Card Number</label>
  <input type="text" name="cc_number" id="cc_number" placeholder="XXXX XXXX XXXX XXXX" maxlength="19" size="19">
  <label for="cc_exp_month">Expiration Month</label>
  <input type="text" name="cc_exp_month" id="cc_exp_month" placeholder="00">
  <label for="cc_exp_year">Expiration Year</label>
  <input type="text" name="cc_exp_year" id="cc_exp_year" placeholder="00">
  <label for="cc_name">Cardholder's Name</label>
  <input type="text" name="cc_name" id="cc_name" placeholder="John Doe">
  <label for="cc_cvc">Card Validation Code</label>
  <input type="text" name="cc_cvc" id="cc_cvc" placeholder="123" maxlength="3" size="3">
</div>

<form class="form-horizontal" id="billing-info" role="form">
        <div class="form-group">    
    <div class="col-sm-12">
      <input type="address" class="form-control" id="address" placeholder="Street Address">
    </div>
  </div>
  
  <div class="form-group">   
    <div class="col-sm-8">
      <input type="city" class="form-control" id="city" placeholder="City">
    </div>
    <div class="col-sm-4">
      <select class="form-control" id="state"><option value='AL'>Alabama</option><option value='AK'>Alaska</option><option value='AZ'>Arizona</option><option value='AR'>Arkansas</option><option value='CA'>California</option><option value='CO'>Colorado</option><option value='CT'>Connecticut</option><option value='DE'>Delaware</option><option value='FL'>Florida</option><option value='GA'>Georgia</option><option value='HI'>Hawaii</option><option value='ID'>Idaho</option><option value='IL'>Illinois</option><option value='IN'>Indiana</option><option value='IA'>Iowa</option><option value='KS'>Kansas</option><option value='KY'>Kentucky</option><option value='LA'>Louisiana</option><option value='ME'>Maine</option><option value='MD'>Maryland</option><option value='MA'>Massachusetts</option><option value='MI'>Michigan</option><option value='MN'>Minnesota</option><option value='MS'>Mississippi</option><option value='MO'>Missouri</option><option value='MT'>Montana</option><option value='NE'>Nebraska</option><option value='NV'>Nevada</option><option value='NH'>New Hampshire</option><option value='NJ'>New Jersey</option><option value='NM'>New Mexico</option><option value='NY'>New York</option><option value='NC'>North Carolina</option><option value='ND'>North Dakota</option><option value='OH'>Ohio</option><option value='OK'>Oklahoma</option><option value='OR'>Oregon</option><option value='PA'>Pennsylvania</option><option value='RI'>Rhode Island</option><option value='SC'>South Carolina</option><option value='SD'>South Dakota</option><option value='TN'>Tennessee</option><option value='TX'>Texas</option><option value='UT'>Utah</option><option value='VT'>Vermont</option><option value='VA'>Virginia</option><option value='WA'>Washington</option><option value='WV'>West Virginia</option><option value='WI'>Wisconsin</option><option value='WY'>Wyoming</option></select>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-6">
	    <input type="zipCode" class="form-control" id="zipCode" placeholder="Zip Code">
    </div>
    <div class="col-sm-6">
      <div class="checkbox">
        <label>
          <input type="checkbox"> My Shipping Address is Different
        </label>
      </div>
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-sm-12">
      
    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button></div>
	</div>
      </form>
    	</div>
    	</div>
    	<div class="col-md-4">
    	</div>
    	</div>
    </section>
    
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

    <script src="../wp-content/themes/provision/library/js/demo.fix.js"></script>
    <script src="../wp-content/themes/provision/library/js/skeuocard.js"></script>
    <script type="text/javascript">

      jQuery(document).ready(function(){
  card = new Skeuocard(jQuery("#skeuocard"));
});
    </script>
    <?php get_footer(); ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore Website Template | Home :: W3layouts</title>
		<link href="{{ asset('/css/style.css')}}" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{asset('css/responsiveslides.css')}}">
		<script src="{{asset('/js/jquery.min.js')}}"></script>
		<script src="{{asset('/js/responsiveslides.min.js')}}"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form method="post" action="find">
				@csrf
				<input class="input" type="text" placeholder="Search here" name="keyf">
				<button class="search-btn">Search</button>
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>
					<li><a href="#">Register</a></li>
					<li><a href="home">Login</a></li>
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">My account</a></li>
					<li><div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<?php
										$ic = 0; 
										$total = 0;
										foreach($cartByID as $value) { 
											$total += $value->sp_sl;
										}?>
										<div class="qty"><?php echo $total ?></div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
										<?php
										foreach($cartByID as $value) { ?>
											<div class="product-widget">
												<div class="product-img">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#"><?php echo $value->sp_name ?></a></h3>
													<h4 class="product-price"><span class="qty"><?php echo $value->sp_sl ?>x</span>$<?php echo $value->sp_price ?></h4>
												</div>
												<button onclick="window.location.href = '/nhom22/public/delete/<?php echo $value->sp_id ?>';" class="delete"><i class="fa fa-close"></i></button>
												<?php $ic++; ?>
											</div>
											<?php } ?>
										</div>
										<div class="cart-summary">
											<small><?php echo $ic ?> Item(s) selected</small>
											<?php 
											$totalPrice = 0;
											foreach($cartByID as $value) {
												$totalPrice += $value->sp_price;
											} ?>
											<h5>SUBTOTAL: $<?php echo $totalPrice ?></h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="{{url('/')}}"><img src="{{ asset('images/logo.png')}}" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
			<li><a href="{{url('/')}}">Home</a></li>
			<?php foreach($protypes as $value) { ?>
						<li><a href="type/{{ $value->type_ID }}"><?php echo $value->type_name ?></a></li>
						<?php } ?>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
	<!--start-image-slider---->
					<div class="wrap">
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="{{ asset('images/1.png')}}" alt=""></li>
					      <li><img src="{{ asset('images/2.png')}}" alt=""></li>
					      <li><img src="{{ asset('images/1.png')}}" alt=""></li>
								aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
					</div>
		    <div class="clear"> </div>
		    <div class="wrap">
			<div class="clear"> </div>
		    <div class="wrap">
		
		    	</div>
		    	
		    </div>
		    </div>
		
		    <div class="clear"> </div>
		

		    </div></div>
		<div class="footer">
			<div class="wrap">
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Our Info</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Latest-News</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Store Location</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<h3>Order-online</h3>
					<p>089-8888-2222</p>
					<p>088-9999-9999</p>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>News-Letter</h3>
					<form>
						<input type="text"><input type="submit" value="go" />
					</form>
					<h3>Follow Us:</h3>
					 <ul>
					 	<li><a href="#"><img src="{{ asset('images/twitter.png')}}" title="twitter" />Twitter</a></li>
					 	<li><a href="#"><img src="{{ asset('images/facebook.png')}}" title="Facebook" />Facebook</a></li>
					 	<li><a href="#"><img src="{{ asset('images/rss.png')}}" title="Rss" />Rss</a></li>
					 </ul>
				</div>
			</div>
		</div>
		
		<div class="clear"> </div>
		<div class="wrap">
		<div class="copy-right">
			<p>&copy; 2019 Mobile. All Rights Reserved | Design by  <a href="#">WEB2_NHOM3</a></p>
		</div>
		</div>
		</div>
	</body>
</html>


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('default/common/header_single'); ?>
</head>
<body>
	<!--top-header-->
	<div class="top-header">
	<?php $this->load->view('default/common/topheader'); ?>
</div>
<!--top-header-->
<!--bottom-header-->
	<div class="header-bottom">
		<?php $this->load->view('default/common/bottomheader');?>
	</div>
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Lorem Ipsum</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="<?php echo base_url('asset/asset_default/images/s1.jpg')?>">
									<img src="<?php echo base_url('asset/asset_default/images/s1.jpg')?>" />
								</li>
								<li data-thumb="<?php echo base_url('asset/asset_default/images/s2.jpg')?>">
									<img src="<?php echo base_url('asset/asset_default/images/s2.jpg')?>" />
								</li>
								<li data-thumb="<?php echo base_url('asset/asset_default/images/s3.jpg')?>">
									<img src="<?php echo base_url('asset/asset_default/images/s3.jpg')?>" />
								</li>
								<li data-thumb="<?php echo base_url('asset/asset_default/images/s4.jpg')?>">
									<img src="<?php echo base_url('asset/asset_default/images/s4.jpg')?>" />
								</li>
							</ul>
						</div>
<!-- FlexSlider -->
  <script defer src="<?php echo base_url('asset/asset_default/js/jquery.flexslider.js')?>"></script>
<link rel="stylesheet" href="<?php echo base_url('asset/asset_default/css/flexslider.css')?>" type="text/css" media="screen" />

	<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
				</div>
				<div class="col-md-7 single-top-right">
					<div class="details-left-info simpleCart_shelfItem">
						<h3>Accessories Latest</h3>
						<p class="availability">Availability: <span class="color">In stock</span></p>
						<div class="price_single">
							<span class="actual item_price">IDR6000000</span><a href="#">click for tip</a>
						</div>
						<h2 class="quick">Quick Overview:</h2>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<ul class="product-colors">
							<h3>Meet Up Date :</h3>
							<li><span><h4>Thursday, 18 Aug 2016</h4> </span></a></li>
							<div class="clear"> </div>
						</ul>
						<ul class="size">
							<h3>And The Winner is</h3>
							<li>	<img src="<?php echo base_url('asset/images/winner2.jpg')?>"style="width:300px;" /></li>

						</ul>

					<div class="clearfix"> </div>
				<!--<div class="single-but item_add">
					<input type="submit" value="add to cart"/>
				</div>
			-->
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
					<div class="latest products">
						<div class="product-one">
							<div class="col-md-4 product-left single-left">
								<div class="p-one simpleCart_shelfItem">

									<a href="#">
								<img src="<?php echo base_url('asset/asset_default/images/shoes-1.png')?>" alt="" />
								<div class="mask mask1">
									<span>Quick View</span>
								</div>
							</a>
									<h4>Aenean placerat</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>

								</div>
							</div>
							<div class="col-md-4 product-left single-left">
								<div class="p-one simpleCart_shelfItem">
									<a href="#">
								<img src="<?php echo base_url('asset/asset_default/images/shoes-2.png')?>" alt="" />
								<div class="mask mask1">
									<span>Quick View</span>
								</div>
							</a>
									<h4>Aenean placerat</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>

								</div>
							</div>
							<div class="col-md-4 product-left single-left">
								<div class="p-one simpleCart_shelfItem">
									<a href="#">
								<img src="<?php echo base_url('asset/asset_default/images/shoes-3.png')?>" alt="" />
								<div class="mask mask1">
									<span>Quick View</span>
								</div>
							</a>
									<h4>Aenean placerat</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="product-one">
							<div class="col-md-4 product-left single-left">
								<div class="p-one simpleCart_shelfItem">
									<a href="#">
								<img src="<?php echo base_url('asset/asset_default/images/shoes-13.png')?>" alt="" />
								<div class="mask mask1">
									<span>Quick View</span>
								</div>
							</a>
									<h4>Aenean placerat</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
								</div>
							</div>
							<div class="col-md-4 product-left single-left">
								<div class="p-one simpleCart_shelfItem">
									<a href="#">
								<img src="<?php echo base_url('asset/asset_default/images/shoes-5.png')?>" alt="" />
								<div class="mask mask1">
									<span>Quick View</span>
								</div>
							</a>
									<h4>Aenean placerat</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
								</div>
							</div>
							<div class="col-md-4 product-left single-left">
								<div class="p-one simpleCart_shelfItem">
									<a href="#">
								<img src="<?php echo base_url('asset/asset_default/images/shoes-6.png')?>" alt="" />
								<div class="mask mask1">
									<span>Quick View</span>
								</div>
								</a>
									<h4>Aenean placerat</h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 single-right">
					<h3>Categories</h3>
					<ul class="product-categories">
						<li><a href="#">Blucher Shoe</a> <span class="count">(14)</span></li>
						<li><a href="#">Clog Shoe</a> <span class="count">(2)</span></li>
						<li><a href="#">Snow Boot Shoe</a> <span class="count">(2)</span></li>
						<li><a href="#">Galesh Shoe</a> <span class="count">(11)</span></li>
						<li><a href="#">pataugas Shoe</a> <span class="count">(3)</span></li>
						<li><a href="#">Jazz Shoe</a> <span class="count">(3)</span></li>
					</ul>
					<h3>Colors</h3>
					<ul class="product-categories">
						<li><a href="#">Green</a> <span class="count">(14)</span></li>
						<li><a href="#">Blue</a> <span class="count">(2)</span></li>
						<li><a href="#">Red</a> <span class="count">(2)</span></li>
						<li><a href="#">Gray</a> <span class="count">(8)</span></li>
						<li><a href="#">Green</a> <span class="count">(11)</span></li>
						<li><a href="#">Yellow</a> <span class="count">(2)</span></li>
					</ul>
					<h3>Sizes</h3>
					<ul class="product-categories">
						<li><a href="#">5.5</a> <span class="count">(14)</span></li>
						<li><a href="#">6</a> <span class="count">(2)</span></li>
						<li><a href="#">6.5</a> <span class="count">(2)</span></li>
						<li><a href="#">7</a> <span class="count">(8)</span></li>
						<li><a href="#">7.5</a> <span class="count">(11)</span></li>
					</ul>
					<h3>Price</h3>
					<ul class="product-categories p1">
						<li><a href="#">600$-700$</a> <span class="count">(14)</span></li>
						<li><a href="#">700$-800$</a> <span class="count">(2)</span></li>
						<li><a href="#">800$-900$</a> <span class="count">(2)</span></li>
						<li><a href="#">900$-1000$</a> <span class="count">(8)</span></li>
						<li><a href="#">1000$-1100$</a> <span class="count">(11)</span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->
	<!--start-footer-->
	<div class="footer">
		<?php $this->load->view('default/common/footer_single'); ?>
	</div>
	<!--end-footer-->
	<!--end-footer-text-->
	<div class="footer-text">
		<div class="container">
			<div class="footer-main">
				<p class="footer-class">© 2015 Free Style All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear'
								 		};
										*/

										$().UItoTop({ easingType: 'easeOutQuart' });

									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-text-->
</body>
</html>

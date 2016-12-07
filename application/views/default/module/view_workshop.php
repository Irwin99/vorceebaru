<!-- Container Product -->
	<div class="container" style="margin-top:70px">
		<div id="vc-detail-product">
			<div class="row">
				<div class="col-md-4 vc-dotted col-xs-2 col-sm-4">
				</div>
				<div class="col-md-4 text-center col-xs-8 col-sm-4">
					<h2 style="margin-top:-15px;"><?php echo $result['name_category']?></h2>	
				</div>
				<div class="col-md-4 vc-dotted col-xs-2 col-sm-4">
				</div>
			</div>
			<div id="vc-detail-product">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<p><?php echo $result['description_category']?></p>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>


					<h3 class="text-center">NOW ON CLASS</h3>
					<?php
						if($result['image_workshop'] != ""){
							?>
							<div class="col-xs-12" style="background-image:url(<?php echo base_url($result['image_workshop'])?>);background-size: cover;background-position: center;height: 350px;margin-bottom: 5px;">
							</div>
							<?php
						}
						else{
							?>
							<i class="fa fa-image fa-5x"></i>
							<?php
						}
					?>
				<div class="row vc-product-detail">
					<div class="col-md-1 col-sm-1 col-xs-1 vc-product-detail-box" style="margin-top: 45px;">
						<p><i class="fa fa-map-marker"></i><br/></p>
						<p><i class="fa fa-tag"></i><br/></p>
						<p><i class="fa fa-calendar"></i><br/></p>
						<p><i class="fa fa-clock-o"></i><br/></p>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-11 text-left vc-product-detail-box" style="margin-top: 45px;">
						<p><?php echo $result['location']?><br/></p>
						<p>Rp. <?php echo number_format($result['course_fee'])?><br/></p>
						<p><?php echo date('D, d M Y',strtotime($result['date_workshop']))?></p>
						<p><?php echo date('H:i',strtotime($result['hour_start']))." - ".date('H:i',strtotime($result['hour_end']))?></p>
						<div class="form-group" style="margin-top:20px">
							<a href="<?php echo base_url('page/book-now/'.$result['id_workshop'].'/'.$this->mod->urlFriendly($result['workshop_title']))?>">
							<button class="btn-tip" type="text" type="submit" style="width:100%">BOOK NOW</button>
							</a>
						</div>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12 vc-product-detail-box">
						<h3><?php echo $result['workshop_title']?></h3>
						<p class="text-left"><?php echo $result['workshop_description']?></p>
						<div class="text-center">
						<span>Share it on: </span>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('page/view-workshop/'.$result['id_workshop'].'/'.$this->mod->urlFriendly($result['workshop_title']))?>">
						<i class="fa fa-facebook fa-fw"></i></a>
						<!-- <a href="https://www.facebook.com/sharer/sharer.php?u=http://vorcee.com/page/view-workshop/4/adyanthy-media-workshop">
						<i class="fa fa-facebook fa-2x"></i></a> -->
						<i class="fa fa-twitter fa-fw"></i>
						<i class="fa fa-linkedin fa-fw"></i>
						<i class="fa fa-instagram fa-fw"></i>
						</div>
					</div>
				</div>

			</div>
			<div class="row" style="margin-top:25px">
				<div class="col-md-3 col-lg-4 col-sm-3 col-xs-1 vc-dotted">
				</div>
				<div class="col-md-6 col-lg-4 col-sm-6 col-xs-10 text-center">
					<h2 style="margin-top:-15px;">YOU MIGHT ALSO LIKE</h2>	
				</div>
				<div class="col-md-3 col-lg-4 col-sm-3 col-xs-1 vc-dotted">
				</div>
			</div>
			<div class="row text-center visible-lg">
				<div class="col-lg-4 vc-product-might">
					<div class="vc-one">
			          <div class="imgB2">
			          	<h4 style="margin-top:370px">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> 
			            <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
				<div class="col-lg-4 vc-product-might">
					<div class="vc-one">
			          <div class="imgB2">
			          	<h4 style="margin-top:370px">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
				<div class="col-lg-4 vc-product-might">
					<div class="vc-one">
			          <div class="imgB2">
			          	<h4 style="margin-top:370px">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
			</div>
			<div class="row text-center visible-md">
				<div class="col-md-4 vc-product-might">
					<div class="vc-one">
			          <div class="imgB2-md">
			          	<h4 style="margin-top:300px">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> 
			            <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
				<div class="col-md-4 vc-product-might">
					<div class="vc-one">
			          <div class="imgB2-md">
			          	<h4 style="margin-top:300px">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
				<div class="col-md-4 vc-product-might">
					<div class="vc-one">
			          <div class="imgB2-md">
			          	<h4 style="margin-top:300px">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
			</div>
			<div class="row text-center visible-sm">
				<div class="col-sm-4 vc-product-might">
					<div class="vc-one">
			          <div class="imgB2-sm">
			          	<h4 style="margin-top:220px">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> 
			            <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
				<div class="col-sm-4 vc-product-might">
					<div class="vc-one">
			          <div class="imgB2-sm">
			          	<h4 style="margin-top:220px">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
				<div class="col-sm-4 vc-product-might">
					<div class="vc-one-xs">
			          <div class="imgB2-sm">
			          	<h4 style="margin-top:220px">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
			</div>
			<div class="row text-center visible-xs">
				<div class="col-xs-5 vc-product-might-xs">
					<div class="vc-one-xs">
			          <div class="imgB2-xs">
			          	<h4 style="margin-top:185%">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> 
			            <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
				<div class="col-xs-5 vc-product-might-xs">
					<div class="vc-one-xs">
			          <div class="imgB2-xs">
			          	<h4 style="margin-top:185%">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
				<div class="col-xs-5 vc-product-might-xs">
					<div class="vc-one-xs">
			          <div class="imgB2-xs">
			          	<h4 style="margin-top:185%">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
				<div class="col-xs-5 vc-product-might-xs">
					<div class="vc-one-xs">
			          <div class="imgB2-xs">
			          	<h4 style="margin-top:185%">
			            	<b>Isyana Sarasvati's Gallery</b><br /><br />
			            </h4>
			          </div>
			            <a href="single.html"><img alt="" class="img-responsive" /></a> <div id="vc-box" style="background-image:url(<?php echo base_url('asset/images/workshop2.jpg')?>)">
						  <div id="vc-overlay">
						    <span id="vc-plus">
						    	<a href="<?php echo base_url('page/view-product/')?>">
			                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
			                    </a>
						    </span>
						  </div>
						</div>
		          	</div>
				</div>
			</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ./ End of Container -->
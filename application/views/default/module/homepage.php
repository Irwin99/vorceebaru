<?php $this->load->view('default/common/banner');?>
<div class="container">
	<section id="scroll">
		<div class="visible-lg" id="vc-discover">
			<div class="row">
				<div class="col-md-4 vc-dotted col-xs-3 col-sm-4">
					
				</div>
				<div class="col-md-4 text-center col-sm-4">
					<h2 style="margin-top:-15px;">ACTIVE CLASS</h2>	
				</div>
				<div class="col-md-4 vc-dotted col-xs-3 col-sm-4">
					
				</div>
			</div>
		</div>
		<div class="visible-md" id="vc-discover-md">
			<div class="row">
				<div class="col-md-4 vc-dotted col-xs-3 col-sm-4">
					
				</div>
				<div class="col-md-4 text-center col-sm-4">
					<h2 style="margin-top:-15px;">ACTIVE CLASS</h2>	
				</div>
				<div class="col-md-4 vc-dotted col-xs-3 col-sm-4">
					
				</div>
			</div>
		</div>
		<div class="visible-sm" id="vc-discover-sm">
			<div class="row">
				<div class="col-md-4 vc-dotted col-xs-3 col-sm-4">
					
				</div>
				<div class="col-md-4 text-center col-sm-4">
					<h2 style="margin-top:-15px;">ACTIVE CLASS</h2>	
				</div>
				<div class="col-md-4 vc-dotted col-xs-3 col-sm-4">
					
				</div>
			</div>
		</div>
		<div class="visible-xs" id="vc-discover-sm">
			<div class="row">
				<div class="col-xs-3 vc-dotted col-xs-3 col-sm-4">
					
				</div>
				<div class="col-xs-6 text-center col-sm-4">
					<h2 style="margin-top:-15px;">ACTIVE CLASS</h2>	
				</div>
				<div class="col-xs-3 vc-dotted col-xs-3 col-sm-4">
					
				</div>
			</div>
		</div>
	</section>
	<?php
		if($results!=FALSE){
			$i = 1;
			foreach ($results as $rows) {
				if($i%3==1){
					?>
					<div class="row" id="row-recommendonation">
					<?php				
				}
				?>
				<div class="col-lg-4 visible-lg">
		          <div class="vc-one">
		          <div class="imgB1">
		          	<h6 style="margin-top:370px">
		          		<b><?php echo $rows->name_category?></b>
		            </h6>
		            <h4><?php echo $rows->workshop_title?></h4><br />
		          </div>
		            <a href="<?php echo base_url('page/view-workshop/'.$rows->id_workshop.'/'.$this->mod->urlFriendly($rows->workshop_title))?>"><img alt="" class="img-responsive" /></a> 
		            <?php
		            	if($rows->image_workshop==""){
		            		$image = base_url('asset/images/workshop2.jpg');
		            	}
		            	else{
		            		$image = $rows->image_workshop;
		            	}
		            ?>
		            <div id="vc-box" style="background-image:url(<?php echo base_url($image)?>);background-size: cover;background-position: center;">
					  <div id="vc-overlay">
					    <span id="vc-plus">
					    	&nbsp;
					    </span>
					  </div>
					</div>
		          </div>
		          <div class="vc-detail-workshop">
		          <h2><?php echo $rows->workshop_title?></h2>
		          Course Fee : IDR <?php echo number_format($rows->course_fee);?><br/>
		            	Time &Date : <?php echo date('D, d M Y',strtotime($rows->date_workshop))?>, <?php echo date('H:i',strtotime($rows->hour_start)).' - '.date('H:i',strtotime($rows->hour_end));?><br />
		            	Location : <?php echo $rows->location?><br /><br/>
		            <a href="<?php echo base_url('page/view-workshop/'.$rows->id_workshop.'/'.$this->mod->urlFriendly($rows->workshop_title))?>">
		                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
		                    </a>
		           </div>
		        </div>
		        <div class="col-md-4 visible-md">
		          <div class="vc-one">
		          <div class="imgB1-md">
		          	<h6 style="margin-top:280px">
		          		<b><?php echo $rows->name_category?></b>
		            </h6>
		            <h4><?php echo $rows->workshop_title?></h4><br />
		          </div>
		            <a href="<?php echo base_url('page/view-workshop/'.$rows->id_workshop.'/'.$this->mod->urlFriendly($rows->workshop_title))?>"><img alt="" class="img-responsive" /></a> 
		            <?php
		            	if($rows->image_workshop==""){
		            		$image = base_url('asset/images/workshop2.jpg');
		            	}
		            	else{
		            		$image = $rows->image_workshop;
		            	}
		            ?>
		            <div id="vc-box" style="background-image:url(<?php echo base_url($image)?>);background-size: cover;background-position: center;">
					  <div id="vc-overlay">
					    <span id="vc-plus">
					    	&nbsp;
					    </span>
					  </div>
					</div>
		          </div>
		          <div class="vc-detail-workshop">
		          <h2><?php echo $rows->workshop_title?></h2>
		          Course Fee : IDR <?php echo number_format($rows->course_fee);?><br/>
		            	Time &Date : <?php echo date('D, d M Y',strtotime($rows->date_workshop))?>, <?php echo date('H:i',strtotime($rows->hour_start)).' - '.date('H:i',strtotime($rows->hour_end));?><br />
		            	Location : <?php echo $rows->location?><br /><br/><br />
		            <a href="<?php echo base_url('page/view-workshop/'.$rows->id_workshop.'/'.$this->mod->urlFriendly($rows->workshop_title))?>">
		                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
		                    </a>
		           </div>
		        </div>
		        <div class="col-sm-4 visible-sm">
		          <div class="vc-one">
		          <div class="imgB1-sm">
		          	<h6 style="margin-top:178px">
		          		<b><?php echo $rows->name_category?></b>
		            </h6>
		            <h4><?php echo $rows->workshop_title?></h4><br />
		          </div>
		            <a href="<?php echo base_url('page/view-workshop/'.$rows->id_workshop.'/'.$this->mod->urlFriendly($rows->workshop_title))?>"><img alt="" class="img-responsive" /></a> 
		            <?php
		            	if($rows->image_workshop==""){
		            		$image = base_url('asset/images/workshop2.jpg');
		            	}
		            	else{
		            		$image = $rows->image_workshop;
		            	}
		            ?>
		            <div id="vc-box" style="background-image:url(<?php echo base_url($image)?>);background-size: cover;background-position: center;">
					  <div id="vc-overlay">
					    <span id="vc-plus">
					    	&nbsp;
					    </span>
					  </div>
					</div>
		          </div>
		          <div class="vc-detail-workshop">
		          <h2><?php echo $rows->workshop_title?></h2>
		          Course Fee : IDR <?php echo number_format($rows->course_fee);?><br/>
		            	Time &Date : <?php echo date('D, d M Y',strtotime($rows->date_workshop))?>, <?php echo date('H:i',strtotime($rows->hour_start)).' - '.date('H:i',strtotime($rows->hour_end));?><br />
		            	Location : <?php echo $rows->location?><br /><br/><br />
		            <a href="<?php echo base_url('page/view-workshop/'.$rows->id_workshop.'/'.$this->mod->urlFriendly($rows->workshop_title))?>">
		                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
		                    </a>
		           </div>
		        </div>
		        <div class="col-xs-12 visible-xs">
		          <div class="vc-one">
		          <div class="imgB1-xs">
		          	<h6 style="margin-top:178px">
		          		<b><?php echo $rows->name_category?></b>
		            </h6>
		            <h4><?php echo $rows->workshop_title?></h4><br />
		          </div>
		            <a href="<?php echo base_url('page/view-workshop/'.$rows->id_workshop.'/'.$this->mod->urlFriendly($rows->workshop_title))?>"><img alt="" class="img-responsive" /></a> 
		            <?php
		            	if($rows->image_workshop==""){
		            		$image = base_url('asset/images/workshop2.jpg');
		            	}
		            	else{
		            		$image = $rows->image_workshop;
		            	}
		            ?>
		            <div id="vc-box" style="background-image:url(<?php echo base_url($image)?>);background-size: cover;background-position: center;">
					  <div id="vc-overlay">
					    <span id="vc-plus">
					    	&nbsp;
					    </span>
					  </div>
					</div>
		          </div>
		          <div class="vc-detail-workshop">
		          <h2><?php echo $rows->workshop_title?></h2>
		          Course Fee : IDR <?php echo number_format($rows->course_fee);?><br/>
		            	Time &Date : <?php echo date('D, d M Y',strtotime($rows->date_workshop))?>, <?php echo date('H:i',strtotime($rows->hour_start)).' - '.date('H:i',strtotime($rows->hour_end));?><br />
		            	Location : <?php echo $rows->location?><br /><br/><br />
		            <a href="<?php echo base_url('page/view-workshop/'.$rows->id_workshop.'/'.$this->mod->urlFriendly($rows->workshop_title))?>">
		                        <button class="btn-tip" type="submit">View Details <i class="fa fa-angle-double-right"></i></button>
		                    </a>
		           </div>
		        </div>
				<?php
				if($i%3==0 || $i==$total_rows){
					?>
					</div>
					<?php
				}
				$i++;
			}
		}
	?>
			<!-- <div class="row" id="row-recommendonation">
				<div class="col-md-4 col-sm-6 col-xs-12">
		          <div class="vc-one">
		          <div class="imgB1">
		          	<h4 style="margin-top:300px">
		            	<b>Isyana Sarasvati's Gallery</b><br /><br />
		            	Course Fee : IDR 400,000<br/>
		            	Date : 14 Nov(Mon) 2016<br/>
		            	Time : 10AM-2PM
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
		        <div class="col-md-4 col-sm-6 col-xs-12">
		          <div class="vc-one">
		          <div class="imgB1">
		          	<h4 style="margin-top:300px">
		            	<b>Isyana Sarasvati's Gallery</b><br /><br />
		            	Course Fee : IDR 400,000<br/>
		            	Date : 14 Nov(Mon) 2016<br/>
		            	Time : 10AM-2PM
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
		        <div class="col-md-4 col-sm-6 col-xs-12">
		          <div class="vc-one">
		          <div class="imgB1">
		          	<h4 style="margin-top:300px">
		            	<b>Isyana Sarasvati's Gallery</b><br /><br />
		            	Course Fee : IDR 400,000<br/>
		            	Date : 14 Nov(Mon) 2016<br/>
		            	Time : 10AM-2PM
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
		        <div class="clearfix"> </div>
			</div>
			<div class="row" id="row-recommendonation">
				<div class="col-md-4 col-sm-6 col-xs-12">
		          <div class="vc-one">
		          <div class="imgB1">
		          	<h4 style="margin-top:300px">
		            	<b>Isyana Sarasvati's Gallery</b><br /><br />
		            	Course Fee : IDR 400,000<br/>
		            	Date : 14 Nov(Mon) 2016<br/>
		            	Time : 10AM-2PM
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
		        <div class="col-md-4 col-sm-6 col-xs-12">
		          <div class="vc-one">
		          <div class="imgB1">
		          	<h4 style="margin-top:300px">
		            	<b>Isyana Sarasvati's Gallery</b><br /><br />
		            	Course Fee : IDR 400,000<br/>
		            	Date : 14 Nov(Mon) 2016<br/>
		            	Time : 10AM-2PM
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
		        <div class="col-md-4 col-sm-6 col-xs-12">
		          <div class="vc-one">
		          <div class="imgB1">
		          	<h4 style="margin-top:300px">
		            	<b>Isyana Sarasvati's Gallery</b><br /><br />
		            	Course Fee : IDR 400,000<br/>
		            	Date : 14 Nov(Mon) 2016<br/>
		            	Time : 10AM-2PM
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
		        <div class="clearfix"> </div>
			</div>
		</div>
	 -->
	 </div>
	<div class="bgimg-1">
		<div class="overlay-image play-button-container">
			SEE WHAT WE DO<br />
			<h2>Get Involved with our environment
			<a href="#">Learn More</a></h2>
			<div class="form-group">
				<button class="btn-tip" type="text" type="submit" style="width:50%">Apply Now</button>
			</div>
		</div>
	</div>



	<div id="vc-modal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <!-- <div class="modal-header">
                                    </div> -->
	                                    <div class="modal-body">
	                                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
	                                        <h4 class="modal-title text-center">Buy & Donate</h4>
	                                        <div class="modal-body">
	                                        	<div class="col-md-3" style="padding-top:5px;text-align:center">
	                                        		<img src="<?php echo base_url('asset/asset_default/images/product1.jpg')?>" class="img-responsive">
	                                        		IDR 50,000
	                                        	</div>
	                                        	<div class="col-md-9" style="">
	                                        		<div class="col-md-12">
	                                        			<p style="text-align:justify">
	                                        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                                        			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                                        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                                        			consequat.
	                                        			</p>
	                                        		</div>
		                                        	<div class="col-md-7">
		                                        		<div class="form-group">
		                                        			<input type="text" name="donate" class="form-control" placeholder="Your donation tip here">
		                                        		</div>
		                                        	</div>
		                                        	<div class="col-md-5">
		                                        		<button class="btn-tip" type="submit">Buy & Donate</button>
		                                        	</div>
		                                        	<div class="col-md-12">
		                                        		<a href="<?php echo base_url('page/view-gallery/')?>">
		                                        		<button class="btn btn-default form-control" type="submit">View All <i class="fa fa-angle-double-right"></i></button>
		                                        		</a>
		                                        	</div>
	                                        	</div>
	                                        	<div class="clearfix"></div>
	                                        </div>
	                                    </div>
                                    </div>
                                </div>
    </div>
    <div id="vc-modal-video" class="modal fade" role="dialog">
                                <div class="modal-dialog vc-modal-video">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <!-- <div class="modal-header">
                                    </div> -->
	                                    <div class="modal-body">
	                                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
	                                        <h4 class="modal-title text-center">MODVORCEE</h4>
	                                        <div class="modal-body">
	                                        	<iframe width="100%" height="450px" src="http://www.youtube.com/embed/VB6-Nm6jlLI">
												</iframe><br/>
											<div class="row">
												<div class="col-sm-6 col-md-6 col-xs-12" style="border-right: 1px solid #e0e0e0">
													<div class="row">
														<div class="col-md-3 col-xs-8 col-sm-3" style="padding-top:50px">
															<img class="img-responsive img-thumbnail" src="<?php echo base_url('asset/images/andien.jpg')?>" alt=""/>
														</div>
														<div class="col-md-9 col-xs-8 col-sm-9">
															<h3><strong>Andien Aisyah</strong></h3>
															<small><B>CAMPAIGNER</B></small>
															<p>Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet</p>
														</div>
													</div>
												</div>								
												<div class="col-sm-6 col-md-6 col-xs-12">
													<div class="row">
														<div class="col-md-3 col-xs-8 col-sm-3" style="padding-top:50px">
															<img class="img-responsive img-thumbnail" src="<?php echo base_url('asset/images/naruto.jpg')?>" alt="" class="img-responsive"/>
														</div>
														<div class="col-md-9 col-xs-8 col-sm-9">
															<h3><strong>Naruto</strong></h3>
															<small><B>DONATUR</B></small>
															<p>Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet</p>
														</div>
													</div>
												</div>
											</div>
	                                        	<div class="clearfix"></div>
	                                        </div>
	                                    </div>
                                    </div>
                                </div>
    </div>

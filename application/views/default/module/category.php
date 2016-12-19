<div class="container">
	<section id="scroll">
		<div class="visible-lg" id="vc-discover">
			<div class="row">
				<div class="col-md-4 vc-dotted col-xs-3 col-sm-4">
					
				</div>
				<div class="col-md-4 text-center col-sm-4">
					<h2 style="margin-top:-15px;"><?php echo $result['name_category']?></h2>	
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
					<h2 style="margin-top:-15px;"><?php echo $result['name_category']?></h2>	
				</div>
				<div class="col-md-4 vc-dotted col-xs-3 col-sm-4">
					
				</div>
			</div>
		</div>
		<div class="visible-sm" id="vc-discover-sm">
			<div class="row">
				<div class="col-sm-4 vc-dotted col-xs-3 col-sm-4">
					
				</div>
				<div class="col-sm-4 text-center col-sm-4">
					<h2 style="margin-top:-15px;"><?php echo $result['name_category']?></h2>	
				</div>
				<div class="col-sm-4 vc-dotted col-xs-3 col-sm-4">
					
				</div>
			</div>
		</div>
		<div class="visible-xs" id="vc-discover-sm">
			<div class="row">
				<div class="col-xs-12 text-left">
					<h2 style="margin-top:-15px;"><?php echo $result['name_category']?></h2>	
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
	 </div>



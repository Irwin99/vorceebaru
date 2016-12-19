<!-- Container Product -->
	<div class="container" style="margin-top:70px">
		<div id="vc-detail-product">
			<div class="row">
				<div class="col-md-4 vc-dotted col-xs-2 col-sm-4">
				</div>
				<div class="col-md-4 text-center col-xs-8 col-sm-4">
					<h2 style="margin-top:-15px;">Login</h2>
				</div>
				<div class="col-md-4 vc-dotted col-xs-2 col-sm-4">
				</div>
			</div>
			<div id="vc-detail-product">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<form action="<?php echo base_url('page/login')?>" method="post">
							<?php
				        if(!$this->form_validation->run() && isset($_POST['username'])){
				          ?>

						<div class="alert alert-warning alert-dismissible" role="alert">
				          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            <span aria-hidden="true">x</span>
				          </button>
				          <strong>Warning!</strong>
				          <p><?php	echo validation_errors();?></p>
				        </div>
								<?php
							}
								?>
				        <div class="input-group margin-bottom-sm form-group" style="border-radius:0px">
				              <span class="input-group-addon modal-fa"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
				                <input class="form-control" type="text" placeholder="Username" name="username">
				            </div>
				              <div class="input-group margin-bottom-sm form-group">
				              <span class="input-group-addon modal-fa"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
				                <input class="form-control" type="password" placeholder="Password" name="password">
				            </div>
				            <div class="form-group">
				              <!-- <a href="<?php echo base_url('page/forgot-password')?>" style="color:#333">Forgot Password ?</a> -->
				            </div>
				            <button class="btn btn-md form-control vc-btn-primary" style="border-radius:0px">Login</button>
									</form>
				      </div>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- ./ End of Container -->

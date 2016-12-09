<!-- Container Product -->
	<div class="container" style="margin-top:70px">
		<div id="vc-detail-product">
			<div class="row">
				<div class="col-md-4 vc-dotted col-xs-2 col-sm-4">
				</div>
				<div class="col-md-4 text-center col-xs-8 col-sm-4">
					<h2 style="margin-top:-15px;">Hello Yogs Creator</h2>
				</div>
				<div class="col-md-4 vc-dotted col-xs-2 col-sm-4">
				</div>
			</div>
			<div id="vc-detail-product">
      <div class="row">
				<?php
          if($this->session->flashdata('success_form') == TRUE){
            ?>
            <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>YOGS!</strong> YOGS
            </div>
            <?php
          }
					?>
        <div class="col-md-3"></div>
				<form action="<?php echo base_url('page/register-creator')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal form-label-left" id="form-info">
					<?php echo validation_errors()?>
				<div class="col-md-8" id="email-here">
					<div class="input-group margin-bottom-sm form-group" style="border-radius:0px">
						<span class="input-group-addon modal-fa"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
							<input class="form-control" type="text" placeholder="Username" name="username">
					</div>
					<div class="input-group margin-bottom-sm form-group">
						<span class="input-group-addon modal-fa"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
							<input class="form-control" type="password" placeholder="Password" name="password">
					</div>
					<div class="input-group margin-bottom-sm form-group">
						<span class="input-group-addon modal-fa"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
							<input class="form-control" type="password" placeholder="Confirm Password" name="confirm">
					</div>
					<div class="input-group margin-bottom-sm form-group">
						<span class="input-group-addon modal-fa"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
							<input class="form-control" type="text" placeholder="Email" name="email">
					</div>
					<div class="input-group margin-bottom-sm form-group">
						<span class="input-group-addon modal-fa"><i class="fa fa-building fa-fw" aria-hidden="true"></i></span>
							<input class="form-control" type="text" placeholder="Organization Name" name="organization_name">
					</div>
					<div class="input-group margin-bottom-sm form-group">
						<span class="input-group-addon modal-fa"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
							<input class="form-control" type="text" placeholder="Contact Person Name" name="contact_person">
					</div>
					<div class="input-group margin-bottom-sm form-group">
						<span class="input-group-addon modal-fa"><i class="fa fa-phone fa-fw" aria-hidden="true"></i></span>
							<input class="form-control" type="text" placeholder="Phone"name="phone_number">
					</div>
					<div class="input-group margin-bottom-sm form-group">
						<span class="input-group-addon modal-fa"><i class="fa fa-mobile fa-fw" aria-hidden="true"></i></span>
							<input class="form-control" type="text" placeholder="Mobile" name="mobile">
					</div>
					<div class="input-group margin-bottom-sm form-group">
						<span class="input-group-addon modal-fa"><i class="fa fa-home fa-fw" aria-hidden="true"></i></span>
							<input class="form-control" type="text" placeholder="Address" name="address">
					</div>
					<button class="btn btn-md form-control vc-btn-primary" style="border-radius:0px">Register</button>
				</div>
				<div class="col-md-2"></div>
			</form>
      </div>
			</div>
		</div>
	</div>
	<!-- ./ End of Container -->

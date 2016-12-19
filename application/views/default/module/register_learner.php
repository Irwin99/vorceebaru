<!-- Container Product -->
	<div class="container" style="margin-top:70px">
		<div id="vc-detail-product">
			<div class="row">
				<div class="col-md-4 vc-dotted col-xs-2 col-sm-4">
				</div>
				<div class="col-md-4 text-center col-xs-8 col-sm-4">
					<h2 style="margin-top:-15px;">Hello Learner</h2>
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
              <strong>Success!</strong> 
              You Have Succesfully registered. Please Login with your username & password.
            </div>
            <?php
          }
					?>
        <form action="<?php echo base_url('page/register-learner')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal form-label-left" id="form-info">

        <div class="col-md-12" id="email-here">
        <?php echo validation_errors()?>
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
              <input class="form-control" type="text" placeholder="Confirm Password" name="confirm">
          </div>
          <div class="input-group margin-bottom-sm form-group">
            <span class="input-group-addon modal-fa"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
              <input class="form-control" type="text" placeholder="Email"name="email">
          </div>
          <button class="btn btn-md form-control vc-btn-primary" style="border-radius:0px">Register</button>
          Already have Account? Login <a href="<?php echo base_url('page/login')?>">Here</a>
        </div>
      </form>
      </div>
			</div>
		</div>
	</div>
	<!-- ./ End of Container -->

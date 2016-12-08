<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('default/common/header');?>
</head>
<body data-spy="scroll">
	<?php $this->load->view('default/common/nav');?>
	<!-- <div id="vc-header">
		<div class="container">
			
		</div>
	</div> -->
	<?php //$this->load->view('default/common/nav');?>
	
	<?php $this->load->view($path_content);?>

	<?php $this->load->view('default/common/footer');?>
	
<div id="loginModal" class="modal fade in" role="dialog">
  <div class="modal-dialog modal-lg product-modal">
    <div class="modal-content flat text-center" style="border-radius:0px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <i class="fa fa-close fa-2x"></i>
        </button>
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6" id="email-here">
            <div class="input-group margin-bottom-sm form-group" style="border-radius:0px">
              <span class="input-group-addon modal-fa"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Username">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon modal-fa"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Password">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon modal-fa"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Confirm Password">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon modal-fa"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Email">
            </div>
            <button class="btn btn-md form-control vc-btn-primary" style="border-radius:0px">Register</button>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
      <div class="modal-footer text-center">
        By clicking Register button you're agree to our Term & Conditiouns and Privacy Policy
      </div>
    </div>
  </div>
</div>
<div id="loginModalCreator" class="modal fade in" role="dialog">
  <div class="modal-dialog modal-lg product-modal">
    <div class="modal-content flat text-center" style="border-radius:0px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <i class="fa fa-close fa-2x"></i>
        </button>
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8" id="email-here">
            <div class="input-group margin-bottom-sm form-group" style="border-radius:0px">
              <span class="input-group-addon modal-fa"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Username">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon modal-fa"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Password">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon modal-fa"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Confirm Password">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon modal-fa"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon modal-fa"><i class="fa fa-building fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Organization Name">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon modal-fa"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Contact Person Name">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon modal-fa"><i class="fa fa-phone fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Phone">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon modal-fa"><i class="fa fa-mobile fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Mobile">
            </div>
            <div class="input-group margin-bottom-sm form-group">
              <span class="input-group-addon modal-fa"><i class="fa fa-home fa-fw" aria-hidden="true"></i></span>
                <input class="form-control" type="text" placeholder="Address">
            </div>
            <button class="btn btn-md form-control vc-btn-primary" style="border-radius:0px">Register</button>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
      <div class="modal-footer text-center">
        By clicking Register button you're agree to our Term & Conditiouns and Privacy Policy
      </div>
    </div>
  </div>
</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('asset/asset_default/js/bootstrap.min.js')?>"></script>
</body>
</html>
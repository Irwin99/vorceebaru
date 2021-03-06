<div class="container" style="margin-top:70px">
  <div class="modal-title text-center" style="margin-bottom:25px">
        Profile Member
  </div>
  <div class="row text-center">
    <div class="col-md-4">
      <?php
        $this->load->view('default/module/nav_member');
      ?>
    </div>
    <div class="col-md-7 form-group form-impian" id="email-here">
      <?php
        if($this->session->flashdata('success_form') == TRUE){
          ?>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Success!</strong> You have successfully updated profile.
          </div>
          <?php
        }
        ?>
      <form action="<?php echo base_url('member/profil')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal form-label-left" id="form-info">
        	<?php echo validation_errors()?>
      <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-user fa-fw " aria-hidden="true"></i></span>
            <input class="form-control fa-" type="text" placeholder="Nama" name="full_name" value="<?php echo $result['full_name']?>">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Email" name="email" value="<?php echo $result['email']?>">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-home fa-fw" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Alamat" name="address" value="<?php echo $result['address']?>">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-mobile-phone fa-fw" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Phone Number" name="phone_number" value="<?php echo $result['phone_number']?>">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Address" value="<?php echo $result['address']?>">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          Gender:
          <label class="radio-inline">
            <input type="radio" name="gender" value="1" <?php if($result['gender'] == 1) echo "checked"; ?>>
            Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" value="2" <?php if($result['gender'] == 2) echo "checked";?>>
            Female
          </label>
        </div>
        <button class="btn btn-md form-control vc-btn-primary" style="border-radius:0px">Save Profile</button>
      </form>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>

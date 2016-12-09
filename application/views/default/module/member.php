<div class="container" style="margin-top:70px">
  <div class="modal-title text-center" style="margin-bottom:25px">
        Member
  </div>
  <div class="row text-center">
    <div class="col-md-4">
      <ul class="member-sidebar text-left" id="member-sidebar" style="list-style:none">
        <li>
          <a class="active" href="#"><i class="fa fa-user" aria-hidden="true"></i>Profil</a>
        </li>
        <li>
          <a href="profile.html"><i class="fa fa-envelope-open" aria-hidden="true"></i> Workshop</a>
        </li>
      </ul>
    </div>
    <div class="col-md-7 form-group form-impian" id="email-here">
      <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-user fa-fw " aria-hidden="true"></i></span>
            <input class="form-control fa-" type="text" placeholder="Nama" value="<?php echo $result['full_name']?>">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Email" value="<?php echo $result['email']?>">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-home fa-fw" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Alamat" value"<?php echo $result['address']?>">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-mobile-phone fa-fw" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Phone Number" value="<?php echo $result['phone_number']?>">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-newspaper-o fa-fw" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="About Me" value="<?php echo $result['about_user']?>">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          Gender:
          <label class="radio-inline">
            <input type="radio" name="gender" value="1" <?php echo set_value('gender', $row->gender) == 1 ? "checked" : ""; ?>>
            Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" value="2" <?php echo set_value('gender',$row->gender)== 2 ?"checked" : ""?>>
            Female
          </label>
        </div>
        <button class="btn btn-md form-control vc-btn-primary" style="border-radius:0px">Save Profile</button>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>

<section class="content">
  <div class="row">
  <div class="col-md-12">
  <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Add User</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php if(!$this->form_validation->run() && isset($_POST['username'])){ ?>
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i> Alert!</h4>
      <?php echo validation_errors()?>
    </div>
    <?php } ?>
    <form role="form" method="POST" action="">
      <!-- text input -->
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo set_value('username')?>">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="password" name="password">
      </div>

      <!-- textarea -->
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" placeholder="Vorcee@gmail.com" name="email" value="<?php echo set_value('email')?>">
      </div>
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" class="form-control"  placeholder="Vorcee" name="full_name" value="<?php echo set_value('full_name')?>">
      </div>
      <div class="form-group">
        <label>Phone number</label>
        <input type="text" class="form-control"  placeholder="Vorcee" name="phone_number" value="<?php echo set_value('phone_number')?>">
      </div>

      <!-- input states -->
      <div class="form-group">
        <label>Gender</label>
        <select class="form-control" name="gender" value="<?php echo set_value('gender')?>">
          <option value="0">Not set</option>
          <option value="1">Male</option>
          <option value="2">Female</option>
        </select>
      </div>

      <div class="form-group">
        <label>Address</label>
        <textarea class="form-control" rows="3" placeholder="Address" name="address"><?php echo set_value('username')?></textarea>
      </div>

      <div class="form-group">
        <label>Country</label>
      <select class="form-control" name="country" value="<?php echo set_value('country')?>">
        <option>Indonesia</option>
        <option>Another Country</option>
      </select>
      </div>


      <!-- select -->
      <div class="form-group">
        <label>Province</label>
        <?php
          $options = array(
            'Aceh' => 'Aceh',
            'Sumut' => 'Sumatera Utara',
            'Sumbar'=> 'Sumatra Barat',
            'Riau' => 'Riau',
            'Jambi'=> 'Jambi',
            'Sumsel' => 'Sumatra Selatan',
            'Bengkulu' => 'Bengkulu',
            'Lampung' => 'Lampung',
            'Babel' => 'Kep. Bangka Belitung',
            'kepRiau' =>'Kepulauan Riau',
            'Jakarta' =>'Jakarta',
            'Jabar' => 'Jawa Barat',
            'Banten'=> 'Banten',
            'Jateng'=> 'Jateng',
            'Yogyakarta'=> 'Yogyakarta',
            'Jatim'=> 'Jawa Timur',
            'Kalbar'=> 'Kalimantan Barat',
            'Kalteng'=> 'Kalimantan Tengah',
            'Kalsel'=> 'Kalimantan Selatan',
            'Kaltim'=> 'Kalimantan Timur',
            'Kaltra'=> 'Kalimantan Utara',
            'Bali'=> 'Bali',
            'NTT'=> 'Nusa Tenggara Timur',
            'NTB'=> 'Nusa Tenggara Barat',
            'Sulut'=> 'Sulawesi Utara',
            'Sulteng'=> 'Sulawesi Tengah',
            'Sulsel'=> 'Sulawesi Selatan',
            'Sultengg'=> 'Sulawesi Tenggara',
            'Sulbar'=> 'Sulawesi Barat',
            'Gorontalo'=> 'Gorontalo',
            'Maluku'=> 'Maluku',
            'Maluku Utara'=> 'Maluku Utara',
            'Papua'=> 'Papua',
            'Papua Barat'=> 'Papua Barat',
          );
          echo form_dropdown('province',$options,set_value('province'),'class="form-control"');
       ?>
      </div>
      <div class="form-group">
        <label>City</label>
        <input type="text" class="form-control"  placeholder="Jakarta" name="city" value="<?php echo set_value('city')?>">
      </div>
      <div class="form-group">
        <label>About User</label>
        <textarea class="form-control" rows="3"  name="about_user"><?php echo set_value('about_user')?></textarea>
      </div>
      <div class="form-group">
        <label>Status User</label>
        <select class="form-control" name="status_user" value="<?php echo set_value('status_user')?>">
          <option value="0">Non Active</option>
          <option value="1">Active</option>
          <option value="2">Banned</option>
        </select>
      </div>
      <div class="form-group">
        <label>Permission</label>
        <select class="form-control" name="permission" value="<?php echo set_value('permission')?>">
          <option value="0">Donatur</option>
          <option value="1">Admin</option>
          <option value="2">Campaigner</option>
        </select>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.box-body -->
</div> <!-- end of div box body -->
</div> <!-- end of div cols 6 -->
</div> <!-- end of div row-->
</section>

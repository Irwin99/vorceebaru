<section class="content">
  <div class="row">
  <div class="col-md-12">
  <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Setting</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php if(!$this->form_validation->run() && isset($_POST['partner'])){ ?>
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i> Alert!</h4>
      <?php echo validation_errors()?>
    </div>
    <?php } ?>
    <form role="form" method="POST" action="">
      <!-- text input -->
      <div class="form-group">
        <label>Title Website</label>
        <input type="text" class="form-control"  name="title_website" value="<?php echo $result['title_website']?>">
      </div>
      <div class="form-group">
        <label>Address</label>
        <textarea class="form-control" rows="3"  name="address"><?php echo $result['address']?></textarea>
      </div>
      <div class="form-group">
        <label>phone</label>
        <input type="text" class="form-control"   name="phone_number" value="<?php echo $result['phone_number']?>">
      </div>

      <div class="form-group">
        <label>Achievement </label>
        <textarea class="form-control" rows="3"  name="achievement"><?php echo $result['achievement']?></textarea>
      </div>
      <div class="form-group">
        <label>Campaign </label>
        <textarea class="form-control" rows="3"  name="campaign_report"><?php echo $result['campaign_report']?></textarea>
      </div>
      <div class="form-group">
        <label>Partner </label>
        <textarea class="form-control" rows="3"  name="partner"><?php echo $result['partner']?></textarea>
      </div>
      <div class="form-group">
        <label>About </label>
        <textarea class="form-control" rows="3"  name="about"><?php echo $result['about']?></textarea>
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

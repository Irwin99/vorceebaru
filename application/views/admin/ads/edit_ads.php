<section class="content">
  <div class="row">
  <div class="col-md-12">
  <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Add ads</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php if(!$this->form_validation->run() && isset($_POST['name_ads'])){ ?>
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i> Alert!</h4>
      <?php echo validation_errors();
      ?>
    </div>
    <?php }
    echo $error;
    ?>
    <?php echo form_open_multipart('');?>
      <!-- text input -->
      <div class="form-group">
        <label>Ads Name </label>
        <input type="text" class="form-control"  name="name_ads" value="<?php echo $result['name_ads']?>">
        </div>
      <div class="form-group">
        <label>Link Ads </label>
        <input type="text" class="form-control"  name="link_ads" value="<?php echo $result['link_ads']?>">
      </div>
      <div class="form-group">
          <label>Fee Ads </label>
          <input type="text" class="form-control"  name="fee_ads" value="<?php echo $result['fee_ads']?>">
      </div>
      <div class="form-group">
        <label>Price </label>
        <input type="text" class="form-control"  name="price_ads" value="<?php echo $result['price_ads']?>">
        </div>
      <div class="form-group">
        <label>Current Price </label>
        <input type="text" class="form-control"  name="current_price" value="<?php echo $result['current_price']?>">
      </div>
      <div class="form-group">
        <label>Description Ads </label>
        <textarea class="form-control" rows="3"  name="description_ads" ><?php echo $result['description_ads']?></textarea>
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control"  name="userfile">
      </div>
    </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>
  <!-- /.box-body -->
</div> <!-- end of div box body -->
</div> <!-- end of div cols 6 -->
</div> <!-- end of div row-->
</section>

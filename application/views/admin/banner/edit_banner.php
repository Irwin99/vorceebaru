<section class="content">
  <div class="row">
  <div class="col-md-12">
  <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Banner</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php if(!$this->form_validation->run() && isset($_POST['title_banner'])){ ?>
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
        <label>Banner Title </label>
        <input type="text" class="form-control"  name="title_banner" value="<?php echo $result['title_banner']?>">
        </div>
      <div class="form-group">
        <label>Link Banner </label>
        <input type="text" class="form-control"  name="link_banner" value="<?php echo $result['link_banner']?>">
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control"  name="userfile">
      </div>
      <div class="form-group">
        <label>Banner Caption </label>
        <textarea class="form-control" rows="3"  name="caption_banner" ><?php echo $result['caption_banner']?></textarea>
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

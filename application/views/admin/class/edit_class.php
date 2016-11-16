<section class="content">
  <div class="row">
  <div class="col-md-12">
  <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Add Payment</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php if(!$this->form_validation->run() && isset($_POST['title_class'])){ ?>
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i> Alert!</h4>
      <?php echo validation_errors();
      ?>
    </div>
    <?php }

    ?>
    <?php echo form_open_multipart('');?>
      <!-- text input -->
      <div class="form-group">
        <label>Title Class</label>
        <input type="text" class="form-control"  name="title_class" value="<?php echo $result['title_class']?>">
      </div>
      <div class="form-group">
        <label>Time Class</label>
        <input type="text" class="form-control"  name="time_class" value="<?php echo $result['time_class']?>">
      </div>
      <div class="form-group">
        <label>Place Class</label>
        <input type="text" class="form-control"  name="place_class" value="<?php echo $result['place_class']?>">
      </div>
      <div class="form-group">
        <label>Description </label>
        <textarea class="form-control" rows="3"  name="description_class" ><?php echo $result['description_class']?></textarea>
      </div>
      <div class="form-group">
        <label>Date</label>
        <input type="text" class="form-control"  name="date_class" value="<?php echo $result['date_class']?>">
      </div>



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

<section class="content">
  <div class="row">
  <div class="col-md-12">
  <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Add product</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php if(!$this->form_validation->run() && isset($_POST['name_product'])){ ?>
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i> Alert!</h4>
      <?php echo validation_errors();
      ?>
    </div>
    <?php }
    if(isset($error)){
    echo $error;
  }
    ?>
    <?php echo form_open_multipart('');?>
      <!-- text input -->
      <div class="form-group">
        <label>Category Name</label>
        <?php

          $options = array();
          if($category!=FALSE){

            foreach ($category as $rows) {

                $options[$rows->id_category] = $rows->name_category;
            }
            echo form_dropdown('category',$options,set_value('category'),"class='form-control'");
          }


         ?>
        </div>
      <div class="form-group">
        <label>product Name </label>
        <input type="text" class="form-control"  name="name_product" value="<?php echo set_value('name_product')?>">
        </div>
      <div class="form-group">
        <label>Start Price </label>
        <input type="text" class="form-control"  name="start_price" value="<?php echo set_value('start_price')?>">
      </div>
      <div class="form-group">
        <label>Current Price </label>
        <input type="text" class="form-control"  name="current_price" value="<?php echo set_value('current_price')?>">
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control"  name="userfile">
      </div>
      <div class="form-group">
        <label>About Product </label>
        <textarea class="form-control" rows="3"  name="about_product" ><?php echo set_value('about_product')?></textarea>
      </div>
      <div class="form-group">
        <label>Date End Campagin:</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-clock-o"></i>
          </div>
          <input type="text" class="form-control pull-right"  name="date_end_campaign" value="">
        </div>
        <!-- /.input group -->
      </div>
      <div class="form-group">
        <label>Status Product</label>
        <select class="form-control" name="status_product" value="<?php echo set_value('status_product')?>">
          <option value="0">Pending</option>
          <option value="1">Active</option>
          <option value="2">Sold</option>
          <option value-"3">Rejected</option>
        </select>
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
<script type="text/javascript">
$(function() {
    $('input[name="date_end_campaign"]').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        }
    });
});
</script>

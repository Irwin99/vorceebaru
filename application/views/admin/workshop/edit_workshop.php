<section class="content">
  <div class="row">
  <div class="col-md-12">
  <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Workshop</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php if(!$this->form_validation->run() && isset($_POST['workshop_title'])){ ?>
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
            echo form_dropdown('category',$options,$result['id_category'],"class='form-control'");
          }


         ?>
        </div>

      <div class="form-group">
        <label>Workshop Title </label>
        <input type="text" class="form-control"  name="workshop_title" value="<?php echo $result['workshop_title']?>">
        </div>
      <div class="form-group">
        <label>Course Fee </label>
        <input type="text" class="form-control"  name="course_fee" value="<?php echo $result['course_fee']?>">
      </div>
      <div class="form-group">
        <label>Location:</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-map-marker"></i>
          </div>
          <!--<input type="text" class="form-control pull-right"  name="date_end_campaign" value="">-->
          <input type="text" class="form-control pull-right" name="location" value="<?php echo $result['location']?>">
        </div>
        <!-- /.input group -->
      </div>
      <div class="form-group">
        <label>Link Form:</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-link"></i>
          </div>
          <!--<input type="text" class="form-control pull-right"  name="date_end_campaign" value="">-->
          <input type="text" class="form-control pull-right" name="link_form" value="<?php echo $result['link_form']?>">
        </div>
        <!-- /.input group -->
      </div>
      <div class="form-group">
        <label>Hour Start </label>
        <div class="bootstrap-timepicker">
                <div class="form-group">
                  <div class="input-group">
                  <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="text" class="form-control timepicker" name="hour_start" value="<?php echo $result['hour_start']?>">
                  </div>
                </div>
              </div>
      </div>
      <div class="form-group">
        <label>Hour End </label>
        <div class="bootstrap-timepicker">
                <div class="form-group">
                  <div class="input-group">
                  <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="text" class="form-control timepicker2" name="hour_end" value="<?php echo $result['hour_end']?>">
                  </div>
                </div>
              </div>
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control"  name="userfile">
      </div>
      <div class="form-group">
        <label>Description </label>
        <textarea class="form-control" rows="3"  name="workshop_description" ><?php echo $result['workshop_description']?></textarea>
      </div>

      <div class="form-group">
        <label>Date workshop:</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-clock-o"></i>
          </div>
          <!--<input type="text" class="form-control pull-right"  name="date_end_campaign" value="">-->
          <input type="text" class="form-control pull-right" id="datepicker" name="date_workshop" value="<?php echo $result['date_workshop']?>">
        </div>
        <!-- /.input group -->
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
//Date picker
   $('#datepicker').datepicker({
     autoclose: true
   });
</script>

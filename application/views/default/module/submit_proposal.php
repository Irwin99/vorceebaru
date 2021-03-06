<div class="container" style="margin-top:70px">
  <div class="modal-title text-center" style="margin-bottom:25px">
        Submit Proposal
  </div>
  <div class="row text-center">
    <?php echo form_open_multipart('')?>
    <?php
      if($this->session->flashdata('success_form') == TRUE){
        ?>
        <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Success!</strong> You have successfully submit proposal. Please wait our email.
        </div>
        <?php
      }
      if(!$this->form_validation->run() && isset($_POST['workshop_title'])){
        ?>
        <div class="alert alert-warning" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Ouch!</strong>
          <?php echo validation_errors()?>
        </div>
        <?php
      }
      if(isset($error)){
        ?>
        <div class="alert alert-warning" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Ouch!</strong>
          <?php echo $error?>
        </div>
        <?php
      }
    ?>
    <div class="col-md-2">
    </div>
    <div class="col-md-8 form-group form-impian" id="email-here">
      <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-pencil fa-fw " aria-hidden="true"></i></span>
        
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

        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-font fa-fw " aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Event Title" name="workshop_title">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-star fa-fw" aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Event Goal" name="event_goal">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-align-justify fa-fw" aria-hidden="true"></i></span>
            <textarea class="form-control" rows="4" placeholder="Event Description" name="workshop_description"></textarea>
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-money fa-fw " aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Course Fee" name="course_fee">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-map-marker fa-fw " aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Location" name="location">
        </div>
        <div class="input-group margin-bottom-sm form-group">
          <span class="input-group-addon modal-fa"><i class="fa fa-calendar fa-fw " aria-hidden="true"></i></span>
            <input class="form-control" type="text" placeholder="Workshop Date (Can Change Later)" name="date_workshop" id="datepicker">
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Hour Start </label>
              <div class="bootstrap-timepicker">
                      <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon modal-fa">
                            <i class="fa fa-clock-o"></i>
                          </div>
                          <input type="text" class="form-control timepicker" name="hour_start" value="<?php echo set_value('hour_start')?>">
                        </div>
                      </div>
                    </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Hour End </label>
              <div class="bootstrap-timepicker">
                      <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon modal-fa">
                            <i class="fa fa-clock-o"></i>
                          </div>
                          <input type="text" class="form-control timepicker" name="hour_end" value="<?php echo set_value('hour_end')?>">
                        </div>
                      </div>
                    </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-3 text-right">
            <label class="control-label">File Proposal<br /><small>Max Size: 2MB</small></label>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-9">
            <input type="file" name="userfile[]" class="form-control col-md-7 col-xs-12">
          </div>
          <div class="col-md-3 col-sm-3 hidden-xs"></div>
        </div>
        <div class="row" style="margin-bottom:15px">
          <div class="col-md-3 col-sm-3 col-xs-3 text-right">
            <label class="control-label">Event Image<br /><small>Max Size: 2MB</small></label>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-9">
            <input type="file" name="userfile[]" class="form-control col-md-7 col-xs-12">
          </div>
          <div class="col-md-3 col-sm-3 hidden-xs"></div>
        </div>
        <button class="btn btn-md form-control vc-btn-primary" type="Submit" style="border-radius:0px">Submit</button>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

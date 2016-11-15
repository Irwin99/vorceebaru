<section class="content">
  <div class="row">
  <div class="col-md-12">
  <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Hit ads</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php if(!$this->form_validation->run() && isset($_POST['ip_address'])){ ?>
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
      <label>Ads</label>
      <?php

        $options = array();
        if($ads!=FALSE){

          foreach ($ads as $rows) {

              $options[$rows->id_ads] = $rows->name_ads;
          }
          echo form_dropdown('ads',$options,$result['id_ads'],"class='form-control'");
        }


       ?>
      </div>
      <div class="form-group">
        <label>Ip Address </label>
        <input type="text" class="form-control"   name="ip_address" value="<?php echo $result['ip_address']?>" >
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

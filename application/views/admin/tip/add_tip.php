<section class="content">
  <div class="row">
  <div class="col-md-12">
  <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Add Tip</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <?php if(!$this->form_validation->run() && isset($_POST['tip'])){ ?>
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
        <label>Name Product</label>
        <?php

          $options = array();
          if($product!=FALSE){

            foreach ($product as $rows) {

                $options[$rows->id_product] = $rows->name_product;
            }
            echo form_dropdown('product',$options,set_value('product'),"class='form-control'");
          }


         ?>
        </div>
      <div class="form-group">
        <label>Tip </label>
        <input type="text" class="form-control"  name="tip" value="<?php echo set_value('tip')?>">
      </div>
      <div class="form-group">
        <label>Status Tip</label>
        <?php
        $options = array(
            '0' => 'Pending',
            '1' => 'Pre Order',
            '2' => 'Loose'
        );
        echo form_dropdown('status_tip',$options,set_value('status_tip'),'class="form-control"');
        ?>
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

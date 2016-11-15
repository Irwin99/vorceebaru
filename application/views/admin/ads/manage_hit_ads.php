<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Hit ads</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row" style="margin-bottom:10px">
      <form method="POST" action="">
      <div class="col-md-3">
      </div>
      <div class="col-md-3">
        <input type="text" name="search" class="form-control">
      </div>
      <div class="col-md-3">
        <?php
          $options = array(
                'name_ads'=>'ads Name',
                'ip_address'=>'IP'
              );
          echo form_dropdown('by',$options,set_value('by'),"class='form-control'");
        ?>
      </div>
      <div class="col-md-3">
        <button type="submit"class="btn btn-default">Search</button>
      </div>
    </form>
    </div>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Name Ads</th>
        <th>Ip Address</th>
        <th>Date</th>
        <th>Input By</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <?php
      		if($results!=FALSE){
      			foreach ($results as $rows) {
      				?>
      				<tr>
                <td><?php echo $rows->name_ads ?></td>
                <td><?php echo $rows->ip_address ?></td>
                <td><?php echo $rows->date_hit ?></td>
                <td><?php echo $rows->username ?></td>
                  <td>
                  <a href ="<?php echo base_url('adminpanel/ads/edit_hit_ads/'.$rows->id_hit_ads)?>">Edit</a> |
                  <a href ="<?php echo base_url('adminpanel/ads/delete_hit_ads/'.$rows->id_hit_ads)?>" onclick="return confirm('Are you sure bro, think again if you want delete this item ?')">Delete</a>
                </td>
              </tr>
      				<?php
      			}
      		}
      	?>
      	<?php
      		echo $links;
      	?>
      </tbody>
      <tfoot>
      <tr>
        <th>Name Ads</th>
        <th>Ip Address</th>
        <th>Date</th>
        <th>Input By</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>

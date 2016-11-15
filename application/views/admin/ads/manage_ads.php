<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage ads</h3>
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
                'price_ads'=>'price',
                'date_ads'=>'date'
              );
          echo form_dropdown('by',$options,set_value('by'),"class='form-control'");
        ?>
      </div>
      <div class="col-md-3">
        <button type="submit"class="btn btn-default">Search</button>
      </div>
    </form>
    </div>
    <table id="dataTables" class="table table-bordered table-striped">
      <thead>
      <tr>
      <th>Name Ads</th>
      <th>Link Ads</th>
      <th>Image</th>
      <th>Fee Ads</th>
      <th>Price</th>
      <th>Current Price</th>
      <th>Description</th>
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
                <td><?php echo $rows->link_ads ?></td>
                <td><?php if($rows->image_ads!= "") {
                  ?>
                  <img src="<?php echo base_url($rows->image_ads)?>" height="150px;" >
                  <?php
                } ?></td>
                <td><?php echo $rows->fee_ads ?></td>
                <td><?php echo $rows->price_ads ?></td>
                <td><?php echo $rows->current_price ?></td>
                <td><?php echo $rows->description_ads ?></td>
                <td><?php echo $rows->date_ads ?></td>
                <td><?php echo $rows->username ?></td>
                  <td>
                  <a href ="<?php echo base_url('adminpanel/ads/edit_ads/'.$rows->id_ads)?>">Edit</a> |
                  <a href ="<?php echo base_url('adminpanel/ads/delete_ads/'.$rows->id_ads)?>" onclick="return confirm('Are you sure bro, think again if you want delete this item ?')">Delete</a>
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
        <th>Link Ads</th>
        <th>Image</th>
        <th>Fee Ads</th>
        <th>Price</th>
        <th>Current Price</th>
        <th>Description</th>
        <th>Date</th>
        <th>Input By</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<script>
$(document).ready(function(){
    $('#dataTables').DataTable();
});
</script>

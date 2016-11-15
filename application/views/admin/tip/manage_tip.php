<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage tip</h3>
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
                'name_product'=>'Product Name',
                'tip'=>'tip',
                'status_tip' => 'Status Tip'
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
      <th>Product Name</th>
      <th>Tip</th>
      <th>Status Tip</th>
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
                <td><?php echo $rows->name_product ?></td>
                <td><?php echo $rows->tip ?></td>
                <td><?php if($rows->status_tip==0) echo "Pending"; elseif($rows->status_tip==1) echo "Win"; else echo "Loose" ?></td>
                <td><?php echo $rows->username ?></td>
                  <td>
                  <a href ="<?php echo base_url('adminpanel/tip/edit_tip/'.$rows->id_tip)?>">Edit</a> |
                  <a href ="<?php echo base_url('adminpanel/tip/delete_tip/'.$rows->id_tip)?>" onclick="return confirm('Are you sure bro, think again if you want delete this item ?')">Delete</a>
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
        <th>Product Name</th>
        <th>Tip</th>
        <th>Status Tip</th>
        <th>Input By</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>

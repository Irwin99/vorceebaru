<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Product</h3>
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
                'start_price'=>'Start Price',
                'date_product'=>'Date Product'
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
      <th>Category Name</th>
      <th>Product Name</th>
      <th>Start Price</th>
      <th>Current Price</th>
      <th>Image Product</th>
      <th>About Product</th>
      <th>Date Product</th>
      <th>Date End Campaign</th>
      <th>Campaginer</th>
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
                <td><?php echo $rows->name_category ?></td>
                <td><?php echo $rows->name_product ?></td>
                <td><?php echo $rows->start_price ?></td>
                <td><?php echo $rows->current_price ?></td>
                <td><?php if($rows->image_product!= "") {
                  ?>
                  <img src="<?php echo base_url($rows->image_product)?>" height="150px;" >
                  <?php
                } ?></td>
                <td><?php echo $rows->about_product ?></td>
                <td><?php echo $rows->date_product ?></td>
                <td><?php echo $rows->date_end_campaign ?></td>
                <td><?php echo $rows->username_campaigner ?></td>
                <td><?php echo $rows->username?></td>
                  <td>
                  <a href ="<?php echo base_url('adminpanel/product/edit_product/'.$rows->id_product)?>">Edit</a> |
                  <a href ="<?php echo base_url('adminpanel/product/delete_product/'.$rows->id_product)?>" onclick="return confirm('Are you sure bro, think again if you want delete this item ?')">Delete</a>
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
        <th>Category Name</th>
        <th>Product Name</th>
        <th>Start Price</th>
        <th>Current Price</th>
        <th>Image Product</th>
        <th>About Product</th>
        <th>Date Product</th>
        <th>Date End Campaign</th>
        <th>Campaginer</th>
        <th>Input By</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>

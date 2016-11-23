<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage category</h3>
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
                'name_category'=>'Category Name'
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
        <th width="40%">Category Description</th>
        <th>Image</th>
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
                <td><?php echo substr($rows->description_category, 0,150) ?></td>
                <td><?php if($rows->image_category!= "") {
                  ?>
                  <img src="<?php echo base_url($rows->image_category)?>" height="300px;" >
                  <?php
                } ?></td>
                  <td>
                  <a href ="<?php echo base_url('adminpanel/category/edit_category/'.$rows->id_category)?>">Edit</a> |
                  <a href ="<?php echo base_url('adminpanel/category/delete_category/'.$rows->id_category)?>" onclick="return confirm('Are you sure bro, think again if you want delete this item ?')">Delete</a>
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
        <th>Category Description</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>

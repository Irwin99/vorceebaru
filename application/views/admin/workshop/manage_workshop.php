<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Workshop</h3>
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
                'workshop_title'=>'Title'

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
      <th>Workshop Title</th>
      <th>Course Fee</th>
      <th>Description</th>
      <th>Image </th>
      <th>Hour Start</th>
      <th>Hour End</th>
      <th>Date Workshop</th>
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
                <td><?php echo $rows->workshop_title ?></td>
                <td>Rp<?php echo  number_format($rows->course_fee)  ?></td>
                <td><?php echo $rows->workshop_description ?></td>
                <td><?php if($rows->image_workshop!= "") {
                  ?>
                  <img src="<?php echo base_url($rows->image_workshop)?>" height="150px;" >
                  <?php
                } ?></td>
                <td><?php echo $rows->hour_start ?></td>
                <td><?php echo $rows->hour_end ?></td>
                <td><?php echo $rows->date_workshop ?></td>

                  <td>
                  <a href ="<?php echo base_url('adminpanel/workshop/edit_workshop/'.$rows->id_workshop)?>">Edit</a> |
                  <a href ="<?php echo base_url('adminpanel/workshop/delete_workshop/'.$rows->id_workshop)?>" onclick="return confirm('Are you sure bro, think again if you want delete this item ?')">Delete</a>
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
        <th>Workshop Title</th>
        <th>Course Fee</th>
        <th>Description</th>
        <th>Image </th>
        <th>Hour Start</th>
        <th>Hour End</th>
        <th>Date Workshop</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>

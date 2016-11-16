<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Class</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row" style="margin-bottom:10px">
      <form method="POST" action="">
      <div class="col-md-3">
      </div>
      <div class="col-md-3">
        <input type="text" name="search" class="form-control" value="<?php echo set_value('search') ?>">
      </div>
      <div class="col-md-3">
        <?php
          $options = array(
                'title_class'=>'Title'
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
        <th>Title</th>
        <th>Place Course </th>
        <th>Date</th>
        <th>Time</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <?php
      		if($results!=FALSE){
      			foreach ($results as $rows) {
      				?>
      				<tr>
                <td><?php echo $rows->title_class ?></td>
                <td><?php echo $rows->place_class ?></td>
                <td><?php echo  date('D, d M Y ',strtotime($rows->date_class))?></td>
                <td><?php echo $rows->time_class ?></td>
                <td><?php echo $rows->description_class ?></td>

                 <td>
                  <a href ="<?php echo base_url('adminpanel/class/edit_class/'.$rows->id_class)?>">Edit</a> |
                  <a href ="<?php echo base_url('adminpanel/class/delete_class/'.$rows->id_class)?>" onclick="return confirm('Are you sure ?')">Delete</a>
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
        <th>Title</th>
        <th>Place Course </th>
        <th>Date</th>
        <th>Time</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>

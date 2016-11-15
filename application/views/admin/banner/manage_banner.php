<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Banner</h3>
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
                'title_banner'=>'Banner Title',
                'caption_banner'=>'Banner Caption',
                'link_banner' => 'Link Banner'
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
      <th>Banner Title</th>
      <th>Link Banner</th>
      <th>Image</th>
      <th>Caption</th>
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
                <td><?php echo $rows->title_banner ?></td>
                <td><?php echo $rows->link_banner ?></td>
                <td><?php if($rows->image_banner!= "") {
                  ?>
                  <img src="<?php echo base_url($rows->image_banner)?>" height="150px;" >
                  <?php
                } ?></td>
                <td><?php echo $rows->caption_banner ?></td>
                <td><?php echo $rows->username ?></td>
                  <td>
                  <a href ="<?php echo base_url('adminpanel/banner/edit_banner/'.$rows->id_banner)?>">Edit</a> |
                  <a href ="<?php echo base_url('adminpanel/banner/delete_banner/'.$rows->id_banner)?>" onclick="return confirm('Are you sure bro, think again if you want delete this item ?')">Delete</a>
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
        <th>Banner Title</th>
        <th>Link Banner</th>
        <th>Image</th>
        <th>Caption</th>
        <th>Input By</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>

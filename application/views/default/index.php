<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('default/common/header');?>
</head>
<body data-spy="scroll">
	<?php $this->load->view('default/common/nav');?>
	<!-- <div id="vc-header">
		<div class="container">
			
		</div>
	</div> -->
	<?php //$this->load->view('default/common/nav');?>
	
	<?php $this->load->view($path_content);?>

	<?php $this->load->view('default/common/footer');?>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('asset/asset_default/js/bootstrap.min.js')?>"></script>
</body>
</html>
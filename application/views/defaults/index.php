<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('default/common/header')?>
</head>
<body>
	<?php $this->load->view('default/common/nav')?>
	
	<?php $this->load->view($path_content)?>
	
	<?php $this->load->view('default/common/social_media')?>
	
	<?php $this->load->view('default/common/footer')?>
	
	<?php $this->load->view('default/common/footer_text');?>
</body>
</html>

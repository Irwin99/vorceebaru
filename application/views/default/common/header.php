<title>Vorcee | Keep Shopping Keep Sharing</title>
	<!-- Bootstrap -->
    <link href="<?php echo base_url('asset/asset_default/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One|Roboto+Condensed|Noto+Sans|Muli|Lato|Questrial" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/asset_default/main.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/asset_default/fa/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/asset_default/timepicker/bootstrap-timepicker.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/asset_default/datepicker/datepicker3.css')?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
$(document).ready(function(){

  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
});
</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

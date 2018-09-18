<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Choose Company</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo tema()?>admin/pages/css/lock2.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo tema()?>global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/plugins/select2/select2.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo tema()?>admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
<div class="page-lock">
	<div class="page-logo">
		<a class="brand" href="">

		</a>
	</div>
	<div class="page-body">
		<img class="page-lock-img" src="<?php echo tema() ?>icon.png" alt="">
		<div class="page-lock-info">
			<h1><?php echo $this->session->userdata('username'); ?></h1>
			<span class="email">
			Welcome To Smart People System </span>
			<span class="locked">
			Please Choose Company </span>
			<form class="form-inline" action="" method="POST">
				<div class="input-group input-medium">

          <select name="company" class="form-control select2" required="true">
            <option value=""></option>
            <?php foreach ($company as $key): ?>
              <option value="<?php echo $key->id?>"><?php echo $key->company_name ?></option>
            <?php endforeach; ?>
          </select>
					<span class="input-group-btn">
					<button type="submit" class="btn blue icn-only" name="pilih"><i class="m-icon-swapright m-icon-white"></i></button>
					</span>
				</div>
				<!-- /input-group -->
				<div class="relogin">
					<a href="<?php echo site_url('welcome/logout') ?>">
					Logout ? </a>
				</div>
			</form>
		</div>
	</div>
	<div class="page-footer-custom">
		 2018 &copy; Smart People.
	</div>
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo tema()?>global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo tema()?>global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo tema()?>global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo tema()?>global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo tema()?>global/plugins/select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo tema()?>global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo tema()?>global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../../assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo tema()?>global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo tema()?>admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo tema()?>admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo tema()?>admin/pages/scripts/lock.js"></script>
<script>
jQuery(document).ready(function() {
    Metronic.init(); // init metronic core components
Layout.init(); // init current layout
    Lock.init();
    Demo.init();
});
$('.select2').select2({
		 placeholder: 'Select an option',
		 allowClear: 'TRUE'
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

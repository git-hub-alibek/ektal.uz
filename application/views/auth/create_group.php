<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/images/favicon.png">    
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
          
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<h1><?php echo lang('create_group_heading');?></h1>
			<p><?php echo lang('create_group_subheading');?></p>

			<div id="infoMessage"><?php echo $message;?></div>

			<?php echo form_open("auth/create_group");?>

			      <p>
			            <?php echo lang('create_group_name_label', 'group_name');?> <br />
			            <?php echo form_input($group_name);?>
			      </p>

			      <p>
			            <?php echo lang('create_group_desc_label', 'description');?> <br />
			            <?php echo form_input($description);?>
			      </p>

			      <p><?php echo form_submit('submit', lang('create_group_submit_btn'),'class="btn btn-success"');?></p>

			<?php echo form_close();?>
      </div>
    </div>
  </div>

</body>
</html>
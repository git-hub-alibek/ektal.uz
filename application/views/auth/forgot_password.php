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
    <link rel="stylesheet" href="/assets/css/plus-minus.css">
    <link rel="stylesheet" href="/assets/css/dropdown.css">	
</head>
<body>
	<a class="btn btn-success" href='<?php echo site_url('/')?>' style="margin: 15px 15px 0px 15px; "><i class="fa fa-home"></i></a>
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 100px;">
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4">
            	<div class="card border-info mb-3">
					<div class="card-header"><h1><?php echo lang('forgot_password_heading');?></h1></div>
					<div class="card-body text-info">
						<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

						<div id="infoMessage"><?php echo $message;?></div>

						<?php echo form_open("auth/forgot_password");?>

						      <p>
						      	<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
						      	<?php echo form_input($identity);?>
						      </p>

						      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'),'class="btn btn-info"');?></p>

						<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
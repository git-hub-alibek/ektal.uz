<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/images/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    
    <link rel="stylesheet" href="/assets/css/plus-minus.css">
    <link rel="stylesheet" href="/assets/css/dropdown.css">
</head>
<body>
    <a class="btn btn-success" href='<?php echo site_url('/')?>' style="margin: 15px 15px 0px 15px; "><ion-icon name="home"></ion-icon>Бас бет</a>
    <div class="container">
    
          <div class="row justify-content-center" style="margin-top: 60px;">

            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4">
              <div id="infoMessage"><?php echo $message;?></div>
              <div class="card border-info mb-3">
                <div class="card-header"><h3><?php echo lang('login_heading');?></h3></div>
                <div class="card-body text-info">
                <?php echo form_open("auth/login");?>

                <p>
                  <?php echo lang('login_identity_label', 'identity');?><br>
                  <?php echo form_input($identity);?>
                </p>

                <p>
                  <?php echo lang('login_password_label', 'password');?><br>
                  <?php echo form_input($password);?>
                </p>

                <p>
                  <?php echo lang('login_remember_label', 'remember');?>
                  <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                </p>


                <p><?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-primary"');?></p>

                <?php echo form_close();?>
                <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
                </div>
              </div>
            </div><!-- col -->
            <div class="col-12 col-md-4"></div>

          </div><!-- row -->

    </div>

</body>
</html>

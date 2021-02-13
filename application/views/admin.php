<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

    <link rel="icon" href="/assets/images/favicon.png">    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
    
    <style type="text/css">
*, *::before, *::after {
    box-sizing: border-box;
}
.btn {
	margin-bottom: 10px;
}    	
    </style>
</head>
<body>
	<br>
	<div class="container" style="padding: 10px 50px 10px 50px; border: 1px solid rgba(0, 0, 0, 0.1); background-color: lightgrey;">
		<div class="row">
			<div class="col-12">
				<a class="btn btn-success" href='<?php echo site_url();?>'><ion-icon name="home"></ion-icon> Главная</a> |
				<a class="btn btn-primary" href='<?php echo site_url('admin/products');?>'><ion-icon name="newspaper"></ion-icon> Продукты</a> |
	 			<a class="btn btn-warning" href='<?php echo site_url('admin/faq');?>'><ion-icon name="newspaper"></ion-icon> FAQ</a> |
				<!--<a class="btn btn-danger" href='<?php echo site_url('admin/departments');?>'><ion-icon name="grid"></ion-icon> Бөлимлер</a> |
				<a class="btn btn-danger" href='<?php echo site_url('admin/services');?>'><ion-icon name="grid"></ion-icon> Хизметлер</a> |
				<a class="btn btn-info" href='<?php echo site_url('admin/appointments');?>'><ion-icon name="grid"></ion-icon> Қабыллаўлар</a> | -->
				<a class="btn btn-info" href='<?php echo site_url('auth/index');?>'><ion-icon name="people"></ion-icon> Пользоваиели </a> | 
				<a class="btn btn-danger" href='<?php echo site_url('auth/logout');?>'><ion-icon name="exit"></ion-icon> Выход</a>
			</div>		
		</div>
	</div>
	<div style='height: 20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
    <script>
/*    $(document).ready(function() {
    		
    		$(document).trigger('afterready'); // Вызываем всех слушателей
    		last();
	});
	function last() {
			var url = window.location.pathname;
    		alert(url);
	    	if(url == '/admin/orders/')
	    	{	
				var div = document.body.children[3];
				var div2 = div.children[4];
				var div3 = div2.children[2];
				var div4 = div3.children[1];
				var div5 = div4.children[0];
				var table = div5.children[0];
				var tbody = table.children[1];
				var len = tbody.children.length;

				var customer_summary = [];

				for(var i=0; i<len; i++) {
					var tr = tbody.children[i];
					var td_summary = tr.children[2];
					var div_summary = td_summary.children[0];
					customer_summary.push(div_summary.innerHTML);
					div_summary.innerHTML = parseInt(customer_summary[i]).toLocaleString('ru');
					alert(div_summary.innerHTML);
				}
	    	}			
	}
*/
	</script>
	<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>

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
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<br>
				<a href="<?php echo site_url('admin'); ?>" title="Админ панельге қайтыў" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Вернуться назад </a> | <a href="/admin/groups" title="Вернуться назад" class="btn btn-info"><span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-user"></span> Спосок групп </a>
				<h1>Пользователи</h1>
				<div id="infoMessage" style="color: green;"><?php echo $message; ?></div>
				<table cellpadding=0 cellspacing=10 class="table table-striped table-bordered">
					<tr>
						<th scope="col"> # </th>
						<th scope="col">Имя</th>
						<th scope="col">Фамилия</th>
						<th scope="col">Email</th>
						<th scope="col">Группа</th>
						<th scope="col">Статус</th>
						<th scope="col">Действие</th>
					</tr>
					<?php $i = 1; ?>
					<?php foreach ($users as $user):?>
						<tr>
				            <td><?php echo $i++; ?></td>
				            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
				            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
				            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
							<td>
								<?php foreach ($user->groups as $group):?>
									<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
				                <?php endforeach?>
							</td>
							<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
							<td><a href="<?php echo site_url('auth/edit_user/'.$user->id); ?>" title="Изменить"><span class="glyphicon glyphicon-pencil">Изменить</span></a> | <a href="<?php echo site_url('auth/delete_user/'.$user->id); ?>" title="Удалить"><span class="glyphicon glyphicon-remove-sign">Удалить</span></a></td>
						</tr>
					<?php endforeach;?>
				</table>

				<p><a href="<?php echo site_url('auth/create_user'); ?>" class="btn btn-success">+ Добавить пользователя</a> | <a href="<?php echo site_url('auth/create_group'); ?>" class="btn btn-success">+ Добавить группу</a></p>
			</div>
		</div>
	</div>

</body>
</html>
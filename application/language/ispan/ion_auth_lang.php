<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - Russian (UTF-8)
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
* Translation:  Petrosyan R.
*             for@petrosyan.rv.ua
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.26.2010
*
* Description:  Russian language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful'] 	  	 = 'Учетная запись успешно создана';
$lang['account_creation_unsuccessful'] 	 	 = 'Невозможно создать учетную запись';
$lang['account_creation_duplicate_email'] 	 = 'Электронная почта используется или некорректна';
$lang['account_creation_duplicate_username'] 	 = 'Имя пользователя существует или некорректно';
$lang['account_creation_missing_default_group'] = 'Группа по умолчанию не установлена';
$lang['account_creation_invalid_default_group'] = 'Группа по умолчанию задана некорректно';

// Password
$lang['password_change_successful'] 	 	 = 'Пароль өзгертилди';
$lang['password_change_unsuccessful'] 	  	 = 'Парольди өзгертиў мүмкин емес';
$lang['forgot_password_successful'] 	 	 = 'Пароль алынып тасланды. Электон почтаңызға хабар жиберилди';
$lang['forgot_password_unsuccessful'] 	 	 = 'Пароль алынып тасланыўы мүмкин емес';

// Activation
$lang['activate_successful'] 		  	 = 'Учетная запись активирована';
$lang['activate_unsuccessful'] 		 	 = 'Не удалось активировать учетную запись';
$lang['deactivate_successful'] 		  	 = 'Учетная запись деактивирована';
$lang['deactivate_unsuccessful'] 	  	 = 'Невозможно деактивировать учетную запись';
$lang['activation_email_successful'] 	  	 = 'Сообщение об активации отправлено';
$lang['activation_email_unsuccessful']   	 = 'Сообщение об активации невозможно отправить';
$lang['deactivate_current_user_unsuccessful']= 'You cannot De-Activate your self.';

// Login / Logout
$lang['login_successful'] 		  	 = 'Авторизация табыслы жуўмақланды';
$lang['login_unsuccessful'] 		  	 = 'Логин/пароль қәте';
$lang['login_unsuccessful_not_active'] 		 = 'Акаунт актив емес';
$lang['login_timeout']                       = 'Қәўипсизликке байланыслы ўақтынша кириў имканияты жоқ. Кейинирек урынып көриң';
$lang['logout_successful'] 		 	 = 'Шығыў табыслы жуўмақланды';

// Account Changes
$lang['update_successful'] 		 	 = 'Учетная запись успешно обновлена';
$lang['update_unsuccessful'] 		 	 = 'Невозможно обновить учетную запись';
$lang['delete_successful'] 		 	 = 'Учетная запись удалена';
$lang['delete_unsuccessful'] 		 	 = 'Невозможно удалить учетную запись';

// Groups
$lang['group_creation_successful']  = 'Жаңа Топар қосылды';
$lang['group_already_exists']       = 'Бундай Топар бар';
$lang['group_update_successful']    = 'Топар мағлыўматлары табыслы жаңаланды';
$lang['group_delete_successful']    = 'Топар өширилди';
$lang['group_delete_unsuccessful'] 	= 'Топар өширилмеди';
$lang['group_delete_notallowed']    = 'Администраторлар топары өширилмейди';
$lang['group_name_required'] 		= 'Топар аты әлбетте толтырылыўы керек';
// Activation Email
$lang['email_activation_subject']  = 'Активация учетной записи';
$lang['email_activate_heading']    = '%s атлы аккаунтты активлестириў';
$lang['email_activate_subheading'] = '%s cилтемеге басың';
$lang['email_activate_link']       = 'Сизиң аккаунтты активлестириў';
// Forgot Password Email
$lang['email_forgotten_password_subject'] = 'Умытылған парольди тексериў';
$lang['email_forgot_password_heading']    = '%s пайдаланыўшының паролин алып таслаў';
$lang['email_forgot_password_subheading'] = '%s ушын силтемеге басың';
$lang['email_forgot_password_link']       = 'Парольди қайта тиклеў';
// New Password Email
$lang['email_new_password_subject']    = 'Жаңа пароль';
$lang['email_new_password_heading']    = '%s ушын жаңа пароль';
$lang['email_new_password_subheading'] = 'Пароль %s ге өзгертилди';

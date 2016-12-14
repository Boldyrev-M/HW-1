<?php
// домашнее задание 1
$userName = 'Max';
// имя, возраст, адрес электронной почты, город и краткий текст о себе.
$DOB = '08.12.1969';// strtotime('08 December 1969');
$userAge = 47;// http://ru2.php.net/manual/ru/function.strtotime.php
$userMail = 'maxikb@mail.ru';
$userCity = 'Москва';
$userAbout = 'Изучаю PHP';
?>

<html lang="ru">
    <head>
		<meta charset="utf-8">
    </head>
    <body>
        <h1>ДЗ 1, курс "Введение в PHP"</h1>
        <table>
		<tr>
            <td>Имя:</td>
            <td><?=$userName?></td>
		</tr>
		<tr>
            <td>Возраст:</td>
            <td><?=$userAge?></td>
		</tr>
		<tr>
            <td>E-mail:</td>
            <td><a href="mailto:<?=$userMail?>"><?=$userMail?></a></td>
		</tr>
		<tr>
            <td>Город:</td>
            <td><?=$userCity?></td>
		</tr>
		<tr>
            <td>О себе:</td>
            <td><?=$userAbout?></td>
		</tr>
        </table>

		</body>
</html>

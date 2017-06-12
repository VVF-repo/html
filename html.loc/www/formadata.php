<?php

echo $_POST['password'];
echo $_POST['name'];
echo $_POST['sleep'];

$result = mail("test@test.net","Анкета сайта","С сайта была получено анкета с данными: \nимя: $_POST[name] \nпароль: $_POST[password] \nсколько часов спите: $_POST[sleep]  \nнаработки по экономии времени: $_POST[text]" );

if ($result) {
echo "<p>Сообщение отправлено успешно</p>";	
}
else {
echo "<p>Сообщение НЕ отправлено успешно</p>";	
}
?>

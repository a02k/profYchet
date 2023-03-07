<?php
$name = $_POST['name'];
$email = $_POST['email'];
$question = $_POST['question'];
$status = 'ждет ответа';

$db = new PDO("mysql:host=mysql60.hostland.ru;dbname=host1323541_vsuet02", "host1323541_vsuet", "5q3tfcrK");
$sql = "INSERT INTO contacts_users (name, email, question, status) VALUES ('$name', '$email', '$question', '$status')";
$res = $db->exec($sql);

if($res != 0)
{
    $e = 'Спасибо за оставленный вопрос, мы ответим как можно скорее!!';
}else{
    $e = 'Что-то пошло не так, попробуйте ещё раз!';
}

?>
<section style="font-size: 24pt; text-align: center; margin-top: 300px;">
    <a href="contacts.php">Назад</a>
    <div> <?= $e;?> </div>
</section>
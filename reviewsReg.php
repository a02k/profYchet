<?php
$name = $_POST['name'];
$email = $_POST['email'];
$reviews = $_POST['reviews'];

$db = new PDO("mysql:host=mysql60.hostland.ru;dbname=host1323541_vsuet02", "host1323541_vsuet", "5q3tfcrK");
$sql = "INSERT INTO reviews_users (name, email, reviews,) VALUES ('$name', '$email', '$reviews')";
$res = $db->exec($sql);

if($res != 0)
{
    $e = 'Спасибо за оставленный комментарий!!';
}else{
    $e = 'Что-то пошло не так, попробуйте ещё раз!';
}

?>
<section style="font-size: 24pt; text-align: center; margin-top: 300px;">
    <a href="reviews.php">Назад</a>
    <div> <?= $e;?> </div>
</section>
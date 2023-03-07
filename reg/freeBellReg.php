<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $status = 'новый';
            
    $db = new PDO("mysql:host=mysql60.hostland.ru;dbname=host1323541_vsuet02", "host1323541_vsuet", "5q3tfcrK");
    $sql = "INSERT INTO free_bell (name, phone, status) VALUES ('$name', '$phone', '$status')";
    $res = $db->exec($sql);
            
    if($res != 0)
    {
        $e = 'мы бесплатно перезвоним Вам в течение 15 мининут!';
    }else{
        $e = 'Что-то пошло не так, попробуйте ещё раз!';
    }
?>

<section style="font-size: 24pt; text-align: center; margin-top: 300px;">
    <a href="/profYchet.loc/index.php">Назад</a>
    <div> <?= $e;?> </div>
</section>
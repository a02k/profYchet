<?php
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $application = $_POST['application'];
    $status = 'новый';
                    
    $db = new PDO("mysql:host=mysql60.hostland.ru;dbname=host1323541_vsuet02", "host1323541_vsuet", "5q3tfcrK");
    $sql = "INSERT INTO your_application (name, phone, email, application, status) VALUES ('$name', '$phone', '$email', '$application', '$status')";
    $res = $db->exec($sql);
                    
    if($res != 0)
    {
        $e = 'мы перезвоним Вам в течение 15 мининут для уточнения деталей!';
    }else{
        $e = 'Что-то пошло не так, попробуйте ещё раз!';
    }
?>

<section style="font-size: 24pt; text-align: center; margin-top: 300px;">
    <a href="/profYchet.loc/index.php">Назад</a>
    <div> <?= $e;?> </div>
</section>
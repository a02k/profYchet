<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include_once('layouts/head.php');  ?>
    <title>Отзывы ООО "ПрофУчет" Воронеж</title>
</head>
<body>
    <?php include_once('layouts/header.php'); ?>
    <main class="container">
        <div class="pathway">
            <span><a href="http://kolobaeva.mentor4u.ru/profYchet.loc">Главная страница</a> / Отзывы</span>
        </div>
        <h1>Отзывы</h1>
        <section>
        <?php
        $conn = new mysqli("mysql60.hostland.ru", "host1323541_vsuet", "5q3tfcrK", "host1323541_vsuet02");
        if($conn->connect_error){
            die("Ошибка: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM reviews_users";
        if($result = $conn->query($sql)){
            foreach($result as $row){
                echo "<p class='name_reviews'>" . $row["name"] . "</p>";
                echo "<p>" . $row["reviews"] . "</p>";
                echo "<p class='email_reviews'>" . $row["email"] . "</p>";
                echo "<hr>";
            }
            $result->free();
        } else{
        echo "Ошибка: " . $conn->error;
        }
        $conn->close();
        ?>
        </section>
        <form action="reviewsReg.php" method="post" class="form-reviews">
            <section><p class="section_p_reviews">ОСТАВИТЬ ОТЗЫВ</p></section>
            <section>
                <label id="js-label-form-name" for="name">Имя</label>
                <input id="js-input-form-name" name="name" type="text" placeholder="Ваше имя" value="" required="" autofocus="">
            </section>
            <section>
                <label id="js-label-form-email" for="email">E-mail</label>
                <input id="js-input-form-email" name="email" type="text" placeholder="Ваше e-mail" value="" required="" autofocus="">
            </section>
            <section>
                <label for="reviews">Отзыв</label>
                <textarea name="reviews" type="text" class="input_reviews" rows="5" cols="35" placeholder="Отзыв" required=""></textarea>
            </section>
            <button type="submit" class="button-reviews">ОСТАВИТЬ ОТЗЫВ</button>
        </form>
    </main>
    <?php include_once('layouts/layouts.php'); ?>
    <script src="js/formButton.js"></script>
    <script src="js/reviews.js"></script>
</body>
</html>
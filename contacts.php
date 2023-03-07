<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include_once('layouts/head.php');  ?>
    <title>Отзовы "ПрофУчет" ООО Воронеж</title>
</head>
<body>
    <?php include_once('layouts/header.php'); ?>
    <main class="justify-content container">
        <section>
            <div class="pathway">
                <span><a href="http://kolobaeva.mentor4u.ru/profYchet.loc">Главная страница</a> / Контакты</span>
            </div>
            <h1>Контакты</h1>
            <section class="contacts-map">
                <div> ФИЛИАЛ ООО "ПРОФУЧЕТ" ВОРОНЕЖ</div>
                <div>тел. <b>+7 (951) 553-20-61</b></div>
                <div> e-mail: <a href=#">profychet.voronezh@mail.ru</a></div>
                <div>Воронежская область, г. Воронеж, ул. Майская, д. 27</div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2479.008266274593!2d39.318115315660144!3d51.586411879648146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x413b31678e24eb6b%3A0x31f25967eaabe7c6!2z0JzQsNC50YHQutCw0Y8g0YPQuy4sIDI3LCDQndC40LrQvtC70YzRgdC60L7QtSwg0JLQvtGA0L7QvdC10LbRgdC60LDRjyDQvtCx0LsuLCAzOTQwODM!5e0!3m2!1sru!2sru!4v1676528698905!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
            <section>
                <p><b>ООО "ПРОФУЧЕТ" ВОРОНЕЖ</b></p>
                <p><b>Юр.адрес:</b>	394083, Воронежская Область, г. Воронеж, ул. Майская, д. 27</p>
                <p><b>ИНН:</b>3663142862</p>
                <p><b>ОГРН:</b>1193668025088</p>
                <p><b>E-mail</b>profychet.voronezh@mail.ru</p>
                <p><b>КПП:</b>366301001</p>
            </section>
        </section>
        <section>
            <form action="contactsReg.php" id="form-contacts" class="form-contacts" method="post">
                <div>
                    <div class="form-head">ОСТАЛИСЬ ВОПРОСЫ? НАПИШИТЕ НАМ!</div>
                </div>
                <div>
                    <label for="name">Имя</label>
                    <input id="name" name="name" type="text" placeholder="Как к Вам обращаться?" value="" autofocus="" class="">
                </div>
                    <div>
                    <label for="email">E-mail</label>
                    <input name="email" type="text" placeholder="Для обратной связи" value="" required="" pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$">
                </div>
                    <div>
                    <label>Вопрос</label>
                    <textarea name="question" type="text" rows="5" cols="35" placeholder="Опишите Ваш вопрос" required=""></textarea>
                </div>
                <button type="submit" class="button-contacts">Отправить</button>
            </form>
        </section>
    </main>
    <?php include_once('layouts/layouts.php'); ?>
    <script src="js/formButton.js"></script>
</body>
</html>
<section class="popup-submit-your-application">
    <section class="popup-submit-your-application-body">
        <form action="reg/submitYourApplicationReg.php" method="post" class="form-submit-your-application">
            <div class="close-submit-your-application"></div>
            <div class="call-header">
                <div class="call-header-div">Оставить онлайн-заявку</div><hr>
                <p class="coment_txt">Оставьте свой телефона и мы перезвоним Вам <br> в течение 15 мининут для уточнения деталей.</p><hr>
            </div>
            <div>
                <label for="name">Ваше имя:</label>
                <input id="name" name="name" type="text" placeholder="Как к Вам обращаться?" value="" autofocus="">
            </div>
            <div>
                <label for="phone">Телефон:</label>
                <input name="phone" type="text" placeholder="Введите телефон" value="" required="">
            </div>
            <div>
                <label for="email">E-mail:</label>
                <input name="email" type="text" placeholder="для обратной связи" value="" required="">
            </div>
            <div>
                <label for="application">Ваша заявка:</label>
                <textarea name="application" type="text" rows="5" cols="35" placeholder="Опишите Вашу заявку любым удобным способом" required=""></textarea>
            </div>
            <button type="submit">Отправить</button>
        </form>
    </section>
</section>
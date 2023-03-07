/* ОСТАВИТЬ ЗАЯВКУ */

const headerButtonMenu = document.querySelector('.js-header-button-menu'),
closeSubmitYourApplication = document.querySelector('.close-submit-your-application'),
popupSubmitYourApplication = document.querySelector('.popup-submit-your-application');


headerButtonMenu.addEventListener('click', function(e){
    popupSubmitYourApplication.classList.add('show');
})

closeSubmitYourApplication.addEventListener('click', function(e){
    popupSubmitYourApplication.classList.remove('show');
})



/* БЕСПЛАТНЫЕ ЗВОНКИ */

const buttonMenuPhone = document.querySelector('.button-menu-phone'),
closeFreeBell = document.querySelector('.close-free-bell'),
popupFreeBell = document.querySelector('.popup-free-bell');


buttonMenuPhone.addEventListener('click', function(e){
    popupFreeBell.classList.add('show');
})

closeFreeBell.addEventListener('click', function(e){
    popupFreeBell.classList.remove('show');
})


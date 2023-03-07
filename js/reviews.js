/* ОТЗОВЫ */
const formName = document.getElementById('js-input-form-name'),
formEmail = document.getElementById('js-input-form-email');

formName.addEventListener('input', (e) => {
    let input = e.target;
    let value = input.value;
    const label = document.getElementById('js-label-form-name');

    if (/[^А-Яа-яЁё]/i.test(value)) {
        input.classList.add('js-input');
        label.innerText = 'Введите русские буквы';
        label.classList.add('label-color');
    } else {
        input.classList.remove('js-input');
        label.classList.remove('label-color');
        label.innerText = 'Имя';
    }
})

formEmail.addEventListener('input', (e) => {
    let input = e.target;
    let value = input.value;
    const label = document.getElementById('js-label-form-email');

    if (/[^A-Za-z0-9@.]/i.test(value)) {
        input.classList.add('js-input');
        label.innerText = 'Введите латинские буквы';
        label.classList.add('label-color');
    } else {
        input.classList.remove('js-input');
        label.classList.remove('label-color');
        label.innerText = 'E-mail';
    }
})
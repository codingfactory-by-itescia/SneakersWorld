const loginValue = document.getElementsByClassName('login');

const submitButton = document.getElementsByClassName('submitButton');

const passwordValue = document.getElementsByClassName('password');



submitButton[0].addEventListener('click', () => {
localStorage.setItem('login', loginValue[0].value);
localStorage.setItem('password', passwordValue[0].value);
});




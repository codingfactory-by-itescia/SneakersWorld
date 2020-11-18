const lastNameValue = document.getElementsByClassName('lastName');
const nameValue = document.getElementsByClassName('name');
const birthValue = document.getElementsByClassName('birth');
const mailValue = document.getElementsByClassName('mail');
const adressValue = document.getElementsByClassName('adress');
const cityValue = document.getElementsByClassName('city');
const zipCodeValue = document.getElementsByClassName('zipCode');

const submitButton = document.getElementsByClassName('submitButton');


submitButton[0].addEventListener('click', () => {
localStorage.setItem('lastName', lastNameValue[0].value);
localStorage.setItem('name', nameValue[0].value);
localStorage.setItem('birth', birthValue[0].value);
localStorage.setItem('mail', mailValue[0].value);
localStorage.setItem('adress', adressValue[0].value);
localStorage.setItem('city', cityValue[0].value);
localStorage.setItem('zipCode', zipCodeValue[0].value);
});
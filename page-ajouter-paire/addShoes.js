const brandValue = document.getElementsByClassName('brand');
const modelValue = document.getElementsByClassName('model');
const stateValue = document.getElementsByClassName('state');
const priceValue = document.getElementsByClassName('price');


const submitButton = document.getElementsByClassName('submitButton');

submitButton[0].addEventListener('click', () => {
    localStorage.setItem('brand', brandValue[0].value);
    localStorage.setItem('model', modelValue[0].value);
    localStorage.setItem('state', stateValue[0].value);
    localStorage.setItem('price', priceValue[0].value);
    });
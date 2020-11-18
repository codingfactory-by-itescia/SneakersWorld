const burgerButton = document.getElementById('toggle');
const mobileMenu = document.getElementById('menu-links');
const button = document.querySelectorAll('.link');
const underMenu = document.querySelector('#coll-logo');

burgerButton.addEventListener('click', () => {
    console.log('CLICK');
    mobileMenu.classList.toggle('visible');
});

button.forEach(link => {
    console.log(button);
    link.addEventListener('click', () => {
        button.forEach(element => {
            element.classList.remove('isActive');
            underMenu.style.display = 'none';
        });
        link.classList.add('isActive');
    });
});

button[1].addEventListener('click', () => {
    underMenu.style.display = 'flex';
});


const header = document.querySelector('.header');
const hamburger = document.querySelector('.hamburger');
const headerLinks = document.querySelectorAll('.header a')
const pageHeight = window.innerHeight * 0.1;

hamburger.addEventListener('click', () => {
    header.classList.toggle('--open')
})

headerLinks.forEach((link) => {
    link.addEventListener('click', () => {
        header.classList.remove('--open')
    })
})

window.onscroll = () => {
    let top = window.scrollY;
    top >= pageHeight ? header.classList.add('scrolled') : header.classList.remove('scrolled');
};
const eventBtns = document.querySelectorAll('button.events-button');
const eventDescription = document.querySelector('.events-element-container');
const closeBtn = document.querySelector('.close-btn');

const showEventDescription = e => {
    eventDescription.classList.add('active');
}

const hideEventDescription = e => {
    if (e.type === 'keydown' && e.key !== 'Escape') {
        return;
    }
    eventDescription.classList.remove('active');
}

eventBtns.forEach(btn => {
    btn.addEventListener('click', showEventDescription);
});
closeBtn.addEventListener('click', hideEventDescription);
document.addEventListener('keydown', hideEventDescription);
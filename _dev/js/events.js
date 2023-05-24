const eventBtns = document.querySelectorAll('button.events-button');
const eventDescription = document.querySelector('.events-element-container');
const eventContainer = document.querySelector('.events-container');
const leftBtns = document.querySelectorAll('.left-20');
const rightBtns = document.querySelectorAll('.right-20');
const closeBtn = document.querySelector('.close-btn');

const addClassToBtns = (btns, className) => {
    btns.forEach(btn => {
        btn.classList.add(className);
    });
}

const removeClassFromBtns = (btns, className) => {
    btns.forEach(btn => {
        btn.classList.remove(className);
    });
}

const showEventDescription = e => {
    eventDescription.classList.add('active');
    eventContainer.classList.add('active');    
    addClassToBtns(leftBtns, 'move-left');
    addClassToBtns(rightBtns, 'move-right');
}

const hideEventDescription = e => {
    if (e.type === 'keydown' && e.key !== 'Escape') {
        return;
    }
    eventDescription.classList.remove('active');
    eventContainer.classList.remove('active');
    removeClassFromBtns(leftBtns, 'move-left');
    removeClassFromBtns(rightBtns, 'move-right');
}

eventBtns.forEach(btn => {
    btn.addEventListener('click', showEventDescription);
});

if (closeBtn) {
    closeBtn.addEventListener('click', hideEventDescription);
}

document.addEventListener('keydown', hideEventDescription);
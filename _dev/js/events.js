const eventBtns = document.querySelectorAll('button.events-button');
const eventDescriptions = document.querySelectorAll('.events-element-container');
const eventContainer = document.querySelector('.events-container');
const leftBtns = document.querySelectorAll('.left-20');
const rightBtns = document.querySelectorAll('.right-20');
const closeBtn = document.querySelectorAll('.close-btn');

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
    eventContainer.classList.add('active');    
    addClassToBtns(leftBtns, 'move-left');
    addClassToBtns(rightBtns, 'move-right');
}

const hideEventDescription = e => {
    if (e.type === 'keydown' && e.key !== 'Escape') {
        return;
    }
    eventContainer.classList.remove('active');
    removeClassFromBtns(leftBtns, 'move-left');
    removeClassFromBtns(rightBtns, 'move-right');
}

eventBtns.forEach((btn, index) => {
    btn.addEventListener('click', e => {
        showEventDescription(e);
        eventDescriptions.forEach((description, i) => {
            description.classList.remove('active');
        })
        eventDescriptions[index].classList.add('active');
    });
});

if (closeBtn) {
    closeBtn.forEach((btn, index) => {
        btn.addEventListener('click', e => {
            hideEventDescription(e);
            eventDescriptions[index].classList.remove('active');
        });
    })
}

document.addEventListener('keydown', e => {
    hideEventDescription(e);
    eventDescriptions.forEach(description => {
        description.classList.remove('active');
    })
});
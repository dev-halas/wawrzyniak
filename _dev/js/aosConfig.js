import AOS from 'aos';

AOS.init({
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    duration: 600, // values from 0 to 3000, with step 50ms
    offset: 200,
    easing: 'ease-in-out', // default easing for AOS animations
    anchorPlacement: 'top-bottom',
    once: false,
    //mirron: true,
});
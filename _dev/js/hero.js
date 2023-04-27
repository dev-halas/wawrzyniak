const articles = new Swiper(".heroSlider", {
    /*
    autoplay: {
        delay: 4000,
        pauseOnMouseEnter: true,
    },
    */
    loop: true,
    slideToClickedSlide: true,
    spaceBetween: 0,
    resizeEvent: 'auto',
    slidesPerView: 'auto',

    // Responsive breakpoints

    // Navigation arrows
    
    navigation: {
        nextEl: '.nextHero',
        prevEl: '.prevHero',
    },
    pagination: {
        el: '.hero-pagination',
        type: 'bullets',
        clickable: true,
        horizontalClass: 'hero-bullets',
        bulletClass: 'hero-bullet',
        bulletActiveClass: 'hero-bullet--active'
      },

});

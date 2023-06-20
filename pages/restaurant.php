<?php  

    /* Template Name: Reastaurant Page */

    get_header();

    $restaurant_text = get_field('restaurant_text');

?>
    <main style="overflow:hidden;">
        <?php get_template_part('/components/restaurant/hero');?>
        <section id="about-container">
            <div class="container about-container no-rotate">
                <h2 class="about-header">Smacznego</h2>
                <div class="about-text" data-aos="fade-up">
                    <?php echo $restaurant_text; ?>
                </div>
            </div>
        </section>
        <section id="galeria">
            <div class="container-big gallery-container">
                <h2 class="gallery-header-stroke">Galeria</h2>
                <h2 class="gallery-header-revert">Galeria</h2>
                <div class="container gallery-images">
                    <div class="gallery-image one" data-aos="zoom-in" data-aos-delay="1200">
                        <img src="<?php echo THEME_URL; ?>" alt="sałatka z łososiem">
                    </div>
                    <div class="gallery-image two" data-aos="zoom-in" data-aos-delay="900">
                        <img src="<?php echo THEME_URL; ?>_dev/img/3d-rendering-luxury-hotel-reception-lounge-restaurant.jpg" alt="hotel z luksusową restauracją">
                    </div>
                    <div class="gallery-image three" data-aos="zoom-in" data-aos-delay="600">
                        <img src="<?php echo THEME_URL; ?>_dev/img/sweet-potato-falafel-recipe-idea-vegan.jpg" alt="jedzenie wegańskie">
                    </div>
                    <div class="gallery-image four" data-aos="zoom-in" data-aos-delay="300">
                        <img src="<?php echo THEME_URL; ?>_dev/img/plate-with-keto-diet-food-cherry-tomatoes-chicken-breast-eggs-carrot-salad-with-arugula-spinach-keto-lunch-top-view.jpg" alt="jedzenie dietetyczne ze świeżych warzyw, mięs">
                    </div>
                    <div class="gallery-image five" data-aos="zoom-in">
                        <img src="<?php echo THEME_URL; ?>_dev/img/tasty-italian-pizza-with-tomato-sauce-parmesan.jpg" alt="smaczna pizza z pomidorowym sosem">
                    </div>
                </div>
            </div>
        </section>

        
        <?php 
            get_template_part('/components/restaurant/menu');
            get_template_part('/components/home/events');
        ?>

        <section id="offer-fitness">
            <div class="container-big offer-fitness-container">
                <div class="offer-fitness-image" data-aos="zoom-in">
                    <img src="<?php echo THEME_URL; ?>_dev/img/plate-with-keto-diet-food-cherry-tomatoes-chicken-breast-eggs-carrot-salad-with-arugula-spinach-keto-lunch-top-view.jpg" alt="jedzenie dietetyczne ze świeżych warzyw, mięs">
                </div>
                <h2 class="offer-fitness-header headingBig--revert rotateText">Nasza kuchnia</h2>
                <div class="offer-fitness-text" data-aos="zoom-in">
                    <p>Oferujemy szeroki zestaw potraw gorących i zimnych przygotowanych według własnych receptur oraz polskiej kuchni tradycyjnej. Na życzenie klienta istnieje możliwość przygotowania potraw nie wyszczególnionych w karcie dań.</p>
                    <br/>
                    <p>W naszej restauracji zjedzą znakomity posiłek zarówno zabiegani ludzie biznesu, jak i zakochani szukający nastrojowego, ciepłego wnętrza na wieczorną kolację przy świecach.</p>
                </div>
            </div>
        </section>

        <?php get_template_part('/components/restaurant/worktime');?>
    </main>

<?php get_footer(); ?>
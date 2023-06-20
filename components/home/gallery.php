<?php 
    $gallery_1 = get_field('gallery_1');
    $gallery_2 = get_field('gallery_2');
    $gallery_3 = get_field('gallery_3');
    $gallery_4 = get_field('gallery_4');
    $gallery_5 = get_field('gallery_5');
?>
<section id="galeria">
    <div class="container-big gallery-container">
        <h2 class="gallery-header-stroke">Galeria</h2>
        <h2 class="gallery-header-revert">Galeria</h2>
        <div class="container gallery-images">
            <div class="gallery-image one" data-aos="zoom-in" data-aos-delay="1200">
                <img src="<?php echo esc_url($gallery_1['url']); ?>" alt="pokój jednoosobowy">
            </div>
            <div class="gallery-image two" data-aos="zoom-in" data-aos-delay="1200">
                <img src="<?php echo esc_url($gallery_2['url']); ?>" alt="pokój jednoosobowy">
            </div>
            <div class="gallery-image three" data-aos="zoom-in" data-aos-delay="1200">
                <img src="<?php echo esc_url($gallery_3['url']); ?>" alt="pokój jednoosobowy">
            </div>
            <div class="gallery-image four" data-aos="zoom-in" data-aos-delay="1200">
                <img src="<?php echo esc_url($gallery_4['url']); ?>" alt="pokój jednoosobowy">
            </div>
            <div class="gallery-image five" data-aos="zoom-in" data-aos-delay="1200">
                <img src="<?php echo esc_url($gallery_5['url']); ?>" alt="pokój jednoosobowy">
            </div>
        </div>
    </div>
</section>
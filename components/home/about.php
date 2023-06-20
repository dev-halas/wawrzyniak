<?php 
    $home_text = get_field('home_text');
?>
<section id="about-container" id="hotel">
    <div class="container about-container">
        <h2 class="about-header headingBig--revert rotateText">Dzień dobry</h2>
        <div class="about-text" data-aos="fade-up">
            <?php echo $home_text; ?>
        </div>
    </div>
</section>

<?php if( have_rows('home_rooms') ): ?>
<section id="about-rooms">
    <div class="container-big about-rooms-container">
        <div class="about-rooms">
            <?php 
                while( have_rows('home_rooms') ) : the_row(); 

                $rooms_title = get_sub_field('home_room_title');
                $rooms_link = get_sub_field('home_room_link');
                $rooms_image = get_sub_field('home_room_image');
            
            ?>
            <div class="about-room-image" data-aos="flip-right" data-aos-duration="800">
                <h3 class="title"><?php echo $rooms_title; ?></h3>
                <a class="link" href="<?php echo esc_url($rooms_link['url']); ?>">zobacz</a>
                <img src="<?php echo esc_url($rooms_image['url']); ?>" alt="pokój jednoosobowy">
            </div>
            <?php endwhile ;?>
        </div>
    </div>
</section>
<?php endif; ?>
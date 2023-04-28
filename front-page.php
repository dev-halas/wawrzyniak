<?php get_header(); ?>

    <main>
        <?php 
            get_template_part('/components/home/hero');
            get_template_part('/components/home/about');
            get_template_part('/components/home/offers');
            get_template_part('/components/home/events');
            get_template_part('/components/home/gallery');
        ?>
    </main>

<?php get_footer(); ?>
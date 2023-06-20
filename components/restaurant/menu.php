<?php 
    $menu_1 = get_field('menu_1');
    $menu_2 = get_field('menu_2');
?>
<section id="menu-container">
    <div class="container menu-container">
        <h2 class="menu-header">Nasze menu</h2>
        <div id="lightGallery" class="menu-images">
            <div class="menu-image" data-aos="zoom-in" data-src="<?php echo THEME_URL; ?>_dev/img/menu-left.jpg">
                <img src="<?php echo esc_url($menu_1['url']); ?>" alt="menu">
            </div>
            <div class="menu-image" data-aos="zoom-in" data-src="<?php echo THEME_URL; ?>_dev/img/menu-right.jpg">
                <img src="<?php echo esc_url($menu_2['url']); ?>" alt="menu">
            </div>
        </div>
    </div>
</section>
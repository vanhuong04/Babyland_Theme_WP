<div class="slider">
    <div class="slider__img">
        <?php $img_url_slider = get_theme_mod('my_slider_image','#') ?>
        <img src="<?php echo wp_get_attachment_url($img_url_slider) ?>" alt="">
        <div class="slider__content">
        </div>
    </div>
</div>

<div class="conveyor">
    <div class="conveyor__container">
        <div class="conveyor__text"><?php echo get_theme_mod('text-slider', 'EASY TO ASSEMBLE') ?></div>
        <div class="conveyor__text"><?php echo get_theme_mod('text-slider', 'EASY TO ASSEMBLE') ?></div>
        <div class="conveyor__text"><?php echo get_theme_mod('text-slider', 'EASY TO ASSEMBLE') ?></div>
        <div class="conveyor__text"><?php echo get_theme_mod('text-slider', 'EASY TO ASSEMBLE') ?></div>
        <div class="conveyor__text"><?php echo get_theme_mod('text-slider', 'EASY TO ASSEMBLE') ?></div>
        <div class="conveyor__text"><?php echo get_theme_mod('text-slider', 'EASY TO ASSEMBLE') ?></div>
    </div>
</div>
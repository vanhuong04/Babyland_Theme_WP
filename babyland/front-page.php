<?php
get_header();
get_template_part('/template-parts/slider');
?>
<div class="category">
    <div class="category__top">
        <div class="category__content">
            <p class="category__title">
                <?php echo get_theme_mod('text-banner-title', 'Begin your baby’s journey with us.') ?></p>
            <p class="category__sub-title"><?php echo get_theme_mod('content-banner', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo enim sit
                amet magna semper lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In commodo enim sit
                amet.') ?></p>
            <a href="https://<?php echo get_theme_mod('link-banner', '#') ?>" class="category__button">explore</a>
        </div>

        <div class="category__img">
            <?php $img_url_slider = get_theme_mod('my_slider_image', '#') ?>
            <img src="<?php echo wp_get_attachment_url($img_url_slider) ?>" alt="">
        </div>
    </div>
    <div class="category__botton">
        <?php echo do_shortcode('[product_categories hide_empty="0" columns="10" limit="10"]') ?>
    </div>
</div>

<div class="bestSeller">
    <div class="bestSeller__heading">
        <p>best seller</p>
    </div>
    <div class="bestSeller__product"><?php echo do_shortcode('[products limit="4" columns="4" best_selling="true"]') ?>
    </div>
</div>

<div class="banner">
    <div class="banner__img">
    <?php $img_url_banner_2 = get_theme_mod('img-banner-2', 'https://th.bing.com/th/id/OIP.VywEiYzYO1gr02ri9iN61gHaEo?w=312&h=195&c=7&r=0&o=5&dpr=1.3&pid=1.7') ?>
        <img
            src="<?php echo wp_get_attachment_url($img_url_banner_2 ) ?>"
            alt=""></div>
    <div class="banner__content">
        <div class="banner__title">
            <p><?php echo get_theme_mod('text-banner-2', 'YOUR DREAM BABY SHOP') ?></p>
        </div>
        <a href="<?php echo get_permalink(wc_get_page_id('shop')) ?>" class="banner__button">order now</a>
    </div>
</div>

<div class="four">
    <div class="four__heading">
        <p>TWE BRING MAGIC IN YOUR HOMESWITH OUR ASSORTMENT</p>
    </div>
    <div class="four__container">
        <div class="four__one">
            <div class="four__img"><img src="<?php echo get_template_directory_uri() . '/public/four_one.png' ?>"
                    alt="">
            </div>
            <div class="four__title">
                <?php echo get_theme_mod('four-title1-shop', 'Start browsing and go be inspired') ?></div>
            <div class="four__content">
                <p><?php echo get_theme_mod('four-content1-shop', 'Risus quis varius quam quisque diam a sed veliti dignissim sodales ut eu gravida quise.') ?>
                </p>
            </div>
        </div>

        <div class="four__one">
            <div class="four__img"><img src="<?php echo get_template_directory_uri() . '/public/four_two.png' ?>"
                    alt="">
            </div>
            <div class="four__title">
                <?php echo get_theme_mod('four-title2-shop', 'Start browsing and go be inspired') ?></div>
            <div class="four__content">
                <p><?php echo get_theme_mod('four-content2-shop', 'Risus quis varius quam quisque diam a sed veliti dignissim sodales ut eu gravida quise.') ?>
                </p>
            </div>
        </div>

        <div class="four__one">
            <div class="four__img"><img src="<?php echo get_template_directory_uri() . '/public/four_three.png' ?>"
                    alt=""></div>
            <div class="four__title">
                <?php echo get_theme_mod('four-title3-shop', 'Start browsing and go be inspired') ?></div>
            <div class="four__content">
                <p><?php echo get_theme_mod('four-content3-shop', 'Risus quis varius quam quisque diam a sed veliti dignissim sodales ut eu gravida quise.') ?>
                </p>
            </div>
        </div>

        <div class="four__one">
            <div class="four__img"><img src="<?php echo get_template_directory_uri() . '/public/four_four.png' ?>"
                    alt="">
            </div>
            <div class="four__title">
                <?php echo get_theme_mod('four-title4-shop', 'Start browsing and go be inspired') ?></div>
            <div class="four__content">
                <p><?php echo get_theme_mod('four-content4-shop', 'Risus quis varius quam quisque diam a sed veliti dignissim sodales ut eu gravida quise.') ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="arrivals">
    <div class="arrivals__header">
        <div class="arrivals__heading">
            <p>NEW ARRIVALS</p>
        </div>
        <div class="arrivals__button"><a href="">explore</a></div>
    </div>
    <div class="arrivals__body"><?php echo do_shortcode('[products limit="8" columns="4" rand ]') ?></div>
</div>

<div class="contact">
    <?php $img_url_contact = get_theme_mod('contact-img', '#') ?>
    <div class="contact__right"><img src="<?php echo get_theme_mod($img_url_contact, '#') ?>" alt=""></div>
    <div class="contact__left">
        <div class="contact__title">
            <p>Everything a baby needs</p>
        </div>

        <div class="contact__day">
            <i class="bi bi-clock-fill"></i>
            <div class="contact__day--content">
                <p>Monday/Friday <?php echo get_theme_mod('concact-firt-week', '9:00-23:00') ?></p>
                <p>Saturday <?php echo get_theme_mod('concact-last-week', '10:00-21:00') ?></p>
            </div>
        </div>

        <div class="contact__phone">
            <i class="bi bi-geo-alt-fill"></i>
            <div class="contact__phone--content">
                <p><?php echo get_theme_mod('concact-phone', '+012-345-6789') ?></p>
                <p><?php echo get_theme_mod('concact-email', 'TheWildKingdom@contact.com') ?></p>
                <p><?php echo get_theme_mod('concact-location', '9889 Lorem Ipsum street, Pellentesque, CA, USA') ?></p>
            </div>
        </div>

        <div class="contact__button"><a href="">contact us</a></div>
    </div>
</div>

<div class="thumbnail">
<?php $img_url_slider_footer_1 = get_theme_mod('slide-footer-1', '#') ;
$img_url_slider_footer_2 = get_theme_mod('slide-footer-2', '#') ;
$img_url_slider_footer_3 = get_theme_mod('slide-footer-3', '#') ;
$img_url_slider_footer_4 = get_theme_mod('slide-footer-4', '#') ;
$img_url_slider_footer_5 = get_theme_mod('slide-footer-5', '#') ;

?>
    <img src="<?php echo get_theme_mod($img_url_slider_footer_1, 'https://th.bing.com/th/id/OIP.5851R3x0jW0FQ8kHxQyIyAHaHX?w=199&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7" ') ?>alt="">
    <img src="<?php echo get_theme_mod($img_url_slider_footer_2, 'https://th.bing.com/th/id/OIP.5851R3x0jW0FQ8kHxQyIyAHaHX?w=199&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7" ') ?>" alt="">
    <img src="<?php echo get_theme_mod($img_url_slider_footer_3, 'https://th.bing.com/th/id/OIP.5851R3x0jW0FQ8kHxQyIyAHaHX?w=199&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7" ') ?>" alt="">
    <img src="<?php echo get_theme_mod($img_url_slider_footer_4, 'https://th.bing.com/th/id/OIP.5851R3x0jW0FQ8kHxQyIyAHaHX?w=199&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7" ') ?>" alt="">
    <img src="<?php echo get_theme_mod($img_url_slider_footer_5, 'https://th.bing.com/th/id/OIP.5851R3x0jW0FQ8kHxQyIyAHaHX?w=199&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7" ') ?>" alt="">
</div>
<?php
get_footer();
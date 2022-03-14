<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dmitry-prime
 */

?>

<footer class="contact-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-title">
                    <h2><?php the_field("footer_title") ?></h2>
                    <?php
                        $content = get_field('footer_description');
                        if($content)
                            echo "<p>" . $content . "</p>";
                    ?>
                </div>
            </div>
        </div>

        <div class="row mt-80 justify-content-center">
            <div class="col-2">
                <div class="contact-box">
                    <a href="<?php the_field('whatsapp_link') ?>" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/icons/whatsapp_48dp.svg" alt="whatsapp"></a>
                </div>
            </div>
            <div class="col-2">
                <div class="contact-box">
                    <a href="<?php the_field('vk_link') ?>" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/icons/vk_48dp.svg" alt="vk"></a>
                </div>
            </div>
            <div class="col-2">
                <div class="contact-box">
                    <a href="<?php the_field('viber_link') ?>" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/icons/viber_48dp.svg" alt="viber"></a>
                </div>
            </div>
            <div class="col-2">
                <div class="contact-box">
                    <a href="<?php the_field('telegram_link') ?>" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/icons/telegram_48dp.svg" alt="telegram"></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ####################### End Scroll to Top Area ####################### -->

<script src="<?php bloginfo('template_directory') ?>/js/wow.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
</body>
</html>

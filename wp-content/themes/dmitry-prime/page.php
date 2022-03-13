<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dmitry-prime
 */

get_header();
?>

    <section class="home-banner-area">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center">
                <div class="banner-content col-md-6 col-sm-12 justify-content-center">
                    <div class="me wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s"><?php the_field('banner_cloud') ?></div>
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s"><?php the_field('my_name') ?></h1>
                    <div class="designation mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
                        <?php the_field('banner_description_one') ?>
                        <span class="designer"><?php the_field('banner_description_two_one') ?></span>
                        <?php the_field('banner_description_two_two') ?>
                        <span class="developer"><?php the_field('banner_description_three') ?></span>
                    </div>
                </div>
                <div class="banner-img col-md-6 col-sm-10">
                    <img class="img-fluid" src="<?php the_field('banner_photo_link') ?>" alt="my photo" />
                </div>
            </div>
        </div>
    </section>


    <section class="about-area section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-between flex-wrap-reverse">
                <div class="col-lg-6 about-left">
                    <img class="img-fluid" src="<?php the_field('about_area_img') ?>" alt="my photo">
                </div>
                <div class="col-lg-5 col-md-12 about-right wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="1s">
                    <div class="section-title">
                        <h2><?php the_field('about_area_title') ?></h2>
                    </div>
                    <div class="mb-50 wow">
                        <p><?php the_field('about_area_first_p') ?></p>
                        <p><?php the_field('about_area_second_p') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="service-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2><?php the_field('service_area_title') ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="<?php the_field('service_area_card_img_first') ?>" alt="money cash">
                        <h4><?php the_field('service_area_card_title_first') ?></h4>
                        <p><?php the_field('service_area_card_description_first') ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <img src="<?php the_field('service_area_card_img_second') ?>" alt="ambitions icon">
                        <h4><?php the_field('service_area_card_title_second') ?></h4>
                        <p><?php the_field('service_area_card_description_second') ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                        <img src="<?php the_field('service_area_card_img_third') ?>" alt="sponsor icon">
                        <h4><?php the_field('service_area_card_title_third') ?></h4>
                        <p><?php the_field('service_area_card_description_third') ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                        <img src="<?php the_field('service_area_card_img_fourth') ?>" alt="system icon">
                        <h4><?php the_field('service_area_card_title_fourth') ?></h4>
                        <p><?php the_field('service_area_card_description_fourth') ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section-top-border section-gap">
        <div class="container">
            <div class="section-title">
                <h2><?php the_field('li_block_title') ?></h2>
            </div>
            <ul class="unordered-list">
                <?php
                    $content = get_field('li_block_content');
                    $li_arr = explode("||", $content);
                    foreach($li_arr as $li) {
                        echo "<li>" . $li . "</li>";
                    }
                ?>
            </ul>
        </div>
    </section>


    <section class="mt-5">
        <div class="container">
            <div class="section-title">
                <h2><?php the_field('first_video_title') ?></h2>
            </div>
            <style>
                iframe {
                    height: 500px !important;
                    width: 100% !important;
                }
            </style>
            <?php the_field('first_video_link') ?>
        </div>
    </section>


    <section class="testimonials_area section-gap">
        <div class="container">
            <div class="section-title">
                <h2><?php the_field('two_rule_title') ?></h2>
            </div>
            <div class="row">
                <ul class="ordered-list">
                    <?php
                        $content = get_field('two_rule_content');
                        $li_arr = explode("||", $content);
                        foreach($li_arr as $li) {
                            echo "<li><span>" . $li . "</span></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </section>


    <section class="job-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2><?php the_field('seventh_slide_title') ?></h2>
                        <p><?php the_field('seventh_slide_description') ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                    $string_titles = get_field('seventh_slide_arr_title');
                    $string_descriptions = get_field('seventh_slide_arr_description');

                    $arr_titles = explode("||", $string_titles);
                    $arr_descriptions = explode("||", $string_descriptions);

                    foreach($arr_titles as $key => $title):
                ?>
                <div class="col-lg-6 fadeInLeft wow">
                    <div class="single-job">
                        <div class="top-sec">
                            <div class="top-left">
                                <h4><?php echo $title ?></h4>
                            </div>
                        </div>
                        <div class="bottom-sec">
                            <?php echo $arr_descriptions[$key] ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <section class="section-top-border">
        <div class="container">
            <div class="section-title">
                <h2><?php the_field('li_block_two_title') ?></h2>
            </div>
            <ul class="unordered-list">
                <?php
                    $content = get_field('li_block_two_content');
                    $li_arr = explode("||", $content);
                    foreach($li_arr as $li) {
                        echo "<li>" . $li . "</li>";
                    }
                ?>
            </ul>
        </div>
    </section>


    <section class="my-5">
        <div class="container">
            <div class="section-title">
                <h2><?php the_field('video_block_two_title') ?></h2>
            </div>
            <?php the_field('video_block_iframe') ?>
        </div>
    </section>

<?php
get_footer();

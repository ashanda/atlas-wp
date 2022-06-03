<?php
/*
Template Name: Home
*/
 get_header();  ?>

<!-- banner start -->
<?php if( get_field('banner_image') ): ?>
<div class="top-banner" id="top-banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
<?php endif; ?>        
<div class="sign-btns">
            <a class="login eng" href="<?php the_field('login_url');?>">login</a>
            <a class="register eng" href="<?php the_field('register_url');?>">register</a>
        </div>
        <div class="banner-caption">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <div class="left-sec">
                        <h2 class="sub-heading"><?php the_field('banner_title');?></h2>
                        <h1 class="heading eng"><?php the_field('banner_eng_title');?></h1>
                        <h2 class="sub-heading"><?php the_field('banner_sub_title');?></h2>
                        <a class="reg-btn" href="<?php the_field('register_url');?>">ලියාපදිංචි වන්න</a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6">
                    <div class="right-sec">
                        <h3 class="caption"><?php the_field('banner_caption_01');?> </h3>
                        <h3 class="caption small-text"><?php the_field('banner_caption_02');?></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="social">
        <a class="s-fb" href="<?php the_field('');?>"><i class="fa fa-facebook"></i></a>
        <a class="s-wp" href="<?php the_field('');?>"><i class="fa fa-whatsapp"></i></a>
    </div>
    <!-- banner end -->
    <!-- cards section start -->
    <div class="cards my-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/includes/img/card-back.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-12 text-center">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/includes/img/card1.png" alt=""></a>
                </div>
                <div class="col-sm-4 col-6 text-center">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/includes/img/card2.png" alt=""></a>
                </div>
                <div class="col-sm-4 col-6 text-center">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/includes/img/card3.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="third-sec" style="background-image: url('<?php echo get_template_directory_uri(); ?>/includes/img/3sec-web.jpg');">
        <div class="third-heading">
            <h1 class="heading eng"><?php the_field('section_03_title');?></h1>
            <h2 class="sub-heading"><?php the_field('section_03_sub_title');?></h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">

                <div class="left-sec">
                    <div class="content">
                        <h3> <i class="fa fa-book"></i> <?php the_field('sub_title_left');?></h3>
                        <p><?php the_field('description_left');?> </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-4">

            </div>
            <div class="col-sm-4 col-md-4">
                <div class="right-sec">
                    <div class="content">
                        <h3> <i class="fa fa-book"></i><?php the_field('sub_title_right');?></h3>
                        <p><?php the_field('description_right');?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="teacher-sec" style="background-image: url('<?php echo get_template_directory_uri(); ?>/includes/img/teacher-sec.jpg');">
        <div class="header text-center">
            <h3><?php the_field('section_04_title');?></h3>
        </div>

        <div class="owl-carousel owl-theme">
        <?php if( have_rows('teachers_slider') ): ?>
                
                <?php while( have_rows('teachers_slider') ): the_row(); 
                    $image = get_sub_field('teacher_image');
                    ?>
                    <div class="item text-center">
                        <img src="<?php echo $image['url'];?>" alt="">
                        <h3><?php the_sub_field('name_'); ?></h3>
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
                <?php endwhile; ?>
                
            <?php endif; ?>
            
            

        </div>
    </div>


<?php get_footer(); ?>
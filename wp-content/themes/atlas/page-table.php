<?php
/*
Template Name: Table
*/
get_header();  ?>

<!-- space -->
<div class="space"></div>

<!-- <?php if (have_rows('teachers_slider')) : ?>

    <?php while (have_rows('teachers_slider')) : the_row();
                $image = get_sub_field('timetable_image');
    ?>
        <div class="container">
            <div class="row table-section">
                <div class="item text-center">
                    <img src="<?php echo $image['url']; ?>" alt="">
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?> -->

<div class="tables-section">
    <div class="container">
        <!-- <div class="row Head-section">
            <div class="col-3 text-center">
                <h3 class="eng">Month</h3>
            </div>
            <div class="col-6 text-center">
                <h2 class="eng">Teacher's Name</h2>
            </div>
            <div class="col-3 text-center">
                <h3 class="eng">Subject</h3>
            </div>
        </div> -->
        <div class="row table-section">
            <div class="image text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/wp-content/uploads/2022/06/Time-table-01.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<!-- <div class="tables-section">
    <div class="container">
        <div class="row Head-section">
            <div class="col-3 text-center">
                <h3 class="eng">Month</h3>
            </div>
            <div class="col-6 text-center">
                <h2 class="eng">Teacher's Name</h2>
            </div>
            <div class="col-3 text-center">
                <h3 class="eng">Subject</h3>
            </div>
        </div>
        <div class="row table-section">
            <div class="image text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/includes/img/desktop-banner.jpg" alt="">
            </div>
        </div>
    </div>
</div> -->


<?php get_footer(); ?>
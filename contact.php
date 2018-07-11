<?php /* Template Name: contact */ ?>
<?php get_header(); ?>

<div class="container">
    <div class="row contact-header">
        <img class="books-icon" src="<?php bloginfo('stylesheet_directory'); ?>/images/Journal.png" alt="" />
        <h1 class="text-center">Contact Rachelle</h1>
    </div>
    <div class="row center-content">

        <div class="col-md-auto">
            <h3>
                <?php the_field('contact_info_title');?>
            </h3>
            <?php the_field('contact_form_text');?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
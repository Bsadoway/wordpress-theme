<?php /* Template Name: visits */ ?>
<?php get_header(); ?>


<div class="container">
    <h1 class="in-person-header">In Person</h1>
    <div class="container-fluid white-bg padding-50">
        <div class="row">
            <?php $image = get_field('in_person_image'); ?>
            <img class="img-feature in-person-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="center-text in-person-text">
                    <?php the_field('in_person_text');?>
                </div>
            </div>
        </div>
    </div>
    <div class="row buffer">
        <div class="col-sm">
            <div class="testimonial-container">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <div class="testimonial-icon">
                            <i class="fa fa-quote-left pad-icon"></i>
                        </div>
                        <div class="description">
                            <?php the_field('testimonial_quote_text');?>
                        </div>
                    </div>
                </div>
                <?php the_field('testimonial_quote_person');?>
            </div>
        </div>
        <div class="col-sm">
            <div class="testimonial-container">

                <div class="testimonial">
                    <div class="testimonial-content">
                        <div class="testimonial-icon">
                            <i class="fa fa-quote-left pad-icon"></i>
                        </div>
                        <div class="description">
                            <?php the_field('testimonial_quote_text2');?>
                        </div>
                    </div>
                </div>
                <?php the_field('testimonial_quote_person2');?>
            </div>
        </div>
    </div>
    <div class="row cta">
        <div class="">
            <p>
                Educators! Download your teacher’s guide for:
            </p>
            <?php 

            $file = get_field('download_link');

            if( $file ): ?>

            <a class="btn dwn-button" href="<?php echo $file['url']; ?>">
                <i class="fas fa-download dwn-icon icon-l"></i>
                <?php the_field('download_title');?>
                <i class="fas fa-file-pdf dwn-icon icon-r"></i>
                <?php echo $file['filename']; ?>
            </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
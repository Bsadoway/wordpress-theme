<?php /* Template Name: about */ ?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md">
            <div>
                <div>
                    <h1>About Rachelle</h1>
                </div>
                <?php $image = get_field('about_rachelle_image'); ?>
                <img class="img-padding about-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <p class="rachelle-p">
                    <?php the_field('about_rachelle_text');?>
                </p>
            </div>
        </div>
        <div class="col-md">
            <h3 class="twitter-header">
                <?php the_field('twitter_field'); ?>
            </h3>
            <div class="twitter-body">
                <a class="twitter-timeline" data-height="600" data-theme="light" href="https://twitter.com/rkdelaney?ref_src=twsrc%5Etfw">Tweets by Rachelle</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
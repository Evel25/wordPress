<?php get_header();?>
<?php if(have_posts()) : while(have_posts( )) : the_post() ?>
<article class="container mt-4">
    <div class="col-8 text-dark">
        <div class="row text-dark">
            <div class="col-12">
                <h1 class="mt-2"><?=the_title();?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img src="<?= get_the_post_thumbnail_url(); ?>" class="img-fluid " alt="article image" />
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 pt-3 pb-3">
                <!-- article goes here-->
                <?= the_content();?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <span class="author-info">Created By <span class="author"><?php the_author();?></span> At <?=the_date();?></span>
            </div>
        </div>
    </div>

</article>
<?php endwhile; endif; ?>
<!-- article details ends-->

<?php get_footer(); ?>
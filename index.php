<?php get_header(); ?>

<!-- start intro section -->
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 blog-intro" style="background: url(<?= get_template_directory_uri().'/img/cover2.jpg' ?>);background-position: center;">
                <div class="overlay">
                    <div class="row h-100">
                        <div class="col-12 my-auto">
                            <h1 class="text-center header-special"><span class="header-special">Blogging </span>Makes Your Life Orgenazed</h1>
                            <p class="text-center blockquote mt-4">what ever you want and you need about technology feelds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start intro section -->
    <!-- blogs section start -->
    <div class="container mt-2">
        <div class="row">
            <div class="col-12 mt-4 mb-4">
                <h5 class="section-header text-dark text-center text-capitalize">latest articles</h5>
            </div>
        </div>
        <div class="row">

        <?php if(have_posts()): while(have_posts()): the_post() ?>
        
            <div class="col-3 mt-2 mb-2">
                <div class="card shadow" id="article-item">
                    <?php if(!has_post_thumbnail()): ?>
                    <img src="<?= get_template_directory_uri().'/img/programming.jpg' ?>" class="card-img-top" alt="programming">
                    <?php else: ?>
                    <img src="<?= get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="programming">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?= get_permalink(); ?>"><?= the_title();?></a></h5>
                        <p class="card-text"><?= the_excerpt(); ?></p>
                        <a href="<?= get_permalink(); ?>" class="btn btn-transparent border">Read More</a>
                    </div>
                </div>
            </div>

        <?php endwhile; endif; ?>
            
            
            
        </div>
    </div>
    <!-- blogs section ends -->

<?php get_footer(); ?>
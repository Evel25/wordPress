<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" rel="stylesheet"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js" rel="stylesheet"></script> -->
    <?php wp_head(); ?>
</head>
<body>
    <!-- start the navigation bar-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="#">DarkBlog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php
                    // $data = wp_nav_menu( array(
                    //     'theme_location' => 'header_menu',
                    //     'container' => false,
                    //     'echo'=> false
                    // ) ); 
                    // echo var_dump($data);
                    $data = wp_get_nav_menu_items( 'headerMenu');
                    foreach($data as $item){
                        ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=$item->url;?>"><?=$item->title;?> <span class="sr-only">(current)</span></a>
                        </li>
                        <?php
                     
                    }
                    ?>
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="/index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                     -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>
    </div>
    <!-- navigation bar ends -->
<head>
   <div class="blog-header">
 <h1 class="blog-title">
 <a href="<?php bloginfo( 'wpurl' );?>"><?php echo
get_bloginfo( 'name' ); ?></a></h1>
 <p class="lead blog-description"><?php echo get_bloginfo(
'description' ); ?></p>
</div> 

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"
      rel="stylesheet">

    <!-- FontAwesome CSS -->

<link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css"
      rel="stylesheet">

    <!-- Swiper CSS -->
<link href="<?php bloginfo('template_directory'); ?>/css/swiper.min.css"
      rel="stylesheet">
    <!-- Styles -->
<link href="<?php bloginfo('template_directory'); ?>/css/style.css"
      rel="stylesheet">
</head>



<header class="site-header">
    <?php wp_nav_menu(
   array( 'theme_location' => 'Top_menu', 
       'container_class' => 'menu1'
) ); 
?>
        <div class="top-header-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 flex align-items-center">
                        <div class="header-bar-text d-none d-lg-block">
                            <p>Welcome to our Library</p>
                        </div><!-- .header-bar-text -->

                        <div class="header-bar-email d-none d-lg-block">
                            <a href="#">Contactme@email.com</a>
                        </div><!-- .header-bar-email -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 flex justify-content-between justify-content-lg-end align-items-center">
                        <div class="header-bar-social d-none d-md-block">
                            <ul class="flex align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-none d-md-block">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .top-header-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="site-branding flex flex-column align-items-center" font-size="medium">
                        <h4 class="site-title"><a href="<?php bloginfo('template_directory'); ?>/index.php" rel="home">Find books,Magasin,CDs and more...</a></h4>
                    </div><!-- .site-branding -->
<div class="page-header flex justify-content-center align-items-center" style="background-image: url('images/blog-bg.jpg')">
                    <h1>The Story</h1>
                </div>
                    

                        <div class="header-bar-social d-md-none">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-md-none">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .site-header -->
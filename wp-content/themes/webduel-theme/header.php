<html <?php language_attributes();?>>
<head>
    
    <meta name="robots" content="noindex">
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <?php wp_head(); ?>
    <?php 
        global $post;
        $post_slug = $post->post_name;

    ?>
</head>
<body <?php body_class( $post_slug);?> >


    <section class="navbar-section row-container res-width">
        <div class="logo">
            <?php $imgURL =  wp_get_attachment_image_src(386);  //get the logo
            ?>
            <img src="<?php print_r($imgURL[0]);?>" alt="Turkish To Go Logo">
        </div>
        <nav id="navmenu">
                  <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'main_menu', 
                            'container_class' => "main-menu"
                            )); 
                    ?>
        </nav>
    </section>




                                
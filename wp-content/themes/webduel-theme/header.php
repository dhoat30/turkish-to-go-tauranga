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

    <div class="main-body">
        <section class="row-container header-img">
            <div class="res-width">
                <img src="<?php echo get_theme_file_uri('img/logo.png') ?>" alt="Logo">
            </div>
        </section>
    

        <section class="row-container navbar">
            <nav class="desktop-navbar column-margin">
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'fig_main_menu', 
                        'container_class' => "main-menu"
                        )); 
                ?>
                <div class="search-bar-container">
                        <div class="search-bar-toggle">
                            <img class="search-icon" src="<?php echo get_theme_file_uri('icons/search-icon.png');  ?>" alt="Search Icon">
                            <img class="close-icon" src="<?php echo get_theme_file_uri('icons/close-icon.png');  ?>" alt="Search Icon">
                        </div>

                    <div class="search-bar">        
                    <?php echo  do_shortcode('[ivory-search id="33" title="Default Search Form"]'); ?>
                    </div>
                </div>

            </nav>

            
            <nav class="mobile-navbar column-margin">
                <div class="mobile-top-nav">
                    <div class="hamburger-menu">
                        <span>
                            <img src="<?php echo get_theme_file_uri('icons/hamburger-menu.png') ?>" alt="Mobile Menu Icon">
                        </span>            
                    </div>

                    <div class="search-bar-container">
                        <div class="search-bar-toggle">
                            <img class="search-icon" src="<?php echo get_theme_file_uri('icons/search-icon.png');  ?>" alt="Search Icon">
                            <img class="close-icon" src="<?php echo get_theme_file_uri('icons/close-icon.png');  ?>" alt="Search Icon">
                        </div>
                    

                        <div class="search-bar">        
                        <?php echo  do_shortcode('[ivory-search id="33" title="Default Search Form"]'); ?>
                        </div>
                    </div>
                        
                </div>
                


                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'fig_main_menu', 
                        'container_class' => "main-menu"
                        )); 
                ?>
                

            </nav>

            

        </section>



                                
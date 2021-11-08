<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <? wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div class="wraper" >
        <header class="relative">
            <nav>
                <div class="bg-white max-w-full text-3xl  font-medium menu-mob container relative flex items-center" id="navbarNavAltMarkup">
                   <!-- logo -->
                   
                    <!-- <ul class="container relative flex items-center"> -->
                        <div class="logo-wraper py-9 mr-12">
                            <a class="" href="<?php echo esc_url(site_url()); ?>">
                                <img class="logo" src="<?php echo get_theme_file_uri('/images/logo.png')?>" alt="">
                            </a>
                        </div>
                        <ul class="flex items-center w-full">
                            <li  class=" "><a href="<?php echo esc_url(site_url('/categoria-produto/eletrodometicos/')); ?>" class=" py-5 px-6">Eletrodomésticos </a></li>
                            <li class=" "><a href="<?php echo esc_url(site_url('/categoria-produto/decoracao-casa-e-cozinha/')); ?>" class=" py-5 px-6">Decoração/casa e cozinha</a></li>
                            <li class=" "><a href="<?php echo esc_url(site_url('/categoria-produto/brinquedos-e-hobbies/')); ?>" class=" py-5 px-6">Brinquedos e hobbies</a></li>
                            <li class=" custom-menu-link ">
                                <a >Mais Categorias</a>
                                <?php
                            
                                    wp_nav_menu( array(
                                        'theme_location'    => 'fancy_lab_main_menu',
                                        'container'         => 'div',
                                        'container_class'   => 'menu-container',
                                        /* 'container_id'      => 'bs-example-navbar-collapse-1', */
                                        'menu_class'        => 'nav navbar-nav',

                                    ) );
                                ?>
                            </li>
                            
                            <li class="wrapper">
                                <a >
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger nav-item nav-link"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </ul>
                    </div>
                    
                </div>
                
            </nav>
        </header>
        
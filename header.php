<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRP Wordpres</title>
</head>
<body class="container">
    <!-- bill pay and contact top bar -->
<div class="quickNav"
     style="background-image: url(<?php echo get_template_directory_uri()?>/media/banner.jpg)">
         <button>
            <!-- a hrefed changing to href -->
            <a to={"/contact"}>
             <h2>Become a Customer</h2>
            </a>
         </button>
         <button>
           <a to={"/billPay"}>
             <h2>Pay Your Bill</h2>
           </a>
         </button>
       </div>
    <nav class="nav">
        <div class="gutsBox">
        <!-- need to work LOGO fade in and out -->
            <div class="fadeInLogo"> 
                <img
                    src="<?php echo get_template_directory_uri()?>/media/brp-logo.jpg"
                />
            </div>
        <!-- <NavMiddle /> -->
        <div class="navMiddleContainer">
            <h1 name="format-detection" content="telephone=no">
            828-733-3603
            </h1>
            <?php
            // require_once(plugin_dir_path(__FILE__) . '/menu.php');
                require_once(plugin_dir_path(__FILE__) . '/assets/desknav.php');
            ?>
            <!-- begin hamburger section -->
            <div>
                <button id="menu-icon"
                    class="hamburger"
                    type="button"
                >
                    <span class="hamburgerBox">
                        <span class="hamburgerInner"></span>
                    </span>
                </button>
                    <div 
                        class="mobile-menu">
                    <!-- <MobileMenu /> -->
                    </div>
            </div>
            <!-- End hamburger -->
      </div>
        <!-- end nav Middle -->
        
            <div class="fadeInMap">
                <img
                    src="<?php echo get_template_directory_uri()?>/media/map.jpg"
                />
            </div>
        </div>
    </nav>
    <div class="bannerImage">
    <?php 
            require_once(plugin_dir_path(__FILE__) . '/assets/banner.php');
            
            ?> 
    </div>
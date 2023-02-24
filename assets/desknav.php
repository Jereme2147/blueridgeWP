<nav class="navMiddlelinks">
         <?php 
                wp_nav_menu( array ( 
                        'theme_location' => 'primary_menu',
                        'link_before' => '<h2 onclick="menu(this)">',
                        'link_after' => '</h2>') );
        ?>
        <!-- <div href="#" id="deskSearch"onclick="deskSearch(this)"><img src="<?php // echo get_template_directory_uri()?>/images/search.svg" alt="search icon"/></div> -->
        
</nav>
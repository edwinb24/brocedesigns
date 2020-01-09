<!doctype html>
<html lang="en">
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <?php 
            wp_head();
            /*Including variables for images and any server side rendering */
            include(dirname(__FILE__).'/assets/variables.php');
            include(dirname(__FILE__).'/assets/google_tag_manager_header.html');
        ?>
<!-- Critical Styles -->
    <style>       
        <?php 
        include(dirname(__FILE__).'/assets/css/reset.css');
        ?>
    </style>

<!-- Home Styles -->
        <style>
            <?php 
                if(is_front_page()) {
                    include(dirname(__FILE__).'/assets/css/home.css');
                }
                else {
                    include(dirname(__FILE__).'/assets/css/critical.css');
                    include(dirname(__FILE__).'/assets/css/3d_styles.css');
                }
            ?>
        </style>
<!-- Lazy Styles -->
        <style>       
            <?php 
                if(!is_front_page()) {
                    include(dirname(__FILE__).'/assets/css/lazy_header.css');
                    include(dirname(__FILE__).'/assets/css/lazy_content.css');
                    include(dirname(__FILE__).'/assets/css/lazy_footer.css');
                } 
                ?>
        </style>
        <script>
            <?php 
            include(dirname(__FILE__).'/assets/js/header_menu_bar.js');
            if(!is_front_page()) {
                include(dirname(__FILE__).'/assets/js/3d_scrolling.js');           
            }
            ?>       
        </script>
        
        <script>
            <?php 
                include(dirname(__FILE__).'/assets/js/houdini_index.js');
            ?>       
        </script>




    </head>
<body>
<?php 
    include(dirname(__FILE__).'/assets/google_tag_manager_body.html');
?>
<div class="header-wrapper">
    <div class="main-header">
        <div class="logo"><a href="/">Edwin Broce</a></div>
        <div class="header_navigation">
        <input type="checkbox" id="toggle-main-menu"/>
        <label class="menu-on" for="toggle-main-menu" onclick="toogleHamburgerIcon()">
            <div class="hamburger-icon">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div> 
        </label>
        <label class="menu-off" for="toggle-main-menu" onclick="toogleHamburgerIcon()"></label>
            <div class="header_menu">    
                <?php wp_nav_menu(array('theme_location'=>'header_menu')); ?>
                <nav class="social_media">
                    <a href="https://www.facebook.com/edwin.b24" target="_blank"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/icons8-facebook-f-50_f5jaI8SnuZ.png" alt="Facebook Account"></a>
                    <a href="https://github.com/edwinb24" target="_blank"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/icons8-github-50_2tvaKuTdI.png" alt="GitHub Account"></a>
                    <a href="https://www.instagram.com/edwin_b24" target="_blank"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/icons8-instagram-50_G9KosLytl.png" alt="Instagram Account"></a>
                    <a href="https://www.linkedin.com/in/edwin-broce/" target="_blank"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/icons8-linkedin-50_TMqTNg4N8w.png" alt="LinkedIn Account"></a>
                    <a href="https://www.twitch.tv/edb24" target="_blank"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/icons8-twitch-50_WkLgdNVD3k.png" alt="Twitch Account"></a>
                    <a href="https://twitter.com/edwin_b24" target="_blank"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/icons8-twitter-50_4MdNhJlT4.png" alt="Twitter Account"></a>
                </nav>
            </div>
        </div>
    </div>
</div>

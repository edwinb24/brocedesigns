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
            include(dirname(__FILE__).'/assets/css/critical.css');
            ?>
        </style>
<!-- Lazy Styles -->
        <style>       
            <?php 
            include(dirname(__FILE__).'/assets/css/lazy_header.css');
            include(dirname(__FILE__).'/assets/css/lazy_content.css');
            include(dirname(__FILE__).'/assets/css/lazy_footer.css');
            include(dirname(__FILE__).'/assets/css/accessibility_styles.css');
            ?>
        </style>
        
        <script>
            <?php 
            include(dirname(__FILE__).'/assets/js/header_menu_bar.js');
            ?>       
        </script>
<!-- Lazy Scripts -->
        <script>       
            <?php 
            include(dirname(__FILE__).'/assets/js/accessibility_buttons.js');
            ?>
        </script>
    </head>
<body>
<?php 
    include(dirname(__FILE__).'/assets/google_tag_manager_body.html');
?>
<div class="header-wrapper">
    <div class="main-header">
        <div class="accessibility_and_external_links">
            <div class="menu-header-external-links-container">
                <a href="#"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/github-30_LeqgMdxb9.png"></a>
                <a href="#"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/linkedin-30_aRqBRZuJM.png"></a>
                <a href="#"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/facebook-30_Toe1navbC.png"></a>
                <a href="#"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/twitter-30_6LxApzLPo.png"></a>
                <a href="#"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/twitch-30_9fAtfBDmTU.png"></a>
                <a href="#"><img src="https://ik.imagekit.io/edwinb24/Social_Media_Icons/instagram-30__di21_gDI.png"></a>
            </div>
            <div class="accessibility_menu">
                <button class="dark_light_theme_button accessibility_header_button" onclick="invertColors()">
                    ◐
                    <span class="accessibility_tooltip tooltip_styles">
                        Adjust Contrast
                    </span>
                </button>
                <button class="toogle_font_size accessibility_header_button" onclick="bigFonts()">
                    <span>T</span><span>T</span>
                    <span class="accessibility_tooltip tooltip_styles">
                        Increase Text Size
                    </span>
                </button>
            </div>
        </div>
        <div class="header-logo">
            <a href="/">
                <img src="<?php echo $logo_image ?>" alt="<?php echo $brand_name?> logo">
            </a>
        </div>
    </div>
</div>
<input type="checkbox" id="toggle-main-menu"/>
<label class="menu-on" for="toggle-main-menu" onclick="toogleHamburgerIcon()">
    <div class="hamburger-icon">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div> 
    <span>     
        Menu
    </span>
</label>
<label class="menu-off" for="toggle-main-menu" onclick="toogleHamburgerIcon()"></label>
<div class="main-menu-wrapper">
    <div class="main-menu">
        <div class="main-menu-logo">
            <a href="/request-a-kit">
                <img src="<?php echo $logo_image ?>" alt="<?php echo $brand_name?> logo" onload="toogleMainMenuImage()">
            </a>
        </div>
        <?php wp_nav_menu(array('theme_location'=>'header_menu')); ?>
    </div>
</div>

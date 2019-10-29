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
            include(dirname(__FILE__).'/assets/css/temporal_styles.css');
            if(is_page( 7360 ))
                include(dirname(__FILE__).'/assets/css/table_comparison.css');
            ?>
        </style>
<!-- Lazy Styles -->
        <style>       
            <?php 
            include(dirname(__FILE__).'/assets/css/lazy_header.css');
            include(dirname(__FILE__).'/assets/css/lazy_content.css');
            include(dirname(__FILE__).'/assets/css/lazy_footer.css');
            include(dirname(__FILE__).'/assets/css/accessibility_styles.css');
            include(dirname(__FILE__).'/assets/css/pop_up.css');
            ?>
        </style>
        
        <script>
            <?php 
            include(dirname(__FILE__).'/assets/js/header_menu_bar.js');
            include(dirname(__FILE__).'/assets/js/pop_up.js');
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

<div id="modal_background" class="hidden_popup" onclick="togglePopUp()">
</div> 
    <div class="header-wrapper">
        <div class="main-header">
            <div class="accessibility_and_external_links">
                <div class="menu-header-external-links-container">
                    <ul>
                        <li  class="span_with_pop_up" id="member_portal" onclick="togglePopUp(this)">
                            For Members
                        </li>
                        <li  class="span_with_pop_up" id="producer_portal" onclick="togglePopUp(this)">
                            For Producers
                        </li>
                        <li  class="span_with_pop_up" id="provider_portal" onclick="togglePopUp(this)">
                            For Providers
                        </li>
                    </ul>
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
            <div class="header-cta">
                <a href="/enroll"><button class="header-enroll-cta">Enroll Now</button></a>
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

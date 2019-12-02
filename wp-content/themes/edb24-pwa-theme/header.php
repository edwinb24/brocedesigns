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
<!-- Home Styles -->
        <style>
            <?php 
                include(dirname(__FILE__).'/assets/css/home.css');
            ?>
        </style>
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
            ?>
        </style>
        <script>
            <?php 
            include(dirname(__FILE__).'/assets/js/header_menu_bar.js');
            ?>       
        </script>
    </head>
<body>
<?php 
    include(dirname(__FILE__).'/assets/google_tag_manager_body.html');
?>
<div class="header-wrapper">
    <div class="main-header">
        <div>Edwin Broce</div>
        <?php wp_nav_menu(array('theme_location'=>'footer_menu')); ?>
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

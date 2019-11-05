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
    </div>
</div>

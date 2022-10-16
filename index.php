<?php 
/*
/// this file for  theme header
*/

?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class='no-js'>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>

    <div id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <!-- static image -->
                        <!-- <img class='w-100' src='<?php echo get_template_directory_uri(  ) ?>/img/logo.png' alt="">  -->
                        <!-- dynamic Image -->
                        <img class='w-100' src='<?php echo get_theme_mod('dear__header__logo') ?>' alt=""> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer() ?>
</body>
</html>
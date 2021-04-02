<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
        <title><?php wp_title(''); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

    </head>
    <body  <?php body_class();?>>
        <div id="page" class="site">
            <header id="head" class="site-header">
                <?php get_template_part( 'components/layout/header/navigation' ); ?>
            </header>
            <div id="content" class="site-content">
            
            
     
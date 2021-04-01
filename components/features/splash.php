<?php 
 $slides_post = new WP_Query([
     'post_type' => 'post',
 ]);
?>

<div class="splash">
    <?php
    if ( is_active_sidebar( 'header-widget' ) ) : ?>
        <div id="header-widget-area" class="header-widget-area widget-area" role="complementary">
        <?php dynamic_sidebar( 'header-widget' ); ?>
        </div>
    <?php endif; ?>
    <div class="row carousel">
        <button type="button" id="backButton"><p><</p></button>
        <div class="container">
            <div class="carousel__inner row">
                <?php while($slides_post -> have_posts()) : $slides_post->the_post(); ?>        
                    <div class="col-12 col-lg-4 post-column p-3">
                        <div class="post">
                            <h3 class="slide-title"><?php the_title(); ?></h3>
                            <div class="slide-content">
                                <?php the_content() ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_query();?>
            </div>
        </div>
        <button type="button" id="forwardButton"><p>></p></button>
    </div>
</div>


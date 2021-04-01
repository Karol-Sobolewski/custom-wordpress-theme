<?php 
 $section_post = new WP_Query([
     'post_type' => 'post',
     'posts_per_page' => 3
 ]);
?>

<div class="mainSection">
    <?php
    if ( is_active_sidebar( 'section-widget' ) ) : ?>
        <div id="section-widget-area" class="section-widget-area widget-area" role="complementary">
        <?php dynamic_sidebar( 'section-widget' ); ?>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="carousel row">
            <?php while($section_post -> have_posts()) : $section_post->the_post(); ?>        
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
</div>


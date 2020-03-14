<?php
    /*Template Name: Portfolio*/
    get_header();
    query_posts(array(
       'post_type' => 'case_study'
    ));
    while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink() ?>">
            <div class="card">
                <div class="card-image">
                    <?php the_post_thumbnail('medium', ['class' => 'card-featured-img']) ?>
                </div>
                <div class="card-content">
                    <p class="card-over-title">
                        <?php echo get_post_custom_values('settore')[0] ?> 
                    </p>    
                    <h3 class="card-title">
                        <?php the_title() ?>
                    </h3>
                </div>
            </div>
        </a>
    <?php endwhile;
    get_footer();
?>
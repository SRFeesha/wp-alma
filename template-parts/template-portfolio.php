<?php
    /*Template Name: Portfolio*/
    get_header();
?>

<div id="container">
    <div id="content" class="pageContent">
        <h1 class="entry-title margin-top-7"><?php the_title(); ?></h1> <!-- Page Title -->
        <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); 
        ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page margin-top-5">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->
        <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
        ?>

        <div class="card-grid margin-top-9">
            <?php
                query_posts(array(
                'post_type' => 'case_study'
                ));
                while (have_posts()) : the_post(); ?>
                    <div class="card">
                        <a class="card-link" href="<?php the_permalink() ?>">
                            <div class="card-image">
                                <?php the_post_thumbnail('full', ['class' => 'card-featured-img']) ?>
                            </div>
                            <div class="card-content">
                                <p class="card-over-title caption">
                                    <?php echo get_post_custom_values('settore')[0] ?> 
                                </p>    
                                <h2 class="card-title">
                                    <?php the_title() ?>
                                </h2>
                            </div>
                        </a>
                    </div>
                <?php endwhile;
                get_footer();
            ?>
        </div>
    </div>
</div>
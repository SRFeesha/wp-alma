<?php
    /* Template Name: Sitemap */
    get_header();
?>

<?php get_header(); ?>

<div id="sitemap" class="content-area">
   <div id="content" class="site-content" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <header class="entry-header">
                <h1 class="entry-title h1 margin-top-7"> <?php the_title(); ?> </h1> <!-- Include the page title -->
            </header>

            <div class="entry-content">
                <?php the_content(); ?> <!-- Show the content added to the page by the user -->
                
                <div class="sitemap">
                    <div class="grid">
                        <section class="pages margin-top-7 col-6">
                            <h2 class="entry-title has-gray-700-color has-text-color">Pages</h2>
                            <ul class="margin-top-3"><?php wp_list_pages("title_li="); ?></ul>
                        </section>

                        <section class="cpt-posts margin-top-7 col-6">
                            <h2 class="entry-title has-gray-700-color has-text-color">Case studies</h2>
                            <ul class="margin-top-3"><?php query_posts( array( 'post_type' => 'case_study' ) ); // Change product to the slug used by your CPT!
                                if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                                    <li>
                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php endwhile; endif; wp_reset_query(); ?>
                            </ul>
                        </section>
                    </div>

                    <div class="grid">
                        <section class="categories margin-top-7 col-6">
                            <h2 class="entry-title has-gray-700-color has-text-color"><i class="icon-th-list"></i>Categorie</h2>
                            <ul class="margin-top-3">
                                <?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&feed=RSS&title_li='); ?>
                            </ul>
                        </section>

                        <section class="feeds margin-top-7 col-6">
                            <h2 class="entry-title has-gray-700-color has-text-color">Feeds</h2>
                            <ul class="margin-top-3">
                                <li><a title="Full content" href="feed:<?php bloginfo('rss2_url'); ?>">Main RSS</a></li>
                                <li><a title="Comment Feed" href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comment Feed</a></li>
                            </ul>
                        </section>
                    </div>
                    
                    <section class="posts margin-top-7 col-6">
                        <h2 class="entry-title has-gray-700-color has-text-color"><i class="icon-paper-clip"></i>Blog Posts</h2>
                        <ul class="margin-top-3"><?php // Change showposts= to the amount you'd like to show on the front end.
                            // $archive_query = new WP_Query('showposts=999');
                            // WP_Query arguments
                            $args = array(
                                'post_type'              => array( 'post' ),
                                'post_status'            => array( 'publish' ),
                                'has_password'           => false,
                                'nopaging'               => true,
                            );
                            $post_query = new WP_Query( $args );
                            if ( $post_query->have_posts() ) {
                                while ( $post_query->have_posts() ) {
                                    $post_query->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
                                    </li> <?php
                                }
                            } 
                            // Restore original Post Data
                            wp_reset_postdata(); ?>
                        </ul>
                    </section>

                </div><!-- .sitemap -->
            </div><!-- .entry-content -->
        </article><!-- #post -->
    <?php endwhile; // end of the loop. ?>
   </div><!-- #content -->
</div><!-- #sitemap -->

<?php get_footer(); ?> 
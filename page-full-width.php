<?php
/*
Template Name: Page - Full Width
*/
?>

<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     
          <?php the_content(); ?>
        
  <?php endwhile; ?>

  <?php else : ?>
            
            <article id="post-not-found">
                <header>
                  <h1><?php _e("Not Found", "bonestheme"); ?></h1>
                </header>
                <section class="post_content">
                  <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
                </section>
                <footer>
                </footer>
            </article>
            
            <?php endif; ?>

<?php get_footer(); ?>


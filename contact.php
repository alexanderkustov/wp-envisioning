<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <div id="tap-share" class="session blowout donate">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1>Contact us.</h1>
      </div>
    </div>
    <div class="row" style="margin-top:40px;">
      <div class="col-md-6">
        <div class="donate-share">
          <a href="mailto:contact@envisioning.zendesk.com"><i class="fui-mail"></i> Send us an e-mail</a>
        </div>
        <div class="donate-share">
          <a href="https://www.facebook.com/envisioningtech" target="_blank"><i class="fui-facebook"></i> Like us on Facebook</a>
        </div>
        <div class="donate-share">
          <a href="http://twitter.com/envisioning_io" target="_blank"><i class="fui-twitter"></i> Follow us on twitter</a>
        </div>
      </div>
    </div>

  </div>
</div>
        
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


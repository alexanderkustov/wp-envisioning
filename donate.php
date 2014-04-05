<?php
/*
Template Name: Donate
*/
?>

<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <div id="fund-share" class="session blowout donate">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h1>Fund us with dollars or likes.</h1>
              <h2>We’re a quickly growing foundation with big plans. With your support, we can focus on envisioning technology.</h2>
            </div>
          </div>
          <div class="row" style="margin-top:40px;">
            <div class="col-md-6">
              <div class="donate-share">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_donations">
                  <input type="hidden" name="business" value="cf@envisioning.io">
                  <input type="hidden" name="lc" value="US">
                  <input type="hidden" name="item_name" value="Envisioning">
                  <input type="hidden" name="no_note" value="0">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
                  <a onclick="$(this).closest('form').submit()" target="_blank" class="paypal-donate"><i class="fui-credit-card"></i> Donate via paypal</a>
                </form>
              </div>
              <div class="donate-share">
                <a href="https://www.facebook.com/envisioningtech" target="_blank"><i class="fui-facebook"></i> Like us on Facebook</a>
              </div>
            </div>
          </div>
        </div>
      </div>  

      <div id="tap-share" class="session blowout donate">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h1>Tap our network of experts, hackers &amp; thinkers to work with you.</h1>
              <h2>Envisioning concentrates researches around serveral sectors and industries. Find domain experts, technology developers &amp; design thinkers to assist in your projects.</h2>
            </div>
          </div>
          <div class="row" style="margin-top:40px;">
            <div class="col-md-6">
              <div class="donate-share">
                <a href="mailto:tapthenetwork@envisioning.zendesk.com"><i class="fui-mail"></i> Send us an e-mail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="fund-r-share" class="session blowout donate">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h1>Fund the research that will shape your industry.</h1>
              <h2>Technology is relentless. Organizations, individuals, networks — join with us to understand it. We welcome like-minded organizations to partner in understanding futures.</h2>
            </div>
          </div>
          <div class="row" style="margin-top:40px;">
            <div class="col-md-6">
              <div class="donate-share">
                <a href="mailto:futureresearch@envisioning.zendesk.com?subject=We%20want%20to%20conduct%20research"><i class="fui-mail"></i> Send us an e-mail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="donate-share" class="session blowout donate">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h1>Share these findings with esteemed colleagues &amp; sworn enemies.</h1>
              <h2>We see a rapidly accelerating world and want to empower influencers from all sides to join the conversation.</h2>
            </div>
          </div>
          <div class="row" style="margin-top:40px;">
            <div class="col-md-6">
              <div class="donate-share">
                <a href="http://envi.si/fom-tweet" target="_blank"><i class="fui-twitter"></i> Share on twitter</a>
              </div>
              <div class="donate-share">
                <a href="http://envi.si/fom-fb" target="_blank"><i class="fui-facebook"></i> Share on facebook</a>
              </div>
              <div class="donate-share">
                <a href="http://envi.si/fom-linked" target="_blank"><i class="fui-linkedin"></i> Share on linkedin</a>
              </div>
              <div class="donate-share">
                <a href="http://envi.si/fom-email" target="_blank"><i class="fui-mail"></i> Share via e-mail</a>
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


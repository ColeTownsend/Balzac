<div id='bump'>
<article class="<?php echo page_custom_field('header-style', ''); ?>"> <!-- Dictating the color of the header/nav links -->
<?php theme_include('header'); ?>

    <section class="article" id="article-<?php echo article_id(); ?>">
      <div class="overlay"></div>
      <div class="featured-image" style="background-image: url(<?php echo page_custom_field('featured-image', '/themes/balzac/img/soft-trees.jpg'); ?>);"></div>

      <article class="wrap post">
        <header class="post-header">
          <hgroup>
            <h1><?php echo page_title(); ?></h1>
          </hgroup>
        </header>
    
        <?php echo page_content(); ?>
          
        <a href="http://twitter.com/share?url=<?php echo full_url(); ?>&text=<?php echo article_title(); ?>&via=<?php echo twitter_account(); ?>" class="share">Share</a>
    
      </article>
    </section>
</div>
</article> <!-- ending that hacky wrapper to change nav color -->

<?php theme_include('footer'); ?>

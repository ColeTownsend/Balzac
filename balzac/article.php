<div id='bump'>
<article class="<?php echo article_custom_field('header-style', ''); ?>"> <!-- Dictating the color of the header/nav links -->
<?php theme_include('header'); ?>

    <section class="article" id="article-<?php echo article_id(); ?>">
      <div class="overlay"></div>
      <div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', '/themes/balzac/img/soft-trees.jpg'); ?>);"></div>

      <article class="wrap post">
        <header class="post-header">
          <hgroup>
            <h1><?php echo article_title(); ?></h1>
            <p class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('F jS, Y', article_time()); ?></time></p>
            <p class="intro"><?php echo article_description(); ?></p>
          </hgroup>
        </header>
    
        <?php echo article_markdown(); ?>
          
        <a href="http://twitter.com/share?url=<?php echo (full_url() . substr( article_url(), 1)); ?>&text=<?php echo article_title(); ?>&via=<?php echo twitter_account(); ?>" class="share">Share</a>
    
      </article>
    </section>
</div>

</article> <!-- End hacky wrap that changes nav color -->

<?php theme_include('footer'); ?>

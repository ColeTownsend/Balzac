<div id='bump'>
<?php theme_include('header'); ?>
	<section class="article" id="article-<?php echo article_id(); ?>">
      <div class="overlay"></div>
      <div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', 'themes/balzac/img/soft-trees.jpg'); ?>);"></div>
      
      <article class="wrap post">
        <header class="post-header">
          <hgroup>
            <h1>We're lost!</h1>
            <p class="date">404 - Page Not Found</p>
            <p class="intro">Seems like we've stumbled into No Man's Land.</p>
          </hgroup>
        </header>
    
        <p>It looks like this isn't actually a page. Why not wander back <a href="<?php echo base_url(); ?>">home</a>?</p>
    
      </article>
    </section>
</div>


<?php theme_include('footer'); ?>
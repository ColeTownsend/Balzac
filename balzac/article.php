<?php theme_include('header'); ?>

		<?php theme_include('header'); ?>
    <section class="article" id="article-<?php echo article_id(); ?>">
      <article class="wrap post">
        <header class="post-header">
          <hgroup>
            <h1><?php echo article_title(); ?></h1>
            <p class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('F jS, Y', article_time()); ?></time></p>
            <p class="lead"><?php echo article_description(); ?></p>
          </hgroup>
        </header>
    
        <?php echo article_markdown(); ?>
          
        <div class="btn-jacket"><a href="http://twitter.com/share?url=<?php echo full_url(); ?>&text=<?php echo article_title(); ?>&via=<?php echo twitter_account(); ?>" class="button">Share</a></div>
    
      </article>
    </section>
</div>
<?php theme_include('footer'); ?>

		<?php if(comments_open()): ?>
		<section class="comments">
			<?php if(has_comments()): ?>
			<ul class="commentlist">
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
					<div class="wrap">
						<h2><?php echo comment_name(); ?></h2>
						<time><?php echo relative_time(comment_time()); ?></time>

						<div class="content">
							<?php echo comment_text(); ?>
						</div>

						<span class="counter"><?php echo $i; ?></span>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<label for="name">Your name:</label>
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>

				<p class="email">
					<label for="email">Your email address:</label>
					<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
				</p>

				<p class="textarea">
					<label for="text">Your comment:</label>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
		<?php endif; ?>

<?php theme_include('footer'); ?>
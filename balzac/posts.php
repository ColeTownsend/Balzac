<div id='bump'>
<?php theme_include('headerDark'); ?>
        <section class="article archive">
          <article class="archive-wrap">
            <?php if(has_posts()): ?>
              <!-- We have posts, it's safe to loop. -->
              <ol class="post-list">
                 <lh><h2><span class="bb">Recent Posts</span></h2></lh>
                <?php while(posts()): ?>
                  <li>
                    <div class="deets left-slide"><h1><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
                        <p class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></p>
                        <p class=""><?php echo article_description(); ?></p>
                    </div>
                  </li>
                <?php endwhile; ?>
              </ol>
            <?php else: ?>
              <p class="unprepped">Looks like there is nothing here. Huh!</p>
            <?php endif; ?>
          </article>
        </section>
    </div>
<?php theme_include('footer'); ?>
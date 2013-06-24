  <div class="push"></div>
  <footer>
    <aside class="wrap post">
      <ol class="previous-posts">
          <p class="recent-list">Previous Posts</p>
        <?php while(rwar_latest_posts()): ?>
            <li>
              <span class="recent-title"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></span>
              <span class="recent-date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></span>
            </li>
    <?php endwhile; ?>
  

      </ol>
      <div class="social right">
        <ul>
            <li><a id="mail" href="mailto:cole@coletownsend.com"><span class="foot-link">Contact Me</span></a></li>
        	<li><a id="twit" href="<?php echo twitter_url(); ?>" target="_blank"><span class="foot-link">@<?php echo twitter_account(); ?></span></a></li> 
        	<li><a id="drib" href="http://dribbble.com/ColeTownsend" target="_blank"><span class="foot-link">ColeTownsend</span></a></li>
        </ul>
    </div>
    </aside>
    <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>
  </footer>

  <!-- If they're out, get some from the cellar -->
  <script>window.jQuery || document.write('<script src="<?php echo theme_url('/js/jquery.js'); ?>"><\/script>')</script>
  <script src="http://coletownsend.com/web/content/script/waypoints.js"></script>

  <!-- Custom JS -->
  <script src="<?php echo theme_url('/js/scripts.js'); ?>"></script>

  </body>
</html>
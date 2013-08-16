<div id='bump'>
<?php theme_include('headerDark'); ?>
        <section class="article archive">
          <article class="archive-wrap">
            <?php if(has_search_results()): ?>
              <!-- We have results, it's safe to loop. -->
              <h1></h1>
              <ol class="post-list">
                 <lh><h2><span class="bb">Results for &ldquo;<?php echo search_term(); ?>&rdquo;</h2></lh>
                
                <?php $i = 0; while(search_results()): $i++; ?>
                      <li>
                        <div class="deets left-slide"><h1><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
                            <em><p class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></p></em>
                            <p class=""><?php echo article_description(); ?></p>
                        </div>
                      </li>
                <?php endwhile; ?>
              </ol>
            
            <?php else: ?>
            	<p class="intro">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly? If you did, head back to the <a href="<?php echo base_url(); ?>">home page</a>.</p>
            <?php endif; ?>  
            <!-- End Search Loop -->    
          </article>
        </section>
    </div>
<?php theme_include('footer'); ?>
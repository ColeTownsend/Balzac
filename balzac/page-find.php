<div id='bump'>
<?php theme_include('headerDark'); ?>
        <section class="article archive">
          <article class="archive-wrap">
              <!-- We have posts, it's safe to loop. -->
              
              <ol class="post-list">
                 <form action="<?php echo search_url(); ?>" method="post">
                 <lh><h2><span class="bb"><input name="term" type="text" placeholder="Hit enter to submit" value="<?php echo search_term(); ?>">                 
                 </span></h2></lh>
              </ol>
          </article>
        </section>
    </div>
<?php theme_include('footer'); ?>
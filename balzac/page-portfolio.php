<?php

  $allowCat = array(2);

  function article_category_id() {
    if($category = Registry::prop('article', 'category')) {
      $categories = Registry::get('all_categories');
      return $categories[$category]->id;
    }
  }
    
    function portf_list() {
      // only run on the first call
      if( ! Registry::has('rwar_post_archive')) {
        // capture original article if one is set
        if($article = Registry::get('article')) {
          Registry::set('original_article', $article);
        }
      }
    
      if( ! $posts = Registry::get('rwar_post_archive')) {
        $posts = Post::where('status', '=', 'published')->sort('created', 'desc')->get();
    
        Registry::set('rwar_post_archive', $posts = new Items($posts));
      }
    
      if($result = $posts->valid()) {
        // register single post
        Registry::set('article', $posts->current());
    
        // move to next
        $posts->next();
      }
      else {
        // back to the start
        $posts->rewind();
    
        // reset original article
        Registry::set('article', Registry::get('original_article'));
    
        // remove items
        Registry::set('rwar_post_archive', false);
      }
    
      return $result;
    }

?>

<div id='bump'>
<?php theme_include('headerDark'); ?>
        <section class="article archive">
          <article class="archive-wrap">
              <ol class="post-list">
                 <lh><h2><span class="bb">Case Studies</span></h2></lh>
        <?php while(portf_list()): ?>
            <?php foreach($allowCat as $cat): ?>
                <?php if(article_category_id() == $cat): ?>
                  <li>
                    <div class="deets left-slide"><h1><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
                    <p class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></p>
                    </div>
                    <p class=""><?php echo article_description(); ?></p>
                  </li>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endwhile; ?>
              </ol>
          </article>
        </section>
    </div>
<?php theme_include('footer'); ?>
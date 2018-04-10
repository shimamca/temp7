<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--Partial: Popular Posts-->

<div class="widget-title widget-popular-posts-title">
    <h4 class="title"><?php echo html_escape($this->lang->line("index_title_event")); ?></h4>
</div>

<div class="col-sm-12 widget-body">
    <div class="row">
        <ul class="widget-list w-events-list">
            <!--List  article posts-->
            <?php 
			$arr__category_posts = (helper_get_category_posts(11)); // 11 -> events catagory
			foreach ($arr__category_posts as $item): ?>
			
                  <li>
                    <a href="<?php echo base_url() . 'post/' . html_escape($item->title_slug) . '/' . $item->id; ?>">
                           
                            <?php if (!empty($item->image_slider)): ?>
                                <img src="<?php echo base_url() . $item->image_slider; ?>"
                                     alt="<?php echo html_escape($item->title); ?>" class="img-responsive"/>
                            <?php endif; ?>

                    </a>
                   <h4>
                        <a href="<?php echo base_url() . 'post/' . html_escape($item->title_slug) . '/' . $item->id; ?>">
                            <?php echo html_escape($item->title); ?>
                        </a>
                    </h4>
                 <p class="summary"> 
				 <?php echo html_escape(character_limiter($item->summary, 200, '...')); ?>

				
				
 </p>
 </li>
               
            <?php endforeach; ?>

      </ul>
    </div>
</div>
<div class="clearfix">&nbsp;</div>
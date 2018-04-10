<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--Partial: Popular Posts-->
 <div class="col-sm-12 col-md-12">
<div class="widget-title widget-popular-posts-title">
    <h4 class="title"><?php echo html_escape($this->lang->line("index_title_event")); ?></h4>
</div>
</div>
<div class="col-sm-12 widget-body">
    <div class="row">
       
            <!--List  article posts-->
            <?php 
			$arr__category_posts = (helper_get_category_posts(11));
			foreach ($arr__category_posts as $item): ?>
			
               <div class="col-sm-6 col-md-6">
				 <div class="border_div">
                    <a href="<?php echo base_url() . 'post/' . html_escape($item->title_slug) . '/' . $item->id; ?>">
                           
                            <?php if (!empty($item->image_slider)): ?>
                                <img src="<?php echo base_url() . $item->image_slider; ?>"
                                     alt="<?php echo html_escape($item->title); ?>" class="img-responsive"/>
                            <?php endif; ?>

                    </a>
                   <h4 class="title_border_div">
                        <a href="<?php echo base_url() . 'post/' . html_escape($item->title_slug) . '/' . $item->id; ?>">
                            <?php echo html_escape(character_limiter($item->title, 35, '...')); ?>
                        </a>
                    </h4>
                 <p class="summary_border_div"> 
				 <?php echo html_escape(character_limiter($item->summary, 75, '...')); ?>
				  </p>
                </div>
			 </div>
            <?php endforeach; ?>

      
    </div>
</div>
<div class="clearfix">&nbsp;</div>
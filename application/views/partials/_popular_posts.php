<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--Partial: Popular Posts-->
<div class="widget-title widget-popular-posts-title">
    <h4 class="title"><?php echo html_escape($this->lang->line("title_popular_posts")); ?></h4>
</div>

<div class="col-sm-12 widget-body">
    <div class="row">
        <ul class="widget-list w-popular-list">

            <!--List  popular posts-->
            <?php foreach ($popular_posts as $item): ?>
			 <?php if( html_escape($item->category_id) != 10) {?>
                <li>
				
                    <a href="<?php echo base_url() . 'post/' . html_escape($item->title_slug) . '/' . $item->id; ?>">
                            <?php if (!empty($item->image_small)): ?>
                                <img src="<?php echo base_url() . $item->image_small; ?>"
                                     alt="<?php echo html_escape($item->title); ?>" class="img-popular"/>
                            <?php endif; ?>
                            <?php if (!empty($item->image_slider)): ?>
                                <img src="<?php echo base_url() . $item->image_slider; ?>"
                                     alt="<?php echo html_escape($item->title); ?>" class="img-popular-mobile"/>
                            <?php endif; ?>

                    </a>
                    <h3 class="title">
                        <a href="<?php echo base_url() . 'post/' . html_escape($item->title_slug) . '/' . $item->id; ?>">
                            <?php echo html_escape(character_limiter($item->title, 55, '...')); ?>
                        </a>
                    </h3>
                  

                </li>
			 <?php } ?>
            <?php endforeach; ?>

        </ul>
    </div>
</div>
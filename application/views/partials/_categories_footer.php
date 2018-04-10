<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="footer-widget f-widget-random">
<div class="col-sm-12">
        <div class="row">
<!--Partial: Categories-->
<h4 class="title"><?php echo html_escape($this->lang->line("title_categories")); ?></h4>
            <div class="title-line"></div>

       <ul class="widget-list w-tag-list">

            <!--List all categories-->
            <?php foreach($categories as $item):?>
			 <?php if( html_escape($item->id) != 10) {?>
                <li>
				<h5 class="title">
                    <a href="<?php echo base_url() . 'category/' . ($item->name) . '/' . $item->id; ?>"><?php echo html_escape($item->name); ?></a>
					</h5>
                </li>
				 <?php } ?>
            <?php endforeach; ?>

        </ul>
  
</div>
</div>
</div>
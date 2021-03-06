<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <?php if( html_escape($item->category_id) != 10) {?>
<!--post list item-->

    <div>
	<div class="col-sm-6 col-md-6 post-item">
        <div class="post-image">
            <a href="<?php echo base_url() . 'post/' . html_escape($item->title_slug) . '/' . $item->id; ?>">
                <?php if (!empty($item->image_mid)): ?>
                    <img src="<?php echo base_url() . html_escape($item->image_mid); ?>" class="img-responsive"
                         alt="<?php echo html_escape($item->title); ?>"/>
                <?php endif; ?>
            </a>
        </div>

        <div class="col-sm-12 col-md-12 post-footer">
            <div class="text-center">
                <!--if related category exists-->
                
                <h3 class="title">
                    <a href="<?php echo base_url() . 'post/' . html_escape($item->title_slug) . '/' . $item->id; ?>">
                        <?php echo html_escape($item->title); ?>
                    </a>
                </h3>
              
            </div>
            

            <div class="post-buttons">
                <!--Include social share links-->
                <?php $this->load->view('partials/_social_share', ['item' => $item]); ?>

                <a href="<?php echo base_url() . 'post/' . html_escape($item->title_slug) . '/' . $item->id; ?>"
                   class="pull-right read-more">
                    <?php echo html_escape($this->lang->line("btn_readmore")); ?>
                    <i class="fa fa-angle-right read-more-i" aria-hidden="true"></i>
                </a>
            </div>
</div>
        <!-- /.post footer -->
    </div> <!-- /.col-sm-4  -->
	
</div><!-- /.row -->
 <?php }?>
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--post list item-->
    <div>
	     <?php  $arr__category_posts = (helper_get_category_poems($page->category_id));    ?>
                            
                          <?php   foreach ($arr__category_posts as $category_posts){
									 
                                ?>
	<div class="col-sm-6 col-md-6 post-item">
        <div class="post-image">
            <a href="<?php echo base_url() . 'post/' . html_escape($category_posts->title_slug) . '/' . $category_posts->id; ?>">
                <?php if (!empty($category_posts->image_mid)): ?>
                    <img src="<?php echo base_url() . html_escape($category_posts->image_mid); ?>" class="img-responsive"
                         alt="<?php echo html_escape($category_posts->title); ?>"/>
                <?php endif; ?>
            </a>
        </div>

        <div class="col-sm-12 col-md-12 post-footer">
            <div class="text-center">
                <!--if related category exists-->
                
                <h3 class="title">
                    <a href="<?php echo base_url() . 'post/' . html_escape($category_posts->title_slug) . '/' . $category_posts->id; ?>">
                        <?php echo html_escape($category_posts->title); ?>
                    </a>
                </h3>
              
            </div>
            <p class="label-post-category text-center">
                    <a href="<?php echo base_url() . 'category/' . str_slug($category_posts->name) . '/' . $category_posts->category_id; ?>"
                       class="a-slider-category">
                        <label class="label label-danger cursor-pointer">
                            <?php echo html_escape($category_posts->name); ?>
                        </label>
                    </a>
                </p>

            <div class="post-buttons">
                <!--Include social share links-->
                <?php $this->load->view('partials/_social_share', ['item' => $category_posts]); ?>

                <a href="<?php echo base_url() . 'post/' . html_escape($category_posts->title_slug) . '/' . $category_posts->id; ?>"
                   class="pull-right read-more">
                    <?php echo html_escape($this->lang->line("btn_readmore")); ?>
                    <i class="fa fa-angle-right read-more-i" aria-hidden="true"></i>
                </a>
            </div>
</div>
        <!-- /.post footer -->
    </div> <!-- /.col-sm-6  -->
	  <?php }  ?>
</div><!-- /.row -->

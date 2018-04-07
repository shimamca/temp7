<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
            <?php foreach($categories as $item):?>
          <?php 	
		  $category_post_count = helper_get_category_post_count($item->id); // total posts 
		  if($item->id != 10 && !empty($category_post_count !=0 )){
					
			  ?>                  
                   <!--Partial: Categories --> 
				  				  
                    <div class="row">
					<div class="col-sm-12 col-md-12">
                     <h3 class="title"> 
					 <span><?php echo html_escape($item->name); ?></span>
					 </h3>
					 </div>
	  <!--List all categories post-->
	 
                    <?php 
					
					//echo $item->id;
					$arr__category_posts = (helper_get_category_posts($item->id));    ?>
                             <div class="border">
                          <?php   foreach ($arr__category_posts as $category_posts){
									 
                                ?>
                                 <div class="col-sm-6 col-md-3">	
									
									<a href="<?php echo base_url() . 'post/' . html_escape($category_posts->title_slug) . '/' . $category_posts->id; ?>">
                           
                            <?php if (!empty($category_posts->image_slider)): ?>
                                <img src="<?php echo base_url() . $category_posts->image_slider; ?>"
                                     alt="<?php echo html_escape($category_posts->title); ?>" class="img-responsive"/>
                            <?php endif; ?>

                    </a>
                    <h4 class="title">
                        <a href="<?php echo base_url() . 'post/' . html_escape($category_posts->title_slug) . '/' . $category_posts->id; ?>">
                            <?php echo html_escape(character_limiter($category_posts->title, 35, '...')); ?>
                        </a>
                    </h4>
					 									
							<p class="summary">  
							<?php echo html_escape(character_limiter($category_posts->summary, 75, '...')) ?>	
							<?php //echo html_escape($category_posts->summary) ?>	</p>
							  
							   <div class="post-buttons">
                <!--Include social share links-->
                <?php //$this->load->view('partials/_social_share', ['item' => $category_posts]); ?>

                <a href="<?php echo base_url() . 'post/' . html_escape($category_posts->title_slug) . '/' . $category_posts->id; ?>">
                    <?php echo html_escape($this->lang->line("btn_readmore")); ?>
                    <i class="fa fa-angle-right read-more-i" aria-hidden="true"></i>
                </a>
            </div>
							  
                                </div>   
								

                           <?php }  ?>
						  
							
       </div>  
		 	<div class="clearfix">&nbsp;</div>
		 </div>
		
                   
                 <?php }    ?>  
  
    <?php endforeach; ?>


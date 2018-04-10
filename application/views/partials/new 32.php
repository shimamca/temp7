<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
                      
                   <!--Partial: Categories --> 
				  				  
                    <div class="row">
					
	  <!--List all categories post-->
	 
                    <?php 
					
					//echo $item->id;
					$arr__category_posts = (helper_get_category_posts($page->category_id));    ?>
                             <div class="posts">
                          <?php   foreach ($arr__category_posts as $category_posts){
									 
                                ?>
                                 <div class="col-sm-6 col-md-6 post-item">	
									<div class="post-image">
									<a href="<?php echo base_url() . 'post/' . html_escape($category_posts->title_slug) . '/' . $category_posts->id; ?>">
                           
                            <?php if (!empty($category_posts->image_slider)): ?>
                                <img src="<?php echo base_url() . $category_posts->image_slider; ?>"
                                     alt="<?php echo html_escape($category_posts->title); ?>" class="img-responsive"/>
                            <?php endif; ?>
							 </div>

                    </a>
                      <h3 class="title">
                        <a href="<?php echo base_url() . 'post/' . html_escape($category_posts->title_slug) . '/' . $category_posts->id; ?>">
                            <?php echo html_escape(character_limiter($category_posts->title, 35, '...')); ?>
                        </a>
                    </h3>
					 									
							
							   <div class="col-sm-12 col-md-12 post-footer">
							   <div class="post-buttons">
                <!--Include social share links-->
                <?php $this->load->view('partials/_social_share', ['item' => $category_posts]); ?>

                <a href="<?php echo base_url() . 'post/' . html_escape($category_posts->title_slug) . '/' . $category_posts->id; ?>">
                    <?php echo html_escape($this->lang->line("btn_readmore")); ?>
                    <i class="fa fa-angle-right read-more-i" aria-hidden="true"></i>
                </a>
            </div>
				 </div>			  
                                </div>   
								
<div class="clearfix">&nbsp;</div>
                           <?php }  ?>
						  
							
       </div>  
		 	<div class="clearfix">&nbsp;</div>
		 </div>
		
                   
              


<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- owl-carousel -->
<div class="owl-carousel" id="home-slider">

    <?php foreach ($slider_posts as $item) : ?>
        <!-- slider item -->
        <div class="home-slider-item">
            <a href="#">
                <img src="<?php echo base_url() . $item->image_slider; ?>"
                     alt="<?php echo html_escape($item->title); ?>"/>
                <div class="item-overlay"></div>

                <div class="item-info">
                    
                    <h2 class="title">
                        <a href="#">
                            <?php echo html_escape(character_limiter($item->title, 70, '...')); ?>
                        </a>
                    </h2>
                  
                </div>
            </a>
        </div>
    <?php endforeach; ?>

</div><!-- /.owl-carousel -->
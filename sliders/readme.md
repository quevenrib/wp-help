# Boostrap Carousel with Advanced Custom Fields Plugin for WordPress

First of all, include in your code bootstrap files. You can find it in [Boostrap](http://getbootstrap.com/getting-started/) website. Don't forget the JS files. They are important here.

Whereas you have the [Advanced Custom Fields](https://www.advancedcustomfields.com) plugin, go to your administration and create the a repeater field for your slider. The below code supports **image**, **caption text**, **button** and **button link**. You can add new features as you need of remove if you want.

All you have to do now, is past the code below in your website and change the field names. Or download it [here](https://github.com/quevenrib/wp-help/blob/master/sliders/slider-carousel.php)

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    
      <!-- Indicators -->
      <ol class="carousel-indicators">
      <?php 
        $i = 0;
        if( have_rows('repeater_field_name') ):
            while ( have_rows('repeater_field_name') ) : the_row(); $i++; ?>
              <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i - 1; ?>" class="<?php if ($i==1) echo 'active'; ?>"></li>    
            <?php endwhile;
        endif;
      ?>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <?php
          $i = 0;
          if( have_rows('repeater_field_name') ):
            while ( have_rows('repeater_field_name') ) : the_row(); $i++; 
            $image_slider = get_sub_field( "sub_field_name" ); ?>
            
              <div class="item <?php if ($i==1) echo 'active'; ?>">
                <img src="<?php echo $image_slider['url']; ?>" alt="<?php echo $image_slider['alt']; ?>">
                <div class="carousel-caption">
                  <h3><?php the_sub_field('sub_field_name'); ?></h3>
                  <p><?php the_sub_field('sub_field_name'); ?></p>
                  <a href="<?php the_sub_field('sub_field_name'); ?>"><?php the_sub_field('sub_field_name'); ?></a>
                </div>
              </div>
              
            <?php endwhile;
          endif;
        ?>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

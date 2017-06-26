# Boostrap Tabs with Advanced Custom Fields Plugin for WordPress

First of all, include in your code bootstrap files. You can find it in [Boostrap](http://getbootstrap.com/getting-started/) website. Don't forget the JS files. They are important here.

Whereas you have the [Advanced Custom Fields](https://www.advancedcustomfields.com) plugin, go to your administration and create the a repeater field for your tab. The below code supports **image**, **caption text**, **button** and **button link**. You can add new features as you need of remove if you want.

All you have to do now, is past the code below in your website and change the field names. Or download it [here](https://github.com/quevenrib/wp-help/blob/master/sliders/slider-carousel.php)

  <div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
    <?php
    $i = 0;
    if( have_rows('repeater_field_name') ):
      while ( have_rows('repeater_field_name') ) : the_row(); $i++; ?>
          <li role="presentation" class="<?php if ($i==1) echo 'active'; ?>"><a href="#id-<?php echo $i; ?>" aria-controls="id-<?php echo $i; ?>" role="tab" data-toggle="tab" class="button"><?php the_sub_field('sub_field_name'); ?></a></li>
        <?php endwhile;
        endif;
      ?>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <?php
      $i = 0;
      if( have_rows('repeater_field_name') ):
        while ( have_rows('repeater_field_name') ) : the_row(); $i++; ?>
          <div role="tabpanel" class="tab-pane <?php if ($i==1) echo 'active'; ?>" id="id-<?php echo $i; ?>">
          <div class="tab-content">
            <!-- Tab Content -->
            <h2><?php the_sub_field('sub_field_name'); ?></h2>
            <p><?php the_sub_field('sub_field_name'); ?> - <a href="<?php the_sub_field('sub_field_name'); ?>"><?php the_sub_field('sub_field_name'); ?></a></p>
          </div>
          </div>
        <?php endwhile;
        endif;
      ?>
    </div>
  </div>
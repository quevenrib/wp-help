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

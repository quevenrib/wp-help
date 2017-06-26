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

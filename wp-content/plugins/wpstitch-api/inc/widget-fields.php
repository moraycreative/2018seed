<p>
  <label>Title</label> 
  <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>

<p>
	Total Badges
	<?php echo count($stitch_widget_data->{'badges'}); ?> 
</p>
<p>
  <label>How many of your most recent badges would you you like to display?</label> 
  <input size="4" name="<?php echo $this->get_field_name('num_badges'); ?>" type="text" value="<?php echo $num_badges; ?>" />
</p>
<p>
  <label>Display tooltips?</label> 
  <input type="checkbox" name="<?php echo $this->get_field_name('display_tooltips'); ?>" value="1" <?php checked( $display_tooltips, 1 ); ?> />
</p>
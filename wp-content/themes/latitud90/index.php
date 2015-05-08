<?php get_header()?>

<?php $areas = get_posts(array('post_parent' => 13 , 'numberposts' => -1 , 'post_type' => 'page' , 'orderby' => 'ID' , 'order' => 'ASC'))?>

<?php $bgd = wp_get_attachment_image_src( get_field('default_background' , 'options') , 'full')?>

<style>
body{ background-image: url(<?php echo $bgd[0]?>)}
</style>

<script>
jQuery(document).ready(function($) {
<?php foreach($areas as $area):?>

<?php $imgID = get_post_thumbnail_id($area->ID)?>
<?php $bg = wp_get_attachment_image_src( $imgID , 'full')?>
	
	jQuery('#area-<?php echo $area->ID?>').hover(function() {
		jQuery('body').delay(300).css('background-image', 'url(<?php echo $bg[0]?>)')
	}, function() {
		jQuery('body').delay(300).css('background-image' , 'url(<?php echo $bgd[0] ?>)')
	});

<?php endforeach;?>
});	
</script>

<div class="areas">
	<div class="title">
    	El sentido de <strong>descubrir</strong>
    </div>
    <div class="clear hidden-md hidden-lg"></div>
<?php foreach($areas as $area):?>
	<div class="rombo" id="area-<?php echo $area->ID?>">
		<a class="text" href="<?php echo get_permalink($area->ID)?>"><?php echo $area->post_title?></a>
	</div>
<?php endforeach;?>
</div>
<?php get_footer()?>
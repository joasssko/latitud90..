<?php get_header()?>

<div class="layer-1">
	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 col-esp boxed" >
    	<?php $bigimage = wp_get_attachment_image_src(get_field('background' , 'destino_5') , 'full')?>
    	<a href="<?php echo get_term_link('chile' , 'destino')?>" style="background-image:url(<?php echo $bigimage[0]?>)">Chile</a>
    </div>
	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 col-esp boxed der" >
    	<?php $bigimage = wp_get_attachment_image_src(get_field('background' , 'destino_6') , 'full')?>
    	<a href="<?php echo get_term_link('extranjero' , 'destino')?>" style="background-image:url(<?php echo $bigimage[0]?>)">Extranjero</a>
    </div>
    <div class="clear"></div>
</div>

<?php $bigimage = wp_get_attachment_image_src(get_field('background' , '86') , 'full')?>
<div class="layer-2" style="background-image:url(<?php echo $bigimage[0]?>)">
	<div class="inside">
		
		<a href="<?php echo get_page_link(86)?>">Arma tu viaje</a>
	</div>
</div>
<div class="layer-3">
	<div class="rombo" id="area-<?php echo $area->ID?>">
		<span class="text"><?php echo $post->post_title?></span>
	</div>
</div>

<div class="clear"></div>

<?php get_footer()?>
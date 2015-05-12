<?php get_header()?>

<div class="layer-1">

	<?php $bigimage = wp_get_attachment_image_src(get_field('background' , 'destino_5') , 'col-6')?>
	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 col-esp boxed" style="background-image:url(<?php echo $bigimage[0]?>)">
    	<a href="<?php echo get_term_link('chile' , 'destino')?>">Chile</a>
    </div>
	
	<?php $bigimage = wp_get_attachment_image_src(get_field('background' , 'destino_6') , 'col-6')?>
	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 col-esp boxed der" style="background-image:url(<?php echo $bigimage[0]?>)">
    	<a href="<?php echo get_term_link('extranjero' , 'destino')?>">Extranjero</a>
    </div>
    
    <div class="clear"></div>
</div>

<?php $bigimage = wp_get_attachment_image_src(get_field('background' , '86') , 'full')?>
<style>.layer-2{ background-image:url(<?php echo $bigimage[0]?>)}</style>
<div class="layer-2" id="triangle" style="">
	<div class="inside">
		
		<a href="<?php echo get_page_link(86)?>">Arma tu viaje</a>
	</div>
</div>
<div class="layer-3">
	<div class="areas">
        <div class="rombo" id="area-<?php echo $area->ID?>">
            <span class="text"><?php echo $post->post_title?></span>
        </div>
    </div>
	
</div>

<div class="clear"></div>

<?php get_footer()?>
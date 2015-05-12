<?php get_header()?>

<div class="layer-1">

	<?php $bigimage = wp_get_attachment_image_src(get_field('background' , '91') , 'col-6')?>
	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 col-esp boxed" style="background-image:url(<?php echo $bigimage[0]?>)">
    	<a href="<?php echo get_page_link(91)?>">Curso de Educación<br> al Aire Libre</a>
    </div>
	
	<?php $bigimage = wp_get_attachment_image_src(get_field('background' , '92') , 'col-6')?>
	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 col-esp boxed der" style="background-image:url(<?php echo $bigimage[0]?>)">
    	<a href="<?php echo get_page_link(92)?>">Centro<br>de Desafíos</a>
    </div>
    
    <div class="clear"></div>
</div>

<?php $bigimage = wp_get_attachment_image_src(get_field('background' , '93') , 'full')?>
<style>.layer-2{ background-image:url(<?php echo $bigimage[0]?>)}</style>
<div class="layer-2" id="triangle" style="">
	<div class="inside">
		
		<a href="<?php echo get_page_link(93)?>">Programa<br>Padre - Hijos</a>
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
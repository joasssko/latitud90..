<?php get_header()?>

<style>
	@media (max-width:767px){
		<?php $imgID = get_post_thumbnail_id($post->ID)?>
		<?php $bg = wp_get_attachment_image_src( $imgID , 'full')?> 
		body{ background-image:url(<?php echo $bg[0]?>)}
	}
</style>

<div class="layer-1 hidden-xs">


	<?php $bg = get_field('background' , 91)?>
	<?php $bigimage = wp_get_attachment_image_src( $bg, 'col-6')?>
    
    <?php var_dump($bg)?>
    
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
<div class="layer-2 hidden-xs" id="triangle" style="">
	<div class="inside">
		
		<a href="<?php echo get_page_link(93)?>">Programa<br>Padre - Hijos</a>
	</div>
</div>

<div class="modal modal-wide fade" id="conte" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body">
      	<h1><?php echo $post->post_title;?></h1>
        <div class="clear separator"></div>
        <?php echo apply_filters('the_content', $post->post_content)?>
      </div>
    </div>
  </div>
</div>

<div class="layer-4">
	<div class="areas">
        <div class="rombo" id="area-<?php echo $area->ID?>" data-toggle="modal" data-target="#conte">
            <span class="text"><?php echo $post->post_title?></span>
        </div>
    </div>
</div>

<div class="blocks hidden-sm hidden-md hidden-lg">
	<div class="container">
		<div class="row">
        	<div class="col-xs-12"><h1><a href="<?php echo get_page_link(91)?>" class="btn btn-block btn-primary btn-lg"><span>Educación al aire libre</span></a></h1></div>
        	<div class="col-xs-12"><h1><a href="<?php echo get_page_link(93)?>" class="btn btn-block btn-primary btn-lg"><span>Centro de desafíos</span></a></h1></div>
        	<div class="col-xs-12"><h1><a href="<?php echo get_page_link(93)?>" class="btn btn-block btn-primary btn-lg"><span>Programa Padre - hijos</span></a></h1></div>
        </div>
	</div>
</div>

<div class="clear"></div>

<?php get_footer()?>
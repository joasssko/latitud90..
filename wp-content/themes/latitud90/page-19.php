<?php get_header()?>

<style>
	@media (max-width:767px){
		<?php $imgID = get_post_thumbnail_id($post->ID)?>
		<?php $bg = wp_get_attachment_image_src( $imgID , 'full')?> 
		body{ background-image:url(<?php echo $bg[0]?>)}
	}
</style>

<div class="bgHome">
	<div class="bgPuntos"></div>
</div>

<div id="bigheader">
	<div class="jumbo">
    	<div class="container">
        	<div class="row">
                <div class="rombo hidden-xs"><span class="text"><?php echo $post->post_title?></span></div>
                <div class="clear"></div>
                <div class="clear separator"></div>
                <span class="fa fa-play fa-2x fa-fw playbutton" data-toggle="modal" data-target="#videoproducciones"></span>
                <span class="playbutton-sm" data-toggle="modal" data-target="#videoproducciones">Ver Reel</span>
            </div>
            
    	</div>
	</div>
</div>

<script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	var iframe = document.getElementById('videopre');
	$f == Froogaloop
	var player = $f(iframe);
	
	
	
	var pauseButton = document.getElementById("cerrar-vx-videopre");
	pauseButton.addEventListener("click", function() {
	  player.api("pause");
	});
	
	var pauseButton = document.getElementById("videoproducciones");
	pauseButton.addEventListener("click", function() {
	  player.api("pause");
	});
	
}); 
</script>


<div class="modal fade modal-wide" id="videoproducciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" id="cerrar-vx-videopre" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/115116490?color=e21717&title=0&byline=0&portrait=0&badge=0"  id="videopre" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>  
      </div>
    </div>
  </div>
</div>

<div class="clear separator"></div>

<div class="producciones navbar-fixed-bottom">
	<div class="row">
    	<?php $producciones = get_posts(array('post_parent' => 19 , 'numberposts' => -1 , 'post_type' => 'page' , 'orderby' => 'ID' , 'order' => 'ASC'))?>
        
        <?php foreach($producciones as $produccion):?>
        	<div class="col-md-2 col-sm-4 col-xs-6 col-lg-2 col-esp produccion" style=" background-color:<?php echo get_field('color' , $produccion->ID)?>">
            	<a href="<?php echo get_permalink($produccion->ID)?>"><?php echo $produccion->post_title;?></a>
            </div>	
        <?php endforeach?>
    </div>
</div>

<?php get_footer()?>
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
                
            
                
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <?php echo apply_filters('the_content',$post->post_content)?>
                </div>	
                
            </div>
            
    	</div>
	</div>
</div>

<script type="text/javascript">
jQuery(document).ready(function($) {
jQuery('.modal .close').on('click', function() {
    //$('#popup-youtube-player').stopVideo();
	jQuery('.modal .player')[0].contentWindow.postMessage('{"event":"command","func":"' +'stopVideo' + '","args":""}', '*');    
});
jQuery('.modal').on('click', function() {
    //$('#popup-youtube-player').stopVideo();
	jQuery('.modal .player')[0].contentWindow.postMessage('{"event":"command","func":"' +'stopVideo' + '","args":""}', '*');    
});
});

</script>


<div class="clear separator"></div>

<div class="producciones navbar-fixed-bottom">
	<div class="row">
    	<?php $conceptos = get_field('conceptos')?>
        
        <?php foreach($conceptos as $concepto):?>
        	<div class="col-md-2 col-sm-4 col-xs-6 col-lg-2 col-esp produccion" style="background-color:<?php echo $concepto['color']?>">
            	<?php echo $concepto['concepto'];?>
            </div>	
        <?php endforeach?>
    </div>
</div>

<?php get_footer()?>
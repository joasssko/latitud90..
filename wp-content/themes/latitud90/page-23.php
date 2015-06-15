<?php get_header()?>

<div class="bgHome">
	<div class="bgPuntos"></div>
</div>

<div id="bigheader">
	<div class="jumbo">
    	<div class="container">
        	<div class="row">
                <div class="rombo"><span class="text"><?php echo $post->post_title?></span></div>
                <div class="clear"></div>
                <p><?php echo $post->post_excerpt?></p>
                <div class="clear separator"></div>
            </div>
    	</div>
	</div>
</div>




<div class="clear separator"></div>

<div class="producciones navbar-fixed-bottom">
	<div class="row">
    	<?php $producciones = get_posts(array('post_parent' => 23 , 'numberposts' => -1 , 'post_type' => 'page' , 'orderby' => 'ID' , 'order' => 'ASC'))?>
        
        <?php foreach($producciones as $produccion):?>
        	<div class="col-md-3 col-sm-6 col-xs-6 col-lg-3 col-esp produccion" style=" background-color:<?php echo get_field('color' , $produccion->ID)?>">
            	<a href="<?php echo get_permalink($produccion->ID)?>"><?php echo $produccion->post_title;?></a>
            </div>	
        <?php endforeach?>
    </div>
</div>

<?php get_footer()?>
<?php get_header()?>

<div class="separator"></div>
<div class="separator"></div>
<div id="destinos" class="container-fluid">
	<div class="row">
    	
        
        
        	<?php $producciones = get_posts(array('post_parent' => 23 , 'numberposts' => -1 , 'post_type' => 'page' , 'orderby' => 'ID' , 'order' => 'ASC'))?>
        	<?php $pcount = 0?>
            <?php $class = ''?>
            <?php foreach($producciones as $post):?>
            <?php $pcount++?>
               
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-esp destinos">
                    <figure>
                        <?php echo get_the_post_thumbnail($post->ID , 'col-3-large' , array('class' => 'img-responsive'))?>
                        <figcaption><a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title?></a></figcaption>
                    </figure>
                </div>
            <?php endforeach;?>
        
    </div>

</div>


<?php get_footer()?>
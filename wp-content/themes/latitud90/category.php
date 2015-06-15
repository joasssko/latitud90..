<?php get_header()?>

<?php $bigimage = wp_get_attachment_image_src(get_field('background' , 'category_2') , 'col-6-third')?>
<div id="bigheader" style="background-image:url(<?php echo $bigimage[0]?>)">
	<div class="jumbo">
    	<div class="container">
        	<div class="row">
                <div class="rombo"><span class="text">Noticias</span></div>
            </div>
            
    	</div>
	</div>
</div>

<div class="premain"></div>
<main>
	<div class="container">
		<div class="row">
 
        	<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
            	
                <div class="clear separator border"></div>
                
            	<?php foreach($posts as $post):?>
                                
                	<div class="post">
                    	<div class="tags">
                        	<?php $tags = get_the_tags($post->ID)?>
                            <?php foreach($tags as $tag):?>
                        		<span class="label label-primary"><?php echo $tag->name?></span>
                            <?php endforeach?>
                        </div>
                    	<h2><?php echo $post->post_title?></h2>
                        <div class="data">
                        	<div class="date"><span class="fa fa-calendar"></span> <?php echo get_the_date( 'l, F j, Y' , $post->ID)?></div>
                        	<div class="author"><span class="fa fa-user"></span> <?php echo get_the_author_meta( 'display_name', $post->post_author );?></div>
                            
                            <?php $cc = get_comments_number($post->ID)?>
                            <?php if($cc == 0){?>
                            	<div class="comments-counter"><span class="fa fa-comments-o"></span> No hay comentarios</div>
                            <?php }elseif($cc == 1){?>
                            	<div class="comments-counter"><span class="fa fa-comments"></span> 1 Comentario</div>
                            <?php }else{?>
                            	<div class="comments-counter"><span class="fa fa-comments"></span> <?php echo $cc?> comentarios</div>
                            <?php }?>
                            
                        </div>
                        <a href="<?php echo get_the_permalink($post->ID)?>"><?php echo get_the_post_thumbnail($post->ID , 'col-6-half' , array('class' => 'img-responsive'))?></a>
                        <p><?php echo $post->post_excerpt?></p>
                        
                        <a href="<?php echo get_permalink($post->ID)?>" class="morelink">Leer Más</a>
                        <div class="clear separator"></div>
                        <div class="clear separator border"></div>
                    </div>
                <?php endforeach;?>
            </div>
            
            <div class="col-md-4 col-lg-4 col sm-12 col-xs-12">
            	
                <div class="clear separator border"></div>
                <h3>Somos</h3>
                <?php echo get_the_post_thumbnail(9 , 'col-6-third' , array('class' => 'img-responsive' ))?>
                <p><?php $ss = get_post(9); echo $ss->post_excerpt?></p>
                <div class="clear separator border"></div>
                <h3>Síguenos</h3>
                
                <div class="sociales fl">
                    <ul>
                        <li><a href="<?php echo get_field('instagram','options')?>"><span class="fa fa-fw fa-instagram"></span></a></li>
                        <li><a href="<?php echo get_field('twitter','options')?>"><span class="fa fa-fw fa-twitter"></span></a></li>
                        <li><a href="<?php echo get_field('facebook','options')?>"><span class="fa fa-fw fa-facebook"></span></a></li>
                        <li><a href="<?php echo get_field('youtube','options')?>"><span class="fa fa-fw fa-youtube"></span></a></li>
                        <li><a href="<?php echo get_field('flickr','options')?>"><span class="fa fa-fw fa-flickr"></span></a></li>
                    </ul>
                </div>
                <div class="clear separator border"></div>
                <h3>Síguenos en Facebook</h3>
                
                <div class="fb-page" data-href="https://www.facebook.com/latitud90" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/latitud90"><a href="https://www.facebook.com/latitud90">Latitud Noventa</a></blockquote></div></div>
                <div class="clear separator border"></div>
                
            </div>
        
        </div>        
	</div>
</main>



<div class="clear separator"></div>

<?php get_footer()?>
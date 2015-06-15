<?php get_header()?>
<div class="separator"></div>
<div class="separator"></div>
<div id="destinos" class="container-fluid">
	<div class="row">
    	
        <?php $t = count($posts);?>
        <?php if($t == 3){?>
        
        	<?php $pcount = 0?>
            <?php $class = ''?>
            <?php foreach($posts as $post):?>
            <?php $pcount++?>
               
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 col-esp destinos">
                    <figure>
                        <?php echo get_the_post_thumbnail($post->ID , 'col-4-large' , array('class' => 'img-responsive'))?>
                        <figcaption><a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title?></a></figcaption>
                    </figure>
                </div>
            <?php endforeach;?>
        
        <?php }elseif($t == 4){?>
        
        	<?php $pcount = 0?>
            <?php $class = ''?>
            <?php foreach($posts as $post):?>
            <?php $pcount++?>
               
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-esp destinos">
                    <figure>
                        <?php echo get_the_post_thumbnail($post->ID , 'col-3-large' , array('class' => 'img-responsive'))?>
                        <figcaption><a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title?></a></figcaption>
                    </figure>
                </div>
            <?php endforeach;?>
        
        <?php }elseif($t == 5 ){?>
        
			<?php $pcount = 0?>
            <?php $class = ''?>
            <?php foreach($posts as $post):?>
            <?php $pcount++?>
                <?php if($pcount < 3){$class = 'col-md-6 col-lg-6 col-sm-12 col-xs-12 col-esp destinos-b'; $cimg = 'col-6-half'; }else{ $class = 'col-md-4 col-lg-4 col-sm-12 col-xs-12 col-esp'; $cimg = 'col-4';}?>
                <div class="<?php echo $class?> destinos">
                    <figure>
                        <?php echo get_the_post_thumbnail($post->ID , $cimg , array('class' => 'img-responsive'))?>
                        <figcaption><a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title?></a></figcaption>
                    </figure>
                </div>
            <?php endforeach;?>
        
        <?php } elseif($t == 6){?>
        
			<?php $pcount = 0?>
            <?php $class = ''?>
            <?php foreach($posts as $post):?>
            <?php $pcount++?>
                <?php  $class = 'col-md-4 col-lg-4 col-sm-12 col-xs-12 col-esp'; $cimg = 'col-4';?>
                <div class="<?php echo $class?> destinos">
                    <figure>
                        <?php echo get_the_post_thumbnail($post->ID , $cimg , array('class' => 'img-responsive'))?>
                        <figcaption><a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title?></a></figcaption>
                    </figure>
                </div>
            <?php endforeach;?>
        
        <?php }elseif($t == 7 ){?>
        
			<?php $pcount = 0?>
            <?php $class = ''?>
            <?php foreach($posts as $post):?>
            <?php $pcount++?>
                <?php if($pcount < 3 || $pcount > 5){$class = 'col-md-6 col-lg-6 col-sm-12 col-xs-12 col-esp destinos-b'; $cimg = 'col-6-half'; }elseif($pcount >= 3 || $pcount <= 6){ $class = 'col-md-4 col-lg-4 col-sm-12 col-xs-12 col-esp'; $cimg = 'col-4';}?>
                <div class="<?php echo $class?> destinos">
                    <figure>
                        <?php echo get_the_post_thumbnail($post->ID , $cimg , array('class' => 'img-responsive'))?>
                        <figcaption><a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title?></a></figcaption>
                    </figure>
                </div>
            <?php endforeach;?>
        
        <?php }?>
        
    </div>

</div>

<?php get_footer()?>
<?php 
/* 
	Template Name: Incoming
 */
?>
<?php get_header()?>

<div id="underhead">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-12 col-sm-4 col lg-3"><h2>Turismo</h2></div>
			<div class="col-md-9 col-xs-12 col-sm-8 col lg-9"><?php echo $post->post_excerpt?></div>
		</div>
	</div>
</div>

<main>
	<div class="container">
    	<div class="row">
        	<?php $bigimage = wp_get_attachment_image_src(get_field('top_imagen') , 'col-6-third')?>
            <img src="<?php echo $bigimage[0]?>" class="img-responsive" alt="" width="100%">
        </div>
        
        <div class="row incomings">
        	<div class="row">
				<?php $producciones = get_posts(array('post_parent' => 23 , 'numberposts' => -1 , 'post_type' => 'page' , 'orderby' => 'ID' , 'order' => 'ASC'))?>
            
            <?php foreach($producciones as $produccion):?>
                <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3" style="text-align:center">
                    <a href="<?php echo get_permalink($produccion->ID)?>" class="btn btn-default btn-lg btn-block"><?php echo $produccion->post_title;?></a>
                </div>	
            <?php endforeach?>
            </div>
	    </div>
        
        <div class="row">
        	<div class="col-md-4 col-lg-4 col-sm-10 col-xs-12">
            	<h1><?php echo $post->post_title?></h1>
            </div>
            <div class="col-md-8 col-lg-8 col-sm-10 col-xs-12"><?php echo apply_filters('the_content' , $post->post_content)?></div>
        </div>
        
    </div>
</main>

<?php if(get_field('galeria')){?>
<div class="separator"></div>
<section id="galeria">
	<div class="slide">
    	
        	<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 col-esp">
                <?php $galeria = get_field('galeria')?>
                <?php $tg = count($galeria)?>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                  	
                    <?php $imc = 0?>
                  	<?php foreach($galeria as $imagen):?>
                    <?php $imc++?>
                    <div class="item <?php if($imc == 1){echo 'active';}?>">
                      <img src="<?php echo $imagen['sizes']['col-7']?>" class="img-responsive">
                    </div>
                    <?php endforeach?>
                    
                  </div>
                
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        	<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 col-esp">
            	<div class="in">
                	<h2>Galería de fotos</h2>
                    <h4>Lorem Ipsum Dolor</h4>
                    <p><?php echo get_field('descripcion_galeria')?></p>
                </div>
            </div>
            <div class="clear"></div>
        
        
        <div class="carrusel responsive">
            <ul class="carro">
            <?php $mgc = -1?>
            	<?php foreach($galeria as $imagen):?>
                <?php $mgc++?>
                <li style="width:<?php echo $imagen['sizes']["medium-width"]?>px"><img src="<?php echo $imagen['sizes']['mini-b']?>" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="<?php echo $mgc?>" alt=""></li>
                <?php endforeach?>
            </ul>
        	<div class="clear"></div>
           	<div class="controls">
            	<div id="ante" class="control"><span class="fa fa-chevron-circle-left fa-2x"></span></div>
                <div id="sgte" class="control"><span class="fa fa-chevron-circle-right fa-2x"></span></div>
            </div>
        </div>
        
        <script>
        //  Responsive layout, resizing the items
		jQuery('.carro').carouFredSel({
			responsive: true,
			width: '100%',
			scroll: 1,
			prev: '#ante',
			next: '#sgte',
			pagination: "#pager",
			 items: {
				//width: 200,
				//height: '50%',  //  optionally resize item-height
				visible: {
					min: 2,
					max: <?php echo $tg?>
				}
			} 
		});
				
        </script>
        
    </div>
</section>

<div class="clear separator"></div>
<?php }?>

<section class="personas">
	<div class="container">
		<div class="row">
        
        	<h3>Somos</h3>
        	
            <?php $personas = get_posts(array('post_type' => 'personas' , 'numberposts' => 12 , 'area' => 'producciones'))?>
            <?php $pc = 0?>
            <?php foreach($personas as $persona):?>
            	<?php $pc++?>
            	<div class="col-md-2 col-lg-2 col-sm-3 col-xs-6">
                	<figure class="persona">
                    	<?php echo get_the_post_thumbnail($persona->ID , 'persona', array('class' => 'img-responsive'))?>
                        <figcaption>
                        	<h4><?php echo $persona->post_title?></h4>
                            <h5><?php echo get_field('cargo', $persona->ID)?></h5>
                        </figcaption>
                    </figure>
                </div>
                <?php if($pc % 6 == 0){echo '<div class="clear separator hidden-sm hidden-xs"></div>';}?>
                <?php if($pc % 4 == 0){echo '<div class="clear separator hidden-lg hidden-md hidden-xs"></div>';}?>
                <?php if($pc % 2 == 0){echo '<div class="clear separator hidden-lg hidden-md hidden-sm"></div>';}?>
            <?php endforeach;?>
                        
        </div>
	</div>
</section>

<?php get_footer()?>
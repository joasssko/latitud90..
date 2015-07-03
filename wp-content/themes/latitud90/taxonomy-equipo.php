<?php get_header()?>

<?php $var = get_queried_object()?>

<?php $bigimage = wp_get_attachment_image_src(get_field('top_imagen' , 'equipo_'.$var->term_id) , 'full')?>
<div id="bigheader" style="background-image:url(<?php echo $bigimage[0]?>)">
	<div class="jumbo">
    	<div class="container">
        	<div class="row">
                <div class="rombo"><span class="text"><?php echo $var->name?></span></div>
                <div class="clear"></div>
                <p><?php //echo $post->post_excerpt?></p>
                <div class="clear separator"></div>
                <span class="galbt"><span class="fa fa-image fa-fw down"></span> ver galería</span>
                <div class="clear separator"></div>
                <span class="fa fa-chevron-down fa-2x fa-fw down"></span>
            </div>
            
    	</div>
        
	</div>
</div>
<div class="premain"></div>


<main>
	<div class="container">
		<div class="row">
        
        	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <h1><?php echo $var->name?></h1>
                <h3 class="mini">El equipo</h3>
            </div>
        
        	<article class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
            	<?php echo $var->description?>
            </article>
        </div>        
	</div>
</main>


<?php /*
<main class="hidden-xs">
	<div class="container">
    	
            <?php $pc = 0?>
            <?php foreach($posts as $persona):?>
            	<?php $cl = 'cl-der';?>
                <?php if($pc % 2 == 0){$cl = 'cl-izq';}?>
            	<?php $pc++?>
            	<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 col-esp <?php echo $cl?>">
                	<div class="persona">
                    	<div class="arrow"></div>
                    	<?php echo get_the_post_thumbnail($persona->ID , 'persona', array('class' => 'img-responsive'))?>
                    </div>
                    <div class="pdata">
                    	<div class="inside">
                            <h4><?php echo $persona->post_title?></h4>
                            <h5><?php echo get_field('cargo', $persona->ID)?></h5>
                        </div>
                    </div>
                </div>
                <?php //if($pc % 4 == 0){echo '<div class="clear separator hidden-sm hidden-xs"></div>';}?>
                <?php //if($pc % 4 == 0){echo '<div class="clear separator hidden-lg hidden-md hidden-xs"></div>';}?>
                <?php //if($pc % 2 == 0){echo '<div class="clear separator hidden-lg hidden-md hidden-sm"></div>';}?>
            <?php endforeach;?>
        
    </div>
</main>

 
<section class="personas hidden-lg hidden-md hidden-sm">
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
<div class="clear separator"></div>

 */?>
<div class="separator"></div>
<section id="galeria">
	<div class="slide">
    	
        	<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 col-esp">
                <?php $galeria = get_field('galeria' , 'equipo_'.$var->term_id)?>
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
                    <h4><?php echo get_field('bajada_galeria', 'equipo_'.$var->term_id)?></h4>
                    <p><?php echo get_field('descripcion_galeria', 'equipo_'.$var->term_id)?></p>
                </div>
            </div>
            <div class="clear"></div>
        
        
        <div class="carrusel responsive hidden-xs">
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

<?php get_footer()?>
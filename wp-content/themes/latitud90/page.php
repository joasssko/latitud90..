<?php get_header()?>


<?php $bigimage = wp_get_attachment_image_src(get_field('top_imagen') , 'full')?>
<div id="bigheader" style="background-image:url(<?php echo $bigimage[0]?>)">
	<div class="jumbo">
    	<div class="container">
        	<div class="row">
                <div class="rombo"><span class="text"><?php echo $post->post_title?></span></div>
                <div class="clear"></div>
                <p><?php echo $post->post_excerpt?></p>
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
        	<article class="col-md-8 col-md-offset-4 col-lg-8 col-lg-offset-4 col-sm-12 col-xs-12">
            	<?php echo apply_filters('the_content',$post->post_content)?>
            </article>
        </div>        
	</div>
</main>

<section class="recorrido">
	<div class="container">
		<div class="row">
        	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <h1><?php echo $post->post_title?></h1>
                <h3><?php echo get_field('secondary_name')?></h3>
            </div>
        </div>
        <div class="row ruta">
        	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
            	<h2>Ruta</h2>
                <h4>Expedición</h4>
                <?php $minimap = wp_get_attachment_image_src(get_field('minimap') , 'full')?>
                <img src="<?php echo $minimap[0]?>" class="minimap" alt="">
            </div>
        	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
            	<h2>Destinos</h2>
                <h4>Expedición</h4>
                <?php echo apply_filters('the_content' , get_field('destinos'))?>
            </div>
        </div>
        <div class="row actividades">
        	<div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
            	<h2>Actividades</h2>
                <h4>Expedición</h4>
                <?php echo apply_filters('the_content' , get_field('actividades'))?>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 guias">
            	<div class="in">
                    <h2>Guías</h2>
                    <h4>Expedición</h4>
                    <a href="">Ver más</a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 contacto">
                <div class="in">
                    <div class="fa fa-envelope-o"></div>
                    <a data-target="#modal-contacto" data-toggle="modal">Contacto</a>
                    
                    <div class="modal fade" id="modal-contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="modal-content">
                            
                          
                          <div class="modal-body">
                            <?php echo do_shortcode('[contact-form-7 id="64" title="Contacto Viajes de estudio"]')?>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            
            
        </div>
	</div>
</section>
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
                <li style="width:<?php echo $imagen['sizes']["medium-width"]?>px"><img src="<?php echo $imagen['sizes']['medium']?>" class="img-responsive" data-target="#carousel-example-generic" data-slide-to="<?php echo $mgc?>" alt=""></li>
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

<section class="testimonios">
	<div class="container">
		<div class="row">
        	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 testimonios">
            	<h2>Testimonios</h2>
                <div class="clear separator"></div>
                <?php $testimonios = get_posts(array('post_type' => 'testimonios' , 'numberposts' => 1 , 'order' => 'RAND'))?>
                <div class="in"><?php echo $testimonios[0]->post_content?></div>
            </div>
        	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 clientes">
            	<h2>Nuestros clientes</h2>
                <div class="clear separator"></div>
                <?php $clientes = get_field('clientes');?>
                <?php //var_dump($clientes)?>
                <?php foreach($clientes as $cliente):?>
                	<div class="col-md-3 col-lg-3 col-sm-3 col-xs-4">
						<?php echo get_the_post_thumbnail($cliente , 'mini' , array('class' => 'img-responsive'))?>
                        <?php echo get_the_title($cliente)?>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
	</div>
</section>

<div class="clear separator"></div>

<?php get_footer()?>
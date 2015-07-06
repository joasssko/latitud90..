<?php 
/* 
	Template Name: Travel by interest
 */
?>

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
                <span class="galbt"><span class="fa fa-image fa-fw down"></span> photo gallery</span>
                <div class="clear separator"></div>
                <span class="fa fa-chevron-down fa-2x fa-fw down"></span>
            </div>
            
    	</div>
        
        <div class="masdestinos">
			<?php $destinos = get_posts(array('post_type' => 'page', 'post_parent' => 504 , 'order' => 'ASC' /* , 'post__not_in' => array($post->ID) */))?>
            <?php /* <span>Otros Programas</span> */?>
            <ul>
                <?php foreach($destinos as $destino):?>
                <li><a href="<?php echo get_permalink($destino->ID)?>"><?php echo $destino->post_title?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        
	</div>
</div>
<div class="premain"></div>
<main>
	<div class="container">
		<div class="row">
        
        	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <h1><?php echo $post->post_title?></h1>
                <h3 class="mini"><?php echo get_field('secondary_name')?></h3>
            </div>
        
        	<article class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
            	<?php echo apply_filters('the_content',$post->post_content)?>
                
                
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              
              <?php $aas = get_field('itinerario')?>
              <?php $aac = 0?>
              <?php foreach($aas as $aa):?>
              <?php $aac++?>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading-<?php echo $aac?>">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $aac?>" aria-expanded="<?php if($aac == 1){?>true<?php }else{?>false<?php }?>" aria-controls="collapse-<?php echo $aac?>">
                      <?php echo $aa['days']?>
                    </a>
                  </h4>
                </div>
                <div id="collapse-<?php echo $aac?>" class="panel-collapse collapse <?php if($aac == 1){?>in<?php }?>" role="tabpanel" aria-labelledby="heading-<?php echo $aac?>">
                  <div class="panel-body">
                    <?php echo $aa['activities']?>
                  </div>
                </div>
              </div>
              <?php endforeach?>
              
            </div>
                
                
            </article>
        </div>        
	</div>
</main>

<section class="recorrido recorrido-b">
	<div class="container">
		
        <div class="row ruta">
        	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
            	<h2>&nbsp;</h2>
            </div>
        	
        </div>
        <div class="row actividades">
        	
            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 col-md-offset-10 col-lg-offset-10 contacto">
                <div class="in">
                    <div class="fa fa-envelope-o"></div>
                    <a data-target="#modal-contacto" data-toggle="modal">Contacto</a>
                    
                    
                </div>
            </div>
            
            
        </div>
	</div>
</section>

<div class="modal fade" id="modal-contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-content">
            <div class="modal-body">
              <?php echo do_shortcode('[contact-form-7 id="1408" title="Contacto Incoming"]')?>
            </div>
        </div>
	</div>
</div>

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
                	<h2>Photo Gallery</h2>
                    <h4><?php echo get_field('bajada_galeria')?></h4>
                    <p><?php echo get_field('descripcion_galeria')?></p>
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
        
        
        
    </div>
</section>


<?php get_footer()?>
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
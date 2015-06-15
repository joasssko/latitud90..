<?php get_header()?>

<?php $bigimage = wp_get_attachment_image_src(get_field('top_imagen') , 'full')?>
<div id="bigheader" style="background-image:url(<?php echo $bigimage[0]?>)">
	<div class="jumbo">
    	<div class="container">
        	<div class="row">
                <h1><?php echo $post->post_title?></h1>
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
        
        	<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <h1><?php echo $post->post_title?></h1>
                <h3><?php echo get_field('secondary_name')?></h3>
            </div>
        
        	<article class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
            	<?php echo apply_filters('the_content',$post->post_content)?>
            </article>
        </div>        
	</div>
</main>

<section class="recorrido recorrido-b">
	<div class="container">
		<div class="row">
        	
        </div>
        <div class="row ruta">
        	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
            	<h2>&nbsp;</h2>
            </div>
        	<div class="col-md-6 col-lg-6 col-sm-4 col-xs-12">
            	<h2>Filosofía</h2>
                <h4>Empresa B</h4>
                <?php echo apply_filters('the_content' , get_field('filosofia'))?>
            </div>
        </div>
        <div class="row actividades">
        	<div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
            	<h2>Historia</h2>
                <h4>Latitud90</h4>
                <?php echo apply_filters('the_content' , get_field('historia'))?>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 guias">
            	<div class="in">
                    <h2>Equipo</h2>
                    <h4>Personas</h4>
                    <a href="<?php echo get_post_type_archive_link('personas');?>">Ver más</a>
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

<div class="clear separator"></div>

<?php get_footer()?>
<?php get_header()?>

<div id="underhead">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-12 col-sm-4 col lg-3"><h2>Personas</h2><small>El equipo</small></div>
			<div class="col-md-9 col-xs-12 col-sm-8 col lg-9"><?php echo get_field('equipo' , 9)?></div>
		</div>
	</div>
</div>

<main class="hidden-xs">
	<div class="container">
    	
            <?php $pc = 0?>
            <?php foreach($posts as $persona):?>
            	<?php $cl = 'cl-der';?>
                <?php if($pc % 2 == 0){$cl = 'cl-izq';}?>
            	<?php $pc++?>
            	<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 col-esp <?php echo $cl?>">
                	<div class="persona">
                    	<?php /* <div class="arrow"></div> */?>
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
        	
            <?php //$personas = get_posts(array('post_type' => 'personas' , 'numberposts' => 12 , 'area' => 'producciones'))?>
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
<?php get_footer()?>
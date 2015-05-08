<footer <?php if(is_home() || is_page(15)){?>class="navbar-fixed-bottom"<?php }?>>
	<div class="container">
    	<div class="row">
        	<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'footer-nav fl' , 'theme_location' => 'secondary' ) ); ?>
            <div class="sociales fl">
            	<ul>
            		<li><a href="<?php echo get_field('instagram','options')?>"><span class="fa fa-fw fa-instagram"></span></a></li>
                    <li><a href="<?php echo get_field('twitter','options')?>"><span class="fa fa-fw fa-twitter"></span></a></li>
                    <li><a href="<?php echo get_field('facebook','options')?>"><span class="fa fa-fw fa-facebook"></span></a></li>
                    <li><a href="<?php echo get_field('youtube','options')?>"><span class="fa fa-fw fa-youtube"></span></a></li>
                    <li><a href="<?php echo get_field('flickr','options')?>"><span class="fa fa-fw fa-flickr"></span></a></li>
            	</ul>
            </div>
            <div class="otras-empresas fl">
                <ul>
                	<?php $esas = get_field('otras_empresas' , 'options');?>
                    <?php foreach($esas as $esa):?>
                	<li><a href="<?php echo $esa['link']?>" alt="<?php echo $esa['empresa']?>"><img src="<?php echo $esa['logo']?>" alt=""></a></li>
                    <?php endforeach?>
                </ul>
            </div>
            
        </div>
    </div>
</footer>

</body>
<?php wp_footer()?>
</html>
<?php get_header()?>

<?php $direccion = get_field('direccion' , 'options')?>
<script type="text/javascript">
var pins = [
	['<?php echo $direccion['address']; ?>', <?php echo $direccion['lat']; ?>, <?php echo $direccion['lng']; ?> ,4 , '<?php echo $post->post_title?>'],
];
function setMarkers(map, locations) {
  map.setCenter(new google.maps.LatLng(<?php echo $direccion['lat']; ?>, <?php echo $direccion['lng']; ?>));
	
  for (var i = 0; i < locations.length; i++) {
	var pin = locations[i];
	var myLatLng = new google.maps.LatLng(pin[1], pin[2]);
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		icon: '<?php echo get_bloginfo('template_directory')?>/images/pin.png',
		//shape: shape,
		title: pin[0],
		zIndex: pin[3]
	});
	
	var content = '<img src="<?php bloginfo('template_directory')?>/images/logo.png" height="50" alt="" /><div class="clear miniseparator"></div><h5>'+pin[0]+'</h5>';
	var infowindow = new google.maps.InfoWindow( {maxWidth: 320} )
	
	google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
		return function() {
		   infowindow.setContent(content);
		   infowindow.open(map,marker);
		};
	})(marker,content,infowindow));
	
  }
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="bigheader">
	
    <div id="map_canvas" style="height:400px"></div>
    
</div>
<div class="premain"></div>
<main>
	<div class="container">
		<div class="row">
 
            <div class="col-md-4 col-lg-4 col sm-12 col-xs-12">
            	<h1><?php echo get_bloginfo('name')?></h1>
                <p><?php echo $direccion['address']?></p>
                <div class="sociales fl">
                    <ul>
                        <li><a href="<?php echo get_field('instagram','options')?>"><span class="fa fa-fw fa-instagram"></span></a></li>
                        <li><a href="<?php echo get_field('twitter','options')?>"><span class="fa fa-fw fa-twitter"></span></a></li>
                        <li><a href="<?php echo get_field('facebook','options')?>"><span class="fa fa-fw fa-facebook"></span></a></li>
                        <li><a href="<?php echo get_field('youtube','options')?>"><span class="fa fa-fw fa-youtube"></span></a></li>
                        <li><a href="<?php echo get_field('flickr','options')?>"><span class="fa fa-fw fa-flickr"></span></a></li>
                    </ul>
                </div>
            </div>
        
        	<article class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
            	<?php echo apply_filters('the_content',$post->post_content)?>
            </article>
        </div>        
	</div>
</main>



<div class="clear separator"></div>

<div class="bfooter">
	<div class="container">
		<div class="row">
        	<div>
            	Teléfono : <a href="callto:<?php echo get_field('fono' , 'options')?>"><?php echo get_field('fono' , 'options')?></a> | Fax : <?php echo get_field('fax' , 'options')?> | Dirección : <?php echo $direccion['address']; ?>
            </div>
        	
        </div>
	</div>
</div>

<?php get_footer()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(is_home()){?>
	<title><?php wp_title();?></title>
<?php }else{?>
	<title><?php wp_title();?></title>
<?php }?>

<meta name="viewport" content="width=device-width, initial-scale=0.75 , minimum-scale=1.0 ,  maximum-scale=1.0">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Fonts -->

<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<?php if(is_page(7) || is_page(1428)){?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
  function initialize() {
	var styles = [
			{
				featureType: 'all',
          		elementType: 'all',
				
			  stylers: [
				/* { hue: "#525252" }, */
				{lightness: '0'},
				{gamma: 1}
		 			   ]
			},{
				
			  featureType: "road.highway",
			  elementType: "geometry",
			  stylers: [
				{ lightness: 100 },
				{ visibility: "simplified" }
			  ]
			},{
			  featureType: "road",
			  elementType: "labels",
			  stylers: [
				{ visibility: "ff" }
			  ]
			},
			
			{
          	featureType: 'poi',
          	elementType: 'all',
          	stylers: [
            { visibility: 'off' }
          ]
        }
		  ];
	
    var mapOptions = {
      center: new google.maps.LatLng(-33.634987, -71.630344),
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
	  streetViewControl: false,
	  mapTypeControl: false,
	  styles: styles,
	  scrollwheel: false,
	  draggable:false,
	  
    };

    var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	
	google.maps.event.addListener(map, 'click', function(event){
		map.setOptions({draggable: true});
	});
	//var p = data.results[0].geometry.location
	
	google.maps.event.addDomListener(window, "resize", function() {
 		var center = map.getCenter();
 		google.maps.event.trigger(map, "resize");
	map.setCenter(center); 
	});	
	
	setMarkers(map, pins);
  }
  
</script>
<?php }?>

<?php if(is_single()){?>
<!-- RRSS Shares -->
<script>
    window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3&appId=1624076727836319";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php }?>

</head>

<body <?php body_class()?>>


<div id="loader-wrapper">
    <div id="loader"></div>
</div>


<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
      	<div class="row">
      	
            <div class="navbar-header">
            	<a class="navbar-brand logo" href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="" width="150" /></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
              
              <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav navbar-nav navbar-right' , 'theme_location' => 'primary' ) ); ?>
              
            </div><!--/.nav-collapse -->
                        
      	</div>
      </div>
</div>
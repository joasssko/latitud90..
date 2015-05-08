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
<link href='http://fonts.googleapis.com/css?family=Raleway:700,900,400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Fonts -->

<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<!-- scripts -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<?php /*?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
  function initialize() {
	var styles = [
	  {
		featureType: "all",
		stylers: [
		  { saturation: -10 }
		]
	  }
	];
	
    var mapOptions = {
      center: new google.maps.LatLng(-33.634987, -71.630344),
      zoom: 15,
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
<?php */?>

<!-- RRSS Shares -->
<script>
    window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script>
</head>

<body <?php body_class()?>>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
      	<div class="row">
      	
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="" width="150" /></a>
            </div>
            <div class="navbar-collapse collapse">
              
              <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav navbar-nav navbar-right' , 'theme_location' => 'primary' ) ); ?>
              
            </div><!--/.nav-collapse -->
                        
      	</div>
      </div>
</div>
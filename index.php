<html>
	
 <meta charset="utf-8">
 <meta name="Description" CONTENT="'Here' is a website that shows the exact location (and direction) of Dries Depoorter through the eyes of Google Streetview. The location is transmitted real-time by his iPhone. This for 1 month.">
 <meta name="keywords" content="Dries Depoorter,Google streetview,google,perormance,live">
<meta name="author" content="Dries Depoorter">
<!Facebook meta data>
<meta property="og:title" content="Here by Dries Depoorter"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.driesdepoorter.be/here"/>
    <meta property="og:image" content="http://www.driesdepoorter.be/here/img/here_driesdepoorter01.png"/>
    <meta property="og:site_name" content="Here"/>
    <meta property="og:email" content="mail@driesdepoorter.be"/>
    <meta property="fb:admins" content="1276697518"/>
    <meta property="og:description" content="call showing where the police from seattle is working for the moment. "/>



<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@driesdepoorter">
<meta name="twitter:creator" content="@driesdepoorter">
<meta name="twitter:title" content="Here by Dries Depoorter">
<meta name="twitter:description" content="'Here' is a website that shows the exact location (and direction) of Dries Depoorter through the eyes of Google Streetview. The location is transmitted real-time by his iPhone. This for 1 month.">
<meta name="twitter:image:src" content="http://www.driesdepoorter.be/here/img/here_driesdepoorter.png">

<link rel="shortcut icon" href="favicon.ico">
</html>


 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48511325-1', 'driesdepoorter.be');
  ga('send', 'pageview');

</script>



<?PHP
//////////// FIRECALLS /////////////

//$url = 'https://data.seattle.gov/resource/kzjm-xkqj.json';
//$content = file_get_contents($url);
//$json = json_decode($content, true);
//$lat = $json[1]["latitude"]; 
//$lon = $json[1]["longitude"]; 
//$type = $json[1]["type"];
//$pointcourse  = 5; 

///////////  POLICE SEATLE /////////
$url = 'https://data.seattle.gov/resource/7ais-f98f.json'; 
//https://data.seattle.gov/resource/3k2p-39jp.json
$content = file_get_contents($url);
$json = json_decode($content, true);

///////// WEBCAMS SEATLE ////////// 
$urlwebcams = 'https://data.seattle.gov/resource/65fc-btcc.json';
$contenturlwebcams = file_get_contents($urlwebcams);
$jsonWebcams = json_decode($contenturlwebcams, true);

//print_r();
$lat = $json[0]["latitude"];
$lon = $json[0]["longitude"];
$type = $json[0]["offense_type"];
$pointcourse  = 5; 
//print_r($type);

//print_r($lat);
//print_r($lon);
//print_r($type);



?>



<!DOCTYPE html>
<html>
 <meta http-equiv="refresh" content="500" />
 <link rel="shortcut icon" href="favicon.ico">





  <head>

   <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>

 <style type="text/css">
 html { height: 100% }
body { height: 100%; margin: 0px; padding: 0px }
#map-canvas { height: 100%; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 0;}      
#wrapper { height:120px; width: 300px; background-color: #FFF; position:absolute; right: 10px; margin-left: -150px; top: 10px; z-index:1; opacity:0.8; }




infoText
{
margin-left: 10px;
font-family: 'Oxygen', sans-serif;



}




</style>

	
	




    
    <title>Call by Dries Depoorter</title>
   

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
function initialize() {
  var currentLocation = new google.maps.LatLng('<?php echo $lat; ?>', '<?php echo $lon; ?>');
  var panoramaOptions = {
    position: currentLocation,
    pov: {
      heading:<?php echo $pointcourse; ?> ,
      pitch: 1
    },
    zoom: 0,
     zoomControlOptions: {
    style: google.maps.ZoomControlStyle.SMALL
  },
  linksControl: false,
  panControl: false,
  addressControlOptions: {
    position: google.maps.ControlPosition.BOTTOM
  },
  enableCloseButton: false
  
  
  
  };
  var myPano = new google.maps.StreetViewPanorama(
      document.getElementById('map-canvas'),
      panoramaOptions);
  myPano.setVisible(true);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    
   
   
  
	
	


  </head>
  <body>
  



 
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=128970017184532";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



   <div id="wrapper">
<infoText>

<p style="margin-left:10px; margin-top:10px; margin-right:3px;">

'<?php echo $type; ?>'
</p>

</infoText>

<br>

	
<div class="fb-like" data-href="https://driesdepoorter.be/here" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>


<a href="https://twitter.com/share" class="twitter-share-button" data-text="blaba" data-via="driesdepoorter">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


  </div>
  
  




  
  <div id="map-canvas"> </div>
    



  </body>
</html>
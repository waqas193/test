<?php

	include 'config.php';
	include 'system.php';

	$YouTubeVideoId = (ip_info($_SERVER['REMOTE_ADDR'], "Country Code") == AllowedCountry ) ? YouTubeVideId : 've7p-qref-vhu8-bacz' ;
	
	if($YouTubeVideoId == '') { header('Location: error.html'); die(); }
	// ($YouTubeVideoId == '') ? '<div id="error">This Video is Not Available in Your Country</div>' : '' 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>v3</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
    <script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
    <script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/assets/apikey.js"></script>
    <style>
		* { padding:0;margin:0 }
		.wrapper {
		  width: 100%;
		  /* whatever width you want */
		  display: inline-block;
		  position: relative;
		}
		.wrapper:after {
		  padding-top: 56.25%;
		  /* 16:9 ratio */
		  display: block;
		  content: '';
		}
		.main {
			
		  position: absolute;
		  top: 0;
		  bottom: 0;
		  right: 0;
		  left: 0;
		  /* fill parent */
		  background-color: black;
		  /* let's see it! */
		  color: white;
		}

    </style>

    <script>
		fullscreen = function(){
			jQuery(".player").YTPFullscreen()
		}
		var myPlayer;
        jQuery(function () {
            var isIframe=function(){var a=!1;try{self.location.href!=top.location.href&&(a=!0)}catch(b){a=!0}return a};if(!isIframe()){var logo=$("<a href='http://pupunzi.com/#mb.components/components.html' style='position:absolute;top:0;z-index:1000'><img id='logo' border='0' src='http://pupunzi.com/images/logo.png' alt='mb.ideas.repository'></a>");/*$("#wrapper").prepend(logo),$("#logo").fadeIn()*/}
            myPlayer = jQuery(".player").YTPlayer();
        });
    </script>
</head>
<body>

	<button onclick="fullscreen()">Fullscreen</button>

	<div class="wrapper">
		<div class="main" id="main">
		<div id="video" class="player" data-property="{videoURL:'<?= $YouTubeVideoId ?>',containment:'#main', showControls:false, autoPlay:true, loop:true, mute:true, startAt:10, opacity:1, addRaster:true, quality:'default'}"></div> 
		</div>
	</div>

</body>
</html>

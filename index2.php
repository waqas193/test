<?php

	include 'config.php';
	include 'system.php';

	$YouTubeVideoId = (ip_info($_SERVER['REMOTE_ADDR'], "Country Code") == AllowedCountry ) ? YouTubeVideId : 'QouNYPE5jt0' ;
	
	if($YouTubeVideoId == '') { header('Location: error.html'); die(); }
	// ($YouTubeVideoId == '') ? '<div id="error">This Video is Not Available in Your Country</div>' : '' 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ONIP.TV</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
    <script src="https://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
    <script src="https://pupunzi.com/mb.components/mb.YTPlayer/demo/assets/apikey.js"></script>
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
			
background-color: black;
bottom: 0;
color: white;
height: 600px ;

position: relative;
right: 0;

width: 84%;
margin: 0 auto;
}

.main   iframe{
    width: 100% !important;
    border: 1px solid #000;
}
.videobtmcont{

margin: 0 auto;
width: 84%;
    
}               
                
    </style>

    <script>
        
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('ytplayer', {
                height:'390',
                width:'640',
                videoId:'QouNYPE5jt0',
                playerVars :{
                     'containment':'#main',
                    'showinfo':0,
                    'autoPlay':true,
                    'controls':0,
                    'iv_load_policy':3,
                            'rel':0
                },
                events:{
                    'onReady':onPlayerReady,
                  //  'onStateChange':onPlayerStateChange
                }
            });
        }
         function fullscreen(){
			player.YTPFullscreen();
		}
        function onPlayerReady(event) {
            event.target.playVideo();

            _isPlayerReady = true;
        }
//        function onPlayerStateChange(event) {
//            switch (event.data) {
//                case YT.PlayerState.ENDED:
//                $j  = jQuery.noConflict();
//                $j(".vid-flow").hide();
//                ShowCustomDialog();
//                    break;
//                case YT.PlayerState.PLAYING:
//                    break;
//                case YT.PlayerState.PAUSED:
//                    break;
//                case YT.PlayerState.BUFFERING:
//                    break;
//                case YT.PlayerState.CUED:
//                    break;
//                default:
//                    break;
//            }
//        }

        
        
        
        
        
        
        
//		fullscreen = function(){
//			jQuery(".player").YTPFullscreen()
//		}
//		var myPlayer;
//                 function onPlayerReady() {
//                    alert();
//            myPlayer.playVideo();
//            myPlayer.mute();
//            myPlayer.setVolume(0);
//        }
//        jQuery(function () {
//            var isIframe=function(){var a=!1;try{self.location.href!=top.location.href&&(a=!0)}catch(b){a=!0}return a};if(!isIframe()){var logo=$("<a href='https://pupunzi.com/#mb.components/components.html' style='position:absolute;top:0;z-index:1000'><img id='logo' border='0' src='https://pupunzi.com/images/logo.png' alt='mb.ideas.repository'></a>");/*$("#wrapper").prepend(logo),$("#logo").fadeIn()*/}
//            myPlayer = jQuery(".player").YTPlayer('player',{
//                events: {
//                    'onReady': onPlayerReady,
//                        //'onStateChange': onPlayerStateChange
//                }
//            });
//			//myPlayer.setVolume(0);

       // });
    </script>
</head>
<body>



    <div class="wrapper" style="margin:0 auto;">
		<div class="main" id="main">
		<div id="ytplayer" class="player"></div> 
		</div>
            <div class="videobtmcont">
                <div style="width: 50%; float: left;">
                    	<button onclick="fullscreen()">Fullscreen</button>
                    
                </div> 
                <div style="width: 50%; float: right;">
                    
                    <a href="#">   <img src="img/onip_logo.png" style=" float: right;" alt="logo"/></a>
                    
                </div>
          
            </div>
            
	</div>

</body>
</html>

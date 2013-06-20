    <body>
        
        <script>
	function checkMyCookies() {

	    var cookieLeMess = 'Please activate cookies for your browser.';

		var cookieEnabled=(navigator.cookieEnabled)? '' : cookieLeMess

		//if not IE4+ nor NS6+
		if (typeof navigator.cookieEnabled =="undefined" && !cookieEnabled){

			cookieEnabled=(document.cookie.indexOf("testcookie")!=-1)? '' : cookieLeMess
		}

		return cookieEnabled;
	}
</script>
        <noscript><div id="noScript">Please activate Java Script for your browser.</div></noscript>
        
        <script type="text/javascript">
            
            var cookieMessage = checkMyCookies()
            if("" != cookieMessage) {
                document.write('<div id="noCookie">' + cookieMessage + '</div>');
            }
            
        </script>
        <div id="busy_layer"></div>

        <!-- affiliateStartTag -->

<noscript>

    <style>
        #do_flash_cta {     display:none !important;}
        .do_story #do_story_content{
            overflow-y: scroll;
        }
    </style>

</noscript>

<style>
     /* smarty fix for lang placeholder */
    
    .signup_submit {
    background: url("http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/cta.png?__cv=41d63a0a6383a5f50503fca873b15f00") center center no-repeat;
    }
    #loginForm_default_loginButton{
    background: url("http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/button_login.png?__cv=cd725a3216183f70732bdf116cf41100") center center no-repeat;
    }
    #loginForm_openId_container #loginForm_openId_loginButton{
        background: url("http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/button_login.png?__cv=cd725a3216183f70732bdf116cf41100") no-repeat scroll center center transparent;
    }
    
</style>

<!--[if IE 8]>
      <style type="text/css">

          #loginForm_default_input_username,
          #loginForm_default_input_password{
              padding-top: 3px !important;
              height: 15px!important;
          }
          .input_text, .input_textLong {
              padding-top: 7px !important;
              height: 18px!important;
          }
    </style>
<![endif]-->

<!-- Script For centering bookmark and start page buttons in IE browser

        IE allows having a bookmark page button and DO as start page setup button
        FF Allows only having the bookmark page button.
        IE needs a different CSS set up. FF implementation in externalDefault.css

     -->

<!--[if IE]>

     <style type="text/css">
        .do_login_container #bookmark_feature_bookmark_text {
            left: -32px !important;
        }
     </style>
<![endif]-->


<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/externalDefault.css?__cv=f7081342657ac621e9ec93c804882100" />
<link type="text/css" href="http://landingpages.a.bpcdn.net/new/LIVE/general/3/1514.css" rel="stylesheet" /> <!-- scrollPane CSS -->

<script type="text/javascript" src="http://assets.bigpoint.net/landingpages/lptool/lp-resources/js/jquery/colorbox.js"></script>

<script type="text/javascript" src="sharedpages/static/plugin/social/slayer/js/v1/slayer-min.js"></script>
<script type="text/javascript" src="http://landingpages.a.bpcdn.net/new/LIVE/general/3/1512.js?TS=1336139155"></script> <!-- scrollPane JS -->
<script type="text/javascript" src="http://landingpages.a.bpcdn.net/new/LIVE/general/3/1513.js?TS=1336139155"></script> <!-- mouse scroll JS -->
<script type="text/javascript" src="http://landingpages.bpcdn.net/lp-resources/js/clearfield.js"></script> <!-- input field placeholder -->
<script src="http://darkorbit-22.ah.bpcdn.net/js/externalDefault/jquery.tools.min.js?__cv=b62f4ab157c9bccded97891a0475a900"></script>
<script src="http://darkorbit-22.ah.bpcdn.net/js/externalDefault/generalHandler.js?__cv=b88917df452085b45b5926808118a800"></script>

<script type="text/javascript">
    
    $_jq(document).ready(function(){
        /* slayer   */
        var initParameter = {
            jQueryLibrary : jQuery, // Pass the jQuery object, the way you named it
            google          : { language : 'en-US'},
            facebook        : { language : 'en_US'},
            gameId        	: 22,
            gameTitle     	: 'Darkorbit'
        }

        // Initialize SLAYER
        SLAYER.init(initParameter);

        var plusoneParameter = {
            renderPlaceholder  : false,                     // Render placeholder according to german law. Default 'false'
            container          : 'DOGooglePlus',                // Div tag where the button should be rendered
            annotation         : 'bubble',                     // Rendering of the count. Options: none, bubble, inline
            href               : 'http://darkorbit.bigpoint.com',  // The link you want to plus one
            size               : 'medium',                 // Size of the button. Can be: small, medium, standard, tall
            onstartinteraction : function(json) {},          // This function gets called if the user hovers the +1 button
            onendinteraction   : function(json) {},          // This function gets called if the user unhovers the +1 button
            expandto           : 'top, right, bottom, left' // The preferred positions in which to display hover and confirmation bubbles, relative to the button.
        }
        SLAYER.renderPlusOne(plusoneParameter);

        var facebooklikeParameter = {
            container   : 'DOFacebookLike',            			// Div container where the button will be rendered
            href        : 'http://darkorbit.bigpoint.com',    	// Default is current URL
            send        : false,                     			// Show the send button. Default false
            layout      : 'button_count',                		// You can use 'standard', 'button_count' or 'box_count'
            show_faces  : false,                      			// Show profile pictures of people who liked. Only works with standard layout.
            width       : 100,                     				// Width of the button.
            action      : 'like',                   			// What to display on the button. Default 'like'. Options: 'like', 'recommend'
            font        : 'arial',                   			// The font on the button. Available fonts: 'arial', 'lucida grande', 'segoe ui', 'tahoma', 'trebuchet ms', 'verdana'
            colorscheme : 'light'                  				// Colors for the button. Default 'like'. Options: 'light', 'dark'
        }
        SLAYER.renderLike(facebooklikeParameter);
    });

    /* open ID */

        function showOpenId(){
        $_jq('#loginForm_openId_container').show();
        }
        function hideOpenId(){
            $_jq('#loginForm_openId_container').hide();
        }
    
</script>
<script>
	
	$_jq(window).load(function () {
	/* load flash files */
//	flashembed("do_flash_heat", {"src": "http://darkorbit-22.ah.bpcdn.net/do_img/global/externalDefault/flash_files/heat_2.swf?__cv=692a37cf2a07f74a48a60f26dcbace00","version": [10,0],"width": 178,"height": 166,"wmode": "transparent"});
//	flashembed("do_flash_logo", {"src": "http://darkorbit-22.ah.bpcdn.net/do_img/global/externalDefault/flash_files/logo.swf?__cv=b3b15dc8ee43e67069a17f12f18aac00","version": [10,0],"width": 450,"height": 200,"wmode": "transparent"});
//	flashembed("do_flash_nyx", {"src": "http://darkorbit-22.ah.bpcdn.net/do_img/global/externalDefault/flash_files/nyx.swf?__cv=0655290be5cb8923e63e9e4a83fa2b00","version": [10,0],"width": 450,"height": 500,"wmode": "transparent"});
	flashembed("do_flash_trailer", {"src": "http://darkorbit-22.ah.bpcdn.net/do_img/global/externalDefault/flash_files/trailer.swf?__cv=18aec7877a6ab59eb3508def69e67e00","version": [10,0],"width": 424,"height": 235,"wmode": "transparent", "flashvars": "&ordner=trailer_do.f4v" });
	flashembed("do_flash_cta", {"src": "http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/flash_files/cta.swf?__cv=9892ed4a6d2968754a4843acb22f3400","version": [10,0],"width": 310,"height": 140,"wmode": "transparent"});    });
	
</script>
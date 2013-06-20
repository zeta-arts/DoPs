</head>
<body onLoad="" >
<!-- affiliateStartTag -->



<!.. user context info layer -->
<div id="userInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- hangar context info layer -->
<div id="hangarInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- clan info layer -->
<div id="clanInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- seitenabdecker -->



<div id="generalInfoPopup" class="fliess13px-grey">
    <div class="popup_headcontainer">
        <a id="general_popup_close" class="popup_close" href="#" ></a>
    </div>
    <div id="general_popup_question" class="question">
        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/general/success_icon.png?__cv=7ea7548d2cb4149555faab27c783e500" id="general_popup_success" class="success" />
        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/general/error_icon.png?__cv=abbabc79fb0ffe608c13a681aa9db900" id="general_popup_error" class="error" />
        <p id="general_popup_question_text">this text will be replace on xajax call</p>
    </div>
    <div class="popup_contentcontainer">
        <div class="popup_footcontainer">
            <div id="general_popup_close_button" class="popup_close_button">
                    <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=en&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey" />
            </div>
        </div>
    </div>
</div>


<div id="busy_layer"></div>


<!-- seitenabdecker -->

<style type="text/css" media="screen">    @import "http://darkorbit-22.ah.bpcdn.net/css/cdn/includeInfoLayer.css?__cv=6f32d2604f47c348e721414f1418ee00";</style>
<script type="text/javascript">
infoText = '';
icon = '';
</script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/js/infoLayer.js?__cv=f873586616939bcb06c5d95a7ef73200"></script>

<div id="infoLayer" class="confirmInfoLayer fliess13px-grey">
    <div class="popup_shop_headcontainer">
        <a class="popup_shop_close" href="javascript: void(0);" onclick="closeInfoLayer()"></a>
    </div>
    <div class="popup_shop_contentcontainer">
        <br>
        <div class="question"></div>
        <div class="popup_shop_footcontainer">
            <div id="infoLayerConfirm">
                <div class="popup_shop_confirm_button">
                    <div id="infoLayer_link_confirm"
                         class="popup_shop_confirm_text"
                         style="background-image: url(
                            'http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey'
                         );">
                    </div>
                </div>
                <div class="popup_shop_abort_button">
                    <div class="popup_shop_abort_text"
                         style="background-image: url(
                            'http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=12&t=confirmBox_cancel&f=eurostyle_thea&color=white&bgcolor=grey'
                         );"
                         onclick="closeInfoLayer();">
                    </div>
                </div>
            </div>

            <div id="infoLayerInfo">
                <div class="popup_shop_close_button">
                    <div class="popup_shop_close_text"
                         style='background-image: url("http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey");'
                         onclick="closeInfoLayer();"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
</script>



<script type="text/javascript">

function showHelp() {
    showBusyLayer();
    width_x = document.body.offsetWidth;
    container_x = jQuery("#helpLayer").width();
    jQuery("#helpLayer").css('left', ((width_x/2) - (container_x/2)) + 'px');
    jQuery("#helpLayer").css('top', '150px');
    jQuery("#helpLayer").css('display', 'block');
}

</script>

<div id="helpLayer" style="position:absolute;width:480px;display:none;z-index:10;" class="fliess11px-grey">
    <div id="popup_standard_headcontainer">
        <div id="popup_standard_headline"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=Help&f=eurostyle_clan"></div>
        <div id="popup_standard_close"><a href="javascript:void(0);" onclick="closeLayer('helpLayer');" onfocus="this.blur();"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup_middle_close.jpg?__cv=450b0ca7303746b8cfcba9bef857e600"></a></div>
    </div>
    <div id="popup_standard_content">
        <div id="popup_info_sign_bg" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/infopopup_bg_help.png?__cv=eeb69ad925a2326a7c399261bf1e6d00);">
            <p>
                <strong>Greetings Space Pilot,</strong><br />
                <br />
                Your DarkOrbit journey will lead you to far-off galaxies fraught with danger and mystery. Your first rule of thumb is not to panic!<br />
                <br />
                You can always get help here:
                <ul style="margin:20px 0px;">
                    <li style="margin-left:20px;list-style-type:disc;">Visit our <a href="/GameAPI.php?action=portal.redirectToBoard" target="_blank" onfocus="this.blur()" style="text-decoration:underline">Forum</a>.</li>
                    <li style="margin-left:20px;list-style-type:disc;">Read the <a href=" http://help.bigpoint.com/?project=darkorbit&lang=us_IT&aid=332&aip= " target="_blank" onfocus="this.blur()" style="text-decoration:underline">Help</a>.</li>
                    <li style="margin-left:20px;list-style-type:disc;">Get tips for the new client in the <a href="http://help.bigpoint.com/?project=darkorbit&site=space_map_new&lang=us" target="_blank" style="text-decoration:underline">Guide to the New Client</a>.</li>
                </ul>
                If you can't find any answers to your questions contact <a href="indexInternal.es?action=support&back=internalStart" target="_blank" onfocus="this.blur()" style="text-decoration:underline">Support</a>.<br />
                <br />
                Godspeed, captain!
                <br style="margin-bottom: 30px;" />
                
            </p>
        </div>
    </div>
    <div id="popup_standard_content_additionalInfo">

    </div>
    <div id="popup_standard_footercontainer">
        <div id="popup_standard_singleButton">
            <table border="0" cellpadding="0" cellspacing="0" align="center" onclick="closeLayer('helpLayer');">
            <tr>
                <td class="button_resizable_1"></td>
                <td class="button_resizable_2"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=ok&f=eurostyle_clan"></td>
                <td class="button_resizable_3"></td>
            </tr>
            </table>
        </div>
    </div>
    <br class="clearMe" />
</div>
    <style>

#news {
    position:absolute;
    left:50%;
    top:85px;
	margin-left:-400px;
    background-position:0 0px;
    text-align:left;
    z-index:10000;
    border:2px solid white;}
#news_head {
    width:680px;height:40px;
    background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_top_bg.jpg?__cv=5bf95d660dae98dbb4f07d401eac4700);
    text-align:right;
}
#news_head_date {
    float: left;
    margin: 6px 0 0 10px;
}
#news_content {
    background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_mid_bg.jpg?__cv=cd2b78a4e250a83db34571d91f9db000);
    padding: 20px 35px;
    width: 610px;
    background-repeat: repeat-y;
    height:460px;
    overflow: auto;
}
#news_content li {
    list-style-type: disc;
    margin-left: 15px;
}
* html #news_content {
    width:610px;
}
#news_bottom {
    width:680px;height:49px;
    background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_bottom_bg.jpg?__cv=05ef0c3a74c444e24045d5d1c67a0d00);
    padding-top:15px;
    vertical-align:top;
}
#news_but_close {
    width:160px;height:19px;
    margin:auto;
    text-align:center;
    line-height:19px;
    background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_button_bg.png?__cv=9b58cb835063817adb8d35c164505800);
}


</style>

<div id="news" style="width:680px;display:none;">

    <div id="news_benefitPremium" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 15.04.2011</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('benefitPremium');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3>Premium fun with Premium advantages</h3>
            <br />
            <p>Are you a Premium player already? If not, consider it your ace up your sleeve: The Premium Pack puts you one step ahead of your adversaries.
<br><br>
Put all the <span class="breakingNewsHighlightBlue"><b>Premium advantages</b></span> to use:
<br><br>
<p></p><ul>
<li><span class="breakingNewsHighlightBlue"><b>Log out from the star chart in just five seconds</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Enjoy more cargo room with 500 extra units of space</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Get 5% off all Uridium items</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Have your spaceship repaired for free</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Save 50% on drone repairs</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Have your resources automatically refined</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Make your repair bots twice as effective</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Unlock all Radar CPU advantages</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Cut the time it takes to load rockets in half</b></span></li>
</ul>
<br>
Become a Premium player now: With the <span class="breakingNewsHighlightBlue"><b>Six-Month Silver Pack</b></span> or the <span class="breakingNewsHighlightBlue"><b>One-Year Gold Pack</b></span>!
<br><br>
Click on "Uridium" in the menu and then on "Banking" to get your pack today!
<br><br></p>
            <br />
            <b><a href="indexInternal.es?action=internalPayment">>> Continue</a></b>        </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('messageSystemLaunch');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>                        <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('benefitPremium');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>
    <div id="news_messageSystemLaunch" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 13.01.2012</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('messageSystemLaunch');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3><span class="bn_headline">New messaging system!</span></h3>
            <br />
            <p><div class="bn_teaser"><b>The brand new messaging system is now available for all pilots and includes new features and a new design.</b></div><br />
        <div class="bn_content">Hello Space Pilot,<br /><br />In the past only clan members had access to a internal clan messaging system, while all the other space pilots had to resort to external measures or go without chatting altogether. 
 Well, all those headaches are a thing of the past. Our technicians have completely revamped the messaging system and made it accessible for all pilots!  Introducing <br /><br />
            <span class="bn_highlight"><b>the brand new messaging system I.N.E.S. - Interstellar
            Networking E-Mail-System!</b></span><br /><br />
            In the navigation above, you will see the Mail menu item and a display for new messages.<br /><br />Even if you do not belong to a clan, you can write other pilots, manage a personal contact list and save important messages.  Clan members may also send messages to clan members individually or as a group.  You may save up to 10 messages. Premium users may save up to 50.
            <br /><br />
            <span class="bn_highlight"><b>The new pilot menu is also a hit!</b></span>
            <br /><br />
            A window opens by clicking the nickname of another player. You can use this window to send friend requests or messages.  You may also see a pilot's profile simply by clicking.  Easy, right?
            <br /><br />
        </div>
        <div class="bn_footer">We hope you enjoy the new messaging system <br />
        Your DarkOrbit Team</div></p>
            <br />
                    </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('achievementSystemMS2');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>            <div style="float:right;margin-right:16px;"><a href="javascript: showNews('benefitPremium');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('messageSystemLaunch');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>
    <div id="news_achievementSystemMS2" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 23.02.2012</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('achievementSystemMS2');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3 class="bn_headline">New title system - many new achievements</h3>
            <br />
            	<div class="bn_teaser"><b>Show off your title ... with the new title system!</b></div>
            	<br/>
            	<div class="bn_content">What would a pilot be without awards and titles? From this point on, you can show other space pilots what you've got - all thanks to our <span class="bn_highlight"><b>new title system!</b></span> Are you especially good at killing aliens? Let it be known with the new title system. You don't have to be humble about your capabilites any more - now you have a cool, new title to show everyone just how talented you are! 
<br /><br />
Our achievements have also been revamped and improved so that you have more to choose from. There are a total of <span class="bn_highlight"><b>over 20 new achievements</b></span> waiting to be unlocked.  So jump in the cockpit, Space Pilot. Fame and glory await!
 <br /><br />
Here's to successful missions!</div>
            	<br/>
            	<br/>
            	<div class="bn_footer">Your DarkOrbit Team</div>
            <br />
                    </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('killscreen2');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>            <div style="float:right;margin-right:16px;"><a href="javascript: showNews('messageSystemLaunch');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('achievementSystemMS2');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>
    <div id="news_killscreen2" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 01.03.2012</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('killscreen2');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3 class="bn_headline">Repair your ship on the spot right now.</h3>
            <br />
            	<div class="bn_teaser"><b>New options for repairing ships</b></div>
            	<br/>
            	<div class="bn_content">Shot down and ticked off that you can't make your enemies pay immediately? Ha! Have we got some good news for you - great advancements have been made in ship repair technology! Now when you are shot down, you can repair your ship immediately without having to leave the space map.
    <br /><br />
    Our engineers have developed <span class="breakingNewsHighlightBlue"><b>2 new repair options</b></span> for repair after being shot down. They have also improved the new repair processes:<br /><br />
    1. Reappear in the game exactly where you were shot down.<br />
    2. Reappear at the next jumpgate on the map on which you were destroyed.
    <br /><br />
    Warning: If you choose one of these options, you will reappear with only <span class="breakingNewsHighlightBlue"><b>10% of your hitpoints</b></span>. However, you will receive <span class="breakingNewsHighlightBlue"><b>10 seconds of attack protection</b></span>, which expires once you begin attacking opponents.<br /><br />
    Use these cushy repair methods strategically so that you can exact your sweet revenge!</div>
            	<br/>
            	<br/>
            	<div class="bn_footer">Your DarkOrbit Team</div>
            <br />
                    </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('hangarRenamingPremium');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>            <div style="float:right;margin-right:16px;"><a href="javascript: showNews('achievementSystemMS2');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('killscreen2');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>
    <div id="news_hangarRenamingPremium" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 23.07.2012</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('hangarRenamingPremium');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3 class="bn_headline">New Premium Plus! Name Your Hangars</h3>
            <br />
            	<div class="bn_teaser"><b>Attention Premium Pilots! Keep your fleet in order for quick-strike mayhem with customized names for your hangars.</b></div>
            	<br/>
            	<div class="bn_content">Hello Space Pilots,
<br><br>
Are you having difficulties remembering which ship you put in which hangar?
<br><br>
There is an extra special bonus for premium pilots to help them keep a step ahead of the enemy in the heat of battle: <span class="breakingNewsHighlightBlue"><b>customized names for hangars.</b></span>
<br><br>
Use personalized hangar names to aid you in stressful situations. If one of your hangars contains a Goliath, then give it a similar sounding name! Make the hangar and ship names memorable for the intense heat of battle.
<br><br>
Your new names will appear on the space map in the tool section and you'll be able to quickly select the right battle cruiser for the right battle in the warp section.
<br><br>
<span class="breakingNewsHighlightBlue"><b>Just click the hangar name to the upper right of the hangar</b></span> and rename your hangars!
<br><br></div>
            	<br/>
            	<br/>
            	<div class="bn_footer">Your DarkOrbit Team</div>
            <br />
                    </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('hadesGate');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>            <div style="float:right;margin-right:16px;"><a href="javascript: showNews('killscreen2');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('hangarRenamingPremium');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>
    <div id="news_hadesGate" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 25.04.2013</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('hadesGate');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3 class="bn_headline">Hades Gate - a Galaxy Gate for groups!</h3>
            <br />
            	<div class="bn_teaser"><b>Aliens are plotting against humanity! Build the Hades Gate and jump with your buddies to disrupt their evil plans!</b></div>
            	<br/>
            	<div class="bn_content">Hello Space Pilots,
<br><br>
are you strong, brave, and decisive? Excellent!
<br><br>
We're in need of fighters of precisely your caliber to save us from the impending threat in the Hades Sector. We've received intel reports of three alien species amassing in the long-deserted seat of the Aloisi Empire. We must prevent them from destroying our civilization. They want to take our rights, rob us of our freedom, and destroy everything we've worked so hard to achieve.
<br><br>
Construct the new Hades Gate and organize a group of at least 4 of your most trusted pilots. Show these scum the meaning of power and integrity! Suit up and let's go!
<br><br>
One last thing. Company intel has picked up the jump signatures of three particularly powerful alien ships. Be careful out there and good luck!
<br><br></div>
            	<br/>
            	<br/>
            	<div class="bn_footer">Your DarkOrbit Team</div>
            <br />
                    </div>
        
        <div id="news_bottom" class="fliess11px">

                        <div style="float:right;margin-right:16px;"><a href="javascript: showNews('hangarRenamingPremium');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('hadesGate');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>

</div>

<script>
var SID='dosid=57b0a58605563954f4e38ee808d1671b';



//var win = window;
//width_x = win.innerWidth ? win.innerWidth : win.document.body.clientWidth;
//container_x = jQuery("#news").width();
//jQuery("#news").css('left', ((width_x/2) - (container_x/2)) - 100 +'px');
//jQuery("#news").css('top', '50px');

function showNews(newsID) {
    jQuery('.news_container').hide();
    jQuery('#news').show();
    jQuery("#news_" + newsID).show();
    showBusyLayer();
}
function closeNews(newsID) {
    jQuery("#news").hide();
    hideBusyLayer();
}


</script>
                  

<div class="backgroundImageContainer">
    <div class="overallContainer">
        <div class="rightBannerContainer">
                    <!-- notrans -->
            <div id="banner-right">
                                                    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=6&source=country%3DIT%26areaID%3Dinternal.trade%26aid%3D332%26acm%3D%26acr%3D579%26aip%3D%26gameID%3D579%26uid%3D98026209%26locale%3Dus&sign=VjHQPZZR8zAdijHHAZfup31bdjKWFZpmvt0%2B7bt2"></script>
                                            </div>
            <!-- end notrans -->
                </div>
        <div class="outerContainer fliess11px-gelb">
            
                                    <div id="header_intern">
                
                <div id="header_branding">
                    <img id="PartnerCobrandLogo" src="http://pit-835.a.bpcdn.net/published/cobrands/0_22_3.png" />
                </div>

                                    <div id="header_ship" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/header/ships/model<?php echo $Users->DataRow['shipId']; ?>.png?__cv=785a4e646637f4307c1d3873ceffec00)"></div>
                                                <a id="header_logo" href="/indexInternal.es?action=internalStart"></a>
                                <div id="header_top_bar">
                    <div id="header_top_id" class="header_top_item">
                        <div class="header_item_wrapper">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/icon_stats_ID.png?__cv=a4bc90727a951c42f0901a307858ca00" width="16" height="13" alt="" />
                            <span><?php echo $Users->DataRow['playerID']; ?></span>
                        </div>
                    </div>
                    <div id="header_top_level" class="header_top_item">
                        <div class="header_item_wrapper">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/icon_stats_lvl.png?__cv=b84d7d86e451fdfbaa2115080867b100" width="16" height="13" alt="" />
                            <?php echo $Users->DataRow['level'];  ?>
                        </div>
                    </div>
                    <div id="header_top_hnr" class="header_top_item">
                        <div class="header_item_wrapper">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/icon_stats_hon.png?__cv=7fdab834dd65f0860a51a616caa05800" width="16" height="13" alt="" />
                            <span><?php echo $Users->DataRow['honor']; ?></span>
                        </div>
                    </div>
                    <div id="header_top_exp" class="header_top_item">
                        <div class="header_item_wrapper">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/icon_stats_exp.png?__cv=e2d3b6193cbab9dd23d67638df826700" width="16" height="13" alt="" />
                            <span><?php echo $Users->DataRow['exp'];  ?></span>
                        </div>
                    </div>
                </div>
                <div id="header_second_bar">
                    <a class="header_btn_02" id="header_home_btn" href="/indexInternal.es?action=internalStart">
                        <div class="header_btn_02_left"></div>
                        <div class="header_btn_02_middle">
                            <img id="header_home_btn_std" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_home&f=eurostyle_tbla&color=lightBlue&bgcolor=black" />
                            <img id="header_home_btn_act" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_home&f=eurostyle_tbla&color=black&bgcolor=skyBlue" style="display: none;" />
                        </div>
                        <div class="header_btn_02_right"></div>
                    </a>
                    <a class="header_btn_01" id="header_logout_btn" href="/indexInternal.es?action=externalLogout">
                        <div class="header_btn_01_left"></div>
                        <div class="header_btn_01_middle">
                            <img id="header_logout_btn_std" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=7&t=header_logout&f=eurostyle_tbla&color=lightBlue&bgcolor=black" />
                            <img id="header_logout_btn_act" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=7&t=header_logout&f=eurostyle_tbla&color=black&bgcolor=skyBlue" style="display: none;" />
                        </div>
                        <div class="header_btn_01_right"></div>
                    </a>
                    <a class="header_btn_01" id="header_help_btn" href="#">
                        <div class="header_btn_01_left"></div>
                        <div class="header_btn_01_middle">
                            <img id="header_help_btn_std" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=7&t=header_help&f=eurostyle_tbla&color=lightBlue&bgcolor=black" />
                            <img id="header_help_btn_act" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=7&t=header_help&f=eurostyle_tbla&color=black&bgcolor=skyBlue" style="display: none;" />
                        </div>
                        <div class="header_btn_01_right"></div>
                    </a>
                    

                </div>

                                                                                                                                                                    
                <div id="header_main">
                                            <div id="header_hangar_slots">
                                                                                            <a showHangarInfo="zqG"
                                    class="header_hangar_slot
                                         current_slot"
                                                                            href="indexInternal.es?action=internalDock&tpl=internalDockEquipment"
                                    >
                                    1
                                </a>
                                                                                                                        <a class="header_hangar_slot_getNext"
                                    href="indexInternal.es?action=internalDock&tpl=internalDockShips&lootId=hangar_slot">+</a>
                                                        <div id="header_hangar_arrow"></div>
                        </div>

                        <div id="hangar_slot_current"></div>
                        <div id="hangar_slot_arrow"></div>
                    
                    <div id="header_main_left">
                        <a class="header_std_btn header_lft_std" id="hangar_btn" href="/indexInternal.es?action=internalDock">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_hangar&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" alt="" />
                        </a>

                        <a class="header_std_btn header_lft_std" id="clan_btn" href="/indexInternal.es?action=internalNewClan">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_clan&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" alt="" />
                        </a>
                        <a class="header_std_btn header_lft_std" id="upgrades_btn" href="/indexInternal.es?action=internalItemUpgradeSystem">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_upgrades&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" alt="" />
                        </a>

                        <a class="header_std_btn header_lft_email newEmail" id="mail_btn" href="/indexInternal.es?action=internalMessaging">
                            <div id="emailHighlight"></div>                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_mail&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" />
                        </a>

                        <a class="header_big_btn header_lft_big" id="profile_btn" href="/indexInternal.es?action=internalPilotSheet">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_pilotsheet&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue&h=21" />
                        </a>
                    </div>

                    <div id="header_main_middle">
                                                    <div id="ip_placeholder"></div>
                        
                            <div id="header_start_btn" >
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=16&t=header_start&f=eurostyle_tbla&color=white&bgcolor=green&h=18" />
                            </div>

                                                                                                                                                    <a class="header_event_wrapper" href="/indexInternal.es?action=internalPilotSheet&tpl=friends">
                                <img class="txt_img" src="/do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_invites_and_bonus&f=eurostyle_tmed&color=fullGrey&bgcolor=darkGrey" />
                            </a>
                                                                                                                                                </div>

                        <div id="header_main_right">
                            <a class="header_std_btn header_rgt_std" id="shop_btn" href="/indexInternal.es?action=internalDock&tpl=internalDockShips" alt="">
                                                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_shop&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" alt="" />
                            </a>

                            <a class="header_std_btn header_rgt_std header_current" id="trade_btn" href="/indexInternal.es?action=internalHandel">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_trade&f=eurostyle_tbla&color=black&bgcolor=skyBlue" />
                            </a>
                            <a class="header_std_btn header_rgt_std upsell_event" id="uri_btn" href="/indexInternal.es?action=internalPayment">
                                <div id="upsell_glow"></div>                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_payment&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" />
                            </a>

                            <a class="header_std_btn header_rgt_std" id="lab_btn" href="/indexInternal.es?action=internalSkylab">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_skylab&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" />
                            </a>
                            <a class="header_big_btn header_rgt_big" id="gg_btn" href="/indexInternal.es?action=internalGalaxyGates">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_galaxygates&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue&h=21" />
                            </a>

                                                    </div>

                                                                            <a id="header_new_mail" href="/indexInternal.es?action=internalMessaging">
                                (1)
                            </a>
                                                <div id="header_emailInvite" class="header_emailInvite header_emailInvite_normal"
                                                             onclick ="SLAYER.renderInviteDialog();">
                           <div id="header_emailInvite_glow"></div>
                        </div>

                    </div>
                    <div id="header_bottom">
                        <img id="news_overlay_left" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/newsticker_gradient_left.png?__cv=2e92a72877420f7082a6cca1bcead200" width="123" height="26" />
                        <img id="news_overlay_right" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/newsticker_gradient_right.png?__cv=1bc4a19ec0a4037149d46c7dbf9af700" width="123" height="26" />
                        <div id="header_news_wrapper">
                            <ul id="header_news_ticker">
                                                                                            <li id="header_news_item_benefitPremium" onclick="HeaderFunc.showNews('benefitPremium')">
                                    Premium fun with Premium advantages
                                </li>
                                                                                                                            <li id="header_news_item_messageSystemLaunch" onclick="HeaderFunc.showNews('messageSystemLaunch')">
                                    <span class="bn_headline">New messaging system!</span>
                                </li>
                                                                                                                            <li id="header_news_item_achievementSystemMS2" onclick="HeaderFunc.showNews('achievementSystemMS2')">
                                    New title system - many new achievements
                                </li>
                                                                                                                            <li id="header_news_item_killscreen2" onclick="HeaderFunc.showNews('killscreen2')">
                                    Repair your ship on the spot right now.
                                </li>
                                                                                                                            <li id="header_news_item_hangarRenamingPremium" onclick="HeaderFunc.showNews('hangarRenamingPremium')">
                                    New Premium Plus! Name Your Hangars
                                </li>
                                                                                                                            <li id="header_news_item_hadesGate" onclick="HeaderFunc.showNews('hadesGate')">
                                    Hades Gate - a Galaxy Gate for groups!
                                </li>
                                                                                        </ul>
                        </div>
                        <div id="header_credits" class="header_money">
                            <?php echo $Users->DataRow['credits'];  ?>
                        </div>
                        <a id="header_uri" class="header_money"  href="/indexInternal.es?action=internalPayment"   onclick="openExternal('/?action=internalPaymentProxy&req=9a79e3a1628a6fd6c57a45095276ae76cf7da0aed114b77b80913ba11a22e172d45467167c84e77a5bd723680acb0dc961c64a5291e51628806eb218584e1dc7&v=778aadb0064f983d');" >
                            <?php echo $Users->DataRow['uri']; ?>
                        </a>
                    </div>
                </div>

            
    
    
    <script type='text/javascript'>
    function onFailFlashembed() {
        var inner_html = '<div class="flashFailHead">Get the Adobe Flash Player</div>\n\
        <div class="flashFailHeadText">In order to play DarkOrbit, you need the latest version of Flash Player. Just install it to start playing!\n\
        <div class="flashFailHeadLink" style="cursor: pointer">Download the Flash Player here for free: <a href=\"http://www.adobe.com/go/getflashplayer\" style=\"text-decoration: underline; color:#A0A0A0;\">Download Flash Player<\/a></div></div>';

        if(!document.getElementById('flashHeader')){
            document.getElementById('header_container').innerHTML = inner_html;
            document.getElementById('equipment_container').innerHTML = "";
            document.getElementById('materialiser').innerHTML = "";
        }

        if(document.getElementById('inventory')){
            document.getElementById('equipment_container').innerHTML = inner_html;
        }

        if(document.getElementById('flashGG')){
            document.getElementById('materialiser').innerHTML = inner_html;
            jQuery('#materialiser').css('margin-left', 110);
            jQuery('#materialiser').css('margin-top', 40);
        }
    }

    function expressInstallCallback(info) {
            // possible values for info: loadTimeOut|Cancelled|Failed
            onFailFlashembed();
    }

    /* this is a hack because the this.hideEmailInviteDialog which is defined as the callback function in the social plugin does not work. So i need this hack for now */
    function hackEmailInviteDialog() {
        var invite_bg = jQuery('#social-invite-container #invite-dialog #invite-bg .invite-dialog-header');
        /*var invite_bg = jQuery('#social-invite-container #invite-dialog #invite-bg');*/
        var closeButton = jQuery('.close');
        closeButton.remove();
        var closeDiv = jQuery(document.createElement('div'))
                .attr('id', 'emailInviteCloseButton')
                .appendTo(invite_bg);
    }

    jQuery(document).ready(function() {
        hackEmailInviteDialog();
        jQuery('#emailInviteCloseButton').click(function() {
            var inviteDialog = jQuery('#invite-dialog');
            var inviteResult = jQuery('.invite-result');
            inviteDialog.css('display', 'none');
            inviteResult.css('display', 'none');
            hideBusyLayer();
            inviteIncentives.mailInviteCallback();
        });

        jQuery(".header_hangar_slot").mouseover(function(){
            jQuery("#hangarInfoLayer").show();

        });

        jQuery(".header_hangar_slot").mouseout(function(){
            jQuery("#hangarInfoLayer").hide();
        });

        /**
         * Apply jScrollpane to history log table
         * if the element is available.
         */
        var tableHistory            = jQuery('#table_history'),
            isTableHistoryPresent   = 0 < tableHistory.length,
            historyContainer;

        if (isTableHistoryPresent) {
            historyContainer    = tableHistory.find('#text_history');
            historyContainer.jScrollPane({
                showArrows : true
            });
        };

            // Initial parameter for SLAYER
        var parameter = {
                // BASIC SETTINGS
                gameId        : 22,
                gameTitle     : 'Darkorbit',
                dispatcherUrl : '/socialAPI/mailInvite.php',               // The path where you call the dispatcher

                instanceId    : '579',
                affiliateId   : '332',
                userId        : '151430678',                                    // globalID
                userKeyId     : '98026209',                                    // userID (of your game)

                // FACEBOOK SETTINGS
                facebook      : {
                    language  : 'en_US'
                },

                // GOOGLE SETTINGS Vicens
                google        : {
                    language : 'en-US'
                },

                invite           : {
                    currentUsername  : '<?php echo $Users->DataRow['Name']; ?>',                     // After initiating the invite dialog, this functions gets called with information wether it was successful or not
                    hideButton       : true,                            // Default: True \| Wether to show an invite dialog button or not (Set to false if You want to call the dialog directly)
                    /*onComplete       : inviteIncentives.mailInviteCallback(),*/                     // This function gets called after the user closes the Invite Dialog
                    editableUsername : true,
                    showTooltip      : true,
                    /*onReady          : inviteIncentives.mailInviteCallback(),     */                // After initiating the invite dialog, this functions gets called with information wether it was successful or not*/
                    inviteUrl        : 'http://darkorbit.bigpoint.com/',  // Define Your invite url

                    // Tabs
                    defaultTab       : 'Mail',                           // Defines which tab is shown initially. Can be: 'Mail' (default if facebookTab is false), 'Facebook' (default if facebookTab is true) or 'Buddy'
                    facebookTab      : true,                            // Defines wether to show the Facebook tab or not
                    buddyList        : false,                            // Defines wether to show the Buddylist and Friendsearch or not
                    friendSearch     : {
                        enable : false,                                   // Default: False
                        url    : '/socialAPI/friendSearch.php'        // Url to Your search engine
                    }
                },

                // GAME EVENT SERVICE
                events        : {}                                       // You just need to place this empty object inside the initParameter to tell SLAYER it should initiate the GES
            }

            SLAYER.init(parameter);
    });
    </script>

    

            <div class="bodyContainer">
                
<script language="javascript">
var _m = 34;
var _s = 40;
var waehrung = 'Uridium';
var raketen = 'Rockets';
var minen = 'Mines';
var laserschuesse = 'Laser rounds';
var logfiles = 'Log-disks';
var erz = 'Ore';
</script>

<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/js/handel.js?__cv=8e39df63a1778f53dda94bbd0d069400"></script>

<div id="battery" class="sellBox fliess11px-weiss" style="display:none;">
    <form name="countBattery001" action="indexInternal.es" method="POST" onsubmit="document.getElementById('sbmtBattery').style.display='none';document.getElementById('waitBattery').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
    <input type="hidden" name="action" value="internalHandel">
    <input type="hidden" name="subAction" value="buy">
    <input type="hidden" name="bazarID" value="1">
    <div id="handel_singleview">
        <div id="handel_singleview_head">
            <div id="handel_singleview_headline"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=shop_kaufen&f=eurostyle_clan" /></div>
            <div id="handel_singleview_close"><a href="javascript:void(0);" onclick="hideAll();"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/box1_buy_kreuz.jpg?__cv=d6d20c62eb8d7d429aa28958f8425c00" width="34" height="34"></a></div>
        </div>
        <div id="handel_singleview_cont">
            <p><strong>MCB-25</strong></p>
            <p>More bang for your buck: x2 laser damage per round</p>
            <p>How much <strong>MCB-25</strong> laser ammo do you want to buy?</p>
            <p id="batterie">100 Laser rounds<br>= 50 Uridium</p>
            <select name="howMuch001" id="howMuch001" style="width:150px;" class="fliess10px-black" onchange="newPriceLaserMun(0.5,this.options[selectedIndex].value);">
                                                                                                                                <option value="0">maximum (0)</option>
            </select>
        </div>
        <div id="handel_singleview_foot">
                        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_jetzt_kaufen.jpg?__cv=6f251448dc3284c2a0e3b0413d469200" onclick="sendBuyNow('indexInternal.es?action=internalHandel&subAction=buy&bazarID=1&reloadToken=c00d7900b277b6915d2fc76c5ed64caa',document.getElementById('howMuch001').value);" id="sbmt001" style="cursor:pointer;">
                        <img id="wait001" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten.jpg?__cv=d6d5efa228b11a36aabac1d855a60a00" width="112" height="19" style="display:none;">
        </div>
    </div>
    </form>
</div>
<div id="battery2" class="sellBox fliess11px-weiss" style="display:none;">
    <form name="countBattery002" action="indexInternal.es" method="POST" onsubmit="document.getElementById('sbmtBattery').style.display='none';document.getElementById('waitBattery').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
    <input type="hidden" name="action" value="internalHandel">
    <input type="hidden" name="subAction" value="buy">
    <input type="hidden" name="bazarID" value="37">
    <div id="handel_singleview">
        <div id="handel_singleview_head">
            <div id="handel_singleview_headline"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=shop_kaufen&f=eurostyle_clan" /></div>
            <div id="handel_singleview_close"><a href="javascript:void(0);" onclick="hideAll();"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/box1_buy_kreuz.jpg?__cv=d6d20c62eb8d7d429aa28958f8425c00" width="34" height="34"></a></div>
        </div>
        <div id="handel_singleview_cont">
            <p><strong>MCB-50</strong></p>
            <p>The best standard laser ammo: x3 laser damage per round</p>
            <p>How much <strong>MCB-50</strong> laser ammo do you want to buy?</p>
            <p id="batterie2">100 Laser rounds<br>= 100 Uridium</p>
            <select name="howMuch002" id="howMuch002" style="width:150px;" class="fliess10px-black" onchange="newPriceLaserMun2(1,this.options[selectedIndex].value);">
                                                                                                                                <option value="0">maximum (0)</option>
            </select>
        </div>
        <div id="handel_singleview_foot">
                        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_jetzt_kaufen.jpg?__cv=6f251448dc3284c2a0e3b0413d469200" onclick="sendBuyNow('indexInternal.es?action=internalHandel&subAction=buy&bazarID=37&reloadToken=c00d7900b277b6915d2fc76c5ed64caa',document.getElementById('howMuch002').value);" id="sbmt002" style="cursor:pointer;">
                        <img id="wait002" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten.jpg?__cv=d6d5efa228b11a36aabac1d855a60a00" width="112" height="19" style="display:none;">
        </div>
    </div>
    </form>
</div>

<div id="battery4" class="sellBox fliess11px-weiss" style="display:none;">
    <form name="countBattery003" action="indexInternal.es" method="POST" onsubmit="document.getElementById('sbmtBattery').style.display='none';document.getElementById('waitBattery').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
    <input type="hidden" name="action" value="internalHandel">
    <input type="hidden" name="subAction" value="buy">
    <input type="hidden" name="bazarID" value="45">
    <div id="handel_singleview">
        <div id="handel_singleview_head">
            <div id="handel_singleview_headline"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=shop_kaufen&f=eurostyle_clan" /></div>
            <div id="handel_singleview_close"><a href="javascript:void(0);" onclick="hideAll();"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/box1_buy_kreuz.jpg?__cv=d6d20c62eb8d7d429aa28958f8425c00" width="34" height="34"></a></div>
        </div>
        <div id="handel_singleview_cont">
            <p><strong>SAB-50</strong></p>
            <p>Shield-absorbing special ammo</p>
            <p>How much <strong>SAB-50</strong> laser ammo do you want to buy?</p>
            <p id="batterie2">100 Laser rounds<br>= 100 Uridium</p>
            <select name="howMuch003" id="howMuch003" style="width:150px;" class="fliess10px-black" onchange="newPriceLaserMun4(1,this.options[selectedIndex].value);">
                                                                                                                                <option value="0">maximum (0)</option>
            </select>
        </div>
        <div id="handel_singleview_foot">
                        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_jetzt_kaufen.jpg?__cv=6f251448dc3284c2a0e3b0413d469200" onclick="sendBuyNow('indexInternal.es?action=internalHandel&subAction=buy&bazarID=45&reloadToken=c00d7900b277b6915d2fc76c5ed64caa',document.getElementById('howMuch003').value);" id="sbmt003" style="cursor:pointer;">
                        <img id="wait003" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten.jpg?__cv=d6d5efa228b11a36aabac1d855a60a00" width="112" height="19" style="display:none;">
        </div>
    </div>
    </form>
</div>

<div id="rocket" class="sellBox fliess11px-weiss" style="display:none;">
    <form name="countBattery004" action="indexInternal.es" method="POST" onsubmit="document.getElementById('sbmtRockets').style.display='none';document.getElementById('waitRockets').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
    <input type="hidden" name="action" value="internalHandel">
    <input type="hidden" name="subAction" value="buy">
    <input type="hidden" name="bazarID" value="12">
    <div id="handel_singleview">
        <div id="handel_singleview_head">
            <div id="handel_singleview_headline"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=shop_kaufen&f=eurostyle_clan" /></div>
            <div id="handel_singleview_close"><a href="javascript:void(0);" onclick="hideAll();"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/box1_buy_kreuz.jpg?__cv=d6d20c62eb8d7d429aa28958f8425c00" width="34" height="34"></a></div>
        </div>
        <div id="handel_singleview_cont">
            <p><strong>PLT-2021</strong></p>
            <p>Long-range rocket: causes up to 4,000 points per rocket fired</p>
            <p>How many <strong>PLT-2021</strong> <strong>Rockets</strong> do you want to buy?</p>
            <p id="rocketText">10 Rockets = 50 Uridium</p>
            <select name="howMuch004" id="howMuch004" style="width:150px;" class="fliess10px-black" onchange="newPrice(5,this.options[selectedIndex].value);">
                                                                                                <option value="0">maximum (0)</option>
            </select>
        </div>
        <div id="handel_singleview_foot">
                        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_jetzt_kaufen.jpg?__cv=6f251448dc3284c2a0e3b0413d469200" onclick="sendBuyNow('indexInternal.es?action=internalHandel&subAction=buy&bazarID=12&reloadToken=c00d7900b277b6915d2fc76c5ed64caa',document.getElementById('howMuch004').value);" id="sbmt004" style="cursor:pointer;"><img id="wait004s" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten.jpg?__cv=d6d5efa228b11a36aabac1d855a60a00" width="112" height="19" style="display:none;">
                    </div>
    </div>
    </form>
</div>

<div id="mine" class="sellBox fliess11px-weiss" style="display:none;">
    <form name="countBattery005" action="indexInternal.es" method="POST" onsubmit="document.getElementById('sbmtMines').style.display='none';document.getElementById('waitMines').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
    <input type="hidden" name="action" value="internalHandel">
    <input type="hidden" name="subAction" value="buy">
    <input type="hidden" name="bazarID" value="36">
    <div id="handel_singleview">
        <div id="handel_singleview_head">
            <div id="handel_singleview_headline"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=shop_kaufen&f=eurostyle_clan" /></div>
            <div id="handel_singleview_close"><a href="javascript:void(0);" onclick="hideAll();"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/box1_buy_kreuz.jpg?__cv=d6d20c62eb8d7d429aa28958f8425c00" width="34" height="34"></a></div>
        </div>
        <div id="handel_singleview_cont">
            <p><strong>ACM-1</strong></p>
            <p>Proximity mine: 20% damage upon detonation</p>
            <p>How many <strong>ACM-1</strong> <strong>Mines</strong> do you want to buy?</p>
            <p id="mineText">10 Mines = 1000 Uridium</p>
            <select name="howMuch005" id="howMuch005" style="width:150px;" class="fliess10px-black" onchange="newPriceMine(100,this.options[selectedIndex].value);">
                                                                                                <option value="0">maximum (0)</option>
            </select>
        </div>
        <div id="handel_singleview_foot">
                        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_jetzt_kaufen.jpg?__cv=6f251448dc3284c2a0e3b0413d469200" onclick="sendBuyNow('indexInternal.es?action=internalHandel&subAction=buy&bazarID=36&reloadToken=c00d7900b277b6915d2fc76c5ed64caa',document.getElementById('howMuch005').value);" id="sbmt005" style="cursor:pointer;"><img id="wait005" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten.jpg?__cv=d6d5efa228b11a36aabac1d855a60a00" width="112" height="19" style="display:none;">
                    </div>
    </div>
    </form>
</div>

<div id="ore" class="sellBox fliess11px-weiss" style="display:none;">
    <form name="countOre006" action="indexInternal.es" method="POST" onsubmit="document.getElementById('sbmtOre').style.display='none';document.getElementById('waitOre').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
    <input type="hidden" name="action" value="internalHandel">
    <input type="hidden" name="subAction" value="buy">
    <input type="hidden" name="bazarID" value="13">
    <div id="handel_singleview">
        <div id="handel_singleview_head">
            <div id="handel_singleview_headline"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=shop_kaufen&f=eurostyle_clan" /></div>
            <div id="handel_singleview_close"><a href="javascript:void(0);" onclick="hideAll();"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/box1_buy_kreuz.jpg?__cv=d6d20c62eb8d7d429aa28958f8425c00" width="34" height="34"></a></div>
        </div>
        <div id="handel_singleview_cont">
            <p><strong>Xenomit</strong></p>
            <p>Required to create Promerium on your ship and in the Skylab.</p>
            <p>How much <strong>Xenomit</strong> ore do you want to buy?</p>
            <p id="oreText">10 Ore = 100 Uridium</p>
            <select name="howMuch006" id="howMuch006" style="width:150px;" class="fliess10px-black" onchange="newPriceOre(10,this.options[selectedIndex].value);">
                                                                                                                                                                <option value="3">maximum (3)</option>
            </select>
        </div>
        <div id="handel_singleview_foot">
                        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_jetzt_kaufen.jpg?__cv=6f251448dc3284c2a0e3b0413d469200" onclick="sendBuyNow('indexInternal.es?action=internalHandel&subAction=buy&bazarID=13&reloadToken=c00d7900b277b6915d2fc76c5ed64caa',document.getElementById('howMuch006').value);" id="sbmt006" style="cursor:pointer;"><img id="wait006" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten.jpg?__cv=d6d5efa228b11a36aabac1d855a60a00" width="112" height="19" style="display:none;">
                    </div>
    </div>
    </form>
</div>

<div id="logfiles" class="sellBox fliess11px-weiss" style="display:none;">
    <form name="countLogfiles007" action="indexInternal.es" method="POST" onsubmit="document.getElementById('sbmt007').style.display='none';document.getElementById('wait007').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
    <input type="hidden" name="action" value="internalHandel">
    <input type="hidden" name="subAction" value="buy">
    <input type="hidden" name="bazarID" value="72">
    <div id="handel_singleview">
        <div id="handel_singleview_head">
            <div id="handel_singleview_headline"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=shop_kaufen&f=eurostyle_clan" /></div>
            <div id="handel_singleview_close"><a href="javascript:void(0);" onclick="hideAll();"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/box1_buy_kreuz.jpg?__cv=d6d20c62eb8d7d429aa28958f8425c00" width="34" height="34"></a></div>
        </div>
        <div id="handel_singleview_cont">
            <p><strong>Log-disks</strong></p>
            <p>Log-disks can be exchanged for pilot points.</p>
            <p>How many log-disks do you want to buy?</p>
            <p id="logfileText">1 Log-disk = 300 Uridium</p>
            <select name="howMuch007" id="howMuch007" style="width:150px;" class="fliess10px-black" onchange="newPriceLogfiles(300,this.options[selectedIndex].value);">
                                                                                <option value="0">maximum (0)</option>
            </select>
        </div>
        <div id="handel_singleview_foot">
                        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_jetzt_kaufen.jpg?__cv=6f251448dc3284c2a0e3b0413d469200" onclick="sendBuyNow('indexInternal.es?action=internalHandel&subAction=buy&bazarID=72&reloadToken=c00d7900b277b6915d2fc76c5ed64caa',document.getElementById('howMuch007').value);" id="sbmt007" style="cursor:pointer;"><img id="wait007" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten.jpg?__cv=d6d5efa228b11a36aabac1d855a60a00" width="112" height="19" style="display:none;">
                    </div>
    </div>
    </form>
</div>

<div id="confirmLayer" style="position:absolute;width:480px;display:none;z-index:10;" class="fliess13px-grey">
    <div id="popup_standard_headcontainer">
        <div id="popup_standard_headline"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=system&f=eurostyle_clan"></div>
        <div id="popup_standard_close"><a id="closeStandardLayerCross" onfocus="this.blur();"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup_middle_close.jpg?__cv=450b0ca7303746b8cfcba9bef857e600"></a></div>
    </div>
    <br class="clearMe" />
    <div id="popup_standard_content">
        Do you really want to buy this item?
        <div id="itemname"></div>
    </div>
        <div id="popup_standard_footercontainer">
        <div id="popup_standard_button1">
            <table id="buy_now" class="button_resizable" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td class="button_resizable_1"></td>
                <td class="button_resizable_2"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=shop_kaufen&f=eurostyle_clan"></td>
                <td class="button_resizable_3"></td>
            </tr>
            </table>
        </div>
        <div id="popup_standard_button2">
            <table id="closeStandardLayer" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td class="button_resizable_1"></td>
                <td class="button_resizable_2"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=abbrechen&f=eurostyle_clan"></td>
                <td class="button_resizable_3"></td>
            </tr>
            </table>
        </div>
    </div>
    <br class="clearMe" />
</div>

<script>
var SID='dosid=57b0a58605563954f4e38ee808d1671b';
var quantity = 'Amount'

function showConfirmLayer(target,itemname,parentID,count,chooseDiv) {
    showBusyLayer();
    if (!count) count = 1;
    if ($(chooseDiv) != null) $(chooseDiv).style.display = 'none';

    $('closeStandardLayer').onclick = new Function("closeConfirm('confirmLayer', '"+parentID+"')");
    $('closeStandardLayerCross').onclick = new Function("closeConfirm('confirmLayer', '"+parentID+"')");
    $('buy_now').onclick = new Function("sendBuyNow('"+target+"','"+count+"')");
    if (count > 1) itemname += " ("+quantity+": "+count+")";
    document.getElementById("itemname").innerHTML = itemname;

    width_x = document.body.offsetWidth;
    container_x = $("confirmLayer").getWidth();
    /*$("confirmLayer").style.left = ((width_x/2) - (container_x/2)) +"px";
    $("confirmLayer").style.top = "150px";*/
    $("confirmLayer").style.left = "272px";
    $("confirmLayer").style.top = "20px";
    $("confirmLayer").style.display = "block";
}
function sendBuyNow(target,count) {
    updateTradeLayer();
    if (count<1) count=1;
    document.location.href = target+"&howMuch="+count;
}
function closeConfirm(divID,parentID) {
    updateTradeLayer();

    document.getElementById("wait"+parentID).style.display = "none";
    document.getElementById("sbmt"+parentID).style.display = "block";
    closeLayer(divID);
    hideBusyLayer();
}
function updateTradeLayer() {
    if (document.changeViewStatus) {
        if (document.changeViewStatus.dontShowTradeLayer.checked == true) {
            xajax_disableTradeLayer();
        }
    }
}

</script>



    <div id="content">
        <!-- Navigation -->
        <div id="nav"><style type="text/css" media="screen">    @import "http://darkorbit-22.ah.bpcdn.net/css/cdn/subnav2.css?__cv=e71d57adf0c860e4248429e0e0041900"; </style>

    <div id="subNavTop">
                <ul>
            <li title="Auctions"><a onfocus="this.blur()" href="indexInternal.es?action=internalHandel" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/bg_subnav_selected.gif?__cv=50e42b1a79a5d5a5532f192f60de6900);"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_trade_auctions&f=eurostyle_clan"></a></li>
            <li title="Completed"><a onfocus="this.blur()" href="indexInternal.es?action=internalHandel&tpl=internalHandelClosed" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_trade_completed&f=eurostyle_clan"></a></li>
        </ul>
            </div>


</div>
        <!-- Ende Navigation -->
        <!-- Content -->
        <div id="mainContentAuktion" class="fliess11px-weiss">

            <div id="div_counter"><strong>The auction ends in <span id="counter">hh:mm</span> min(s) </strong></div>

            <div id="div_info"><strong></strong> When you place a bid, the credits are immediately deducted from your account. They will not be refunded.</div>
                        <div id="div_bazar_items" class="scroll-pane fliess10px-white">

                <table width="448" cellspacing="0" cellpadding="0" class="fliess10px-white" border="0">
                
                <b id="BATTERY_2"></b>
                <form name="auktion_1" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_1').style.display='none';document.getElementById('wait_1').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="1">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/BATTERY_2.png?__cv=86c2c2d261ef196310b34fb3f92c6800" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6eAt8">More bang for your buck: x2 laser damage per round (1000 units)<br>Highest bidder:<span class="userInfoName" title="deaglecfg - click for details"> deaglecfg</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>500 U.</strong></span>
                                                    <a href="JavaScript:void(0)" class="trade_buy_button" onclick="showQuantityManager('battery');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_1" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_1">
                            <a id="bid_lnk_1" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=1&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_1').attr('href',jQuery('#bid_lnk_1').attr('href')+'&amount='+jQuery('#bid_amount_1').val());document.getElementById('sbmt_1').style.display='none';document.getElementById('wait_1').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_1" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="BATTERY_3"></b>
                <form name="auktion_37" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_2').style.display='none';document.getElementById('wait_2').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="37">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/BATTERY_3.png?__cv=386dd5328b039cc7594c36f8875af400" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6eAt8">This is the best standard laser ammo on the market. x3 laser damage per round (1000 units)<br>Highest bidder:<span class="userInfoName" title="deaglecfg - click for details"> deaglecfg</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>1,000 U.</strong></span>
                                                    <a href="JavaScript:void(0)" class="trade_buy_button" onclick="showQuantityManager('battery2');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_2" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_2">
                            <a id="bid_lnk_2" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=37&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_2').attr('href',jQuery('#bid_lnk_2').attr('href')+'&amount='+jQuery('#bid_amount_2').val());document.getElementById('sbmt_2').style.display='none';document.getElementById('wait_2').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_2" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="BATTERY_5"></b>
                <form name="auktion_45" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_3').style.display='none';document.getElementById('wait_3').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="45">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/BATTERY_5.png?__cv=0665c3f7e4614d679369d77011c2c900" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="4UqEB">Shield-absorbing special ammo (1000 units)<br>Highest bidder:<span class="userInfoName" title="-Mallu- - click for details"> -Mallu-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>1,000 U.</strong></span>
                                                    <a href="JavaScript:void(0)" class="trade_buy_button" onclick="showQuantityManager('battery4');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_3" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_3">
                            <a id="bid_lnk_3" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=45&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_3').attr('href',jQuery('#bid_lnk_3').attr('href')+'&amount='+jQuery('#bid_amount_3').val());document.getElementById('sbmt_3').style.display='none';document.getElementById('wait_3').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_3" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="GENERATOR_5"></b>
                <form name="auktion_2" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_4').style.display='none';document.getElementById('wait_4').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="2">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/GENERATOR_5.png?__cv=11fda911a3adddf4625c992671f67c00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6cLf0">Increases ship speed by 7<br>Highest bidder:<span class="userInfoName" title="-D3STR0- - click for details"> -D3STR0-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>1,000 U.</strong></span>
                                                    <div id="sbmt4">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=2&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt4').style.display='none';$('wait4').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait4" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_4" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_4">
                            <a id="bid_lnk_4" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=2&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_4').attr('href',jQuery('#bid_lnk_4').attr('href')+'&amount='+jQuery('#bid_amount_4').val());document.getElementById('sbmt_4').style.display='none';document.getElementById('wait_4').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_4" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="GENERATOR_6"></b>
                <form name="auktion_3" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_5').style.display='none';document.getElementById('wait_5').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="3">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/GENERATOR_6.png?__cv=5f9dde561e90537b98528f2331841c00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6dHVl">Increases ship speed by 10<br>Highest bidder:<span class="userInfoName" title="-delii- - click for details"> -delii-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>2,000 U.</strong></span>
                                                    <div id="sbmt5">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=3&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt5').style.display='none';$('wait5').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait5" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_5" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_5">
                            <a id="bid_lnk_5" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=3&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_5').attr('href',jQuery('#bid_lnk_5').attr('href')+'&amount='+jQuery('#bid_amount_5').val());document.getElementById('sbmt_5').style.display='none';document.getElementById('wait_5').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_5" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="GENERATOR_9"></b>
                <form name="auktion_4" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_6').style.display='none';document.getElementById('wait_6').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="4">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/GENERATOR_9.png?__cv=2bf4ba2d58d9941f68eaba0164d58600" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6cLf0">4,000 shield strength / 70% less damage<br>Highest bidder:<span class="userInfoName" title="-D3STR0- - click for details"> -D3STR0-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>2,500 U.</strong></span>
                                                    <div id="sbmt6">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=4&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt6').style.display='none';$('wait6').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait6" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_6" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_6">
                            <a id="bid_lnk_6" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=4&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_6').attr('href',jQuery('#bid_lnk_6').attr('href')+'&amount='+jQuery('#bid_amount_6').val());document.getElementById('sbmt_6').style.display='none';document.getElementById('wait_6').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_6" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="GENERATOR_11"></b>
                <form name="auktion_5" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_7').style.display='none';document.getElementById('wait_7').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="5">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/GENERATOR_11.png?__cv=5f0683e3cba807728df2abb04787f000" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6aq9C">10,000 shield strength / 80% less damage<br>Highest bidder:<span class="userInfoName" title="»ЯєSρ3cŦ«™ - click for details"> »ЯєSρ3cŦ«™</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt7">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=5&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt7').style.display='none';$('wait7').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait7" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_7" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_7">
                            <a id="bid_lnk_7" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=5&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_7').attr('href',jQuery('#bid_lnk_7').attr('href')+'&amount='+jQuery('#bid_amount_7').val());document.getElementById('sbmt_7').style.display='none';document.getElementById('wait_7').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_7" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_52"></b>
                <form name="auktion_55" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_8').style.display='none';document.getElementById('wait_8').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="55">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_52.png?__cv=f7257e1358bf2ec0f5af0a9a85d07c00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="4UqEB">10 ship cloakings (active until your first attack)<br>Highest bidder:<span class="userInfoName" title="-Mallu- - click for details"> -Mallu-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>5,000 U.</strong></span>
                                                    <div id="sbmt8">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=55&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt8').style.display='none';$('wait8').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait8" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_8" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_8">
                            <a id="bid_lnk_8" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=55&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_8').attr('href',jQuery('#bid_lnk_8').attr('href')+'&amount='+jQuery('#bid_amount_8').val());document.getElementById('sbmt_8').style.display='none';document.getElementById('wait_8').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_8" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_83"></b>
                <form name="auktion_56" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_9').style.display='none';document.getElementById('wait_9').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="56">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_83.png?__cv=3c39b094478eb0f5cb02c62dc2b87a00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="5YvlZ">+6 new slots for extras<br>Highest bidder:<span class="userInfoName" title="cubikon647 - click for details"> cubikon647</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>150,000 U.</strong></span>
                                                    <div id="sbmt9">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=56&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt9').style.display='none';$('wait9').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait9" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_9" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_9">
                            <a id="bid_lnk_9" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=56&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_9').attr('href',jQuery('#bid_lnk_9').attr('href')+'&amount='+jQuery('#bid_amount_9').val());document.getElementById('sbmt_9').style.display='none';document.getElementById('wait_9').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_9" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_42"></b>
                <form name="auktion_54" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_10').style.display='none';document.getElementById('wait_10').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="54">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_42.png?__cv=5df7108f2dc3e74fcaba123114906e00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Automatic rocket rapid fire during your laser attacks<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>25,000 U.</strong></span>
                                                    <div id="sbmt10">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=54&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt10').style.display='none';$('wait10').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait10" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_10" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_10">
                            <a id="bid_lnk_10" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=54&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_10').attr('href',jQuery('#bid_lnk_10').attr('href')+'&amount='+jQuery('#bid_amount_10').val());document.getElementById('sbmt_10').style.display='none';document.getElementById('wait_10').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_10" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_33"></b>
                <form name="auktion_53" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_11').style.display='none';document.getElementById('wait_11').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="53">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_33.png?__cv=1aaf38737fd81ec458e495ed4fc5ec00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">50% less cool-down time for mines and items made from mines<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>25,000 U.</strong></span>
                                                    <div id="sbmt11">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=53&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt11').style.display='none';$('wait11').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait11" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_11" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_11">
                            <a id="bid_lnk_11" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=53&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_11').attr('href',jQuery('#bid_lnk_11').attr('href')+'&amount='+jQuery('#bid_amount_11').val());document.getElementById('sbmt_11').style.display='none';document.getElementById('wait_11').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_11" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_112"></b>
                <form name="auktion_51" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_12').style.display='none';document.getElementById('wait_12').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="51">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_112.png?__cv=75c641ebfb6d71c922985e3bf3d38600" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6cLf0">Jump to X-1 home map, works everywhere except the pirate sector. 20 total jumps. May not be used during battle.<br>Highest bidder:<span class="userInfoName" title="-D3STR0- - click for details"> -D3STR0-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>15,000 U.</strong></span>
                                                    <div id="sbmt12">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=51&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt12').style.display='none';$('wait12').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait12" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_12" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_12">
                            <a id="bid_lnk_12" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=51&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_12').attr('href',jQuery('#bid_lnk_12').attr('href')+'&amount='+jQuery('#bid_amount_12').val());document.getElementById('sbmt_12').style.display='none';document.getElementById('wait_12').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_12" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_101"></b>
                <form name="auktion_50" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_13').style.display='none';document.getElementById('wait_13').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="50">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_101.png?__cv=a3c6157f7e918bba0471be3cc5142400" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Displays diplomacy status on mini map<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>15,000 U.</strong></span>
                                                    <div id="sbmt13">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=50&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt13').style.display='none';$('wait13').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait13" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_13" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_13">
                            <a id="bid_lnk_13" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=50&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_13').attr('href',jQuery('#bid_lnk_13').attr('href')+'&amount='+jQuery('#bid_amount_13').val());document.getElementById('sbmt_13').style.display='none';document.getElementById('wait_13').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_13" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_92"></b>
                <form name="auktion_49" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_14').style.display='none';document.getElementById('wait_14').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="49">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_92.png?__cv=26ce3b30756138e6347ea7f85d800c00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">32 automatic drone repairs if ship is completely damaged and if there is enough Uridium<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>15,000 U.</strong></span>
                                                    <div id="sbmt14">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=49&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt14').style.display='none';$('wait14').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait14" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_14" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_14">
                            <a id="bid_lnk_14" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=49&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_14').attr('href',jQuery('#bid_lnk_14').attr('href')+'&amount='+jQuery('#bid_amount_14').val());document.getElementById('sbmt_14').style.display='none';document.getElementById('wait_14').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_14" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_131"></b>
                <form name="auktion_57" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_15').style.display='none';document.getElementById('wait_15').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="57">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_131.png?__cv=5393375fcc402a8cb50d0bc7d8af5000" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="4UqEB">Instant bomb made from 10 mines and 100 Xenomit; doesn't cause any damage to your ship<br>Highest bidder:<span class="userInfoName" title="-Mallu- - click for details"> -Mallu-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>50,000 U.</strong></span>
                                                    <div id="sbmt15">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=57&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt15').style.display='none';$('wait15').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait15" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_15" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_15">
                            <a id="bid_lnk_15" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=57&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_15').attr('href',jQuery('#bid_lnk_15').attr('href')+'&amount='+jQuery('#bid_amount_15').val());document.getElementById('sbmt_15').style.display='none';document.getElementById('wait_15').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_15" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_141"></b>
                <form name="auktion_58" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_16').style.display='none';document.getElementById('wait_16').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="58">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_141.png?__cv=58527376efdb7c7d22a4364fa3eb3600" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">3-second protection against enemies; 10 mines and 100 Xenomit used every time<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>50,000 U.</strong></span>
                                                    <div id="sbmt16">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=58&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt16').style.display='none';$('wait16').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait16" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_16" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_16">
                            <a id="bid_lnk_16" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=58&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_16').attr('href',jQuery('#bid_lnk_16').attr('href')+'&amount='+jQuery('#bid_amount_16').val());document.getElementById('sbmt_16').style.display='none';document.getElementById('wait_16').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_16" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_151"></b>
                <form name="auktion_59" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_17').style.display='none';document.getElementById('wait_17').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="59">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_151.png?__cv=71eac2e5bf2b734dfcf866f7bc1d9400" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Automatically gives your generators a boost using the best resources available<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>15,000 U.</strong></span>
                                                    <div id="sbmt17">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=59&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt17').style.display='none';$('wait17').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait17" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_17" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_17">
                            <a id="bid_lnk_17" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=59&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_17').attr('href',jQuery('#bid_lnk_17').attr('href')+'&amount='+jQuery('#bid_amount_17').val());document.getElementById('sbmt_17').style.display='none';document.getElementById('wait_17').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_17" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_24"></b>
                <form name="auktion_95" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_18').style.display='none';document.getElementById('wait_18').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="95">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_24.png?__cv=ad1d8c5d7166551c71182eecc5a67e00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6cLf0">Repairs up to 75,000 HP per minute<br>Highest bidder:<span class="userInfoName" title="-D3STR0- - click for details"> -D3STR0-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>20,000 U.</strong></span>
                                                    <div id="sbmt18">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=95&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt18').style.display='none';$('wait18').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait18" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_18" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_18">
                            <a id="bid_lnk_18" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=95&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_18').attr('href',jQuery('#bid_lnk_18').attr('href')+'&amount='+jQuery('#bid_amount_18').val());document.getElementById('sbmt_18').style.display='none';document.getElementById('wait_18').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_18" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_201"></b>
                <form name="auktion_94" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_19').style.display='none';document.getElementById('wait_19').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="94">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_201.png?__cv=7799fecfd4fce1f89d900d4304c21000" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6cLf0">Allows you to jump to any of the valid target maps. May not be used during battle.<br>Highest bidder:<span class="userInfoName" title="-D3STR0- - click for details"> -D3STR0-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>75,000 U.</strong></span>
                                                    <div id="sbmt19">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=94&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt19').style.display='none';$('wait19').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait19" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_19" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_19">
                            <a id="bid_lnk_19" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=94&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_19').attr('href',jQuery('#bid_lnk_19').attr('href')+'&amount='+jQuery('#bid_amount_19').val());document.getElementById('sbmt_19').style.display='none';document.getElementById('wait_19').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_19" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_53"></b>
                <form name="auktion_93" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_20').style.display='none';document.getElementById('wait_20').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="93">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_53.png?__cv=b2ef2fbc8f084c7b8d6f4763a7c4d600" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="5B6AT">Cloak your ship 50 times and stay invisible until you launch an attack yourself.<br>Highest bidder:<span class="userInfoName" title="☆♫ŘΣиΣ♫☆ - click for details"> ☆♫ŘΣиΣ♫☆</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>22,500 U.</strong></span>
                                                    <div id="sbmt20">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=93&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt20').style.display='none';$('wait20').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait20" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_20" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_20">
                            <a id="bid_lnk_20" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=93&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_20').attr('href',jQuery('#bid_lnk_20').attr('href')+'&amount='+jQuery('#bid_amount_20').val());document.getElementById('sbmt_20').style.display='none';document.getElementById('wait_20').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_20" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_74"></b>
                <form name="auktion_85" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_21').style.display='none';document.getElementById('wait_21').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="85">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_74.png?__cv=75a4c0abec13e6ec9412b78b4ca07d00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">+150% armory capacity<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>20,000 U.</strong></span>
                                                    <div id="sbmt21">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=85&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt21').style.display='none';$('wait21').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait21" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_21" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_21">
                            <a id="bid_lnk_21" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=85&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_21').attr('href',jQuery('#bid_lnk_21').attr('href')+'&amount='+jQuery('#bid_amount_21').val());document.getElementById('sbmt_21').style.display='none';document.getElementById('wait_21').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_21" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_122"></b>
                <form name="auktion_82" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_22').style.display='none';document.getElementById('wait_22').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="82">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_122.png?__cv=887cf998c5963ff84815e8a4fc94b200" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Automatically buys 500 rockets of the selected rocket type when you have less than 100 left on board. To set the rocket type, click on Hangar -> Equipment.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>15,000 U.</strong></span>
                                                    <div id="sbmt22">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=82&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt22').style.display='none';$('wait22').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait22" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_22" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_22">
                            <a id="bid_lnk_22" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=82&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_22').attr('href',jQuery('#bid_lnk_22').attr('href')+'&amount='+jQuery('#bid_amount_22').val());document.getElementById('sbmt_22').style.display='none';document.getElementById('wait_22').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_22" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_84"></b>
                <form name="auktion_78" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_23').style.display='none';document.getElementById('wait_23').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="78">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_84.png?__cv=aa96c17302d5cbda2d6bd6e8ff007c00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="5sdPm">+10 new slots for extras<br>Highest bidder:<span class="userInfoName" title="PЯΣDΛTӨЯ[тüяк] - click for details"> PЯΣDΛTӨЯ[...</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>250,000 U.</strong></span>
                                                    <div id="sbmt23">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=78&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt23').style.display='none';$('wait23').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait23" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_23" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_23">
                            <a id="bid_lnk_23" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=78&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_23').attr('href',jQuery('#bid_lnk_23').attr('href')+'&amount='+jQuery('#bid_amount_23').val());document.getElementById('sbmt_23').style.display='none';document.getElementById('wait_23').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_23" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_182"></b>
                <form name="auktion_76" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_24').style.display='none';document.getElementById('wait_24').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="76">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_182.png?__cv=ed6fc2697914b0202f6f8a47a1d5fa00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">The rocket-launcher CPU automatically reloads your rocket launcher with a specified rocket type to rain fire on your enemies when you launch a laser attack.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>25,000 U.</strong></span>
                                                    <div id="sbmt24">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=76&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt24').style.display='none';$('wait24').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait24" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_24" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_24">
                            <a id="bid_lnk_24" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=76&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_24').attr('href',jQuery('#bid_lnk_24').attr('href')+'&amount='+jQuery('#bid_amount_24').val());document.getElementById('sbmt_24').style.display='none';document.getElementById('wait_24').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_24" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_181"></b>
                <form name="auktion_72" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_25').style.display='none';document.getElementById('wait_25').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="72">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_181.png?__cv=753ac1eddb627166b371ce6add2a4800" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6dHVl">Log-disks can be exchanged for pilot points. (3 units)<br>Highest bidder:<span class="userInfoName" title="-delii- - click for details"> -delii-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>900 U.</strong></span>
                                                    <a href="JavaScript:void(0)" class="trade_buy_button" onclick="showQuantityManager('logfiles');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_25" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_25">
                            <a id="bid_lnk_25" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=72&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_25').attr('href',jQuery('#bid_lnk_25').attr('href')+'&amount='+jQuery('#bid_amount_25').val());document.getElementById('sbmt_25').style.display='none';document.getElementById('wait_25').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_25" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_162"></b>
                <form name="auktion_61" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_26').style.display='none';document.getElementById('wait_26').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="61">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_162.png?__cv=247dba863826ea0390f2d399e3fa2d00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6dHVl">50% less chance that lasers will miss their target; 10 Xenomit used per volley<br>Highest bidder:<span class="userInfoName" title="-delii- - click for details"> -delii-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>200,000 U.</strong></span>
                                                    <div id="sbmt26">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=61&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt26').style.display='none';$('wait26').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait26" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_26" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_26">
                            <a id="bid_lnk_26" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=61&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_26').attr('href',jQuery('#bid_lnk_26').attr('href')+'&amount='+jQuery('#bid_amount_26').val());document.getElementById('sbmt_26').style.display='none';document.getElementById('wait_26').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_26" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_82"></b>
                <form name="auktion_48" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_27').style.display='none';document.getElementById('wait_27').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="48">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_82.png?__cv=4802fd70c633138699ff83ad602fbe00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6dHVl">+4 new slots for extras<br>Highest bidder:<span class="userInfoName" title="-delii- - click for details"> -delii-</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>75,000 U.</strong></span>
                                                    <div id="sbmt27">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=48&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt27').style.display='none';$('wait27').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait27" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_27" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_27">
                            <a id="bid_lnk_27" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=48&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_27').attr('href',jQuery('#bid_lnk_27').attr('href')+'&amount='+jQuery('#bid_amount_27').val());document.getElementById('sbmt_27').style.display='none';document.getElementById('wait_27').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_27" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_121"></b>
                <form name="auktion_47" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_28').style.display='none';document.getElementById('wait_28').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="47">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_121.png?__cv=6881f61948fb186ee973e2f9c8c66800" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Automatically buys 10,000 laser rounds if less than 1,000 rounds on board. Settings can be adjusted in Equipment.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>15,000 U.</strong></span>
                                                    <div id="sbmt28">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=47&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt28').style.display='none';$('wait28').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait28" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_28" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_28">
                            <a id="bid_lnk_28" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=47&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_28').attr('href',jQuery('#bid_lnk_28').attr('href')+'&amount='+jQuery('#bid_amount_28').val());document.getElementById('sbmt_28').style.display='none';document.getElementById('wait_28').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_28" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_51"></b>
                <form name="auktion_34" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_29').style.display='none';document.getElementById('wait_29').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="34">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_51.png?__cv=91a4e76a48d01b32a818d9d66e5c4600" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Ship stays cloaked until your first attack<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>500 U.</strong></span>
                                                    <div id="sbmt29">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=34&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt29').style.display='none';$('wait29').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait29" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_29" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_29">
                            <a id="bid_lnk_29" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=34&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_29').attr('href',jQuery('#bid_lnk_29').attr('href')+'&amount='+jQuery('#bid_amount_29').val());document.getElementById('sbmt_29').style.display='none';document.getElementById('wait_29').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_29" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_23"></b>
                <form name="auktion_31" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_30').style.display='none';document.getElementById('wait_30').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="31">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_23.png?__cv=e37e71fcb60e174b103aa397522f8400" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6eAt8">Repairs up to 50,000 HP per minute<br>Highest bidder:<span class="userInfoName" title="deaglecfg - click for details"> deaglecfg</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>5,000 U.</strong></span>
                                                    <div id="sbmt30">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=31&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt30').style.display='none';$('wait30').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait30" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_30" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_30">
                            <a id="bid_lnk_30" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=31&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_30').attr('href',jQuery('#bid_lnk_30').attr('href')+'&amount='+jQuery('#bid_amount_30').val());document.getElementById('sbmt_30').style.display='none';document.getElementById('wait_30').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_30" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_31"></b>
                <form name="auktion_32" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_31').style.display='none';document.getElementById('wait_31').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="32">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_31.png?__cv=bf53c2997f855d45a5a9232d566c3600" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Doubles rocket firing speed<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt31">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=32&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt31').style.display='none';$('wait31').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait31" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_31" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_31">
                            <a id="bid_lnk_31" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=32&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_31').attr('href',jQuery('#bid_lnk_31').attr('href')+'&amount='+jQuery('#bid_amount_31').val());document.getElementById('sbmt_31').style.display='none';document.getElementById('wait_31').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_31" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_41"></b>
                <form name="auktion_33" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_32').style.display='none';document.getElementById('wait_32').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="33">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_41.png?__cv=0fbee1ca4e422179df13bc0a46d40900" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Auto-activates a repair robot available<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt32">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=33&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt32').style.display='none';$('wait32').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait32" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_32" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_32">
                            <a id="bid_lnk_32" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=33&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_32').attr('href',jQuery('#bid_lnk_32').attr('href')+'&amount='+jQuery('#bid_amount_32').val());document.getElementById('sbmt_32').style.display='none';document.getElementById('wait_32').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_32" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_61"></b>
                <form name="auktion_35" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_33').style.display='none';document.getElementById('wait_33').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="35">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_61.png?__cv=33997e05ab978e9d0b912116226d8300" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Boosts rockets and lasers with raw materials currently in lab use<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt33">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=35&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt33').style.display='none';$('wait33').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait33" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_33" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_33">
                            <a id="bid_lnk_33" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=35&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_33').attr('href',jQuery('#bid_lnk_33').attr('href')+'&amount='+jQuery('#bid_amount_33').val());document.getElementById('sbmt_33').style.display='none';document.getElementById('wait_33').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_33" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_22"></b>
                <form name="auktion_30" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_34').style.display='none';document.getElementById('wait_34').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="30">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_22.png?__cv=dd0c4c214428f0aa690c0ee3e5fdf500" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6eAt8">Repairs up to 20,000 HP per minute<br>Highest bidder:<span class="userInfoName" title="deaglecfg - click for details"> deaglecfg</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>2,000 U.</strong></span>
                                                    <div id="sbmt34">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=30&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt34').style.display='none';$('wait34').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait34" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_34" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_34">
                            <a id="bid_lnk_34" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=30&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_34').attr('href',jQuery('#bid_lnk_34').attr('href')+'&amount='+jQuery('#bid_amount_34').val());document.getElementById('sbmt_34').style.display='none';document.getElementById('wait_34').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_34" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_71"></b>
                <form name="auktion_39" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_35').style.display='none';document.getElementById('wait_35').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="39">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_71.png?__cv=29eb79fc3508e140e9b4e7ac34b5a600" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">x2 cargo space thanks to molecular compression<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt35">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=39&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt35').style.display='none';$('wait35').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait35" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_35" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_35">
                            <a id="bid_lnk_35" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=39&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_35').attr('href',jQuery('#bid_lnk_35').attr('href')+'&amount='+jQuery('#bid_amount_35').val());document.getElementById('sbmt_35').style.display='none';document.getElementById('wait_35').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_35" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_72"></b>
                <form name="auktion_40" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_36').style.display='none';document.getElementById('wait_36').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="40">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_72.png?__cv=ee4038f7d0de5168ae61abeaf086f200" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">+50% armory capacity<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>5,000 U.</strong></span>
                                                    <div id="sbmt36">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=40&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt36').style.display='none';$('wait36').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait36" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_36" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_36">
                            <a id="bid_lnk_36" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=40&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_36').attr('href',jQuery('#bid_lnk_36').attr('href')+'&amount='+jQuery('#bid_amount_36').val());document.getElementById('sbmt_36').style.display='none';document.getElementById('wait_36').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_36" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_73"></b>
                <form name="auktion_41" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_37').style.display='none';document.getElementById('wait_37').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="41">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_73.png?__cv=4dada05c1d5398045e8785629f0ea300" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">+100% armory capacity<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt37">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=41&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt37').style.display='none';$('wait37').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait37" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_37" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_37">
                            <a id="bid_lnk_37" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=41&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_37').attr('href',jQuery('#bid_lnk_37').attr('href')+'&amount='+jQuery('#bid_amount_37').val());document.getElementById('sbmt_37').style.display='none';document.getElementById('wait_37').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_37" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SPECIAL_63"></b>
                <form name="auktion_46" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_38').style.display='none';document.getElementById('wait_38').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="46">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SPECIAL_63.png?__cv=fd63a9d0c186aa62a3a8ebf630bf4700" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Boosts lasers with raw materials currently in lab use<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>15,000 U.</strong></span>
                                                    <div id="sbmt38">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=46&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt38').style.display='none';$('wait38').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait38" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_38" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_38">
                            <a id="bid_lnk_38" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=46&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_38').attr('href',jQuery('#bid_lnk_38').attr('href')+'&amount='+jQuery('#bid_amount_38').val());document.getElementById('sbmt_38').style.display='none';document.getElementById('wait_38').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_38" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="LASER_4"></b>
                <form name="auktion_18" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_39').style.display='none';document.getElementById('wait_39').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="18">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/LASER_4.png?__cv=c1b37291be60d8d4d7bd256f76277100" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6aq9C">Much stronger laser: Causes up to 150 damage points per round<br>Highest bidder:<span class="userInfoName" title="»ЯєSρ3cŦ«™ - click for details"> »ЯєSρ3cŦ«™</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt39">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=18&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt39').style.display='none';$('wait39').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait39" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_39" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_39">
                            <a id="bid_lnk_39" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=18&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_39').attr('href',jQuery('#bid_lnk_39').attr('href')+'&amount='+jQuery('#bid_amount_39').val());document.getElementById('sbmt_39').style.display='none';document.getElementById('wait_39').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_39" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="LASER_3"></b>
                <form name="auktion_11" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_40').style.display='none';document.getElementById('wait_40').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="11">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/LASER_3.png?__cv=6dd9a7e61a884a67bad3c40ebdf90900" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6aq9C">Strong laser: causes up to 100 damage points per round<br>Highest bidder:<span class="userInfoName" title="»ЯєSρ3cŦ«™ - click for details"> »ЯєSρ3cŦ«™</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>5,000 U.</strong></span>
                                                    <div id="sbmt40">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=11&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt40').style.display='none';$('wait40').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait40" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_40" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_40">
                            <a id="bid_lnk_40" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=11&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_40').attr('href',jQuery('#bid_lnk_40').attr('href')+'&amount='+jQuery('#bid_amount_40').val());document.getElementById('sbmt_40').style.display='none';document.getElementById('wait_40').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_40" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="ROCKET_5"></b>
                <form name="auktion_83" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_41').style.display='none';document.getElementById('wait_41').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="83">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/ROCKET_5.png?__cv=76d8717ab3944fcda7d3d250bc286200" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="4g41l">Each rocket inflicts a max. of 6,000 HP of damage, but has a lower accuracy rate due to its impressive firepower.<br /> An exceptional weapon when used in combination with the Tech Center's precision targeter. (50 units)<br>Highest bidder:<span class="userInfoName" title="eclipsy - click for details"> eclipsy</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>350 U.</strong></span>
                                                    <div id="sbmt41">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=83&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt41').style.display='none';$('wait41').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait41" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_41" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_41">
                            <a id="bid_lnk_41" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=83&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_41').attr('href',jQuery('#bid_lnk_41').attr('href')+'&amount='+jQuery('#bid_amount_41').val());document.getElementById('sbmt_41').style.display='none';document.getElementById('wait_41').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_41" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="ROCKET_3"></b>
                <form name="auktion_12" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_42').style.display='none';document.getElementById('wait_42').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="12">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/ROCKET_3.png?__cv=4913b7d593e9d812b05c4f3eaaf40100" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6eAt8">Long-range rocket: causes up to 4,000 points per rocket fired (50 units)<br>Highest bidder:<span class="userInfoName" title="deaglecfg - click for details"> deaglecfg</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>250 U.</strong></span>
                                                    <a href="JavaScript:void(0)" class="trade_buy_button" onclick="showQuantityManager('rocket');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_42" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_42">
                            <a id="bid_lnk_42" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=12&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_42').attr('href',jQuery('#bid_lnk_42').attr('href')+'&amount='+jQuery('#bid_amount_42').val());document.getElementById('sbmt_42').style.display='none';document.getElementById('wait_42').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_42" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="ROCKET_11"></b>
                <form name="auktion_36" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_43').style.display='none';document.getElementById('wait_43').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="36">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/ROCKET_11.png?__cv=084100df3c5bed4eea0af67e4c4bfd00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Proximity mine: 20% damage upon detonation (50 units)<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>5,000 U.</strong></span>
                                                    <a href="JavaScript:void(0)" class="trade_buy_button" onclick="showQuantityManager('mine');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_43" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_43">
                            <a id="bid_lnk_43" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=36&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_43').attr('href',jQuery('#bid_lnk_43').attr('href')+'&amount='+jQuery('#bid_amount_43').val());document.getElementById('sbmt_43').style.display='none';document.getElementById('wait_43').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_43" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="ORE_4"></b>
                <form name="auktion_13" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_44').style.display='none';document.getElementById('wait_44').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="13">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/ORE_4.png?__cv=b05e4955b7cc2298d5ce88f17b33fa00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Required to create Promerium on your ship and in the Skylab (10 units)<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>100 U.</strong></span>
                                                    <a href="JavaScript:void(0)" class="trade_buy_button" onclick="showQuantityManager('ore');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_44" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_44">
                            <a id="bid_lnk_44" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=13&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_44').attr('href',jQuery('#bid_lnk_44').attr('href')+'&amount='+jQuery('#bid_amount_44').val());document.getElementById('sbmt_44').style.display='none';document.getElementById('wait_44').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_44" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SHIP_8"></b>
                <form name="auktion_16" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_45').style.display='none';document.getElementById('wait_45').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="16">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SHIP_8.png?__cv=f0ccf762bd1439d5c8dae3a7ff410200" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="5sdPm">The best star hunter: There's (almost) nothing for you to fear with this ship!<br>Highest bidder:<span class="userInfoName" title="PЯΣDΛTӨЯ[тüяк] - click for details"> PЯΣDΛTӨЯ[...</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>30,000 U.</strong></span>
                                                    <div id="sbmt45">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=16&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt45').style.display='none';$('wait45').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait45" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_45" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_45">
                            <a id="bid_lnk_45" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=16&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_45').attr('href',jQuery('#bid_lnk_45').attr('href')+'&amount='+jQuery('#bid_amount_45').val());document.getElementById('sbmt_45').style.display='none';document.getElementById('wait_45').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_45" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SHIP_10"></b>
                <form name="auktion_17" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_46').style.display='none';document.getElementById('wait_46').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="17">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SHIP_10.png?__cv=273a3fb5a75d49ac6924d693b81db300" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6eAt8">The ultimate Battlecruiser: The only true ship for pro space pilots!<br>Highest bidder:<span class="userInfoName" title="deaglecfg - click for details"> deaglecfg</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>80,000 U.</strong></span>
                                                    <div id="sbmt46">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=17&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt46').style.display='none';$('wait46').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait46" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_46" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_46">
                            <a id="bid_lnk_46" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=17&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_46').attr('href',jQuery('#bid_lnk_46').attr('href')+'&amount='+jQuery('#bid_amount_46').val());document.getElementById('sbmt_46').style.display='none';document.getElementById('wait_46').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_46" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="SHIP_3"></b>
                <form name="auktion_15" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_47').style.display='none';document.getElementById('wait_47').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="15">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/SHIP_3.png?__cv=4c6b67c03378b27346dee2a640f98000" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6eAp5">The Starjet's top model: Small, maneuverable, but very deadly!<br>Highest bidder:<span class="userInfoName" title="Aurora_$GK - click for details"> Aurora_$GK</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>15,000 U.</strong></span>
                                                    <div id="sbmt47">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=15&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt47').style.display='none';$('wait47').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait47" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_47" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_47">
                            <a id="bid_lnk_47" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=15&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_47').attr('href',jQuery('#bid_lnk_47').attr('href')+'&amount='+jQuery('#bid_amount_47').val());document.getElementById('sbmt_47').style.display='none';document.getElementById('wait_47').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_47" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="DRONE_2"></b>
                <form name="auktion_42" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_48').style.display='none';document.getElementById('wait_48').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="42">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/DRONE_2.png?__cv=25a8acd89e87773888dd7a48f6ad4d00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="69a9f">Power drone with two slots<br>Highest bidder:<span class="userInfoName" title="•••√•ƒОЯ•√eиĐeττλ••• - click for details"> •••√•ƒОЯ•...</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>15,000 U.</strong></span>
                                                    <div id="sbmt48">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=42&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt48').style.display='none';$('wait48').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait48" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_48" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_48">
                            <a id="bid_lnk_48" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=42&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_48').attr('href',jQuery('#bid_lnk_48').attr('href')+'&amount='+jQuery('#bid_amount_48').val());document.getElementById('sbmt_48').style.display='none';document.getElementById('wait_48').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_48" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="BOOSTER_8"></b>
                <form name="auktion_71" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_49').style.display='none';document.getElementById('wait_49').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="71">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/BOOSTER_8.png?__cv=47b6ea9bf6ca878e2d0a05206a844200" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">+10% ship HP; booster is active 10 hours after purchase<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt49">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=71&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt49').style.display='none';$('wait49').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait49" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_49" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_49">
                            <a id="bid_lnk_49" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=71&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_49').attr('href',jQuery('#bid_lnk_49').attr('href')+'&amount='+jQuery('#bid_amount_49').val());document.getElementById('sbmt_49').style.display='none';document.getElementById('wait_49').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_49" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="BOOSTER_3"></b>
                <form name="auktion_66" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_50').style.display='none';document.getElementById('wait_50').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="66">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/BOOSTER_3.png?__cv=828a8826c2ade101dd89f7685838bf00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">+10% damage for all damage inflicted. Booster is active 10 hours after purchase.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt50">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=66&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt50').style.display='none';$('wait50').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait50" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_50" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_50">
                            <a id="bid_lnk_50" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=66&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_50').attr('href',jQuery('#bid_lnk_50').attr('href')+'&amount='+jQuery('#bid_amount_50').val());document.getElementById('sbmt_50').style.display='none';document.getElementById('wait_50').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_50" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="BOOSTER_2"></b>
                <form name="auktion_65" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_51').style.display='none';document.getElementById('wait_51').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="65">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/BOOSTER_2.png?__cv=3ee83a0c5fe740d37b6ce43f5de52700" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6Qa2o">+10% honor; booster is active 10 hours after purchase.<br>Highest bidder:<span class="userInfoName" title="*RØMIØ* - click for details"> *RØMIØ*</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt51">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=65&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt51').style.display='none';$('wait51').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait51" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_51" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_51">
                            <a id="bid_lnk_51" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=65&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_51').attr('href',jQuery('#bid_lnk_51').attr('href')+'&amount='+jQuery('#bid_amount_51').val());document.getElementById('sbmt_51').style.display='none';document.getElementById('wait_51').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_51" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="BOOSTER_4"></b>
                <form name="auktion_67" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_52').style.display='none';document.getElementById('wait_52').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="67">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/BOOSTER_4.png?__cv=19b79bc86d16810b1f7f717bfdd9c100" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="5B6AT">+25% shield power; booster is active 10 hours after purchase.<br>Highest bidder:<span class="userInfoName" title="☆♫ŘΣиΣ♫☆ - click for details"> ☆♫ŘΣиΣ♫☆</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt52">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=67&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt52').style.display='none';$('wait52').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait52" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_52" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_52">
                            <a id="bid_lnk_52" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=67&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_52').attr('href',jQuery('#bid_lnk_52').attr('href')+'&amount='+jQuery('#bid_amount_52').val());document.getElementById('sbmt_52').style.display='none';document.getElementById('wait_52').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_52" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="BOOSTER_1"></b>
                <form name="auktion_64" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_53').style.display='none';document.getElementById('wait_53').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="64">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/BOOSTER_1.png?__cv=b4c1e49fae44dec93d9cf5dfa8fbff00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Gives you a 10% EP bonus. booster is active 10 hours after purchase.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt53">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=64&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt53').style.display='none';$('wait53').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait53" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_53" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_53">
                            <a id="bid_lnk_53" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=64&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_53').attr('href',jQuery('#bid_lnk_53').attr('href')+'&amount='+jQuery('#bid_amount_53').val());document.getElementById('sbmt_53').style.display='none';document.getElementById('wait_53').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_53" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="BOOSTER_5"></b>
                <form name="auktion_68" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_54').style.display='none';document.getElementById('wait_54').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="68">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/BOOSTER_5.png?__cv=edc977033c5a5ce30972f56698fb2c00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="6eAt8">+10% faster ship repairs; booster is active 10 hours after purchase<br>Highest bidder:<span class="userInfoName" title="deaglecfg - click for details"> deaglecfg</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt54">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=68&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt54').style.display='none';$('wait54').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait54" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_54" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_54">
                            <a id="bid_lnk_54" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=68&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_54').attr('href',jQuery('#bid_lnk_54').attr('href')+'&amount='+jQuery('#bid_amount_54').val());document.getElementById('sbmt_54').style.display='none';document.getElementById('wait_54').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_54" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="BOOSTER_6"></b>
                <form name="auktion_69" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_55').style.display='none';document.getElementById('wait_55').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="69">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/BOOSTER_6.png?__cv=113ad4bfc1ec016969637a8cdc41c000" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">+25% shield regeneration speed; booster is active 10 hours after purchase<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt55">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=69&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt55').style.display='none';$('wait55').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait55" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_55" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_55">
                            <a id="bid_lnk_55" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=69&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_55').attr('href',jQuery('#bid_lnk_55').attr('href')+'&amount='+jQuery('#bid_amount_55').val());document.getElementById('sbmt_55').style.display='none';document.getElementById('wait_55').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_55" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="BOOSTER_7"></b>
                <form name="auktion_70" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_56').style.display='none';document.getElementById('wait_56').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="70">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/BOOSTER_7.png?__cv=2aa10266eee2a0aa3c4f677fe9559d00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">The resource booster increases the number of resources from collected NPC cargo boxes by 25%. The booster is active 10 hours after purchase.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>10,000 U.</strong></span>
                                                    <div id="sbmt56">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=70&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt56').style.display='none';$('wait56').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait56" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_56" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_56">
                            <a id="bid_lnk_56" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=70&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_56').attr('href',jQuery('#bid_lnk_56').attr('href')+'&amount='+jQuery('#bid_amount_56').val());document.getElementById('sbmt_56').style.display='none';document.getElementById('wait_56').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_56" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="ROCKETLAUNCHER_12"></b>
                <form name="auktion_74" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_57').style.display='none';document.getElementById('wait_57').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="74">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/ROCKETLAUNCHER_12.png?__cv=484145370dc287b015ac727ec82b0500" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0"><br />This upgraded version of the Hellstorm launcher 1 makes it possible to win the battle before it's even begun. One little rocket makes a world of difference on the battlefield - firing up to 5 rockets, this rocket launcher unleashes a broadside of destruction, giving a whole new meaning to the word firepower. This highly sophisticated piece of weaponry can only be equipped with specially designed rockets.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>15,000 U.</strong></span>
                                                    <div id="sbmt57">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=74&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt57').style.display='none';$('wait57').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait57" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_57" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_57">
                            <a id="bid_lnk_57" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=74&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_57').attr('href',jQuery('#bid_lnk_57').attr('href')+'&amount='+jQuery('#bid_amount_57').val());document.getElementById('sbmt_57').style.display='none';document.getElementById('wait_57').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_57" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="MODEL_53"></b>
                <form name="auktion_63" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_58').style.display='none';document.getElementById('wait_58').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="63">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/MODEL_53.png?__cv=3365860a7968f85fe30e8d5dab8c8800" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">A special design for the Goliath. You can only use it if you already own a Goliath.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>40,000 U.</strong></span>
                                                    <div id="sbmt58">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=63&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt58').style.display='none';$('wait58').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait58" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_58" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_58">
                            <a id="bid_lnk_58" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=63&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_58').attr('href',jQuery('#bid_lnk_58').attr('href')+'&amount='+jQuery('#bid_amount_58').val());document.getElementById('sbmt_58').style.display='none';document.getElementById('wait_58').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_58" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="MODEL_16"></b>
                <form name="auktion_96" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_59').style.display='none';document.getElementById('wait_59').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="96">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/MODEL_16.png?__cv=b885b61c1526b110d42b536f9eb24500" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Looking for more experience points? Then get the new Adept design. It'll give you a 10% bonus on all experience points gained in the game!<br><br>Fly around in this slick design and watch your enemies die with envy!<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>100,000 U.</strong></span>
                                                    <div id="sbmt59">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=96&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt59').style.display='none';$('wait59').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait59" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_59" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_59">
                            <a id="bid_lnk_59" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=96&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_59').attr('href',jQuery('#bid_lnk_59').attr('href')+'&amount='+jQuery('#bid_amount_59').val());document.getElementById('sbmt_59').style.display='none';document.getElementById('wait_59').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_59" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="MODEL_62"></b>
                <form name="auktion_87" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_60').style.display='none';document.getElementById('wait_60').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="87">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/MODEL_62.png?__cv=238c9ccd4cc314029cc052ff46ba3100" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">This new red design will win you 10% more honor points while striking fear into the hearts of your enemies.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>100,000 U.</strong></span>
                                                    <div id="sbmt60">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=87&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt60').style.display='none';$('wait60').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait60" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_60" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_60">
                            <a id="bid_lnk_60" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=87&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_60').attr('href',jQuery('#bid_lnk_60').attr('href')+'&amount='+jQuery('#bid_amount_60').val());document.getElementById('sbmt_60').style.display='none';document.getElementById('wait_60').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_60" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="MODEL_61"></b>
                <form name="auktion_86" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_61').style.display='none';document.getElementById('wait_61').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="86">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/MODEL_61.png?__cv=760b84c97520e2dbcbd45f85ee2c7300" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">A sleek and glossy white design. It'll grant you a 10% bonus on all the experience points you collect!<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>100,000 U.</strong></span>
                                                    <div id="sbmt61">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=86&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt61').style.display='none';$('wait61').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait61" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_61" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_61">
                            <a id="bid_lnk_61" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=86&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_61').attr('href',jQuery('#bid_lnk_61').attr('href')+'&amount='+jQuery('#bid_amount_61').val());document.getElementById('sbmt_61').style.display='none';document.getElementById('wait_61').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_61" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="MODEL_56"></b>
                <form name="auktion_73" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_62').style.display='none';document.getElementById('wait_62').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="73">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/MODEL_56.png?__cv=8c9cf47ee25da69f22c256c5e1326400" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">A 5% damage bonus makes the Enforcer Goliath design a force to be reckoned with and a must for every clan. Its destructive power is revolutionizing the art of warfare - it'll strike terror into the hearts of enemy clans and aliens.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>100,000 U.</strong></span>
                                                    <div id="sbmt62">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=73&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt62').style.display='none';$('wait62').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait62" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_62" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_62">
                            <a id="bid_lnk_62" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=73&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_62').attr('href',jQuery('#bid_lnk_62').attr('href')+'&amount='+jQuery('#bid_amount_62').val());document.getElementById('sbmt_62').style.display='none';document.getElementById('wait_62').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_62" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="MODEL_60"></b>
                <form name="auktion_81" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_63').style.display='none';document.getElementById('wait_63').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="81">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/MODEL_60.png?__cv=73124aefaf90098a48c5988e9e5d8600" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">The Avenger design's 10% extra shield power makes it a must-have in every space battle.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>100,000 U.</strong></span>
                                                    <div id="sbmt63">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=81&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt63').style.display='none';$('wait63').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait63" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_63" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_63">
                            <a id="bid_lnk_63" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=81&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_63').attr('href',jQuery('#bid_lnk_63').attr('href')+'&amount='+jQuery('#bid_amount_63').val());document.getElementById('sbmt_63').style.display='none';document.getElementById('wait_63').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_63" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="MODEL_59"></b>
                <form name="auktion_77" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_64').style.display='none';document.getElementById('wait_64').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="77">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/MODEL_59.png?__cv=81bcf0cf468e9a2e1a21aeabcfdf3b00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Thanks to its 10% shield strength bonus, the Bastion design is the perfect defense in every combat situation. Even the most powerful enemies and aliens will have a hard time taking you down.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>100,000 U.</strong></span>
                                                    <div id="sbmt64">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=77&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt64').style.display='none';$('wait64').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait64" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_64" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_64">
                            <a id="bid_lnk_64" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=77&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_64').attr('href',jQuery('#bid_lnk_64').attr('href')+'&amount='+jQuery('#bid_amount_64').val());document.getElementById('sbmt_64').style.display='none';document.getElementById('wait_64').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_64" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="MODEL_58"></b>
                <form name="auktion_75" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_65').style.display='none';document.getElementById('wait_65').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="75">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/MODEL_58.png?__cv=b70c5422d557fabd187b56e2e2bbeb00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Thanks to its 5% damage bonus, you can count on the Revenge Vengeance design to deal the death blow in any encounter - the kind of advantage that can truly make a difference. This is your best bet for counterattacks on enemy clans or quick alien kills.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>100,000 U.</strong></span>
                                                    <div id="sbmt65">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=75&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt65').style.display='none';$('wait65').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait65" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_65" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_65">
                            <a id="bid_lnk_65" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=75&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_65').attr('href',jQuery('#bid_lnk_65').attr('href')+'&amount='+jQuery('#bid_amount_65').val());document.getElementById('sbmt_65').style.display='none';document.getElementById('wait_65').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_65" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                
                <b id="MODEL_17"></b>
                <form name="auktion_97" action="indexInternal.es" method="post" onsubmit="document.getElementById('sbmt_66').style.display='none';document.getElementById('wait_66').style.display='inline';"><input type="hidden" name="reloadToken" value="c00d7900b277b6915d2fc76c5ed64caa">
                <input type="hidden" name="action" value="internalHandel">
                <input type="hidden" name="subAction" value="bid">
                <input type="hidden" name="bazarID" value="97">
                <tr>
                    <td class="trade_img"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/MODEL_17.png?__cv=c7f6a871054a99b404ab2ab4cea3dd00" width="63" height="63" alt=""></td>
                    <td class="trade_item" showUser="0">Honor to whom honor is due! The impressive Corsair design awards you with an extra 10% honor points earned in the game.<br><br>Earn your just reward for your heroism and get this design.<br>Highest bidder:<span class="userInfoName" title="LaPak88 - click for details"> LaPak88</span></td>
                    <td class="trade_buy">
                        <span class="trade_buy_price fliess11px-gelb"><strong>100,000 U.</strong></span>
                                                    <div id="sbmt66">
                                <a href="indexInternal.es?action=internalHandel&subAction=buy&bazarID=97&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" class="trade_buy_button_submit" onclick="$('sbmt66').style.display='none';$('wait66').style.display='block';"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_sofortkauf.gif?__cv=3c9a8138dbadda854098c54040760c00" width="102" height="18" alt="Buy now"></a></div>
                                <div id="wait66" class="trade_buy_button_wait" style="display:none;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/b_bitte_warten_handel.jpg?__cv=8a7ce701a763b606066671d07c6db200" width="102" height="18"></a></div>
                                            </td>
                    <td class="trade_bid">
                        <input id="bid_amount_66" type="text" name="amount" class="trade_bid_price fliess11px-gelb"><br>
                        <div id="sbmt_66">
                            <a id="bid_lnk_66" href="indexInternal.es?action=internalHandel&subAction=bid&bazarID=97&reloadToken=c00d7900b277b6915d2fc76c5ed64caa" onclick="jQuery('#bid_lnk_66').attr('href',jQuery('#bid_lnk_66').attr('href')+'&amount='+jQuery('#bid_amount_66').val());document.getElementById('sbmt_66').style.display='none';document.getElementById('wait_66').style.display='inline';">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/en/handel/b_bieten.gif?__cv=ac1419c1d7ef687e6daa80da96645400" class="trade_bid_button_submit">
                            </a>
                        </div>
                        <img id="wait_66" class="trade_bid_button_wait" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/trade/b_bieten_wait.gif?__cv=0755c137dcb3d0a7767084afe6af1200">
                                            </td>
                </tr>
                </form>
                <tr>
                    <td colspan="5" class="trade_separator_horizontal"></td>
                </tr>
                                </table>
            </div>
        </div>
        <!-- Ende Content -->
    </div>

    <script>
        jQuery(document).ready(function(){
            misc.initialiseScrollBar();
            jQuery('#liveQuery').remove();
        });
        window.setInterval('counterTimer();', 1000);
    </script>


<div class="footerContainer">

<div id="alertBox" class="fliesstext"></div>
<div id="imprint" style="width:523px;height:600px;" class="fliesstext">
    <div id="imprint_close"><a href="javascript:void(0);" onclick="closeInfo('imprint');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/intro/but_close.png?__cv=4addfeeb6d889c0632072f85386d1900" alt="" /></a></div>
    <div id="imprint_text"><b>Bigpoint S.à.r.l. and Co, SCS</b><br>Building Vertigo - Polaris<br>2-4 rue Eugène Ruppert<br>L-2453 Luxemburg<br><br><b>Our business portal</b><br><a class="" href="http://www.bigpoint.net" target="_blank">http://www.bigpoint.net</a><br><br><b>Corporate information</b><br>CEO: Bigpoint S.à.r.l.<br>Jeronimo Folgueira<br>Court of registry: R.C.S. Luxemburg<br>Trade register number: B 167809<br>VAT number: LU 25331016<br><br><b>Disclaimer</b><br>Although every effort is made to present current and accurate information, we cannot assume responsibility for information from external links. The author of each web page is solely responsible for the content of that page.<br><br><b>Contact</b><br>Telephone <b>(no Support)</b>: +352 261 911 3515<br>Fax: +352 49 48 48 6606<br><br><b>Questions or problems? Contact Support</b><br>E-mail: <a class="gl_imprint_support_link" href="/index.es?action=support">Support form</a><br>Internet: http://www.bigpoint.com<br><br><b>Commissioner for Youth Protection</b><br>Lawyer Dr. Andreas Lober<br>SCHULTE RIESENKAMPFF Rechtsanwaltsgesellschaft mbH<br />An der Hauptwache 7<br />60313 Frankfurt am Main<br>E-mail: jugendschutzbeauftragter@bigpoint.com<br><br><b>Data protection officer</b><br>E-mail: privacy@bigpoint.net<br><a style="text-decoration: underline" class="" href="/index.es?action=info&subAction=privacyPolicy" target="_blank">Data Privacy Policy</a></div>
</div>
<div id="teamCreditsBox" style="height:600px;" class="fliesstext">
    <div id="teamCredits_close"><a href="javascript:void(0);" onclick="closeInfo('teamCreditsBox');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/intro/but_close.png?__cv=4addfeeb6d889c0632072f85386d1900" alt="" /></a></div>
    <div id="container_teamcredits" style="height: 528px;">
        <div id="teamCredits_text">

            <ul id="main">
                <li id="head"></li>
                <li id="description">The action-packed Space MMO for your browser</li>
                <li id="producers">
                    <ul>
                        <li id="pr title">Producer</li>
                        <li>Savas Ziplies<li>
                        <li>Matthew <i>"\-Sephiroth-/"</i> Milligan</li>
                    </ul>
                </li>
                <li id="pm">
                    <ul>
                        <li id="pm title">Project Manager</li>
                        <li>Johannes Wieland</li>
                    </ul>
                </li>
                <li id="gd">
                    <ul>
                        <li id="gd title">Game Design</li>
                        <li>Benjamin <i>"Radovan8"</i> Cory</li>
                        <li>Jonathan Lindsay</li>
                    </ul>
                </li>
                <li id="dev">
                    <ul>
                        <li id="dev title">Development</li>
                        <li>
                            <ul id="table1">
                                <li id="table1_col1">
                                    <ul id="dev1">
                                        <li>Jürgen <i>"Joncek"</i> Frerichs</li>
                                        <li>Erik Haddenhorst</li>
                                        <li>Christian <i>"krischan"</i> Franke</li>
                                        <li>Sebastian <i>"afriend"</i> Trier</li>
                                        <li>Oliver <i>"Pakkanen"</i> Michels</li>
                                        <li>Tim Balzer</li>
                                    </ul>
                                </li>
                                <li id="table1_col2">
                                    <ul id="dev2">
                                        <li>Stephan <i>"bananajoe"</i> Krause</li>
                                        <li>Sebastian <i>"luttz"</i> Jauert</li>
                                        <li>Dennis <i>"nop0x90"</i> Bikowski</li>
										<li>Maciej <i>"maac1"</i> Kozlowski</li>
                                    </ul>
                                </li>
                                <li id="table1_col3">
                                    <ul id="dev3">
                                        <li>Thomas <i>"Pogrim"</i> Garschke</li>
                                        <li>Dennis Kopp</li>
                                        <li>Ronny Gericke</li>
                                        <li>Vicens Fayos</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <div class="clearMe"></div>
                <li id="graphics">
                    <ul>
                        <li id="graphic title">Graphics</li>
                        <li>Young-il Shim</li>
                        <li>Marko Vajagic</li>
                        <li>Ivan Kantarovich</li>
                    </ul>
                </li>
                <li id="qa">
                    <ul>
                        <li id="qa title">Quality Assurance</li>
                        <li>Kathrin <i>"..Lysi.."</i> Schulte</li>
                        <li>Fryderyk <i>"The*End*is*Nigh"</i> Bannasch</li>
                        <li>Annemieke <i>"Ripley"</i> Böhm</li>
                        <li>Siegfried Jensen</li>
                    </ul>
                </li>
                <li id="cm">
                    <ul>
                        <li id="cm title">Community Management</li>
                        <li>Jan Lamely</li>
                        <li>Dang-Stefan La Hong</li>
                    </ul>
                </li>
                <li id="interns">
                    <ul>
                        <li id="interns title">Interns</li>
                        <li>Mustafa Kaan Tanrisever</li>
                        <li>Lian <i>"The Case"</i> Li</li>
                    </ul>
                </li>
                <li id="thanks">
                    <ul>
                        <li id="thanks title">Special thanks to</li>
                        <li>
                            <ul id="table2">
                                <li id="table2_col1">
                                    <ul id="thanks1">
                                    	<li>Christopher <i>"chr1zm0"</i> Baumbach</li>
                                        <li>Terence <i>"harle80"</i> Viban</li>
                                        <li>James Valadas Marques</li>
										<li>Serdar <i>"mcballi75"</i> Balli</li>
                                        <li>Ralf Baumann<li>
										<li>Christian <i>"Guezli"</i> Oberle</li>
										<li>Mathias <i>"mblpz"</i> Böttcher</li>
										<li>Stephan Scholz</li>
										<li>Nurdogan <i>"bomfirit"</i> Erdem</li>
										<li>Roman Fuhrer</li>
                                        <li>Maik <i>"Shiznik"</i> Jefferies</li>
                                    </ul>
                                </li>
                                <li id="table2_col2">
                                    <ul id="thanks2">
                                    	<li>David <i>"redgeneral"</i> Kempf</li>
                                        <li>Jens Christian Beyer</li>										
										<li>Maximilian Mantz</li>
                                        <li>Ron <i>"joenase"</i> Zenczykowski</li>
										<li>Wolfgang Timme</li>                                        
                                        <li>Florian Liss</li>
                                        <li>Alexander <i>"DM47"</i> Stein</li>                                        
										<li>Marco <i>"BPHorst"</i> Geweke</li>
                                        <li>Christian Godorr</li>
                                        <li>Jonathan <i>"rushworth10"</i> Rushworth</li>
                                        <li>Dirk Schmidt</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div> <!--text -->
    </div> <!-- container -->
</div>

<script type="text/javascript" id="sourcecode">

    jQuery(function()
    {
        jQuery('#teamCredits_text').jScrollPane({autoReinitialise: true, showArrows: true});
    });

</script>

    <div id="imprint_ingame" class="fliesstext">
        <a href="javascript:void(0);" onclick="showFooterLayer('imprint');">
            Legal information</a> |
                <a href="javascript:void(0);" onclick="showFooterLayer('teamCreditsBox')">Credits</a> |
        <a href="/GameAPI.php?action=portal.redirectToBoard" target="_blank">Forum</a>
    </div>





    <div id="banner-bottom" align="center">
    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=4&source=country%3DIT%26areaID%3Dinternal.trade%26aid%3D332%26acm%3D%26acr%3D579%26aip%3D%26gameID%3D579%26uid%3D98026209%26locale%3Dus&sign=VjHQPZZRkVg2JbV1Y7FViPJciuoJ1HCqU%2BP8qv6x"></script>    </div>
</div><!-- End footerContainer -->
</div><!-- End bodyContainer -->
</div><!-- End outerContainer -->
</div><!-- End overallContainer -->
</div>




<!-- affiliateEndTag -->
<!-- SEMGOOGLE RTPixel START --><!-- Google Code for DO All Visitors Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 987297406;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "666666";
var google_conversion_label = "jcNlCILztAIQ_uzj1gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/987297406/?label=jcNlCILztAIQ_uzj1gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- SEMGOOGLE RTPixel END --><!-- SensorT-Bigpoint - Page View - START -->
<script type="text/javascript" language="JavaScript" src="https://akimu.bigpoint.com/trk?rt=1&ti=3547&cs=8377&aid=332&aip=&pid=579&ppid=22&language=en&country=IT&ctype=0&ts=1368800720&mid=151430678&jsopenclose=false"></script>
<!-- SensorT-Bigpoint - Page View - END -->

<!-- SensorT-Bigpoint - SEA-SEO Pageview - START -->
<script type="text/javascript">
(function() {
var s = null, sp = null, se = null, st = null, r = document.referrer, res = null; 
if (!r) return;
if (r.indexOf("google") >= 0) {
se = "google"; sp = "q";
} else if (r.indexOf("bing") >= 0) {
se = "bing"; sp = "q";
} else if (r.indexOf("yahoo") >= 0) {
se = "yahoo"; sp = "p";
} else {
return;
}
var idx = r.indexOf("?") + 1;
if (idx > 0) {
var p = r.substr(idx).split("&");
for (var i = 0; i < p.length; i++) {
var kv = p[i].split("=");
if (kv[0] == sp) {
s = kv[1];
} else if (se == "google" && kv[0] == "url") {
st = "seo";
} else if (se == "google" && kv[0] == "adurl") {
st = "sea";
}
if (s && st) {
break;
}
}
}
if (s) {
res = '<scr' + 'ipt type="text/javascript" src="http://akimu.bigpoint.com/trk?rt=1&ti=3549&cs=5764&aid=332&aip=&pid=579&ppid=22&language=en&country=IT&ctype=0&ts=1368800720&searchQuery=' + s;
}
if (res && st) {
res = res + "&searchType=" + st;
}
if (res) {
res = res + "&ts=" + new Date().getTime() + '"></scr' + "ipt>";
document.write(res);
if (st && st == "seo" && 1) {
document.write('<scr' + 'ipt type="text/javascript" src="http://akimu.bigpoint.com/ads?rt=2&et=35&se=m&bi=[bookedInsertionId]&cs=[cs]&ev=' + s + '&ts=' + new Date().getTime() + '"></scr' + 'ipt>');
}
}
})();
</script>
<!-- SensorT-Bigpoint - SEA-SEO Pageview - END --><!-- BPID --><script language="javascript">window.bpid=window.bpid||{};window.bpid.callbacks=window.bpid.callbacks||[];window.bpid.callbacks.push(function(bpid) {document.cookie="__bpid="+bpid+";path=/;expires=Fri, 03 Jun 2022 13:59:24 GMT;";if (bpid != "518691273uWkiotnZMSa6qYesuCcJmDB") {try {var xhr = new XMLHttpRequest();xhr.open("GET", "\/GameAPI.php?action=core.bpid&bpid="+bpid, true);xhr.send(null);} catch(e) {}}});</script><script language="javascript" src="//assets.bpsecure.com/bpid/bpid.js?ts=380222" defer="defer"></script><!-- /BPID --><script type="text/javascript">var _gaq = _gaq || [];_gaq.push(['_gat._anonymizeIp']);_gaq.push(['_setDomainName', 'none']);_gaq.push(['_setAllowLinker', true]);_gaq.push(['_setAllowHash', false]);_gaq.push(['_setCustomVar', 1, 'aid', '332', 2]);_gaq.push(['_setCustomVar', 2, 'aip', '', 2]);_gaq.push(['_setCustomVar', 3, 'ait', 'keyword', 2]);_gaq.push(['_setCustomVar', 4, 'areaID', 'internal.trade', 2]);_gaq.push(['_setAccount', 'UA-1848713-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalHandel&areaID=internal.trade']);_gaq.push(['_trackPageLoadTime']);_gaq.push(['_setAccount', 'UA-17685913-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalHandel&areaID=internal.trade']);_gaq.push(['_trackPageLoadTime']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = 'http://www.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>

<!-- SZM VERSION="1.5" -->
<script type="text/javascript">
<!--
var IVW="http://bigpoint.ivwbox.de/cgi-bin/ivw/CP/5201gamecont;/spiele/darkorbit";
document.write("<img src=\""+IVW+"?r="+escape(document.referrer)+"&d="+(Math.random()*100000)+"\"width=\"1\" height=\"1\" alt=\"\" />");
//-->
</script>
<noscript>
<img src="http://bigpoint.ivwbox.de/cgi-bin/ivw/CP/5201gamecont;/spiele/darkorbit";
width="1" height="1" alt="" />
</noscript>
<!-- /SZM -->




<script type="text/javascript">
    
    if (jQuery('#toolbar').length > 0) {
        jQuery('#toolbar').css('float', 'none');
        jQuery('body').css('background-position', 'center 30px');
    }
    
</script>
<link rel="stylesheet" type="text/css" href="http://darkorbit-22.ah.bpcdn.net/resources/css/popup.css?__cv=4e58da2dec4df33ee5f4c239848dda00" />
<div id="popup">
    <div class="header">
        <div class="button-close"></div>
    </div>
    <div class="body">
        <div class="icon icon-question"></div>
        <div class="icon icon-error"></div>
        <div class="icon icon-success"></div>
        <div class="content fliess13px-grey"></div>
    </div>
    <div class="footer single-button">
        <div class="button button-green">
            <div class="text" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey);"></div>
        </div>
        <div class="button button-blue">
            <div class="text" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?s=12&t=confirmBox_cancel&f=eurostyle_thea&color=white&bgcolor=grey);"></div>
        </div>
    </div>
</div>
<div id="popup-modalBackground"></div>
<img id="popup-loading" alt="Loading..." src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/profilePage/loadingAnimation.gif" />

<!-- LayertoolService JavaScript Injection start -->
<script type="text/javascript">
    //<![CDATA[
    // add fancybox css to the head
    var cssLink  = document.createElement('link');
    cssLink.type = 'text/css';
    cssLink.rel  = 'stylesheet';
    cssLink.href = 'http://lts-920.ah.bpcdn.net/application/fancybox/jquery.fancybox-1.3.4.css';
    document.getElementsByTagName('head')[0].appendChild(cssLink);
    //]]>
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="http://lts-920.ah.bpcdn.net/application/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="http://lts-920.ah.bpcdn.net/application/client/client.js"></script>
<script type="text/javascript" src="http://lts-920.ah.bpcdn.net/application/cookie/jquery.cookie.js"></script>
<script type="text/javascript">var jQueryLts = jQuery.noConflict(true);</script>
<script type="text/javascript">
    //<![CDATA[
    jQueryLts('document').ready(function() {
        try {
            var serviceLinks = ['http://lts-920.ah.bpcdn.net/579/us/IT/-14400/332','http://lts-920.ah.bpcdn.net/email/579/us'];
            var paymentURL   = 'https://ssl.bigpoint.net/billing/?req=YToxMjp7czo2OiJ1c2VySUQiO3M6ODoiOTgwMjYyMDkiO3M6ODoidXNlcm5hbWUiO3M6ODoiemlvcGlvNzAiO3M6ODoibWVtYmVySUQiO3M6OToiMTUxNDMwNjc4IjtzOjQ6ImJwaWQiO3M6MzI6IjUxODY5MTI3M3VXa2lvdG5aTVNhNnFZZXN1Q2NKbURCIjtzOjc6InVzZXJBZ2UiO2k6NDM7czoxNDoiZmJfYXBwbGljYXRpb24iO2I6MDtzOjk6InByb2plY3RJRCI7czozOiI1NzkiO3M6MzoiYWlkIjtpOjMzMjtzOjM6ImFpcCI7czowOiIiO3M6NDoibGFuZyI7czoyOiJlbiI7czozOiJkZXYiO2I6MDtzOjQ6InRpbWUiO2k6MTM2ODgwMDcxOTt9&aid=332&aip=&hash=8fc96a0dc266653339353e6f36ad6798';
            BPLayertool2.Helper.setPaymentLink(paymentURL);
            BPLayertool2.Helper.setUserId(98026209);
            BPLayertool2.Helper.setRequestTime(1368800719);
            BPLayertool2.Helper.setServices(serviceLinks);
            BPLayertool2.JSONPRequest.setRequestURL(serviceLinks[0]);
            BPLayertool2.JSONPRequest.doRequest(BPLayertool2.LayerView.prepareView);
        } catch (Exception) {
            if (true === Boolean(console.log)) {
                console.log(Exception);
            } else {
                throw Exception;
            };
        }
    });
    //]]>
</script>
<!-- LayertoolService JavaScript Injection end -->


</body>
</html>

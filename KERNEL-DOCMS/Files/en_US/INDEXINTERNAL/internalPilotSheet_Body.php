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
                                                    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=6&source=country%3DIT%26areaID%3D%26aid%3D332%26acm%3D%26acr%3D579%26aip%3D%26gameID%3D579%26uid%3D98026209%26locale%3Dus&sign=VjHIOpZRWhoo6q57uQW9503ia7aYFx1JBPqaU7qr"></script>
                                            </div>
            <!-- end notrans -->
                </div>
        <div class="outerContainer fliess11px-gelb">
            
                                    <div id="header_intern">
                
                <div id="header_branding">
                    <img id="PartnerCobrandLogo" src="http://pit-835.a.bpcdn.net/published/cobrands/0_22_3.png" />
                </div>

                                    <div id="header_ship" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/header/ships/model<?php echo $Users->DataRow['shipId']; ?>.png)"></div>
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

                        <a class="header_big_btn header_lft_big header_current" id="profile_btn" href="/indexInternal.es?action=internalPilotSheet">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_pilotsheet&f=eurostyle_tbla&color=black&bgcolor=skyBlue&h=21" />
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

                            <a class="header_std_btn header_rgt_std" id="trade_btn" href="/indexInternal.es?action=internalHandel">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_trade&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" />
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
                        <a id="header_uri" class="header_money"  href="/indexInternal.es?action=internalPayment"   onclick="openExternal('/?action=internalPaymentProxy&req=735ab7c1ec685429613428bd943a0aea0397f037a94e1989c3d2324152b90803733dbe3a0cb51729598e9eab6294d3d003556f66454f2088ecb51587efaa95ae&v=64d9a0d0b592b387');" >
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
                                <div class="frameTop"></div>
                <div class="frameLeft_top"></div>
                <div class="frameRight_top"></div>
                <div class="contentFrame">
                    <div class="realContainer">
                                                
<link type="text/css" href="http://darkorbit-22.ah.bpcdn.net/css/jQuery/jquery.jscrollpane.css?__cv=9af65d2e9c92153b72e7289186102900" rel="stylesheet" media="all" />
<link type="text/css" href="http://darkorbit-22.ah.bpcdn.net/css/scrollbar_dark.css?__cv=7e1d0121e9bb277d63bfa0c8f5326900" rel="stylesheet" media="all" />
<form id="pppHiddenForm"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
    <input name="inviteLogCount"  id='inviteLogCount' type="hidden" value="0"/>
</form>

<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/internalAchievement.css?__cv=dcf3eb367df137519ee71ec4c6132200" />

<style  type="text/css">
.tabLabel1Active {
background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_profile&f=eurostyle_thea&color=black&bgcolor=grey1);
    background-repeat:no-repeat;
    background-position: center;
}

.tabLabel1InActive {
background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_profile&f=eurostyle_thea&color=white&bgcolor=grey);
    background-repeat:no-repeat;
    background-position: center;
}
.tabLabel2Active {
background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_archievements&f=eurostyle_thea&color=black&bgcolor=grey1);
    background-repeat:no-repeat;
    background-position: center;
}
.tabLabel2InActive {
background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_archievements&f=eurostyle_thea&color=white&bgcolor=grey);
    background-repeat:no-repeat;
    background-position: center;
}
.tabLabel3Active {
background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_skilltree&f=eurostyle_thea&color=black&bgcolor=grey1);
    background-repeat:no-repeat;
    background-position: center;
}
.tabLabel3InActive {
background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_skilltree&f=eurostyle_thea&color=white&bgcolor=grey);
    background-repeat:no-repeat;
    background-position: center;
}
.tabLabel4Active {
background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_invites_and_bonus&f=eurostyle_thea&color=black&bgcolor=grey1);
    background-repeat:no-repeat;
    background-position: center;
}
.tabLabel4InActive {
background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_invites_and_bonus&f=eurostyle_thea&color=white&bgcolor=grey);
    background-repeat:no-repeat;
    background-position: center;
}
</style>

<div id="busyLayerPilotSheet"></div>
<div id="profilePage">
    <div  id="navBarProfile">
        <div id="tabButton1" class="tabButtonActive"
             onmouseover="buttonHandler.toggleButtons('tabButton1', 'tabButton', 'tabLabel1')"
             onmouseout="buttonHandler.toggleButtons('tabButton1', 'tabButton', 'tabLabel1', 'tabLabel')"
             onclick ="buttonHandler.clickedTabButton('tabButton1', 4, 'tabButton', 'tabLabel1', 'tabLabel', 'tabLabelProfile'); pilotSheet.handleProfilePage('pageContent', 'profilePage');">
            <div id="tabLabel1" class="tabLabel tabLabel1Active"></div>
        </div>
            <div id="tabButton2" class="tabButtonInActive"
             onmouseover="buttonHandler.toggleButtons('tabButton2', 'tabButton', 'tabLabel2')"
             onmouseout="buttonHandler.toggleButtons('tabButton2', 'tabButton', 'tabLabel2', 'tabLabel')"
             onclick ="buttonHandler.clickedTabButton('tabButton2', 4, 'tabButton', 'tabLabel2', 'tabLabel', 'tabLabelAchievements'); pilotSheet.handleAchievementPage('pageContent', 'achievementPage');">
            <div id="tabLabel2" class="tabLabel tabLabel2InActive"></div>
        </div>
            <div id="tabButton3" class="tabButtonInActive"
             onmouseover="buttonHandler.toggleButtons('tabButton3', 'tabButton', 'tabLabel3')"
             onmouseout="buttonHandler.toggleButtons('tabButton3', 'tabButton', 'tabLabel3', 'tabLabel')"
             onclick ="buttonHandler.clickedTabButton('tabButton3', 4, 'tabButton', 'tabLabel3', 'tabLabel', 'tabLabelSkilltree'); pilotSheet.handleSkilltree('showSkilltree');" >
            <div id="tabLabel3" class="tabLabel tabLabel3InActive"></div>
        </div>
        <div id="tabButton4" class="tabButtonInActive"
             onmouseover="buttonHandler.toggleButtons('tabButton4', 'tabButton', 'tabLabel4')"
             onmouseout="buttonHandler.toggleButtons('tabButton4', 'tabButton', 'tabLabel4', 'tabLabel')"
             onclick ="buttonHandler.clickedTabButton('tabButton4', 4, 'tabButton', 'tabLabel4', 'tabLabel', 'tabLabelInvite'); setImgUrl('imgUrl', ''); inviteIncentives.handleIncentives('showIncentivePage', 'inviteInfoPopup');" >
            <div id="tabLabel4" class="tabLabel tabLabel4InActive"></div>
        </div>
    </div>
    <div id="pageContent"><form id="profileStuff"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
    <input name="friendRequestCount" type="hidden" value="0"/>
</form>
<div id="pageControl">
<div id="ppLeft">
    <div id="ppLeftTop">
        <div id="ppLeftTopImage" class=" resizeProfileImage">
            <img class="profilePic" src="http://do-usr-strg.bpcdn.net/Darkorbit/ProfilePics/Avatar/Default/avatar.jpg"/>
        </div>
        <div id="ppLeftTopName" class="profileTitleFont">Name
            <br/><span class="profilePageFont"><?php echo $Users->DataRow['Name']; ?></span><br/>
        </div>
    </div>
    <div id="ppHorSep1" class="ppHorizontalSeparator"></div>
    <div id="ppLeftMiddle">
        <div id="ppLeftMiddleTitle" class="profileTitleFont">Player stats</div>
        <div class="scroll-pane" style="height: 75px; width: 180px;">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td class="profilePageFont profilePageFontTitle" style="width: 38%"  title="User since:">User since:</td>
                    <td class="profilePageFont" style="width: 62%">01-05-2013</td>
                </tr>
                <tr>
                    <td class="profilePageFont profilePageFontTitle" style="width: 38%"  title="Player activity:">Player activity:</td>
                    <td class="profilePageFont" style="width: 62%">0 hours</td>
                </tr>
                <tr>
                    <td class="profilePageFont userInfo_right profilePageFontTitle"
                        style="width: 41%"  title="Rank:">Rank:</td>
                    <td class="profilePageFont" style="width: 59%;">
                        <div style="padding-left: 22px; width:100px; background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/ranks/rank_1.png?__cv=d0d033082e6f5947dab73f9be6f13300); background-repeat: no-repeat;position:relative; left: -10px;height: 16px;margin-top: 4px;"
                             title="Basic Space Pilot">
                            <nobr>Basic Space Pilot</nobr>
                        </div>
                    </td>
                </tr>
                            <tr>
                    <td class="profilePageFont profilePageFontTitle" style="width: 38%"  title="Ranking:">Ranking:</td>
                    <td class="profilePageFont" style="width: 62%">9,204</td>
                </tr>
                        </table>
        </div>
    </div>
    <div id="ppHorSep2" class="ppHorizontalSeparator"></div>
    <div id="ppLeftBottom">
        <div id="ppLeftTopBottomTitle" class="profileTitleFont">Clan stats</div>
        <table cellpadding="0" cellspacing="0" style="width: 100%">
                    <tr>
                <td class="profilePageFont">None available</td>
            </tr>
                    </table>
    </div>
</div>
<div id="ppVerSep1" class="ppVerticalSeparator"></div>

<div id="ppMiddle">
    <div id="ppMiddleTop">
        <div id="ppMiddleTitle" class="profileTitleFont">Player info</div>
        <div style="width: 290px; height: 110px;" class="scroll-pane">
            <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                    <td class="profilePageFont profilePageFontTitle minDistance">Country:</td>
                                            <td class="profilePageFont maxDistance">No info provided</td>
                                    </tr>
                                <tr>
                    <td class="profilePageFont profilePageFontTitle minDistance"
                        style="width: 25%">City:</td>
                                    <td class="profilePageFont maxDistance">No info provided</td>
                                    </tr>
                <tr>
                    <td class="profilePageFont profilePageFontTitle">Age:</td>
                                    <td class="profilePageFont maxDistance">No info provided</td>
                                </tr>
                <tr>
                    <td class="profilePageFont profilePageFontTitle minDistance">Gender:</td>
                                    <td class="profilePageFont maxDistance">No info provided</td>
                                </tr>
                <tr>
                    <td class="profilePageFont profilePageFontTitle minDistance">Interests:</td>
                                    <td class="profilePageFont maxDistance">No info provided</td>
                                    </tr>
                <tr>
                    <td class="profilePageFont profilePageFontTitle minDistance">Contact:</td>
                                                    </tr>
            </table>
        </div>
        <form id="statsMessForm"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
            <input id="statsMessDiv" name="statsMess" type="hidden" value="">
        </form>
        <div id="ppMiddleStatus">
            <div id="ppLeftMiddleStatusTitle" class="profileTitleFont">Status</div>
            <div class="statMessTextarea">
                <form id="statusMessageForm" name="statusMessageForm" action="imgUpload.php" method="POST" enctype="multipart/form-data" target="uploadTarget"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
                    <input id="changeStatusMessage" type="hidden" name="changeStatusMessage" value="no">
                    <textarea id="statusTextbox" name="statusMessage" cols="31" rows="3"
                              value="" onKeyDown="misc.limitTextSize(this, 175);"
                              onKeyUp="misc.limitTextSize(this, 175);"></textarea>
                </form>
            </div>
            <br/>
        </div>
        <div id="ppMiddleStatusEdit">
            <div id="editStatsSuccessMess"
                 class="editStats editStatsMessSuccess hideStatus">Changes accepted</div>
            <div id="editStatsFailedMess"
                 class="editStats editStatsMessFailed hideStatus">No changes made</div>
        </div>
        <div class="profileLinks profileLinksMiddle profileLinksHeight"
             onclick="pilotSheet.upLoadStatusMessage();">
        Save</div>
        <div id="ppHorSepBig" class="ppHorizontalSeparatorBig"></div>

        <div id="ppMiddleTopEdit">
            <div class="profileLinksMiddle profileEditButton profileEditButtonEffects"
                 onclick="pilotSheet.handleProfileEditForm('pageControl','pageContent', 'pageContent', 'show')">
                <div class="profileEditButtonLabel">EDIT PROFILE</div></div>
            <div id="editStatsSuccessProfile"
                 class="editStats hideStatus editStatsSuccessProfile">Changes accepted</div>
            <div id="editStatsFailedProfile"
                 class="editStats hideStatus editStatsFailedProfile">No changes made</div>
        </div>

        <div id="externalPPPLinkDialog" class="externalPPPLinkDialog profileEditButton showStatus"
             onclick="inviteIncentives.handleIncentives('showInfoLayer', 'userProfileInfoPopup');">
            <div class="epppLinkLabel"> YOUR PILOT PROFILE</div>
        </div>
    </div>
</div>
<div id="ppVerSep2" class="ppVerticalSeparator"></div>
<div id="ppRight">
    <div class="stationEarth"></div>
    </div>

<script>
    jQuery(document).ready(function(){
        inviteIncentives.initialiseScrollBar();
        
                    
    });
</script>

</div>
</div></div>
<form id="inviteInfoForm"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
    <input id="inviteInfoInfo" name="inviteInfo" type="hidden" value="">
</form>
<div id="bgMask" class="bgMask hidePopUpMask"></div>
<div id="pppAjaxLoaderMask" class="pppAjaxLoaderMask"></div>
<div id="pppAjaxLoader" class="pppAjaxLoader"></div>
</div>
    <div class="infoLayerContainer">
    <div id="inviteInfoPopup" class="inviteInfoPopup hideinviteInfoPopup">
        <div class="inviteInfoPopupHeader">
            <div class="infoLayerHeaderIcon"></div>
            <div class="infoLayerHeaderText inviteInfoLayerHeaderText">Invite your friends to DarkOrbit and receive rewards</div>
            <div id="closePopupHeader" class="closeInfoLayer closeInviteInfoLayer closeButtonInActive"
                 onmouseover = "buttonHandler.toggleCloseButton('closePopupHeader', 'closeButton');"
                 onmouseout = "buttonHandler.toggleCloseButton('closePopupHeader', 'closeButton');"
                 onclick="inviteIncentives.handleIncentives('closeInfoLayer', 'inviteInfoPopup');">
            </div>
        </div>
        <div class="infoLayerBodyWhole">
            <div class="infoLayerBodyHeader">Here's how it works:</div>
            <ul class="inviteInfoList">
                <li class="rewardList">Invite your friends to DarkOrbit</li>
                <li class="rewardList">Receive a reward for each friend you invite who registers and reaches at least level 7.</li>
                <li class="rewardList">Recruit 5, 10 or 25 friends and get even greater rewards for your loyalty!</li>
                <li class="verticalSpace1"></li>
            </ul>

            <div class="inviteInfoPopupBodyHeader">Your bonus for recruiting 25 friends</div>
            <ul class="inviteInfoList" style="width: 50%">
                <li class="rewardList">Inviting 25 friends or more will get you many rewards, including this unique Goliath design that you won't be able to get in the hangar! </li>
                <li class="rewardList">Invite your friends now to get this awesome design and many more rewards! </li>
                <li class="verticalSpace1"></li>
            </ul>
            <div class="goliathDesign"></div>
        </div>
        <div class="infoLayerFooter">
            <form id="inviteInfoDisplayOpton" name="inviteInfoDisplayOpton" action=""><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
                <div id="inviteInfoCheckBoxContainer">
                    <span class="editFormLabelFont inviteInfoCheckLabel"> Never show again </span>
                    <div class="inviteInfoCheckBox">
                                                <input type="checkbox" name="inviteInfoCheckbox" id="inviteInfoCheckbox" size="30" value="invite"/>
                    </div>
                </div>
            </form>
            <div id="closePopup" class="closePopup"
                 onclick="inviteIncentives.handleIncentives('closeInfoLayer', 'inviteInfoPopup');">
            Close
            </div>
        </div>
    </div>
</div><div class="infoLayerContainer">
<div id="editFormProfileAll">

<div id="closeButtonEdit" class="closeButtonEdit closeButtonInActive"
     onmouseover="buttonHandler.toggleCloseButton('closeButtonEdit', 'closeButton')"
     onmouseout="buttonHandler.toggleCloseButton('closeButtonEdit', 'closeButton')"
     onclick="pilotSheet.handleProfilePage('closeButton', 'closeEditProfile')">
</div>

<div id="editFormProfile">
<form id="editForm" name="editForm" action="imgUpload.php" method="POST" enctype="multipart/form-data" target="uploadTarget"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
<input id='day_00' type="hidden" name="day_00" value="17"/>
<input id='month_00' type="hidden" name="month_00" value="5"/>
<input id='year_00' type="hidden" name="year_00" value="1999"/>
<input id='img_00' type="hidden" name="img_00" value="no_change"/>
<input id='day' type="hidden" name="day" value="17"/>
<input id='month' type="hidden" name="month" value="5"/>
<input id='year' type="hidden" name="year" value="1999"/>
<input id='sex' type="hidden" name="sex" value=""/>
<input id='country' type="hidden" name="country" value=""/>
<input id='city' type="hidden" name="city" value=""/>
<input id='interest_0' type="hidden" name="interest" value=""/>
<input id='contact' type="hidden" name="contact" value=""/>
<input id='userID' type="hidden" name="userID" value="98026209">
<input type="hidden" name="userID" value="98026209">


<div class="container_edit_form">
    <span class="editFormLabelFont inputEditForm"> Date of birth: </span>
        
        
            <div class="inner_container_edit_form">
        <select id="day" name="day" class="styled" style="background:#000000; color:#A0A0A0;">
            <option>--</option>
                                    <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option selected="17">17</option>
                                                    <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                            </select>
        <select id="month" name="month" class="styled" style="background:#000000; color:#A0A0A0;">
            <option>--</option>
                                    <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option selected="5">5</option>
                                                    <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                            </select>
        <select id="year" name="year" class="styled" style="width:95px; background:#000000; color:#A0A0A0;">
            <option>----</option>
                                    <option>2000</option>
                                                <option selected="1999">1999</option>
                                                    <option>1998</option>
                                                <option>1997</option>
                                                <option>1996</option>
                                                <option>1995</option>
                                                <option>1994</option>
                                                <option>1993</option>
                                                <option>1992</option>
                                                <option>1991</option>
                                                <option>1990</option>
                                                <option>1989</option>
                                                <option>1988</option>
                                                <option>1987</option>
                                                <option>1986</option>
                                                <option>1985</option>
                                                <option>1984</option>
                                                <option>1983</option>
                                                <option>1982</option>
                                                <option>1981</option>
                                                <option>1980</option>
                                                <option>1979</option>
                                                <option>1978</option>
                                                <option>1977</option>
                                                <option>1976</option>
                                                <option>1975</option>
                                                <option>1974</option>
                                                <option>1973</option>
                                                <option>1972</option>
                                                <option>1971</option>
                                                <option>1970</option>
                                                <option>1969</option>
                                                <option>1968</option>
                                                <option>1967</option>
                                                <option>1966</option>
                                                <option>1965</option>
                                                <option>1964</option>
                                                <option>1963</option>
                                                <option>1962</option>
                                                <option>1961</option>
                                                <option>1960</option>
                                                <option>1959</option>
                                                <option>1958</option>
                                                <option>1957</option>
                                                <option>1956</option>
                                                <option>1955</option>
                                                <option>1954</option>
                                                <option>1953</option>
                                                <option>1952</option>
                                                <option>1951</option>
                                                <option>1950</option>
                                                <option>1949</option>
                                                <option>1948</option>
                                                <option>1947</option>
                                                <option>1946</option>
                                                <option>1945</option>
                                                <option>1944</option>
                                                <option>1943</option>
                                                <option>1942</option>
                                                <option>1941</option>
                                                <option>1940</option>
                                                <option>1939</option>
                                                <option>1938</option>
                                                <option>1937</option>
                                                <option>1936</option>
                                                <option>1935</option>
                                                <option>1934</option>
                                                <option>1933</option>
                                                <option>1932</option>
                                                <option>1931</option>
                                                <option>1930</option>
                                                <option>1929</option>
                                                <option>1928</option>
                                                <option>1927</option>
                                                <option>1926</option>
                                                <option>1925</option>
                                                <option>1924</option>
                                                <option>1923</option>
                                                <option>1922</option>
                                                <option>1921</option>
                                                <option>1920</option>
                                                <option>1919</option>
                                                <option>1918</option>
                                                <option>1917</option>
                                                <option>1916</option>
                                                <option>1915</option>
                                                <option>1914</option>
                                                <option>1913</option>
                                                <option>1912</option>
                                                <option>1911</option>
                                                <option>1910</option>
                                                <option>1909</option>
                                                <option>1908</option>
                                                <option>1907</option>
                                                <option>1906</option>
                                                <option>1905</option>
                                                <option>1904</option>
                                                <option>1903</option>
                                                <option>1902</option>
                                                <option>1901</option>
                                                <option>1900</option>
                            </select>
    </div>
</div>
<div id="dayLabel" class="dayLabel">
    <span id="ageDay" class="editFormLabelFont">day</span>
    <span id="ageMonth" class="editFormLabelFont">month</span>
    <span id="ageYear" class="editFormLabelFont">year</span>
</div>
<div class="container_edit_form">
    <div class="inputEditForm"><span class="editFormLabelFont"> Gender: </span></div>
    <div class="inner_container_edit_form">
        <select id="sex" name="sex" class="styled" style="width:228px; background:#000000; color:#A0A0A0; z-index: 1000;">
                            <option selected="----">----</option>
            <option>Male</option>
            <option>Female</option>
        
        </select>
    </div>
</div>
<div class="container_edit_form">
    <div class="inputEditForm"><span class="editFormLabelFont"> Country: </span></div>
    <div class="inner_container_edit_form">
        <select id="country" name="country" class="styled" style="width:228px; background:#000000; color:#A0A0A0; z-index: 1000;">
                                                        <option selected="NO_COUNTRY">----</option>
                                                                                        <option>Afghanistan</option>
                                                                                    <option>Albania</option>
                                                                                    <option>Algeria</option>
                                                                                    <option>American Samoa</option>
                                                                                    <option>American Virgin Islands</option>
                                                                                    <option>Andorra</option>
                                                                                    <option>Angola</option>
                                                                                    <option>Anguilla</option>
                                                                                    <option>Antarctic</option>
                                                                                    <option>Antigua &amp; Barbuda</option>
                                                                                    <option>Argentina</option>
                                                                                    <option>Armenia</option>
                                                                                    <option>Aruba</option>
                                                                                    <option>Australia</option>
                                                                                    <option>Austria</option>
                                                                                    <option>Azerbaijan</option>
                                                                                    <option>Bahamas</option>
                                                                                    <option>Bahrain</option>
                                                                                    <option>Bailiwick of Guernsey</option>
                                                                                    <option>Bailiwick of Jersey</option>
                                                                                    <option>Bangladesh</option>
                                                                                    <option>Barbados</option>
                                                                                    <option>Belarus</option>
                                                                                    <option>Belgium</option>
                                                                                    <option>Belize</option>
                                                                                    <option>Benin</option>
                                                                                    <option>Bermuda</option>
                                                                                    <option>Bhutan</option>
                                                                                    <option>Bolivia</option>
                                                                                    <option>Bosnia and Herzegovina</option>
                                                                                    <option>Botswana</option>
                                                                                    <option>Bouvet Island</option>
                                                                                    <option>Brazil</option>
                                                                                    <option>British Indian Ocean Territory</option>
                                                                                    <option>British Virgin Islands</option>
                                                                                    <option>Brunei</option>
                                                                                    <option>Bulgaria</option>
                                                                                    <option>Burkina Faso</option>
                                                                                    <option>Burundi</option>
                                                                                    <option>Cambodia</option>
                                                                                    <option>Cameroon</option>
                                                                                    <option>Canada</option>
                                                                                    <option>Cape Verde</option>
                                                                                    <option>Cayman Islands</option>
                                                                                    <option>Central African Republic</option>
                                                                                    <option>Chad</option>
                                                                                    <option>Chile</option>
                                                                                    <option>China</option>
                                                                                    <option>Christmas Islands</option>
                                                                                    <option>Cocos (Keeling) Islands</option>
                                                                                    <option>Colombia</option>
                                                                                    <option>Comoros</option>
                                                                                    <option>Congo</option>
                                                                                    <option>Cook Islands</option>
                                                                                    <option>Costa Rica</option>
                                                                                    <option>Croatia</option>
                                                                                    <option>Cyprus</option>
                                                                                    <option>Czech Republic</option>
                                                                                    <option>Democratic Republic of the Congo</option>
                                                                                    <option>Denmark</option>
                                                                                    <option>Djibouti</option>
                                                                                    <option>Dominica</option>
                                                                                    <option>Dominican Republic</option>
                                                                                    <option>Dutch Antilles</option>
                                                                                    <option>East Timor</option>
                                                                                    <option>Ecuador</option>
                                                                                    <option>Egypt</option>
                                                                                    <option>El Salvador</option>
                                                                                    <option>Equatorial Guinea</option>
                                                                                    <option>Eritrea</option>
                                                                                    <option>Estonia</option>
                                                                                    <option>Ethiopia</option>
                                                                                    <option>Faeroe Islands</option>
                                                                                    <option>Falkland Islands</option>
                                                                                    <option>Fiji</option>
                                                                                    <option>Finland</option>
                                                                                    <option>Former Yugoslav Republic of Macedonia</option>
                                                                                    <option>France</option>
                                                                                    <option>French Antarctic Territories</option>
                                                                                    <option>French Guiana</option>
                                                                                    <option>French Polynesia</option>
                                                                                    <option>Gabon</option>
                                                                                    <option>Gambia</option>
                                                                                    <option>Georgia</option>
                                                                                    <option>Germany</option>
                                                                                    <option>Ghana</option>
                                                                                    <option>Gibraltar</option>
                                                                                    <option>Greece</option>
                                                                                    <option>Greenland</option>
                                                                                    <option>Grenada</option>
                                                                                    <option>Guadeloupe</option>
                                                                                    <option>Guam</option>
                                                                                    <option>Guatemala</option>
                                                                                    <option>Guinea</option>
                                                                                    <option>Guinea-Bissau</option>
                                                                                    <option>Guyana</option>
                                                                                    <option>Haiti</option>
                                                                                    <option>Heard and McDonald Islands</option>
                                                                                    <option>Honduras</option>
                                                                                    <option>Hong Kong</option>
                                                                                    <option>Hungary</option>
                                                                                    <option>Iceland</option>
                                                                                    <option>India</option>
                                                                                    <option>Indonesia</option>
                                                                                    <option>Iraq</option>
                                                                                    <option>Ireland</option>
                                                                                    <option>Isle of Man</option>
                                                                                    <option>Israel</option>
                                                                                    <option>Italy</option>
                                                                                    <option>Ivory Coast</option>
                                                                                    <option>Jamaica</option>
                                                                                    <option>Japan</option>
                                                                                    <option>Jordan</option>
                                                                                    <option>Kazakhstan</option>
                                                                                    <option>Kenya</option>
                                                                                    <option>Kiribati</option>
                                                                                    <option>Korea</option>
                                                                                    <option>Kuwait</option>
                                                                                    <option>Kyrgyzstan</option>
                                                                                    <option>Lao People's Democratic Republic</option>
                                                                                    <option>Latvia</option>
                                                                                    <option>Lebanon</option>
                                                                                    <option>Lesotho</option>
                                                                                    <option>Liberia</option>
                                                                                    <option>Libya</option>
                                                                                    <option>Liechtenstein</option>
                                                                                    <option>Lithuania</option>
                                                                                    <option>Luxembourg</option>
                                                                                    <option>Macau</option>
                                                                                    <option>Madagascar</option>
                                                                                    <option>Malawi</option>
                                                                                    <option>Malaysia</option>
                                                                                    <option>Maldive Islands</option>
                                                                                    <option>Mali</option>
                                                                                    <option>Malta</option>
                                                                                    <option>Marshall Islands</option>
                                                                                    <option>Martinique</option>
                                                                                    <option>Mauritania</option>
                                                                                    <option>Mauritius</option>
                                                                                    <option>Mayotte</option>
                                                                                    <option>Mexico</option>
                                                                                    <option>Micronesia</option>
                                                                                    <option>Monaco</option>
                                                                                    <option>Mongolia</option>
                                                                                    <option>Montenegro</option>
                                                                                    <option>Montserrat</option>
                                                                                    <option>Morocco</option>
                                                                                    <option>Mozambique</option>
                                                                                    <option>Myanmar</option>
                                                                                    <option>Namibia</option>
                                                                                    <option>Nauru</option>
                                                                                    <option>Nepal</option>
                                                                                    <option>New Caledonia</option>
                                                                                    <option>New Zealand</option>
                                                                                    <option>Nicaragua</option>
                                                                                    <option>Niger</option>
                                                                                    <option>Nigeria</option>
                                                                                    <option>Niue</option>
                                                                                    <option>Norfolk Island</option>
                                                                                    <option>Northern Mariana Islands</option>
                                                                                    <option>Norway</option>
                                                                                    <option>Occupied Palestinian Territory</option>
                                                                                    <option>Oman</option>
                                                                                    <option>Pakistan</option>
                                                                                    <option>Palau</option>
                                                                                    <option>Panama</option>
                                                                                    <option>Papua New Guinea</option>
                                                                                    <option>Paraguay</option>
                                                                                    <option>Peru</option>
                                                                                    <option>Philippines</option>
                                                                                    <option>Pitcairn Islands</option>
                                                                                    <option>Poland</option>
                                                                                    <option>Portugal</option>
                                                                                    <option>Puerto Rico</option>
                                                                                    <option>Qatar</option>
                                                                                    <option>Republic of Moldova</option>
                                                                                    <option>Romania</option>
                                                                                    <option>Russian Federation</option>
                                                                                    <option>Rwanda</option>
                                                                                    <option>Réunion</option>
                                                                                    <option>Saint Barthélemy</option>
                                                                                    <option>Saint Kitts and Nevis</option>
                                                                                    <option>Saint Lucia</option>
                                                                                    <option>Saint Martin</option>
                                                                                    <option>Saint Vincent and the Grenadines</option>
                                                                                    <option>Samoa</option>
                                                                                    <option>San Marino</option>
                                                                                    <option>Saudi Arabia</option>
                                                                                    <option>Senegal</option>
                                                                                    <option>Serbia</option>
                                                                                    <option>Seychelles</option>
                                                                                    <option>Sierra Leone</option>
                                                                                    <option>Singapore</option>
                                                                                    <option>Slovakia</option>
                                                                                    <option>Slovenia</option>
                                                                                    <option>Solomon Islands</option>
                                                                                    <option>Somalia</option>
                                                                                    <option>South Africa</option>
                                                                                    <option>South Georgia and the South Sandwich Islands</option>
                                                                                    <option>Spain</option>
                                                                                    <option>Sri Lanka</option>
                                                                                    <option>St. Helena</option>
                                                                                    <option>St. Pierre and Miquelon</option>
                                                                                    <option>Suriname</option>
                                                                                    <option>Svalbard and Jan Mayen Island</option>
                                                                                    <option>Swaziland</option>
                                                                                    <option>Sweden</option>
                                                                                    <option>Switzerland</option>
                                                                                    <option>Sao Tomé und Príncipe</option>
                                                                                    <option>Taiwan</option>
                                                                                    <option>Tajikistan</option>
                                                                                    <option>Thailand</option>
                                                                                    <option>The Netherlands</option>
                                                                                    <option>Togo</option>
                                                                                    <option>Tokelau</option>
                                                                                    <option>Tonga</option>
                                                                                    <option>Trinidad and Tobago</option>
                                                                                    <option>Tunisia</option>
                                                                                    <option>Turkey</option>
                                                                                    <option>Turkmenistan</option>
                                                                                    <option>Turks and Caicos Islands</option>
                                                                                    <option>Tuvalu</option>
                                                                                    <option>Uganda</option>
                                                                                    <option>Ukraine</option>
                                                                                    <option>United Arab Emirates</option>
                                                                                    <option>United Kingdom</option>
                                                                                    <option>United Republic of Tanzania</option>
                                                                                    <option>United States of America</option>
                                                                                    <option>United States of America - Offshore islands</option>
                                                                                    <option>Uruguay</option>
                                                                                    <option>Uzbekistan</option>
                                                                                    <option>Vanuatu</option>
                                                                                    <option>Vatican City</option>
                                                                                    <option>Venezuela</option>
                                                                                    <option>Vietnam</option>
                                                                                    <option>Wallis and Futuna Islands</option>
                                                                                    <option>Western Sahara</option>
                                                                                    <option>Yemen</option>
                                                                                    <option>Zambia</option>
                                                                                    <option>Zimbabwe</option>
                                                                                    <option>Åland Islands</option>
                                                                                    <option>Scotland</option>
                                            </select>
    </div>
</div>
<div class="container_edit_form">
    <span class="inputEditForm editFormLabelFont"> City: </span>
    <div class="inner_container_edit_form">
        <input class="formTextBox2 itemSelected1" type="text" name="city" id="city" size="30" maxlength="65" value=""/>
    </div>
</div>
<div class="container_edit_form">
    <span class="inputEditForm editFormLabelFont"> Interests: </span>
    <div class="inner_container_edit_form">
        <input class="formTextBox2 itemSelected1" type="text" name="interest" id="interest" size="30" maxlength="65"value=""/>
    </div>
</div>
<div class="container_edit_form">
    <span class="inputEditForm editFormLabelFont"> Contact: </span>
    <div class="inner_container_edit_form">
        <input class=" formTextBox2 itemSelected1" type="text" name="contact" id="contact" size="30" maxlength="65" value=""/>
    </div>
</div>
<div class="container_edit_form">
    <div class="inputEditForm editFormLabelFont">Avatar:</div>
    <div class="inner_container_edit_form">
            <div id="pppAvatarInput" class="pppAvatarInput pppAvatarInputInActive fakefileSpanInActive"
             onmouseover="buttonHandler.toggleButtons('pppAvatarInput', 'pppAvatarInput', 'fakefileSpan', 'fakefileSpan')"
             onmouseout="buttonHandler.toggleButtons('pppAvatarInput', 'pppAvatarInput', 'fakefileSpan', 'fakefileSpan')"
             title="Browse">BROWSE
            <input name="imgUpload" type="file" size="1" id="imgUpload" class="imgUpload"
                   onchange="pilotSheet.handleProfilePage('editForm', 'imgUpload', this.value);"/>
        </div>
        <div id="fakeinputfile" class="fakeinputfile"><input name="fakefilepc" type="text" id="fakefilepc" class="fakefilepc"/></div>
    </div>
    <div id="imgUploadHint">
        <div class="sizeHint pppAvatarHint">Max. upload size: 15KB</div>
        <div class="pppAvatarDescrLink pppAvatarHint customTooltip type_profileEdit loadType_normal id_pppAvatarDescr inner_editFormProfile outer_profilePage top_300 left_10"></div>
        <div id="optimalSizeHint" class="pppAvatarHint pixelHint">Opt. image resolution: 115 x 125 pixel</div>
    </div>
    <br class="clearMe"/>
</div>
<div class="container_edit_form">
    <div id="imgUploadStatus">
        <div id="imgLoader" class="imgLoader hideStatus"></div>
        <div id="imgUploadSuccess" class="imgUploadStats hideStatus">Your pic is OK.</div>
        <div id="imgUploadError" class="imgUploadStats imgUploadStatsError hideStatus">Your pic is not OK. Please check the file size and format.</div>
    </div>
</div>

<div class="separatorLine separatorLine2"></div>
<div class="container_edit_form">
    <div id="privacySettingsTitle" class="editFormLabelFont">PRIVACY SETTINGS</div>
    <div id="privacySettingsHint" class="pppAvatarHint">Select which information should be shown on your profile.</div>
</div>
<div id="privacySettings">
    <table cellspacing="0" cellpadding="0" style="width: 95%">
        <tr class="editFormLabel">
            <td style="width:40%; text-align: left;">&nbsp;</td>
            <td style="width:20%; text-align: left;">FRIENDS</td>
            <td style="width:20%; text-align: left;">EVERYONE</td>
            <td style="width:20%; text-align: left;">No one</td>
        </tr>
        <tr>
            <td class="editFormLabel" style="width:55%;">My account</td>
            <td><input type="radio" name="privacySettingsUserInfo" value="friends" class="styled" checked="checked"/></td>
            <td><input type="radio" name="privacySettingsUserInfo" value="everyone" class="styled" /></td>
            <td><input type="radio" name="privacySettingsUserInfo" value="private" class="styled" /></td>
        </tr>
        <tr>
            <td class="editFormLabel" style="width:55%;">Equipment data</td>
            <td><input type="radio" name="privacySettingsEquipment" value="friends" class="styled" checked="checked"/></td>
            <td><input type="radio" name="privacySettingsEquipment" value="everyone" class="styled" /></td>
            <td><input type="radio" name="privacySettingsEquipment" value="private" class="styled" /></td>
        </tr>
        <tr>
            <td class="editFormLabel" style="width:55%;">Clan data</td>
            <td><input type="radio" name="privacySettingsClan" value="friends" class="styled" checked="checked"/></td>
            <td><input type="radio" name="privacySettingsClan" value="everyone" class="styled" /></td>
            <td><input type="radio" name="privacySettingsClan" value="private" class="styled" /></td>
        </tr>
        <tr>
            <td class="editFormLabel" style="width:55%;">Skill tree data</td>
            <td><input type="radio" name="privacySettingsSkilltree" value="friends" class="styled" checked="checked"/></td>
            <td><input type="radio" name="privacySettingsSkilltree" value="everyone" class="styled" /></td>
            <td><input type="radio" name="privacySettingsSkilltree" value="private" class="styled" /></td>
        </tr>
        <tr>
            <td colspan="4"><div class="separatorLine"></div></td>
        </tr>
        <tr>
            <td colspan="4">
                <div class="editFormLabelFont" >Message system</div>
                <div class="pppMessageSystemHint">Here you may specify who may contact you via the messaging system.</div>
            </td>
        </tr>
        <tr>
            <td><br /></td>
            <td style="text-align: left;">FRIENDS</td>
            <td style="text-align: left;">EVERYONE</td>
            <td style="text-align: left;">No one</td>
        </tr>
        <tr>
            <td>Messages</td>
            <td><input type="radio" name="privacySettingsMessages" value="friends" class="styled" /></td>
            <td><input type="radio" name="privacySettingsMessages" value="everyone" class="styled" checked="checked"/></td>
            <td><input type="radio" name="privacySettingsMessages" value="disabled" class="styled" /></td>
        </tr>
        <tr>
            <td colspan="4"><div class="separatorLine"></div></td>
        </tr>
    </table>
</div>
</form>
<iframe id="uploadTarget" name="uploadTarget" src="" style="width:0;height:0;border:0px solid #fff;"></iframe>
</div>
<div id="editFormProfileFooter">

    <div id="saveButton" class="saveButtonInActive"
         onmouseover="buttonHandler.toggleButtons('saveButton', 'saveButton', 'saveButtonLabelo', 'saveButtonLabel')"
         onmouseout="buttonHandler.toggleButtons('saveButton', 'saveButton', 'saveButtonLabel', 'saveButtonLabel')"
         onclick="pilotSheet.handleProfilePage('editForm', 'editUserProfile')">
        <div id="saveButtonLabel" class="saveButtonLabelInActive"><strong>SAVE</strong></div>
    </div>
</div>
</div>
<div id="pppAvatarDescr" class="skill_tooltip obstrusive" style="display: none; z-index: 9200;">
    <div class="tooltip_header"></div>
    <div class="tooltip_content skilltree_font">
        <strong class="skilltree_font_info">Tips for uploading images</strong>

        <div class="tooltip_seperator"></div>
        <ul style="padding:10px 0 0 5px;">
            <li>- JPG or GIF only</li>
            <li>- No larger than 15KB</li>
            <li style="color: #FCCE00;">- Optimum resolution: 115 x 125 pixel</li>
            <li>- No forbidden symbols</li>
            <li>- No offensive images</li>
            <li>- Animated GIFs are allowed</li>
        </ul>
    </div>
    <div class="tooltip_footer skilltree_font"></div>
</div>
</div><div class="infoLayerContainer">
    <div id="userProfileInfoPopup" class="inviteInfoPopup hideinviteInfoPopup">
        <div class="inviteInfoPopupHeader">
            <div class="infoLayerHeaderIcon"></div>
            <div class="infoLayerHeaderText userProfileInfoLayerHeaderText">YOUR PILOT PROFILE</div>
            <div id="closeUserProfileInfoPopup" class="closeInfoLayer closeUserProfileInfoPopup closeButtonInActive"
                 onmouseover="buttonHandler.toggleCloseButton('closeUserProfileInfoPopup', 'closeButton');"
                 onmouseout="buttonHandler.toggleCloseButton('closeUserProfileInfoPopup', 'closeButton');"
                 onclick="inviteIncentives.handleIncentives('closeInfoLayer', 'userProfileInfoPopup');">
            </div>
        </div>
        <div class="infoLayerBodyWhole">
            <div class="userProfileInfoLayerBodyHeader">
                <div class="infoLayerBodyHeader">Your pilot profile</div>
                <div class="userProfileInfoLayer userProfileInfoLayerText1">The profile page allows you to show off your ship and your profile to other friends and players. Your profile is accessible for everyone and is easy to identify with the help of your User ID.</div>
                <div class="userProfileInfoLayer userProfileInfoLayerText2">There are different ways to get to your profile page:</div>
                <ul class="userProfileInfoLayerList">
                    <li class="userProfileViewPossibilityList">Click on the link below: <a href="http://us4.darkorbit.bigpoint.com/p/6dJ5t-AFO2I/?lang=us" class="userProfileLink" target="blank">Your profile</a></li>
                    <li class="userProfileViewPossibilityList">Copy link shown below via <span class="crtlColor">([CTRL] + [C])</span>. Then paste it into your browser's address line with <span class="crtlColor">([CTRL] + [V])</span>. </li>
                    <li class="userProfileViewPossibilityList">Browse through profiles with the profile search: Just click your <span class="crtlColor">username</span> or another player's username and then click <span class="crtlColor">Search</span>.</li>
                </ul>

                <div class="infoLayerLinkToProfile">Your profile: <a href="http://us4.darkorbit.bigpoint.com/p/6dJ5t-AFO2I/?lang=us" class="userProfileLink" target="blank">http://us4.darkorbit.bigpoint.com/p/6dJ5t-AFO2I/?lang=us</a></div>
                <div class="searchProfile">
                    <div class="searchProfileHeader">Search other players' profiles:</div>
                    <div class="searchProfileBody">
                        <form id="searchProfileForm" name="searchProfileForm" action="imgUpload.php" method="POST" enctype="multipart/form-data" target="uploadTarget"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
                            <input id="searchSuccessful" name="searchSuccessful" type="hidden" value="User found"/>
                            <input id="searchFailed" name="searchFailed" type="hidden" value="User not found"/>
                            <table>
                                <tr>
                                    <td><input id="searchProfileField" name="searchProfileField" class="searchProfileField"
                                               type="text" value="Enter username" maxlength="50"
                                               size="30"/></td>
                                    <td><div id="searchProfileSubmit" class="searchProfileSubmit" onclick="pilotSheet.performProfileSearch();"></div>
                                    </td>
                                    <td><div id="searchProfileFieldStatus" class="searchProfileFieldStatus searchProfileAjaxLoader hideElement"></div>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="infoLayerFooter">
            <div id="closeUserProfileInfoLayer" class="closePopup"
                 onclick="inviteIncentives.handleIncentives('closeInfoLayer', 'userProfileInfoPopup');">
            Close
            </div>
        </div>
    </div>
</div><div class="infoLayerContainer">
    <div id="bonusLogBook" class="hideBonusLogBook">
        <div class="bonusInfoDivText bonusLogBookHead">Bonus logbook</div><br /><br />
        <div class="logBookTableHead">
            <table cellspacing="0" cellpadding="0" style="width: 100%">
                <tr class="logBookHeadIncentives">
                    <th style="width: 20%; text-align: left; padding-left:5px;">Name</th>
                    <th style="width: 25%; text-align: left; padding-left:5px;">Date</th>
                    <th style="width: 55%; text-align: left; padding-left:5px;">Bonus</th>
                </tr>
            </table>
        </div>
        <div class="logBookTableBody">
            <div id="logBookBox" style="height: 280px; width:200%;" class="scroll-pane">
                <table cellpadding="0" style="width: 100%">
                                </table>
            </div>
        </div>
    </div>
    <div id="closeButtonBonusLog" class="closeButtonBonusLog closeButtonInActive removeForm hideBonusLogBook"
         onmouseover = "buttonHandler.toggleCloseButton('closeButtonBonusLog', 'closeButton');"
         onmouseout = "buttonHandler.toggleCloseButton('closeButtonBonusLog', 'closeButton');"
         onclick = "inviteIncentives.handleLogBook('closeButtonBonusLog', 'closeLogBook');"
            >
    </div>
</div><script type="text/javascript">
    misc.testForScrollbar("listBody")
</script>
</div><!-- END contentFrame -->
</div><!-- END realContainer -->

<div class="footerContainer">
    <div class="frameLeft_bottom"></div>
    <div class="frameRight_bottom"></div>
    <div class="frameBottom"></div>

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

    <div id="imprint_ingame" class="fliesstext"
         style="position:absolute; left:40px; top:24px; height:15px;">
                    <a href="javascript:void(0);" onclick="showFooterLayer('imprint');">
                Legal information</a> |
                <a href="javascript:void(0);" onclick="showFooterLayer('teamCreditsBox')">Credits</a> |
        <a href="/GameAPI.php?action=portal.redirectToBoard" target="_blank">Forum</a>
    </div>


    


    <div id="banner-bottom" align="center">
    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=4&source=country%3DIT%26areaID%3D%26aid%3D332%26acm%3D%26acr%3D579%26aip%3D%26gameID%3D579%26uid%3D98026209%26locale%3Dus&sign=VjHIOpZRmqRWePnJyexBupfd6bgkJz5ub6JK7UlE"></script>    </div>
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
<script type="text/javascript" language="JavaScript" src="https://akimu.bigpoint.com/trk?rt=1&ti=3547&cs=8377&aid=332&aip=&pid=579&ppid=22&language=en&country=IT&ctype=0&ts=1368799944&mid=151430678&jsopenclose=false"></script>
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
res = '<scr' + 'ipt type="text/javascript" src="http://akimu.bigpoint.com/trk?rt=1&ti=3549&cs=5764&aid=332&aip=&pid=579&ppid=22&language=en&country=IT&ctype=0&ts=1368799944&searchQuery=' + s;
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
<!-- SensorT-Bigpoint - SEA-SEO Pageview - END --><!-- BPID --><script language="javascript">window.bpid=window.bpid||{};window.bpid.callbacks=window.bpid.callbacks||[];window.bpid.callbacks.push(function(bpid) {document.cookie="__bpid="+bpid+";path=/;expires=Fri, 03 Jun 2022 13:59:24 GMT;";if (bpid != "518691273uWkiotnZMSa6qYesuCcJmDB") {try {var xhr = new XMLHttpRequest();xhr.open("GET", "\/GameAPI.php?action=core.bpid&bpid="+bpid, true);xhr.send(null);} catch(e) {}}});</script><script language="javascript" src="//assets.bpsecure.com/bpid/bpid.js?ts=380222" defer="defer"></script><!-- /BPID --><script type="text/javascript">var _gaq = _gaq || [];_gaq.push(['_gat._anonymizeIp']);_gaq.push(['_setDomainName', 'none']);_gaq.push(['_setAllowLinker', true]);_gaq.push(['_setAllowHash', false]);_gaq.push(['_setCustomVar', 1, 'aid', '332', 2]);_gaq.push(['_setCustomVar', 2, 'aip', '', 2]);_gaq.push(['_setCustomVar', 3, 'ait', 'keyword', 2]);_gaq.push(['_setCustomVar', 4, 'areaID', '', 2]);_gaq.push(['_setAccount', 'UA-1848713-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalPilotSheet&areaID=']);_gaq.push(['_trackPageLoadTime']);_gaq.push(['_setAccount', 'UA-17685913-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalPilotSheet&areaID=']);_gaq.push(['_trackPageLoadTime']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = 'http://www.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>

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
            var paymentURL   = 'https://ssl.bigpoint.net/billing/?req=YToxMjp7czo2OiJ1c2VySUQiO3M6ODoiOTgwMjYyMDkiO3M6ODoidXNlcm5hbWUiO3M6ODoiemlvcGlvNzAiO3M6ODoibWVtYmVySUQiO3M6OToiMTUxNDMwNjc4IjtzOjQ6ImJwaWQiO3M6MzI6IjUxODY5MTI3M3VXa2lvdG5aTVNhNnFZZXN1Q2NKbURCIjtzOjc6InVzZXJBZ2UiO2k6NDM7czoxNDoiZmJfYXBwbGljYXRpb24iO2I6MDtzOjk6InByb2plY3RJRCI7czozOiI1NzkiO3M6MzoiYWlkIjtpOjMzMjtzOjM6ImFpcCI7czowOiIiO3M6NDoibGFuZyI7czoyOiJlbiI7czozOiJkZXYiO2I6MDtzOjQ6InRpbWUiO2k6MTM2ODc5OTk0Mzt9&aid=332&aip=&hash=0f3cff5bc5d6c32087e668f8dbf9a492';
            BPLayertool2.Helper.setPaymentLink(paymentURL);
            BPLayertool2.Helper.setUserId(98026209);
            BPLayertool2.Helper.setRequestTime(1368799943);
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
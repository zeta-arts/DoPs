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
                                                    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=6&source=country%3DIT%26areaID%3Dinternal.other%26aid%3D332%26acm%3D%26acr%3D579%26aip%3D%26gameID%3D579%26uid%3D98026209%26locale%3Dus&sign=VjEhPJZRwMm4cjr3Ni4z945o3FlFMH662O4S1O5s"></script>
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
                                <img class="txt_img" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_invites_and_bonus&f=eurostyle_tmed&color=fullGrey&bgcolor=darkGrey" />
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

                            <a class="header_std_btn header_rgt_std header_current" id="lab_btn" href="/indexInternal.es?action=internalSkylab">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_skylab&f=eurostyle_tbla&color=black&bgcolor=skyBlue" />
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
                        <a id="header_uri" class="header_money"  href="/indexInternal.es?action=internalPayment"   onclick="openExternal('/?action=internalPaymentProxy&req=590e0fb58298acb32f3959c3027190b7a682639bef86020988cc1eefffdbe7ff522a6a0d0e778d10b6d7a40a5505eb22ccb256be480e012447e131e8e63a72ec&v=bbb66136dd934be5');" >
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
                
<style  type="text/css">

.tabLabelSkylabActive {
    background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_skylab_skylab_caps&f=eurostyle_thea&color=black&bgcolor=grey1);
}
.tabLabelSkylabInActive {
    background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_skylab_skylab_caps&f=eurostyle_thea&color=white&bgcolor=grey);
}
.tabLabelTechFactoryActive {
    background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_skylab_tf_caps&f=eurostyle_thea&color=black&bgcolor=grey1);
}
.tabLabelTechFactoryInActive {
    background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_skylab_tf_caps&f=eurostyle_thea&color=white&bgcolor=grey);
}
.tabLabelItemUpgradeSystemActive {
    background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_skylab_ius&f=eurostyle_thea&color=black&bgcolor=grey1);
}
.tabLabelItemUpgradeSystemInActive {
    background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_skylab_ius&f=eurostyle_thea&color=white&bgcolor=grey);
}

</style>

<script language="javascript" type="text/javascript">

SkylabTimer = function() {};

SkylabTimer.prototype = {
     startTime       : 0
    ,endTime         : 0
    ,targetDivId     : ''
    ,targetDiv       : null
    ,timeDiv         : null
    ,barContainerDiv : null
    ,barDiv          : null
    ,interval        : null
    ,now             : 1368800288
    ,finished        : 0

    ,init : function(divId, start, end)
    {
        this.startTime = start;
        this.endTime = end;
        this.targetDivId = divId;

        this.targetDiv = document.getElementById(divId);
        this.targetDiv.skylabTimer = this;

        /*
        The following code builds this HTML-structure:

        <div class="skylabTimer">
            <div class="progressBarOuter">
                <div class="time"></div>
                <div class="progressBarInner"></div>
            </div>
        </div>
        */


        this.barContainerDiv = document.createElement('div');
        var container = this.barContainerDiv;

        this.timeDiv = document.createElement('div');
        container.appendChild(this.timeDiv);

        this.barDiv = document.createElement('div');
        var bar = this.barDiv;

        container.appendChild(this.barDiv);
        this.targetDiv.appendChild(this.barContainerDiv);

        // SET UP STYLES...
        this.targetDiv.style.position = 'relative';
        this.targetDiv.style.marginTop = '3px';

        container.style.border = '1px solid #CCCCCC';
        container.style.backgroundColor = '#666666';
        container.style.height = '13px';
        container.style.textAlign = 'left';

        this.timeDiv.style.position = 'absolute';
        this.timeDiv.style.fontWeight = 'bold';
        this.timeDiv.style.textAlign = 'center';

        bar.style.height = '13px';
        bar.style.backgroundColor = '#00BB00';

        // draw timer...
        this.render();

        // start loop...
        this.interval = window.setInterval("document.getElementById('" + divId + "').skylabTimer.render();", 1000);
    }

    ,render : function()
    {
        var timeLeft = this.endTime - this.now;

        if(timeLeft <= 0) {
            this.finish();
            return;
        }

        h = Math.floor(timeLeft / 3600);
        m = Math.floor((timeLeft - (h * 3600)) / 60);
        s = Math.floor(timeLeft - h * 3600 - m * 60);

        if (m < 10) m = '0' + String(m);
        if (s < 10) s = '0' + String(s);

        this.timeDiv.innerHTML = String(h) + ':' + String(m) + ':' + String(s);

        var barWidth = 0;
        var perc = Math.round((this.now - this.startTime) / (this.endTime - this.startTime) * 100);

        var maxBarWidth = 190;

        this.barContainerDiv.style.width = String(maxBarWidth) + 'px';
        this.timeDiv.style.width = String(maxBarWidth) + 'px';

        this.barDiv.style.width = String((maxBarWidth / 100) * perc) + 'px';

        this.now++;
    }

    ,finish : function()
    {
        // end loop...
        var str = '0:00:00';

        if(this.timeDiv.innerHTML == str) {
            this.timeDiv.innerHTML = '';
        } else {
            this.timeDiv.innerHTML = str;
        }

        if (this.finished == 5) {
            window.clearInterval(this.interval);
            do_redirect('indexInternal.es?action=internalSkylab');
        }

        this.finished++;
    }
};

</script>
<div id="skylab">
<div id="subnav">
    <div id="tabButton1" class="tabButtonActive"
        onmouseover="buttonHandler.toggleButtons('tabButton1', 'tabButton', 'tabLabel1', 'tabLabel')"
        onmouseout="buttonHandler.toggleButtons('tabButton1', 'tabButton', 'tabLabel1', 'tabLabel')"
        onclick="do_redirect('indexInternal.es?action=internalSkylab');"
        style='cursor: pointer; float: left; width: 184px; height: 25px;'>
        <div id="tabLabel1" class="tabLabelInActive tabLabelSkylabActive"></div>
    </div>
    <div id="tabButton2" class="tabButtonInActive"
        onmouseover="buttonHandler.toggleButtons('tabButton2', 'tabButton', 'tabLabel2', 'tabLabel')"
        onmouseout="buttonHandler.toggleButtons('tabButton2', 'tabButton', 'tabLabel2', 'tabLabel')"
        onclick="do_redirect('indexInternal.es?action=internalNanoTechFactory');"
        style='cursor: pointer; float: left; width: 184px; height: 25px;'>
        <div id="tabLabel2" class="tabLabelInActive tabLabelTechFactoryInActive"></div>
    </div>
        <div id="tabButton3" class="tabButtonInActive"
        onmouseover="buttonHandler.toggleButtons('tabButton3', 'tabButton', 'tabLabel3', 'tabLabel')"
        onmouseout="buttonHandler.toggleButtons('tabButton3', 'tabButton', 'tabLabel3', 'tabLabel')"
        onclick="do_redirect('indexInternal.es?action=internalItemUpgradeSystem');"
        style='cursor: pointer; float: left; width: 184px; height: 25px;'>
        <div id="tabLabel3" class="tabLabelInActive tabLabelItemUpgradeSystemInActive"></div>
    </div>
    </div>
    <div id="view_prometium" class="view_generally">
        <div id="view_prometium_stock">
            <span class="ore_prometium">Prometium:</span><br />
            100
        </div>
        <div id="view_prometium_maximal">
            <div class="view_generally_maximal_bg" style="width: 0.094696969697%;"></div>
            <div class="view_generally_maximal_number view_promerium_maximal_number">105,600</div>
        </div>
    </div>
    <div id="view_endurium" class="view_generally">
        <div id="view_endurium_stock">
            <span class="ore_endurium">Endurium:</span><br />
            100
        </div>
        <div id="view_endurium_maximal">
            <div class="view_generally_maximal_bg" style="width: 0.094696969697%;"></div>
            <div class="view_generally_maximal_number view_promerium_maximal_number">105,600</div>
        </div>
    </div>
    <div id="view_terbium" class="view_generally">
        <div id="view_terbium_stock">
            <span class="ore_terbium">Terbium:</span><br />
            100
        </div>
        <div id="view_terbium_maximal">
            <div class="view_generally_maximal_bg" style="width: 0.094696969697%;"></div>
            <div class="view_generally_maximal_number view_promerium_maximal_number">105,600</div>
        </div>
    </div>
    <div id="view_prometid" class="view_generally">
        <div id="view_prometid_stock">
            <span class="ore_prometid">Prometid:</span><br />
            0
        </div>
        <div id="view_prometid_maximal">
            <div class="view_generally_maximal_bg" style="width: 0%;"></div>
            <div class="view_generally_maximal_number view_promerium_maximal_number">5,280</div>
        </div>
    </div>
    <div id="view_duranium" class="view_generally">
        <div id="view_duranium_stock">
            <span class="ore_duranium">Duranium:</span><br />
            0
        </div>
        <div id="view_duranium_maximal">
            <div class="view_generally_maximal_bg" style="width: 0%;"></div>
            <div class="view_generally_maximal_number view_promerium_maximal_number">5,280</div>
        </div>
    </div>
    <div id="view_xenomit" class="view_generally">
        <div id="view_xenomit_stock">
            <span class="ore_xenomit">Xenomit:</span><br />
            0
        </div>
        <div id="view_xenomit_maximal">
            <div class="view_generally_maximal_bg" style="width: 0%;"></div>
            <div class="view_generally_maximal_number view_promerium_maximal_number">528</div>
        </div>
    </div>
    <div id="view_promerium" class="view_generally">
        <div id="view_promerium_stock">
            <span class="ore_promerium">Promerium:</span><br />
            0
        </div>
        <div id="view_promerium_maximal">
            <div class="view_generally_maximal_bg" style="width: 0%;"></div>
            <div class="view_generally_maximal_number view_promerium_maximal_number">528</div>
        </div>
    </div>
    <div id="view_seprom" class="view_generally">
        <div id="view_seprom_stock">
            <span class="ore_seprom">Seprom:</span><br />
            0
        </div>
        <div id="view_seprom_maximal">
            <div class="view_generally_maximal_bg" style="width: 0%;"></div>
            <div class="view_generally_maximal_number view_seprom_maximal_number">48</div>
        </div>
    </div>


    <div id="skylabReloader" onclick="javascript: do_redirect('indexInternal.es?action=internalSkylab');"></div>
    <div id="skylabHelp" onclick="javascript: do_redirect('http://help.bigpoint.com/index.es?project=darkorbit&site=skylab&lang=us', true);"></div>
    <div id="modules">
                                <div id="module_baseModule_small" class="module module_small" onclick="showModule('baseModule');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_active">
                <div class="name">Basic module</div>
            </td>
            <td id="corner_small_top_right_active"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_active">
               <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                                                            <div class="level_icon"></div>
                                                        <div class="level skylab_font_level">1</div>
                        </td>
                        <td class="cellview">
                            <div class="power_icon"></div>
                            <div class="power skylab_font_power">16</div>
                        </td>
                                                <td><br /></td>
                                            </tr>
                </table>
            </td>
            <td id="corner_small_bottom_right_active"></td>
        </tr>
    </table>

</div>

<div id="module_baseModule_large" class="module module_large" style="display: none;">
    <div class="name">Basic module</div>
    <div id="module_infobox_baseModule_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_baseModule" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'baseModule');$('module_infobox_baseModule_overview_large').show(); $('module_infobox_baseModule_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_baseModule" class="tab_separator"><br /></td>
                <td id="tab_last_baseModule" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'baseModule');$('module_infobox_baseModule_upgrade_large').show(); $('module_infobox_baseModule_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_baseModule" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_baseModule_upgrade_large" class="tabContent skylab_standard" style="display: none;">
            
    
    <table class="module_infobox_upgrade" cellpadding="0" cellspacing="0">
        <tr>
            <td class="firstRow"><br /></td>
            <td class="secondRow">Instant</td>
            <td class="thirdRow skylab_price_normal" style="width:1px;">
                <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical.jpg?__cv=0f3388b877b7ef4dd20df64be8699800);"></div>
                <br />
            </td>
            <td>Normal</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Uridium</td>
            <td class="secondRow">1,487</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">0</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Credits</td>
            <td class="secondRow">16,352</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">16,352</td>
        </tr>
        <tr>
            <td class="firstRow">Time</td>
            <td class="secondRow">0:00</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">2:18</td>
        </tr>
        <tr>
            <td class="firstRow">Prometium</td>
            <td class="secondRow">707</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">707</td>
        </tr>
        <tr>
            <td class="firstRow">Endurium</td>
            <td class="secondRow">707</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">707</td>
        </tr>
        <tr>
            <td class="firstRow">Terbium</td>
            <td class="secondRow">707</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">707</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding:8px 3px">
                <div class="button_standard" style="float:right;">
                    <a style="display:block;" onfocus="this.blur()" onclick="setConfirmButtonText('confirmText', 'OK'); setCancelButtonText('cancelText', 'Cancel'); openConfirm('indexInternal.es?action=internalSkylab&amp;subaction=instantUpgrade&amp;construction=baseModule&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc', 'Confirm upgrade?')">Instant build</a>
                </div>
            </td>
            <td colspan="2" style="padding:8px 5px">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="indexInternal.es?action=internalSkylab&amp;subaction=upgrade&amp;construction=baseModule&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc">Build</a>
                </div>
            </td>
        </tr>
    </table>
            </div>
        
        <div id="module_infobox_baseModule_overview_large" class="tabContent skylab_standard">

                            <table class="module_infobox_baseModule" cellpadding="2" cellspacing="0">
    <tr>
        <td style="width:160px"><strong>Basic module</strong></td>
        <td style="width:65px;">
            <div class="iteminfo_overview_progressbar" style="width:3px;"></div>
            <div class="iteminfo_overview_progressgrid"></div>
            <div style="width:3px;position:absolute;height:172px;margin-top:-6px;border-right:1px solid #989898;z-index:100;"></div>
        </td>
        <td class="baseModul_level baseModul_level_ACTIVE"><strong>1</strong></td>
    </tr>
    <tr>
        <td><strong>Solar module</strong></td>
        <td><div class="iteminfo_overview_progressbar" style="width:3px;"></div>
            <div class="iteminfo_overview_progressgrid"></div></td>
        <td class="baseModul_level baseModul_level_ACTIVE"><strong>1</strong></td>
    </tr>
    <tr>
        <td><strong>Storage module</strong></td>
        <td><div class="iteminfo_overview_progressbar" style="width:3px;"></div>
            <div class="iteminfo_overview_progressgrid"></div></td>
        <td class="baseModul_level baseModul_level_ACTIVE"><strong>1</strong></td>
    </tr>
    <tr>
        <td><strong>Xeno module</strong></td>
        <td><div class="iteminfo_overview_progressbar" style="width:0px;"></div>
            <div class="iteminfo_overview_progressgrid"></div></td>
        <td class="baseModul_level baseModul_level_INACTIVE"><strong>0</strong></td>
    </tr>
    <tr>
        <td><strong>Prometium collector</strong></td>
        <td><div class="iteminfo_overview_progressbar" style="width:0px;"></div>
            <div class="iteminfo_overview_progressgrid"></div></td>
        <td class="baseModul_level baseModul_level_INACTIVE"><strong>0</strong></td>
    </tr>
    <tr>
        <td><strong>Endurium collector</strong></td>
        <td><div class="iteminfo_overview_progressbar" style="width:0px;"></div>
            <div class="iteminfo_overview_progressgrid"></div></td>
        <td class="baseModul_level baseModul_level_INACTIVE"><strong>0</strong></td>
    </tr>
    <tr>
        <td><strong>Terbium collector</strong></td>
        <td><div class="iteminfo_overview_progressbar" style="width:0px;"></div>
            <div class="iteminfo_overview_progressgrid"></div></td>
        <td class="baseModul_level baseModul_level_INACTIVE"><strong>0</strong></td>
    </tr>
    <tr>
        <td><strong>Prometid refinery</strong></td>
        <td><div class="iteminfo_overview_progressbar" style="width:0px;"></div>
            <div class="iteminfo_overview_progressgrid"></div></td>
        <td class="baseModul_level baseModul_level_INACTIVE"><strong>0</strong></td>
    </tr>
    <tr>
        <td><strong>Duranium refinery</strong></td>
        <td><div class="iteminfo_overview_progressbar" style="width:0px;"></div>
            <div class="iteminfo_overview_progressgrid"></div></td>
        <td class="baseModul_level baseModul_level_INACTIVE"><strong>0</strong></td>
    </tr>
    <tr>
        <td><strong>Promerium refinery</strong></td>
        <td><div class="iteminfo_overview_progressbar" style="width:0px;"></div>
            <div class="iteminfo_overview_progressgrid"></div></td>
        <td class="baseModul_level baseModul_level_INACTIVE"><strong>0</strong></td>
    </tr>
    <tr>
        <td><strong>Seprom refinery</strong></td>
        <td><div class="iteminfo_overview_progressbar" style="width:0px;"></div>
            <div class="iteminfo_overview_progressgrid"></div></td>
        <td class="baseModul_level baseModul_level_INACTIVE"><strong>0</strong></td>
    </tr>
</table>
            
        </div>

        <div id="module_infobox_baseModule_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_baseModule_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_baseModule_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>1</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>16</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <br />
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
</script>
                                <div id="module_solarModule_small" class="module module_small" onclick="showModule('solarModule');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_active">
                <div class="name">Solar module</div>
            </td>
            <td id="corner_small_top_right_active"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_active">
               <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                                                            <div class="level_icon"></div>
                                                        <div class="level skylab_font_level">1</div>
                        </td>
                        <td class="cellview">
                            <div class="power_icon"></div>
                            <div class="power skylab_font_power">48 / 170</div>
                        </td>
                                                <td><br /></td>
                                            </tr>
                </table>
            </td>
            <td id="corner_small_bottom_right_active"></td>
        </tr>
    </table>

</div>

<div id="module_solarModule_large" class="module module_large" style="display: none;">
    <div class="name">Solar module</div>
    <div id="module_infobox_solarModule_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_solarModule" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'solarModule');$('module_infobox_solarModule_overview_large').show(); $('module_infobox_solarModule_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_solarModule" class="tab_separator"><br /></td>
                <td id="tab_last_solarModule" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'solarModule');$('module_infobox_solarModule_upgrade_large').show(); $('module_infobox_solarModule_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_solarModule" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_solarModule_upgrade_large" class="tabContent skylab_standard" style="display: none;">
            
    
    <table class="module_infobox_upgrade" cellpadding="0" cellspacing="0">
        <tr>
            <td class="firstRow"><br /></td>
            <td class="secondRow">Instant</td>
            <td class="thirdRow skylab_price_normal" style="width:1px;">
                <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical.jpg?__cv=0f3388b877b7ef4dd20df64be8699800);"></div>
                <br />
            </td>
            <td>Normal</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Uridium</td>
            <td class="secondRow">1,487</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">0</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Credits</td>
            <td class="secondRow">16,352</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">16,352</td>
        </tr>
        <tr>
            <td class="firstRow">Time</td>
            <td class="secondRow">0:00</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">2:18</td>
        </tr>
        <tr>
            <td class="firstRow">Prometium</td>
            <td class="secondRow">707</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">707</td>
        </tr>
        <tr>
            <td class="firstRow">Endurium</td>
            <td class="secondRow">707</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">707</td>
        </tr>
        <tr>
            <td class="firstRow">Terbium</td>
            <td class="secondRow">707</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">707</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding:8px 3px">
                <div class="button_standard" style="float:right;">
                    <a style="display:block;" onfocus="this.blur()" onclick="setConfirmButtonText('confirmText', 'OK'); setCancelButtonText('cancelText', 'Cancel'); openConfirm('indexInternal.es?action=internalSkylab&amp;subaction=instantUpgrade&amp;construction=solarModule&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc', 'Confirm upgrade?')">Instant build</a>
                </div>
            </td>
            <td colspan="2" style="padding:8px 5px">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="indexInternal.es?action=internalSkylab&amp;subaction=upgrade&amp;construction=solarModule&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc">Build</a>
                </div>
            </td>
        </tr>
    </table>
            </div>
        
        <div id="module_infobox_solarModule_overview_large" class="tabContent skylab_standard">

                            <table id="solarModul_overview_content" cellpadding="0" cellspacing="0">
    <tr>
        <td class="firstRow label">Total energy consumption:</td>
        <td class="secondRow value">48 / 170</td>
    </tr>
    <tr>
        <td class="firstRow label">Basic module:</td>
        <td class="secondRow value">16</td>
    </tr>
    <tr>
        <td class="firstRow label">Storage module:</td>
        <td class="secondRow value">16</td>
    </tr>
    <tr>
        <td class="firstRow label">Transport module:</td>
        <td class="secondRow value">16</td>
    </tr>
    <tr>
        <td class="firstRow inactive label">Prometium collector:</td>
        <td class="secondRow inactive value">0</td>
    </tr>
    <tr>
        <td class="firstRow inactive label">Endurium collector:</td>
        <td class="secondRow inactive value">0</td>
    </tr>
    <tr>
        <td class="firstRow inactive label">Terbium collector:</td>
        <td class="secondRow inactive value">0</td>
    </tr>
    <tr>
        <td class="firstRow inactive label">Prometid refinery:</td>
        <td class="secondRow inactive value">0</td>
    </tr>
    <tr>
        <td class="firstRow inactive label">Duranium refinery:</td>
        <td class="secondRow inactive value">0</td>
    </tr>
    <tr>
        <td class="firstRow inactive label">Promerium refinery:</td>
        <td class="secondRow inactive value">0</td>
    </tr>
    <tr>
        <td class="firstRow inactive label">Seprom refinery:</td>
        <td class="secondRow inactive value">0</td>
    </tr>
    <tr>
        <td class="firstRow inactive label">Xeno module:</td>
        <td class="secondRow inactive value">0</td>
    </tr>
</table>            
        </div>

        <div id="module_infobox_solarModule_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_solarModule_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_solarModule_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>1</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <br />
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
</script>
                                <div id="module_storageModule_small" class="module module_small" onclick="showModule('storageModule');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_active">
                <div class="name">Storage module</div>
            </td>
            <td id="corner_small_top_right_active"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_active">
               <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                                                            <div class="level_icon"></div>
                                                        <div class="level skylab_font_level">1</div>
                        </td>
                        <td class="cellview">
                            <div class="power_icon"></div>
                            <div class="power skylab_font_power">16</div>
                        </td>
                                                <td><br /></td>
                                            </tr>
                </table>
            </td>
            <td id="corner_small_bottom_right_active"></td>
        </tr>
    </table>

</div>

<div id="module_storageModule_large" class="module module_large" style="display: none;">
    <div class="name">Storage module</div>
    <div id="module_infobox_storageModule_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_storageModule" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'storageModule');$('module_infobox_storageModule_overview_large').show(); $('module_infobox_storageModule_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_storageModule" class="tab_separator"><br /></td>
                <td id="tab_last_storageModule" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'storageModule');$('module_infobox_storageModule_upgrade_large').show(); $('module_infobox_storageModule_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_storageModule" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_storageModule_upgrade_large" class="tabContent skylab_standard" style="display: none;">
            
    
    <table class="module_infobox_upgrade" cellpadding="0" cellspacing="0">
        <tr>
            <td class="firstRow"><br /></td>
            <td class="secondRow">Instant</td>
            <td class="thirdRow skylab_price_normal" style="width:1px;">
                <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical.jpg?__cv=0f3388b877b7ef4dd20df64be8699800);"></div>
                <br />
            </td>
            <td>Normal</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Uridium</td>
            <td class="secondRow">1,487</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">0</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Credits</td>
            <td class="secondRow">16,352</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">16,352</td>
        </tr>
        <tr>
            <td class="firstRow">Time</td>
            <td class="secondRow">0:00</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">2:18</td>
        </tr>
        <tr>
            <td class="firstRow">Prometium</td>
            <td class="secondRow">707</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">707</td>
        </tr>
        <tr>
            <td class="firstRow">Endurium</td>
            <td class="secondRow">707</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">707</td>
        </tr>
        <tr>
            <td class="firstRow">Terbium</td>
            <td class="secondRow">707</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">707</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding:8px 3px">
                <div class="button_standard" style="float:right;">
                    <a style="display:block;" onfocus="this.blur()" onclick="setConfirmButtonText('confirmText', 'OK'); setCancelButtonText('cancelText', 'Cancel'); openConfirm('indexInternal.es?action=internalSkylab&amp;subaction=instantUpgrade&amp;construction=storageModule&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc', 'Confirm upgrade?')">Instant build</a>
                </div>
            </td>
            <td colspan="2" style="padding:8px 5px">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="indexInternal.es?action=internalSkylab&amp;subaction=upgrade&amp;construction=storageModule&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc">Build</a>
                </div>
            </td>
        </tr>
    </table>
            </div>
        
        <div id="module_infobox_storageModule_overview_large" class="tabContent skylab_standard">

                            <table>
    <tr>
        <td width="140px"><strong>Prometium</strong></td>
        <td width="76px">100</td>
        <td width="54px"><span>+-0</span></td>
    </tr>
    <tr>
        <td><strong>Endurium</strong></td>
        <td>100</td>
        <td><span>+-0</span></td>
    </tr>
    <tr>
        <td><strong>Terbium</strong></td>
        <td>100</td>
        <td><span>+-0</span></td>
    </tr>
    <tr>
        <td><strong>Prometid</strong></td>
        <td>0</td>
        <td><span>+-0</span></td>
    </tr>
    <tr>
        <td><strong>Duranium</strong></td>
        <td>0</td>
        <td><span>+-0</span></td>
    </tr>
    <tr>
        <td><strong>Promerium</strong></td>
        <td>0</td>
        <td><span>+-0</span></td>
    </tr>
    <tr>
        <td><strong>Seprom</strong></td>
        <td>0</td>
        <td><span>+-0</span></td>
    </tr>
</table>            
        </div>

        <div id="module_infobox_storageModule_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_storageModule_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_storageModule_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>1</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>16</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <br />
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
</script>
                                <div id="module_transportModule_small" class="module module_small" onclick="showModule('transportModule');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_active">
                <div class="name">Transport module</div>
            </td>
            <td id="corner_small_top_right_active"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_active">
               <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                                                            <div class="level_icon"></div>
                                                        <div class="level skylab_font_level">1</div>
                        </td>
                        <td class="cellview">
                            <div class="power_icon"></div>
                            <div class="power skylab_font_power">16</div>
                        </td>
                                                <td><br /></td>
                                            </tr>
                </table>
            </td>
            <td id="corner_small_bottom_right_active"></td>
        </tr>
    </table>

</div>

<div id="module_transportModule_large" class="module module_large" style="display: none;">
    <div class="name">Transport module</div>
    <div id="module_infobox_transportModule_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_transportModule" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'transportModule');$('module_infobox_transportModule_overview_large').show(); $('module_infobox_transportModule_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_transportModule" class="tab_separator"><br /></td>
                <td id="tab_last_transportModule" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'transportModule');$('module_infobox_transportModule_upgrade_large').show(); $('module_infobox_transportModule_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_transportModule" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_transportModule_upgrade_large" class="tabContent skylab_standard" style="display: none;">
                <div id="upgrade_container_max">
        Maximum upgrade level attained
    </div>
        </div>
        
        <div id="module_infobox_transportModule_overview_large" class="tabContent skylab_standard">

                            

<div id="boxTimeForTransport" style="padding-left:3px;">Arriving in: <span id="timeForTransport">?</span></div>

<form name="sendTransport" id="sendTransport" action="indexInternal.es" method="post"><input type="hidden" name="reloadToken" value="4eb59d3af62a5b88da2226a545f24bbc"><input type="hidden" name="reloadToken" value="4eb59d3af62a5b88da2226a545f24bbc">
<input type="hidden" name="action" value="internalSkylab">
<input type="hidden" name="subaction" value="startTransport">
<input type="hidden" id="target" name="target" value="ship">
<input type="hidden" id="mode" name="mode" value="normal">
<input type="hidden" id="construction" name="construction" value="TRANSPORT_MODULE">


<div id="transport_left">
    <table class="module_infobox_transportModule">
    <tr>
        <td style="width:83px;"><label for="count_prometium">Prometium:</label></td>
        <td style="width:49px;"><input type="text" name="count_prometium" id="count_prometium" onkeyup="checkTransportTime(0.12, 0);" onclick="sendFocusTransport(this.id)" class="skylab_standard" value="0" autocomplete="off" /></td>
    </tr>
    <tr>
        <td><label for="count_endurium">Endurium:</label></td>
        <td><input type="text" name="count_endurium" id="count_endurium" onkeyup="checkTransportTime(0.12, 0);" onclick="sendFocusTransport(this.id)" class="skylab_standard" value="0" autocomplete="off" /></td>
    </tr>
    <tr>
        <td><label for="count_terbium">Terbium:</label></td>
        <td><input type="text" name="count_terbium" id="count_terbium" onkeyup="checkTransportTime(0.12, 0);" onclick="sendFocusTransport(this.id)" class="skylab_standard" value="0" autocomplete="off" /></td>
    </tr>
    <tr>
        <td><label for="count_prometid">Prometid:</label></td>
        <td><input type="text" name="count_prometid" id="count_prometid" onkeyup="checkTransportTime(0.12, 0);" onclick="sendFocusTransport(this.id)" class="skylab_standard" value="0" autocomplete="off" /></td>
    </tr>
    <tr>
        <td><label for="count_duranium">Duranium:</label></td>
        <td><input type="text" name="count_duranium" id="count_duranium" onkeyup="checkTransportTime(0.12, 0);" onclick="sendFocusTransport(this.id)" class="skylab_standard" value="0" autocomplete="off" /></td>
    </tr>
    <tr>
        <td><label for="count_xenomit">Xenomit:</label></td>
        <td><input type="text" name="count_xenomit" id="count_xenomit" onkeyup="checkTransportTime(0.12, 0);" onclick="sendFocusTransport(this.id)" class="skylab_standard" value="0" autocomplete="off" /></td>
    </tr>
    <tr>
        <td><label for="count_promerium">Promerium:</label></td>
        <td><input type="text" name="count_promerium" id="count_promerium" onkeyup="checkTransportTime(0.12, 0);" onclick="sendFocusTransport(this.id)" class="skylab_standard" value="0" autocomplete="off" /></td>
    </tr>
    <tr>
        <td><label for="count_seprom">Seprom:</label></td>
        <td><input type="text" name="count_seprom" id="count_seprom" onkeyup="checkTransportTime(0.12, 0);" onclick="sendFocusTransport(this.id)" class="skylab_standard" value="0" autocomplete="off" /></td>
    </tr>
</table>
</div>

<div id="transport_right">
    <table>
        <tr>
            <td style="width:29px"><img id="to_ship" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/to_ship_1.png?__cv=871c9ce56a457da422b237f242f7fb00" width="29" height="36"></td>
            <td style="width:23px;"><img id="but_to_ship" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/but_left_1.png?__cv=c6e405a69cdb4c4b0a23ccdf6101b100" onclick="toggleTarget('ship');" width="17" height="17"></td>
            <td style="width:23px;"><img id="but_to_skylab" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/but_right_0.png?__cv=ac1391c5509c09a46cc9bd5e36c51400" onclick="toggleTarget('skylab');" width="17" height="17"></td>
            <td style="width:41px;"><img id="to_skylab" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/to_skylab_0.png?__cv=1f08c141b032cd3f3800247fe3f58100" width="41" height="36"></td>
        </tr>
        <tr>
            <td colspan="4" style="padding-top:20px;">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="javascript:sendTransport('fast', 'Confirm transport?','OK','Cancel');">Instant send</a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="padding-top:5px;"><strong>1250 U.</strong></td>
        </tr>
        <tr>
            <td colspan="4" style="padding-top:25px;">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="javascript:sendTransport('normal');">Send</a>
                </div></td>
        </tr>
    </table>
</div>
<div class="clearMe"></div>
</form>

            
        </div>

        <div id="module_infobox_transportModule_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_transportModule_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_transportModule_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>1</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>16</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <br />
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
</script>
                                <div id="module_xenoModule_small" class="module module_small" onclick="showModule('xenoModule');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_inactive">
                <div class="name_inactive">Xeno module</div>
            </td>
            <td id="corner_small_top_right_inactive"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_inactive">
            </td>
            <td id="corner_small_bottom_right_inactive"></td>
        </tr>
    </table>

</div>

<div id="module_xenoModule_large" class="module module_large" style="display: none;">
    <div class="name">Xeno module</div>
    <div id="module_infobox_xenoModule_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_xenoModule" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'xenoModule');$('module_infobox_xenoModule_overview_large').show(); $('module_infobox_xenoModule_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_xenoModule" class="tab_separator"><br /></td>
                <td id="tab_last_xenoModule" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'xenoModule');$('module_infobox_xenoModule_upgrade_large').show(); $('module_infobox_xenoModule_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_xenoModule" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_xenoModule_upgrade_large" class="tabContent skylab_standard" style="display: none;">
            
    
    <table class="module_infobox_upgrade" cellpadding="0" cellspacing="0">
        <tr>
            <td class="firstRow"><br /></td>
            <td class="secondRow">Instant</td>
            <td class="thirdRow skylab_price_normal" style="width:1px;">
                <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical.jpg?__cv=0f3388b877b7ef4dd20df64be8699800);"></div>
                <br />
            </td>
            <td>Normal</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Uridium</td>
            <td class="secondRow">750</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">0</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Credits</td>
            <td class="secondRow">8,250</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">8,250</td>
        </tr>
        <tr>
            <td class="firstRow">Time</td>
            <td class="secondRow">0:00</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">1:0</td>
        </tr>
        <tr>
            <td class="firstRow">Prometium</td>
            <td class="secondRow">75</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">75</td>
        </tr>
        <tr>
            <td class="firstRow">Endurium</td>
            <td class="secondRow">75</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">75</td>
        </tr>
        <tr>
            <td class="firstRow">Terbium</td>
            <td class="secondRow">75</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">75</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding:8px 3px">
                <div class="button_standard" style="float:right;">
                    <a style="display:block;" onfocus="this.blur()" onclick="setConfirmButtonText('confirmText', 'OK'); setCancelButtonText('cancelText', 'Cancel'); openConfirm('indexInternal.es?action=internalSkylab&amp;subaction=instantUpgrade&amp;construction=xenoModule&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc', 'Confirm upgrade?')">Instant build</a>
                </div>
            </td>
            <td colspan="2" style="padding:8px 5px">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="indexInternal.es?action=internalSkylab&amp;subaction=upgrade&amp;construction=xenoModule&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc">Build</a>
                </div>
            </td>
        </tr>
    </table>
            </div>
        
        <div id="module_infobox_xenoModule_overview_large" class="tabContent skylab_standard">

                                        <table class="module_infobox_xenoModule" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="firstRow"><strong>Xeno module</strong></td>
                    <td class="secondRow"><strong>Active</strong></td>
                    <td class="thirdRow skylab_price_normal">
                        <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical_short.png?__cv=b73ea38fd4a85fa2799b1ebde1973a00);background-repeat: no-repeat;background-position: 0px 5px"></div>
                        <strong>Inactive</strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;"></td>
                </tr>
                <tr>
                    <td class="firstRow"><strong>Xenomit consumption:</strong></td>
                    <td class="secondRow"><strong>0</strong></td>
                    <td class="thirdRow skylab_price_normal"><strong>0</strong></td>
                </tr>
                <tr>
                    <td class="firstRow"><strong>Efficiency:</strong></td>
                    <td class="secondRow"><strong>100%</strong></td>
                    <td class="thirdRow skylab_price_normal"><strong>0%</strong></td>
                </tr>
                <tr>
                    <td class="firstRow"><strong>Energy:</strong></td>
                    <td class="secondRow"><strong>0</strong></td>
                    <td class="thirdRow skylab_price_normal"><strong>0</strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;"></td>
                </tr>
            </table>
            
        </div>

        <div id="module_infobox_xenoModule_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_xenoModule_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_xenoModule_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <br />
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
</script>
                                <div id="module_prometiumCollector_small" class="module module_small" onclick="showModule('prometiumCollector');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_inactive">
                <div class="name_hint">Prometium collector</div>
            </td>
            <td id="corner_small_top_right_inactive"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_inactive">
               <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                                                            <div class="level_icon_inactive"></div>
                                                        <div class="level skylab_font_level_inactive">0</div>
                        </td>
                        <td class="cellview">
                            <div class="power_icon"></div>
                            <div class="power skylab_font_power">0</div>
                        </td>
                                                <td><br /></td>
                                            </tr>
                </table>
            </td>
            <td id="corner_small_bottom_right_inactive"></td>
        </tr>
    </table>

</div>

<div id="module_prometiumCollector_large" class="module module_large" style="display: none;">
    <div class="name">Prometium collector</div>
    <div id="module_infobox_prometiumCollector_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_prometiumCollector" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'prometiumCollector');$('module_infobox_prometiumCollector_overview_large').show(); $('module_infobox_prometiumCollector_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_prometiumCollector" class="tab_separator"><br /></td>
                <td id="tab_last_prometiumCollector" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'prometiumCollector');$('module_infobox_prometiumCollector_upgrade_large').show(); $('module_infobox_prometiumCollector_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_prometiumCollector" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_prometiumCollector_upgrade_large" class="tabContent skylab_standard" style="display: none;">
            
    
    <table class="module_infobox_upgrade" cellpadding="0" cellspacing="0">
        <tr>
            <td class="firstRow"><br /></td>
            <td class="secondRow">Instant</td>
            <td class="thirdRow skylab_price_normal" style="width:1px;">
                <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical.jpg?__cv=0f3388b877b7ef4dd20df64be8699800);"></div>
                <br />
            </td>
            <td>Normal</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Uridium</td>
            <td class="secondRow">500</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">0</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Credits</td>
            <td class="secondRow">5,500</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">5,500</td>
        </tr>
        <tr>
            <td class="firstRow">Time</td>
            <td class="secondRow">0:00</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">1:0</td>
        </tr>
        <tr>
            <td class="firstRow">Prometium</td>
            <td class="secondRow">50</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">50</td>
        </tr>
        <tr>
            <td class="firstRow">Endurium</td>
            <td class="secondRow">50</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">50</td>
        </tr>
        <tr>
            <td class="firstRow">Terbium</td>
            <td class="secondRow">50</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">50</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding:8px 3px">
                <div class="button_standard" style="float:right;">
                    <a style="display:block;" onfocus="this.blur()" onclick="setConfirmButtonText('confirmText', 'OK'); setCancelButtonText('cancelText', 'Cancel'); openConfirm('indexInternal.es?action=internalSkylab&amp;subaction=instantUpgrade&amp;construction=prometiumCollector&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc', 'Confirm upgrade?')">Instant build</a>
                </div>
            </td>
            <td colspan="2" style="padding:8px 5px">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="indexInternal.es?action=internalSkylab&amp;subaction=upgrade&amp;construction=prometiumCollector&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc">Build</a>
                </div>
            </td>
        </tr>
    </table>
            </div>
        
        <div id="module_infobox_prometiumCollector_overview_large" class="tabContent skylab_standard">

                            <div class="collector_info collector_info_prometiumCollector">
    Level:
            0
         - Production: 0

</div>            
        </div>

        <div id="module_infobox_prometiumCollector_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_prometiumCollector_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_prometiumCollector_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <br />
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
</script>
                                <div id="module_enduriumCollector_small" class="module module_small" onclick="showModule('enduriumCollector');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_inactive">
                <div class="name_hint">Endurium collector</div>
            </td>
            <td id="corner_small_top_right_inactive"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_inactive">
               <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                                                            <div class="level_icon_inactive"></div>
                                                        <div class="level skylab_font_level_inactive">0</div>
                        </td>
                        <td class="cellview">
                            <div class="power_icon"></div>
                            <div class="power skylab_font_power">0</div>
                        </td>
                                                <td><br /></td>
                                            </tr>
                </table>
            </td>
            <td id="corner_small_bottom_right_inactive"></td>
        </tr>
    </table>

</div>

<div id="module_enduriumCollector_large" class="module module_large" style="display: none;">
    <div class="name">Endurium collector</div>
    <div id="module_infobox_enduriumCollector_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_enduriumCollector" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'enduriumCollector');$('module_infobox_enduriumCollector_overview_large').show(); $('module_infobox_enduriumCollector_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_enduriumCollector" class="tab_separator"><br /></td>
                <td id="tab_last_enduriumCollector" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'enduriumCollector');$('module_infobox_enduriumCollector_upgrade_large').show(); $('module_infobox_enduriumCollector_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_enduriumCollector" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_enduriumCollector_upgrade_large" class="tabContent skylab_standard" style="display: none;">
            
    
    <table class="module_infobox_upgrade" cellpadding="0" cellspacing="0">
        <tr>
            <td class="firstRow"><br /></td>
            <td class="secondRow">Instant</td>
            <td class="thirdRow skylab_price_normal" style="width:1px;">
                <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical.jpg?__cv=0f3388b877b7ef4dd20df64be8699800);"></div>
                <br />
            </td>
            <td>Normal</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Uridium</td>
            <td class="secondRow">500</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">0</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Credits</td>
            <td class="secondRow">5,500</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">5,500</td>
        </tr>
        <tr>
            <td class="firstRow">Time</td>
            <td class="secondRow">0:00</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">1:0</td>
        </tr>
        <tr>
            <td class="firstRow">Prometium</td>
            <td class="secondRow">50</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">50</td>
        </tr>
        <tr>
            <td class="firstRow">Endurium</td>
            <td class="secondRow">50</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">50</td>
        </tr>
        <tr>
            <td class="firstRow">Terbium</td>
            <td class="secondRow">50</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">50</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding:8px 3px">
                <div class="button_standard" style="float:right;">
                    <a style="display:block;" onfocus="this.blur()" onclick="setConfirmButtonText('confirmText', 'OK'); setCancelButtonText('cancelText', 'Cancel'); openConfirm('indexInternal.es?action=internalSkylab&amp;subaction=instantUpgrade&amp;construction=enduriumCollector&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc', 'Confirm upgrade?')">Instant build</a>
                </div>
            </td>
            <td colspan="2" style="padding:8px 5px">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="indexInternal.es?action=internalSkylab&amp;subaction=upgrade&amp;construction=enduriumCollector&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc">Build</a>
                </div>
            </td>
        </tr>
    </table>
            </div>
        
        <div id="module_infobox_enduriumCollector_overview_large" class="tabContent skylab_standard">

                            <div class="collector_info collector_info_enduriumCollector">
    Level:
            0
         - Production: 0

</div>            
        </div>

        <div id="module_infobox_enduriumCollector_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_enduriumCollector_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_enduriumCollector_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <br />
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
</script>
                                <div id="module_terbiumCollector_small" class="module module_small" onclick="showModule('terbiumCollector');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_inactive">
                <div class="name_hint">Terbium collector</div>
            </td>
            <td id="corner_small_top_right_inactive"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_inactive">
               <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                                                            <div class="level_icon_inactive"></div>
                                                        <div class="level skylab_font_level_inactive">0</div>
                        </td>
                        <td class="cellview">
                            <div class="power_icon"></div>
                            <div class="power skylab_font_power">0</div>
                        </td>
                                                <td><br /></td>
                                            </tr>
                </table>
            </td>
            <td id="corner_small_bottom_right_inactive"></td>
        </tr>
    </table>

</div>

<div id="module_terbiumCollector_large" class="module module_large" style="display: none;">
    <div class="name">Terbium collector</div>
    <div id="module_infobox_terbiumCollector_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_terbiumCollector" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'terbiumCollector');$('module_infobox_terbiumCollector_overview_large').show(); $('module_infobox_terbiumCollector_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_terbiumCollector" class="tab_separator"><br /></td>
                <td id="tab_last_terbiumCollector" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'terbiumCollector');$('module_infobox_terbiumCollector_upgrade_large').show(); $('module_infobox_terbiumCollector_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_terbiumCollector" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_terbiumCollector_upgrade_large" class="tabContent skylab_standard" style="display: none;">
            
    
    <table class="module_infobox_upgrade" cellpadding="0" cellspacing="0">
        <tr>
            <td class="firstRow"><br /></td>
            <td class="secondRow">Instant</td>
            <td class="thirdRow skylab_price_normal" style="width:1px;">
                <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical.jpg?__cv=0f3388b877b7ef4dd20df64be8699800);"></div>
                <br />
            </td>
            <td>Normal</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Uridium</td>
            <td class="secondRow">500</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">0</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Credits</td>
            <td class="secondRow">5,500</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">5,500</td>
        </tr>
        <tr>
            <td class="firstRow">Time</td>
            <td class="secondRow">0:00</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">1:0</td>
        </tr>
        <tr>
            <td class="firstRow">Prometium</td>
            <td class="secondRow">50</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">50</td>
        </tr>
        <tr>
            <td class="firstRow">Endurium</td>
            <td class="secondRow">50</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">50</td>
        </tr>
        <tr>
            <td class="firstRow">Terbium</td>
            <td class="secondRow">50</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">50</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding:8px 3px">
                <div class="button_standard" style="float:right;">
                    <a style="display:block;" onfocus="this.blur()" onclick="setConfirmButtonText('confirmText', 'OK'); setCancelButtonText('cancelText', 'Cancel'); openConfirm('indexInternal.es?action=internalSkylab&amp;subaction=instantUpgrade&amp;construction=terbiumCollector&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc', 'Confirm upgrade?')">Instant build</a>
                </div>
            </td>
            <td colspan="2" style="padding:8px 5px">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="indexInternal.es?action=internalSkylab&amp;subaction=upgrade&amp;construction=terbiumCollector&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc">Build</a>
                </div>
            </td>
        </tr>
    </table>
            </div>
        
        <div id="module_infobox_terbiumCollector_overview_large" class="tabContent skylab_standard">

                            <div class="collector_info collector_info_terbiumCollector">
    Level:
            0
         - Production: 0

</div>            
        </div>

        <div id="module_infobox_terbiumCollector_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_terbiumCollector_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_terbiumCollector_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <br />
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
</script>
                                <div id="module_prometidRefinery_small" class="module module_small" onclick="showModule('prometidRefinery');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_inactive">
                <div class="name_inactive">Prometid refinery</div>
            </td>
            <td id="corner_small_top_right_inactive"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_inactive">
            </td>
            <td id="corner_small_bottom_right_inactive"></td>
        </tr>
    </table>

</div>

<div id="module_prometidRefinery_large" class="module module_large" style="display: none;">
    <div class="name">Prometid refinery</div>
    <div id="module_infobox_prometidRefinery_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_prometidRefinery" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'prometidRefinery');$('module_infobox_prometidRefinery_overview_large').show(); $('module_infobox_prometidRefinery_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_prometidRefinery" class="tab_separator"><br /></td>
                <td id="tab_last_prometidRefinery" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'prometidRefinery');$('module_infobox_prometidRefinery_upgrade_large').show(); $('module_infobox_prometidRefinery_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_prometidRefinery" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_prometidRefinery_upgrade_large" class="tabContent skylab_standard" style="display: none;">
            
    
    <table class="module_infobox_upgrade" cellpadding="0" cellspacing="0">
        <tr>
            <td class="firstRow"><br /></td>
            <td class="secondRow">Instant</td>
            <td class="thirdRow skylab_price_normal" style="width:1px;">
                <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical.jpg?__cv=0f3388b877b7ef4dd20df64be8699800);"></div>
                <br />
            </td>
            <td>Normal</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Uridium</td>
            <td class="secondRow">750</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">0</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Credits</td>
            <td class="secondRow">8,250</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">8,250</td>
        </tr>
        <tr>
            <td class="firstRow">Time</td>
            <td class="secondRow">0:00</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">1:40</td>
        </tr>
        <tr>
            <td class="firstRow">Prometium</td>
            <td class="secondRow">75</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">75</td>
        </tr>
        <tr>
            <td class="firstRow">Endurium</td>
            <td class="secondRow">75</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">75</td>
        </tr>
        <tr>
            <td class="firstRow">Terbium</td>
            <td class="secondRow">75</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">75</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding:8px 3px">
                <div class="button_standard" style="float:right;">
                    <a style="display:block;" onfocus="this.blur()" onclick="setConfirmButtonText('confirmText', 'OK'); setCancelButtonText('cancelText', 'Cancel'); openConfirm('indexInternal.es?action=internalSkylab&amp;subaction=instantUpgrade&amp;construction=prometidRefinery&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc', 'Confirm upgrade?')">Instant build</a>
                </div>
            </td>
            <td colspan="2" style="padding:8px 5px">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="indexInternal.es?action=internalSkylab&amp;subaction=upgrade&amp;construction=prometidRefinery&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc">Build</a>
                </div>
            </td>
        </tr>
    </table>
            </div>
        
        <div id="module_infobox_prometidRefinery_overview_large" class="tabContent skylab_standard">

                            <div style="height:135px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/bg_refinery_3.png?__cv=8a7c8d311f248f5e62d247296cbdc300); background-repeat:no-repeat;background-position: center">
    <div style="position:absolute;left:45px;top:5px;" class="ore_prometium"><strong>Prometium<br />
        0</strong></div>
    <div style="position:absolute;left:175px;top:5px;text-align:right;" class="ore_endurium"><strong>Endurium<br />
        0</strong></div>
    <div style="position:absolute;left:70px;top:75px;">0%</div>
    <div style="position:absolute;left:110px;top:105px;" class="ore_prometid"><strong>Prometid<br />
        0</strong></div>
            <div class="icon_efficiency icon_efficiency_0"></div>
                <div class="icon_attention"></div>
    </div>            
        </div>

        <div id="module_infobox_prometidRefinery_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_prometidRefinery_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_prometidRefinery_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <table align="center">
                        <tr>
                            <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/efficiency.png?__cv=8611ac9328986d0ad1f830f71e4ac500" width="14" height="14"></td>
                            <td><strong>0%</strong></td>
                        </tr>
                    </table>
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
$('module_infobox_prometidRefinery_infomessage').innerHTML = "Before you upgrade your Prometid refinery, you should build Prometium and Endurium collectors so that you'll have enough raw materials to refine. These collectors are located on the left in the Skylab.";
$('module_infobox_prometidRefinery_resourceWarning_large').show();
</script>
                                <div id="module_duraniumRefinery_small" class="module module_small" onclick="showModule('duraniumRefinery');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_inactive">
                <div class="name_inactive">Duranium refinery</div>
            </td>
            <td id="corner_small_top_right_inactive"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_inactive">
            </td>
            <td id="corner_small_bottom_right_inactive"></td>
        </tr>
    </table>

</div>

<div id="module_duraniumRefinery_large" class="module module_large" style="display: none;">
    <div class="name">Duranium refinery</div>
    <div id="module_infobox_duraniumRefinery_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_duraniumRefinery" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'duraniumRefinery');$('module_infobox_duraniumRefinery_overview_large').show(); $('module_infobox_duraniumRefinery_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_duraniumRefinery" class="tab_separator"><br /></td>
                <td id="tab_last_duraniumRefinery" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'duraniumRefinery');$('module_infobox_duraniumRefinery_upgrade_large').show(); $('module_infobox_duraniumRefinery_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_duraniumRefinery" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_duraniumRefinery_upgrade_large" class="tabContent skylab_standard" style="display: none;">
            
    
    <table class="module_infobox_upgrade" cellpadding="0" cellspacing="0">
        <tr>
            <td class="firstRow"><br /></td>
            <td class="secondRow">Instant</td>
            <td class="thirdRow skylab_price_normal" style="width:1px;">
                <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical.jpg?__cv=0f3388b877b7ef4dd20df64be8699800);"></div>
                <br />
            </td>
            <td>Normal</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Uridium</td>
            <td class="secondRow">750</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">0</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Credits</td>
            <td class="secondRow">8,250</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">8,250</td>
        </tr>
        <tr>
            <td class="firstRow">Time</td>
            <td class="secondRow">0:00</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">1:40</td>
        </tr>
        <tr>
            <td class="firstRow">Prometium</td>
            <td class="secondRow">75</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">75</td>
        </tr>
        <tr>
            <td class="firstRow">Endurium</td>
            <td class="secondRow">75</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">75</td>
        </tr>
        <tr>
            <td class="firstRow">Terbium</td>
            <td class="secondRow">75</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">75</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding:8px 3px">
                <div class="button_standard" style="float:right;">
                    <a style="display:block;" onfocus="this.blur()" onclick="setConfirmButtonText('confirmText', 'OK'); setCancelButtonText('cancelText', 'Cancel'); openConfirm('indexInternal.es?action=internalSkylab&amp;subaction=instantUpgrade&amp;construction=duraniumRefinery&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc', 'Confirm upgrade?')">Instant build</a>
                </div>
            </td>
            <td colspan="2" style="padding:8px 5px">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="indexInternal.es?action=internalSkylab&amp;subaction=upgrade&amp;construction=duraniumRefinery&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc">Build</a>
                </div>
            </td>
        </tr>
    </table>
            </div>
        
        <div id="module_infobox_duraniumRefinery_overview_large" class="tabContent skylab_standard">

                            <div style="height:135px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/bg_refinery_3.png?__cv=8a7c8d311f248f5e62d247296cbdc300); background-repeat:no-repeat;background-position: center">
    <div style="position:absolute;left:45px;top:5px;" class="ore_endurium"><strong>Endurium<br />
        0</strong></div>
    <div style="position:absolute;left:175px;top:5px;text-align:right;" class="ore_terbium"><strong>Terbium<br />
        0</strong></div>
    <div style="position:absolute;left:70px;top:75px;">0%</div>
    <div style="position:absolute;left:110px;top:105px;" class="ore_duranium"><strong>Duranium<br />
        0</strong></div>
            <div class="icon_efficiency icon_efficiency_0"></div>
                <div class="icon_attention"></div>
    </div>            
        </div>

        <div id="module_infobox_duraniumRefinery_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_duraniumRefinery_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_duraniumRefinery_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <table align="center">
                        <tr>
                            <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/efficiency.png?__cv=8611ac9328986d0ad1f830f71e4ac500" width="14" height="14"></td>
                            <td><strong>0%</strong></td>
                        </tr>
                    </table>
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
$('module_infobox_duraniumRefinery_infomessage').innerHTML = "Before you upgrade your Duranium refinery, you should build Endurium and Terbium collectors so that you'll have enough raw materials to refine. These collectors are located on the left in the Skylab.";
$('module_infobox_duraniumRefinery_resourceWarning_large').show();
</script>
                                <div id="module_promeriumRefinery_small" class="module module_small" onclick="showModule('promeriumRefinery');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_inactive">
                <div class="name_inactive">Promerium refinery</div>
            </td>
            <td id="corner_small_top_right_inactive"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_inactive">
            </td>
            <td id="corner_small_bottom_right_inactive"></td>
        </tr>
    </table>

</div>

<div id="module_promeriumRefinery_large" class="module module_large" style="display: none;">
    <div class="name">Promerium refinery</div>
    <div id="module_infobox_promeriumRefinery_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_promeriumRefinery" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'promeriumRefinery');$('module_infobox_promeriumRefinery_overview_large').show(); $('module_infobox_promeriumRefinery_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_promeriumRefinery" class="tab_separator"><br /></td>
                <td id="tab_last_promeriumRefinery" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'promeriumRefinery');$('module_infobox_promeriumRefinery_upgrade_large').show(); $('module_infobox_promeriumRefinery_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_promeriumRefinery" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_promeriumRefinery_upgrade_large" class="tabContent skylab_standard" style="display: none;">
            
    
    <table class="module_infobox_upgrade" cellpadding="0" cellspacing="0">
        <tr>
            <td class="firstRow"><br /></td>
            <td class="secondRow">Instant</td>
            <td class="thirdRow skylab_price_normal" style="width:1px;">
                <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical.jpg?__cv=0f3388b877b7ef4dd20df64be8699800);"></div>
                <br />
            </td>
            <td>Normal</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Uridium</td>
            <td class="secondRow">1,250</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">0</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Credits</td>
            <td class="secondRow">13,750</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">13,750</td>
        </tr>
        <tr>
            <td class="firstRow">Time</td>
            <td class="secondRow">0:00</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">3:0</td>
        </tr>
        <tr>
            <td class="firstRow">Prometium</td>
            <td class="secondRow">125</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">125</td>
        </tr>
        <tr>
            <td class="firstRow">Endurium</td>
            <td class="secondRow">125</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">125</td>
        </tr>
        <tr>
            <td class="firstRow">Terbium</td>
            <td class="secondRow">125</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">125</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding:8px 3px">
                <div class="button_standard" style="float:right;">
                    <a style="display:block;" onfocus="this.blur()" onclick="setConfirmButtonText('confirmText', 'OK'); setCancelButtonText('cancelText', 'Cancel'); openConfirm('indexInternal.es?action=internalSkylab&amp;subaction=instantUpgrade&amp;construction=promeriumRefinery&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc', 'Confirm upgrade?')">Instant build</a>
                </div>
            </td>
            <td colspan="2" style="padding:8px 5px">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="indexInternal.es?action=internalSkylab&amp;subaction=upgrade&amp;construction=promeriumRefinery&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc">Build</a>
                </div>
            </td>
        </tr>
    </table>
            </div>
        
        <div id="module_infobox_promeriumRefinery_overview_large" class="tabContent skylab_standard">

                            <div style="height:135px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/bg_refinery_4.png?__cv=9dd223956044f647ac612c7c50752200); background-repeat:no-repeat;background-position: center">
    <div style="position:absolute;left:45px;top:5px;" class="ore_prometid"><strong>Prometid<br />
        0</strong></div>
    <div style="position:absolute;left:165px;top:15px;text-align:right;" class="ore_duranium"><strong>Duranium<br />
        0</strong></div>
    <div style="position:absolute;left:195px;top:60px;text-align:right;" class="ore_xenomit"><strong>Xenomit<br />
        0</strong></div>
    <div style="position:absolute;left:70px;top:75px;">0%</div>
    <div style="position:absolute;left:110px;top:105px;" class="ore_promerium"><strong>Promerium<br />
        0</strong></div>
            <div class="icon_efficiency icon_efficiency_0"></div>
                <div class="icon_attention"></div>
    </div>
            
        </div>

        <div id="module_infobox_promeriumRefinery_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_promeriumRefinery_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_promeriumRefinery_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <table align="center">
                        <tr>
                            <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/efficiency.png?__cv=8611ac9328986d0ad1f830f71e4ac500" width="14" height="14"></td>
                            <td><strong>0%</strong></td>
                        </tr>
                    </table>
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
$('module_infobox_promeriumRefinery_infomessage').innerHTML = "Before you upgrade your Promerium refinery, you should build Prometid and Duranium refineries as well as a Xeno module so that you'll have enough resources to refine. These refineries are located on the right in the Skylab.";
$('module_infobox_promeriumRefinery_resourceWarning_large').show();
</script>
                                <div id="module_sepromRefinery_small" class="module module_small" onclick="showModule('sepromRefinery');"">

    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="corner_small_top_left_inactive">
                <div class="name_inactive">Seprom refinery</div>
            </td>
            <td id="corner_small_top_right_inactive"></td>
        </tr>
        <tr>
            <td id="corner_small_bottom_left_inactive">
            </td>
            <td id="corner_small_bottom_right_inactive"></td>
        </tr>
    </table>

</div>

<div id="module_sepromRefinery_large" class="module module_large" style="display: none;">
    <div class="name">Seprom refinery</div>
    <div id="module_infobox_sepromRefinery_large" class="module_infobox">
            <table class="tabs" cellpadding="0" cellspacing="0">
            <tr>
                <td id="tab_first_sepromRefinery" class="tab_first skylab_font_tab_selected" onclick="changeTwoTab('first', 'sepromRefinery');$('module_infobox_sepromRefinery_overview_large').show(); $('module_infobox_sepromRefinery_upgrade_large').hide();">Info</td>
                <td id="tab_separator_first_sepromRefinery" class="tab_separator"><br /></td>
                <td id="tab_last_sepromRefinery" class="tab_end skylab_font_tab_unselected" onclick="changeTwoTab('last', 'sepromRefinery');$('module_infobox_sepromRefinery_upgrade_large').show(); $('module_infobox_sepromRefinery_overview_large').hide();">Upgrade</td>
                <td id="tab_endseparator_sepromRefinery" class="tab_endseparator"><br /></td>
            </tr>
        </table>
            <div class="tabContentHead">
            <div class="tabContentHeadClose" onclick="closeAllModules();"></div>
        </div>
        <div id="module_infobox_sepromRefinery_upgrade_large" class="tabContent skylab_standard" style="display: none;">
            
    
    <table class="module_infobox_upgrade" cellpadding="0" cellspacing="0">
        <tr>
            <td class="firstRow"><br /></td>
            <td class="secondRow">Instant</td>
            <td class="thirdRow skylab_price_normal" style="width:1px;">
                <div style="position:absolute;width:1px;height:124px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_vertical.jpg?__cv=0f3388b877b7ef4dd20df64be8699800);"></div>
                <br />
            </td>
            <td>Normal</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Uridium</td>
            <td class="secondRow">2,500</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">0</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td class="firstRow">Credits</td>
            <td class="secondRow">27,500</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">27,500</td>
        </tr>
        <tr>
            <td class="firstRow">Time</td>
            <td class="secondRow">0:00</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">6:0</td>
        </tr>
        <tr>
            <td class="firstRow">Prometium</td>
            <td class="secondRow">250</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">250</td>
        </tr>
        <tr>
            <td class="firstRow">Endurium</td>
            <td class="secondRow">250</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">250</td>
        </tr>
        <tr>
            <td class="firstRow">Terbium</td>
            <td class="secondRow">250</td>
            <td><br /></td>
            <td class="thirdRow skylab_price_normal">250</td>
        </tr>
        <tr>
            <td colspan="4" style="height:1px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/seperator_horizontal.jpg?__cv=b7a2175510ce6023a12e11870f954500);background-repeat:no-repeat;background-position: 65px;"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding:8px 3px">
                <div class="button_standard" style="float:right;">
                    <a style="display:block;" onfocus="this.blur()" onclick="setConfirmButtonText('confirmText', 'OK'); setCancelButtonText('cancelText', 'Cancel'); openConfirm('indexInternal.es?action=internalSkylab&amp;subaction=instantUpgrade&amp;construction=sepromRefinery&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc', 'Confirm upgrade?')">Instant build</a>
                </div>
            </td>
            <td colspan="2" style="padding:8px 5px">
                <div class="button_standard">
                    <a style="display:block" onfocus="this.blur()" href="indexInternal.es?action=internalSkylab&amp;subaction=upgrade&amp;construction=sepromRefinery&amp;reloadToken=4eb59d3af62a5b88da2226a545f24bbc">Build</a>
                </div>
            </td>
        </tr>
    </table>
            </div>
        
        <div id="module_infobox_sepromRefinery_overview_large" class="tabContent skylab_standard">

                            <div style="height:135px;background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/bg_refinery_2.png?__cv=5a25a0c14d434545e396a7fc9d45e000); background-repeat:no-repeat;background-position: center">
    <div style="position:absolute;left:45px;top:5px;" class="ore_promerium"><strong>Promerium<br />
        0</strong></div>
    <div style="position:absolute;left:70px;top:75px;">0%</div>
    <div style="position:absolute;left:110px;top:105px;" class="ore_seprom"><strong>Seprom<br />
        0</strong></div>
            <div class="icon_efficiency icon_efficiency_0"></div>
                <div class="icon_attention"></div>
    </div>
            
        </div>

        <div id="module_infobox_sepromRefinery_resourceWarning_large" class="tabContent skylab_standard" style="display: none; position: absolute; top: 21px; height: 145px; background: none;">
            <div style="position: absolute; left: 0px; top: 0px; height: 160px; background: black; opacity: 0.85; filter: alpha(opacity=85); width: 100%;"></div>
            <div id="module_infobox_sepromRefinery_infomessage" style="position: absolute; top: 24px; left: 10px; width: 244px;"></div>
            <div class="button_standard" style="position: relative; top: 120px; margin: auto;">
                <a style="display: block;" onfocus="this.blur()" onclick="$('module_infobox_sepromRefinery_resourceWarning_large').hide();" href="#"><strong>OK</strong></a>
            </div>
        </div>

    </div>


    <div class="div_infobar">
        <table class="table_infobar" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width:28px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power_disabled.png?__cv=b0a4878430feb41ac03c5a6d796fda00" width="14" height="14" />
                        </td>
            <td style="width:52px;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_level">
                <table align="center">
                    <tr>
                        <td>
                                                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/icon_level.png?__cv=c5bbdd1dac33d888d7141d2e51405000">
                            </td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:104px;text-align:center;border-right:2px solid #b1b1b1;border-top:2px solid #b1b1b1;" class="skylab_font_power">
                <table align="center">
                    <tr>
                        <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/power.png?__cv=81958f36b34ae36633e37bddedcdc500" width="14" height="14"></td>
                        <td><strong>0</strong></td>
                    </tr>
                </table>
            </td>
            <td style="width:74px;border-top:2px solid #b1b1b1;" class="skylab_font_efficiency">
                                    <table align="center">
                        <tr>
                            <td><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/skylab/efficiency.png?__cv=8611ac9328986d0ad1f830f71e4ac500" width="14" height="14"></td>
                            <td><strong>0%</strong></td>
                        </tr>
                    </table>
                            </td>
        </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
$('module_infobox_sepromRefinery_infomessage').innerHTML = "Before you upgrade your Seprom refinery, you should build a Promerium refinery so that you'll have enough resources to refine. This refinery is located on the right in the Skylab.";
$('module_infobox_sepromRefinery_resourceWarning_large').show();
</script>    </div>
   </div>
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
    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=4&source=country%3DIT%26areaID%3Dinternal.other%26aid%3D332%26acm%3D%26acr%3D579%26aip%3D%26gameID%3D579%26uid%3D98026209%26locale%3Dus&sign=VjEhPJZRQwkEQv2Y2cP2mGSLduT1DAERgibuQGOm"></script>    </div>
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
<script type="text/javascript" language="JavaScript" src="https://akimu.bigpoint.com/trk?rt=1&ti=3547&cs=8377&aid=332&aip=&pid=579&ppid=22&language=en&country=IT&ctype=0&ts=1368800289&mid=151430678&jsopenclose=false"></script>
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
res = '<scr' + 'ipt type="text/javascript" src="http://akimu.bigpoint.com/trk?rt=1&ti=3549&cs=5764&aid=332&aip=&pid=579&ppid=22&language=en&country=IT&ctype=0&ts=1368800289&searchQuery=' + s;
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
<!-- SensorT-Bigpoint - SEA-SEO Pageview - END --><!-- BPID --><script language="javascript">window.bpid=window.bpid||{};window.bpid.callbacks=window.bpid.callbacks||[];window.bpid.callbacks.push(function(bpid) {document.cookie="__bpid="+bpid+";path=/;expires=Fri, 03 Jun 2022 13:59:24 GMT;";if (bpid != "518691273uWkiotnZMSa6qYesuCcJmDB") {try {var xhr = new XMLHttpRequest();xhr.open("GET", "\/GameAPI.php?action=core.bpid&bpid="+bpid, true);xhr.send(null);} catch(e) {}}});</script><script language="javascript" src="//assets.bpsecure.com/bpid/bpid.js?ts=380222" defer="defer"></script><!-- /BPID --><script type="text/javascript">var _gaq = _gaq || [];_gaq.push(['_gat._anonymizeIp']);_gaq.push(['_setDomainName', 'none']);_gaq.push(['_setAllowLinker', true]);_gaq.push(['_setAllowHash', false]);_gaq.push(['_setCustomVar', 1, 'aid', '332', 2]);_gaq.push(['_setCustomVar', 2, 'aip', '', 2]);_gaq.push(['_setCustomVar', 3, 'ait', 'keyword', 2]);_gaq.push(['_setCustomVar', 4, 'areaID', 'internal.other', 2]);_gaq.push(['_setAccount', 'UA-1848713-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalSkylab&areaID=internal.other']);_gaq.push(['_trackPageLoadTime']);_gaq.push(['_setAccount', 'UA-17685913-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalSkylab&areaID=internal.other']);_gaq.push(['_trackPageLoadTime']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = 'http://www.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>

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
            <div class="text" style="background-image: url(/do_img/global/text_tf.esg?s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey);"></div>
        </div>
        <div class="button button-blue">
            <div class="text" style="background-image: url(/do_img/global/text_tf.esg?s=12&t=confirmBox_cancel&f=eurostyle_thea&color=white&bgcolor=grey);"></div>
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
            var paymentURL   = 'https://ssl.bigpoint.net/billing/?req=YToxMjp7czo2OiJ1c2VySUQiO3M6ODoiOTgwMjYyMDkiO3M6ODoidXNlcm5hbWUiO3M6ODoiemlvcGlvNzAiO3M6ODoibWVtYmVySUQiO3M6OToiMTUxNDMwNjc4IjtzOjQ6ImJwaWQiO3M6MzI6IjUxODY5MTI3M3VXa2lvdG5aTVNhNnFZZXN1Q2NKbURCIjtzOjc6InVzZXJBZ2UiO2k6NDM7czoxNDoiZmJfYXBwbGljYXRpb24iO2I6MDtzOjk6InByb2plY3RJRCI7czozOiI1NzkiO3M6MzoiYWlkIjtpOjMzMjtzOjM6ImFpcCI7czowOiIiO3M6NDoibGFuZyI7czoyOiJlbiI7czozOiJkZXYiO2I6MDtzOjQ6InRpbWUiO2k6MTM2ODgwMDI4ODt9&aid=332&aip=&hash=79d7ebb8c2a64537384229e862e078f7';
            BPLayertool2.Helper.setPaymentLink(paymentURL);
            BPLayertool2.Helper.setUserId(98026209);
            BPLayertool2.Helper.setRequestTime(1368800288);
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
<script language="javascript" type="text/javascript">

var refresh = 'Refresh skylab';
var help = 'Help';



jQuery("#skylabReloader").qtip({
    content: refresh,
    style:'dohdr',
    position:{target:'mouse'}
})

jQuery("#skylabHelp").qtip({
    content: help,
    style:'dohdr',
    position:{target:'mouse'}
})

</script>
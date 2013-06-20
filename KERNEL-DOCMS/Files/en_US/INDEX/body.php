<div id="do_globalContent">

<div id="do_flash_background">
    <!--<div id="do_flash_heat">--> <!-- filled via Javascript --> <!--</div>-->
    <!--<div id="do_flash_light_form">--> <!-- filled via Javascript --> <!--</div>-->
    <!--<div id="do_flash_logo">--> <!-- filled via Javascript -->  <!--</div>-->

        <div id="do_flash_nyx">
                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/externalDefault/nyx.png?__cv=d6635d8d2a3d0872c9cea4d601a2e900" alt="nyx fallback" style="margin-top: 14px; margin-left: 18px; " />
    </div>
    

	<div id="do_flash_trailer">
		<img src=" http://darkorbit-22.ah.bpcdn.net/do_img/global/externalDefault/trailer_FALLBACK.png?__cv=4674fc526817ea03b6494947627e9300" alt="nyx fallback" />
	</div>

    <a id="hostBackLink" href="http://www.darkorbit.com"></a>
</div>

<div class="do_story">
    <img id="do_story_titel" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/txt_story.png?__cv=a6fff5e9ca440a9c5564728d4841ea00" alt="Story" />
    <div id="do_story_content" class="scroll_pane">
        <span>
                            <h1>DarkOrbit - the browser-based, action-packed space game.</h1>
        Experience awesome adventures in a far-away galaxy. Play with thousands of real players in the Bigpoint browser game DarkOrbit.
        Make a name for yourself: Choose one of three companies, join a clan and earn power and resources in this browser game. Fight side by side with your allies and work together to end the DarkOrbit war.
        But even flying solo, you'll never be bored, thanks to an astonishing variety of challenging missions! DarkOrbit quests can include research, collection and battle. One thing's for sure: Browser game fans will definitely find something to shout about.<br /><br />
                    </span>
        <p>
                            <a href="http://www.darkorbit.com/big/space-online-games/">space online games</a>
                <a href="http://www.darkorbit.com/big/spaceships/">spaceships</a>
                <a href="http://www.darkorbit.com/big/multiplayer-games/">multiplayer games</a>
                <a href="http://www.darkorbit.com/big/strategy-online-games/">strategy online games</a>
                <a href="http://www.darkorbit.com/big/action-games/">action games</a>
                <a href="http://www.darkorbit.com/big/mmog/">mmog</a>
                <a href="http://www.darkorbit.com/big/online-games/">online games</a>
                <a href="http://www.darkorbit.com/big/scifi-games/">scifi games</a>
                <a href="http://www.darkorbit.com/big/online-rpg-games/">online rpg games</a>
                <a href="http://www.darkorbit.com/big/internet-games/">internet games</a>
                        </p>
    </div>
</div>

<div class="do_login_container">
    <!-- contains login -->
    <input type="hidden" id="autoFocus" value="regForm" />

    
<div id="loginForm_default_container">
    <form id="loginForm_default" method="post" action="/?locale=us&amp;aid=0" name="loginForm_default">
        <div id="loginForm_default_link_forgot_password_container">
            <a id="loginForm_default_link_forgot" href="/index.es?action=externalPassword" >Forgot your password?</a>
        </div>
        <div id="loginForm_default_label_username_container">
            <label id="loginForm_default_label_username" for="loginForm_default_input_username">Username</label>
        </div>
        <div id="loginForm_default_input_username_container">
            <input type="text" id="loginForm_default_input_username" class="loginForm_default_input" name="loginForm_default_username" />
        </div>
        <div id="loginForm_default_label_password_container">
            <label id="loginForm_default_label_password" for="loginForm_default_input_password">Password</label>
        </div>
        <div id="loginForm_default_input_password_container">
            <input type="password" id="loginForm_default_input_password" class="loginForm_default_input" name="loginForm_default_password" />
        </div>
        
                <div id="loginForm_bookmark_container">
            <a rel="sidebar" href="http://int1.darkorbit.bigpoint.com?locale=us&aid=0&utm_source=direct&utm_medium=(none)&utm_content=bookmark&utm_campaign=darkorbit" onclick=" _gaq.push(['_trackEvent', 'stPg', 'brwLnk', 'bkm']);"  id="bookmark_feature_bookmark_text" title="DarkOrbit">Save DarkOrbit as bookmark</a>         
        </div>
        
        
        <div id="loginForm_default_loginButton_container">
            <input type="submit" value="Login" id="loginForm_default_loginButton" class="loginForm_default_button" name="loginForm_default_login_submit"  />
        </div>
        <div id="loginForm_default_signupButton_container">
            <input type="submit" value="Register" id="loginForm_default_signupButton" class="loginForm_default_button" name="loginForm_default_signup_submit" onclick="window.location='/index.es?action=externalSignup&aid=0'; return false;" />
        </div>
            </form>

    <div class="layout2">
<!--
                <div onclick="showOpenId()" class="openidButton gl_openidIcon"></div>
        
                <div id="loginForm_default_facebookConnect_container">
            <div onclick="gl_facebook.requireSession(); return false;" class="facebookButton gl_facebookIcon"></div>

                    </div>
					-->
                <div style="clear:both"></div>
    </div>
</div>

<div id="loginForm_openId_container">
    <div id="loginForm_openId_hideOpenId_handle" onclick="hideOpenId()">Back</div>
    <form id="loginForm_openId" method="post" action="/?locale=us&amp;aid=0" name="loginForm_openId">
        <div id="loginForm_openId_label_openIdUrl_container">
            <label id="loginForm_openId_label_openIdUrl" for="loginForm_openId_input_openIdUrl">OpenID URL</label>
        </div>
        <div id="loginForm_openId_input_openIdUrl_container">
            <input name='loginForm_openId_openIdUrl' type="text" id="loginForm_openId_input_openIdUrl" class="loginForm_openId_input" />
        </div>
        <div id="loginForm_openId_loginButton_container">
            <input type="submit" value="Login" id="loginForm_openId_loginButton" class="loginForm_openId_button" name="loginForm_openId_login_submit" />
        </div>
    </form>
</div>


    </div>
<script type="text/javascript">

jQuery('document').ready(function() {
    var tmp = jQuery('#loginForm_default_input_password');
    if(tmp) {
        tmp.bind('click', function(event)
        {
            tmp.focus();
        });
    }
});

</script>

<div id="do_signupCounter" class="fontStyle">
Registered: 0
</div>
<div class="do_cobrand_container">
    <img id="PartnerCobrandLogo" src="http://pit-835.a.bpcdn.net/published/cobrands/0_22_2.png" />
</div>

<div class="do_social_features">
    <div id="DOGooglePlus" class="socialBox "></div>
    <div id="DOFacebookLike" class="socialBox "></div>
</div>
<div style="clear: both;"></div>

<div class="do_teaser_box">
                
    <img class="teaser_item" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/teaser_box_1.jpg?__cv=ee9471df1a0b011ab816401cc29b7400" alt="teaser box 1"  />
    <img class="teaser_item" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/teaser_box_2.jpg?__cv=388a58d5fd3f8604d01a79749d878500" alt="teaser box 2"  style="display:none;" />
    <img class="teaser_item" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/teaser_box_3.jpg?__cv=ddedad6608f0327924c1a643f97a7700" alt="teaser box 3"  style="display:none;" />
    <img class="teaser_item" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/teaser_box_4.jpg?__cv=11a926b4eddef0583236806865937500" alt="teaser box 4"  style="display:none;" />
    <img class="teaser_item" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/teaser_box_5.jpg?__cv=c8515f2497d36f8bc902cc2304fafc00" alt="teaser box 5"  style="display:none;" />
</div>

<div class="do_select_lang" >
    <div id="selectedLanguageBox" onclick="jQuery('#languageBox').slideToggle(300);">
        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/flaggen/plain/us.png?__cv=4e0a76533cc5a5a0aab42d43ab1a0f00" alt="English US" id="currentLanguageFlag" />
        <div id="currentLanguageText">English US</div>
        <div id="languageArrow"></div>
    </div>

    <div id="languageBox" style="display: none">
            <div class="languageList" onclick="redirect('index.es?lang=us')">
            <div class="languageFlag" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/flaggen/plain/us.png?__cv=4e0a76533cc5a5a0aab42d43ab1a0f00);"></div>
            <div class="languageName">English US</div>
        </div>
        </div>
</div>


<div class="do_screenshot">
    <script type="text/javascript">
        
        $_jq(document).ready(function(){
            $_jq('.screenshotLink').colorbox({transition:'none', rel:'ScreenRel'});
        });
        
    </script>

    <img id="screenshotsTitel" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/txt_screenshots.png?__cv=7274828dd9f171a294c249691abdc900" alt="Screenshots" />

    <a href="http://darkorbit-22.ah.bpcdn.net/do_img/global/externalHome/screenshots/screenshot-01.jpg?__cv=48c9c210bd8ff035294a694daeca6700" rel="ScreenRel" class="screenshotLink">
        <img style="width: 166px; height: 114px; margin: 9px 0 0 11px;"
             src="http://darkorbit-22.ah.bpcdn.net/do_img/global/externalHome/screenshots/screenshot-01-thumbnail.jpg?__cv=6f34d57c402092582dcf3ae519bdf300" alt="thumbnail" />
    </a>

    <a href="http://darkorbit-22.ah.bpcdn.net/do_img/global/externalHome/screenshots/screenshot-02.jpg?__cv=409c2ea5c0834951f1625f55efa10400" rel="ScreenRel" class="screenshotLink">
        <img style="width: 166px; height: 114px; margin-left: 15px;"
             src="http://darkorbit-22.ah.bpcdn.net/do_img/global/externalHome/screenshots/screenshot-02-thumbnail.jpg?__cv=0a0f238e5eede18d8e5c8b607aadeb00" alt="thumbnail" />
    </a>
</div>

<!--<div class="do_like_box" >
    <img id="do_like_box_titel" src="http://darkorbit-22.ah.bpcdn.net/do_img/en/externalDefault/txt_newsstream.png?__cv=dc8e75adf7ce855cc9c43916b054a400" alt="Like Box" />
    <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fdarkorbit&amp;width=360&amp;height=198&amp;colorscheme=dark&amp;show_faces=true&amp;border_color=%23333333&amp;stream=true&amp;header=false" scrolling="no" frameborder="0" style=" border:none; overflow:hidden; width:360px; height:198px; margin-top: 17px; margin-left: 19px;" allowTransparency="true"></iframe>
</div>
-->
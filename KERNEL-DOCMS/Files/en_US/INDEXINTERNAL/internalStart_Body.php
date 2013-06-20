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
                    <img src="../do_img/global/text_tf.esg?l=en&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey" />
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
                            '../do_img/global/text_tf.esg?l=us&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey'
                         );">
                    </div>
                </div>
                <div class="popup_shop_abort_button">
                    <div class="popup_shop_abort_text"
                         style="background-image: url(
                            '../do_img/global/text_tf.esg?l=us&s=12&t=confirmBox_cancel&f=eurostyle_thea&color=white&bgcolor=grey'
                         );"
                         onclick="closeInfoLayer();">
                    </div>
                </div>
            </div>

            <div id="infoLayerInfo">
                <div class="popup_shop_close_button">
                    <div class="popup_shop_close_text"
                         style='background-image: url("../do_img/global/text_tf.esg?l=us&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey");'
                         onclick="closeInfoLayer();"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
</script>

<?php require GLOBALS . 'internalHelpLayer.php'; require GLOBALS . 'internalNews.php'; ?>
                  

<div class="backgroundImageContainer">
    <div class="overallContainer">
        <div class="rightBannerContainer">
                    <!-- notrans -->
            <div id="banner-right">
                                                    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=6&source=country%3DES%26areaID%3Dinternal.home%26aid%3D0%26acm%3D%26acr%3D47%26aip%3D%26gameID%3D47%26uid%3D98173484%26locale%3Dus&sign=VjFbfY9RU24HETjdL%2F0OmDidInIeJguH%2Blz47sHE"></script>
                                            </div>
            <!-- end notrans -->
                </div>
        <div class="outerContainer fliess11px-gelb">
            
<?php require GLOBALS . 'internalHeaderIntern.php'; ?>

    

            <div class="bodyContainer">
                




<script>

function showPopup(id) {
    showBusyLayer();

    var win = window;
    width_x = win.innerWidth ? win.innerWidth : win.document.body.clientWidth;
    container_x = document.getElementById(id).style.width.substr(0,document.getElementById(id).style.width.length-2);
    document.getElementById(id).style.left = ((width_x/2) - (container_x/2))+"px";
    document.getElementById(id).style.top = "100px";
    document.getElementById(id).style.display = 'block';
}

function closePopup(id) {
    hideBusyLayer();
    document.getElementById(id).style.display = 'none';
}

function changeTeaser(show, hide) {
    $(show+'_teaser').style.backgroundImage = 'url(http://darkorbit-22.ah.bpcdn.net/do_img/global/left/button_active.png?__cv=62a003d4934cb9fc5b10c8ae17939b00)';
    $(show).style.display = "block";
    $(hide+'_teaser').style.backgroundImage = 'url(http://darkorbit-22.ah.bpcdn.net/do_img/global/left/button_normal.png?__cv=3eca2f61bbe1e73faebf277f57e1ff00)';
    $(hide).style.display = "none";
}
function changeCompetitionTab(type, numberOfTabs) {
    $$('.competitionContent').each(Element.hide);
    $('competitionContent_' + type).show();
}



</script>



<div id="content">
    <!-- Navigation -->
    <div id="nav" style="text-align:right;">

    <script type="text/javascript">
        var serverTime = '<?php echo date('h:i a'); ?>';
        var serverDate = '<?php echo date('d.m.Y'); ?>';
        var meridiem_am = 'A.M.';
        var meridiem_pm = 'P.M.';

        tmp = serverTime.split(':');
        tmp2 = tmp[1].split(' ');

        var hour = tmp[0];
        var minute = tmp2[0];
        var meridiem = tmp2[1];

    </script>

        <div id="serverTimeContainer">
            <span id="serverTime">00:00</span>
            <span id="meridiem"></span>
        </div>
        <script type="text/javascript">
            updateServerTime();
            window.setInterval('updateServerTime();', 60000);

            
                jQuery("#serverTimeContainer").qtip({
                content: serverDate,
                style:'dohdr',
                position:{target:'mouse'}
            })

            
        </script>

<?php
$randNum = rand(1, 11);
$randNum = (($randNum < 10) ? '0' : '') . $randNum;
?>
  <div id="teaser_left" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/teaser/left_start_<?php echo $randNum; ?>.jpg);">
                                        </div>
                </div>

        <!-- Ende Navigation -->
        <!-- Content -->
        <div id="mainContentStart" class="fliess11px-gelb" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/en/bg_start.jpg?__cv=4a17f5b4999634b06a86f584e6f97900);">

            <div id="breakingNewsContainer" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/events/benefitPremium.gif?__cv=9eb1a573d24ca0f231e9bbb5ec7c0400);">
            <div class="breakingNewsTitleContainer">
                <div class="breakingNewsTitle">--- Premium fun with Premium advantages --- Premium fun with Premium advantages --- Premium fun with Premium advantages --- Premium fun with Premium advantages --- Premium fun with Premium advantages --- Premium fun with Premium advantages --- Premium fun with Premium advantages --- Premium fun with Premium advantages --- Premium fun with Premium advantages --- Premium fun with Premium advantages ---</div>
            </div>
            </div>
            <input type="hidden" id="currentIconID" value="hadesGate" />
            <div id="breakingNewsContainerFrame" onclick="showNews('hadesGate');"></div>
            <div id="breakingNewsIconContainer">
                <div class="breakingNewsIcon" id="breakingNewsIcon1" onmouseover="breakingNews.over(1);" onmouseout="breakingNews.out();" onclick="showNews('benefitPremium');" style="margin-right: 8px; background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/events/icons/benefitPremium.gif?__cv=5992cf3238af515ea2c6d019a7707900);"></div>
                <div class="breakingNewsIcon" id="breakingNewsIcon2" onmouseover="breakingNews.over(2);" onmouseout="breakingNews.out();" onclick="showNews('messageSystemLaunch');" style="margin-right: 8px; background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/events/icons/messageSystemLaunch.gif?__cv=f1844f7361ac34b03cb1431fe2e8fe00);"></div>
                <div class="breakingNewsIcon" id="breakingNewsIcon3" onmouseover="breakingNews.over(3);" onmouseout="breakingNews.out();" onclick="showNews('achievementSystemMS2');" style="margin-right: 8px; background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/events/icons/achievementSystem.gif?__cv=e74351b6c2629f14313d1c053d981900);"></div>
                <div class="breakingNewsIcon" id="breakingNewsIcon4" onmouseover="breakingNews.over(4);" onmouseout="breakingNews.out();" onclick="showNews('killscreen2');" style="margin-right: 8px; background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/events/icons/killScreen.gif?__cv=057256af8dde4849f2c94af96014ff00);"></div>
                <div class="breakingNewsIcon" id="breakingNewsIcon5" onmouseover="breakingNews.over(5);" onmouseout="breakingNews.out();" onclick="showNews('hangarRenamingPremium');" style="margin-right: 8px; background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/events/icons/hangarRenaming.gif?__cv=110cb0962015ec01193ff603bb948700);"></div>
                <div class="breakingNewsIcon" id="breakingNewsIcon6" onmouseover="breakingNews.over(6);" onmouseout="breakingNews.out();" onclick="showNews('hadesGate');" style="margin-right: 8px; background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/events/icons/hadesGateAnnouncement.gif?__cv=537f89669a87ee8acfa0409c35ec7700);"></div>
            </div>
            <script type="text/javascript">
            var breakingNews = new BreakingNews();
            breakingNews.setMaxIconID(6);
            breakingNews.setKeys(new Array("benefitPremium", "messageSystemLaunch", "achievementSystemMS2", "killscreen2", "hangarRenamingPremium", "hadesGate"));
            breakingNews.setImages(new Array("benefitPremium.gif", "messageSystemLaunch.gif", "achievements_2.gif", "killScreen.gif", "hangarRenaming.gif", "hadesGateAnnouncement.gif"));
            breakingNews.setTitles(new Array("Premium fun with Premium advantages", "<span class=\"bn_headline\">New messaging system!</span>", "New title system - many new achievements", "Repair your ship on the spot right now.", "New Premium Plus! Name Your Hangars", "Hades Gate - a Galaxy Gate for groups!"));
            breakingNews.setLinks(new Array("action=internalPayment", "", "", "", "", ""));
            breakingNews.setDurations(new Array("5", "5", "5", "5", "5", "5"));
            breakingNews.init();
            breakingNews.start();
            </script>

            <table id="mainContentTable">
            <tr>
                <td id="mainContentTable_left"><br /></td>
                <td id="mainContentTable_center">
                                    </td>
                <td id="mainContentTable_right"><br /></td>
            </tr>
            <tr>
                <td id="startRow1"><br /></td>
                <td id="cell_news">

                </td>
                <td id="cell_userInfo">
                    <div class="userInfo_left fliess10px-white">Username:</div><div class="userInfo_right"><?php echo $Users->DataRow['Name']; ?></div><br class="clearMe" />
                    <div class="userInfo_left fliess10px-white">Server:</div><div class="userInfo_right">Global</div><br class="clearMe" />
                    <div class="userInfo_left fliess10px-white">Rank:</div><div class="userInfo_right">
                    <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/ranks/rank_1.png" style="vertical-align: baseline; position: relative; top: 4px;">
                    Basic Space Pilot</div><br class="clearMe" />
                    <div class="userInfo_left fliess10px-white">Premium:</div><div class="userInfo_right">Yes</div><br class="clearMe" />                    <div class="userInfo_left fliess10px-white">Level:</div><div class="userInfo_right">1</div><br class="clearMe" />
                    <div class="userInfo_left fliess10px-white">Company:</div><div class="userInfo_right"><?php echo ($Users->DataRow['factionId'] === '1') ? 'MMO' : (($Users->DataRow['factionId'] === '2') ? 'EIC' : 'VRU'); ?></div><br class="clearMe" />
                    <div class="userInfo_left fliess10px-white">Your location:</div><div class="userInfo_right">Tutorial</div><br class="clearMe" />
                    <div class="userInfo_left fliess10px-white">User since:</div><div class="userInfo_right">2013-05-12</div><br class="clearMe" />                    <div class="userInfo_center">
                    <a href="indexInternal.es?action=internalPilotSheet" onfocus="this.blur()"><u>Profile</u></a> | 
                    <a href="indexInternal.es?action=internalUserDataChange" onfocus="this.blur()"><u>Change</u></a>                    </div>
                    
                </td>
            </tr>
            <tr>
                <td><br /></td>
                <td style="vertical-align: top;">
                    <div id="div_ranking">
                    <table id="table_ranking" class="fliess10px-white">
                        <tr><td>1.</td><td class="table_ranking_center fliess10px-gelb" showUser="1xxjm"><b><span class="userInfoName" title="jonnyc1972 - click for details">jonnyc1972</span></b></span></td><td class="table_ranking_right">28788921</td></tr>
                        <tr><td>2.</td><td class="table_ranking_center fliess10px-gelb" showUser="A0u3"><b><span class="userInfoName" title="AKR?P-?rzurum-TURK?Y - click for details">AKR?P-?rzurum-TURK?Y</span></b></span></td><td class="table_ranking_right">26612478</td></tr>
                        <tr><td>3.</td><td class="table_ranking_center fliess10px-gelb" showUser="PXjF"><b><span class="userInfoName" title="*W?MßØ-CØMßØ* - click for details">*W?MßØ-CØMßØ*</span></b></span></td><td class="table_ranking_right">24583742</td></tr>
                        <tr><td>4.</td><td class="table_ranking_center fliess10px-gelb" showUser="3RNON"><b><span class="userInfoName" title="UNDERTAKER[G*R] - click for details">UNDERTAKER[G*R]</span></b></span></td><td class="table_ranking_right">22286728</td></tr>
                        <tr><td>5.</td><td class="table_ranking_center fliess10px-gelb" showUser="8atI"><b><span class="userInfoName" title="C????e?a~A7X~ - click for details">C????e?a~A7X~</span></b></span></td><td class="table_ranking_right">20541334</td></tr>
                        <tr><td>6.</td><td class="table_ranking_center fliess10px-gelb" showUser="A2NH"><b><span class="userInfoName" title="CujoTheFluffyPuppy - click for details">CujoTheFluffyPuppy</span></b></span></td><td class="table_ranking_right">18709792</td></tr>                        <tr><td>7.</td><td class="table_ranking_center fliess10px-gelb" showUser="QzYn"><b><span class="userInfoName" title="?S?Ð?LL?H - click for details">?S?Ð?LL?H</span></b></span></td><td class="table_ranking_right">17785249</td></tr>                        <tr><td>8.</td><td class="table_ranking_center fliess10px-gelb" showUser="2yktO"><b><span class="userInfoName" title="Try-Me-Y-O-L-O[F†H] - click for details">Try-Me-Y-O-L-O[F†H]</span></b></span></td><td class="table_ranking_right">17699930</td></tr>                        <tr><td>9.</td><td class="table_ranking_center fliess10px-gelb" showUser="3tMjg"><b><span class="userInfoName" title="-BLUE_SKY_MGL- - click for details">-BLUE_SKY_MGL-</span></b></span></td><td class="table_ranking_right">17520547</td></tr>                        <tr><td colspan="3" class="hof_center"><a href="indexInternal.es?action=internalHallofFame" onfocus="this.blur()" class="fliess10px-gelb"><u>All Hall of Fame records</u></a></td></tr>
                    </table>
                    </div>
                </td>
                <td>
                    <table id="table_history" class="fliess10px-white">
                    <tr>
                        <td>
                                                        <div id="text_history" class="fliess10px-white scrollbars"><p>2013-05-12 07:30:15<br />
1-day login bonus received<br />
<br />
2013-05-12 07:30:14<br />
Receive two weeks of Start Premium<br />
</p></div>
                                                    </td>
                    </tr>
                    <tr>
                        <td class="history_center"><a href="indexInternal.es?action=internalHistory" onfocus="this.blur()" class="fliess10px-gelb"><u>Entire logbook history</u></a></td>
                    </tr>
                    </table>
                </td>
            </tr>
            </table>
        </div>
        <!-- Ende Content -->
    </div>



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





    <div class="socialBar">
        <a href="http://www.facebook.com/darkorbit" target="_blank">
            <div class="facebook"></div>
        </a>
        <a href="http://twitter.com/darkorbit" target="_blank">
            <div class="twitter"></div>
        </a>
        <a href="http://www.youtube.com/user/darkorbithq" target="_blank">
            <div class="youtube"></div>
        </a>

        <div class="left"></div>
        <div class="content">
            <div>FOLLOW US ON</div>
        </div>
        <div class="right"></div>
    </div>


    <div id="banner-bottom" align="center">
    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=4&source=country%3DES%26areaID%3Dinternal.home%26aid%3D0%26acm%3D%26acr%3D47%26aip%3D%26gameID%3D47%26uid%3D98173484%26locale%3Dus&sign=VjFbfY9RzjD4ZLbIpXvndjlUC6Dz%2BXOTnwJWpQtp"></script>    </div>
</div><!-- End footerContainer -->
</div><!-- End bodyContainer -->
</div><!-- End outerContainer -->
</div><!-- End overallContainer -->
</div>




<!-- affiliateEndTag -->
<!-- SensorT-Bigpoint - Page View - START -->
<script type="text/javascript" language="JavaScript" src="https://akimu.bigpoint.com/trk?rt=1&ti=3547&cs=8377&aid=0&aip=&pid=47&ppid=22&language=en&country=ES&ctype=0&ts=1368358235&mid=261695600&jsopenclose=false"></script>
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
res = '<scr' + 'ipt type="text/javascript" src="http://akimu.bigpoint.com/trk?rt=1&ti=3549&cs=5764&aid=0&aip=&pid=47&ppid=22&language=en&country=ES&ctype=0&ts=1368358235&searchQuery=' + s;
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
<!-- SensorT-Bigpoint - SEA-SEO Pageview - END --><!-- BPID --><script language="javascript">window.bpid=window.bpid||{};window.bpid.callbacks=window.bpid.callbacks||[];window.bpid.callbacks.push(function(bpid) {document.cookie="__bpid="+bpid+";path=/;expires=Fri, 03 Jun 2022 13:59:24 GMT;";if (bpid != "51812404dl5KklKxnen7GpIbbQNwIqOB") {try {var xhr = new XMLHttpRequest();xhr.open("GET", "\/GameAPI.php?action=core.bpid&bpid="+bpid, true);xhr.send(null);} catch(e) {}}});</script><script language="javascript" src="//assets.bpsecure.com/bpid/bpid.js?ts=380099" defer="defer"></script><!-- /BPID --><script type="text/javascript">var _gaq = _gaq || [];_gaq.push(['_gat._anonymizeIp']);_gaq.push(['_setDomainName', 'none']);_gaq.push(['_setAllowLinker', true]);_gaq.push(['_setAllowHash', false]);_gaq.push(['_setCustomVar', 1, 'aid', '0', 2]);_gaq.push(['_setCustomVar', 2, 'aip', '', 2]);_gaq.push(['_setCustomVar', 3, 'ait', '', 2]);_gaq.push(['_setCustomVar', 4, 'areaID', 'internal.home', 2]);_gaq.push(['_setAccount', 'UA-1848713-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalStart&areaID=internal.home']);_gaq.push(['_trackPageLoadTime']);_gaq.push(['_setAccount', 'UA-17685913-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalStart&areaID=internal.home']);_gaq.push(['_trackPageLoadTime']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = 'http://www.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>

<!-- SZM VERSION="1.5" -->
<script type="text/javascript">
<!--
var IVW="http://bigpoint.ivwbox.de/cgi-bin/ivw/CP/5201malepreldark;/spiele/darkorbit/preloader";
document.write("<img src=\""+IVW+"?r="+escape(document.referrer)+"&d="+(Math.random()*100000)+"\"width=\"1\" height=\"1\" alt=\"\" />");
//-->
</script>
<noscript>
<img src="http://bigpoint.ivwbox.de/cgi-bin/ivw/CP/5201malepreldark;/spiele/darkorbit/preloader";
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
            var serviceLinks = ['http://lts-920.ah.bpcdn.net/47/us/ES/-14400/0','http://lts-920.ah.bpcdn.net/email/47/us'];
            var paymentURL   = 'https://ssl.bigpoint.net/billing/?req=YToxMzp7czo2OiJ1c2VySUQiO3M6ODoiOTgxNzM0ODQiO3M6ODoidXNlcm5hbWUiO3M6MTE6InhkcnNlcmVzdHNyIjtzOjg6Im1lbWJlcklEIjtzOjk6IjI2MTY5NTYwMCI7czo0OiJicGlkIjtzOjMyOiI1MTgxMjQwNGRsNUtrbEt4bmVuN0dwSWJiUU53SXFPQiI7czo3OiJ1c2VyQWdlIjtpOjE2O3M6MTQ6ImZiX2FwcGxpY2F0aW9uIjtiOjA7czo5OiJmYl91c2VySWQiO3M6MTU6IjEwMDAwNDg4NzY2MjUzMiI7czo5OiJwcm9qZWN0SUQiO3M6MjoiNDciO3M6MzoiYWlkIjtpOjA7czozOiJhaXAiO3M6MDoiIjtzOjQ6ImxhbmciO3M6MjoiZW4iO3M6MzoiZGV2IjtiOjA7czo0OiJ0aW1lIjtpOjEzNjgzNTgyMzQ7fQ%3D%3D&aid=0&aip=&hash=124897d2814d4ba127361c1ced179848';
            BPLayertool2.Helper.setPaymentLink(paymentURL);
            BPLayertool2.Helper.setUserId(98173484);
            BPLayertool2.Helper.setRequestTime(1368358234);
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
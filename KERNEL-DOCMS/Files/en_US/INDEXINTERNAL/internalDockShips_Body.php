</head>
<body class="internalDockShop_ship" onLoad="" >
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
                                                    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=6&source=country%3DES%26areaID%3Dinternal.trade%26aid%3D0%26acm%3D%26acr%3D89%26aip%3D%26gameID%3D89%26uid%3D98125642%26locale%3Des&sign=VjEr1JRRY7mKzGATw0cwYD8hQd300kKLsjL065T4"></script>
                                            </div>
            <!-- end notrans -->
                </div>
        <div class="outerContainer fliess11px-gelb">
            
<?php require GLOBALS . 'internalHeaderIntern.php'; ?>

    

            <div class="bodyContainer">
                                <div class="frameTop"></div>
                <div class="frameLeft_top"></div>
                <div class="frameRight_top"></div>
                <div class="contentFrame">
                    <div class="realContainer">
                <div id="dock_content">

    <div id="dock_container" class="fliess10px-weiss">
        <div id="navigation" style="float: left;">
            <style type="text/css" media="screen">    @import "http://darkorbit-22.ah.bpcdn.net/css/cdn/subnav.css?__cv=7014599eddf59246c3b41c90d0475200"; </style>

    <div id="subNavTop">
                <style>
            
            .subNavTextInactiveShip {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_ships&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveShip {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_ships&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveDrone {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_drones&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveDrone {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_drones&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveWeapons {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_weapons&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveWeapons {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_weapons&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveAmmo {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_ammunition&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveAmmo {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_ammunition&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveGenerators {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_generators&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveGenerators {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_generators&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveExtras {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_extras&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveExtras {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_extras&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveBoosters {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_boosters&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveBoosters {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_boosters&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveDesigns {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_designs&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveDesigns {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_designs&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactivePetGears {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_pet_gear&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActivePetGears {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_pet_gear&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactivePetProtocols {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_pet_protocols&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActivePetProtocols {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_pet_protocols&f=eurostyle_thea&color=black&bgcolor=grey1);}
            
        </style>
        <script>
            
            function subNavRollover(name) {
                if (jQuery('#' + name).hasClass('subNavButtonActive') == false) {
                    if (jQuery('#' + name).hasClass('subNavButtonInactive')) {
                        jQuery('#' + name).removeClass('subNavButtonInactive');
                        jQuery('#' + name).addClass('subNavButtonRollover');
                    } else {
                        jQuery('#' + name).removeClass('subNavButtonRollover');
                        jQuery('#' + name).addClass('subNavButtonInactive');
                    }
                }
            }
            
        </script>

        <div id="subNavShip" class="subNavButtonShip subNavButtonActive" onmouseover="subNavRollover('subNavShip')" onmouseout="subNavRollover('subNavShip')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockShips"><div class="subNavTextActiveShip"></div></a>
        </div>
        <div id="subNavDrone" class="subNavButtonDrone subNavButtonInactive" onmouseover="subNavRollover('subNavDrone')" onmouseout="subNavRollover('subNavDrone')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockDrones"><div class="subNavTextInactiveDrone"></div></a>
                    </div>
        <div id="subNavWeapons" class="subNavButtonWeapons subNavButtonInactive" onmouseover="subNavRollover('subNavWeapons')" onmouseout="subNavRollover('subNavWeapons')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockLaser"><div class="subNavTextInactiveWeapons"></div></a>
        </div>
        <div id="subNavAmmo" class="subNavButtonAmmo subNavButtonInactive" onmouseover="subNavRollover('subNavAmmo')" onmouseout="subNavRollover('subNavAmmo')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockAmmo"><div class="subNavTextInactiveAmmo"></div></a>
                    </div>
        <div id="subNavGenerators" class="subNavButtonGenerators subNavButtonInactive" onmouseover="subNavRollover('subNavGenerators')" onmouseout="subNavRollover('subNavGenerators')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockGenerator"><div class="subNavTextInactiveGenerators"></div></a>
        </div>
        <div id="subNavExtras" class="subNavButtonExtras subNavButtonInactive" onmouseover="subNavRollover('subNavExtras')" onmouseout="subNavRollover('subNavExtras')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockSpecials"><div class="subNavTextInactiveExtras"></div></a>
            <div class="subNavEventIcon"></div>        </div>
        <div id="subNavPetGears" class="subNavButtonPetGears subNavButtonInactive" onmouseover="subNavRollover('subNavPetGears')" onmouseout="subNavRollover('subNavPetGears')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockPetGear"><div class="subNavTextInactivePetGears"></div></a>
                    </div>
        <div id="subNavPetProtocols" class="subNavButtonPetProtocols subNavButtonInactive" onmouseover="subNavRollover('subNavPetProtocols')" onmouseout="subNavRollover('subNavPetProtocols')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockPetProtocols"><div class="subNavTextInactivePetProtocols"></div></a>
        </div>
        <div id="subNavBoosters" class="subNavButtonBoosters subNavButtonInactive" onmouseover="subNavRollover('subNavBoosters')" onmouseout="subNavRollover('subNavBoosters')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockBooster"><div class="subNavTextInactiveBoosters"></div></a>
                    </div>
        <div  id="subNavDesigns" class="subNavButtonDesigns subNavButtonInactive" onmouseover="subNavRollover('subNavDesigns')" onmouseout="subNavRollover('subNavDesigns')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockShipModel"><div class="subNavTextInactiveDesigns"></div></a>
                    </div>

        <ul>
            <li title="Naves"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockShips" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/hangar/subnav_button_405x33.png?__cv=585dbec7500b7493d5c6ed734dd57000);background-position: -268px 0px;"><img src="do_img/global/nav_left.esg?s=10&locale=es&lang=es&t=nav_sub1_hangar_ships&f=eurostyle_clan"></a></li>
            <li title="Vehículos aéreos no tripulados"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockDrones" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=es&lang=es&t=nav_sub1_hangar_drones&f=eurostyle_clan"></a></li>
            <li title="Armas"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockLaser" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=es&lang=es&t=nav_sub1_hangar_weapons&f=eurostyle_clan"></a></li>
            <li title="Munición"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockAmmo" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=es&lang=es&t=nav_sub1_hangar_ammunition&f=eurostyle_clan"></a></li>
            <li title="Generadores"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockGenerator" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=es&lang=es&t=nav_sub1_hangar_generators&f=eurostyle_clan"></a></li>
            <li title="Extras"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockSpecials" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=es&lang=es&t=nav_sub1_hangar_extras&f=eurostyle_clan"></a></li>
            <li title="Potenciador"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockBooster" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=es&lang=es&t=nav_sub1_hangar_boosters&f=eurostyle_clan"></a></li>
            <li title="Diseños"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockShipModel" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=es&lang=es&t=nav_sub1_hangar_designs&f=eurostyle_clan"></a></li>
            <li title="P.E.T./MÓDULOS"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockPetGear" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=es&lang=es&t=nav_sub1_hangar_pet_gear&f=eurostyle_clan"></a></li>
            <li title="PROTOCOLOS IA"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockPetProtocols" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=es&lang=es&t=nav_sub1_hangar_pet_protocols&f=eurostyle_clan"></a></li>
        </ul>
            </div>


        </div>

        <!-- ITEM CONTAINER START -->
        <div id="item_container" name="item_container">
            <div id="item_container_overlay"></div>
            <div id="item_scroll_up" name="item_scroll_up"></div>
            <div id="item_scroll_top" name="item_scroll_top"></div>
            <div id="item_scroller">
                <div id="item_list">
	    		                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/hangar/slot_100x100.png?__cv=4103cd5f4ead22d15ffa746e06a99300);">
                            <a id="hangar_slot" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>50.000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/ship/phoenix_100x100.png?__cv=c8fdab3ed091595e5a4d122ef33eee00);">
                            <a id="1" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>0 C.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/ship/leonov_100x100.png?__cv=514e12b1ca5c27a22b6ef646fb9b8a00);">
                            <a id="3" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>15.000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/ship/liberator_100x100.png?__cv=12811c57da5f73380b089c37aebde700);">
                            <a id="5" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>40.000 C.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/ship/piranha_100x100.png?__cv=dafebc613914a8d39de7740bf987f800);">
                            <a id="6" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>125.000 C.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/ship/vengeance_100x100.png?__cv=0c54de458c43424b804b155068265600);">
                            <a id="8" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>30.000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/ship/bigboy_100x100.png?__cv=47451983296c2b3216aa523e944ced00);">
                            <a id="9" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>200.000 C.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/ship/goliath_100x100.png?__cv=5fcdb83e69b401d92cc1ae6abb172300);">
                            <a id="10" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>80.000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/ship/citadel-mmo_100x100.png?__cv=d43662ca1a65a25f5f9ce73f10e44000);">
                            <a id="11" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>300.000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/ship/aegis-mmo_100x100.png?__cv=89907c440812462e67ad63192d91b700);">
                            <a id="12" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>250.000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/ship/spearhead-mmo_100x100.png?__cv=12de6f44a46e0c64accde5398ba25f00);">
                            <a id="13" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>45.000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/package/s-trinity-mmo_100x100.png?__cv=0058552692b26643098082e055975100);">
                            <a id="packages" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>Pago</strong>
                        </div>
                    </div>
                                </div>
            </div>
            <div id="item_scroll_down"></div>
            <div id="item_scroll_bottom"></div>
        </div>
        <!-- ITEM CONTAINER END -->

        <!-- PREVIEW CONTAINER START -->
        <div id="preview_container">
            <div id="preview">
                <div id="previewMovie">
                    <div></div>
                </div>
            </div>
            <div id="info">
                <div id="name" class="info_other_value"></div>
                <div id="scroll-content" class="info_other_value"></div>
            </div>
        </div>
        <!-- PREVIEW CONTAINER END -->

        <!-- BUY FRAME START -->
        <div id="buy_container">
            <div id="buy_itemName"></div>

            <div id="levelSelector">
                <div class="label">Nivel:</div>
                <div id="levelScrollUp" class="scrollArrow"></div>
                <div id="levelScrollContainer">
                    <div id="levelList">
                        <div class="level enabled" id="level1"></div>
                        <div class="level enabled" id="level2"></div>
                        <div class="level enabled" id="level3"></div>
                        <div class="level" id="level4"></div>
                        <div class="level" id="level5"></div>
                        <div class="level" id="level6"></div>
                        <div class="level" id="level7"></div>
                        <div class="level" id="level8"></div>
                        <div class="level" id="level9"></div>
                        <div class="level" id="level10"></div>
                    </div>
                </div>
                <div id="levelScrollDown" class="scrollArrow"></div>
            </div>

            <div id="amountSelector">
                <div class="label">Cantidad</div>
                <div class="amountPreset" id="five"></div>
                <div class="amountPreset" id="ten"></div>
                <div class="amountPreset" id="twenty"></div>
                <div class="amountPreset" id="hundred"></div>
                <div class="amountPreset" id="thousand"></div>
                <div class="amountPreset" id="max"></div>
                <div id="arrow"></div>
                <div id="stepper">
                    <div class="control" id="minus"></div>
                    <input type="text" id="selectedAmount" value="1" />
                    <div class="control" id="plus"></div>

                </div>
            </div>
            
            <div id="nameSelector">
                <label for="itemName">Nombre de P.E.T.</label>
                <input type="text" id="itemName" name="itemName" value="" maxlength="16" />
            </div>

            <div id="discount"></div>

            <div id="buy_price">
                <input type="hidden" id="itemPrice" name="itemPrice" value="">
                <input type="text" id="sellPrice" name="sellPrice" readonly="readonly" value="">
            </div>
            <div id="buy_button" class="purchase">
                <div id="buy_button_text" style='background-image: url("http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=14&t=shop_buy&f=eurostyle_thea&color=white&bgcolor=grey");'></div>
            </div>
            
            <div id="subscription_button" class="purchase">
                <div id="start" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=14&t=booster_subscribe&f=eurostyle_thea&color=white&bgcolor=grey);"></div>
                <div id="stop" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=14&t=booster_subscription_cancel&f=eurostyle_thea&color=white&bgcolor=grey&auto_br=1&auto_br_size=11);"></div>
            </div>
        </div>
        <!-- BUY FRAME END -->
    </div>
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
    <div id="imprint_text"><b>Bigpoint S.à.r.l. and Co, SCS</b><br>Building Vertigo - Polaris<br>2-4 rue Eugène Ruppert<br>L-2453 Luxemburg<br><br><b>Nuestro portal de negocios</b><br><a class="" href="http://www.bigpoint.net" target="_blank">http://www.bigpoint.net</a><br><br><b>Datos comerciales</b><br>Gerente: Bigpoint S.à.r.l.<br>Jeronimo Folgueira<br>Registro comercial: R.C.S. Luxemburg<br>Número de registro: B 167809<br>Número de identificación a efectos del impuesto sobre el valor añadido (IVA): LU 25331016<br><br><b>Aviso de responsabilidad</b><br>A pesar del cuidadoso control sobre el contenido, no tomamos ninguna responsabilidad sobre enlaces externos. Del contenido de estos enlaces son responsables sus propietarios.<br><br><b>Contacto</b><br>Teléfono <b>(Ningún soporte)</b>: +352 261 911 3515<br>Fax : +352 49 48 48 6606<br><br><b>En caso de preguntas y problemas - nuestro soporte</b><br>Email: <a class="gl_imprint_support_link" href="/index.es?action=support">Al formulario de soporte</a><br>Internet: http://www.bigpoint.com<br><br><b>Encargado de protección de menores</b><br>Abogado Dr. Andreas Lober<br>SCHULTE RIESENKAMPFF Rechtsanwaltsgesellschaft mbH<br />An der Hauptwache 7<br />60313 Frankfurt am Main<br>Email: jugendschutzbeauftragter@bigpoint.com<br><br><b>Encargado de protección de datos</b><br>Email: privacy@bigpoint.net<br><a style="text-decoration: underline" class="" href="/index.es?action=info&subAction=privacyPolicy" target="_blank">Declaración sobre protección de datos</a></div>
</div>
<div id="teamCreditsBox" style="height:600px;" class="fliesstext">
    <div id="teamCredits_close"><a href="javascript:void(0);" onclick="closeInfo('teamCreditsBox');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/intro/but_close.png?__cv=4addfeeb6d889c0632072f85386d1900" alt="" /></a></div>
    <div id="container_teamcredits" style="height: 528px;">
        <div id="teamCredits_text">

            <ul id="main">
                <li id="head"></li>
                <li id="description">El MMO del espacio cargado de acción en tu navegador</li>
                <li id="producers">
                    <ul>
                        <li id="pr title">Productor</li>
                        <li>Savas Ziplies<li>
                        <li>Matthew <i>"\-Sephiroth-/"</i> Milligan</li>
                    </ul>
                </li>
                <li id="pm">
                    <ul>
                        <li id="pm title">Jefe de proyecto</li>
                        <li>Johannes Wieland</li>
                    </ul>
                </li>
                <li id="gd">
                    <ul>
                        <li id="gd title">Diseño del juego</li>
                        <li>Benjamin <i>"Radovan8"</i> Cory</li>
                        <li>Jonathan Lindsay</li>
                    </ul>
                </li>
                <li id="dev">
                    <ul>
                        <li id="dev title">Desarrollo</li>
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
                        <li id="graphic title">Gráficos</li>
                        <li>Young-il Shim</li>
                        <li>Marko Vajagic</li>
                        <li>Ivan Kantarovich</li>
                    </ul>
                </li>
                <li id="qa">
                    <ul>
                        <li id="qa title">Control de calidad</li>
                        <li>Kathrin <i>"..Lysi.."</i> Schulte</li>
                        <li>Fryderyk <i>"The*End*is*Nigh"</i> Bannasch</li>
                        <li>Annemieke <i>"Ripley"</i> Böhm</li>
                        <li>Siegfried Jensen</li>
                    </ul>
                </li>
                <li id="cm">
                    <ul>
                        <li id="cm title">Administración de la comunidad</li>
                        <li>Jan Lamely</li>
                        <li>Dang-Stefan La Hong</li>
                    </ul>
                </li>
                <li id="interns">
                    <ul>
                        <li id="interns title">Personal en prácticas</li>
                        <li>Mustafa Kaan Tanrisever</li>
                        <li>Lian <i>"The Case"</i> Li</li>
                    </ul>
                </li>
                <li id="thanks">
                    <ul>
                        <li id="thanks title">Agradecimientos especiales a</li>
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
                Aviso legal</a> |
                <a href="javascript:void(0);" onclick="showFooterLayer('teamCreditsBox')">Créditos</a> |
        <a href="/GameAPI.php?action=portal.redirectToBoard" target="_blank">Foro</a>
    </div>


    


    <div class="socialBar" style="margin-right:35px; margin-top:22px;">
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
            <div>SÍGUENOS EN</div>
        </div>
        <div class="right"></div>
    </div>

    
    <div id="banner-bottom" align="center">
    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=4&source=country%3DES%26areaID%3Dinternal.trade%26aid%3D0%26acm%3D%26acr%3D89%26aip%3D%26gameID%3D89%26uid%3D98125642%26locale%3Des&sign=VjEr1JRRq2bQFbgpXSOinNK40k9bvlPbJcvIfquB"></script>    </div>
</div><!-- End footerContainer -->
</div><!-- End bodyContainer -->
</div><!-- End outerContainer -->
</div><!-- End overallContainer -->
</div>




<!-- affiliateEndTag -->
<!-- SensorT-Bigpoint - Page View - START -->
<script type="text/javascript" language="JavaScript" src="https://akimu.bigpoint.com/trk?rt=1&ti=3547&cs=8377&aid=0&aip=&pid=89&ppid=22&language=es&country=ES&ctype=0&ts=1368708139&mid=261695600&jsopenclose=false"></script>
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
res = '<scr' + 'ipt type="text/javascript" src="http://akimu.bigpoint.com/trk?rt=1&ti=3549&cs=5764&aid=0&aip=&pid=89&ppid=22&language=es&country=ES&ctype=0&ts=1368708139&searchQuery=' + s;
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
<!-- SensorT-Bigpoint - SEA-SEO Pageview - END --><!-- BPID --><script language="javascript">window.bpid=window.bpid||{};window.bpid.callbacks=window.bpid.callbacks||[];window.bpid.callbacks.push(function(bpid) {document.cookie="__bpid="+bpid+";path=/;expires=Fri, 03 Jun 2022 13:59:24 GMT;";if (bpid != "51812404dl5KklKxnen7GpIbbQNwIqOB") {try {var xhr = new XMLHttpRequest();xhr.open("GET", "\/GameAPI.php?action=core.bpid&bpid="+bpid, true);xhr.send(null);} catch(e) {}}});</script><script language="javascript" src="//assets.bpsecure.com/bpid/bpid.js?ts=380196" defer="defer"></script><!-- /BPID --><script type="text/javascript">var _gaq = _gaq || [];_gaq.push(['_gat._anonymizeIp']);_gaq.push(['_setDomainName', 'none']);_gaq.push(['_setAllowLinker', true]);_gaq.push(['_setAllowHash', false]);_gaq.push(['_setCustomVar', 1, 'aid', '0', 2]);_gaq.push(['_setCustomVar', 2, 'aip', '', 2]);_gaq.push(['_setCustomVar', 3, 'ait', '', 2]);_gaq.push(['_setCustomVar', 4, 'areaID', 'internal.trade', 2]);_gaq.push(['_setAccount', 'UA-1848713-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalDock&tpl=internalDockShips&areaID=internal.trade']);_gaq.push(['_trackPageLoadTime']);_gaq.push(['_setAccount', 'UA-17685913-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalDock&tpl=internalDockShips&areaID=internal.trade']);_gaq.push(['_trackPageLoadTime']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = 'http://www.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>

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
            var serviceLinks = ['http://lts-920.ah.bpcdn.net/89/es/ES/7200/0','http://lts-920.ah.bpcdn.net/email/89/es'];
            var paymentURL   = 'https://ssl.bigpoint.net/billing/?req=YToxMzp7czo2OiJ1c2VySUQiO3M6ODoiOTgxMjU2NDIiO3M6ODoidXNlcm5hbWUiO3M6MTE6InhkcnNlcmVzdHNyIjtzOjg6Im1lbWJlcklEIjtzOjk6IjI2MTY5NTYwMCI7czo0OiJicGlkIjtzOjMyOiI1MTgxMjQwNGRsNUtrbEt4bmVuN0dwSWJiUU53SXFPQiI7czo3OiJ1c2VyQWdlIjtpOjE2O3M6MTQ6ImZiX2FwcGxpY2F0aW9uIjtiOjA7czo5OiJmYl91c2VySWQiO3M6MTU6IjEwMDAwNDg4NzY2MjUzMiI7czo5OiJwcm9qZWN0SUQiO3M6MjoiODkiO3M6MzoiYWlkIjtpOjA7czozOiJhaXAiO3M6MDoiIjtzOjQ6ImxhbmciO3M6MjoiZXMiO3M6MzoiZGV2IjtiOjA7czo0OiJ0aW1lIjtpOjEzNjg3MDgxMzg7fQ%3D%3D&aid=0&aip=&hash=d53be24e06d32f392fd10dcaac387cfb';
            BPLayertool2.Helper.setPaymentLink(paymentURL);
            BPLayertool2.Helper.setUserId(98125642);
            BPLayertool2.Helper.setRequestTime(1368708138);
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
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/tools.js?__cv=dbf397d8f53a66282288cd58ecd1ef00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/tools/text.js?__cv=8ded3f24f8df7744dc6eb60fab030a00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/tools/popup.js?__cv=7fa3aa8618c738cdf12bceb763b4bf00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/tools/errorHandler.js?__cv=e28fe3fd582bcb0eb8baf8b3c4f9ad00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/tools/repeatCaller.js?__cv=8ecf93544d74ff651e0e99316e884800"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/library.js?__cv=a3c8d3e4f0d23405a758131039a03d00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/user.js?__cv=b79aef5e50246af886bf99f0a7678400"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/user/ship.js?__cv=a335646e993460d68d3eb7c4209ff700"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/user/pet.js?__cv=f4220b67b3f030efae394ad3d33a8200"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop.js?__cv=e7b25b1984ad85a6e60f531839a8e100"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop/item.js?__cv=b24f6606535c8c3718544c0a026ca100"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop/itemlist.js?__cv=772235ec79f92a0c81216c1defee4300"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop/amountSelector.js?__cv=42e46d55c6158a869c031ddc079cb100"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop/nameSelector.js?__cv=bf64cd925dd72ef16a1433aceacbcb00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop/levelSelector.js?__cv=8f111727c6bc6e899ae0090e39d39900"></script>
<script type="text/javascript">

    jQuery.noConflict();
    jQuery(document).ready(function(){
        /**
         * Initialize DarkOrbit shop
         */
        Shop.Initialize();
    });

    function expressInstallCallback(info) {
        // possible values for info: loadTimeOut|Cancelled|Failed
        jQuery("#previewMovie").php("You need version 10.0 to view this content");
    }

    /**
     * Parameters for object.
     * Used as an interface with the action.
     */
    Shop.Parameters = {
        category        : 'ship',
        paymentLink     : 'indexInternal.es?action=internalPayment',
        itemRows        : [],
        itemData        : {"hangar_slot":{"category":"hangar","name":"HH-X","nameShort":"AMPLIACI\u00d3N DEL HANGAR","description":"Un pabell\u00f3n en el hangar te permite cambiar de forma r\u00e1pida entre tus naves en tu base o cuando est\u00e1s desconectado del cliente. <li>Puedes ampliar tu hangar con un m\u00e1ximo de hasta <b>10 HH-X<\/b>.<\/li>","price":50000,"currency":"real","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=items_hangar_slot_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"HH-X","item_caption":"AMPLIACI%C3%93N+DEL+HANGAR","item_prefix":"hangar","item_id":999,"item_cv":"6a223b5a5ffe8ad1bb7798e0e085c100","price_plain":"50.000 U.","event_item_enabled":0,"loot_id":"hangar_slot"}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/hangar\/slot_100x100.png?__cv=4103cd5f4ead22d15ffa746e06a99300","cost":"50.000 U.","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":"-5%","discountTooltipText":null,"isPaymentItem":false,"isHangar":true},"1":{"category":"ship","name":"Phoenix","nameShort":"STARJET","description":"<script type=\"text\/javascript\">\nvar header_ttips = new Object;\nheader_ttips['leonov_shop_standard']  = '';\nheader_ttips['leonov_shop_homemaps']  = '';\n<\/script>\n\n<table id=\"shipDetails\">\n    <tr id=\"\" class=\"odd\">\n        <td class=\"label\"><\/td>\n        <td id=\"firstColumn_leonov\" class=\"firstColumn\">\n            \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#firstColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_standard,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n        <td id=\"secondColumn_leonov\" class=\"secondColumn\">\n\t        \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#secondColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_homemaps,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n    <\/tr>\n\n    <tr id=\"speed\" class=\"even\">\n        <td class=\"label\">Velocidad<\/td>\n        <td class=\"firstColumn\">\n        \t320\n        <\/td>\n            <\/tr>\n    <tr id=\"load\" class=\"odd\">\n        <td class=\"label\">Carga<\/td>\n        <td class=\"firstColumn\">\n        \t100\n        <\/td>\n            <\/tr>\n    <tr id=\"laser\" class=\"even\">\n        <td class=\"label\">L\u00e1ser<\/td>\n        <td class=\"firstColumn\">\n        \t1\n        <\/td>\n            <\/tr>\n    <tr id=\"generatoren\" class=\"odd\">\n        <td class=\"label\">Generadores<\/td>\n        <td class=\"firstColumn\">\n        \t1\n        <\/td>\n            <\/tr>\n    <tr id=\"batteries\" class=\"even\">\n        <td class=\"label\">Bater\u00edas<\/td>\n        <td class=\"firstColumn\">\n        \t2.000\n        <\/td>\n            <\/tr>\n    <tr id=\"hitpoints\" class=\"odd\">\n        <td class=\"label\">Puntos de vida<\/td>\n        <td class=\"firstColumn\">\n        \t4.000\n        <\/td>\n            <\/tr>\n    <tr id=\"rockets\" class=\"even\">\n        <td class=\"label\">Misiles<\/td>\n        <td class=\"firstColumn\">\n        \t100\n        <\/td>\n            <\/tr>\n    <tr id=\"specials\" class=\"odd\">\n        <td class=\"label\">Extras<\/td>\n        <td class=\"firstColumn\">\n        \t1\n        <\/td>\n            <\/tr>\n<\/table>","price":0,"currency":"virtual","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=ship_1_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":0,"item_name":"PHOENIX","item_caption":"STARJET","item_prefix":"ship","item_id":1,"item_cv":"e5af3fecf3774c43b0305388597b1e00","price_plain":"0 C.","event_item_enabled":0,"loot_id":"ship_phoenix","inuse":1,"in_use_plain":"Actualmente en uso"}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/ship\/phoenix_100x100.png?__cv=c8fdab3ed091595e5a4d122ef33eee00","cost":"0 C.","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false,"isShip":true},"3":{"category":"ship","name":"Leonov","nameShort":"STARJET","description":"<script type=\"text\/javascript\">\nvar header_ttips = new Object;\nheader_ttips['leonov_shop_standard']  = 'Abarca todos los mapas excepto los mapas base';\nheader_ttips['leonov_shop_homemaps']  = 'Abarca los mapas desde el 1-1 hasta el 1-4';\n<\/script>\n\n<table id=\"shipDetails\">\n    <tr id=\"specials\" class=\"even\">\n        <td class=\"label\"><\/td>\n        <td id=\"firstColumn_leonov\" class=\"firstColumn\">\n            Est\u00e1ndar\n            \n                <script type='text\/javascript'>\n                    jQuery(\"#firstColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_standard,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n        <td id=\"secondColumn_leonov\" class=\"secondColumn\">\n\t        Mapas base\n            \n                <script type='text\/javascript'>\n                    jQuery(\"#secondColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_homemaps,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n    <\/tr>\n\n    <tr id=\"speed\" class=\"odd\">\n        <td class=\"label\">Velocidad<\/td>\n        <td class=\"firstColumn\">\n        \t360\n        <\/td>\n        \t        <td class=\"secondColumn\">\n\t        \t380\n\t        <\/td>\n            <\/tr>\n    <tr id=\"load\" class=\"even\">\n        <td class=\"label\">Carga<\/td>\n        <td class=\"firstColumn\">\n        \t500\n        <\/td>\n        \t        <td class=\"secondColumn\">\n\t        \t1.000\n\t        <\/td>\n            <\/tr>\n    <tr id=\"laser\" class=\"odd\">\n        <td class=\"label\">L\u00e1ser<\/td>\n        <td class=\"firstColumn\">\n        \t6\n        <\/td>\n        \t        <td class=\"secondColumn\">\n\t        \t6\n\t        <\/td>\n            <\/tr>\n    <tr id=\"generatoren\" class=\"even\">\n        <td class=\"label\">Generadores<\/td>\n        <td class=\"firstColumn\">\n        \t6\n        <\/td>\n        \t        <td class=\"secondColumn\">\n\t        \t6\n\t        <\/td>\n            <\/tr>\n    <tr id=\"batteries\" class=\"odd\">\n        <td class=\"label\">Bater\u00edas<\/td>\n        <td class=\"firstColumn\">\n        \t6.000\n        <\/td>\n        \t        <td class=\"secondColumn\">\n\t        \t6.000\n\t        <\/td>\n            <\/tr>\n    <tr id=\"hitpoints\" class=\"even\">\n        <td class=\"label\">Puntos de vida<\/td>\n        <td class=\"firstColumn\">\n        \t64.000\n        <\/td>\n        \t        <td class=\"secondColumn\">\n\t        \t160.000\n\t        <\/td>\n            <\/tr>\n    <tr id=\"rockets\" class=\"odd\">\n        <td class=\"label\">Misiles<\/td>\n        <td class=\"firstColumn\">\n        \t300\n        <\/td>\n        \t        <td class=\"secondColumn\">\n\t        \t300\n\t        <\/td>\n            <\/tr>\n    <tr id=\"specials\" class=\"even\">\n        <td class=\"label\">Extras<\/td>\n        <td class=\"firstColumn\">\n        \t1\n        <\/td>\n        \t        <td class=\"secondColumn\">\n\t        \t1\n\t        <\/td>\n            <\/tr>\n<\/table>","price":15000,"currency":"real","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=ship_3_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"LEONOV","item_caption":"STARJET","item_prefix":"ship","item_id":3,"item_cv":"a98106a09c00aec081980629e197d700","price_plain":"15.000 U.","event_item_enabled":0,"loot_id":"ship_leonov","inuse":0,"in_use_plain":""}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/ship\/leonov_100x100.png?__cv=514e12b1ca5c27a22b6ef646fb9b8a00","cost":"15.000 U.","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":"-5%","discountTooltipText":null,"isPaymentItem":false,"isShip":true},"5":{"category":"ship","name":"Liberator","nameShort":"STARFIGHTER","description":"<script type=\"text\/javascript\">\nvar header_ttips = new Object;\nheader_ttips['leonov_shop_standard']  = '';\nheader_ttips['leonov_shop_homemaps']  = '';\n<\/script>\n\n<table id=\"shipDetails\">\n    <tr id=\"specials\" class=\"odd\">\n        <td class=\"label\"><\/td>\n        <td id=\"firstColumn_leonov\" class=\"firstColumn\">\n            \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#firstColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_standard,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n        <td id=\"secondColumn_leonov\" class=\"secondColumn\">\n\t        \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#secondColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_homemaps,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n    <\/tr>\n\n    <tr id=\"speed\" class=\"even\">\n        <td class=\"label\">Velocidad<\/td>\n        <td class=\"firstColumn\">\n        \t300\n        <\/td>\n            <\/tr>\n    <tr id=\"load\" class=\"odd\">\n        <td class=\"label\">Carga<\/td>\n        <td class=\"firstColumn\">\n        \t400\n        <\/td>\n            <\/tr>\n    <tr id=\"laser\" class=\"even\">\n        <td class=\"label\">L\u00e1ser<\/td>\n        <td class=\"firstColumn\">\n        \t4\n        <\/td>\n            <\/tr>\n    <tr id=\"generatoren\" class=\"odd\">\n        <td class=\"label\">Generadores<\/td>\n        <td class=\"firstColumn\">\n        \t6\n        <\/td>\n            <\/tr>\n    <tr id=\"batteries\" class=\"even\">\n        <td class=\"label\">Bater\u00edas<\/td>\n        <td class=\"firstColumn\">\n        \t10.000\n        <\/td>\n            <\/tr>\n    <tr id=\"hitpoints\" class=\"odd\">\n        <td class=\"label\">Puntos de vida<\/td>\n        <td class=\"firstColumn\">\n        \t16.000\n        <\/td>\n            <\/tr>\n    <tr id=\"rockets\" class=\"even\">\n        <td class=\"label\">Misiles<\/td>\n        <td class=\"firstColumn\">\n        \t500\n        <\/td>\n            <\/tr>\n    <tr id=\"specials\" class=\"odd\">\n        <td class=\"label\">Extras<\/td>\n        <td class=\"firstColumn\">\n        \t2\n        <\/td>\n            <\/tr>\n<\/table>","price":40000,"currency":"virtual","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=ship_5_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":0,"item_name":"LIBERATOR","item_caption":"STARFIGHTER","item_prefix":"ship","item_id":5,"item_cv":"7e4e9588a88f7760ac921f975a585e00","price_plain":"40.000 C.","event_item_enabled":0,"loot_id":"ship_liberator","inuse":0,"in_use_plain":""}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/ship\/liberator_100x100.png?__cv=12811c57da5f73380b089c37aebde700","cost":"40.000 C.","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false,"isShip":true},"6":{"category":"ship","name":"Piranha","nameShort":"STARFIGHTER","description":"<script type=\"text\/javascript\">\nvar header_ttips = new Object;\nheader_ttips['leonov_shop_standard']  = '';\nheader_ttips['leonov_shop_homemaps']  = '';\n<\/script>\n\n<table id=\"shipDetails\">\n    <tr id=\"specials\" class=\"even\">\n        <td class=\"label\"><\/td>\n        <td id=\"firstColumn_leonov\" class=\"firstColumn\">\n            \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#firstColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_standard,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n        <td id=\"secondColumn_leonov\" class=\"secondColumn\">\n\t        \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#secondColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_homemaps,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n    <\/tr>\n\n    <tr id=\"speed\" class=\"odd\">\n        <td class=\"label\">Velocidad<\/td>\n        <td class=\"firstColumn\">\n        \t340\n        <\/td>\n            <\/tr>\n    <tr id=\"load\" class=\"even\">\n        <td class=\"label\">Carga<\/td>\n        <td class=\"firstColumn\">\n        \t600\n        <\/td>\n            <\/tr>\n    <tr id=\"laser\" class=\"odd\">\n        <td class=\"label\">L\u00e1ser<\/td>\n        <td class=\"firstColumn\">\n        \t6\n        <\/td>\n            <\/tr>\n    <tr id=\"generatoren\" class=\"even\">\n        <td class=\"label\">Generadores<\/td>\n        <td class=\"firstColumn\">\n        \t8\n        <\/td>\n            <\/tr>\n    <tr id=\"batteries\" class=\"odd\">\n        <td class=\"label\">Bater\u00edas<\/td>\n        <td class=\"firstColumn\">\n        \t14.000\n        <\/td>\n            <\/tr>\n    <tr id=\"hitpoints\" class=\"even\">\n        <td class=\"label\">Puntos de vida<\/td>\n        <td class=\"firstColumn\">\n        \t64.000\n        <\/td>\n            <\/tr>\n    <tr id=\"rockets\" class=\"odd\">\n        <td class=\"label\">Misiles<\/td>\n        <td class=\"firstColumn\">\n        \t700\n        <\/td>\n            <\/tr>\n    <tr id=\"specials\" class=\"even\">\n        <td class=\"label\">Extras<\/td>\n        <td class=\"firstColumn\">\n        \t2\n        <\/td>\n            <\/tr>\n<\/table>","price":125000,"currency":"virtual","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=ship_6_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":0,"item_name":"PIRANHA","item_caption":"STARFIGHTER","item_prefix":"ship","item_id":6,"item_cv":"981ff4cc4419b19212152ae18a9bf500","price_plain":"125.000 C.","event_item_enabled":0,"loot_id":"ship_piranha","inuse":0,"in_use_plain":""}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/ship\/piranha_100x100.png?__cv=dafebc613914a8d39de7740bf987f800","cost":"125.000 C.","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false,"isShip":true},"8":{"category":"ship","name":"Vengeance","nameShort":"STARFIGHTER","description":"<script type=\"text\/javascript\">\nvar header_ttips = new Object;\nheader_ttips['leonov_shop_standard']  = '';\nheader_ttips['leonov_shop_homemaps']  = '';\n<\/script>\n\n<table id=\"shipDetails\">\n    <tr id=\"specials\" class=\"odd\">\n        <td class=\"label\"><\/td>\n        <td id=\"firstColumn_leonov\" class=\"firstColumn\">\n            \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#firstColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_standard,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n        <td id=\"secondColumn_leonov\" class=\"secondColumn\">\n\t        \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#secondColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_homemaps,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n    <\/tr>\n\n    <tr id=\"speed\" class=\"even\">\n        <td class=\"label\">Velocidad<\/td>\n        <td class=\"firstColumn\">\n        \t380\n        <\/td>\n            <\/tr>\n    <tr id=\"load\" class=\"odd\">\n        <td class=\"label\">Carga<\/td>\n        <td class=\"firstColumn\">\n        \t1.000\n        <\/td>\n            <\/tr>\n    <tr id=\"laser\" class=\"even\">\n        <td class=\"label\">L\u00e1ser<\/td>\n        <td class=\"firstColumn\">\n        \t10\n        <\/td>\n            <\/tr>\n    <tr id=\"generatoren\" class=\"odd\">\n        <td class=\"label\">Generadores<\/td>\n        <td class=\"firstColumn\">\n        \t10\n        <\/td>\n            <\/tr>\n    <tr id=\"batteries\" class=\"even\">\n        <td class=\"label\">Bater\u00edas<\/td>\n        <td class=\"firstColumn\">\n        \t16.000\n        <\/td>\n            <\/tr>\n    <tr id=\"hitpoints\" class=\"odd\">\n        <td class=\"label\">Puntos de vida<\/td>\n        <td class=\"firstColumn\">\n        \t180.000\n        <\/td>\n            <\/tr>\n    <tr id=\"rockets\" class=\"even\">\n        <td class=\"label\">Misiles<\/td>\n        <td class=\"firstColumn\">\n        \t800\n        <\/td>\n            <\/tr>\n    <tr id=\"specials\" class=\"odd\">\n        <td class=\"label\">Extras<\/td>\n        <td class=\"firstColumn\">\n        \t2\n        <\/td>\n            <\/tr>\n<\/table>","price":30000,"currency":"real","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=ship_8_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"VENGEANCE","item_caption":"STARFIGHTER","item_prefix":"ship","item_id":8,"item_cv":"2e224af24fe98c952b2d2bdd7693c300","price_plain":"30.000 U.","event_item_enabled":0,"loot_id":"ship_vengeance","inuse":0,"in_use_plain":""}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/ship\/vengeance_100x100.png?__cv=0c54de458c43424b804b155068265600","cost":"30.000 U.","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":"-5%","discountTooltipText":null,"isPaymentItem":false,"isShip":true},"9":{"category":"ship","name":"Bigboy","nameShort":"CRUCERO DE BATALLA","description":"<script type=\"text\/javascript\">\nvar header_ttips = new Object;\nheader_ttips['leonov_shop_standard']  = '';\nheader_ttips['leonov_shop_homemaps']  = '';\n<\/script>\n\n<table id=\"shipDetails\">\n    <tr id=\"specials\" class=\"even\">\n        <td class=\"label\"><\/td>\n        <td id=\"firstColumn_leonov\" class=\"firstColumn\">\n            \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#firstColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_standard,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n        <td id=\"secondColumn_leonov\" class=\"secondColumn\">\n\t        \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#secondColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_homemaps,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n    <\/tr>\n\n    <tr id=\"speed\" class=\"odd\">\n        <td class=\"label\">Velocidad<\/td>\n        <td class=\"firstColumn\">\n        \t260\n        <\/td>\n            <\/tr>\n    <tr id=\"load\" class=\"even\">\n        <td class=\"label\">Carga<\/td>\n        <td class=\"firstColumn\">\n        \t700\n        <\/td>\n            <\/tr>\n    <tr id=\"laser\" class=\"odd\">\n        <td class=\"label\">L\u00e1ser<\/td>\n        <td class=\"firstColumn\">\n        \t7\n        <\/td>\n            <\/tr>\n    <tr id=\"generatoren\" class=\"even\">\n        <td class=\"label\">Generadores<\/td>\n        <td class=\"firstColumn\">\n        \t15\n        <\/td>\n            <\/tr>\n    <tr id=\"batteries\" class=\"odd\">\n        <td class=\"label\">Bater\u00edas<\/td>\n        <td class=\"firstColumn\">\n        \t18.000\n        <\/td>\n            <\/tr>\n    <tr id=\"hitpoints\" class=\"even\">\n        <td class=\"label\">Puntos de vida<\/td>\n        <td class=\"firstColumn\">\n        \t128.000\n        <\/td>\n            <\/tr>\n    <tr id=\"rockets\" class=\"odd\">\n        <td class=\"label\">Misiles<\/td>\n        <td class=\"firstColumn\">\n        \t900\n        <\/td>\n            <\/tr>\n    <tr id=\"specials\" class=\"even\">\n        <td class=\"label\">Extras<\/td>\n        <td class=\"firstColumn\">\n        \t3\n        <\/td>\n            <\/tr>\n<\/table>","price":200000,"currency":"virtual","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=ship_9_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":0,"item_name":"BIGBOY","item_caption":"CRUCERO+DE+BATALLA","item_prefix":"ship","item_id":9,"item_cv":"195e0fde18f83fe7ab54c20b8b550200","price_plain":"200.000 C.","event_item_enabled":0,"loot_id":"ship_bigboy","inuse":0,"in_use_plain":""}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/ship\/bigboy_100x100.png?__cv=47451983296c2b3216aa523e944ced00","cost":"200.000 C.","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false,"isShip":true},"10":{"category":"ship","name":"Goliath","nameShort":"CRUCERO DE BATALLA","description":"<script type=\"text\/javascript\">\nvar header_ttips = new Object;\nheader_ttips['leonov_shop_standard']  = '';\nheader_ttips['leonov_shop_homemaps']  = '';\n<\/script>\n\n<table id=\"shipDetails\">\n    <tr id=\"specials\" class=\"odd\">\n        <td class=\"label\"><\/td>\n        <td id=\"firstColumn_leonov\" class=\"firstColumn\">\n            \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#firstColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_standard,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n        <td id=\"secondColumn_leonov\" class=\"secondColumn\">\n\t        \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#secondColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_homemaps,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n    <\/tr>\n\n    <tr id=\"speed\" class=\"even\">\n        <td class=\"label\">Velocidad<\/td>\n        <td class=\"firstColumn\">\n        \t300\n        <\/td>\n            <\/tr>\n    <tr id=\"load\" class=\"odd\">\n        <td class=\"label\">Carga<\/td>\n        <td class=\"firstColumn\">\n        \t1.500\n        <\/td>\n            <\/tr>\n    <tr id=\"laser\" class=\"even\">\n        <td class=\"label\">L\u00e1ser<\/td>\n        <td class=\"firstColumn\">\n        \t15\n        <\/td>\n            <\/tr>\n    <tr id=\"generatoren\" class=\"odd\">\n        <td class=\"label\">Generadores<\/td>\n        <td class=\"firstColumn\">\n        \t15\n        <\/td>\n            <\/tr>\n    <tr id=\"batteries\" class=\"even\">\n        <td class=\"label\">Bater\u00edas<\/td>\n        <td class=\"firstColumn\">\n        \t32.000\n        <\/td>\n            <\/tr>\n    <tr id=\"hitpoints\" class=\"odd\">\n        <td class=\"label\">Puntos de vida<\/td>\n        <td class=\"firstColumn\">\n        \t256.000\n        <\/td>\n            <\/tr>\n    <tr id=\"rockets\" class=\"even\">\n        <td class=\"label\">Misiles<\/td>\n        <td class=\"firstColumn\">\n        \t1.600\n        <\/td>\n            <\/tr>\n    <tr id=\"specials\" class=\"odd\">\n        <td class=\"label\">Extras<\/td>\n        <td class=\"firstColumn\">\n        \t3\n        <\/td>\n            <\/tr>\n<\/table>","price":80000,"currency":"real","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=ship_10_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"GOLIATH","item_caption":"CRUCERO+DE+BATALLA","item_prefix":"ship","item_id":10,"item_cv":"b478c5653d98a43a9604243bdf829500","price_plain":"80.000 U.","event_item_enabled":0,"loot_id":"ship_goliath","inuse":0,"in_use_plain":""}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/ship\/goliath_100x100.png?__cv=5fcdb83e69b401d92cc1ae6abb172300","cost":"80.000 U.","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":"-5%","discountTooltipText":null,"isPaymentItem":false,"isShip":true},"11":{"category":"ship","name":"Citadel","nameShort":"CRUCERO PESADO","description":"<script type=\"text\/javascript\">\nvar header_ttips = new Object;\nheader_ttips['leonov_shop_standard']  = '';\nheader_ttips['leonov_shop_homemaps']  = '';\n<\/script>\n\n<table id=\"shipDetails\">\n    <tr id=\"specials\" class=\"even\">\n        <td class=\"label\"><\/td>\n        <td id=\"firstColumn_leonov\" class=\"firstColumn\">\n            \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#firstColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_standard,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n        <td id=\"secondColumn_leonov\" class=\"secondColumn\">\n\t        \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#secondColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_homemaps,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n    <\/tr>\n    <strong>Citadel<\/strong><br \/>\n    La nave Citadel es un crucero superpesado. Tiene ranuras para dos lanzamisiles y posee las siguientes habilidades que la convierten en el \"tanque\" del grupo:\n\n        <div class=\"shipDescrSkill\">\n        <div class=\"shipDescriptionSkillHeadline\" style=\"background-image: url(http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/skills\/skill_icon_draw_fire_32x35.png?__cv=d68814d30de5592b467f15e1432bdd00);\">\n            <div class=\"shipDescriptionSkillHeadlineText\">Atracci\u00f3n de fuego<\/div>\n        <\/div>\n        <div class=\"shipDescriptionSkillText\">Con esta habilidad, desv\u00edas temporalmente el fuego de las naves enemigas que est\u00e1n a tu alrededor hacia ti mismo.<\/div>\n    <\/div>\n        <div class=\"shipDescrSkill\">\n        <div class=\"shipDescriptionSkillHeadline\" style=\"background-image: url(http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/skills\/skill_icon_travel_mode_32x35.png?__cv=6e378495edd9d9775a01e0c3a5a41900);\">\n            <div class=\"shipDescriptionSkillHeadlineText\">Rayo veloz<\/div>\n        <\/div>\n        <div class=\"shipDescriptionSkillText\">Esta habilidad aumenta durante un corto periodo de tiempo tu velocidad. As\u00ed podr\u00e1s acortar las distancias.<\/div>\n    <\/div>\n        <div class=\"shipDescrSkill\">\n        <div class=\"shipDescriptionSkillHeadline\" style=\"background-image: url(http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/skills\/skill_icon_protect_32x35.png?__cv=038d8d948c1e31a5e423ad6396d77b00);\">\n            <div class=\"shipDescriptionSkillHeadlineText\">Escudo protector<\/div>\n        <\/div>\n        <div class=\"shipDescriptionSkillText\">Al usar esta habilidad, se desplega un escudo protector alrededor de tu nave. Este desv\u00eda hacia ti una parte de los da\u00f1os de todos los miembros de tu grupo en las inmediaciones.<\/div>\n    <\/div>\n        <div class=\"shipDescrSkill\">\n        <div class=\"shipDescriptionSkillHeadline\" style=\"background-image: url(http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/skills\/skill_icon_fortify_32x35.png?__cv=1e5df504b5ad98e2e842e8b5c58f5500);\">\n            <div class=\"shipDescriptionSkillHeadlineText\">Fortaleza<\/div>\n        <\/div>\n        <div class=\"shipDescriptionSkillText\">Esta habilidad proporciona un blindaje protector a tu nave y reduce los da\u00f1os que recibes. Sin embargo, durante ese tiempo no podr\u00e1s moverte.<\/div>\n    <\/div>\n    <br \/>\n\n    <tr id=\"speed\" class=\"odd\">\n        <td class=\"label\">Velocidad<\/td>\n        <td class=\"firstColumn\">\n        \t240\n        <\/td>\n            <\/tr>\n    <tr id=\"load\" class=\"even\">\n        <td class=\"label\">Carga<\/td>\n        <td class=\"firstColumn\">\n        \t4.000\n        <\/td>\n            <\/tr>\n    <tr id=\"laser\" class=\"odd\">\n        <td class=\"label\">L\u00e1ser<\/td>\n        <td class=\"firstColumn\">\n        \t7\n        <\/td>\n            <\/tr>\n    <tr id=\"generatoren\" class=\"even\">\n        <td class=\"label\">Generadores<\/td>\n        <td class=\"firstColumn\">\n        \t20\n        <\/td>\n            <\/tr>\n    <tr id=\"batteries\" class=\"odd\">\n        <td class=\"label\">Bater\u00edas<\/td>\n        <td class=\"firstColumn\">\n        \t20.000\n        <\/td>\n            <\/tr>\n    <tr id=\"hitpoints\" class=\"even\">\n        <td class=\"label\">Puntos de vida<\/td>\n        <td class=\"firstColumn\">\n        \t550.000\n        <\/td>\n            <\/tr>\n    <tr id=\"rockets\" class=\"odd\">\n        <td class=\"label\">Misiles<\/td>\n        <td class=\"firstColumn\">\n        \t2.000\n        <\/td>\n            <\/tr>\n    <tr id=\"specials\" class=\"even\">\n        <td class=\"label\">Extras<\/td>\n        <td class=\"firstColumn\">\n        \t5\n        <\/td>\n            <\/tr>\n<\/table>","price":300000,"currency":"real","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=ship_11_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"CITADEL","item_caption":"CRUCERO+PESADO","item_prefix":"ship","item_id":11,"item_cv":"dd1ab236657e37135e6132328950bd00","price_plain":"300.000 U.","event_item_enabled":0,"loot_id":"ship_citadel","factionID":"mmo","inuse":0,"in_use_plain":""}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/ship\/citadel-mmo_100x100.png?__cv=d43662ca1a65a25f5f9ce73f10e44000","cost":"300.000 U.","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":"-5%","discountTooltipText":null,"isPaymentItem":false,"isShip":true},"12":{"category":"ship","name":"Aegis","nameShort":"NAVE DE INGENIER\u00cdA","description":"<script type=\"text\/javascript\">\nvar header_ttips = new Object;\nheader_ttips['leonov_shop_standard']  = '';\nheader_ttips['leonov_shop_homemaps']  = '';\n<\/script>\n\n<table id=\"shipDetails\">\n    <tr id=\"specials\" class=\"odd\">\n        <td class=\"label\"><\/td>\n        <td id=\"firstColumn_leonov\" class=\"firstColumn\">\n            \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#firstColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_standard,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n        <td id=\"secondColumn_leonov\" class=\"secondColumn\">\n\t        \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#secondColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_homemaps,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n    <\/tr>\n    <strong>Aegis<\/strong><br \/>\n    La nave Aegis es una nave de apoyo semipesada. Muy pronto las naves de tu grupo ya nunca m\u00e1s renunciar\u00e1n a tu ayuda. La Aegis posee las siguientes habilidades:\n\n        <div class=\"shipDescrSkill\">\n        <div class=\"shipDescriptionSkillHeadline\" style=\"background-image: url(http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/skills\/skill_icon_healing_beam_32x35.png?__cv=f362034055e23378c621303ad6725000);\">\n            <div class=\"shipDescriptionSkillHeadlineText\">Reparaci\u00f3n de PV<\/div>\n        <\/div>\n        <div class=\"shipDescriptionSkillText\">Con la reparaci\u00f3n de PV, tus naves amigas recuperar\u00e1n poco a poco los puntos de vida.<\/div>\n    <\/div>\n        <div class=\"shipDescrSkill\">\n        <div class=\"shipDescriptionSkillHeadline\" style=\"background-image: url(http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/skills\/skill_icon_shield_recharge_32x35.png?__cv=95ddd104846643240ce0d733dcebc200);\">\n            <div class=\"shipDescriptionSkillHeadlineText\">Reparaci\u00f3n de escudo<\/div>\n        <\/div>\n        <div class=\"shipDescriptionSkillText\">Con la reparaci\u00f3n de escudo, podr\u00e1s enviarle a una nave amiga que t\u00fa elijas nueva energ\u00eda de escudo.<\/div>\n    <\/div>\n        <div class=\"shipDescrSkill\">\n        <div class=\"shipDescriptionSkillHeadline\" style=\"background-image: url(http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/skills\/skill_icon_healing_pod_32x35.png?__cv=070a2f785dc9a7e8c31a26c307483700);\">\n            <div class=\"shipDescriptionSkillHeadlineText\">Unidad de reparaci\u00f3n<\/div>\n        <\/div>\n        <div class=\"shipDescriptionSkillText\">Con esta habilidad, tu nave Aegis arrojar\u00e1 una unidad que restablecer\u00e1 poco a poco los PV de todas tus naves amigas.<\/div>\n    <\/div>\n    <br \/>\n\n    <tr id=\"speed\" class=\"even\">\n        <td class=\"label\">Velocidad<\/td>\n        <td class=\"firstColumn\">\n        \t300\n        <\/td>\n            <\/tr>\n    <tr id=\"load\" class=\"odd\">\n        <td class=\"label\">Carga<\/td>\n        <td class=\"firstColumn\">\n        \t2.000\n        <\/td>\n            <\/tr>\n    <tr id=\"laser\" class=\"even\">\n        <td class=\"label\">L\u00e1ser<\/td>\n        <td class=\"firstColumn\">\n        \t10\n        <\/td>\n            <\/tr>\n    <tr id=\"generatoren\" class=\"odd\">\n        <td class=\"label\">Generadores<\/td>\n        <td class=\"firstColumn\">\n        \t15\n        <\/td>\n            <\/tr>\n    <tr id=\"batteries\" class=\"even\">\n        <td class=\"label\">Bater\u00edas<\/td>\n        <td class=\"firstColumn\">\n        \t15.000\n        <\/td>\n            <\/tr>\n    <tr id=\"hitpoints\" class=\"odd\">\n        <td class=\"label\">Puntos de vida<\/td>\n        <td class=\"firstColumn\">\n        \t275.000\n        <\/td>\n            <\/tr>\n    <tr id=\"rockets\" class=\"even\">\n        <td class=\"label\">Misiles<\/td>\n        <td class=\"firstColumn\">\n        \t3.000\n        <\/td>\n            <\/tr>\n    <tr id=\"specials\" class=\"odd\">\n        <td class=\"label\">Extras<\/td>\n        <td class=\"firstColumn\">\n        \t3\n        <\/td>\n            <\/tr>\n<\/table>","price":250000,"currency":"real","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=ship_12_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"AEGIS","item_caption":"NAVE+DE+INGENIER%C3%8DA","item_prefix":"ship","item_id":12,"item_cv":"efe1d5bf410ae7167f4b4f7b229f5d00","price_plain":"250.000 U.","event_item_enabled":0,"loot_id":"ship_aegis","factionID":"mmo","inuse":0,"in_use_plain":""}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/ship\/aegis-mmo_100x100.png?__cv=89907c440812462e67ad63192d91b700","cost":"250.000 U.","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":"-5%","discountTooltipText":null,"isPaymentItem":false,"isShip":true},"13":{"category":"ship","name":"Spearhead","nameShort":"NAVE DE RECONOCIMIENTO","description":"<script type=\"text\/javascript\">\nvar header_ttips = new Object;\nheader_ttips['leonov_shop_standard']  = '';\nheader_ttips['leonov_shop_homemaps']  = '';\n<\/script>\n\n<table id=\"shipDetails\">\n    <tr id=\"specials\" class=\"even\">\n        <td class=\"label\"><\/td>\n        <td id=\"firstColumn_leonov\" class=\"firstColumn\">\n            \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#firstColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_standard,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n        <td id=\"secondColumn_leonov\" class=\"secondColumn\">\n\t        \n            \n                <script type='text\/javascript'>\n                    jQuery(\"#secondColumn_leonov\").qtip({\n                        content: header_ttips.leonov_shop_homemaps,\n                        style:'dohdr',\n                        position:{target:'mouse'}\n                    });\n                <\/script>\n            \n        <\/td>\n    <\/tr>\n    <strong>Spearhead<\/strong><br \/>\n    La nave Spearhead es una nave ligera de reconocimiento, pr\u00e1cticamente es la esp\u00eda del grupo. Esta nave tiene las siguientes habilidades que facilitan el reconocimiento de objetivos para el grupo: \n\n        <div class=\"shipDescrSkill\">\n        <div class=\"shipDescriptionSkillHeadline\" style=\"background-image: url(http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/skills\/skill_icon_ultimate_cloaking_32x35.png?__cv=0d4928bfad6c2e3b526acc1a4e875d00);\">\n            <div class=\"shipDescriptionSkillHeadlineText\">Camuflaje definitivo<\/div>\n        <\/div>\n        <div class=\"shipDescriptionSkillText\">Esta habilidad te permite camuflarte, te elimina incluso del minimapa y evita que tus adversarios puedan ponerte en el punto de mira.<\/div>\n    <\/div>\n        <div class=\"shipDescrSkill\">\n        <div class=\"shipDescriptionSkillHeadline\" style=\"background-image: url(http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/skills\/skill_icon_ultimate_emp_32x35.png?__cv=c43b72d8dcb1864e7248928a22452c00);\">\n            <div class=\"shipDescriptionSkillHeadlineText\">Paralizador<\/div>\n        <\/div>\n        <div class=\"shipDescriptionSkillText\">La habilidad \"Paralizador\" detiene las habilidades de las naves enemigas. Aquellas que los enemigos est\u00e9n usando se paralizar\u00e1n.<\/div>\n    <\/div>\n        <div class=\"shipDescrSkill\">\n        <div class=\"shipDescriptionSkillHeadline\" style=\"background-image: url(http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/skills\/skill_icon_mark_target_32x35.png?__cv=e97b83b19759381184641ed636af6500);\">\n            <div class=\"shipDescriptionSkillHeadlineText\">Marcaci\u00f3n de objetivo<\/div>\n        <\/div>\n        <div class=\"shipDescriptionSkillText\">Esta habilidad marca los objetivos para tu grupo y aumenta los da\u00f1os causados por todos los miembros.<\/div>\n    <\/div>\n        <div class=\"shipDescrSkill\">\n        <div class=\"shipDescriptionSkillHeadline\" style=\"background-image: url(http:\/\/darkorbit-22.ah.bpcdn.nethttp:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/skills\/skill_icon_double_minimap_32x35.png?__cv=720c8dc4a68742e652f8a9652195c500);\">\n            <div class=\"shipDescriptionSkillHeadlineText\">Reconocimiento<\/div>\n        <\/div>\n        <div class=\"shipDescriptionSkillText\">Esta habilidad te proporciona el doble de alcance de reconocimiento en el minimapa.<\/div>\n    <\/div>\n    <br \/>\n\n    <tr id=\"speed\" class=\"odd\">\n        <td class=\"label\">Velocidad<\/td>\n        <td class=\"firstColumn\">\n        \t370\n        <\/td>\n            <\/tr>\n    <tr id=\"load\" class=\"even\">\n        <td class=\"label\">Carga<\/td>\n        <td class=\"firstColumn\">\n        \t500\n        <\/td>\n            <\/tr>\n    <tr id=\"laser\" class=\"odd\">\n        <td class=\"label\">L\u00e1ser<\/td>\n        <td class=\"firstColumn\">\n        \t5\n        <\/td>\n            <\/tr>\n    <tr id=\"generatoren\" class=\"even\">\n        <td class=\"label\">Generadores<\/td>\n        <td class=\"firstColumn\">\n        \t12\n        <\/td>\n            <\/tr>\n    <tr id=\"batteries\" class=\"odd\">\n        <td class=\"label\">Bater\u00edas<\/td>\n        <td class=\"firstColumn\">\n        \t5.000\n        <\/td>\n            <\/tr>\n    <tr id=\"hitpoints\" class=\"even\">\n        <td class=\"label\">Puntos de vida<\/td>\n        <td class=\"firstColumn\">\n        \t100.000\n        <\/td>\n            <\/tr>\n    <tr id=\"rockets\" class=\"odd\">\n        <td class=\"label\">Misiles<\/td>\n        <td class=\"firstColumn\">\n        \t500\n        <\/td>\n            <\/tr>\n    <tr id=\"specials\" class=\"even\">\n        <td class=\"label\">Extras<\/td>\n        <td class=\"firstColumn\">\n        \t2\n        <\/td>\n            <\/tr>\n<\/table>","price":45000,"currency":"real","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=ship_13_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"SPEARHEAD","item_caption":"NAVE+DE+RECONOCIMIENTO","item_prefix":"ship","item_id":13,"item_cv":"9f5e8aa6defb7ac8393a071a89732f00","price_plain":"45.000 U.","event_item_enabled":0,"loot_id":"ship_spearhead","factionID":"mmo","inuse":0,"in_use_plain":""}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/ship\/spearhead-mmo_100x100.png?__cv=12de6f44a46e0c64accde5398ba25f00","cost":"45.000 U.","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":"-5%","discountTooltipText":null,"isPaymentItem":false,"isShip":true},"packages":{"category":"ship","name":"S-TRINITY","nameShort":"PACKAGE","description":"<strong>S-TRINITY<\/strong><br>- Aegis<br>- Citadel<br>- Spearhead","price":0,"currency":"virtual","nameBackgroundImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/text_tf.esg?l=us&s=12&t=ship_998_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"S-TRINITY","item_caption":"PACKAGE","item_prefix":"ship","item_id":"12-mmo","item_cv":"efe1d5bf410ae7167f4b4f7b229f5d00","price_plain":"Pago","event_item_enabled":0,"loot_id":"package_s-trinity-mmo"}},"itemListImageUrl":"http:\/\/darkorbit-22.ah.bpcdn.net\/do_img\/global\/items\/package\/s-trinity-mmo_100x100.png?__cv=0058552692b26643098082e055975100","cost":"Pago","isAmountSetable":false,"amountsSelectable":["ten","hundred","thousand","max"],"maxAmount":1,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":true,"paymentUrl":"\/?action=internalPaymentProxy&req=d9392e32a3d814387c586c0b8f1abb01f59fba5da5f526e0109e448af1bb6a26682e666efdcb796b455805820f6812dfc804757e4bffadb3&v=ac8732e175966dd5"}},
        numItems        : 12,
        startupItemId   : '1',
        userDroneAmount : 0,
        maxDroneAmount  : 8,
        language        : 'es'
    };

    User.Parameters = {"balance":{"uridium":50000000,"credits":418000000},"discountFactor":0.95,"language":"es","ship":{"laserAmmunitionSpace":33,"rocketSpace":11},"isActiveHangarEmpty":false,"isShipDumpEmpty":true};

    Tools.Text.Parameters = {
        resources       : {"items_shop_buy_confirm_s":"\u00bfQuieres comprar de verdad el objeto <b>%ITEMNAME%<\/b> por <b>%ITEMPRICE%<\/b>?","items_shop_buy_confirm_p":"\u00bfQuieres comprar de verdad %AMOUNT% x <b>%ITEMNAME%<\/b> por <b>%ITEMPRICE%<\/b>?","items_shop_abo_confirm":"\u00bfDe verdad quieres suscribirte a: <b>%itemName%<\/b>?","booster_subscription_cancel_confirmation":"\u00bfQuieres cancelar tu suscripci\u00f3n al potenciador \"%BOOSTERNAME%\"?","drone_have_max":"Ya has alcanzado el n\u00famero m\u00e1ximo de veh\u00edculos a\u00e9reos no tripulados por eso no puedes seguir comprando.","thousands_separator":".","decimal_separator":",","pricetag_credits_compact":"%VALUE% C.","pricetag_uridium_compact":"%VALUE% U.","items_currency_realcurrency_credits":"cr\u00e9ditos","items_booster_subscription_cancel_confirmation":"\u00bfQuieres cancelar la suscripci\u00f3n al potenciador \"%BOOSTERNAME%\"?","booster_subscription_running":"Suscripci\u00f3n de potenciador activa","booster_countdown":"Tiempo restante: %DAYS% d\u00edas, %HOURS% horas y %MINUTES% min.","error_pet_name_char":"El nombre de tu P.E.T. contiene caracteres inv\u00e1lidos. Por favor, usa solo letras y d\u00edgitos.","error_pet_name_length":"El nombre de la P.E.T. debe contener entre 1 y 16 caracteres.","shop_itemNameWithLevel":"%ITEMNAME% (Nivel: %LEVEL%) ","shop_techfactory_long":"En la tecnof\u00e1brica puedes construir el objeto.","shop_techfactory":"Tecnof\u00e1brica","tf_message_not_enough_uridium":"Tienes muy poco Uridium para hacer esto.","tf_message_not_enough_credits":"Tienes muy pocos cr\u00e9ditos para hacer esto.","buy_toManyBATTERY":"\u00a1Ya dispones del n\u00famero m\u00e1ximo de municiones l\u00e1ser para tu nave espacial!","buy_toManyROCKET":"\u00a1Ya dispones del n\u00famero m\u00e1ximo de misiles para tu nave espacial!","pet_gear_requirement":"Requisito: Nivel de P.E.T. %level%","current_in_use":"Actualmente en uso","buy_pet_invalidFuelAmount":"Tu P.E.T. no admite tanto combustible.","active_hangar_empty":"Compra fallida.<br> El pabell\u00f3n activo de tu hangar est\u00e1 en este momento vac\u00edo.","active_hangar_empty_equip":"Coloca primero una nave en este pabell\u00f3n.","active_hangar_empty_buy":"C\u00f3mprate primero una nave para poder colocarla despu\u00e9s en este pabell\u00f3n.","hint_go_to_payment":"\u00bfTe falta Uridium? \u00a1Haz clic aqu\u00ed y rellena tu cuenta!"}
    };

    Tools.Popup.Parameters = {"showOnLoad":false,"type":"success","content":""};

    if('1') {
        jQuery("#discount").qtip({
            content: 'Eres usuario Premium y <br />recibes un 5% de descuento en <br />todas tus compras con Uridium.',
            style:'dohdr',
            width: 50,
            position:{target:'mouse'}
        });
    }


</script>

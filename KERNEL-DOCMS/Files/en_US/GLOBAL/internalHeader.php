    <script language="javascript">
    var SID='dosid=0703fa530b1b000b6d9ceacd29a25021';
    var rid = '612978f44ea799efd1ee2374445cdae4';
    var errorMsg = 'Please turn off your pop-up blocker!';
    var windowSpacemap = null;

            var playerWantsOldClient = false;
    
    var availableResolutions = {'0' : {id : '0', width : 820, height : 600},'1' : {id : '1', width : 1024, height : 576},'2' : {id : '2', width : 1024, height : 720},'3' : {id : '3', width : 1280, height : 720},'4' : {id : '4', width : 1280, height : 900},'5' : {id : '5', width : 750, height : 600}};
    var desktopResolution = {width: screen.width, height: screen.height};
    var determinedClientResolution = {id: '4', width: 1280, height: 900}; // resolution from user from DB
    var isOpenSocialResolutions = false;
    var isTutorialMap = true;

    
    function openFlashClient(resolution, factionID)
    {
        try {
            if (typeof(window.opener) == 'object' && window.opener.thisIsReal) {
                window.opener.focus();
                return;
            }
        } catch (e) {}

        if(playerWantsOldClient) {
            // open client in old-fashioned way...
            var map = 'internalMap';
        } else {

            var map = 'internalMapRevolution';

            tmpResolution = checkResolution();
            determinedResolution = tmpResolution.determinedResolution;
            posibleResolutions = tmpResolution.posibleResolutions;

            if(
                determinedClientResolution.height > determinedResolution.height
                || determinedClientResolution.width > determinedResolution.width
            ){
                resolution = determinedResolution;
            } else {
                resolution = determinedClientResolution;
            }

            //xajax_saveTempResolution(String(resolution.id), posibleResolutions);
            var saveSyncron = function() { return xajax.request( { xjxfun: 'saveTempResolution' }, { parameters: arguments, mode:'synchronous' } ); };
            saveSyncron(String(resolution.id), posibleResolutions);
        }

        factionString = '';
        if (factionID >= 1 && factionID <= 3) {
            factionString = '&factionID='+factionID;
        }

        var offset = {width: 0, height: 0};

        if(windowSpacemap == null || windowSpacemap.closed) {
            // if there no window with name "windowSpacemap" or its closed, it would be reloaded
            url = 'indexInternal.es?action=' + map + '&' + SID + factionString;
            windowSpacemap = window.open('', 'spacemap', 'width=' + (resolution.width + offset.width) + ',height=' + (resolution.height + offset.height) + ',menubar=no,location=no,status=yes,toolbar=no');
            // if location empty, then load client
            if (windowSpacemap.location.search.length == 0) {
                    // load spacemap (url)
                    windowSpacemap.location = url;
            }
        }
        // focus the spacemap / get it in front
        windowSpacemap.focus();

        //alert('PopUp-Size: ' + String(resolution.width + offset.width) + 'x' + String(resolution.height + offset.height));

        if (!windowSpacemap) {
            alert(translate(errorMsg));
        }
        try {
            windowSpacemap.thisIsReal = true;
            window.opener = windowSpacemap;
        } catch (e) {}
    }
    

    
    function switchOldClientUsage(boolValue)
    {
        playerWantsOldClient = boolValue;
        xajax_saveOldClientUsage((boolValue ? 1 : 0));
    }
    

    
    function checkResolution()
    {
        var resolution = desktopResolution;
        var databaseResolution = determinedClientResolution;
        var resolutions = {'0' : {id : '0', width : 820, height : 600},'1' : {id : '1', width : 1024, height : 576},'2' : {id : '2', width : 1024, height : 720},'3' : {id : '3', width : 1280, height : 720},'4' : {id : '4', width : 1280, height : 900},'5' : {id : '5', width : 750, height : 600}};

        var determinedResolution  = null;
        var defaultResolution  = {id : '5', width : 750, height : 600};
        var posibleResolutions = [];

        if(true === isOpenSocialResolutions) {
            return defaultResolution;
        }

        // identify the smallest resolution which matches against posible resolutions.
        for(i in resolutions){
            if(
                resolutions[i].width <= resolution.width
                && resolutions[i].height <= resolution.height
            ) {
                // identify the highest posible resoultion
                if(null === determinedResolution) {
                    determinedResolution = resolutions[i];
                } else {
                    if(
                        resolutions[i].width >= determinedResolution.width
                        && resolutions[i].height >= determinedResolution.height
                    ) {
                        determinedResolution = resolutions[i];
                    };
                };
                posibleResolutions.push(resolutions[i].id);
            };
        };

        if(null === determinedResolution) {
            determinedResolution = defaultResolution;
            posibleResolutions.push(defaultResolution.id);
        };

        if (false === isTutorialMap) {
            if(desktopResolution.width > databaseResolution.width && desktopResolution.height > databaseResolution.height) {
                return {'determinedResolution': databaseResolution, 'posibleResolutions': posibleResolutions};
            }
        }

        //xajax_saveTempResolution(String(determinedResolution.id), posibleResolutions);
        var saveSyncron = function() { return xajax.request( { xjxfun: 'saveTempResolution' }, { parameters: arguments, mode:'synchronous' } ); };
        saveSyncron(String(determinedResolution.id), posibleResolutions);

        return {'determinedResolution': determinedResolution, 'posibleResolutions': posibleResolutions};
    }
    
    
    
    function openMiniMap(wdt, hgt, factionID) {
        // this function is now used as a hook
        // for the old client...
        openFlashClient({id: '-1', width: wdt, height: hgt}, factionID);
    }
    
</script>
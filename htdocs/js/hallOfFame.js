var hofDefaultLoc = '/indexInternal.es?action=internalHallofFame';

jQuery(document).ready(function() {
    // tabs of home screens
    if (jQuery('.hof_home_tabs').length > 0) {
        var tabs = jQuery('.hof_home_tabs div');

        tabs.click(function() {
            if (jQuery(this).hasClass('hof_home_tab_active')) {
                return;
            }

            var activeTab, activeContent;

            activeTab = jQuery(this).attr('id');
            activeContent = activeTab.replace(/_tab_/, '_content_');

            tabs.removeClass('hof_home_tab_active');
            jQuery(this).addClass('hof_home_tab_active');

            jQuery('.hof_home_content').hide();
            jQuery('#' + activeContent).show();
        })
    }

    // set tooltips for top icon navigation
    jQuery('#section_your').qtip({
        content: hof_ttips.your,
        style: 'dohdr',
        position: {target: 'mouse'}
    });
    jQuery('#section_exp').qtip({
        content: hof_ttips.exp,
        style: 'dohdr',
        position: {target: 'mouse'}
    });
    jQuery('#section_hnr').qtip({
        content: hof_ttips.hnr,
        style: 'dohdr',
        position: {target: 'mouse'}
    });
    jQuery('#section_user').qtip({
        content: hof_ttips.user,
        style: 'dohdr',
        position: {target: 'mouse'}
    });
    jQuery('#section_clan').qtip({
        content: hof_ttips.clan,
        style: 'dohdr',
        position: {target: 'mouse'}
    });
    jQuery('#section_gate').qtip({
        content: hof_ttips.gate,
        style: 'dohdr',
        position: {target: 'mouse'}
    });
    jQuery('#section_event').qtip({
        content: hof_ttips.event,
        style: 'dohdr',
        position: {target: 'mouse'}
    });

    jQuery('.clanName').qtip({
        content: jQuery('.clanName').attr("tittle"),
        style: 'dohdr',
        position: {target: 'mouse'}
    });


    jQuery('.clanInfoClanName').live('mouseover',function(){

            jQuery('.clanInfoClanName').qtip({
                content: jQuery('.clanInfoClanName').attr("tittle"),
                style: 'dohdr',
                position: {target: 'mouse'},
                overwrite: false,
                show: {
                    ready: true
                }
            });

    });

    jQuery('.userInfoUsername').live('mouseover',function(){
        jQuery('.userInfoUsername').qtip({
            content: jQuery('.userInfoUsername').attr("tittle"),
            style: 'dohdr',
            position: {target: 'mouse'},
            overwrite: false,
            show: {
                ready: true
            }
        });
    });

    // set scroll bars
    var scrollPane = jQuery('.scroll-pane').jScrollPane({showArrows: true});

    // top user ranking ranks
    jQuery('.hof_rankingCategory').click(function() {
        if (jQuery(this).hasClass('hof_category_active')) {
            return;
        }

        var scrollAPI = scrollPane.data('jsp');

        var currentActive = jQuery('.hof_category_active').attr('id');
        jQuery('#' + currentActive).removeClass('hof_category_active');

        var newActive = jQuery(this).attr('id');
        jQuery(this).addClass('hof_category_active');
//        console.log(jQuery('#' + newActive + '_data'));
        jQuery('#' + currentActive + '_data').slideUp();
        jQuery('#' + newActive + '_data').slideDown('fast', function() {
            scrollAPI.reinitialise();
        });
    });
});

var HOF = {
    toggleRankingSelection: function()
    {
        var dropTrigger = jQuery('#hof_dropdown');
        var dropMenu = jQuery('#hof_dropdown_menu');

        if (dropTrigger.hasClass('hof_selection_down')) {
            if (jQuery('#hof_dropdown_menu a').length > 12) {
                jQuery('#hof_dropdown_menu').addClass('scrollPane');
            }

            dropMenu.slideDown(400, function() {
                jQuery('#hof_dropdown_menu.scrollPane').jScrollPane({showArrows: false})
            });
            dropTrigger.removeClass('hof_selection_down');
            dropTrigger.addClass('hof_selection_up');
        } else {
            dropMenu.slideUp();
            dropTrigger.removeClass('hof_selection_up');
            dropTrigger.addClass('hof_selection_down');
        }
    }
};
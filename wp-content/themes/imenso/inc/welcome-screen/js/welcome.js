jQuery(document).ready(function() {
	
	/* If there are required actions, add an icon with the number of required actions in the About imenso page -> Actions required tab */
    var imenso_nr_actions_required = imensoLiteWelcomeScreenObject.nr_actions_required;

    if ( (typeof imenso_nr_actions_required !== 'undefined') && (imenso_nr_actions_required != '0') ) {
        jQuery('li.imenso-lite-w-red-tab a').append('<span class="imenso-lite-actions-count">' + imenso_nr_actions_required + '</span>');
    }

    /* Dismiss required actions */
    jQuery(".imenso-dismiss-required-action").click(function(){

        var id= jQuery(this).attr('id');
        console.log(id);
        jQuery.ajax({
            type       : "GET",
            data       : { action: 'imenso_lite_dismiss_required_action',dismiss_id : id },
            dataType   : "html",
            url        : imensoLiteWelcomeScreenObject.ajaxurl,
            beforeSend : function(data,settings){
				jQuery('.imenso-lite-tab-pane#actions_required h1').append('<div id="temp_load" style="text-align:center"><img src="' + imensoLiteWelcomeScreenObject.template_directory + '/inc/admin/welcome-screen/img/ajax-loader.gif" /></div>');
            },
            success    : function(data){
				jQuery("#temp_load").remove(); /* Remove loading gif */
                jQuery('#'+ data).parent().remove(); /* Remove required action box */

                var imenso_lite_actions_count = jQuery('.imenso-lite-actions-count').text(); /* Decrease or remove the counter for required actions */
                if( typeof imenso_lite_actions_count !== 'undefined' ) {
                    if( imenso_lite_actions_count == '1' ) {
                        jQuery('.imenso-lite-actions-count').remove();
                        jQuery('.imenso-lite-tab-pane#actions_required').append('<p>' + imensoLiteWelcomeScreenObject.no_required_actions_text + '</p>');
                    }
                    else {
                        jQuery('.imenso-lite-actions-count').text(parseInt(imenso_lite_actions_count) - 1);
                    }
                }
            },
            error     : function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
    });
	
	/* Tabs in welcome page */
	function imenso_welcome_page_tabs(event) {
		jQuery(event).parent().addClass("active");
        jQuery(event).parent().siblings().removeClass("active");
        var tab = jQuery(event).attr("href");
        jQuery(".imenso-lite-tab-pane").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
	}
	
	var imenso_actions_anchor = location.hash;
	
	if( (typeof imenso_actions_anchor !== 'undefined') && (imenso_actions_anchor != '') ) {
		imenso_welcome_page_tabs('a[href="'+ imenso_actions_anchor +'"]');
	}
	
    jQuery(".imenso-lite-nav-tabs a").click(function(event) {
        event.preventDefault();
		imenso_welcome_page_tabs(this);
    });

});
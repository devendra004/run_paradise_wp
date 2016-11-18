jQuery(document).ready(function() {
    var imenso_aboutpage = imensoLiteWelcomeScreenCustomizerObject.aboutpage;
    var imenso_nr_actions_required = imensoLiteWelcomeScreenCustomizerObject.nr_actions_required;

    /* Number of required actions */
    if ((typeof imenso_aboutpage !== 'undefined') && (typeof imenso_nr_actions_required !== 'undefined') && (imenso_nr_actions_required != '0')) {
        jQuery('#accordion-section-themes .accordion-section-title').append('<a href="' + imenso_aboutpage + '"><span class="imenso-lite-actions-count">' + imenso_nr_actions_required + '</span></a>');
    }

    /* Upsell in Customizer (Link to Welcome page) */
    if ( !jQuery( ".imenso-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section imenso-upsells">');
    }
    if (typeof imenso_aboutpage !== 'undefined') {
        jQuery('.imenso-upsells').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="' + imenso_aboutpage + '" class="button" target="_blank">{themeinfo}</a>'.replace('{themeinfo}', imensoLiteWelcomeScreenCustomizerObject.themeinfo));
    }
    if ( !jQuery( ".imenso-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('</li>');
    }
});
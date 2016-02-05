jQuery( window ).load( function() {
    if (jQuery('body.archive').length || jQuery('body.single-product').length) {
        jQuery('body').addClass('storefront-full-width-content');
    }
});
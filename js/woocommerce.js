(function($) {
    $(document).ready(function() {
        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: 'wc_add_categories',
            },
            success: function(response) {
                console.log('Catégories WooCommerce ajoutées');
            }
        });
    });
})(jQuery);
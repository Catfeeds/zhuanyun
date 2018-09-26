var invoice = {
    init : function() {
        $(document).on('click', '.is_order_invoice', function(e) {
            var target = $(e.target);
            if($(target).val()) {
                $('#order_invoice_info_wrap').show();
            } else {
                $('#order_invoice_info_wrap').hide();
            }
        });
    }
};
invoice.init();
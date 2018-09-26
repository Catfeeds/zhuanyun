/**
 * cfang move below code to common.js 2017.11.26
 */
(function ($) {
    $.fn.userdefinenumber = function () {
        this.keypress(function (event) {
            var eventObj = event || e;
            var keyCode = eventObj.keyCode || eventObj.which;
            if (keyCode >= 48 && keyCode <= 57) {
                return true;
            }
            else if (keyCode == 46) {
                if ($(this).val().indexOf('.')>= 0) {
                    return false;
                } else {
                    return true;
                }
            }
            else {
                return false;
            }
        }).focus(function () {
            //禁用输入法
            //$(this).style.imeMode = 'disabled';
        }).bind("paste", function () {
            //获取剪切板的内容
            var clipboard = window.clipboardData.getData("Text");
            if (/^\d+$/.test(clipboard))
                return true;
            else
                return false;
        });
    }
    

    $.fn.setdefinenumber = function (aa) {
    	this.blur(function (event) {
    		if ($(this).val()=='') {
                $(this).val(aa);
            }
    	});
    }
})(jQuery);
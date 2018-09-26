$(document).ready(function () {
    $(".option").click(function () {
        $(".option_selected").removeClass('option_selected');
        $(this).addClass('option_selected');
        $("input[name='SpecName']").val($(this).text());
        $("input[name='SkuId']").val($(this).attr("data"));
    })
    $("#minus").click(function () {
        if (Number($("#buyNum").val()) > 1) {
            $("#buyNum").val(Number($("#buyNum").val()) - 1);
            $("#totalPrice").text("¥" + $("#buyNum").val() * $("#price").val() + ".00");
        }
    })
    $("#plus").click(function () {
        $("#buyNum").val(Number($("#buyNum").val()) + 1);
        $("#totalPrice").text("¥" + $("#buyNum").val() * $("#price").val() + ".00");
		 $("input[name='tprice']").val($("#buyNum").val() * $("#price").val());
		   
    })

    $("#detailTab span").bind("click", function () {
        var index = $(this).index();
        var divs = $("#detailCont > div");
        $(this).parent().children("span").removeClass("cur");//将所有选项置为未选中
        $(this).addClass("cur"); //设置当前选中项为选中样式
        divs.hide();//隐藏所有选中项内容
        divs.eq(index).show(); //显示选中项对应内容
    });
});
$(function () {
    $('#skuStock').countdown(function (s, d) {
        var hour = pad(d.hour, 2);
        var minute = pad(d.minute, 2);
        var second = pad(d.second, 2);
        $(this).text("离抢购结束还剩：" + hour + "时" + minute + "分" + second + "秒");
    });
});
function pad(num, n) {
    var len = num.toString().length;
    while (len < n) {
        num = "0" + num;
        len++;
    }
    return num;
}





$(document).ready(function () {
    $("#codGoPayFloat").click(function () {
        var buynum = $("#buyNum").val();
        if (buynum < 1) {
            alert("购买数量不得小于1");
            return false;
        }
        if (buynum < 1) {
            alert("购买数量不得小于1");
           return false;
        }
        var strings = $("#bname").val();
        if (strings.replace(/(^\s*)|(\s*$)/g, '').length == 0) {
            alert("姓名不得为空");
            $("#bname").focus();
           return false;
        }
        var isMobile = /^(?:13\d|15\d|18\d|17\d|14\d)\d{8}$/;
        var mobile = $("#mobile").val();
        if (!isMobile.test(mobile)) {
            alert("请正确填写电话号码，例如:13800001111");
            $("#mobile").focus();
            return false;
        }
        var stringa = $("#adinfo").val();
        if (stringa.replace(/(^\s*)|(\s*$)/g, '').length < 5) {
            alert("详细地址不得少于5个字符");
           return false;
        }
        document.getElementById('complete').submit()
    })
});


(function ($) {

    var countdown = function (item, config) {
        var seconds = parseInt($(item).attr(config.attribute));
        var timer = null;

        var doWork = function () {
            if (seconds >= 0) {
                if (typeof (config.callback) == "function") {
                    var data = {
                        total: seconds,
                        second: Math.floor(seconds % 60),
                        minute: Math.floor((seconds / 60) % 60),
                        hour: Math.floor((seconds / 3600) % 24),
                        day: Math.floor(seconds / 86400)
                    };
                    config.callback.call(item, seconds, data, item);
                }
                seconds--;
            } else {
                window.clearInterval(timer);
            }
        }

        timer = window.setInterval(doWork, 1000);
        doWork();
    };

    var main = function () {
        var args = arguments;
        var config = { attribute: 'data-seconds', callback: null };

        if (args.length == 1) {
            if (typeof (args[0]) == "function") config.callback = args[0];
            if (typeof (args[0]) == "object") $.extend(config, args[0]);
        } else {
            config.attribute = args[0];
            config.callback = args[1];
        }

        $(this).each(function (index, item) {
            countdown.call(item, item, config);
        });
    };

    $.fn.countdown = main;

})(jQuery);
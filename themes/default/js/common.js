
$(function(){
	return;
	
	$(":input[placeholder]").each(function(){
		$(this).placeholder();
	});	  

	$(".menu_list ul li:first").addClass("curr"); //涓虹涓�釜SPAN娣诲姞褰撳墠鏁堟灉鏍峰紡
	
	//当前地址
	var curHref=window.location.search.substr(1);
	var indexof7 = curHref.indexOf('&');
	if(indexof7!=-1)
	{
		curHref = curHref.substring(0,indexof7);
	}
	if(curHref.indexOf('act=article_news')!=-1)
	{
		//新闻列表
		curHref='act=list_news';
	}
	//会员
	else if(curHref.indexOf('member')!=-1)
	{
		curHref='act=member_account';
	}
	$(".menu_list ul li").each(function(){
		var strHref=$(this).find("a").attr("href").split('?')[1];
		if(strHref==curHref){
			$(this).addClass("curr").siblings().removeClass("curr");
		}
	});
});

$(function() {
    function menuFix() {
     var sfEls = document.getElementById("nav").getElementsByTagName("li");
     for (var i=0; i<sfEls.length; i++) {
      sfEls[i].onmouseover=function() {
        this.className+=(this.className.length>0? " ": "") + "sfhover";
      }
      sfEls[i].onMouseDown=function() {
        this.className+=(this.className.length>0? " ": "") + "sfhover";
      }
      sfEls[i].onMouseUp=function() {
       this.className+=(this.className.length>0? " ": "") + "sfhover";
      }
      sfEls[i].onmouseout=function() {
        this.className=this.className.replace(new RegExp("( ?|^)sfhover\\b"),"");
      }
     }
    }
    menuFix();

});
(function($){
	$.fn.extend({
        placeholder : function (options) {
            var defaults = {
                pColor: "#ccc",
                pActive: "#000",
                posL: 8,
                zIndex: "99"
            },
            opts = $.extend(defaults, options);
            //
            return this.each(function () {
                if ("placeholder" in document.createElement("input")) return;
                $(this).parent().css("position", "relative");
      
                //涓嶆敮鎸乸laceholder鐨勬祻瑙堝櫒
                var $this = $(this),
                    msg = $this.attr("placeholder"),
                    iH = $this.outerHeight(),
                    iW = $this.outerWidth(),
                    iX = $this.position().left,
                    iY = $this.position().top,
    				iPX = parseInt($this.css("padding-left").replace('px', '')) || 0,
                    oInput = $("<label>", {
                    "class": "test",
                    "text": msg,
                    "css": {
                        "position": "absolute",
                        "left": iX + "px",
                        "top": iY + "px",
                        "width": iW - opts.posL + "px",
                        //"padding-left": iPX + opts.posL + "px",
                        "height": iH + "px",
                        "line-height": iH + "px",
                        "color": opts.pColor,
                        "z-index": opts.zIndex,
                        "cursor": "text"
                    }
                    }).insertBefore($this);
                //鍒濆鐘舵�灏辨湁鍐呭
                var value = $this.val();
                if (value.length > 0) {
                  oInput.css("color", opts.pActive).hide();
                };
                $this.on("focus", function () {
                    var value = $(this).val();
                    if (value.length > 0) {
                   	    oInput.css("color", opts.pActive).hide();
                    }
    				else{
    				  oInput.css("color", opts.pColor).show();
    				};
      
    				//鍒ゆ柇鏄惁涓篒E娴忚鍣�
                    $(this).on('input propertychange', function () {
                        var value = $(this).val();
                        if (value.length == 0) {
                            oInput.css("color", opts.pColor).show();
                        } else {
                            oInput.css("color", opts.pActive).hide();
                        }
                    });
      
                }).on("blur", function () {
                    var value = $(this).val();
                    if (value.length == 0) {
                        oInput.css("color", opts.pColor).show();
                    }
                });
                //
                oInput.on("click", function () {
                    $this.trigger("focus");
                    $(this).css("color", opts.pActive)
                });
                //
                $this.filter(":focus").trigger("focus");
            });
        }
    });
		  
})(jQuery);
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

function getQueryString(name) {    
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");    
	var r = window.location.search.substr(1).match(reg);    
	if (r != null) return unescape(r[2]); 
	return null;    
}


/*
 * cfang : used in themes/default/index_v1.htm
 * 似乎是滚动图
 * @deprecated
 * 
 */

// JavaScript Document
var Speed_1 = 10; //速度(毫秒)
var Space_1 = 20; //每次移动(px)
var PageWidth_1 = 1180 * 1; //翻页宽度
var interval_1 = 5000; //翻页间隔时间
var fill_1 = 0; //整体移位
var MoveLock_1 = false;
var MoveTimeObj_1;
var MoveWay_1 = "right";
var Comp_1 = 0;
var AutoPlayObj_1 = null;
function GetObj(objName) {
    if (document.getElementById) {
        return eval('document.getElementById("' + objName + '")')
    } else {
        return eval('document.all.' + objName)
    }
}
function AutoPlay_1() {
    clearInterval(AutoPlayObj_1);
    AutoPlayObj_1 = setInterval('ISL_GoDown_1();ISL_StopDown_1();', interval_1)
}
function ISL_GoUp_1() {
    if (MoveLock_1) return;
    clearInterval(AutoPlayObj_1);
    MoveLock_1 = true;
    MoveWay_1 = "left";
    MoveTimeObj_1 = setInterval('ISL_ScrUp_1();', Speed_1);
}
function ISL_StopUp_1() {
    if (MoveWay_1 == "right") {
        return
    };
    clearInterval(MoveTimeObj_1);
    if ((GetObj('ISL_Cont_1').scrollLeft - fill_1) % PageWidth_1 != 0) {
        Comp_1 = fill_1 - (GetObj('ISL_Cont_1').scrollLeft % PageWidth_1);
        CompScr_1()
    } else {
        MoveLock_1 = false
    }
    AutoPlay_1()
}
function ISL_ScrUp_1() {
    if (GetObj('ISL_Cont_1').scrollLeft <= 0) {
        GetObj('ISL_Cont_1').scrollLeft = GetObj('ISL_Cont_1').scrollLeft + GetObj('List1_1').offsetWidth
    }
    GetObj('ISL_Cont_1').scrollLeft -= Space_1
}
function ISL_GoDown_1() {
    clearInterval(MoveTimeObj_1);
    if (MoveLock_1) return;
    clearInterval(AutoPlayObj_1);
    MoveLock_1 = true;
    MoveWay_1 = "right";
    ISL_ScrDown_1();
    MoveTimeObj_1 = setInterval('ISL_ScrDown_1()', Speed_1)
}
function ISL_StopDown_1() {
    if (MoveWay_1 == "left") {
        return
    };
    clearInterval(MoveTimeObj_1);
    if (GetObj('ISL_Cont_1').scrollLeft % PageWidth_1 - (fill_1 >= 0 ? fill_1: fill_1 + 1) != 0) {
        Comp_1 = PageWidth_1 - GetObj('ISL_Cont_1').scrollLeft % PageWidth_1 + fill_1;
        CompScr_1()
    } else {
        MoveLock_1 = false
    }
    AutoPlay_1()
}
function ISL_ScrDown_1() {
    if (GetObj('ISL_Cont_1').scrollLeft >= GetObj('List1_1').scrollWidth) {
        GetObj('ISL_Cont_1').scrollLeft = GetObj('ISL_Cont_1').scrollLeft - GetObj('List1_1').scrollWidth
    }
    GetObj('ISL_Cont_1').scrollLeft += Space_1
}
function CompScr_1() {
    if (Comp_1 == 0) {
        MoveLock_1 = false;
        return
    }
    var num, TempSpeed = Speed_1,
    TempSpace = Space_1;
    if (Math.abs(Comp_1) < PageWidth_1 / 2) {
        TempSpace = Math.round(Math.abs(Comp_1 / Space_1));
        if (TempSpace < 1) {
            TempSpace = 1
        }
    }
    if (Comp_1 < 0) {
        if (Comp_1 < -TempSpace) {
            Comp_1 += TempSpace;
            num = TempSpace
        } else {
            num = -Comp_1;
            Comp_1 = 0
        }
        GetObj('ISL_Cont_1').scrollLeft -= num;
        setTimeout('CompScr_1()', TempSpeed)
    } else {
        if (Comp_1 > TempSpace) {
            Comp_1 -= TempSpace;
            num = TempSpace
        } else {
            num = Comp_1;
            Comp_1 = 0
        }
        GetObj('ISL_Cont_1').scrollLeft += num;
        setTimeout('CompScr_1()', TempSpeed)
    }
}
function picrun_ini() {
    GetObj("List2_1").innerHTML = GetObj("List1_1").innerHTML;
    GetObj('ISL_Cont_1').scrollLeft = fill_1 >= 0 ? fill_1: GetObj('List1_1').scrollWidth - Math.abs(fill_1);
    GetObj("ISL_Cont_1").onmouseover = function() {
        clearInterval(AutoPlayObj_1)
    }
    GetObj("ISL_Cont_1").onmouseout = function() {
        AutoPlay_1()
    }
    AutoPlay_1();
}


function SlideShow(c) {
    var a = document.getElementById("slideContainer"), f = document.getElementById("slidesImgs").getElementsByTagName("li"), h = document.getElementById("slideBar"), n = h.getElementsByTagName("li"), d = f.length, c = c || 3000, e = lastI = 0, j, m;
    function b() {
        m = setInterval(function () {
            e = e + 1 >= d ? e + 1 - d : e + 1;
            g()
        }, c)
    }
    function k() {
        clearInterval(m)
    }
    function g() {
        f[lastI].style.display = "none";
        n[lastI].className = "";
        f[e].style.display = "block";
        n[e].className = "on";
        lastI = e
    }
    f[e].style.display = "block";
    a.onmouseover = k;
    a.onmouseout = b;
    h.onmouseover = function (i) {
        j = i ? i.target : window.event.srcElement;
        if (j.nodeName === "LI") {
            e = parseInt(j.innerHTML, 10) - 1;
            g()
        }
    };
    b()
};

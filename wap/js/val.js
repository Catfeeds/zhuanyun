$(function() {
	// 生成验证码
	yzm();
	initPCA();
});

function initPCA() {
	var citySelector = function() {
		var province = $("#province");
		var city = $("#city");
		var district = $("#area");
		var preProvince = $("#pre_province");
		var preCity = $("#pre_city");
		var preDistrict = $("#pre_district");
		var jsonProvince = "./content/json-array-of-province.js";
		var jsonCity = "./content/json-array-of-city.js";
		var jsonDistrict = "./content/json-array-of-district.js";
		var hasDistrict = true;
		var initProvince = "<option value='0'>请选择省份</option>";
		var initCity = "<option value='0'>请选择城市</option>";
		var initDistrict = "<option value='0'>请选择区县</option>";
		return {
			Init : function() {
				var that = this;
				that._LoadOptions(jsonProvince, preProvince, province, null, 0,
						initProvince);
				province.change(function() {
					that._LoadOptions(jsonCity, preCity, city, province, 2,
							initCity);
				});
				if (hasDistrict) {
					city.change(function() {
						that._LoadOptions(jsonDistrict, preDistrict, district,
								city, 4, initDistrict);
					});
					province.change(function() {
						city.change();
					});
				}
				province.change();
			},
			_LoadOptions : function(datapath, preobj, targetobj, parentobj,
					comparelen, initoption) {
				$.get(datapath, function(r) {
					var t = ''; // t: html容器
					var s; // s: 选中标识
					var pre; // pre: 初始值
					if (preobj === undefined) {
						pre = 0;
					} else {
						pre = preobj.val();
					}
					for ( var i = 0; i < r.length; i++) {
						s = '';
						if (comparelen === 0) {
							if (pre !== "" && pre !== 0 && r[i].code === pre) {
								s = ' selected=\"selected\" ';
								pre = '';
							}
							t += '<option value=' + r[i].code + s + '>'
									+ r[i].name + '</option>';
						} else {
							var p = parentobj.val();
							if (p.substring(0, comparelen) === r[i].code
									.substring(0, comparelen)) {
								if (pre !== "" && pre !== 0
										&& r[i].code === pre) {
									s = ' selected=\"selected\" ';
									pre = '';
								}
								t += '<option value=' + r[i].code + s + '>'
										+ r[i].name + '</option>';
							}
						}

					}
					if (initoption !== '') {
						targetobj.html(initoption + t);
					} else {
						targetobj.html(t);
					}
				}, "json");
			}
		};
	}();
	citySelector.Init();
}
function yzm() {
	var num1 = Math.round(Math.random() * 10000000);
	var code = num1.toString().substr(0, 4);
	$("#yzm").after("<img id='imgyzm' src='yzm.php?code=" + code + "' width='30' height='40' style='width:90px; height:40px;padding-top:20px;'/>");
	$("#yzm1").val(code);
}
function changeyzm() {
	var num1 = Math.round(Math.random() * 10000000);
	var code = num1.toString().substr(0, 4);
	$("#imgyzm").attr('src', 'yzm.php?code=' + code);
	$("#yzm1").val(code);
}
function valdata() {

	// 获取验证码
	var yzm = $("#yzm").val();
	var yzm1 = $("#yzm1").val();
	if ($.trim(yzm).length < 1) {
		alert("验证码不能为空");
		return false;
	}
	if ($.trim(yzm) != $.trim(yzm1)) {
		alert("验证码输入错误");
		return false;
	}

	var reg = /^[\u4e00-\u9fa5]+$/i;
	// 姓名
	var acc_name = $("input[name='acc_name']").val();
	if ($.trim(acc_name).length < 1) {
		alert("姓名不能为空");
		return false;
	}
	if (!reg.test(acc_name)) {
		alert("姓名必须为汉字");
		return false;
	}
	// 地址
	var acc_addr = $("input[name='acc_addr']").val();
	if ($.trim(acc_addr).length < 1) {
		alert("地址不能为空");
		return false;
	}
	
	// 手机
	var acc_phone = $("input[name='acc_phone']").val();
	if ($.trim(acc_phone).length < 1) {
		alert("手机号码不能为空");
		return false;
	}
	if ($.trim(acc_phone).length != 11) {
		alert("手机号码必须为11位");
		return false;
	}

	// 设置省份城市的返回值
	var sel_prov = $("#province");
	$("#s_prov").val(sel_prov.find("option:selected").text());
	var sel_city = $("#city");
	$("#s_city").val(sel_city.find("option:selected").text());
	var sel_area = $("#area");
	$("#s_area").val(sel_area.find("option:selected").text());

	return true;

}
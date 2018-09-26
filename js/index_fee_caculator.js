(function(){
var  rate = parseFloat(17.96);
var  shipPrice = {"AIR":[{"id":"93","stype":"AIR","Area":null,"weight":"500","charge":"1700","memo":""},{"id":"94","stype":"AIR","Area":null,"weight":"1000","charge":"2050","memo":""},{"id":"95","stype":"AIR","Area":null,"weight":"1500","charge":"2400","memo":""},{"id":"96","stype":"AIR","Area":null,"weight":"2000","charge":"2750","memo":""},{"id":"97","stype":"AIR","Area":null,"weight":"2500","charge":"3100","memo":""},{"id":"98","stype":"AIR","Area":null,"weight":"3000","charge":"3450","memo":""},{"id":"99","stype":"AIR","Area":null,"weight":"3500","charge":"3800","memo":""},{"id":"100","stype":"AIR","Area":null,"weight":"4000","charge":"4150","memo":""},{"id":"101","stype":"AIR","Area":null,"weight":"4500","charge":"4500","memo":""},{"id":"102","stype":"AIR","Area":null,"weight":"5000","charge":"4850","memo":""},{"id":"103","stype":"AIR","Area":null,"weight":"5500","charge":"5150","memo":""},{"id":"104","stype":"AIR","Area":null,"weight":"6000","charge":"5450","memo":""},{"id":"105","stype":"AIR","Area":null,"weight":"6500","charge":"5750","memo":""},{"id":"106","stype":"AIR","Area":null,"weight":"7000","charge":"6050","memo":""},{"id":"107","stype":"AIR","Area":null,"weight":"7500","charge":"6350","memo":""},{"id":"108","stype":"AIR","Area":null,"weight":"8000","charge":"6650","memo":""},{"id":"109","stype":"AIR","Area":null,"weight":"8500","charge":"6950","memo":""},{"id":"110","stype":"AIR","Area":null,"weight":"9000","charge":"7250","memo":""},{"id":"111","stype":"AIR","Area":null,"weight":"9500","charge":"7550","memo":""},{"id":"112","stype":"AIR","Area":null,"weight":"10000","charge":"7850","memo":""},{"id":"113","stype":"AIR","Area":null,"weight":"11000","charge":"8250","memo":""},{"id":"114","stype":"AIR","Area":null,"weight":"12000","charge":"8650","memo":""},{"id":"115","stype":"AIR","Area":null,"weight":"13000","charge":"9050","memo":""},{"id":"116","stype":"AIR","Area":null,"weight":"14000","charge":"9450","memo":""},{"id":"117","stype":"AIR","Area":null,"weight":"15000","charge":"9850","memo":""},{"id":"118","stype":"AIR","Area":null,"weight":"16000","charge":"10250","memo":""},{"id":"119","stype":"AIR","Area":null,"weight":"17000","charge":"10650","memo":""},{"id":"120","stype":"AIR","Area":null,"weight":"18000","charge":"11050","memo":""},{"id":"121","stype":"AIR","Area":null,"weight":"19000","charge":"11450","memo":""},{"id":"122","stype":"AIR","Area":null,"weight":"20000","charge":"11850","memo":null},{"id":"123","stype":"AIR","Area":null,"weight":"21000","charge":"12250","memo":null},{"id":"124","stype":"AIR","Area":null,"weight":"22000","charge":"12650","memo":null},{"id":"125","stype":"AIR","Area":null,"weight":"23000","charge":"13050","memo":""},{"id":"126","stype":"AIR","Area":null,"weight":"24000","charge":"13450","memo":""},{"id":"127","stype":"AIR","Area":null,"weight":"25000","charge":"13850","memo":""},{"id":"128","stype":"AIR","Area":null,"weight":"26000","charge":"14250","memo":""},{"id":"129","stype":"AIR","Area":null,"weight":"27000","charge":"14650","memo":""},{"id":"130","stype":"AIR","Area":null,"weight":"28000","charge":"15050","memo":""},{"id":"131","stype":"AIR","Area":null,"weight":"29000","charge":"15450","memo":""},{"id":"132","stype":"AIR","Area":null,"weight":"30000","charge":"15850","memo":""}],"ems":[{"id":"7","stype":"ems","Area":null,"weight":"300","charge":"900","memo":""},{"id":"8","stype":"ems","Area":null,"weight":"500","charge":"1100","memo":""},{"id":"9","stype":"ems","Area":null,"weight":"600","charge":"1240","memo":""},{"id":"10","stype":"ems","Area":null,"weight":"700","charge":"1380","memo":""},{"id":"11","stype":"ems","Area":null,"weight":"800","charge":"1520","memo":""},{"id":"12","stype":"ems","Area":null,"weight":"900","charge":"1660","memo":""},{"id":"13","stype":"ems","Area":null,"weight":"1000","charge":"1800","memo":""},{"id":"14","stype":"ems","Area":null,"weight":"1250","charge":"2100","memo":""},{"id":"15","stype":"ems","Area":null,"weight":"1500","charge":"2400","memo":""},{"id":"16","stype":"ems","Area":null,"weight":"1750","charge":"2700","memo":""},{"id":"17","stype":"ems","Area":null,"weight":"2000","charge":"3000","memo":""},{"id":"18","stype":"ems","Area":null,"weight":"2500","charge":"3500","memo":""},{"id":"19","stype":"ems","Area":null,"weight":"3000","charge":"4000","memo":""},{"id":"20","stype":"ems","Area":null,"weight":"3500","charge":"4500","memo":""},{"id":"21","stype":"ems","Area":null,"weight":"4000","charge":"5000","memo":""},{"id":"22","stype":"ems","Area":null,"weight":"4500","charge":"5500","memo":""},{"id":"23","stype":"ems","Area":null,"weight":"5000","charge":"6000","memo":""},{"id":"24","stype":"ems","Area":null,"weight":"5500","charge":"6500","memo":""},{"id":"25","stype":"ems","Area":null,"weight":"6000","charge":"7000","memo":""},{"id":"26","stype":"ems","Area":null,"weight":"7000","charge":"7800","memo":""},{"id":"27","stype":"ems","Area":null,"weight":"8000","charge":"8600","memo":""},{"id":"28","stype":"ems","Area":null,"weight":"9000","charge":"9400","memo":""},{"id":"29","stype":"ems","Area":null,"weight":"10000","charge":"10200","memo":""},{"id":"30","stype":"ems","Area":null,"weight":"11000","charge":"11000","memo":""},{"id":"31","stype":"ems","Area":null,"weight":"12000","charge":"11800","memo":""},{"id":"32","stype":"ems","Area":null,"weight":"13000","charge":"12600","memo":""},{"id":"33","stype":"ems","Area":null,"weight":"14000","charge":"13400","memo":""},{"id":"34","stype":"ems","Area":null,"weight":"15000","charge":"14200","memo":""},{"id":"35","stype":"ems","Area":null,"weight":"16000","charge":"15000","memo":""},{"id":"36","stype":"ems","Area":null,"weight":"17000","charge":"15800","memo":""},{"id":"37","stype":"ems","Area":null,"weight":"18000","charge":"16600","memo":""},{"id":"38","stype":"ems","Area":null,"weight":"19000","charge":"17400","memo":""},{"id":"39","stype":"ems","Area":null,"weight":"20000","charge":"18200","memo":""},{"id":"40","stype":"ems","Area":null,"weight":"21000","charge":"19000","memo":""},{"id":"41","stype":"ems","Area":null,"weight":"22000","charge":"19800","memo":""},{"id":"42","stype":"ems","Area":null,"weight":"23000","charge":"20600","memo":""},{"id":"43","stype":"ems","Area":null,"weight":"24000","charge":"21400","memo":""},{"id":"44","stype":"ems","Area":null,"weight":"25000","charge":"22200","memo":""},{"id":"45","stype":"ems","Area":null,"weight":"26000","charge":"23000","memo":""},{"id":"46","stype":"ems","Area":null,"weight":"27000","charge":"23800","memo":""},{"id":"47","stype":"ems","Area":null,"weight":"28000","charge":"24600","memo":""},{"id":"48","stype":"ems","Area":null,"weight":"29000","charge":"25400","memo":""},{"id":"49","stype":"ems","Area":null,"weight":"30000","charge":"26200","memo":""}],"Ship":[{"id":"51","stype":"Ship","Area":null,"weight":"500","charge":"1500","memo":null},{"id":"52","stype":"Ship","Area":null,"weight":"1000","charge":"1500","memo":null},{"id":"53","stype":"Ship","Area":null,"weight":"1500","charge":"1750","memo":null},{"id":"54","stype":"Ship","Area":null,"weight":"2000","charge":"1750","memo":null},{"id":"55","stype":"Ship","Area":null,"weight":"2500","charge":"2000","memo":null},{"id":"56","stype":"Ship","Area":null,"weight":"3000","charge":"2000","memo":null},{"id":"57","stype":"Ship","Area":null,"weight":"3500","charge":"2250","memo":null},{"id":"58","stype":"Ship","Area":null,"weight":"4000","charge":"2250","memo":null},{"id":"59","stype":"Ship","Area":null,"weight":"4500","charge":"2500","memo":null},{"id":"60","stype":"Ship","Area":null,"weight":"5000","charge":"2500","memo":null},{"id":"61","stype":"Ship","Area":null,"weight":"5500","charge":"2750","memo":null},{"id":"62","stype":"Ship","Area":null,"weight":"6000","charge":"2750","memo":null},{"id":"63","stype":"Ship","Area":null,"weight":"6500","charge":"3000","memo":null},{"id":"64","stype":"Ship","Area":null,"weight":"7000","charge":"3000","memo":null},{"id":"65","stype":"Ship","Area":null,"weight":"7500","charge":"3250","memo":null},{"id":"66","stype":"Ship","Area":null,"weight":"8000","charge":"3250","memo":null},{"id":"67","stype":"Ship","Area":null,"weight":"8500","charge":"3500","memo":null},{"id":"68","stype":"Ship","Area":null,"weight":"9000","charge":"3500","memo":null},{"id":"69","stype":"Ship","Area":null,"weight":"9500","charge":"3750","memo":null},{"id":"70","stype":"Ship","Area":null,"weight":"10000","charge":"3750","memo":null},{"id":"71","stype":"Ship","Area":null,"weight":"11000","charge":"3950","memo":null},{"id":"72","stype":"Ship","Area":null,"weight":"12000","charge":"4150","memo":null},{"id":"73","stype":"Ship","Area":null,"weight":"13000","charge":"4350","memo":null},{"id":"74","stype":"Ship","Area":null,"weight":"14000","charge":"4550","memo":null},{"id":"75","stype":"Ship","Area":null,"weight":"15000","charge":"4750","memo":null},{"id":"76","stype":"Ship","Area":null,"weight":"16000","charge":"4950","memo":null},{"id":"77","stype":"Ship","Area":null,"weight":"17000","charge":"5150","memo":null},{"id":"78","stype":"Ship","Area":null,"weight":"18000","charge":"5350","memo":null},{"id":"79","stype":"Ship","Area":null,"weight":"19000","charge":"5550","memo":null},{"id":"80","stype":"Ship","Area":null,"weight":"20000","charge":"5750","memo":null},{"id":"81","stype":"Ship","Area":null,"weight":"21000","charge":"5950","memo":null},{"id":"82","stype":"Ship","Area":null,"weight":"22000","charge":"6150","memo":null},{"id":"83","stype":"Ship","Area":null,"weight":"23000","charge":"6350","memo":null},{"id":"84","stype":"Ship","Area":null,"weight":"24000","charge":"6550","memo":null},{"id":"85","stype":"Ship","Area":null,"weight":"25000","charge":"6750","memo":null},{"id":"86","stype":"Ship","Area":null,"weight":"26000","charge":"6950","memo":null},{"id":"87","stype":"Ship","Area":null,"weight":"27000","charge":"7150","memo":null},{"id":"88","stype":"Ship","Area":null,"weight":"28000","charge":"7350","memo":null},{"id":"89","stype":"Ship","Area":null,"weight":"29000","charge":"7550","memo":null},{"id":"90","stype":"Ship","Area":null,"weight":"30000","charge":"7750","memo":null}],"SAL":[{"id":"197","stype":"SAL","Area":null,"weight":"1000","charge":"1800","memo":""},{"id":"198","stype":"SAL","Area":null,"weight":"2000","charge":"2400","memo":""},{"id":"199","stype":"SAL","Area":null,"weight":"3000","charge":"3000","memo":""},{"id":"201","stype":"SAL","Area":null,"weight":"4000","charge":"3600","memo":""},{"id":"202","stype":"SAL","Area":null,"weight":"5000","charge":"4200","memo":""},{"id":"203","stype":"SAL","Area":null,"weight":"6000","charge":"4700","memo":""},{"id":"204","stype":"SAL","Area":null,"weight":"7000","charge":"5200","memo":""},{"id":"205","stype":"SAL","Area":null,"weight":"8000","charge":"5700","memo":""},{"id":"206","stype":"SAL","Area":null,"weight":"9000","charge":"6200","memo":""},{"id":"207","stype":"SAL","Area":null,"weight":"10000","charge":"6700","memo":""},{"id":"208","stype":"SAL","Area":null,"weight":"11000","charge":"7000","memo":""},{"id":"209","stype":"SAL","Area":null,"weight":"12000","charge":"7300","memo":""},{"id":"210","stype":"SAL","Area":null,"weight":"13000","charge":"7600","memo":""},{"id":"211","stype":"SAL","Area":null,"weight":"14000","charge":"7900","memo":""},{"id":"212","stype":"SAL","Area":null,"weight":"15000","charge":"8200","memo":""},{"id":"213","stype":"SAL","Area":null,"weight":"16000","charge":"8500","memo":""},{"id":"214","stype":"SAL","Area":null,"weight":"17000","charge":"8800","memo":""},{"id":"215","stype":"SAL","Area":null,"weight":"18000","charge":"9100","memo":""},{"id":"216","stype":"SAL","Area":null,"weight":"19000","charge":"9400","memo":""},{"id":"217","stype":"SAL","Area":null,"weight":"20000","charge":"9700","memo":""},{"id":"220","stype":"SAL","Area":null,"weight":"21000","charge":"10000","memo":null},{"id":"221","stype":"SAL","Area":null,"weight":"22000","charge":"10300","memo":null},{"id":"222","stype":"SAL","Area":null,"weight":"23000","charge":"10600","memo":null},{"id":"223","stype":"SAL","Area":null,"weight":"24000","charge":"10900","memo":null},{"id":"224","stype":"SAL","Area":null,"weight":"25000","charge":"11200","memo":null},{"id":"225","stype":"SAL","Area":null,"weight":"26000","charge":"11500","memo":null},{"id":"226","stype":"SAL","Area":null,"weight":"27000","charge":"11800","memo":null},{"id":"227","stype":"SAL","Area":null,"weight":"28000","charge":"12100","memo":null},{"id":"228","stype":"SAL","Area":null,"weight":"29000","charge":"12400","memo":null},{"id":"229","stype":"SAL","Area":null,"weight":"30000","charge":"12700","memo":null}]};
var  weight = $('#weight').get(0);
var  packnums = $('#packnums').get(0);
var  ems = $('#ems').get(0);
var  sal = $('#sal').get(0);
var  ship = $('#ship').get(0);
var  art = $('#art').get(0);
var  jzx = $('#jzx').get(0);
var  emsp = $('#emsp').get(0);
var  salp = $('#salp').get(0);
var  shipp = $('#shipp').get(0);
var  artp = $('#artp').get(0);
var  ems_total = $('#ems_total').get(0);
var  jzxx = $('#jzxx').get(0);
var sal_total = $('#sal_total').get(0);
var ship_total = $('#ship_total').get(0);
var art_total = $('#art_total').get(0);
var jzx_total = $('#jzx_total').get(0);
var pattern = /^[0-9]{1,5}$/;
	$('#compute').onclick  = function() {
		if(!pattern.test(weight.value)) {
			weight.style.cssText='border-color:red;';
			return false;
		}
		weight.style.cssText='border-color:#ccc;';
		var serviceFee = 0;
		if(pattern.test(packnums.value)){
			serviceFee = parseInt(packnums.value)*5;
		}
		var ep = getPrice('ems');
		var ap = getPrice('AIR');
		var sp = getPrice('Ship');
		var sap = getPrice('SAL');
		ems.innerHTML = ep;
		sal.innerHTML = sap;
		ship.innerHTML = sp;
		art.innerHTML = ap;
		jzx.innerHTML = (259/rate*Math.ceil(weight.value/1000)).toFixed(2);
		emsp.innerHTML = salp.innerHTML =  shipp.innerHTML = artp.innerHTML = serviceFee;
		jzxx.innerHTML = serviceFee;
		ems_total.innerHTML = ep+serviceFee;
		sal_total.innerHTML = sap+serviceFee;
		ship_total.innerHTML = sp+serviceFee;
		art_total.innerHTML = ap+serviceFee;
		jzx_total.innerHTML = parseInt(jzx.innerHTML)+parseInt(jzxx.innerHTML);
	}
	function getPrice(s){
		var obj = null;
		switch(s){
			case 'ems':obj=shipPrice.ems;break;
			case 'AIR':obj=shipPrice.AIR;break;
			case 'Ship':obj=shipPrice.Ship;break;
			case 'SAL':obj=shipPrice.SAL;break;
		}
		return compute(obj);
	}
	function compute(obj){
		var  w = parseInt(weight.value);

		var  charge = 0;
		for(var i=0;i<=obj.length-1;i++){
			if(i>0 && i<=obj.length-1){
				if(parseInt(obj[i-1].weight)<w && parseInt(obj[i].weight)>=w) {
					charge = parseInt(obj[i].charge);
					break;
				}
			} else if(w>parseInt(obj[obj.length-1].weight)) {
				charge = parseInt(obj[obj.length-1].charge);
				break;
			} else if(i==0 && w<=parseInt(obj[i].weight)){
				charge = parseInt(obj[i].charge);
				break;
			}
		}
		 
		return Math.ceil(charge/rate);
	}
	var  fudong = $('#fudong').get(0);
	window.onscroll=function(){
		var  fudong = $('#fudong').get(0);
		var  t = document.documentElement.scrollTop || document.body.scrollTop;
		if(t>300){
			fudong.style.display='';
		}else{
			fudong.style.display='none';
		}
	}
	// var  fudongImg = $('#fudongImg').get(0);
	// var  small = fudongImg.getAttribute('smallPic');
	// var  src = fudongImg.src;
	run();
	window.onresize = function(){
		run();
	}
	function run(){
		return false;
		if(document.body.offsetWidth<=1366){
			fudongImg.src = small;
			fudong.style.cssText = 'position:fixed;right:0%;bottom:10%;';
		}else{
			fudongImg.src = src;
			fudong.style.cssText = 'position:fixed;right:5%;bottom:10%;';
		}
	}
})();
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="UTSOFT v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_var['gallery']['goods_name']; ?> - <?php echo $this->_var['shop_name']; ?></title>
<style>
html{overflow-y:scroll; overflow-x:auto}
body{margin:15px 5px;}
a,img{border:none; text-decoration:none;}
.b a{width:95px; height:29px;  display:block;}
.l{float:left}
.r{float:right;}
.b .p{background:url(themes/meilele/images/gallery_bg.png?1) 0px 0px no-repeat; margin-right:10px;width:95px; height:29px; margin-bottom:10px;}
.b .n{background:url(themes/meilele/images/gallery_bg.png?1) 0px -29px no-repeat;width:95px; height:29px; margin-bottom:10px;}
.b .c{background:url(themes/meilele/images/gallery_bg.png?1) 0px -58px no-repeat;width:95px; height:29px; margin-bottom:10px;}
#i{text-align:center;}
#l{margin:200px auto 1500px auto;}
</style>
<script src="themes/meilele/js/common.min.js?0905"></script>
<script src="themes/meilele/js/jq.js?1119"></script>
</head>
<body>
<div class="b">
  <div class="l p"><a href="javascript:void(0);" onclick="v(-1);return false;">&nbsp;</a></div>
  <div class="l n"><a href="javascript:void(0)" onclick="v(1);return false;">&nbsp;</a></div>
  <div class="r c"><a href="javascript:void(0);" onclick="window.close();return false;">&nbsp;</a></div>
  <br clear="all" />
</div>
<div id="i"> <img id="l" src="themes/meilele/images/ajax-loader.gif" /></div>
<script language="javascript">
window.onload=function(){
	if(!m)m=0; //初始图片
	<?php $_from = $this->_var['gallery']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'photo');$this->_foreach['gallery_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gallery_list']['total'] > 0):
    foreach ($_from AS $this->_var['photo']):
        $this->_foreach['gallery_list']['iteration']++;
?>
		i[<?php echo ($this->_foreach['gallery_list']['iteration'] - 1); ?>]=new Gallery('<?php echo $this->_var['photo']['gallery']; ?>');
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		
		i[0].show();
	}

var Gallery = function(a) {
		this.srcs = a.split("|");
		for(var k = 0 ; k < this.srcs.length ; k++){
			this.srcs[k] = this.srcs[k].replace(/\<.*?\>/g,'');
		}
		this.ALLloaded = 0;
		this.loaded = [];
		this.imgs = [];
		this.html = ""
	};
Gallery.prototype.show = function() {
	var c = document.getElementById("i");
	c.innerHTML='<img id="l" src="themes/meilele/images/ajax-loader.gif" />';
	var b = this;
	if (b.ALLloaded == 0) {
		for (var a in b.srcs) {
			if (!b.loaded[a]) {
				b.loaded[a] = 0;
				b.imgs[a] = new Image();
				b.imgs[a].id = a;
				b.imgs[a].onload = function() {
					var e = this.id;
					b.loaded[e] = 1;
					if ( b.loaded.join('').indexOf('0') < 0 ) {
						b.ALLloaded = 1;
						b.html = "";
						for (var d in b.srcs) {
							b.html += '<img src="' + b.srcs[d] + '" />'
						}
						b.html = '<a href="javascript:void(0)" title="下一张" onclick="v(1);return false;">' + b.html + "</a>";
						b.fadeOut()
					}
				}; 
				b.imgs[a].src = b.srcs[a]
			}
		}
	} else {
		b.fadeOut()
	}
};
Gallery.prototype.fadeOut = function() {
	var a = this;
	var b = document.getElementById("i");
	b.innerHTML=a.html	
};

function v(b) {
	var a = i.length;
	m = m + b;
	if (m >= a) {
		m = 0
	}
	if (m < 0) {
		m = a - 1
	}
	i[m].show()
};
var i = [];
var m;
if (location.hash) {
	m = location.hash.split("#");
	m = parseInt(m[1]);
};

document.onkeydown=change_key;
function change_key(e){
	e=e || window.event;
	var keycode=e.which || e.keyCode;
	if(keycode==37){//左面方向键
		v(-1);return false;
	}
	else if(keycode==39){//右面方向键
		v(-2);return false;
	}
	}

</script>
</body>
</html>
<!--
LDZ:2013-09-21 15:45:14
-->

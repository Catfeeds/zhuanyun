
KindEditor.ready(function(K) {
	var editor1 = K.create('textarea[id="AdminRemark"]', {
		cssPath : '../plugins/code/prettify.css',
		allowFileManager : true,
		afterCreate : function() {
	        this.sync('#AdminRemark');
	       },
       	afterBlur:function(){
           this.sync('#AdminRemark');
        } 
	});
});

   function gObj(obj)
   {
	  var theObj;
	  if (document.getElementById)
	  {
	    if (typeof obj=="string") {
	      return document.getElementById(obj);
	    } else {
	      return obj.style;
	    }
	  }
	  return null;
	}
   function openSpecUser()
   {
   	   //打开模态子窗体
       var modaldialogparam = 'dialogwidth:' + 420 + 'px;dialogheight:' + 500 + 'px;center:yes;help:no;resizable:no;status:no;minimize:no;maximize:no;';
       result = showModalDialog('engrave_package_list.php?act=userlist', '用户列表', modaldialogparam);
	   document.getElementById("UserCode").value = result;
       Ajax.call('engrave_package_list.php?act=getusername',"userId="+result,act_calusername,"POST","TEXT",true,true);
	   Ajax.call('engrave_package_list.php?act=getstoragecode',"userId="+result,act_storagecode,"POST","TEXT",true,true);
   }
   function openUserCode()
   {
   	  var UserId = document.getElementById("UserCode").value;
	  if(UserId != "")
	  {
        Ajax.call('engrave_package_list.php?act=getusername',"userId="+UserId,act_calusername,"POST","TEXT",true,true);
	    Ajax.call('engrave_package_list.php?act=getstoragecode',"userId="+UserId,act_storagecode,"POST","TEXT",true,true);
	  }
   }
   
   var IsExistStorageCode=false;
   function ShowStorageCode()
   {
   	  var storageCode = document.getElementById("StorageNum").value;
   	  if(document.getElementById("StorageNum").value!="")
	  {
   	     Ajax.call('engrave_package_list.php?act=getusernamebycode',"storagecode="+storageCode,act_isstoragecode,"POST","TEXT",false,true);
	  }
   }
   function act_isstoragecode(result)
   {
   	 if(result!="")
	 {
   		IsExistStorageCode=true;
	 	gObj("StorageHave").style.display = "";
		gObj("NotStorageCode").style.display = "none";
		document.getElementById("StorageHaveCode").innerHTML = result;
	 }
	 else
	 {
		 IsExistStorageCode=false;
	 	gObj("NotStorageCode").style.display = "";
		gObj("StorageHave").style.display = "none";
	 }
   }
   function act_calusername(result)
   {
   	 if(result!="")
	 {
   	   document.getElementById("UserName").value=result;
	   document.getElementById("StorageHaveCode").innerHTML = result;
	   gObj("usernametip").style.display = "none";
	 }
	 else
	 {
	 	gObj("usernametip").style.display = "";
		gObj("StorageHave").style.display = "none";
		document.getElementById("UserName").value="";
		document.getElementById("StorageCode").value="";
		document.getElementById("StorageNum").value="";
		document.getElementById("UserCode").value="";
	 }
   }
   function act_storagecode(result)
   {
   	  if(result!="")
	  {
   	    document.getElementById("StorageCode").value=result;
	    document.getElementById("StorageNum").value=result;
		gObj("usernametip").style.display = "none";
	  }
	  else
	  {
	  	gObj("usernametip").style.display = "";
		gObj("StorageHave").style.display = "none";
		document.getElementById("UserName").value="";
		document.getElementById("StorageCode").value="";
		document.getElementById("StorageNum").value="";
		document.getElementById("UserCode").value="";
	  }
   }
   
   function openStorageCode()
   {
   	  var storageCode = document.getElementById("StorageCode").value;
	  document.getElementById("StorageNum").value = storageCode;
	  if(storageCode != "")
	  {
	  	 Ajax.call('engrave_package_list.php?act=getusernamebycode',"storagecode="+storageCode,act_usernamebycode,"POST","TEXT",true,true);
		 Ajax.call('engrave_package_list.php?act=getuseridbycode',"storagecode="+storageCode,act_useridbycode,"POST","TEXT",true,true);
	  }
   }
   function act_usernamebycode(result)
   {
   	  if(result!="")
	  {
   	     document.getElementById("UserName").value=result;
		 document.getElementById("StorageHaveCode").innerHTML = result;
		 gObj("usernametip").style.display = "none";
	  }
	  else
	  {
	  	gObj("usernametip").style.display = "";
		gObj("StorageHave").style.display = "none";
		document.getElementById("UserName").value="";
		document.getElementById("StorageCode").value="";
		document.getElementById("StorageNum").value="";
		document.getElementById("UserCode").value="";
	  }
   }
   function act_useridbycode(result)
   {
   	 if(result!="")
	 {
   	   document.getElementById("UserCode").value=result;
	   gObj("usernametip").style.display = "none";
     }
	 else
	 {
	 	gObj("usernametip").style.display = "";
		gObj("StorageHave").style.display = "none";
		document.getElementById("UserName").value="";
		document.getElementById("StorageCode").value="";
		document.getElementById("StorageNum").value="";
		document.getElementById("UserCode").value="";
	 }
   }
  
   function SelectWareHouse()
   {
   	  var houseId = document.getElementById("WareHouse").value;
	  Ajax.call('engrave_package_list.php?act=getsizeunit',"houseid="+houseId,act_sizeunit,"POST","TEXT",true,true);
	  Ajax.call('engrave_package_list.php?act=getweightunit',"houseid="+houseId,act_weightunit,"POST","TEXT",true,true);
	  Ajax.call('engrave_package_list.php?act=getcurrencycode',"houseid="+houseId,act_currencycode,"POST","TEXT",true,true);
   }
   function act_sizeunit(result)
   {
   	  if(result!="")
	  {
   	       document.getElementById("sizeunit").innerHTML = result;
		   gObj("SizeUnit").style.display = "";
	  }
	  else
	  {
	  	gObj("SizeUnit").style.display = "none";
		gObj("WeightUnit").style.display = "none";
		gObj("CurrencyCode").style.display = "none";
	  }
   }
   function act_weightunit(result)
   {
   	  if(result!="")
	  {
   	       document.getElementById("weightunit").innerHTML = result;
		   gObj("WeightUnit").style.display = "";
	  }
	  else
	  {
	  	gObj("SizeUnit").style.display = "none";
		gObj("WeightUnit").style.display = "none";
		gObj("CurrencyCode").style.display = "none";
	  }
   }
   function act_currencycode(result)
   {
   	  if(result!="")
	  {
   	       document.getElementById("currencycode").innerHTML = result;
		   gObj("CurrencyCode").style.display = "";
	  }
	  else
	  {
	  	gObj("SizeUnit").style.display = "none";
		gObj("WeightUnit").style.display = "none";
		gObj("CurrencyCode").style.display = "none";
	  }
   }
   if(document.all) 
   { 
	  window.attachEvent('onload', load); 
   }
   else 
   { 
	  window.addEventListener('load', load);
   }
   function load()
   {
   	  var userid = document.getElementById("UserName").value;
	  var houseId = document.getElementById("WareHouse").value;
	  if(userid!="")
	  {
	  	 Ajax.call('engrave_package_list.php?act=getusername',"userId="+userid,act_calusername,"POST","TEXT",true,true);
	  } 
	  if(houseId!=0)
	  {
	     Ajax.call('engrave_package_list.php?act=getsizeunit',"houseid="+houseId,act_sizeunit,"POST","TEXT",true,true);
	     Ajax.call('engrave_package_list.php?act=getweightunit',"houseid="+houseId,act_weightunit,"POST","TEXT",true,true);
	     Ajax.call('engrave_package_list.php?act=getcurrencycode',"houseid="+houseId,act_currencycode,"POST","TEXT",true,true);
	  } 
   }
   
   var isExistPackExpressNumber = false;
   /**
    * 验证是否存在运单号
    * @param obj：运单号对象
    */
   function IsExistPackExpressNumber(obj)
   {
	   //获取当前操作类型
	   var form_action = document.getElementById('form_action').value;
	   Ajax.call('engrave_package_list.php?act=IsExistPackExpressNumber',"packExpressNumber="+obj.value+"&form_action="+form_action,
	   PackExpressNumber_CallBack,"POST","TEXT",false,true);
   }
   
   function PackExpressNumber_CallBack(result)
   {
	   var obj=eval('('+result+')');
	   if(obj.error > 0)
	   {
		   document.getElementById('ExpressNumber_des').innerHTML=obj.message;
		   isExistPackExpressNumber = true;
	   }else{
		   isExistPackExpressNumber = false;
	   }
   }

   document.forms['theForm'].elements['StorageCode'].focus();
   /**
    * 表单有效验证
    */
   function validate()
   {
	   validator = new Validator("theForm");
	   validator.required("StorageCode",  StorageCode_notnull);
	   validator.required("UserCode", UserCode_notnull);
	   validator.required("UserName", UserName_notnull);
	   validator.required("StorageNum", StorageNum_notnull);
	   //库位号是否存在;不存在，则提示
	   ShowStorageCode();
	   if(!IsExistStorageCode)
	   {
		   validator.addErrorMsg(notstoragecode);
	   }
	   
	   validator.required("ExpressNumber", expressNumber_notnull);
	   //运单号是否存在
	   IsExistPackExpressNumber(document.getElementById('ExpressNumber'));
	   if(isExistPackExpressNumber)
	   {
		   validator.addErrorMsg(expressNumber_exist);
	   }

	   IsExistPackExpressNumber(document.getElementById('ExpressNumber'));
	   return validator.passed();
   }
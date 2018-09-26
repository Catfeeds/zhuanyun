//获取物品信息名称 物品分类
function ratetax_callback(result)
{
	var testRate = '';
	var rate_name = '';
	var obj = eval('(' + result + ')');
	if(idvalue == 0)
	{
		for(var i = 0;i < tablevalue;i++)
		{
			testRate = 'tab'+''+(i+1)+'_ratename1';
			rate_name = document.getElementById(testRate);
			rate_name.options.add(new Option('请选择',0));
			for(var index = 0;index < obj.length;index++)
			{
				if(index==0)
				{
				rate_name.options.add(new Option(obj[index].rate_name,obj[index].rate_id,true,true));
				}
				else {
			 	rate_name.options.add(new Option(obj[index].rate_name,obj[index].rate_id));
				}
			}
		}
	 }
	 else
	 {
         /**
          * add_tr_tbvalue : 行号
          * idvalue : 产品序号
          */
		testRate = 'tab'+''+add_tr_tbvalue+'_ratename'+idvalue;
		rate_name = document.getElementById(testRate);
		rate_name.options.add(new Option('请选择',0));
		for(var index = 0;index < obj.length;index++)
		{
			if(index==0)
			{
				rate_name.options.add(new Option(obj[index].rate_name,obj[index].rate_id,true,true));
			}
			else {
			 	rate_name.options.add(new Option(obj[index].rate_name,obj[index].rate_id));
			}
		}
	 }
}
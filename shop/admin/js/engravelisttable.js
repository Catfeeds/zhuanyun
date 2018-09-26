/* $Id: listtable.js 14980 2008-10-22 05:01:19Z testyang $ */
if (typeof Ajax != 'object')
{
  alert('Ajax object doesn\'t exists.');
}

if (typeof Utils != 'object')
{
  alert('Utils object doesn\'t exists.');
}

var listTable = new Object;

listTable.query = "query";
listTable.filter = new Object;
listTable.url = location.href.lastIndexOf("?") == -1 ? location.href.substring((location.href.lastIndexOf("/")) + 1) : location.href.substring((location.href.lastIndexOf("/")) + 1, location.href.lastIndexOf("?"));
listTable.url += "?is_ajax=1";


/**
 * 删除列表中的一个记录----修改组名称 添加--2015年1月5日 15:34:44
 */
listTable.removegroup = function(id, cfm, opt)
{
  if (opt == null)
  {
    opt = "removegroup";
  }

  if (confirm(cfm))
  {
    var args = "act=" + opt + "&id=" + id + this.compileFilter();
    
    Ajax.call(this.url, args, this.listCallback, "GET", "JSON");
  }
}
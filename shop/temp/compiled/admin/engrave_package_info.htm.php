<!-- $Id: goods_info.htm 17126 2010-04-23 10:30:26Z liuhui $ -->
if ($this->_foreach['name_packagegoods']['total'] > 0):
    foreach ($_from AS $this->_var['packagegoods']):
        $this->_foreach['name_packagegoods']['iteration']++;
?>
if ($this->_foreach['name_package_service']['total'] > 0):
    foreach ($_from AS $this->_var['package_service']):
        $this->_foreach['name_package_service']['iteration']++;
?>
if ($this->_foreach['name_shoppingvouchers']['total'] > 0):
    foreach ($_from AS $this->_var['shoppingvouchers']):
        $this->_foreach['name_shoppingvouchers']['iteration']++;
?>
if ($this->_foreach['name_package_attachs']['total'] > 0):
    foreach ($_from AS $this->_var['package_attachs']):
        $this->_foreach['name_package_attachs']['iteration']++;
?>
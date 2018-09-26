<?php /* Smarty version 2.6.26, created on 2018-09-16 08:57:06
         compiled from bidu_left_menu.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'bidu_left_menu.htm', 12, false),)), $this); ?>
<ul>
    <li>
        <div id="hbjzdh_cbt">转运教程</div>
    </li>


    <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['article_div'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_div']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['article_div']['iteration']++;
?>
    <li>
        <div class="  <?php if ($this->_tpl_vars['article']['CntId'] == $this->_tpl_vars['articleid']): ?> hbjzdh_curr hbjzdh_flbt <?php else: ?> hbjzdh_xxbt<?php endif; ?> ">
            <a href="article.php?act=article_bidu&amp;articleid=<?php echo $this->_tpl_vars['article']['CntId']; ?>
">
                <?php if ($this->_tpl_vars['article']['CntId'] == $this->_tpl_vars['articleid']): ?><div class="cat_before_img"></div><?php endif; ?>
                <div class="hbjzdh_xxbt_txt hbjzdh_flbt_txt"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']['CntTitle'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 36) : smarty_modifier_truncate($_tmp, 36)); ?>
</div>
                <div class="clear"></div>
            </a>
        </div>
    </li>
    <?php endforeach; endif; unset($_from); ?>
    <?php $_from = $this->_tpl_vars['article_buy_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['article_div'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_div']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['article_div']['iteration']++;
?>
    <li>
        <div class="  <?php if ($this->_tpl_vars['article']['CntId'] == $this->_tpl_vars['articleid']): ?> hbjzdh_curr hbjzdh_flbt <?php else: ?> hbjzdh_xxbt<?php endif; ?> ">
            <a href="article.php?act=article_bidu&amp;articleid=<?php echo $this->_tpl_vars['article']['CntId']; ?>
">
                <?php if ($this->_tpl_vars['article']['CntId'] == $this->_tpl_vars['articleid']): ?><div class="cat_before_img"></div><?php endif; ?>
                <div class="hbjzdh_xxbt_txt hbjzdh_flbt_txt"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']['CntTitle'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 36) : smarty_modifier_truncate($_tmp, 36)); ?>
</div>
                <div class="clear"></div>
            </a>
        </div>
    </li>
    <?php endforeach; endif; unset($_from); ?>
    <li>
        <div id="hbjzdh_kong"></div>
    </li>
</ul>
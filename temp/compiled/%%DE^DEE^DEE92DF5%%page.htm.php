<?php /* Smarty version 2.6.26, created on 2018-07-08 15:24:51
         compiled from page.htm */ ?>
      
      <div id="turn-page">
        <?php echo $this->_tpl_vars['lang']['total_records']; ?>
 <span id="totalRecords"><?php echo $this->_tpl_vars['record_count']; ?>
</span>
        <?php echo $this->_tpl_vars['lang']['total_pages']; ?>
 <span id="totalPages"><?php echo $this->_tpl_vars['page_count']; ?>
</span>
        <?php echo $this->_tpl_vars['lang']['page_current']; ?>
 <span id="pageCurrent"><?php echo $this->_tpl_vars['filter']['page']; ?>
</span>
        <?php echo $this->_tpl_vars['lang']['page_size']; ?>
 <input type='text' style="width:30px;" size='3' id='pageSize' value="<?php echo $this->_tpl_vars['filter']['page_size']; ?>
" onkeypress="return listTable.changePageSize(event)" />
        <span id="page-link">
          <?php echo '<a href="javascript:listTable.gotoPageFirst()">'; ?>
<?php echo $this->_tpl_vars['lang']['page_first']; ?>
</a>
          <?php echo '<a href="javascript:listTable.gotoPagePrev()">'; ?>
<?php echo $this->_tpl_vars['lang']['page_prev']; ?>
</a>
          <?php echo '<a href="javascript:listTable.gotoPageNext()">'; ?>
<?php echo $this->_tpl_vars['lang']['page_next']; ?>
</a>
          <?php echo '<a href="javascript:listTable.gotoPageLast()">'; ?>
<?php echo $this->_tpl_vars['lang']['page_last']; ?>
</a>
        </span>
      </div>
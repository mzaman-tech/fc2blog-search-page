<?php
/* Smarty version 3.1.32-dev-38, created on 2017-11-30 11:15:35
  from 'C:\xampp\htdocs\fc2blog-search-page\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a1fda47c67f00_87006771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e069f9d4f3f2a9b0f4a02bb77fe97659c14eaae0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fc2blog-search-page\\templates\\index.tpl',
      1 => 1512036907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a1fda47c67f00_87006771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Info"), 0, false);
?>

<div class="container">
  <h2 class="text-center">Search Form</h2>
  <form action="index.php" method="POST">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="date" class="col-sm-3 control-label">Date</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="date" id="date" value="<?php if (!empty($_smarty_tpl->tpl_vars['date']->value)) {
echo $_smarty_tpl->tpl_vars['date']->value;
}?>" placeholder="yyyy-mm-dd">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">User Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="user_name" id="user_name" value="<?php if (!empty($_smarty_tpl->tpl_vars['user_name']->value)) {
echo $_smarty_tpl->tpl_vars['user_name']->value;
}?>" placeholder="user name">
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="server_number" class="col-sm-3 control-label">Server Number</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="server_number" id="server_number" value="<?php if (!empty($_smarty_tpl->tpl_vars['server_number']->value)) {
echo $_smarty_tpl->tpl_vars['server_number']->value;
}?>" placeholder="server number">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="entry_number" class="col-sm-3 control-label">Entry Number</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="entry_number" id="entry_number" value="<?php if (!empty($_smarty_tpl->tpl_vars['entry_number']->value)) {
echo $_smarty_tpl->tpl_vars['entry_number']->value;
}?>" placeholder="enrty number">
                </div>
            </div>
        </div>
    </div>
    <br />
    <button type="submit" class="btn btn-primary btn-block">Search</button>
  </form>
</div>


<div class="container">
  <h2 class="text-center">Search Result</h2>          
  <table class="table table-striped table-bordered table-responsive">
    <thead>
      <tr>
        <th>Date</th>
        <th>URL</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    <?php if ($_smarty_tpl->tpl_vars['result']->value->num_rows > 0) {?>
    <?php while ($_prefixVariable1 = $_smarty_tpl->tpl_vars['result']->value->fetch_assoc()) {
$_smarty_tpl->_assignInScope('row', $_prefixVariable1);?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</td>
	</tr>
	<?php }?>
	
	<?php } else { ?>
		<tr>
			<td colspan="4" class="text-center"> No data found! </td>
		</tr>
	<?php }?>
    </tbody>
  </table>

  

</div>
<?php if ($_smarty_tpl->tpl_vars['totalPage']->value > 1) {?>
 <div class="container text-center">
 	<ul class="pagination pagination-md">
	    <li><a href="<?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?>index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;
}?>" class="<?php if ($_smarty_tpl->tpl_vars['page']->value == 1 || $_smarty_tpl->tpl_vars['page']->value > $_smarty_tpl->tpl_vars['totalPage']->value) {?>link-disabled<?php }?>" id="prev">Previous</a></li>
	    <li><a href="<?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['totalPage']->value) {?>index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;
}?>" class="<?php if ($_smarty_tpl->tpl_vars['page']->value >= $_smarty_tpl->tpl_vars['totalPage']->value) {?>link-disabled<?php }?>" id="next">Next</a></li>
	  </ul>
 </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

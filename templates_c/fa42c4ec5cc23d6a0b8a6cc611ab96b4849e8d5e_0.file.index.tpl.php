<?php
/* Smarty version 3.1.32-dev-38, created on 2017-11-28 05:31:39
  from 'C:\xampp\htdocs\smarty-master\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a1ce6abbe9be7_37889044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa42c4ec5cc23d6a0b8a6cc611ab96b4849e8d5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-master\\templates\\index.tpl',
      1 => 1511843494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a1ce6abbe9be7_37889044 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\smarty-master\\libs\\plugins\\modifier.capitalize.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Info"), 0, false);
?>

<h2>User Information:</h2>
<p>Name: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
<br />
Address: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
<br />
<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>
	Id: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</p>
<?php }?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

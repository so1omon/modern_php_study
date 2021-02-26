<?php
/* Smarty version 3.1.39, created on 2021-02-26 16:44:30
  from 'C:\xampp\htdocs\php_libs\smarty\templates\testTemplate2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6039175e084ea3_53947753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd46466cf91a50cb4530794f266372e13e1d5ef2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_libs\\smarty\\templates\\testTemplate2.tpl',
      1 => 1614354269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6039175e084ea3_53947753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Hello, <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
!!</h3>
<?php echo $_smarty_tpl->tpl_vars['FirstName']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['LastName']->value;?>
<br>
주소 : <?php echo $_smarty_tpl->tpl_vars['Address']->value;?>
<br>
나이 : <?php echo $_smarty_tpl->tpl_vars['Age']->value;?>
<br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

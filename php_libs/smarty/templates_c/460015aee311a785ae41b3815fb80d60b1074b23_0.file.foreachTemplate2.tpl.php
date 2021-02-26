<?php
/* Smarty version 3.1.39, created on 2021-02-26 18:01:01
  from 'C:\xampp\htdocs\php_libs\smarty\templates\foreachTemplate2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6039294d5c4ae4_06151287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '460015aee311a785ae41b3815fb80d60b1074b23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_libs\\smarty\\templates\\foreachTemplate2.tpl',
      1 => 1614358860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6039294d5c4ae4_06151287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"smarty foreach Test1"), 0, false);
?>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPerson']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$__foreach_value_0_saved = $_smarty_tpl->tpl_vars['value'];
?>
        <li><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
 : <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

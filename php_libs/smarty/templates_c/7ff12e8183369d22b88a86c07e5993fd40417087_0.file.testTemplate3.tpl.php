<?php
/* Smarty version 3.1.39, created on 2021-02-26 16:53:43
  from 'C:\xampp\htdocs\php_libs\smarty\templates\testTemplate3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6039198746fdb4_82150542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ff12e8183369d22b88a86c07e5993fd40417087' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_libs\\smarty\\templates\\testTemplate3.tpl',
      1 => 1614354822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6039198746fdb4_82150542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"smarty IF/ELSE Test"), 0, false);
if ($_smarty_tpl->tpl_vars['Name']->value == '') {?>
    Hello, 아무개<br>
    <?php } elseif ($_smarty_tpl->tpl_vars['Name']->value == "김말똥") {?>
        Hello, 말똥<br>
    <?php } else { ?>
        Hello, <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
<br>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['FirstName']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['LastName']->value;?>
<br>

주소 : <?php echo $_smarty_tpl->tpl_vars['Address']->value;?>
<br>
나이 : <?php echo $_smarty_tpl->tpl_vars['Age']->value;?>
<br>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

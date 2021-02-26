<?php
/* Smarty version 3.1.39, created on 2021-02-26 17:15:52
  from 'C:\xampp\htdocs\php_libs\smarty\templates\testTemplate4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60391eb8a69899_70666676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37abe520aebb3f4b72d6856076af4f8a8bcc54bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_libs\\smarty\\templates\\testTemplate4.tpl',
      1 => 1614356151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60391eb8a69899_70666676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"smarty section Test"), 0, false);
$__section_person_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['FirstName']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_person_0_total = $__section_person_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_person'] = new Smarty_Variable(array());
if ($__section_person_0_total !== 0) {
for ($__section_person_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] = 0; $__section_person_0_iteration <= $__section_person_0_total; $__section_person_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_person']->value['rownum'] = $__section_person_0_iteration;
echo (isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['rownum'] : null);?>
 <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] : null)];?>
<br>
<?php }} else {
 ?>
    no data
<?php
}
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

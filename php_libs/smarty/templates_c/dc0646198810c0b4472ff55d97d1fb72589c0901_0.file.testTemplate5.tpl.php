<?php
/* Smarty version 3.1.39, created on 2021-02-26 17:31:58
  from 'C:\xampp\htdocs\php_libs\smarty\templates\testTemplate5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6039227e0bd698_63206222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc0646198810c0b4472ff55d97d1fb72589c0901' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_libs\\smarty\\templates\\testTemplate5.tpl',
      1 => 1614357117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6039227e0bd698_63206222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"smarty section Test2"), 0, false);
?>
    <?php
$__section_person_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['personInfo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_person_0_total = $__section_person_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_person'] = new Smarty_Variable(array());
if ($__section_person_0_total !== 0) {
for ($__section_person_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] = 0; $__section_person_0_iteration <= $__section_person_0_total; $__section_person_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']++){
?> 
        <?php echo ((isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] : null))+1;?>
. 
        <?php echo $_smarty_tpl->tpl_vars['personInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] : null)]['FirstName'];?>

        <?php echo $_smarty_tpl->tpl_vars['personInfo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] : null)]['LastName'];?>
<br>
    <?php }} else {
 ?>
        no Data
    <?php
}
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

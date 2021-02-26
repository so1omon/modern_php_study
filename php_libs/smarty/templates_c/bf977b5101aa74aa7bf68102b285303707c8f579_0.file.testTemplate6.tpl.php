<?php
/* Smarty version 3.1.39, created on 2021-02-26 17:51:59
  from 'C:\xampp\htdocs\php_libs\smarty\templates\testTemplate6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6039272fea5019_10873317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf977b5101aa74aa7bf68102b285303707c8f579' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_libs\\smarty\\templates\\testTemplate6.tpl',
      1 => 1614358315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6039272fea5019_10873317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"smarty section test3"), 0, false);
$__section_person_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['FirstName']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_person_0_total = $__section_person_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_person'] = new Smarty_Variable(array());
if ($__section_person_0_total !== 0) {
for ($__section_person_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] = 0; $__section_person_0_iteration <= $__section_person_0_total; $__section_person_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_person']->value['rownum'] = $__section_person_0_iteration;
?>
    <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['rownum'] : null);?>
. <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] : null)];?>
<br>
    <?php
$__section_contacts_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ContactNames']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] : null)]) ? count($_loop) : max(0, (int) $_loop));
$__section_contacts_1_total = $__section_contacts_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_contacts'] = new Smarty_Variable(array());
if ($__section_contacts_1_total !== 0) {
for ($__section_contacts_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_contacts']->value['index'] = 0; $__section_contacts_1_iteration <= $__section_contacts_1_total; $__section_contacts_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_contacts']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_contacts']->value['rownum'] = $__section_contacts_1_iteration;
?>
        <?php if (!(1 & (isset($_smarty_tpl->tpl_vars['__smarty_section_contacts']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_contacts']->value['rownum'] : null))) {?><b><?php }?>
        <?php echo $_smarty_tpl->tpl_vars['ContactNames']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_contacts']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_contacts']->value['index'] : null)];?>
 : <?php echo $_smarty_tpl->tpl_vars['ContactsVals']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_person']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_person']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_contacts']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_contacts']->value['index'] : null)];?>
<br>
        <?php if (!(1 & (isset($_smarty_tpl->tpl_vars['__smarty_section_contacts']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_contacts']->value['rownum'] : null))) {?></b><?php }?>
    <?php
}
}
}} else {
 ?>
    no Data
<?php
}
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

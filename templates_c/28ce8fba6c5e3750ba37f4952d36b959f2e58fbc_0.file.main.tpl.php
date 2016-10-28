<?php
/* Smarty version 3.1.30, created on 2016-10-28 11:33:46
  from "C:\xampp\htdocs\doc_repo\templates\accounts\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58131b7a90ba00_29910222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ce8fba6c5e3750ba37f4952d36b959f2e58fbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\doc_repo\\templates\\accounts\\main.tpl',
      1 => 1476273064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_58131b7a90ba00_29910222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2097258131b7a8feaa0_41874089', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3115758131b7a9088c6_03781845', 'head');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_2097258131b7a8feaa0_41874089 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accounts<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_3115758131b7a9088c6_03781845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
}

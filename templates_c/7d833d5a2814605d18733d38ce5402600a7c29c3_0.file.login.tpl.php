<?php
/* Smarty version 3.1.30, created on 2016-10-28 11:33:46
  from "C:\xampp\htdocs\doc_repo\templates\accounts\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58131b7a89dde1_00315812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d833d5a2814605d18733d38ce5402600a7c29c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\doc_repo\\templates\\accounts\\login.tpl',
      1 => 1477646123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:accounts/main.tpl' => 1,
  ),
),false)) {
function content_58131b7a89dde1_00315812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2297658131b7a886656_60689059', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2636158131b7a890109_67650314', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2617458131b7a89ada8_79422793', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:accounts/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_2297658131b7a886656_60689059 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_2636158131b7a890109_67650314 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_2617458131b7a89ada8_79422793 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Login Page</h1>
<?php
}
}
/* {/block 'body'} */
}

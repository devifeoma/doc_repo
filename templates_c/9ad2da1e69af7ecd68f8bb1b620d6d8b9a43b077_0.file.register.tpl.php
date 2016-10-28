<?php
/* Smarty version 3.1.30, created on 2016-10-28 12:00:57
  from "C:\xampp\htdocs\doc_repo\templates\accounts\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581321d952d1d2_45219470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ad2da1e69af7ecd68f8bb1b620d6d8b9a43b077' => 
    array (
      0 => 'C:\\xampp\\htdocs\\doc_repo\\templates\\accounts\\register.tpl',
      1 => 1477648854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_581321d952d1d2_45219470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_679581321d94e40d5_64733231', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13140581321d94f86c9_87837212', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8957581321d951ba21_21057057', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_679581321d94e40d5_64733231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_13140581321d94f86c9_87837212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_8957581321d951ba21_21057057 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="form-horizontal" action="" method="post">
	<div class="form-group">
		<label for="username" class="col-sm-2 control-label">Username</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="username" name="username" placeholder="Enter your username here">
		</div>
	</div>
	<div class="form-group">
		<label for="email_address" class="col-sm-2 control-label">Email Address</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter your email address here">
		</div>
	</div>
	<div class="form-group">
		<label for="phone_number" class="col-sm-2 control-label">Phone Number</label>
		<div class="col-sm-10">
			<input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number here">
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password here">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Register</button>
		</div>
	</div>
</form>
<?php
}
}
/* {/block 'body'} */
}

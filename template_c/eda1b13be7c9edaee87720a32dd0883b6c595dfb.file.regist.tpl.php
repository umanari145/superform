<?php /* Smarty version Smarty-3.1.18, created on 2014-04-23 04:00:49
         compiled from "C:\xampp\htdocs\superform\template\regist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240045356ba537b12f9-06156993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eda1b13be7c9edaee87720a32dd0883b6c595dfb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\superform\\template\\regist.tpl',
      1 => 1398218447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240045356ba537b12f9-06156993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5356ba537b3326_98456333',
  'variables' => 
  array (
    'key' => 0,
    'arrFrom' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5356ba537b3326_98456333')) {function content_5356ba537b3326_98456333($_smarty_tpl) {?><form name="form1" id="form1" action="" method="POST" >
<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arrFrom']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" />
</form>
<?php }} ?>

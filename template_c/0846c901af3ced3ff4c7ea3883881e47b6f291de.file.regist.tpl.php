<?php /* Smarty version Smarty-3.1.8, created on 2014-04-24 11:36:19
         compiled from "C:/xampp/htdocs/superform/template\regist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2733353572f21774b27-96928389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0846c901af3ced3ff4c7ea3883881e47b6f291de' => 
    array (
      0 => 'C:/xampp/htdocs/superform/template\\regist.tpl',
      1 => 1398236554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2733353572f21774b27-96928389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53572f2179cb58_33693427',
  'variables' => 
  array (
    'key' => 0,
    'arrForm' => 0,
    'arrErr' => 0,
    'arrSex' => 0,
    'arrYear' => 0,
    'arrMonth' => 0,
    'arrDay' => 0,
    'key1' => 0,
    'key2' => 0,
    'arrSkillLanguage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53572f2179cb58_33693427')) {function content_53572f2179cb58_33693427($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'C:/xampp/Smarty/libs/plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_options')) include 'C:/xampp/Smarty/libs/plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_checkboxes')) include 'C:/xampp/Smarty/libs/plugins\\function.html_checkboxes.php';
?><form name="form1" id="form1" action="" method="POST" >
<input type="hidden" id="mode" name="mode" value="">
<dl>
    <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable("family_name", null, 0);?>
	<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['disp_name'];?>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value])){?><span class="attention"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</span><?php }?></dd>
	<dt><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"  name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'];?>
" /></dt>
    
    <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable("first_name", null, 0);?>
	<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['disp_name'];?>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value])){?><span class="attention"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</span><?php }?></dd>
	<dt><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'];?>
" /></dt>

    <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable("sex", null, 0);?>
	<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['disp_name'];?>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value])){?><span class="attention"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</span><?php }?></dd>
	<dt><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_radios(array('name'=>($_smarty_tpl->tpl_vars['key']->value),'options'=>$_smarty_tpl->tpl_vars['arrSex']->value,'selected'=>$_tmp1,'separator'=>'<br />'),$_smarty_tpl);?>
</dt>

	<dd>
        <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable("birth_year", null, 0);?>
        <select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrYear']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>
  
        </select>年
        <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable("birth_month", null, 0);?>
        <select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMonth']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>
  
        </select>月
        <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable("birth_day", null, 0);?>
        <select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDay']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>
  
        </select>日
    </dd>

    <?php $_smarty_tpl->tpl_vars['key1'] = new Smarty_variable("zip1", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['key2'] = new Smarty_variable("zip2", null, 0);?>
	<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['disp_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['disp_name'];?>

      <?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value])){?><span class="attention"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value];?>
</span><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value])){?><span class="attention"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value];?>
</span><?php }?>
    </dd>
	<dt><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value'];?>
" />-<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value'];?>
" /></dt>
	
    <?php $_smarty_tpl->tpl_vars['key1'] = new Smarty_variable("address1", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['key2'] = new Smarty_variable("address2", null, 0);?>
	<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['disp_name'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value])){?><span class="attention"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</span><?php }?></dd>
	<dt>
     <input type="text" id="<?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value'];?>
" />
    </dt>
     
	<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['disp_name'];?>
</dd>
	<dt>
     <input type="text" id="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value'];?>
" /> 
    </dt>

    <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable("skill_language", null, 0);?>
	<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['disp_name'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value])){?><span class="attention"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</span><?php }?></dd>
	<dt><?php echo smarty_function_html_checkboxes(array('name'=>'{}','options'=>$_smarty_tpl->tpl_vars['arrSkillLanguage']->value,'checked'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'],'separator'=>"<br />"),$_smarty_tpl);?>
</dt>
</dl>


<input type="button" name="send" value="登録する" class="btn btn-success" id="submit_button" />
</form>
<?php }} ?>
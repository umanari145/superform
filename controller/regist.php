<?php


require_once("../config.php");
require_once( SMARTY_DIR . SMARTY_FILENAME );
require_once( CLASS_FILENAME );

$smarty =new Smarty();
$formParam = new formParam();

$smarty->template_dir = TEMP_DIR;
$smarty->compile_dir  = CACHE_DIR;






$smarty->display( REGIST_TPL_FILENAME );
?>
<?php /* Smarty version 3.1.27, created on 2017-05-16 11:29:25
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\element\chunk\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8360591ab8654bbb09_54616593%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ad4a3289dbbdcddd0341fb00a259a4f679880be' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\element\\chunk\\create.tpl',
      1 => 1491128142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8360591ab8654bbb09_54616593',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591ab8654bf989_25308290',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591ab8654bf989_25308290')) {
function content_591ab8654bf989_25308290 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8360591ab8654bbb09_54616593';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>
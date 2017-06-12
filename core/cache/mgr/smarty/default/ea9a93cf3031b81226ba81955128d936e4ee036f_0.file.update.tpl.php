<?php /* Smarty version 3.1.27, created on 2017-04-02 13:40:37
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\element\snippet\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:307058e0d525bdba23_96901615%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea9a93cf3031b81226ba81955128d936e4ee036f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\element\\snippet\\update.tpl',
      1 => 1491128142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307058e0d525bdba23_96901615',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e0d525bdf8a7_15884154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e0d525bdf8a7_15884154')) {
function content_58e0d525bdf8a7_15884154 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '307058e0d525bdba23_96901615';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>
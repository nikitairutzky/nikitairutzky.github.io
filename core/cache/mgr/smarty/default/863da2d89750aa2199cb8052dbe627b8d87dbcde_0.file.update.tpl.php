<?php /* Smarty version 3.1.27, created on 2017-05-11 11:54:22
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\element\tv\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30322591426be230619_47143168%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '863da2d89750aa2199cb8052dbe627b8d87dbcde' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\element\\tv\\update.tpl',
      1 => 1491128142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30322591426be230619_47143168',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591426be238326_24594263',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591426be238326_24594263')) {
function content_591426be238326_24594263 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30322591426be230619_47143168';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>
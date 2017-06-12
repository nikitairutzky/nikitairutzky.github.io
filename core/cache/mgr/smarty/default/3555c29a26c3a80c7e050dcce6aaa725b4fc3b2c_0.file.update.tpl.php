<?php /* Smarty version 3.1.27, created on 2017-05-16 11:28:34
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\element\chunk\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25843591ab832e070e5_58064920%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3555c29a26c3a80c7e050dcce6aaa725b4fc3b2c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\element\\chunk\\update.tpl',
      1 => 1491128142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25843591ab832e070e5_58064920',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591ab832e0af61_99895868',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591ab832e0af61_99895868')) {
function content_591ab832e0af61_99895868 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25843591ab832e070e5_58064920';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>
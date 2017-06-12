<?php /* Smarty version 3.1.27, created on 2017-04-02 13:21:28
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1103958e0d0a82d0311_52133896%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '789e70b70cf3f87ed40bf247054a69a82bb6e999' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1491128143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1103958e0d0a82d0311_52133896',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e0d0a8420262_88544991',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e0d0a8420262_88544991')) {
function content_58e0d0a8420262_88544991 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1103958e0d0a82d0311_52133896';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>
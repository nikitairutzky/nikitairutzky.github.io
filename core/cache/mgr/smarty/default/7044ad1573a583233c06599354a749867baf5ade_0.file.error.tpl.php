<?php /* Smarty version 3.1.27, created on 2017-05-24 11:49:52
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:618359254930077391_94945731%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7044ad1573a583233c06599354a749867baf5ade' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\error.tpl',
      1 => 1491128142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '618359254930077391_94945731',
  'variables' => 
  array (
    '_e' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592549301c3455_95306497',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592549301c3455_95306497')) {
function content_592549301c3455_95306497 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '618359254930077391_94945731';
?>
<div class="modx_error">
    <h2><i class="icon icon-exclamation-triangle"></i> An error occurred...</h2>

    <div class="error_container<?php if (count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?> multiple<?php }?>">
        <p><?php echo $_smarty_tpl->tpl_vars['_e']->value['message'];?>
</p>

        <?php if (count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?>
        <p>&nbsp;</p>
        <p><strong>Errors:</strong></p>
        <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['_e']->value['errors'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$foreach_error_Sav = $_smarty_tpl->tpl_vars['error'];
?>
            <li><i class="icon icon-angle-right"></i> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
        <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
        </ul>
        <?php }?>
    </div>
</div><?php }
}
?>
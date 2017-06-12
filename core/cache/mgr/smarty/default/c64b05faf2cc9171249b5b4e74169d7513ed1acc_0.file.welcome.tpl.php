<?php /* Smarty version 3.1.27, created on 2017-04-02 13:16:20
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3216758e0cf74e7e242_32712915%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c64b05faf2cc9171249b5b4e74169d7513ed1acc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\welcome.tpl',
      1 => 1491128143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3216758e0cf74e7e242_32712915',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e0cf74e820c8_87868436',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e0cf74e820c8_87868436')) {
function content_58e0cf74e820c8_87868436 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3216758e0cf74e7e242_32712915';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2017-04-02 13:39:41
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\element\snippet\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2579458e0d4edb00140_58561265%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77bfd1346686f40c1076ce0e7ac36430231f0d51' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\element\\snippet\\create.tpl',
      1 => 1491128142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2579458e0d4edb00140_58561265',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e0d4edb03fc5_95856162',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e0d4edb03fc5_95856162')) {
function content_58e0d4edb03fc5_95856162 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2579458e0d4edb00140_58561265';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>
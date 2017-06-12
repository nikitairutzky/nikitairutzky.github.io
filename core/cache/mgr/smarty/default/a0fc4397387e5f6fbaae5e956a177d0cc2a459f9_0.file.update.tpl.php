<?php /* Smarty version 3.1.27, created on 2017-05-24 11:50:56
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\resource\staticresource\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:370859254970655e38_26882109%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0fc4397387e5f6fbaae5e956a177d0cc2a459f9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\resource\\staticresource\\update.tpl',
      1 => 1491128143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '370859254970655e38_26882109',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5925497066d535_19137826',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5925497066d535_19137826')) {
function content_5925497066d535_19137826 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '370859254970655e38_26882109';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>
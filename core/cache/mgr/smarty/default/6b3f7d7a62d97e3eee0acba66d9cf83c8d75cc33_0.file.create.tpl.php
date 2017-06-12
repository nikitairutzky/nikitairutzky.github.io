<?php /* Smarty version 3.1.27, created on 2017-05-24 11:50:17
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\resource\staticresource\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1260959254949649440_05796589%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b3f7d7a62d97e3eee0acba66d9cf83c8d75cc33' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\resource\\staticresource\\create.tpl',
      1 => 1491128143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1260959254949649440_05796589',
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
  'unifunc' => 'content_592549496937d9_96811773',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592549496937d9_96811773')) {
function content_592549496937d9_96811773 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1260959254949649440_05796589';
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
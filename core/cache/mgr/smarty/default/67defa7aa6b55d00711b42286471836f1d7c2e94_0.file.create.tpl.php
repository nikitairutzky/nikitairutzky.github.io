<?php /* Smarty version 3.1.27, created on 2017-04-02 13:35:59
         compiled from "C:\OpenServer\domains\modx.lesson\manager\templates\default\resource\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3006858e0d40fbe7bd8_11850438%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67defa7aa6b55d00711b42286471836f1d7c2e94' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\manager\\templates\\default\\resource\\create.tpl',
      1 => 1491128143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3006858e0d40fbe7bd8_11850438',
  'variables' => 
  array (
    'tvOutput' => 0,
    'hidden' => 0,
    'tv' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e0d40fe7fd76_31395214',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e0d40fe7fd76_31395214')) {
function content_58e0d40fe7fd76_31395214 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3006858e0d40fbe7bd8_11850438';
?>
<div id="modx-panel-resource-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
<?php
$_from = $_smarty_tpl->tpl_vars['hidden']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tv']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
$foreach_tv_Sav = $_smarty_tpl->tpl_vars['tv'];
?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->default_text, ENT_QUOTES, 'UTF-8', true);?>
" />
    <?php echo $_smarty_tpl->tpl_vars['tv']->value->get('formElement');?>

<?php
$_smarty_tpl->tpl_vars['tv'] = $foreach_tv_Sav;
}
?>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>
<?php /* Smarty version 3.1.27, created on 2017-04-02 13:15:50
         compiled from "C:\OpenServer\domains\modx.lesson\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:736158e0cf56db0351_85363301%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4d1b75a816d2179864ffa8f5ab8c17925911369' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modx.lesson\\setup\\templates\\footer.tpl',
      1 => 1491119474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '736158e0cf56db0351_85363301',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e0cf56dc7a55_95384863',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e0cf56dc7a55_95384863')) {
function content_58e0cf56dc7a55_95384863 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/OpenServer/domains/modx.lesson/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '736158e0cf56db0351_85363301';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>
<?php /* Smarty version Smarty-3.1.7, created on 2013-03-07 15:58:14
         compiled from "./templates/bbcode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9529467185138b9160e81f6-91527496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c6eb918ef705869ce57d03b45da13858bf7926b' => 
    array (
      0 => './templates/bbcode.tpl',
      1 => 1362121453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9529467185138b9160e81f6-91527496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'attach' => 0,
    'smilies' => 0,
    'smily' => 0,
    'lang' => 0,
    'lang_functions' => 0,
    'content' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5138b9161bc27',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5138b9161bc27')) {function content_5138b9161bc27($_smarty_tpl) {?><script type="text/javascript">hb.bbcode=<?php echo json_encode($_smarty_tpl->tpl_vars['config']->value);?>
;</script>
<div id="bbcode-toolbar"></div>
<?php if ($_smarty_tpl->tpl_vars['attach']->value){?>
<iframe src="attachment.php" width="100%" height="24" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
<?php }?>
<div style="margin:1.5em 1.5em 0 0; width:20%; float:right; text-align:center;">
  <div class="minor-list smiles" style="margin-bottom: 1.5em;">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['smily'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['smily']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['smilies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['smily']->key => $_smarty_tpl->tpl_vars['smily']->value){
$_smarty_tpl->tpl_vars['smily']->_loop = true;
?>
      <li><?php echo getSmileIt($_smarty_tpl->tpl_vars['config']->value['form'],$_smarty_tpl->tpl_vars['config']->value['text'],$_smarty_tpl->tpl_vars['smily']->value);?>
</li>
      <?php } ?>
    </ul>
  </div>
  <a id="showmoresmilies" href="#"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_more_smilies'];?>
</a>
</div>
<div id="moresmilies" style="display:none;" title="<?php echo $_smarty_tpl->tpl_vars['lang_functions']->value['text_more_smilies'];?>
"></div>
<textarea class="bbcode" cols="100" style="width: 70%;" name="<?php echo $_smarty_tpl->tpl_vars['config']->value['text'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['config']->value['text'];?>
" rows="20" onkeydown="ctrlenter(event,'compose','qr')"><?php echo '/*%%SmartyNocache:9529467185138b9160e81f6-91527496%%*/<?php echo $_smarty_tpl->tpl_vars[\'content\']->value;?>
/*/%%SmartyNocache:9529467185138b9160e81f6-91527496%%*/';?>
</textarea>
<?php echo '/*%%SmartyNocache:9529467185138b9160e81f6-91527496%%*/<?php echo get_load_uri(\'js\',\'bbcode.js\');?>
/*/%%SmartyNocache:9529467185138b9160e81f6-91527496%%*/';?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2013-03-07 15:30:41
         compiled from "./templates/stdfoot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11611723105138b2a1625208-68823624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3782fcfc9ac0d2cd7b9499914ceb9f06a6c0a50' => 
    array (
      0 => './templates/stdfoot.tpl',
      1 => 1362121453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11611723105138b2a1625208-68823624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footerad' => 0,
    'BASEURL' => 0,
    'SITENAME' => 0,
    'icplicense_main' => 0,
    'yearfounded' => 0,
    'VERSION' => 0,
    'totaltime' => 1,
    'alltotaltime' => 1,
    'queries' => 1,
    'Cache' => 1,
    'details' => 1,
    'query' => 1,
    'keyName' => 1,
    'hits' => 1,
    'key_shortcut' => 1,
    'analyticscode_tweak' => 0,
    'cnzz' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5138b2a17247b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5138b2a17247b')) {function content_5138b2a17247b($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/www/lib/Smarty/plugins/modifier.date_format.php';
?>      </div>
      <a href="#" id="back-to-top" title="回到页首" style="display:none;"></a>
      <div style="display: none;" id="lightbox" class="lightbox"></div><div style="display: none;" id="curtain" class="curtain"></div>
    </div>
    <footer>
      <?php if ($_smarty_tpl->tpl_vars['footerad']->value){?>
      <div style="margin-top: 10px; text-align:center;" id="ad_footer"><?php echo $_smarty_tpl->tpl_vars['footerad']->value[0];?>
</div>
      <?php }?>
      <div style="margin-top: 10px; margin-bottom: 30px; text-align: center;" id="tech-stats">
	(c) <a href="<?php echo get_protocol_prefix();?>
<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
" target="_self"><?php echo $_smarty_tpl->tpl_vars['SITENAME']->value;?>
</a><?php echo $_smarty_tpl->tpl_vars['icplicense_main']->value;?>
<?php if (date("Y")!=$_smarty_tpl->tpl_vars['yearfounded']->value){?><?php echo $_smarty_tpl->tpl_vars['yearfounded']->value;?>
-<?php }?><?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
<br /><br />
      
	[page created in <b> <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo $_smarty_tpl->tpl_vars[\'totaltime\']->value;?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>
 @ <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo $_smarty_tpl->tpl_vars[\'alltotaltime\']->value;?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>
 </b> sec with <b><?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo count($_smarty_tpl->tpl_vars[\'queries\']->value);?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>
</b> db queries, <b><?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo $_smarty_tpl->tpl_vars[\'Cache\']->value->getCacheReadTimes();?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>
</b> reads and <b><?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo $_smarty_tpl->tpl_vars[\'Cache\']->value->getCacheWriteTimes();?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>
 </b> writes of memcached and <b><?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo mksize(memory_get_usage());?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>
</b> ram]
      </div>
      <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php if ($_smarty_tpl->tpl_vars[\'details\']->value){?>/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>

      <div id="sql_debug">
	SQL query list: 
	<ul>
	  <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php  $_smarty_tpl->tpl_vars[\'query\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'query\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'queries\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'query\']->key => $_smarty_tpl->tpl_vars[\'query\']->value){
$_smarty_tpl->tpl_vars[\'query\']->_loop = true;
?>/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>

	  <li><?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'query\']->value);?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>
</li>
	  <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php } ?>/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>

	</ul>
	Memcached key read:
	<ul>
	  <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php  $_smarty_tpl->tpl_vars[\'hits\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'hits\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'keyName\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'Cache\']->value->getKeyHits(\'read\'); if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'hits\']->key => $_smarty_tpl->tpl_vars[\'hits\']->value){
$_smarty_tpl->tpl_vars[\'hits\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'keyName\']->value = $_smarty_tpl->tpl_vars[\'hits\']->key;
?>/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>

	  <li><?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo $_smarty_tpl->tpl_vars[\'keyName\']->value;?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>
 : <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo $_smarty_tpl->tpl_vars[\'hits\']->value;?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>
</li>
	  <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php } ?>/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>

	</ul>
	Memcached key written:
	<ul>
	  <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php  $_smarty_tpl->tpl_vars[\'hits\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'hits\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'keyName\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'Cache\']->value->getKeyHits(\'write\'); if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'hits\']->key => $_smarty_tpl->tpl_vars[\'hits\']->value){
$_smarty_tpl->tpl_vars[\'hits\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'keyName\']->value = $_smarty_tpl->tpl_vars[\'hits\']->key;
?>/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>

	  <li><?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo $_smarty_tpl->tpl_vars[\'keyName\']->value;?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>
 : <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo $_smarty_tpl->tpl_vars[\'hits\']->value;?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>
</li>
	  <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php } ?>/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>

	</ul>
      </div>
      <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php }?>/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>

      <?php echo '/*%%SmartyNocache:11611723105138b2a1625208-68823624%%*/<?php echo $_smarty_tpl->tpl_vars[\'key_shortcut\']->value;?>
/*/%%SmartyNocache:11611723105138b2a1625208-68823624%%*/';?>

      
      <?php echo $_smarty_tpl->tpl_vars['analyticscode_tweak']->value;?>

      <?php echo $_smarty_tpl->tpl_vars['cnzz']->value;?>

    </footer>
  </div>
  </body>
</html>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2013-03-07 15:58:15
         compiled from "./templates/subtitles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17846318865138b9174bb503-29337624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd0921948f35567ada619152a75f418b4089cd7a' => 
    array (
      0 => './templates/subtitles.tpl',
      1 => 1362121453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17846318865138b9174bb503-29337624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'size' => 0,
    'hint' => 0,
    'detail_torrent_id' => 0,
    'torrent_name' => 0,
    'maxsubsize_main' => 0,
    'lang_ids' => 0,
    'lang_names' => 0,
    'beanonymous_class' => 0,
    'letter' => 0,
    'rows' => 0,
    'pagertop' => 0,
    'arr' => 0,
    'viewanonymous_class' => 0,
    'pagerbottom' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5138b9176b31c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5138b9176b31c')) {function content_5138b9176b31c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/opt/www/lib/Smarty/plugins/function.html_options.php';
?><h2 id="page-title" class="transparentbg"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_upload_subtitles'];?>
</h2>
<h3 class="page-titles"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_uploaded_size'];?>
 <?php echo mksize($_smarty_tpl->tpl_vars['size']->value);?>
</h3>
<h3 class="page-titles"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_rules'];?>
</h3>
<div>
  <ol>
    <?php  $_smarty_tpl->tpl_vars['hint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lang']->value['text_rule']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->key => $_smarty_tpl->tpl_vars['hint']->value){
$_smarty_tpl->tpl_vars['hint']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
</li>
    <?php } ?>
  </ol>
</div>
<?php if ($_smarty_tpl->tpl_vars['detail_torrent_id']->value){?>
<h3 class="page-titles"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_uploading_subtitles_for_torrent'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['torrent_name']->value;?>
</strong></h3>
<?php }?>

<form enctype="multipart/form-data" method="post" action="?">
  <input type="hidden" name="action" value="upload" />
  <div class="edit-hint"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_red_star_required'];?>
</div>
  <dl class="table" style="width:550px;">
    <dt><span class="required"><?php echo $_smarty_tpl->tpl_vars['lang']->value['row_file'];?>
</span></dt>
    <dd class="first-child">
      <input type="file" name="file" />
      <?php if ($_smarty_tpl->tpl_vars['maxsubsize_main']->value>0){?>
      <br />
      (<?php echo $_smarty_tpl->tpl_vars['lang']->value['text_maximum_file_size'];?>
 <?php echo mksize($_smarty_tpl->tpl_vars['maxsubsize_main']->value);?>
)
      <?php }?>
    </dd>
    <dt><span class="required"><?php echo $_smarty_tpl->tpl_vars['lang']->value['row_torrent_id'];?>
</span></dt>
    <dd>
      <?php if (!$_smarty_tpl->tpl_vars['detail_torrent_id']->value){?>
      <input type="text" name="torrent_id" style="width:300px"><br /><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_torrent_id_note'];?>

      <?php }else{ ?>
      <input type="text" name="torrent_id" value="<?php echo $_smarty_tpl->tpl_vars['detail_torrent_id']->value;?>
" style="width:300px" /><br /><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_torrent_id_note'];?>

      <?php }?>
    </dd>
    <dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['row_title'];?>
</dt>
    <dd><input type="text" name="title" style="width:300px" /><br /><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_title_note'];?>
</dd>
    <dt><span class="required"><?php echo $_smarty_tpl->tpl_vars['lang']->value['row_language'];?>
</span></dt>
    <dd>
      <select name="sel_lang">
	<option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['select_choose_one'];?>
</option>
	<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['lang_ids']->value,'output'=>$_smarty_tpl->tpl_vars['lang_names']->value),$_smarty_tpl);?>

      </select>
    </dd>
    <?php if ((get_user_class()>=$_smarty_tpl->tpl_vars['beanonymous_class']->value)){?>
    <dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['row_show_uploader'];?>
</dt>
    <dd>
      <label><input type="checkbox" name="uplver" value="yes" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['hide_uploader_note'];?>
</label>
    </dd>
    <?php }?>
    <dd class="toolbox"><input type="submit" class="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_upload_file'];?>
" /> <input type="reset" class="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_reset'];?>
" />
  </dd>
  </dl>

</form>

<div id="search-subtitles">
  <form method="get" action="?">
    <input type="search" style="width:200px" name="search" />
    <select name="lang_id">
      <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['select_all_languages'];?>
</option>
      <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['lang_ids']->value,'output'=>$_smarty_tpl->tpl_vars['lang_names']->value),$_smarty_tpl);?>

    </select>
    <input type="submit" class="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_search'];?>
" />
  </form>
  <?php echo a_to_z_index($_smarty_tpl->tpl_vars['letter']->value);?>

</div>

<?php if (count($_smarty_tpl->tpl_vars['rows']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['pagertop']->value;?>

<table style="width:100%;" cellspacing="0" cellpadding="5" class="no-vertical-line">
  <thead class="center">
    <tr>
      <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['col_lang'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['col_title'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['col_torrent'];?>
</th>
      <th><img class="time" src="pic/trans.gif" alt="time" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title_date_added'];?>
" /></th>
      <th><img class="size" src="pic/trans.gif" alt="size" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title_size'];?>
" /></th>
      <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['col_hits'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['col_upped_by'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['col_report'];?>
</th>
    </tr>
  </thead>
  <tbody>
    <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
    <tr>
      <td style="text-align:center;" valign="middle"><img border="0" src="pic/flag/<?php echo $_smarty_tpl->tpl_vars['arr']->value["flagpic"];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['arr']->value["lang_name"];?>
" title="<?php echo $_smarty_tpl->tpl_vars['arr']->value["lang_name"];?>
"/></td>
      <td><a href="downloadsubs.php?torrentid=<?php echo $_smarty_tpl->tpl_vars['arr']->value['torrent_id'];?>
&amp;subid=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arr']->value["title"]);?>
" class="index subtitle-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arr']->value["title"]);?>
</a>
      <?php if ($_smarty_tpl->tpl_vars['arr']->value['candelete']){?>
      <a href="?delete=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
"><span class="small"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_delete'];?>
</span></a>
      <?php }?>
      </td>
    <td><a href="details.php?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['torrent_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['arr']->value['torrent_name'];?>
" class="subtitle-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arr']->value['torrent_name']);?>
</a></td>
    <td style="text-align:center;"><?php echo gettime($_smarty_tpl->tpl_vars['arr']->value["added"],false,false);?>
</td>
    <td style="text-align:center;"><?php echo mksize_loose($_smarty_tpl->tpl_vars['arr']->value['size']);?>
</td>
    <td style="text-align:center;"><?php echo number_format($_smarty_tpl->tpl_vars['arr']->value['hits']);?>
</td>
    <td style="text-align:center;">
      <?php if ($_smarty_tpl->tpl_vars['arr']->value["anonymous"]=='yes'){?>
      <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_anonymous'];?>

      <?php if (get_user_class()>=$_smarty_tpl->tpl_vars['viewanonymous_class']->value){?>
      <br /><?php echo get_username($_smarty_tpl->tpl_vars['arr']->value['uppedby'],false,true,true,false,true);?>

      <?php }?>
      <?php }else{ ?>
      <?php echo get_username($_smarty_tpl->tpl_vars['arr']->value['uppedby']);?>

      <?php }?>
    </td>
    <td style="text-align:center;"><a href="report.php?subtitle=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
"><img class="f_report" src="pic/trans.gif" alt="Report" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title_report_subtitle'];?>
" /></a></td>
  </tr>
  <?php } ?>
</tbody>
</table>
<?php echo $_smarty_tpl->tpl_vars['pagerbottom']->value;?>

<?php }else{ ?>
<?php echo stdmsg($_smarty_tpl->tpl_vars['lang']->value['text_sorry'],$_smarty_tpl->tpl_vars['lang']->value['text_nothing_here']);?>

<?php }?><?php }} ?>
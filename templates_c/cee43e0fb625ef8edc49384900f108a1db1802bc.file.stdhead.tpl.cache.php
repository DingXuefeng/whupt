<?php /* Smarty version Smarty-3.1.7, created on 2013-03-07 15:30:41
         compiled from "./templates/stdhead.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18025473815138b2a11b1406-05849425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cee43e0fb625ef8edc49384900f108a1db1802bc' => 
    array (
      0 => './templates/stdhead.tpl',
      1 => 1362121453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18025473815138b2a11b1406-05849425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta' => 0,
    'title' => 1,
    'BASEURL' => 0,
    'SITENAME' => 0,
    'logo_main' => 0,
    'SLOGAN' => 0,
    'headerad' => 0,
    'enabledonation' => 0,
    'forum_pic' => 0,
    'CURUSER' => 0,
    'lang' => 0,
    'staffmem_class' => 0,
    'totalcheaters' => 0,
    'totalreports' => 0,
    'totalsm' => 0,
    'unread' => 0,
    'messages' => 0,
    'outmessages' => 0,
    'id' => 0,
    'ratio' => 0,
    'activeseed' => 0,
    'activeleech' => 0,
    'connectable' => 0,
    'belownavad' => 0,
    'alerts' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5138b2a153a6e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5138b2a153a6e')) {function content_5138b2a153a6e($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/www/lib/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <?php echo $_smarty_tpl->tpl_vars['meta']->value;?>

  <title><?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>
</title>
  <link rel="shortcut icon" href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/pic/icon.png" />
  <link rel="search" type="application/opensearchdescription+xml" title="<?php echo $_smarty_tpl->tpl_vars['SITENAME']->value;?>
 Torrents" href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/opensearch.php" />
  <script type="text/javascript">
    //<![CDATA[
    <?php echo js_hb_config();?>

    //]]>
  </script>
  <?php echo get_load_uri('css','');?>

  
  <?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php echo get_load_uri(\'js\',\'\');?>
/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>

  
  <!--[if lt IE 9]>
  <script type="text/javascript" src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/load.php?name=html5shiv.js"></script>
  <![endif]-->
</head>
<body>
  <div id="wrap">
    <header>
      <?php if ($_smarty_tpl->tpl_vars['logo_main']->value==''){?>
      <div class="logo"><?php echo $_smarty_tpl->tpl_vars['SITENAME']->value;?>
</div>
      <div class="slogan"><?php echo $_smarty_tpl->tpl_vars['SLOGAN']->value;?>
</div>
      <?php }else{ ?>
      <div><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/index.php"><img id="logo-img" src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['logo_main']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['SITENAME']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['SITENAME']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['SLOGAN']->value;?>
" /></a></div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['headerad']->value){?>
      <div id="ad_header"><?php echo $_smarty_tpl->tpl_vars['headerad']->value[0];?>
</div>
      <?php }?>
      <div id="donate">
	<?php if ($_smarty_tpl->tpl_vars['enabledonation']->value){?>
	<a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/donate.php"><img id="donation-img" src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum_pic']->value;?>
/donate.gif" alt="Make a donation" /></a>
	<?php }?>
    </div></header>
    <div id="page">
      <?php if (!$_smarty_tpl->tpl_vars['CURUSER']->value){?> 
      <div id="nav-reg-signup" class="big minor-list list-seperator minor-nav"><ul><?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php echo no_login_navbar();?>
/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>
</ul></div>
      <?php }else{ ?>
      
      <?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php echo menu();?>
/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>

      
      <div id="header-info" class="table td">
	<div id="header-icons" class="medium"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_the_time_is_now'];?>
<?php echo smarty_modifier_date_format(time(),"%H:%M");?>

	  <div class="minor-list horizon-compact"><ul>
	<?php if (get_user_class()>=$_smarty_tpl->tpl_vars['staffmem_class']->value){?>
	<li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/cheaterbox.php" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title_cheaterbox'];?>
"><img class="cheaterbox" alt="cheaterbox"src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/pic/trans.gif" /> <?php echo $_smarty_tpl->tpl_vars['totalcheaters']->value;?>
</a></li>
	<li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/reports.php" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title_reportbox'];?>
"><img class="reportbox" alt="reportbox"src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/pic/trans.gif" /> <?php echo $_smarty_tpl->tpl_vars['totalreports']->value;?>
</a></li>
	<li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/staffbox.php" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title_staffbox'];?>
"><img class="staffbox" alt="staffbox"src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/pic/trans.gif" /> <?php echo $_smarty_tpl->tpl_vars['totalsm']->value;?>
</a></li>
	<?php }?>
	<li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/messages.php" title="<?php if ($_smarty_tpl->tpl_vars['unread']->value){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_inbox_new_messages'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_inbox_no_new_messages'];?>
<?php }?>"><img class="<?php if ($_smarty_tpl->tpl_vars['unread']->value){?>inboxnew<?php }else{ ?>inbox<?php }?>" src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/pic/trans.gif" alt="inbox" />
	<?php if ($_smarty_tpl->tpl_vars['messages']->value){?><?php echo $_smarty_tpl->tpl_vars['messages']->value;?>
(<?php echo $_smarty_tpl->tpl_vars['unread']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['text_message_new'];?>
)
	<?php }else{ ?>
	0
	<?php }?>
	</a></li>

	<li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/messages.php?action=viewmailbox&amp;box=-1"><img class="sentbox" alt="sentbox" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title_sentbox'];?>
" src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/pic/trans.gif" /> <?php if ($_smarty_tpl->tpl_vars['outmessages']->value){?><?php echo $_smarty_tpl->tpl_vars['outmessages']->value;?>
<?php }else{ ?>0<?php }?></a></li>
	<li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/friends.php"><img class="buddylist" alt="Buddylist" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title_buddylist'];?>
" src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/pic/trans.gif" /></a></li>
	<li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/getrss.php"><img class="rss" alt="RSS" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title_get_rss'];?>
" src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/pic/trans.gif" /></a></li>
	 </ul></div>
	</div>

	<div id="header-userinfo">
	  <div class="minor-list list-seperator compact">
	    <ul>
	      <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_welcome_back'];?>
, <?php echo get_username($_smarty_tpl->tpl_vars['id']->value);?>
</li>
	      <li><form action="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/logout.php" method="post"><input type="submit" class="a" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['text_logout'];?>
" /></form></li>
	      <?php if (permissionAuth('viewstaffpanel',$_smarty_tpl->tpl_vars['CURUSER']->value['usergroups'],$_smarty_tpl->tpl_vars['CURUSER']->value['class'])){?>
	      <li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/staffpanel.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_staff_panel'];?>
</a></li>
	      <?php }?> 
	      <?php if (permissionAuth('viewsetting',$_smarty_tpl->tpl_vars['CURUSER']->value['usergroups'],$_smarty_tpl->tpl_vars['CURUSER']->value['class'])){?>
	      <li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/settings.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_site_settings'];?>
</a></li>
	      <?php }?>
	      <li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/torrents.php?inclbookmarked=1&amp;allsec=1&amp;incldead=0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_bookmarks'];?>
</a></li>
	      <li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/mybonus.php" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['text_use'];?>
"><span class = 'color_bonus'><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_bonus'];?>
</span>: <span id="bonus"><?php echo number_format($_smarty_tpl->tpl_vars['CURUSER']->value['seedbonus'],1);?>
</span></a></li>
	      <li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/invite.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['text_send'];?>
"><span class = "color_invite"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_invite'];?>
</span>: <span id="invites"><?php echo $_smarty_tpl->tpl_vars['CURUSER']->value['invites'];?>
</span></a></li>
	      <?php if (permissionAuth('viewkeepers',$_smarty_tpl->tpl_vars['CURUSER']->value['usergroups'],$_smarty_tpl->tpl_vars['CURUSER']->value['class'])){?>
	      <li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/keepers.php" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['text_user_cp'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_keepers'];?>
</a></li>
	      <?php }?>
	      <li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/usercp.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['text_user_cp'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_user_cp'];?>
</a></li>	   
	      <li><a href="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/users.php" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['text_users'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_users'];?>
</a></li>	    	       
	    </ul>
	  </div>

	  <div class="minor-list compact">
	    <ul>
	      <li><span class="color_ratio"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_ratio'];?>
</span><?php echo $_smarty_tpl->tpl_vars['ratio']->value;?>
</li>
	      <li><span class="color_uploaded"><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_uploaded'];?>
</span><span id="uploaded"><?php echo mksize($_smarty_tpl->tpl_vars['CURUSER']->value['uploaded']);?>
</span></li>
	      <li><span class='color_downloaded'> <?php echo $_smarty_tpl->tpl_vars['lang']->value['text_downloaded'];?>
</span><?php echo mksize($_smarty_tpl->tpl_vars['CURUSER']->value['downloaded']);?>
</li>
	      <li><span class='color_active'><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_active_torrents'];?>
</span> <img class="arrowup" alt="Toerrents seeding" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title_torrents_seeding'];?>
" src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/pic/trans.gif" /><?php echo $_smarty_tpl->tpl_vars['activeseed']->value;?>
<img class="arrowdown" alt="Torrents leeching" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title_torrents_leeching'];?>
" src="//<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/pic/trans.gif" /><?php echo $_smarty_tpl->tpl_vars['activeleech']->value;?>
</li>
	      <li><span class='color_connectable'><?php echo $_smarty_tpl->tpl_vars['lang']->value['text_connectable'];?>
</span><?php echo $_smarty_tpl->tpl_vars['connectable']->value;?>
</li>
	      <li><?php echo maxslots();?>
</li>
	    </ul>
	  </div>
	</div>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['belownavad']->value){?>
      <div id="ad_belownav">
	<?php echo $_smarty_tpl->tpl_vars['belownavad']->value[0];?>

      </div>
      <?php }?>

      
      <div id="alert" class="minor-list"><ul>
      <?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php if ($_smarty_tpl->tpl_vars[\'alerts\']->value){?>/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>

	<?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\']);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'name\'] = \'idx\';
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'loop\'] = is_array($_loop=$_smarty_tpl->tpl_vars[\'alerts\']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'show\'] = true;
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'max\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'loop\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'step\'] = 1;
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'start\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'step\'] > 0 ? 0 : $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'loop\']-1;
if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'show\']) {
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'total\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'loop\'];
    if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'total\'] == 0)
        $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'show\'] = false;
} else
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'total\'] = 0;
if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'show\']):

            for ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'index\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'start\'], $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'iteration\'] = 1;
                 $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'iteration\'] <= $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'total\'];
                 $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'index\'] += $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'step\'], $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'iteration\']++):
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'rownum\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'iteration\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'index_prev\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'index\'] - $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'step\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'index_next\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'index\'] + $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'step\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'first\']      = ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'iteration\'] == 1);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'last\']       = ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'iteration\'] == $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'idx\'][\'total\']);
?>/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>

	<?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'alerts\']->value[$_smarty_tpl->getVariable(\'smarty\',null,true,false)->value[\'section\'][\'idx\'][\'index\']][\'id\'])){?>/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>

	<?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php echo msgalert($_smarty_tpl->tpl_vars[\'alerts\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'idx\'][\'index\']][\'href\'],$_smarty_tpl->tpl_vars[\'alerts\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'idx\'][\'index\']][\'text\'],$_smarty_tpl->tpl_vars[\'alerts\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'idx\'][\'index\']][\'color\'],$_smarty_tpl->tpl_vars[\'alerts\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'idx\'][\'index\']][\'id\']);?>
/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>

	<?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php }else{ ?>/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>

	<?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php echo msgalert($_smarty_tpl->tpl_vars[\'alerts\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'idx\'][\'index\']][\'href\'],$_smarty_tpl->tpl_vars[\'alerts\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'idx\'][\'index\']][\'text\'],$_smarty_tpl->tpl_vars[\'alerts\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'idx\'][\'index\']][\'color\']);?>
/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>

	<?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php }?>/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>

	<?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>

      <?php echo '/*%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/<?php }?>/*/%%SmartyNocache:18025473815138b2a11b1406-05849425%%*/';?>

      </ul></div>
      
      <?php }?>
      <div id="outer">
<?php }} ?>
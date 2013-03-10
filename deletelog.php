<?php
require "include/bittorrent.php";
dbconn();
require_once(get_langfile_path());
loggedinorreturn();
function logmenu($selected = "dailylog"){
		global $lang_log;
		global $showfunbox_main;
		begin_main_frame();
		print ("<div id=\"lognav\"><ul id=\"logmenu\" class=\"menu\">");
		print ("<li" . ($selected == "dailylog" ? " class=selected" : "") . "><a href=\"?action=dailylog\">".$lang_log['text_daily_log']."</a></li>");
		print ("</ul></div>");
		end_main_frame();
}

function searchtable($title, $action, $opts = array()){
		global $lang_log;
		
}



$action = isset($_POST['action']) ? htmlspecialchars($_POST['action']) : (isset($_GET['action']) ? htmlspecialchars($_GET['action']) : '');
$allowed_actions = array("dailylog");
if (!$action)
	$action='dailylog';
if (!in_array($action, $allowed_actions))
stderr($lang_log['std_error'], $lang_log['std_invalid_action']);
else {
	switch ($action){
	case "dailylog":
		stdhead($lang_log['head_site_log']);

		$query = mysql_real_escape_string(trim($_GET["query"]));
		$search = $_GET["search"];

		$addparam = "";
		$wherea = "";
		if (get_user_class() >= $confilog_class){
			switch ($search)
			{
				case "mod": $wherea=" WHERE security_level = 'mod'"; break;
				case "normal": $wherea=" WHERE security_level = 'normal'"; break;
				case "all": break;
			}
			$addparam = ($wherea ? "search=".rawurlencode($search)."&" : "");
		}
		else{
			$wherea=" WHERE security_level = 'normal'";
		}

		if($query){
				$wherea .= ($wherea ? " AND " : " WHERE ")." txt LIKE '%$query%' ";
				$addparam .= "query=".rawurlencode($query)."&";
		}

		logmenu('dailylog');
		$opt = array (all => $lang_log['text_all'], normal => $lang_log['text_normal'], mod => $lang_log['text_mod']);
		searchtable($lang_log['text_search_log'], 'dailylog',$opt);
       
		//die();
		$res = sql_query("SELECT COUNT(*) FROM sitelog".$wherea);
		$row = mysql_fetch_array($res);
		$count = $row[0];

		$perpage = 50;

		list($pagertop, $pagerbottom, $limit) = pager($perpage, $count, "deletelog.php?action=dailylog&".$addparam);

		$res = sql_query("SELECT added, txt FROM sitelog $wherea ORDER BY added DESC $limit") or sqlerr(__FILE__, __LINE__);
		if (mysql_num_rows($res) == 0)
		print($lang_log['text_log_empty']);
		else
		{

		//echo $pagertop;

			print("<table width=940 border=1 cellspacing=0 cellpadding=5>\n");
			print("<tr><td class=colhead align=center><img class=\"time\" src=\"pic/trans.gif\" alt=\"time\" title=\"".$lang_log['title_time_added']."\" /></td><td class=colhead align=left>".$lang_log['col_event']."</td></tr>\n");
			while ($arr = mysql_fetch_assoc($res))
			{
				$color = "";
				
				if (strpos($arr['txt'],'was deleted by')){
					$color = "red";
					print("<tr><td class=\"rowfollow nowrap\" align=center>".gettime($arr['added'],true,false)."</td><td class=rowfollow align=left><font color='".$color."'>".htmlspecialchars($arr['txt'])."</font></td></tr>\n");
				}
			}
			print("</table>");
	
			echo $pagerbottom;
		}

		print($lang_log['time_zone_note']);

		stdfoot();
		die;
		break;
	case "chronicle":
		stdhead($lang_log['head_chronicle']);
		$query = mysql_real_escape_string(trim($_GET["query"]));
		if($query){
		$wherea=" WHERE txt LIKE '%$query%' ";
		$addparam = "query=".rawurlencode($query)."&";
		}
		else{
		$wherea="";
		$addparam = "";
		}
		logmenu("chronicle");
		searchtable($lang_log['text_search_chronicle'], 'chronicle');
		if (get_user_class() >= $chrmanage_class)
			additem($lang_log['text_add_chronicle'], 'chronicle');
		if ($_GET['do'] == "del" || $_GET['do'] == 'edit' || $_POST['do'] == "add" || $_POST['do'] == "update") {
			$txt = $_POST['txt'];
			if (get_user_class() < $chrmanage_class)
				permissiondeny();
			elseif ($_POST['do'] == "add")
					sql_query ("INSERT INTO chronicle (userid,added, txt) VALUES ('".$CURUSER["id"]."', now(), ".sqlesc($txt).")") or sqlerr(__FILE__, __LINE__);
			elseif ($_POST['do'] == "update"){
				$id = 0 + $_POST['id'];
				if (!$id) { header("Location: deletelog.php?action=chronicle"); die();}
				else sql_query ("UPDATE chronicle SET txt=".sqlesc($txt)." WHERE id=".$id) or sqlerr(__FILE__, __LINE__);}
			else {$id = 0 + $_GET['id'];
				if (!$id) { header("Location: deletelog.php?action=chronicle"); die();}
				elseif ($_GET['do'] == "del")
					sql_query ("DELETE FROM chronicle where id = '".$id."'") or sqlerr(__FILE__, __LINE__);
				elseif ($_GET['do'] == "edit")
					edititem($lang_log['text_edit_chronicle'],'chronicle', $id);
				}
		}

		$res = sql_query("SELECT COUNT(*) FROM chronicle".$wherea);
		$row = mysql_fetch_array($res);
		$count = $row[0];

		$perpage = 50;

		list($pagertop, $pagerbottom, $limit) = pager($perpage, $count, "deletelog.php?action=chronicle&".$addparam);
		$res = sql_query("SELECT id, added, txt FROM chronicle $wherea ORDER BY added DESC $limit") or sqlerr(__FILE__, __LINE__);
		if (mysql_num_rows($res) == 0)
		print($lang_log['text_chronicle_empty']);
		else
		{

		//echo $pagertop;

			print("<table width=940 border=1 cellspacing=0 cellpadding=5>\n");
			print("<tr><td class=colhead align=center>".$lang_log['col_date']."</td><td class=colhead align=left>".$lang_log['col_event']."</td>".(get_user_class() >= $chrmanage_class ? "<td class=colhead align=center>".$lang_log['col_modify']."</td>" : "")."</tr>\n");
			while ($arr = mysql_fetch_assoc($res))
			{
				$date = gettime($arr['added'],true,false);
				print("<tr><td class=rowfollow align=center><nobr>$date</nobr></td><td class=rowfollow align=left>".format_comment($arr["txt"],true,false,true)."</td>".(get_user_class() >= $chrmanage_class ? "<td align=center nowrap><b><a href=\"".$PHP_SELF."?action=chronicle&do=edit&id=".$arr["id"]."\">".$lang_log['text_edit']."</a>&nbsp;|&nbsp;<a href=\"".$PHP_SELF."?action=chronicle&do=del&id=".$arr["id"]."\"><font color=red>".$lang_log['text_delete']."</font></a></b></td>" : "")."</tr>\n");
			}
			print("</table>");
			echo $pagerbottom;
		}

		print($lang_log['time_zone_note']);

		stdfoot();
		die;
		break;
	case "funbox":
		stdhead($lang_log['head_funbox']);
		$query = mysql_real_escape_string(trim($_GET["query"]));
		$search = $_GET["search"];
		if($query){
			switch ($search){
				case "title": $wherea=" WHERE title LIKE '%$query%' AND status != 'banned'"; break;
				case "body": $wherea=" WHERE body LIKE '%$query%' AND status != 'banned'"; break;
				case "both": $wherea=" WHERE (body LIKE '%$query%' or title LIKE '%$query%') AND status != 'banned'" ; break;
				}
			$addparam = "search=".rawurlencode($search)."&query=".rawurlencode($query)."&";
			}
		else{
		$wherea=" WHERE status != 'banned'";
		$addparam = "";
		}
		logmenu("funbox");
		$opt = array (title => $lang_log['text_title'], body => $lang_log['text_body'], both => $lang_log['text_both']);
		searchtable($lang_log['text_search_funbox'], 'funbox', $opt);
		$res = sql_query("SELECT COUNT(*) FROM fun ".$wherea);
		$row = mysql_fetch_array($res);
		$count = $row[0];

		$perpage = 10;
		list($pagertop, $pagerbottom, $limit) = pager($perpage, $count, "deletelog.php?action=funbox&".$addparam);
		$res = sql_query("SELECT added, body, title, status FROM fun $wherea ORDER BY added DESC $limit") or sqlerr(__FILE__, __LINE__);
		if (mysql_num_rows($res) == 0)
			print($lang_log['text_funbox_empty']);
		else
		{

		//echo $pagertop;
			while ($arr = mysql_fetch_assoc($res)){
				$date = gettime($arr['added'],true,false);
			print("<table width=940 border=1 cellspacing=0 cellpadding=5>\n");
			print("<tr><td class=rowhead width='10%'>".$lang_log['col_title']."</td><td class=rowfollow align=left>".$arr["title"]." - <b>".$arr["status"]."</b></td></tr><tr><td class=rowhead width='10%'>".$lang_log['col_date']."</td><td class=rowfollow align=left>".$date."</td></tr><tr><td class=rowhead width='10%'>".$lang_log['col_body']."</td><td class=rowfollow align=left>".format_comment($arr["body"],false,false,true)."</td></tr>\n");
			print("</table><br />");
			}
			echo $pagerbottom;
		}

		print($lang_log['time_zone_note']);
		stdfoot();
		die;
		break;
	case "news":
		stdhead($lang_log['head_news']);
		$query = mysql_real_escape_string(trim($_GET["query"]));
		$search = $_GET["search"];
		if($query){
			switch ($search){
				case "title": $wherea=" WHERE title LIKE '%$query%' "; break;
				case "body": $wherea=" WHERE body LIKE '%$query%' "; break;
				case "both": $wherea=" WHERE body LIKE '%$query%' or title LIKE '%$query%'" ; break;
				}
			$addparam = "search=".rawurlencode($search)."&query=".rawurlencode($query)."&";
		}
		else{
		$wherea= "";
		$addparam = "";
		}
		logmenu("news");
		$opt = array (title => $lang_log['text_title'], body => $lang_log['text_body'], both => $lang_log['text_both']);
		searchtable($lang_log['text_search_news'], 'news', $opt);

		$res = sql_query("SELECT COUNT(*) FROM news".$wherea);
		$row = mysql_fetch_array($res);
		$count = $row[0];

		$perpage = 20;

		list($pagertop, $pagerbottom, $limit) = pager($perpage, $count, "deletelog.php?action=news&".$addparam);
		$res = sql_query("SELECT id, added, body, title FROM news $wherea ORDER BY added DESC $limit") or sqlerr(__FILE__, __LINE__);
		if (mysql_num_rows($res) == 0)
		print($lang_log['text_news_empty']);
		else
		{

		//echo $pagertop;
			while ($arr = mysql_fetch_assoc($res)){
				$date = gettime($arr['added'],true,false);
			print("<table width=940 border=1 cellspacing=0 cellpadding=5>\n");
			print("<tr><td class=rowhead width='10%'>".$lang_log['col_title']."</td><td class=rowfollow align=left>".$arr["title"]."</td></tr><tr><td class=rowhead width='10%'>".$lang_log['col_date']."</td><td class=rowfollow align=left>".$date."</td></tr><tr><td class=rowhead width='10%'>".$lang_log['col_body']."</td><td class=rowfollow align=left>".format_comment($arr["body"],false,false,true)."</td></tr>\n");
			print("</table><br />");
			}
			echo $pagerbottom;
		}

		print($lang_log['time_zone_note']);

		stdfoot();
		die;
		break;
	case "poll":
		$do = $_GET["do"];
  		$pollid = $_GET["pollid"];
  		$returnto = htmlspecialchars($_GET["returnto"]);
  		if ($do == "delete")
  		{
  		if (get_user_class() < $chrmanage_class)
  		stderr($lang_log['std_error'], $lang_log['std_permission_denied']);

  		int_check($pollid,true);

   		$sure = $_GET["sure"];
   		if (!$sure)
    		stderr($lang_log['std_delete_poll'],$lang_log['std_delete_poll_confirmation'] .
    		"<a href=?action=poll&do=delete&pollid=$pollid&returnto=$returnto&sure=1>".$lang_log['std_here_if_sure'],false);

		sql_query("DELETE FROM pollanswers WHERE pollid = $pollid") or sqlerr();
		sql_query("DELETE FROM polls WHERE id = $pollid") or sqlerr();
		$Cache->delete_value('current_poll_content');
		$Cache->delete_value('current_poll_result', true);
		if ($returnto == "main")
			header("Location: " . get_protocol_prefix() . "$BASEURL");
		else
			header("Location: " . get_protocol_prefix() . "$BASEURL/deletelog.php?action=poll&deleted=1");
		die;
  }

  $rows = sql_query("SELECT COUNT(*) FROM polls") or sqlerr();
  $row = mysql_fetch_row($rows);
  $pollcount = $row[0];
  if ($pollcount == 0)
  	stderr($lang_log['std_sorry'], $lang_log['std_no_polls']);
  $polls = sql_query("SELECT * FROM polls ORDER BY id DESC LIMIT 1," . ($pollcount - 1 )) or sqlerr();
  stdhead($lang_log['head_previous_polls']);
  		logmenu("poll");
  		print("<table border=1 cellspacing=0 width=940 cellpadding=5>\n");
		//print("<tr><td class=colhead align=center>".$lang_log['text_previous_polls']."</td></tr>\n");

    function srt($a,$b)
    {
      if ($a[0] > $b[0]) return -1;
      if ($a[0] < $b[0]) return 1;
      return 0;
    }

  while ($poll = mysql_fetch_assoc($polls))
  {
    $o = array($poll["option0"], $poll["option1"], $poll["option2"], $poll["option3"], $poll["option4"],
    $poll["option5"], $poll["option6"], $poll["option7"], $poll["option8"], $poll["option9"],
    $poll["option10"], $poll["option11"], $poll["option12"], $poll["option13"], $poll["option14"],
    $poll["option15"], $poll["option16"], $poll["option17"], $poll["option18"], $poll["option19"]);

    print("<tr><td align=center>\n");

    print("<p class=sub>");
    $added = gettime($poll['added'], true, false);

    print($added);

    if (get_user_class() >= $pollmanage_class)
    {
    	print(" - [<a href=makepoll.php?action=edit&pollid=$poll[id]><b>".$lang_log['text_edit']."</b></a>]\n");
			print(" - [<a href=?action=poll&do=delete&pollid=$poll[id]><b>".$lang_log['text_delete']."</b></a>]\n");
		}

		print("<a name=$poll[id]>");

		print("</p>\n");

    print("<table class=main border=1 cellspacing=0 cellpadding=5><tr><td class=text>\n");

    print("<p align=center><b>" . $poll["question"] . "</b></p>");

    $pollanswers = sql_query("SELECT selection FROM pollanswers WHERE pollid=" . $poll["id"] . " AND  selection < 20") or sqlerr();

    $tvotes = mysql_num_rows($pollanswers);

    $vs = array(); // count for each option ([0]..[19])
    $os = array(); // votes and options: array(array(123, "Option 1"), array(45, "Option 2"))

    // Count votes
    while ($pollanswer = mysql_fetch_row($pollanswers))
      $vs[$pollanswer[0]] += 1;

    reset($o);
    for ($i = 0; $i < count($o); ++$i)
      if ($o[$i])
        $os[$i] = array($vs[$i], $o[$i]);

    print("<table width=100% class=main border=0 cellspacing=0 cellpadding=0>\n");
    $i = 0;
    while ($a = $os[$i])
    {
	  	if ($tvotes > 0)
	  		$p = round($a[0] / $tvotes * 100);
	  	else
				$p = 0;
      print("<tr><td class=embedded>" . $a[1] . "&nbsp;&nbsp;</td><td class=\"embedded nowrap\">" .
        "<img class=\"bar_end\" src=\"pic/trans.gif\" alt=\"\" /><img class=\"unsltbar\" src=\"pic/trans.gif\" style=\"width: " . ($p * 3) . "px\" /><img class=\"bar_end\" src=\"pic/trans.gif\" alt=\"\" /> $p%</td></tr>\n");
      ++$i;
    }
    print("</table>\n");
	$tvotes = number_format($tvotes);
    print("<p align=center>".$lang_log['text_votes']."$tvotes</p>\n");

    print("</td></tr></table><br /><br />\n");

    print("</p></td></tr>\n");
}
	print("</table>");
		print($lang_log['time_zone_note']);
		stdfoot();
		die;
		break;
	}
}

?>
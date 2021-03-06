<?php	
require "include/bittorrent.php";	
dbconn();	
loggedinorreturn();		
parked();
checkPrivilegePanel();
$bucketpath = "$bitbucket";
if (get_user_class() >= UC_MODERATOR) {
  $delete = $_GET["delete"];
  if (is_valid_id($delete)) {
    $r = sql_query("SELECT name,owner FROM bitbucket WHERE id=".mysql_real_escape_string($delete)) or sqlerr(__FILE__, __LINE__);			
    if (mysql_num_rows($r) == 1) {				
      $a = mysql_fetch_assoc($r);				
      if (get_user_class() >= UC_MODERATOR || $a["owner"] == $CURUSER["id"]) {					
	sql_query("DELETE FROM bitbucket WHERE id=".mysql_real_escape_string($delete)) or sqlerr(__FILE__, __LINE__);			
	if (!unlink("$bucketpath/$a[name]"))						
	  stderr("Warning", "Unable to unlink file: <b>$a[name]</b>. You should contact an administrator about this error.",false);
      }
    }
  }
}	
stdhead("BitBucket Log");	
$count = get_row_count('bitbucket');
$perpage = 10;		
list($pagertop, $pagerbottom, $limit) = pager($perpage, $count, $_SERVER["PHP_SELF"] . "?out=" . $_GET["out"] . "&" );	
print("<h1>BitBucket Log</h1>\n");	
print("Total Images Stored: $count");	
echo $pagertop;	
$res = sql_query("SELECT * FROM bitbucket ORDER BY added DESC $limit") or sqlerr(__FILE__, __LINE__);	
if (mysql_num_rows($res) == 0) {	
  print("<b>BitBucket Log is empty</b>\n");
}
else {		
  print("<table align='center' border='0' cellspacing='0' cellpadding='5'>\n");		
  while ($arr = mysql_fetch_assoc($res)) {
    $date = substr($arr['added'], 0, strpos($arr['added'], " "));			
    $time = substr($arr['added'], strpos($arr['added'], " ") + 1);			
    $name = $arr["name"];
    list($width, $height, $type, $attr) = getimagesize("$bitbucket/$name");								 				
    $url = str_replace(" ", "%20", htmlspecialchars("$bitbucket/$name"));
    print("<tr>");
    print("<td><center><a href=$url><img src=\"".$url."\" border=0 onLoad='SetSize(this, 400)'></a></center>");			
    print("Uploaded by:  " . get_username($arr[owner]). "<br />");
    print("(#$arr[id]) Filename: $name ($width&nbsp;x&nbsp;$height)");			
    if (get_user_class() >= UC_MODERATOR) {				
      print(" <b><a href=?delete=$arr[id]>[Delete]</a></b><br />");
    }
    print("Added: $date $time");			
    print("</tr>");		
  }		
  print("</table>");	
}	
echo $pagerbottom;	
stdfoot();


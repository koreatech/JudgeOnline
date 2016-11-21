<?php
require_once("./include/db_info.inc.php");

function checkmail() {
  $sql="SELECT count(1)
        FROM `mail`
        WHERE new_mail=1 AND `to_user`='".$_SESSION['user_id']."'";
  $result=mysql_query($sql);
  if(!$result) return false;
  $row=mysql_fetch_row($result);
  $retmsg=$row[0];
  mysql_free_result($result);
  return $retmsg;
}

if (isset($_SESSION['user_id'])){
  $sid=$_SESSION['user_id'];
  $mail=checkmail();
}

?>

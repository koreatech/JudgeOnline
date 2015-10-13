<!DOCTYPE html>
<html lang="ko">
<head>
  <title><?php echo $view_title?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <?php require_once("./template/".$OJ_TEMPLATE."/include-header.php");?>
</head>
<body>
  <?php require_once("oj-header.php");?>
  <div class="container">
    <form action=login.php method=post>
      <center>
        <table width=480 algin=center>
          <tr><td width=240><?php echo $MSG_USER_ID?>:<td width=200><input style="height:24px" name="user_id" type="text" size=20></tr>
          <tr><td><?php echo $MSG_PASSWORD?>:<td><input name="password" type="password" size=20 style="height:24px"></tr>
<?php if($OJ_VCODE){?>
          <tr><td><?php echo $MSG_VCODE?>:</td><td><input name="vcode" size=4 type=text style="height:24px"><img alt="click to change" src="vcode.php?<?php echo rand();?>" onclick="this.src='vcode.php?<?php echo rand();?>#'+Math.random()">*</td></tr>
<?php }?>
          <tr><td colspan=3><input name="submit" type="submit" size=10 value="Submit">
            <a href="lostpassword.php">Lost Password</a>
          </tr>
        </table>
      <center>
    </form>
  </div>
  <div class="container">
    <?php require_once("oj-footer.php");?>
  </div><!--end foot-->
</body>
</html>


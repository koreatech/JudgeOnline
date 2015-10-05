<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $OJ_HOME?>">Judge</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
      <li <?php if ($navigation_tab == "problem") echo "class='active'"?>><a href="problemset.php"><?php echo $MSG_PROBLEMS?></a></li>
      <li <?php if ($navigation_tab == "status") echo "class='active'"?>><a href="status.php"><?php echo $MSG_STATUS?></a></li>
      <li <?php if ($navigation_tab == "ranklist") echo "class='active'"?>><a href="ranklist.php"><?php echo $MSG_RANKLIST?></a></li>
      <li <?php if ($navigation_tab == "contest") echo "class='active'"?>><a href="contest.php"><?php echo $MSG_CONTEST?></a></li>
      <li <?php if ($navigation_tab == "faqs") echo "class='active'"?>><a href="faqs.php"><?php echo $MSG_FAQ?></a></li>
      <!-- <?php echo $url;?>
Login 정보를 이쁘게 보여주는 작업은 찬찬히 합시다
<?php if (isset($_SESSION['user_id'])) {
      $session_user_id = $_SESSION['user_id']; ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $session_user_id;?> <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="./modifypage.php"><?php echo $MSG_USERINFO;?></li>
          <li>pw</li>
        </ul>
      </li>
<?php } else { ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mastojun <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li></li>
          <li>pw</li>
          <li class="divider"></li>
          <li>Logout</li>
        </ul>
      </li>
<?php } ?>
-->
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="panel panel-default">
  <div class="pannel-body">
    <script src="include/profile.php?<?php echo rand();?>" ></script>
  </div>
</div><!--end subhead-->
</div>

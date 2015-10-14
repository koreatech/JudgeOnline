<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
  <?php require_once("./template/".$OJ_TEMPLATE."/include-header.php");?>
</head>
<body>
<?php
  $navigation_tab = "status";
  require_once("oj-header.php");
?>
<div class="container">
  <div id='source'></div>
  <pre id='errtxt' class="alert alert-error"><?php echo $view_reinfo?></pre>
</div>
<?php require_once("oj-footer.php");?>
<?php require_once("include-bottom.php");?>
<script>
 $("#source").load("showsource.php?id=<?php echo $id?> #main");
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php echo $view_title?></title>
  <?php require_once("./template/".$OJ_TEMPLATE."/include-header.php");?>
  <link href='highlight/styles/shCore.css' rel='stylesheet' type='text/css'/> 
  <link href='highlight/styles/shThemeDefault.css' rel='stylesheet' type='text/css'/> 
</head>
<body>
<?php require_once("oj-header.php");?>

<div class='container'>

<script src='highlight/scripts/shCore.js' type='text/javascript'></script> 
<script src='highlight/scripts/shBrushCpp.js' type='text/javascript'></script> 
<script src='highlight/scripts/shBrushCss.js' type='text/javascript'></script> 
<script src='highlight/scripts/shBrushJava.js' type='text/javascript'></script> 
<script src='highlight/scripts/shBrushDelphi.js' type='text/javascript'></script> 
<script src='highlight/scripts/shBrushRuby.js' type='text/javascript'></script> 
<script src='highlight/scripts/shBrushBash.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushPython.js' type='text/javascript'></script> 
<script src='highlight/scripts/shBrushPhp.js' type='text/javascript'></script> 
<script src='highlight/scripts/shBrushPerl.js' type='text/javascript'></script> 
<script src='highlight/scripts/shBrushCSharp.js' type='text/javascript'></script> 
<script src='highlight/scripts/shBrushVb.js' type='text/javascript'></script>

<script language='javascript'> 
SyntaxHighlighter.config.bloggerMode = false;
SyntaxHighlighter.config.clipboardSwf = 'highlight/scripts/clipboard.swf';
SyntaxHighlighter.all();
</script>
<?php

if ($ok==true){
  if($view_user_id!=$_SESSION['user_id'])
    echo "<a href='mail.php?to_user=$view_user_id&title=$MSG_SUBMIT $id'>Mail the auther</a>";
  $brush=strtolower($language_name[$slanguage]);
  if ($brush=='pascal') $brush='delphi';
  if ($brush=='obj-c') $brush='c';
  if ($brush=='freebasic') $brush='vb';
  echo "<pre class=\"brush:".$brush.";\" id='main'>";
  ob_start();
  echo "/**************************************************************\n";
  echo "\tProblem: $sproblem_id\n\tUser: $suser_id\n";
  echo "\tLanguage: ".$language_name[$slanguage]."\n\tResult: ".$judge_result[$sresult]."\n";
  if ($sresult==4){
    echo "\tTime:".$stime." ms\n";
    echo "\tMemory:".$smemory." kb\n";
  }
  echo "****************************************************************/\n\n";
  $auth=ob_get_contents();
  ob_end_clean();

  echo htmlspecialchars(str_replace("\n\r","\n",$view_source))."\n".$auth."</pre>";

}else{

  echo "I am sorry, You could not view this code!";
}
?>
</div><!--end main-->
<?php require_once("oj-footer.php");?>
<?php require_once("include-bottom.php");?>
</body>
</html>

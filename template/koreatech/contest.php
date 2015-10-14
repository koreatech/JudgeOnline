<!DOCTYPE html>
<html lang="ko">
<head>
  <title><?php echo $view_title?></title>
  <?php require_once("./template/$OJ_TEMPLATE/include-header.php");?>
</head>
<body>
<?php
$navigation_tab = "problem";
require_once("./template/$OJ_TEMPLATE/contest-header.php");
?>
<div class="container">
  <div class="row text-center">
    <h3>Contest <?php echo $view_cid?> - <?php echo $view_title ?></h3>
    <p><?php echo $view_description?></p>
    <br>Start Time: <font color=#993399><?php echo $view_start_time?></font>
    End Time: <font color=#993399><?php echo $view_end_time?></font><br>
    Current Time: <font color=#993399><span id=nowdate > <?php echo date("Y-m-d H:i:s")?></span></font>
    Status:<?php
if ($now>$end_time) 
  echo "<span class=red>Ended</span>";
else if ($now<$start_time) 
  echo "<span class=red>Not Started</span>";
else 
  echo "<span class=red>Running</span>";
?>&nbsp;&nbsp;
<?php
if ($view_private=='0') 
  echo "<span class=blue>Public</font>";
else 
  echo "&nbsp;&nbsp;<span class=red>Private</font>"; 
?>
        <br>
  </div>

  <table id='problemset' class='table table-bordered'>
    <thead>
      <tr>
        <td width='5'></td>
        <td ><?php echo $MSG_PROBLEM_ID?></td>
        <td width='60%'><?php echo $MSG_TITLE?></td>
        <td ><?php echo $MSG_AC?></td>
        <td ><?php echo $MSG_SUBMIT?></td>
      </tr>
    </thead>
    <tbody>
<?php 
$PID = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$cnt=0;
foreach($view_problemset as $row){
  if ($cnt) 
    echo "<tr class='oddrow'>";
  else
    echo "<tr class='evenrow'>";
  foreach($row as $table_cell){
    echo "<td>";
    echo "\t".$table_cell;
    echo "</td>";
  }

  echo "</tr>";

  $cnt=1-$cnt;
}
?>
    </tbody>
  </table>
</div><!--end wrapper-->
</div>
<div class="container">
<?php require_once("oj-footer.php");?>
<?php require_once("include-bottom.php");?>
</div>
</body>
<script>
var diff=new Date("<?php echo date("Y/m/d H:i:s")?>").getTime()-new Date().getTime();
//alert(diff);
function clock()
{
  var x,h,m,s,n,xingqi,y,mon,d;
  var x = new Date(new Date().getTime()+diff);
  y = x.getYear()+1900;
  if (y>3000) y-=1900;
  mon = x.getMonth()+1;
  d = x.getDate();
  xingqi = x.getDay();
  h=x.getHours();
  m=x.getMinutes();
  s=x.getSeconds();

  n=y+"-"+mon+"-"+d+" "+(h>=10?h:"0"+h)+":"+(m>=10?m:"0"+m)+":"+(s>=10?s:"0"+s);
  //alert(n);
  document.getElementById('nowdate').innerHTML=n;
  setTimeout("clock()",1000);
    } 
    clock();
    </script>

</html>

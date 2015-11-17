<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
  <?php require_once("./template/".$OJ_TEMPLATE."/include-header.php");?>
</head>
<body>
<?php
  $navigation_tab = "contest";
  require_once("oj-header.php");
?>

<div class="container">

<div class="col-md-12 text-center">
<h2>대회 목록<br><small>서버시간: <span id="nowdate"></span></small></h2>
</div>
<div class="col-md-12"><div class="table-responsive">
<table class="table table-hover table-striped">
  <thead>
  <tr class=toprow align=center>
    <th width=10%>ID</th>
    <th width=50%>Name</th>
    <th width=30%>Status</th>
    <th width=10%>Private</th>
  </tr>
  </thead>
	<tbody>
			<?php 
			foreach($view_contest as $row){
				echo "<tr>";
				foreach($row as $table_cell){
					echo "<td>";
					echo "\t".$table_cell;
					echo "</td>";
				}
				echo "</tr>";
			}
			?>
	</tbody>
</table></div></div>


		
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
</div>
<?php require_once("oj-footer.php");?>
<?php require_once("include-bottom.php");?>
</body>
</html>

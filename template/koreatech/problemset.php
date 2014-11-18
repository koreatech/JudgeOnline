<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
  <?php require_once("./template/".$OJ_TEMPLATE."/include-header.php");?>
</head>
<body>
<?php
  $navigation_tab = "problem";
  require_once("oj-header.php");
?>

<div class="container">
<nav class="text-center">
  <ul class="pagination pagination-sm">
<?php
    for ($i=1;$i<=$view_total_page;$i++){
      if ($i==$page) echo "<li class='active'><span>".$i."<span class='sr-only'>(current)</span></span></li>";
      else echo "<li><a href='problemset.php?page=".$i."'>".$i."</a></li>";
    }
?>
  </ul>
</nav>

  <table>
  <tr align='center' class='evenrow'><td width='5'></td>
			<td width='50%' colspan='1'>
				<form class=form-search action=problem.php>
					Problem ID<input class="input-small search-query" type='text' name='id' size=5 style="height:24px">
                                  <button class="btn btn-mini" type='submit'  >Go</button></form>
			</td>
			<td width='50%' colspan='1'>
			<form class="form-search">
				<input style="height:24px" type="text" name=search class="input-large search-query">
				<button type="submit" class="btn btn-mini"><?php echo $MSG_SEARCH?></button>
			</form>
			</td></tr>
  </table>

	<table id='problemset' class='table table-striped'>
                <thead>

                          <tr class='toprow'>
                            <th width='5'></th>
                          	<th width='120'  ><A><?php echo $MSG_PROBLEM_ID?></A></th>
                            <th><?php echo $MSG_TITLE?></th>
                            <th width='10%'><?php echo $MSG_SOURCE?></th>
                            <th style="cursor:hand"  width=60 ><?php echo $MSG_AC?></th>
                            <th style="cursor:hand" width=60 ><?php echo $MSG_SUBMIT?></th>
                          </tr>
                </thead>

		  
			<tbody>
			<?php 
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
</div>
<?php require_once("oj-footer.php");?>

	<?php require_once("include-bottom.php");?>
</body>
</html>

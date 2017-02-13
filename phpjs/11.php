<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>JavaScript</h1>
	<ol>
	<script>
		list = new Array("손민식","한고은","박희본");
		document.write("list length="+list.length);
		i = 0;
		while(i < list.length){
			document.write("<li>"+list[i]+"</li>")
			i+=1;
		}
	</script>
	</ol>
	<h1>PHP</h1>
	<ol>
	<?php
		$list = array("one","two","three","four");
		echo "list count=".count($list);
		$i = 0;
		while($i < count($list)){
			echo "<li>".$list[$i]."</li>";
			$i = $i + 1;
		}
	?>
	</ol>
</body>
</html>
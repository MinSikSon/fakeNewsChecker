<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>JavaScript</h1>
	<ol>
		<script>
			list = new Array("hi","hi2","hi3");
			i = 0;
			while(i < 3){
				document.write("<li>"+list[i]+"</li>")
				i+=1;
			}
			document.write(list.length);
		</script>
	</ol>
	<h1>PHP</h1>
	<ol>
		<?php
			$list = array("one","two","three");
			$i = 0;
			while($i < 3){
				echo "<li>".$list[$i]."</li>";
				$i = $i + 1;
				echo count($list);
			}
		?>
	</ol>
</body>
</html>
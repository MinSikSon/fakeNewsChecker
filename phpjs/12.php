<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>JavaScript</h1>
	<script>
		function function_name(){
			list = new Array("1", "2", "3");
			count = 0;
			while(count < list.length){
				document.write(list[count]);
				count += 1;
			}
		}

		function_name();
		document.write("hello js");
	</script>
	<h1>PHP</h1>
	<?php
		function function_name(){
			echo "hi php1";
		}

		function_name();
	?>
</body>
</html>
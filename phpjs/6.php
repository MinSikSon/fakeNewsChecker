<?php
	$result=1;
	$result2=0;
?>
<script>
	result=1;
</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>php</h1>
	<?php
		if($result2){
			echo "hi";
		}else{
			echo "go away";
		}
	?>
	<h1>javascript</h1>
	<script>
		if(result){
			document.write("hi");
		}	
	</script>
</body>
</html>
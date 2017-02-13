<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<p1>php</p1>
<?php
	echo "사용자가 입력한 id와 password 값\n";
	$id = $_GET['id'];
	$password = $_GET['password'];
	
	if($password == 1111){
		echo "반가워요 ".$id;
	}else{
		echo "누구세요?";
	}
?>
</body>
</html>
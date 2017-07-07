<?php
	$name = $_GET['username'];
	$arr = array('apple','xiaoming','www','asdfgh');
	$result = in_array($name,$arr);
	if($result){
		echo 'no';
	}else{
		echo 'yes';
	};
?>
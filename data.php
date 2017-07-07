<?php
	//模拟一个数据查看请求是否过来
	//获取json文件的数据
	echo file_get_contents("./student.json");
	//获取get请求所传递的参数
	//echo $_GET["name"];
	//获取post请求所传递的请求
	//echo $_POST["name"];
?>
<?php
header("Content-Type:text/html;charset=utf-8");

//常量参数
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PWD','');
	define('DB_NAME','order');
//第一步.连接mysql服务器
$conn=@mysql_connect(DB_HOST,DB_USER,DB_PWD)or die("数据库错误");
//第二步.选择指定的数据库，设定字符集
mysql_select_db(DB_NAME,$conn)or die("数据库错误");

?>
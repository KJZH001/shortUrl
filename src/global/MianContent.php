<?php
/*
这里是本源码的核心内容处理程序
用于判断内容的输出
*/

//获取从链接中传来的参数
//获取类型
$class=$_REQUEST["class"];
//获取id参数
$id=$_REQUEST["id"];

//判断类型
//如果是index，返回主页
if($class=="index")
{
	require("./my/php/mian.php");
}
//如果是url，返回转跳url.php
else if($class=="url")
{
	require("./my/php/url.php");
}
//如果是post，返回post.php
else if($class=="post")
{
	require("./my/php/post.php");
}
//如果无赋值，返回404
else
{
	require("./my/php/404.php");
}
?>
<?php
$name=$_POST['name'];//接收前台传递的id值
require_once 'DAOPDO.class.php';
$configs = array(
    "dbname"=>"test"
);
$dao=DAOPDO::getSingleton($configs);

$sql="insert graph values(null,'$name')";
$res=$dao->query($sql);//执行的结果是布尔值 true/false
if($res){
    echo "添加数据成功!";
}else{
    echo "添加数据失败!";
}



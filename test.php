<?php
var_dump('测试写入');
$con = mysqli_connect('localhost','root','root','demo','3306');

if(!$con){
    die('连接失败:'.mysqli_error($con));
}
mysqli_query($con,'set names utf8');
mysqli_query($con,'SET AUTOCOMMIT=0');
mysqli_begin_trasaction($con);

if(!mysqli_query($con,"insert into api_list(name,ver_type,serv_name,is_verify,is_stop,remark,is_delete) values('a','none','user_serv',0,0,'55',0)")){
    mysqli_query($con,'ROLLBACK');
}

if(!mysqli_query($con,"insert into api_list(name,ver_type,serv_name,is_verify,is_stop,remark,is_delete) values('b','none','user_serv',0,0,'55',0)")){
    mysqli_query($con,'ROLLBACK');
}

mysqli_commit($con);
mysqli_close($con);
$res = [];
$arr = [0,1,2,3,4,5,6,8];
foreach ($arr as $v){
    $res[] = $v;
}
var_dump($res);
var_dump(888888);
for ($i=0;$i<10;$i++){
    if(count($arr)<=$i) {
        break;
    }else{
        var_dump($arr[$i]);
    }
}
echo 454;

$arr1 = [5,8,54,2,3,6,4,1,5,2,6,9,8,12,5];
$tem = null;
for ($i=0;$i<count($arr1); $i++){
    for ($j=0;$j<$i;$j++){
        if($arr1[$i]>$arr1[$j]){
            $tem = $arr1[$i];
            $arr1[$i] = $arr1[$j];
            $arr1[$j] = $tem;
        }
    }
}
var_dump($arr1);

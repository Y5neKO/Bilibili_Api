//获取B站粉丝API并赋值
$data = file_get_contents("https://api.bilibili.com/x/relation/stat?vmid=35199034");
$arr = json_decode($data,true);

//调用代码
<?php echo($arr["data"]["follower"]);?>

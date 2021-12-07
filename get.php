<?php




class arg {
    /// <summary>
          /// 是否报错
          /// </summary>
           var $HasError;
          /// <summary>
          /// 错误原因
          /// </summary>
           var $ErrorMsg;
          /// <summary>
          /// 返回数据
          /// </summary>
           var $Value;
  }


//echo 'Hello ' . htmlspecialchars($_GET["Id"]) . '!';

$runoob = new arg();

$tm =time();

exit(json_encode($tm ));


return;
@$arr = array(
     

    'HasError'=>htmlspecialchars(time()),
    'ErrorMsg'=>"false",
    'Value'=>htmlspecialchars(time()),
   
);

exit(json_encode($arr));
 




?>
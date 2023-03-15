<?php




/**
 * @author goer 
 * @version 2023-3-15 1
 * @param Number $code 状态码
 * @param String $msg  获取信息
 * @param Array  $data 数据
 * @return Json  返回数据
 */
function res_json($code=0,$msg='获取失败',$data=null){

    $data = [
        'code'   => $code,
        'msg'    => $msg,
        'data'   => $data,
    ];

    echo json_encode($data);
    exit;
}
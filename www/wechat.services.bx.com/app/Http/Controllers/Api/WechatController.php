<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WechatController extends Controller{

    /**
     * 验证服务器
     * @author  jianwei
     */
    function test(Request $request){
        return $request->get("echostr");
    }





}

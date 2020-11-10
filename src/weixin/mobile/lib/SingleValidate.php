<?php
namespace panthsoni\tengxun\weixin\mobile\lib;

use panthsoni\tengxun\common\CommonValidate;

class SingleValidate extends CommonValidate
{
    protected $rule = [
        'appid|公众号appid' => 'length:0,50',
        'secret|公众号密钥secret' => 'length:0,50',
        'code|授权code'=>'length:0,50',
        'refresh_token|刷新refresh_token' => 'length:0,100',
        'openid|用户openid' => 'length:0,32',
        'access_token|access_token' => 'length:0,100',
        'touser|touser，发送用户openid' => 'length:0,32',
        'template_id|模板template_id' => 'length:0,50',
        'url|跳转链接url' => 'length:0,255',
        'scene|订阅场景值scene' => 'length:0,50',
        'title|标题title' => 'length:0,50',
        'data|数据data' => 'length:0,255',
    ];

    public $scene = [
        'get_access_token' => ['appid'=>'require|length:0,50','secret'=>'require|length:0,50','code'=>'require|length:0,50'],
        'refresh_access_token' => ['appid'=>'require|length:0,50','refresh_token'=>'require|length:0,100'],
        'check_access_token' => ['access_token'=>'require|length:0,100','openid'=>'require|length:0,32'],
        'get_user_info' => ['access_token'=>'require|length:0,100','openid'=>'require|length:0,32'],
        'get_sdk_ticket' => ['access_token'=>'require|length:0,100'],
        'subscribe' => ['touser'=>'require|length:0,32','template_id'=>'require|length:0,50','scene'=>'require|length:0,50','title'=>'require|length:0,50','data'=>'require|length:0,255','url'],
    ];
}
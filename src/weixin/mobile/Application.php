<?php
namespace panthsoni\tengxun\weixin\mobile;

use panthsoni\tengxun\weixin\mobile\lib\ApplicationClient;

class Application
{
    /**
     * 基础配置
     * @var array
     */
    protected static $options = [];

    /**
     * 初始化
     * Application constructor.
     * @param array $options
     */
    public function __construct(array $options=[]){
        self::$options = array_merge(self::$options,$options);
    }

    /**
     * 初始化
     * @param array $options
     * @return ApplicationClient
     */
    public static function init(array $options=[]){
        self::$options = array_merge(self::$options,$options);
        return new ApplicationClient(self::$options);
    }
}
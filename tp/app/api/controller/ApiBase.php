<?php

namespace app\api\controller;

use app\BaseController;
use think\exception\HttpResponseException;

/**
 * ApiBase相当于 API 模块下公共控制器
 *
 * Class ApiBase
 * @package app\api\controller
 */
class ApiBase extends BaseController
{
    /**
     * tp6中的构造方法，类似于 __construct 构造方法，区别在于此方法可以自动调用父类 initialize 方法
     */
    protected function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
    }

    /**
     * 因为子类中无法直接调用 show 方法，所以需要在父类中重写 show 方法
     * @param mixed ...$args
     */
    public function show(...$args)
    {
        // throw 手动抛出异常
        throw new HttpResponseException(show(...$args));
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: xpwsg
 * Date: 2018/12/19
 * Time: 10:06
 */

namespace app\home\controller;


class Test extends Base
{
    public function index()
    {
        return $this->fetch();
    }
}
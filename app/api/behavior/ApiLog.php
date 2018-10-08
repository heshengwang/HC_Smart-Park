<?php/** * Created by PhpStorm. * User: xpwsg * Date: 2018/9/27 * Time: 9:13 */namespace app\api\behavior;use think\Db;use think\Request;class ApiLog{    public function run(&$param)    {        $request = Request::instance();        $requestData = $request->param();        foreach ($requestData as &$v) {            if (is_string($v)) {                $v = mb_substr($v, 0, 200);            }        }        $data = [            'uid' => session('hid') ?: 9999,            'ip' => $request->ip(),            'location' => implode(' ', \Ip::find($request->ip())),            'os' => getOs(),            'browser' => getBroswer(),            'url' => $request->url(),            'module' => $request->module(),            'controller' => $request->controller(),            'action' => $request->action(),            'method' => $request->isAjax() ? 'Ajax' : ($request->isPjax() ? 'Pjax' : $request->method()),            'data' => serialize($requestData),            'otime' => time(),        ];            Db::name('web_log')->insert($data);    }};
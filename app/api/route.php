<?php

/**
 * Project:www.hc.gov
 * Editor:xpwsg
 * Time:22:00
 * Date:2018/8/28
 */

use think\Route;

/**
 * 标 识       请求类型   路由规则         对应操作方法
 *  index        GET        test            index
 * create        GET        test/create        create
 * save        POST    test            save
 * read        GET        test/:id        read
 * edit        GET        test/:id/edit    edit
 * update        PUT        test/:id        update
 * delete        DELETE    test/:id        delete
 */
//首页接口
Route::resource('index', 'api/v1.index');
//新闻接口
Route::resource('news', 'api/v1.news');
//轮播图接口
Route::resource('banner', 'api/v1.banner');
//短信验证码
Route::resource('sms', 'api/v1.sms');
//企业模块
Route::resource('enterprise','api/v1.enterprise');
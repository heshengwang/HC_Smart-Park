<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:72:"/www/wwwroot/www.hacyy.com/app/admin/view/enterprise/enterprise_add.html";i:1540342571;s:58:"/www/wwwroot/www.hacyy.com/app/admin/view/public/base.html";i:1540776139;s:60:"/www/wwwroot/www.hacyy.com/app/admin/view/public/header.html";i:1541036748;s:62:"/www/wwwroot/www.hacyy.com/app/admin/view/public/left_nav.html";i:1539759652;s:62:"/www/wwwroot/www.hacyy.com/app/admin/view/public/head_nav.html";i:1539575931;s:60:"/www/wwwroot/www.hacyy.com/app/admin/view/public/footer.html";i:1539660495;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>海创智慧园区后台管理</title>

    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="Bookmark" href="/favicon.ico">
    <link rel="Shortcut Icon" href="/favicon.ico"/>
    <!-- bootstrap & fontawesome必须的css -->
    <link rel="stylesheet" href="/public/ace/css/bootstrap.min.css"/>
    <!--本地文件-->
    <!--<link rel="stylesheet" href="/public/font-awesome/css/font-awesome.min.css" />-->
    <!--CDN文件-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/datetimepicker/bootstrap-datetimepicker.css"/>
    <!-- 此页插件css -->

    <!-- ace的css -->
    <link rel="stylesheet" href="/public/ace/css/bootstrap-duallistbox.css">
    <link rel="stylesheet" href="/public/ace/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="/public/ace/css/select2.css">
    <link rel="stylesheet" href="/public/ace/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>

    <!-- IE版本小于9的ace的css -->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/public/ace/css/ace-part2.min.css" class="ace-main-stylesheet"/>
    <![endif]-->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/public/ace/css/ace-ie.css"/>
    <![endif]-->

    <link rel="stylesheet" href="/public/yfcmf/yfcmf.css"/>
    <link rel="stylesheet" href="/public/yfcmf/my.css"/>
    <!-- 此页相关css -->

    <!--引入自己修改的样式文件-->
    <link href="/public/font-awesome/css/iconfont.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/ace/css/change.css">

    <!-- ace设置处理的js -->
    <script src="/public/ace/js/ace-extra.js"></script>
    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="/public/others/html5shiv.min.js"></script>
    <script src="/public/others/respond.min.js"></script>
    <![endif]-->
    <!-- 引入基本的js -->
    <script type="text/javascript">
        var admin_ueditor_handle = "<?php echo url('admin/Ueditor/upload'); ?>";
        var admin_ueditor_lang = 'zh-cn';
    </script>
    <!--[if !IE]> -->
    <script src="/public/others/jquery.min-2.2.1.js"></script>
    <!-- <![endif]-->
    <!-- 如果为IE,则引入jq1.12.1 -->
    <!--[if IE]>
    <script src="/public/others/jquery.min-1.12.1.js"></script>
    <![endif]-->

    <!-- 如果为触屏,则引入jquery.mobile -->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='/public/others/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="/public/others/bootstrap.min.js"></script>



</head>

<body class="no-skin">
<!-- 导航栏开始 -->
<div id="navbar" class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-container" id="navbar-container">
        <!-- 导航左侧按钮手机样式开始 -->
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button><!-- 导航左侧按钮手机样式结束 -->

        <!-- 导航左侧正常样式开始 -->
        <div class="navbar-header pull-left">
            <!-- logo -->
            <a href="<?php echo url('admin/Index/index'); ?>" class="navbar-brand" title="管理后台首页">
                <img src="/public/img/logo.png" alt="留创园logo">
            </a>
        </div><!-- 导航左侧正常样式结束 -->

        <!-- 导航栏开始 -->
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <!-- 用户菜单开始 -->
                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo get_imgurl($admin_avatar,1); ?>"
                             alt="<?php echo session('admin_auth.admin_username'); ?>"/>
                        <span class="user-info">
									<small>欢迎</small>
									<?php echo session('admin_auth.admin_username'); ?>
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">


                        <li>
                            <a href="<?php echo url('admin/Login/logout'); ?>" data-info="你确定要退出吗？" class="confirm-btn">
                                <i class="ace-icon fa fa-power-off"></i>
                                注销
                            </a>
                        </li>
                    </ul>
                </li><!-- 用户菜单结束 -->
            </ul>
        </div><!-- 导航栏结束 -->
    </div><!-- 导航栏容器结束 -->
</div><!-- 导航栏结束 -->


<!-- 整个页面内容开始 -->
<div class="main-container container" id="main-container">
	<!-- 菜单栏开始 -->
	<div id="sidebar" class="sidebar responsive sidebar-fixed ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {
        }
    </script>
    <!--菜单顶部四个快捷按钮-->
    <!--<div class="sidebar-shortcuts" id="sidebar-shortcuts">
        &lt;!&ndash;左侧顶端按钮&ndash;&gt;
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <a class="btn btn-success" href="<?php echo url('admin/News/news_list'); ?>" role="button" title="文章列表"><i class="ace-icon fa fa-signal"></i></a>
            <a class="btn btn-info" href="<?php echo url('admin/News/news_add'); ?>" role="button" title="添加文章"><i class="ace-icon fa fa-pencil"></i></a>
            <a class="btn btn-warning" href="<?php echo url('admin/Member/member_list'); ?>" role="button" title="会员列表"><i class="ace-icon fa fa-users"></i></a>
            <a class="btn btn-danger" href="<?php echo url('admin/Sys/sys'); ?>" role="button" title="站点设置"><i class="ace-icon fa fa-cogs"></i></a>
        </div>
        &lt;!&ndash;左侧顶端按钮（手机）&ndash;&gt;
        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <a class="btn btn-success" href="<?php echo url('admin/News/news_list'); ?>" role="button" title="文章列表"></a>
            <a class="btn btn-info" href="<?php echo url('admin/News/news_add'); ?>" role="button" title="添加文章"></a>
            <a class="btn btn-warning" href="<?php echo url('admin/Member/member_list'); ?>" role="button" title="会员列表"></a>
            <a class="btn btn-danger" href="<?php echo url('admin/Sys/sys'); ?>" role="button" title="站点设置"></a>
        </div>
    </div>-->
    <!-- 菜单列表开始 -->
    <ul class="nav nav-list">
        <div class="gap"></div>
        <li>
            <a href="<?php echo url('admin/Index/index'); ?>">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">首页</span>
            </a>
        </li>
        <!--一级菜单遍历开始-->
        <?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): if( count($menus)==0 ) : echo "" ;else: foreach($menus as $key=>$v): if(!empty($v['_child'])): ?>
        <li class="<?php if((count($menus_curr) >= 1) AND ($menus_curr[0] == $v[
        'id'])): ?>open<?php endif; ?>">
        <a href="javascript:void(0);" >
            <i class="menu-icon fa <?php echo $v['css']; ?>"></i>
            <span class="menu-text"><?php echo $v['title']; ?></span>
            <!--<b class="arrow fa fa-angle-down"></b>-->
        </a>
        <ul class="submenu">
            <!--二级菜单遍历开始-->
            <?php if(is_array($v['_child']) || $v['_child'] instanceof \think\Collection || $v['_child'] instanceof \think\Paginator): if( count($v['_child'])==0 ) : echo "" ;else: foreach($v['_child'] as $key=>$vv): if(!empty($vv['_child'])): ?>
            <li class="<?php if((count($menus_curr) >= 2) AND ($menus_curr[1] == $vv[
            'id'])): ?>active open<?php endif; ?>">
            <a href="javascript:void(0);" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>
                <?php echo $vv['title']; ?>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <!--<b class="arrow"></b>-->
            <ul class="submenu">
                <!--三级菜单遍历开始-->
                <?php if(is_array($vv['_child']) || $vv['_child'] instanceof \think\Collection || $vv['_child'] instanceof \think\Paginator): if( count($vv['_child'])==0 ) : echo "" ;else: foreach($vv['_child'] as $key=>$vvv): ?>
                <li class="<?php if((count($menus_curr) >= 3) AND ($menus_curr[2] == $vvv[
                'id'])): ?>active<?php endif; ?>">
                <a href="<?php echo url($vvv['name']); ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    <?php echo $vvv['title']; ?>
                </a>
                <b class="arrow"></b>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?><!--三级菜单遍历结束-->
            </ul>
            </li>
            <?php else: ?>
            <li class="<?php if((count($menus_curr) >= 2) AND ($menus_curr[1] == $vv[
            'id'])): ?>active<?php endif; ?>">
            <a href="<?php echo url($vv['name']); ?>">
                <i class="menu-icon fa fa-caret-right"></i>
                <?php echo $vv['title']; ?>
            </a>
            <!--<b class="arrow"></b>-->
            </li>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?><!--二级菜单遍历结束-->
        </ul>
        </li>
        <?php else: ?>
        <li class="<?php if((count($menus_curr) >= 1) AND ($menus_curr[0] == $v[
        'id'])): ?>active<?php endif; ?>">
        <a href="<?php echo url($v['name']); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            <?php echo $v['title']; ?>
        </a>
        <!--<b class="arrow"></b>-->
        </li>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?><!--一级菜单遍历结束-->
    </ul><!-- 菜单列表结束 -->

    <!-- 菜单栏缩进开始 -->
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
           data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div><!-- 菜单栏缩进结束 -->
</div>
	<!-- 菜单栏结束 -->

	<!-- 主要内容开始 -->
	<div class="main-content">
		<div class="main-content-inner">
			<!-- 右侧主要内容页顶部标题栏开始 -->
			<div id="sidebar2" class="sidebar h-sidebar navbar-collapse collapse breadcrumbs-fixed" data-sidebar="true"
     data-sidebar-scroll="true" data-sidebar-hover="true">
    <div class="nav-wrap-up pos-rel">
        <div class="nav-wrap">
            <ul class="nav nav-list">
                <div class="gap"></div>
                <h1 class="change-h1"><?php echo $a_name; ?></h1>
                <?php if(($id_curr != '') AND (!empty($menus_child))): if(is_array($menus_child) || $menus_child instanceof \think\Collection || $menus_child instanceof \think\Paginator): if( count($menus_child)==0 ) : echo "" ;else: foreach($menus_child as $key=>$k): endforeach; endif; else: echo "" ;endif; else: ?>
                <li>
                    <a href="<?php echo url('admin/Index/index'); ?>">
                        <o class="font12">欢迎使用海创智慧园区后台系统</o>
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div><!-- /.nav-list -->
</div>
			<!-- 右侧主要内容页顶部标题栏结束 -->
			<!-- 右侧下主要内容开始 -->
			
<div class="page-content">
    <!--主题-->
    <div class="row maintop">
        <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#basic">基本信息</a></li>
                <li><a data-toggle="tab" href="#business">业务信息</a></li>
                <li><a data-toggle="tab" href="#contract">联系信息</a></li>
                <li><a data-toggle="tab" href="#bank">银行信息</a></li>
                <li><a data-toggle="tab" href="#entry">入驻信息</a></li>
            </ul>
            <form class="form-horizontal ajaxForm" name="enterprise_info" method="post"
                  action="<?php echo url('admin/Enterprise/Enterprise_runadd'); ?>">
                <div class="tab-content">
                    <div id="basic" class="tab-pane fade in active">
                        <!--基本信息开始-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 企业名称： </label>
                            <div class="col-sm-9">
                                <input type="text" name="enterprise_list_name" id="enterprise_list_name" value=""
                                       placeholder="" class="col-xs-10 col-sm-5" required/>
                                <span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必填</span>
                                <span class="help-inline col-xs-12 col-sm-7">
												<span class="middle" id="res0"></span>
											</span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group" id="pic_list">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 企业LOGO </label>
                            <div class="col-sm-9">
                                <a href="javascript:;" class="file" title="点击选择所要上传的图片">
                                    <input type="file" name="file0" id="file0" multiple="multiple"/>
                                    选择上传文件
                                </a>
                                &nbsp;&nbsp;<a href="javascript:;"
                                               onclick="return backpic('/public/img/no_img.jpg');" title="还原修改前的图片"
                                               class="file">
                                撤销上传
                            </a>
                                <div><img src="/public/img/no_img.jpg" height="70" id="img0"></div>
                            </div>
                        </div>

                        <div class="space-4"></div>

                        <div class="form-group" id="pic_list1">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 营业执照 </label>
                            <div class="col-sm-9">
                                <a href="javascript:;" class="file" title="点击选择所要上传的图片">
                                    <input type="file" name="file1" id="file1" multiple="multiple"/>
                                    选择上传文件
                                </a>
                                &nbsp;&nbsp;<a href="javascript:;"
                                               onclick="return backpic1('/public/img/no_img.jpg');" title="还原修改前的图片"
                                               class="file">
                                撤销上传
                            </a>
                                <div><img src="/public/img/no_img.jpg" height="70" id="img1"></div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                统一社会信用代码： </label>
                            <div class="col-sm-9">
                                <input type="text" name="enterprise_list_credit_code" id="enterprise_list_credit_code"
                                       value="" placeholder="" class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 法定代表人： </label>
                            <div class="col-sm-9">
                                <input type="text" name="enterprise_list_legal_representative"
                                       id="enterprise_list_legal_representative" value="" placeholder=""
                                       class="col-xs-10 col-sm-5" required/>
                                <span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必填</span>
                                <span class="help-inline col-xs-12 col-sm-7">
												<span class="middle" id="res2"></span>
											</span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 法人身份证号： </label>
                            <div class="col-sm-9">
                                <input type="text" name="enterprise_list_legal_id_number"
                                       id="enterprise_list_legal_id_number" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 法人联系方式： </label>
                            <div class="col-sm-9">
                                <input type="text" name="enterprise_list_legal_phone_number"
                                       id="enterprise_list_legal_phone_number" value="" placeholder=""
                                       class="col-xs-10 col-sm-5" required/>
                                <span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必填</span>
                                <span class="help-inline col-xs-12 col-sm-7">
												<span class="middle" id="res4"></span>
											</span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 成立日期： </label>
                            <div class="col-sm-9">
                                <input type="date" name="enterprise_list_legal_setup_day"
                                       id="enterprise_list_legal_setup_day" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 注册资金： </label>
                            <div class="col-sm-9">
                                <input type="text" name="enterprise_list_legal_registered_capital"
                                       id="enterprise_list_legal_registered_capital" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 注册地址： </label>
                            <div class="col-sm-9">
                                <input type="text" name="enterprise_list_legal_registered_address"
                                       id="enterprise_list_legal_registered_address" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 经营地址： </label>
                            <div class="col-sm-9">
                                <input type="text" name="enterprise_list_legal_business_address"
                                       id="enterprise_list_legal_business_address" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 企业通讯地址： </label>
                            <div class="col-sm-9">
                                <input type="text" name="enterprise_list_legal_book_address"
                                       id="enterprise_list_legal_book_address" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 企业纳税人类型： </label>
                            <div class="col-sm-9">
                                <input type="text" name="enterprise_list_legal_tax_type"
                                       id="enterprise_list_legal_tax_type" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--基本信息结束-->
                    <!--企业业务信息开始-->
                    <div id="business" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                企业登记注册类型： </label>
                            <div class="col-sm-9">
                                <input type="text" name="registration_type" id="registration_type" value=""
                                       placeholder="" class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 行业类别： </label>
                            <div class="col-sm-9">
                                <input type="text" name="enterprise_category" id="enterprise_category" value=""
                                       placeholder="" class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 企业所属技术领域
                                ： </label>
                            <div class="col-sm-9">
                                <input type="text" name="technical_field" id="technical_field" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                企业网址（非必填）： </label>
                            <div class="col-sm-9">
                                <input type="text" name="website_url" id="website_url" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--企业业务信息结束-->

                    <!--企业联系信息开始-->
                    <div id="contract" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 企业联系地址： </label>
                            <div class="col-sm-9">
                                <input type="text" name="contact_address" id="contact_address" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 邮政编码： </label>
                            <div class="col-sm-9">
                                <input type="text" name="zip_code" id="zip_code" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 联系人： </label>
                            <div class="col-sm-9">
                                <input type="text" name="contact" id="contact" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 联系电话： </label>
                            <div class="col-sm-9">
                                <input type="text" name="contact_number" id="contact_number" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 传真（非必填）： </label>
                            <div class="col-sm-9">
                                <input type="text" name="fax" id="fax" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                    </div>
                    <!--企业联系信息结束-->
                    <!--银行信息开始-->
                    <div id="bank" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 银行名称： </label>
                            <div class="col-sm-9">
                                <input type="text" name="bank_name" id="bank_name" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 开户行： </label>
                            <div class="col-sm-9">
                                <input type="text" name="bank_deposit" id="bank_deposit" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 账号： </label>
                            <div class="col-sm-9">
                                <input type="text" name="account" id="account" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 财务负责人： </label>
                            <div class="col-sm-9">
                                <input type="text" name="financial_office" id="financial_office" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 财务负责人电话： </label>
                            <div class="col-sm-9">
                                <input type="text" name="financial_office_phone" id="financial_office_phone" value=""
                                       placeholder="" class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 邮箱： </label>
                            <div class="col-sm-9">
                                <input type="text" name="financial_office_email" id="financial_office_email" value=""
                                       placeholder="" class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--银行信息结束-->

                    <!--入驻信息开始-->
                    <div id="entry" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 楼宇： </label>
                            <div class="col-sm-9">
                                <select name="phase" id="phase">
                                    <?php foreach($building as $b): ?>
                                    <option value="<?php echo $b['id']; ?>" <?php if($phase == $b['id']): ?>selected<?php endif; ?>><?php echo $b['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 房间号： </label>
                            <div class="col-sm-9">
                                <input type="text" name="room" id="room" value="<?php echo $room; ?>" placeholder="例如:1101|1102"
                                       class="col-xs-10 col-sm-5" required/>
                                <span class="lbl">&nbsp;&nbsp;<span class="red">*</span>多个房间号请以"|"分割</span>
                                <span class="help-inline col-xs-12 col-sm-7">
								<span class="middle" id="res26"></span>
							</span>
                            </div>
                        </div>
                        <div class="space-4"></div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 保证金： </label>
                            <div class="col-sm-9">
                                <input type="text" name="margin" id="margin" value="" placeholder=""
                                       class="col-xs-10 col-sm-5" required/>
                                <span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必填（单位：元）</span>
                                <span class="help-inline col-xs-12 col-sm-7">
								<span class="middle" id="res28"></span>
							</span>
                            </div>
                        </div>
                        <div class="space-4"></div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 服务费支付周期： </label>
                            <div class="col-sm-9">
                                <input type="text" name="rent_period" id="rent_period" value="" placeholder=""
                                       class="col-xs-10 col-sm-5" required/>
                                <span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必填（单位：月）</span>
                                <span class="help-inline col-xs-12 col-sm-7">
								<span class="middle" id="res33"></span>
							</span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 物业费支付周期： </label>
                            <div class="col-sm-9">
                                <input type="text" name="property_period" id="property_period" value="" placeholder=""
                                       class="col-xs-10 col-sm-5" required/>
                                <span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必填（单位：月）</span>
                                <span class="help-inline col-xs-12 col-sm-7">
								<span class="middle" id="res34"></span>
							</span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 空调费支付周期： </label>
                            <div class="col-sm-9">
                                <input type="text" name="air_conditioner_period" id="air_conditioner_period" value=""
                                       placeholder="" class="col-xs-10 col-sm-5" required/>
                                <span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必填（单位：月）</span>
                                <span class="help-inline col-xs-12 col-sm-7">
								<span class="middle" id="res35"></span>
							</span>
                            </div>
                        </div>
                        <div class="space-4"></div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 费用生效日期： </label>
                            <div class="col-sm-9">
                                <input type="date" name="signed_day" id="signed_day" value="" placeholder=""
                                       class="col-xs-10 col-sm-5" required/>
                                <span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必填（格式参考：2018/01/01）</span>
                                <span class="help-inline col-xs-12 col-sm-7">
								<span class="middle" id="res37"></span>
							</span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 支付时间： </label>
                            <div class="col-sm-9">
                                <input type="date" name="pay_time" id="pay_time" value="" placeholder=""
                                       class="col-xs-10 col-sm-5" required/>
                                <span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必填（格式参考：2018/01/01）</span>
                                <span class="help-inline col-xs-12 col-sm-7">
								<span class="middle" id="res38"></span>
							</span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <link href="/public/ppy/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
                        <script src="/public/ppy/js/fileinput.js" type="text/javascript"></script>
                        <script src="/public/ppy/js/fileinput_locale_zh.js" type="text/javascript"></script>
                        <div class="form-group" id="pic_many_list">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 租房合同 </label>
                            <div class="col-sm-10 col-sm-offset-2" style="padding-top:5px;">
                                <input id="file-5" name="pic_many[]" type="file" class="file" multiple
                                       data-preview-file-type="any" data-upload-url="#" data-preview-file-icon=""><br/>
                                <textarea name="pic_many_content" class="col-xs-12 col-sm-12" id="pic_many_content"
                                          placeholder="选择多图时请一次性选择。多图对应文字说明，例如： 图片一说明 | 图片二说明 | 图片三说明    每个文字说明以 | 分割"></textarea>
                            </div>
                        </div>
                        <div class="space-4"></div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 签订人： </label>
                            <div class="col-sm-9">
                                <input type="text" name="signer" id="signer" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 操作人： </label>
                            <div class="col-sm-9">
                                <input type="text" name="operator" id="operator" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 开票人： </label>
                            <div class="col-sm-9">
                                <input type="text" name="drawer" id="drawer" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 确认人： </label>
                            <div class="col-sm-9">
                                <input type="text" name="confirmer" id="confirmer" value="" placeholder=""
                                       class="col-xs-10 col-sm-5"/>
                                </span>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="clearfix form-actions">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button class="btn btn-info" type="submit">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    保存
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                    重置
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--入驻信息结束-->
                </div>

            </form>
        </div>
    </div>
</div><!-- /.page-content -->

			<!-- 右侧下主要内容结束 -->
		</div>
	</div><!-- 主要内容结束 -->
	<!-- 页脚开始 -->
	<div class="footer">
	<div class="footer-inner">
		<div class="footer-content">
			<span class="bigger-120">
				<span class="blue bolder">海创智慧园区</span>
				后台管理系统 &copy; 2016-<?php echo date('Y'); ?>
			</span>
		</div>
	</div>
</div>

	<!-- 页脚结束 -->
	<!-- 返回顶端开始 -->
	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
	<!-- 返回顶端结束 -->
</div><!-- 整个页面内结束 -->

<!-- ace的js,可以通过打包生成,避免引入文件数多 -->
<script src="/public/ace/js/ace.js"></script>
<script src="/public/ace/js/ace.min.js"></script>
<script src="/public/ace/js/bootstrap-duallistbox/jquery.bootstrap-duallistbox.js"></script>
<script src="/public/ace/js/jquery.raty.js"></script>
<script src="/public/ace/js/select2.js"></script>
<script src="/public/ace/js/typeahead.jquery.js"></script>
<!-- jquery.form、layer、yfcmf的js -->
<script src="/public/others/jquery.form.js"></script>
<script src="/public/others/maxlength.js"></script>
<script src="/public/layer/layer_zh-cn.js"></script>
<script src="/public/datePicker/bootstrap-datepicker.js"></script>
<script src="/public/datetimepicker/bootstrap-datetimepicker.js"></script>
<script src="/public/datetimepicker/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script src="/public/yfcmf/yfcmf.js?<?php echo time(); ?>"></script>

<!--导出表格js文件-->
<script src="https://cdn.bootcss.com/FileSaver.js/2014-11-29/FileSaver.min.js"></script>
<script src="https://cdn.bootcss.com/xlsx/0.14.0/xlsx.core.min.js"></script>
<script src="https://cdn.bootcss.com/TableExport/5.0.2/js/tableexport.min.js"></script>
<!-- 此页相关插件js -->

<!-- 与此页相关的js -->
</body>
</html>

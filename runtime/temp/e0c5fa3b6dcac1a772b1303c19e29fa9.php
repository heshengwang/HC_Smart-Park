<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:58:"/www/wwwroot/www.hacyy.com/app/admin/view/index/index.html";i:1550459221;s:58:"/www/wwwroot/www.hacyy.com/app/admin/view/public/base.html";i:1540776139;s:60:"/www/wwwroot/www.hacyy.com/app/admin/view/public/header.html";i:1541036748;s:62:"/www/wwwroot/www.hacyy.com/app/admin/view/public/left_nav.html";i:1539759652;s:62:"/www/wwwroot/www.hacyy.com/app/admin/view/public/head_nav.html";i:1539575931;s:60:"/www/wwwroot/www.hacyy.com/app/admin/view/public/footer.html";i:1539660495;}*/ ?>
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
			
<style>
    .select-builds{
        position: relative;
    }

    #buildName{
        position: absolute;
        top: 0;
        left: 140px;
    }
    #buildNumber{
        position: absolute;
        top: 0;
        left: 240px;
    }


    .gap {
        height: 10px;
    }
    .index-build-plane{
        height: 580px;
    }
    .common-room{
        position: relative;
    }

    .index-room-plane{
        position: absolute;
        top: 30px;
        right: 0;
        z-index: 999;
    }
    .index-room-container{
        position: absolute;
        top: 397px;
        right: 0;
        z-index: 999;
    }
    .legend{
        margin-bottom: 5px;
    }
    .index-bulid-list1{
        margin-top: 150px;
    }

</style>
<div class="page-content">
    <div class="row maintop">
        <div class="col-xs-12">
            <!-- 提示 -->
            <?php if(empty($isChrome) || (($isChrome instanceof \think\Collection || $isChrome instanceof \think\Paginator ) && $isChrome->isEmpty())): ?>
            <div class="alert alert-block alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                <i class="ace-icon fa fa-check green"></i>
                为了您更好的使用本系统，建议屏幕分辨率1280*768以上，并且安装chrome谷歌浏览器 ——— <a href="<?php echo url('admin/Help/soft'); ?>">进入软件下载专区</a>
            </div>
            <?php endif; ?>
        </div>


        <!--首页数据统计-->
        <div class="index-data-container">
            <!--用户统计-->
            <div class="common-count">
                <h3>用户统计</h3>
                <div class="common-number">
                    <a href="<?php echo url('admin/Park/room_list',['status'=>1]); ?>" target="_blank">
                        <h3><?php echo $rented_room_number; ?></h3>
                    </a>
                    <h5>已租房源</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/Enterprise/enterprise_list'); ?>" target="_blank">
                        <h3><?php echo $enterprise_number; ?></h3>
                    </a>
                    <h5>入驻企业数</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/member/member_list'); ?>" target="_blank">
                        <h3><?php echo $user_number; ?></h3>
                    </a>
                    <h5>注册用户数</h5>
                </div>
            </div>

            <!--待处理统计-->
            <div class="common-count">
                <h3>待处理统计</h3>
                <div class="common-number">
                    <a href="<?php echo url('admin/service/meeting_room_order_list'); ?>" target="_blank">
                        <h3><?php echo $meeting_room_appoint; ?></h3>
                    </a>
                    <h5>会议室新预订</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/service/repair_list'); ?>" target="_blank">
                        <h3><?php echo $to_repair_number; ?></h3>
                    </a>
                    <h5>物业新报修</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/service/complaints_list'); ?>" target="_blank">
                        <h3><?php echo $to_complains_number; ?></h3>
                    </a>
                    <h5>待处理投诉</h5>
                </div>
            </div>

            <!--发布文案-->
            <div class="common-count">
                <h3>发布文案</h3>
                <div class="common-number">
                    <a href="<?php echo url('admin/news/news_list'); ?>" target="_blank">
                        <h3><?php echo $article_number; ?></h3>
                    </a>
                    <h5>发布文章数</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/news/news_list',['news_columnid'=>3]); ?>" target="_blank">
                        <h3><?php echo $activity_number; ?></h3>
                    </a>
                    <h5>发布活动数</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/announcement/announcement_list'); ?>" target="_blank">
                        <h3><?php echo $announcement_number; ?></h3>
                    </a>
                    <h5>发布公告数</h5>
                </div>
            </div>

            <!--社区统计-->
            <div class="common-count">
                <h3>社区统计</h3>
                <div class="common-number">
                    <a href="<?php echo url('admin/news/news_list',['news_columnid'=>4]); ?>" target="_blank">
                        <h3><?php echo $post_all; ?></h3>
                    </a>
                    <h5>发帖数</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/news/news_list',['news_columnid'=>4,'news_open'=>0]); ?>" target="_blank">
                        <h3><?php echo $post_to_check; ?></h3>
                    </a>
                    <h5>待审核数</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/news/news_list',['news_columnid'=>4]); ?>" target="_blank">
                        <h3><?php echo $post_ok; ?></h3>
                    </a>
                    <h5>成功发帖</h5>
                </div>
            </div>

            <!--房源信息-->
            <div class="common-room">
                <h3>房源信息</h3>
                <div class="common-number">
                    <a href="<?php echo url('admin/park/room_list'); ?>" target="_blank">
                        <h3><?php echo $room_all; ?></h3>
                    </a>
                    <h5>房源总数</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/park/room_list',['status'=>0]); ?>" target="_blank">
                        <h3><?php echo $room_0; ?></h3>
                    </a>
                    <h5>未租</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/park/room_list',['status'=>1]); ?>" target="_blank">
                        <h3><?php echo $rented_room_number; ?></h3>
                    </a>
                    <h5>已租</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/park/room_list',['status'=>2]); ?>" target="_blank">
                        <h3><?php echo $room_2; ?></h3>
                    </a>
                    <h5>已售</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/park/room_list',['status'=>3]); ?>" target="_blank">
                        <h3><?php echo $room_3; ?></h3>
                    </a>
                    <h5>已定</h5>
                </div>
                <div class="common-number">
                    <a href="<?php echo url('admin/park/room_list',['status'=>4]); ?>" target="_blank">
                        <h3><?php echo $room_4; ?></h3>
                    </a>
                    <h5>自留</h5>
                </div>
            </div>

            <!--财务相关-->
            <div class="common-count index-financial">
                <h3>财务相关</h3>
                <div class="common-number index-financial-number">
                    <h5>待缴费</h5>
                    <a href="<?php echo url('admin/financial/bill_list',['status'=>0]); ?>" target="_blank">
                        <h3><?php echo $bill0; ?></h3>
                    </a>
                </div>
                <div class="common-number index-financial-number">
                    <h5>待开票</h5>
                    <a href="<?php echo url('admin/financial/bill_list',['status'=>1]); ?>" target="_blank">
                        <h3><?php echo $bill1; ?></h3>
                    </a>
                </div>
                <div class="common-number index-financial-number">
                    <h5>已完成</h5>
                    <a href="<?php echo url('admin/financial/bill_list',['status'=>2]); ?>" target="_blank">
                        <h3><?php echo $bill2; ?></h3>
                    </a>
                </div>
            </div>

            <!--企业相关-->
            <div class="common-count index-enterprise">
                <h3>企业管理</h3>
                <div class="common-number index-financial-number">
                    <h5>企业总数</h5>
                    <a href="<?php echo url('admin/Enterprise/enterprise_list'); ?>" target="_blank">
                        <h3><?php echo $enterprise_number; ?></h3>
                    </a>
                </div>
                <div class="common-number index-financial-number">
                    <h5>会员总数</h5>
                    <a href="<?php echo url('admin/member/member_list'); ?>" target="_blank">
                        <h3><?php echo $user_number; ?></h3>
                    </a>
                </div>
            </div>

        </div><!--首页数据统计结束-->

        <!--房源平面图-->
        <div class="common-room">
            <div class="select-builds">
                <h3>房源平面图</h3>
                <select id="buildName"></select>
                <select id="buildNumber"></select>
            </div>

            <!--楼宇详细信息-->
            <div class="container-box">
                <!--一期-->
                <!--硅谷国际大厦-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list">
                            <li class="index-floor common-floor-width" data-float="23"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_23.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="22"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="21"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="20"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="19"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="18"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="17"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="16"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="15"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="14"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="13"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="12"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="11"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="10"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="9"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="8"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="7"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="6"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="5"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="4"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_4.png" alt=""></li>
                            <li class="index-floor common-floor-bottom" data-float="3"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_3.png" alt=""></li>
                            <li class="index-floor common-floor-bottom" data-float="2"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_2.png" alt=""></li>
                            <li class="index-floor common-floor-bottom" data-float="1"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_1.png" alt=""></li>
                        </ul>
                    </div>

                </div>
                <!--一期综合楼-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="6">
                                <img src="http://demo.hacyy.com/public/img/floor_img/zhl6.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="5">
                                <img src="http://demo.hacyy.com/public/img/floor_img/zhl5.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="4">
                                <img src="http://demo.hacyy.com/public/img/floor_img/zhl4.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://demo.hacyy.com/public/img/floor_img/zhl3.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://demo.hacyy.com/public/img/floor_img/zhl2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/zhl1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--一期二号厂房-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">

                            <li class="index-floor common-floor-bottom" data-float="5">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf5.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="4">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--一期三号厂房-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">

                            <li class="index-floor common-floor-bottom" data-float="5">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf5.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="4">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--一期四号厂房-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">

                            <li class="index-floor common-floor-bottom" data-float="5">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf5.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="4">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--一期五号厂房-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">

                            <li class="index-floor common-floor-bottom" data-float="5">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf5.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="4">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/cf1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>

                <!--二期-->
                <!--海创空间大厦-->
                <div class="build">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list">
                            <li class="index-floor common-floor-width" data-float="23"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_23.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="22"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="21"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="20"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="19"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="18"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="17"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="16"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="15"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="14"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="13"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="12"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="11"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="10"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="9"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="8"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="7"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="6"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="5"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="4"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_4.png" alt=""></li>
                            <li class="index-floor common-floor-bottom" data-float="3"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_3.png" alt=""></li>
                            <li class="index-floor common-floor-bottom" data-float="2"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_2.png" alt=""></li>
                            <li class="index-floor common-floor-bottom" data-float="1"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_1.png" alt=""></li>
                        </ul>
                    </div>

                </div>
                <!--梧桐苑商业群房-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list ">
                            <li class="index-floor common-floor-width" data-float="23"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_23.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="22"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="21"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="20"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="19"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="18"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="17"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="16"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="15"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="14"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="13"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="12"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="11"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="10"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="9"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="8"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="7"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="6"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="5"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_5.png" alt=""></li>
                            <li class="index-floor common-floor-width" data-float="4"><img
                                    src="http://www.hacyy.com/public/img/floor_img/floor_4.png" alt=""></li>
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://www.hacyy.com/public/img/floor_img/floor_3.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://www.hacyy.com/public/img/floor_img/floor_2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://www.hacyy.com/public/img/floor_img/floor_1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--孵化楼A-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">

                            <li class="index-floor common-floor-bottom" data-float="4">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl4.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl3.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--孵化楼B-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="4">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl4.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl3.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--孵化楼C-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="5">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl5.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="4">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl4.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl3.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--孵化楼D-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="5">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl5.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="4">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl4.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl3.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/fhl1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>


                <!--海天教具-->
                <!--1号-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--2号-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--3号-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--4号-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--5号-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--6号-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--7号-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--综合楼北-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht3.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>
                <!--综合楼南-->
                <div class="build" style="display:none;">
                    <div class="index-build-plane">
                        <h3><span class="index-room-floor"></span>F</h3>
                        <ul class="index-bulid-list index-bulid-list1">
                            <li class="index-floor common-floor-bottom" data-float="3">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht3.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="2">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht2.png" alt="">
                            </li>
                            <li class="index-floor common-floor-bottom" data-float="1">
                                <img src="http://demo.hacyy.com/public/img/floor_img/ht1.png" alt="">
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

            <!--公用的svg图-->
            <div class="index-room-plane">
                <svg id="边" xmlns="http://www.w3.org/2000/svg" width="650" height="248" viewBox="0 0 1621 620">
                        <defs>
                            <style>
                                .cls-1, .cls-2 {
                                    fill: #585b7a;
                                }

                                .cls-2 {
                                    fill-rule: evenodd;
                                }
                            </style>
                        </defs>
                        <g id="组_6" data-name="组 6">
                            <rect id="矩形_1" data-name="矩形 1" class="cls-1" x="199" y="510" width="1180"
                                  height="6"/>
                            <rect id="矩形_3_拷贝_14" data-name="矩形 3 拷贝 14" class="cls-1" x="192" y="93" width="6"
                                  height="19"/>
                            <rect id="矩形_3_拷贝_18" data-name="矩形 3 拷贝 18" class="cls-1" x="1373" y="475"
                                  width="6" height="41"/>
                            <rect id="矩形_3_拷贝_20" data-name="矩形 3 拷贝 20" class="cls-1" x="193" y="475" width="6"
                                  height="41"/>
                            <rect id="矩形_3_拷贝_21" data-name="矩形 3 拷贝 21" class="cls-1" x="91" y="475"
                                  width="102" height="6"/>
                            <rect id="矩形_3_拷贝_8" data-name="矩形 3 拷贝 8" class="cls-1" x="1475" y="117" width="6"
                                  height="360"/>
                            <rect id="矩形_3_拷贝_5" data-name="矩形 3 拷贝 5" class="cls-1" x="91" y="106" width="6"
                                  height="370"/>
                            <rect id="矩形_3_拷贝_17" data-name="矩形 3 拷贝 17" class="cls-1" x="1382" y="94" width="6"
                                  height="24"/>
                            <rect id="矩形_3_拷贝_9" data-name="矩形 3 拷贝 9" class="cls-1" x="1387" y="112" width="94"
                                  height="6"/>
                            <rect id="矩形_3_拷贝_13" data-name="矩形 3 拷贝 13" class="cls-1" x="94" y="106" width="98"
                                  height="6"/>
                            <rect id="矩形_3_拷贝_11" data-name="矩形 3 拷贝 11" class="cls-1" x="197" y="93"
                                  width="1191" height="6"/>
                            <rect id="矩形_3_拷贝_7" data-name="矩形 3 拷贝 7" class="cls-1" x="1377" y="475"
                                  width="104" height="6"/>
                            <rect id="矩形_3_拷贝_23" data-name="矩形 3 拷贝 23" class="cls-1" x="1353" y="315"
                                  width="124" height="4"/>
                            <rect id="矩形_3_拷贝_30" data-name="矩形 3 拷贝 30" class="cls-1" x="1356" y="270"
                                  width="120" height="4"/>
                            <rect id="矩形_4_拷贝_4" data-name="矩形 4 拷贝 4" class="cls-1" x="92" y="466" width="14"
                                  height="14"/>
                            <rect id="矩形_4_拷贝_5" data-name="矩形 4 拷贝 5" class="cls-1" x="91" y="111" width="14"
                                  height="14"/>
                            <rect id="矩形_4" data-name="矩形 4" class="cls-1" x="1467" y="257" width="14"
                                  height="14"/>
                            <rect id="矩形_4_拷贝" data-name="矩形 4 拷贝" class="cls-1" x="1467" y="112" width="14"
                                  height="14"/>
                            <rect id="矩形_4_拷贝-2" data-name="矩形 4 拷贝" class="cls-1" x="1466" y="319" width="14"
                                  height="14"/>
                            <rect id="矩形_4_拷贝_3" data-name="矩形 4 拷贝 3" class="cls-1" x="1467" y="465" width="14"
                                  height="14"/>
                        </g>
                        <rect id="矩形_4_拷贝_6" data-name="矩形 4 拷贝 6" class="cls-1" x="91" y="318" width="14"
                              height="14"/>
                        <rect id="矩形_4_拷贝_15" data-name="矩形 4 拷贝 15" class="cls-1" x="91" y="257" width="14"
                              height="14"/>
                        <rect id="矩形_3_拷贝_4" data-name="矩形 3 拷贝 4" class="cls-1" x="93" y="315" width="132"
                              height="4"/>
                        <rect id="矩形_3_拷贝_6" data-name="矩形 3 拷贝 6" class="cls-1" x="302" y="315" width="134"
                              height="4"/>
                        <rect id="矩形_3_拷贝_38" data-name="矩形 3 拷贝 38" class="cls-1" x="813" y="271" width="225"
                              height="4"/>
                        <rect id="矩形_3_拷贝_55" data-name="矩形 3 拷贝 55" class="cls-1" x="306" y="271" width="130"
                              height="4"/>
                        <rect id="矩形_3_拷贝_56" data-name="矩形 3 拷贝 56" class="cls-1" x="94" y="271" width="130"
                              height="4"/>
                        <rect id="矩形_3_拷贝_57" data-name="矩形 3 拷贝 57" class="cls-1" x="251" y="271" width="26"
                              height="4"/>
                        <rect id="矩形_3_拷贝_10" data-name="矩形 3 拷贝 10" class="cls-1" x="455" y="315" width="146"
                              height="4"/>
                        <rect id="矩形_3_拷贝_12" data-name="矩形 3 拷贝 12" class="cls-1" x="634" y="315" width="155"
                              height="4"/>
                        <rect id="矩形_3_拷贝_15" data-name="矩形 3 拷贝 15" class="cls-1" x="821" y="315" width="157"
                              height="4"/>
                        <rect id="矩形_3_拷贝_16" data-name="矩形 3 拷贝 16" class="cls-1" x="1002" y="315" width="114"
                              height="4"/>
                        <rect id="矩形_3_拷贝_19" data-name="矩形 3 拷贝 19" class="cls-1" x="1182" y="315" width="135"
                              height="4"/>
                        <g id="组_4" data-name="组 4">
                            <rect id="矩形_4_拷贝_7" data-name="矩形 4 拷贝 7" class="cls-1" x="256" y="319" width="14"
                                  height="14"/>
                            <rect id="矩形_4_拷贝_8" data-name="矩形 4 拷贝 8" class="cls-1" x="256" y="466" width="14"
                                  height="14"/>
                            <rect id="矩形_3_拷贝_22" data-name="矩形 3 拷贝 22" class="cls-1" x="261" y="326" width="4"
                                  height="184"/>
                        </g>
                        <g id="组_4_拷贝" data-name="组 4 拷贝">
                            <rect id="矩形_4_拷贝_7-2" data-name="矩形 4 拷贝 7" class="cls-1" x="257" y="257"
                                  width="14" height="14"/>
                            <rect id="矩形_4_拷贝_8-2" data-name="矩形 4 拷贝 8" class="cls-1" x="257" y="111"
                                  width="14" height="14"/>
                            <rect id="矩形_3_拷贝_22-2" data-name="矩形 3 拷贝 22" class="cls-1" x="262" y="98"
                                  width="4" height="166"/>
                        </g>
                        <g id="组_4_拷贝_2" data-name="组 4 拷贝 2">
                            <rect id="矩形_4_拷贝_7-3" data-name="矩形 4 拷贝 7" class="cls-1" x="422" y="257"
                                  width="14" height="14"/>
                            <rect id="矩形_4_拷贝_8-3" data-name="矩形 4 拷贝 8" class="cls-1" x="422" y="111"
                                  width="14" height="14"/>
                            <rect id="矩形_3_拷贝_22-3" data-name="矩形 3 拷贝 22" class="cls-1" x="427" y="98"
                                  width="4" height="166"/>
                        </g>
                        <rect id="矩形_4_拷贝_9" data-name="矩形 4 拷贝 9" class="cls-1" x="422" y="319" width="14"
                              height="14"/>
                        <rect id="矩形_4_拷贝_9-2" data-name="矩形 4 拷贝 9" class="cls-1" x="422" y="466" width="14"
                              height="14"/>
                        <rect id="矩形_3_拷贝_24" data-name="矩形 3 拷贝 24" class="cls-1" x="427" y="326" width="4"
                              height="184"/>
                        <rect id="矩形_4_拷贝_10" data-name="矩形 4 拷贝 10" class="cls-1" x="587" y="319" width="14"
                              height="14"/>
                        <rect id="矩形_4_拷贝_10-2" data-name="矩形 4 拷贝 10" class="cls-1" x="587" y="466" width="14"
                              height="14"/>
                        <rect id="矩形_3_拷贝_25" data-name="矩形 3 拷贝 25" class="cls-1" x="592" y="326" width="4"
                              height="184"/>
                        <rect id="矩形_4_拷贝_11" data-name="矩形 4 拷贝 11" class="cls-1" x="775" y="319" width="14"
                              height="14"/>
                        <rect id="矩形_4_拷贝_11-2" data-name="矩形 4 拷贝 11" class="cls-1" x="775" y="466" width="14"
                              height="14"/>
                        <rect id="矩形_3_拷贝_26" data-name="矩形 3 拷贝 26" class="cls-1" x="780" y="326" width="4"
                              height="184"/>
                        <rect id="矩形_4_拷贝_12" data-name="矩形 4 拷贝 12" class="cls-1" x="964" y="319" width="14"
                              height="14"/>
                        <rect id="矩形_4_拷贝_12-2" data-name="矩形 4 拷贝 12" class="cls-1" x="964" y="466" width="14"
                              height="14"/>
                        <rect id="矩形_3_拷贝_27" data-name="矩形 3 拷贝 27" class="cls-1" x="969" y="326" width="4"
                              height="184"/>
                        <rect id="矩形_4_拷贝_13" data-name="矩形 4 拷贝 13" class="cls-1" x="1137" y="319" width="14"
                              height="14"/>
                        <rect id="矩形_4_拷贝_13-2" data-name="矩形 4 拷贝 13" class="cls-1" x="1137" y="466" width="14"
                              height="14"/>
                        <rect id="矩形_3_拷贝_28" data-name="矩形 3 拷贝 28" class="cls-1" x="1142" y="326" width="4"
                              height="184"/>
                        <rect id="矩形_4_拷贝_14" data-name="矩形 4 拷贝 14" class="cls-1" x="1303" y="319" width="14"
                              height="14"/>
                        <rect id="矩形_4_拷贝_14-2" data-name="矩形 4 拷贝 14" class="cls-1" x="1303" y="466" width="14"
                              height="14"/>
                        <rect id="矩形_3_拷贝_29" data-name="矩形 3 拷贝 29" class="cls-1" x="1308" y="326" width="4"
                              height="184"/>
                        <rect id="矩形_3_拷贝_40" data-name="矩形 3 拷贝 40" class="cls-1" x="720" y="271" width="64"
                              height="4"/>
                        <rect id="矩形_3_拷贝_41" data-name="矩形 3 拷贝 41" class="cls-1" x="720" y="112" width="64"
                              height="4"/>
                        <rect id="矩形_3_拷贝_42" data-name="矩形 3 拷贝 42" class="cls-1" x="720" y="165" width="64"
                              height="2"/>
                        <rect id="矩形_3_拷贝_43" data-name="矩形 3 拷贝 43" class="cls-1" x="720" y="211" width="64"
                              height="2"/>
                        <rect id="矩形_3_拷贝_39" data-name="矩形 3 拷贝 39" class="cls-1" x="780" y="99" width="4"
                              height="174"/>
                        <rect id="矩形_3_拷贝_44" data-name="矩形 3 拷贝 44" class="cls-1" x="720" y="112" width="4"
                              height="20"/>
                        <rect id="矩形_3_拷贝_45" data-name="矩形 3 拷贝 45" class="cls-1" x="720" y="154" width="4"
                              height="24"/>
                        <rect id="矩形_3_拷贝_46" data-name="矩形 3 拷贝 46" class="cls-1" x="720" y="200" width="4"
                              height="34"/>
                        <rect id="矩形_3_拷贝_47" data-name="矩形 3 拷贝 47" class="cls-1" x="720" y="246" width="4"
                              height="29"/>
                        <rect id="矩形_3_拷贝_48" data-name="矩形 3 拷贝 48" class="cls-1" x="590" y="271" width="64"
                              height="4"/>
                        <rect id="矩形_3_拷贝_51" data-name="矩形 3 拷贝 51" class="cls-1" x="507" y="271" width="85"
                              height="4"/>
                        <rect id="矩形_3_拷贝_52" data-name="矩形 3 拷贝 52" class="cls-1" x="467" y="211" width="56"
                              height="4"/>
                        <rect id="矩形_3_拷贝_54" data-name="矩形 3 拷贝 54" class="cls-1" x="455" y="271" width="26"
                              height="4"/>
                        <rect id="矩形_3_拷贝_53" data-name="矩形 3 拷贝 53" class="cls-1" x="467" y="187" width="4"
                              height="84"/>
                        <rect id="矩形_3_拷贝_48-2" data-name="矩形 3 拷贝 48" class="cls-1" x="467" y="112" width="187"
                              height="4"/>
                        <rect id="矩形_3_拷贝_48-3" data-name="矩形 3 拷贝 48" class="cls-1" x="590" y="165" width="64"
                              height="2"/>
                        <rect id="矩形_3_拷贝_48-4" data-name="矩形 3 拷贝 48" class="cls-1" x="590" y="211" width="64"
                              height="2"/>
                        <rect id="矩形_3_拷贝_48-5" data-name="矩形 3 拷贝 48" class="cls-1" x="590" y="99" width="4"
                              height="174"/>
                        <rect id="矩形_3_拷贝_49" data-name="矩形 3 拷贝 49" class="cls-1" x="519" y="115" width="4"
                              height="112"/>
                        <rect id="矩形_3_拷贝_48-6" data-name="矩形 3 拷贝 48" class="cls-1" x="650" y="112" width="4"
                              height="20"/>
                        <rect id="矩形_3_拷贝_48-7" data-name="矩形 3 拷贝 48" class="cls-1" x="650" y="154" width="4"
                              height="24"/>
                        <rect id="矩形_3_拷贝_48-8" data-name="矩形 3 拷贝 48" class="cls-1" x="650" y="200" width="4"
                              height="34"/>
                        <rect id="矩形_3_拷贝_50" data-name="矩形 3 拷贝 50" class="cls-1" x="519" y="255" width="4"
                              height="20"/>
                        <rect id="矩形_3_拷贝_48-9" data-name="矩形 3 拷贝 48" class="cls-1" x="650" y="246" width="4"
                              height="29"/>
                        <g id="组_5" data-name="组 5">
                            <rect id="矩形_5_拷贝_17" data-name="矩形 5 拷贝 17" class="cls-1" x="598" y="178" width="1"
                                  height="24"/>
                            <rect id="矩形_5_拷贝_17-2" data-name="矩形 5 拷贝 17" class="cls-1" x="639" y="174"
                                  width="1" height="32"/>
                            <rect id="矩形_5_拷贝_17-3" data-name="矩形 5 拷贝 17" class="cls-1" x="610" y="174"
                                  width="1" height="32"/>
                            <path id="矩形_5_拷贝_17-4" data-name="矩形 5 拷贝 17" class="cls-2"
                                  d="M610,173h1l29,34h-1Z"/>
                            <path id="矩形_5_拷贝_17-5" data-name="矩形 5 拷贝 17" class="cls-2"
                                  d="M610,206l30-33v1l-30,33v-1Z"/>
                            <rect id="矩形_5_拷贝_17-6" data-name="矩形 5 拷贝 17" class="cls-1" x="604" y="178"
                                  width="1" height="24"/>
                            <rect id="矩形_5_拷贝_17-7" data-name="矩形 5 拷贝 17" class="cls-1" x="598" y="201"
                                  width="6" height="1"/>
                            <rect id="矩形_5_拷贝_17-8" data-name="矩形 5 拷贝 17" class="cls-1" x="598" y="178"
                                  width="6" height="1"/>
                            <rect id="矩形_5_拷贝_17-9" data-name="矩形 5 拷贝 17" class="cls-1" x="610" y="173"
                                  width="30" height="1"/>
                            <rect id="矩形_5_拷贝_17-10" data-name="矩形 5 拷贝 17" class="cls-1" x="610" y="206"
                                  width="30" height="1"/>
                        </g>
                        <g id="组_5_拷贝" data-name="组 5 拷贝">
                            <rect id="矩形_5_拷贝_17-11" data-name="矩形 5 拷贝 17" class="cls-1" x="598" y="130"
                                  width="1" height="24"/>
                            <rect id="矩形_5_拷贝_17-12" data-name="矩形 5 拷贝 17" class="cls-1" x="639" y="126"
                                  width="1" height="32"/>
                            <rect id="矩形_5_拷贝_17-13" data-name="矩形 5 拷贝 17" class="cls-1" x="610" y="126"
                                  width="1" height="32"/>
                            <path id="矩形_5_拷贝_17-14" data-name="矩形 5 拷贝 17" class="cls-2"
                                  d="M610,125h1l29,34h-1Z"/>
                            <path id="矩形_5_拷贝_17-15" data-name="矩形 5 拷贝 17" class="cls-2"
                                  d="M610,158l30-33v1l-30,33v-1Z"/>
                            <rect id="矩形_5_拷贝_17-16" data-name="矩形 5 拷贝 17" class="cls-1" x="604" y="130"
                                  width="1" height="24"/>
                            <rect id="矩形_5_拷贝_17-17" data-name="矩形 5 拷贝 17" class="cls-1" x="598" y="153"
                                  width="6" height="1"/>
                            <rect id="矩形_5_拷贝_17-18" data-name="矩形 5 拷贝 17" class="cls-1" x="598" y="130"
                                  width="6" height="1"/>
                            <rect id="矩形_5_拷贝_17-19" data-name="矩形 5 拷贝 17" class="cls-1" x="610" y="125"
                                  width="30" height="1"/>
                            <rect id="矩形_5_拷贝_17-20" data-name="矩形 5 拷贝 17" class="cls-1" x="610" y="158"
                                  width="30" height="1"/>
                        </g>
                        <g id="组_5_拷贝_2" data-name="组 5 拷贝 2">
                            <rect id="矩形_5_拷贝_17-21" data-name="矩形 5 拷贝 17" class="cls-1" x="770" y="178"
                                  width="1" height="24"/>
                            <rect id="矩形_5_拷贝_17-22" data-name="矩形 5 拷贝 17" class="cls-1" x="729" y="174"
                                  width="1" height="32"/>
                            <rect id="矩形_5_拷贝_17-23" data-name="矩形 5 拷贝 17" class="cls-1" x="758" y="174"
                                  width="1" height="32"/>
                            <path id="矩形_5_拷贝_17-24" data-name="矩形 5 拷贝 17" class="cls-2"
                                  d="M759,173h-1l-29,34h1Z"/>
                            <path id="矩形_5_拷贝_17-25" data-name="矩形 5 拷贝 17" class="cls-2"
                                  d="M759,206l-30-33v1l30,33v-1Z"/>
                            <rect id="矩形_5_拷贝_17-26" data-name="矩形 5 拷贝 17" class="cls-1" x="764" y="178"
                                  width="1" height="24"/>
                            <rect id="矩形_5_拷贝_17-27" data-name="矩形 5 拷贝 17" class="cls-1" x="765" y="201"
                                  width="6" height="1"/>
                            <rect id="矩形_5_拷贝_17-28" data-name="矩形 5 拷贝 17" class="cls-1" x="765" y="178"
                                  width="6" height="1"/>
                            <rect id="矩形_5_拷贝_17-29" data-name="矩形 5 拷贝 17" class="cls-1" x="729" y="173"
                                  width="30" height="1"/>
                            <rect id="矩形_5_拷贝_17-30" data-name="矩形 5 拷贝 17" class="cls-1" x="729" y="206"
                                  width="30" height="1"/>
                        </g>
                        <g id="组_5_拷贝_3" data-name="组 5 拷贝 3">
                            <rect id="矩形_5_拷贝_17-31" data-name="矩形 5 拷贝 17" class="cls-1" x="770" y="130"
                                  width="1" height="24"/>
                            <rect id="矩形_5_拷贝_17-32" data-name="矩形 5 拷贝 17" class="cls-1" x="729" y="126"
                                  width="1" height="32"/>
                            <rect id="矩形_5_拷贝_17-33" data-name="矩形 5 拷贝 17" class="cls-1" x="758" y="126"
                                  width="1" height="32"/>
                            <path id="矩形_5_拷贝_17-34" data-name="矩形 5 拷贝 17" class="cls-2"
                                  d="M759,125h-1l-29,34h1Z"/>
                            <path id="矩形_5_拷贝_17-35" data-name="矩形 5 拷贝 17" class="cls-2"
                                  d="M759,158l-30-33v1l30,33v-1Z"/>
                            <rect id="矩形_5_拷贝_17-36" data-name="矩形 5 拷贝 17" class="cls-1" x="764" y="130"
                                  width="1" height="24"/>
                            <rect id="矩形_5_拷贝_17-37" data-name="矩形 5 拷贝 17" class="cls-1" x="765" y="153"
                                  width="6" height="1"/>
                            <rect id="矩形_5_拷贝_17-38" data-name="矩形 5 拷贝 17" class="cls-1" x="765" y="130"
                                  width="6" height="1"/>
                            <rect id="矩形_5_拷贝_17-39" data-name="矩形 5 拷贝 17" class="cls-1" x="729" y="125"
                                  width="30" height="1"/>
                            <rect id="矩形_5_拷贝_17-40" data-name="矩形 5 拷贝 17" class="cls-1" x="729" y="158"
                                  width="30" height="1"/>
                        </g>
                        <rect id="矩形_3_拷贝_31" data-name="矩形 3 拷贝 31" class="cls-1" x="1237" y="271" width="83"
                              height="4"/>
                        <rect id="矩形_3_拷贝_35" data-name="矩形 3 拷贝 35" class="cls-1" x="1180" y="271" width="18"
                              height="4"/>
                        <rect id="矩形_3_拷贝_36" data-name="矩形 3 拷贝 36" class="cls-1" x="1068" y="271" width="79"
                              height="4"/>
                        <rect id="矩形_3_拷贝_37" data-name="矩形 3 拷贝 37" class="cls-1" x="1143" y="257" width="4"
                              height="18"/>
                        <rect id="矩形_3_拷贝_61" data-name="矩形 3 拷贝 61" class="cls-1" x="1216" y="216" width="76"
                              height="4"/>
                        <rect id="矩形_3_拷贝_62" data-name="矩形 3 拷贝 62" class="cls-1" x="1251" y="94" width="2"
                              height="124"/>
                        <rect id="矩形_3_拷贝_22-4" data-name="矩形 3 拷贝 22" class="cls-1" x="1311" y="97" width="4"
                              height="174"/>
                        <rect id="矩形_3_拷贝_32" data-name="矩形 3 拷贝 32" class="cls-1" x="1194" y="97" width="4"
                              height="178"/>
                        <rect id="矩形_3_拷贝_33" data-name="矩形 3 拷贝 33" class="cls-1" x="1068" y="97" width="4"
                              height="174"/>
                        <rect id="矩形_3_拷贝_34" data-name="矩形 3 拷贝 34" class="cls-1" x="1143" y="97" width="4"
                              height="129"/>
                        <rect id="矩形_4-2" data-name="矩形 4" class="cls-1" x="1306" y="257" width="14"
                              height="14"/>
                        <rect id="矩形_4_拷贝-3" data-name="矩形 4 拷贝" class="cls-1" x="1306" y="111" width="14"
                              height="14"/>
                        <rect id="矩形_5_拷贝_17-41" data-name="矩形 5 拷贝 17" class="cls-1" x="1158" y="110"
                              width="24" height="1"/>
                        <rect id="矩形_5_拷贝_17-42" data-name="矩形 5 拷贝 17" class="cls-1" x="1154" y="151"
                              width="32" height="1"/>
                        <rect id="矩形_5_拷贝_17-43" data-name="矩形 5 拷贝 17" class="cls-1" x="1154" y="122"
                              width="32" height="1"/>
                        <path id="矩形_5_拷贝_17-44" data-name="矩形 5 拷贝 17" class="cls-2"
                              d="M1153,122v1l34,29v-1Z"/>
                        <path id="矩形_5_拷贝_17-45" data-name="矩形 5 拷贝 17" class="cls-2"
                              d="M1186,122l-33,30h1l33-30h-1Z"/>
                        <rect id="矩形_5_拷贝_17-46" data-name="矩形 5 拷贝 17" class="cls-1" x="1158" y="116"
                              width="24" height="1"/>
                        <rect id="矩形_5_拷贝_17-47" data-name="矩形 5 拷贝 17" class="cls-1" x="1181" y="110" width="1"
                              height="6"/>
                        <rect id="矩形_5_拷贝_17-48" data-name="矩形 5 拷贝 17" class="cls-1" x="1158" y="110" width="1"
                              height="6"/>
                        <rect id="矩形_5_拷贝_17-49" data-name="矩形 5 拷贝 17" class="cls-1" x="1153" y="122" width="1"
                              height="30"/>
                        <rect id="矩形_5_拷贝_17-50" data-name="矩形 5 拷贝 17" class="cls-1" x="1186" y="122" width="1"
                              height="30"/>
                        <rect id="矩形_3_拷贝_70" data-name="矩形 3 拷贝 70" class="cls-1" x="468" y="193" width="54"
                              height="4"/>
                        <rect id="矩形_3_拷贝_71" data-name="矩形 3 拷贝 71" class="cls-1" x="467" y="153" width="54"
                              height="4"/>
                        <rect id="矩形_3_拷贝_72" data-name="矩形 3 拷贝 72" class="cls-1" x="467" y="146" width="4"
                              height="18"/>
                        <rect id="矩形_3_拷贝_73" data-name="矩形 3 拷贝 73" class="cls-1" x="467" y="115" width="4"
                              height="10"/>
                        <rect id="矩形_3_拷贝_69" data-name="矩形 3 拷贝 69" class="cls-1" x="1144" y="159" width="11"
                              height="4"/>
                        <rect id="矩形_3_拷贝_76" data-name="矩形 3 拷贝 76" class="cls-1" x="1186" y="159" width="11"
                              height="4"/>
                        <g id="组_20" data-name="组 20">
                            <rect id="矩形_5_拷贝_29" data-name="矩形 5 拷贝 29" class="cls-1" x="529" y="183"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-2" data-name="矩形 5 拷贝 29" class="cls-1" x="529" y="187"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-3" data-name="矩形 5 拷贝 29" class="cls-1" x="529" y="207"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-4" data-name="矩形 5 拷贝 29" class="cls-1" x="529" y="211"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-5" data-name="矩形 5 拷贝 29" class="cls-1" x="529" y="191"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-6" data-name="矩形 5 拷贝 29" class="cls-1" x="529" y="195"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-7" data-name="矩形 5 拷贝 29" class="cls-1" x="529" y="199"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-8" data-name="矩形 5 拷贝 29" class="cls-1" x="529" y="203"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-9" data-name="矩形 5 拷贝 29" class="cls-1" x="559" y="162"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-10" data-name="矩形 5 拷贝 29" class="cls-1" x="559" y="166"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-11" data-name="矩形 5 拷贝 29" class="cls-1" x="559" y="153"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-12" data-name="矩形 5 拷贝 29" class="cls-1" x="559" y="157"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-13" data-name="矩形 5 拷贝 29" class="cls-1" x="559" y="170"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-14" data-name="矩形 5 拷贝 29" class="cls-1" x="559" y="174"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-15" data-name="矩形 5 拷贝 29" class="cls-1" x="559" y="178"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-16" data-name="矩形 5 拷贝 29" class="cls-1" x="559" y="182"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_29-17" data-name="矩形 5 拷贝 29" class="cls-1" x="556" y="147"
                                  width="1" height="71"/>
                            <rect id="矩形_5_拷贝_30" data-name="矩形 5 拷贝 30" class="cls-1" x="1081" y="183"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-2" data-name="矩形 5 拷贝 30" class="cls-1" x="1081" y="187"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-3" data-name="矩形 5 拷贝 30" class="cls-1" x="1081" y="207"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-4" data-name="矩形 5 拷贝 30" class="cls-1" x="1081" y="211"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-5" data-name="矩形 5 拷贝 30" class="cls-1" x="1081" y="191"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-6" data-name="矩形 5 拷贝 30" class="cls-1" x="1081" y="195"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-7" data-name="矩形 5 拷贝 30" class="cls-1" x="1081" y="199"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-8" data-name="矩形 5 拷贝 30" class="cls-1" x="1081" y="203"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-9" data-name="矩形 5 拷贝 30" class="cls-1" x="1111" y="162"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-10" data-name="矩形 5 拷贝 30" class="cls-1" x="1111" y="166"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-11" data-name="矩形 5 拷贝 30" class="cls-1" x="1111" y="153"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-12" data-name="矩形 5 拷贝 30" class="cls-1" x="1111" y="157"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-13" data-name="矩形 5 拷贝 30" class="cls-1" x="1111" y="170"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-14" data-name="矩形 5 拷贝 30" class="cls-1" x="1111" y="174"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-15" data-name="矩形 5 拷贝 30" class="cls-1" x="1111" y="178"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-16" data-name="矩形 5 拷贝 30" class="cls-1" x="1111" y="182"
                                  width="25" height="1"/>
                            <rect id="矩形_5_拷贝_30-17" data-name="矩形 5 拷贝 30" class="cls-1" x="1108" y="147"
                                  width="1" height="71"/>
                        </g>
                    </svg>
            </div>
            <!--状态以及房间详情-->
            <div class="index-room-container">
                <!--状态-->
                <div class="legend">
                <div style="background-color: #8ed8ff;height:20px;width: 20px;display: inline-block;vertical-align: text-top;"></div>
                <span class="legend-text">未租</span>
                <div style="background-color: #dedede;height:20px;width: 20px;display: inline-block;vertical-align: text-top;"></div>
                <span class="legend-text">已租</span>
                <div style="background-color: #ff839a;height:20px;width: 20px;display: inline-block;vertical-align: text-top;"></div>
                <span class="legend-text">已售</span>
                <div style="background-color: #8a95ff;height:20px;width: 20px;display: inline-block;vertical-align: text-top;"></div>
                <span class="legend-text">已定</span>
                <div style="background-color: #ffde83;height:20px;width: 20px;display: inline-block;vertical-align: text-top;"></div>
                <span class="legend-text">自留</span>
            </div>
                <!--室内详情-->
                <div class="index-room-info">
                <h4 class="index-room-info-title"><span class="index-room-num">101</span>室详情</h4>
                <ul class="inline-block index-room-left">
                    <li>楼栋：<span class="index-room-floor">1F</span></li>
                    <li>门牌：<span class="index-room-num">101</span></li>
                    <li>面积：<span class="index-room-squ">92</span>㎡</li>
                </ul>

                <ul class="inline-block index-room-right">
                    <li>项目名称：<span class="index-room-times">海创空间大厦二期</span></li>
                    <li>企业入驻：<span class="index-room-enterprise">暂无企业入驻</span></li>
                    <li>地点：<span><span class="index-room-add">海创空间大厦二期</span><span class="index-room-num">101</span>室</span>
                    </li>
                </ul>
            </div>
            </div>


        </div>


        <!--统计图展示-->
        <div class="common-echarts">
            <div class="common-charts-style" id="index-pie"></div>
            <div class="common-charts-style" id="index-line-room"></div>
            <div class="common-charts-style" id="index-line-enterprise"></div>
            <div class="common-charts-style" id="index-line-user"></div>
            <div class="common-charts-style" id="index-line-floor"></div>
        </div>


    </div>
</div>

<script src="/public/others/jquery.min-1.12.1.js"></script>
<script>

    var timer = null;

    let buildArr = ["一期","二期","海天教具"];
    let numArr = [
    [
    {
        name:"硅谷国际大厦",
        dataIndex:0,
        dataValue:20,
        dataPhase:9
    }, {
        name: "一期综合楼",
        //选择框索引号
        dataIndex: 1,
        //api编号
        dataValue: 21,
        //楼宇id号
        dataPhase: 10
    },{
        name:"二号厂房",
        dataIndex:2,
        dataValue:22,
        dataPhase:11
    },{
        name:"三号厂房",
        dataIndex:3,
        dataValue:10,
        dataPhase:12
    },{
        name:"四号厂房",
        dataIndex:4,
        dataValue:11,
        dataPhase:13
    },{
        name:"五号厂房",
        dataIndex:5,
        dataValue:12,
        dataPhase:14
    }],
    [
        {
            name:"海创空间大厦",
            dataIndex:6,
            dataValue:'',
            dataPhase:2
        },{
            name:"梧桐苑商业群房",
            dataIndex:7,
            dataValue:9,
            dataPhase:31
        },{
            name:"孵化楼A",
            dataIndex:8,
            dataValue:3,
            dataPhase:26
        },{
            name:"孵化楼B",
            dataIndex:9,
            dataValue:4,
            dataPhase:27
        },{
            name:"孵化楼C",
            dataIndex:10,
            dataValue:8,
            dataPhase:33
        },{
            name:"孵化楼D",
            dataIndex:11,
            dataValue:7,
            dataPhase:32
        }],
    [
    {
        name:"一号",
        dataIndex:12,
        dataValue:13,
        dataPhase:16
    },{
        name:"二号",
            dataIndex:13,
            dataValue:14,
            dataPhase:17
    },{
        name:"三号",
        dataIndex:14,
        dataValue:15,
        dataPhase:18
    },{
        name:"四号",
        dataIndex:15,
        dataValue:16,
        dataPhase:19
    },{
        name:"五号",
        dataIndex:16,
        dataValue:17,
        dataPhase:20
    },{
        name:"六号",
        dataIndex:17,
        dataValue:18,
        dataPhase:21
    },{
        name:"七号",
        dataIndex:18,
        dataValue:19,
        dataPhase:22
    },{
        name:"综合楼北",
        dataIndex:19,
        dataValue:24,
        dataPhase:23
    },{
        name:"综合楼南",
        dataIndex:20,
        dataValue:23,
        dataPhase:24
    }]
    ];



    //打开默认时显示海创空间大厦
    (function(){
        $('.index-bulid-list').on('click', '.index-floor', showPlane)
        //鼠标悬浮楼层显示平面和默认信息
        $('.index-bulid-list').on('mouseenter', '.index-floor', function () {
            clearTimeout(timer);
            //从自定义属性中获取楼层号floatNum
            var floatNum = this.getAttribute("data-float");
            //存储当前悬浮楼层
            localStorage.setItem("floatNum", floatNum);

            timer = setTimeout(function () {

                $.ajax({
                    url: '/api/charts.index/build_floor/floor/' + floatNum,
                    type: 'get',
                    dataType: 'json',
                    success: function (data) {
                        console.log(data)

                        //项目名称
                        $('.index-room-times').html(data.data[0].phase);
                        //门牌号
                        $('.index-room-num').html(data.data[0].room_number);
                        //楼层
                        $('.index-room-floor').html(data.data[0].floor);
                        //面积
                        $('.index-room-squ').html(data.data[0].area);
                        //企业入驻
                        $('.index-room-enterprise').html(data.data[0].enterprise_id);
                        //svg图
                        $('.index-room-plane')[0].innerHTML = data.data.svg;

                        //设置企业地点
                        $('.index-room-add').html(data.data[0].phase)

                        //当json中data数大于1时，（即data.data数组里房间的数量+svg）判断每层房间的租借情况
                        if (getJsonLength(data.data) > 2) {
                            //data的长度减去一个svg
                            for (var i = 0; i < (getJsonLength(data.data)-1); i++) {
                                //循环每一个房间
                                var floatInfo = data.data[i];

                                //判断租借状态
                                switch (floatInfo.status) {
                                    //未租状态
                                    case 0:
                                        //根据（拼接的）id,设置内容颜色填充
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#8ed8ff";
                                        break;
                                    //已租状态
                                    case 1:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#dedede";
                                        break;
                                    //已售状态
                                    case 2:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#ff839a";
                                        break;
                                    //已定状态
                                    case 3:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#8a95ff";
                                        break;
                                    //自留
                                    case 4:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#ffde83";
                                        break;
                                }
                            }
                        }
                    }
                })
            }, 100)

        })

        //点击房间，显示房间的详细信息
        $('.index-room-plane').on('click', '.room', showRoom)
        //鼠标悬浮房间，显示房间的详细信息
        $('.index-room-plane').on('mouseenter', '.room', showRoom)
    })();

    //设置工期
    $("#buildName").append(`<option value="0">请选择工期</option>`);

    for(let i = 0;i<buildArr.length;i++){
        $("#buildName").append(`<option value="${i+1}">${buildArr[i]}</option>`);
    }
    //设置楼宇
    $("#buildNumber").append(`<option value="0">请选择楼宇</option>`);
    for(let i = 0;i<numArr.length;i++){
        $("#buildNumber").append(`<option value="${i+1}">${numArr[0][i]}</option>]`);
    }
    $("#buildNumber").empty();
    //select选项改变时的函数
    $("#buildName").change(function(){
        //清空工期栏
        $("#buildNumber").empty();
        //添加默认显示的信息
        $("#buildNumber").append(`<option value="0">请选择楼宇</option>`);
        //获取工期栏当前option的value值
        let proValue = $(this).val();
        //获取楼宇栏当前option的value值
        let curNum = numArr[proValue-1];

        for(let i = 0;i<curNum.length;i++){
            $("#buildNumber").append(`<option value="${i+1}" data-name = "${curNum[i].name}" data-index = "${curNum[i].dataIndex}" data-value="${curNum[i].dataValue}" data-Phase = "${curNum[i].dataPhase}">${curNum[i].name}</option>`)
        }



    });

    //楼宇改变时
    $("#buildNumber").change(function(){

        //取值
        var indexNum = $("#buildNumber option:selected").attr("data-index");
        var phaseNum = $("#buildNumber option:selected").attr("data-phase");
        var valueNum = $("#buildNumber option:selected").attr("data-value");
        var nameValue = $("#buildNumber option:selected").attr("data-name");


        //设置
        $(".index-room-floor").html("1");


        //排他显示楼层
        $(".container-box").children().eq(indexNum).show().siblings().hide();

        //存储值
        localStorage.setItem("indexNum", indexNum);
        localStorage.setItem("phaseNum", phaseNum);
        localStorage.setItem("valueNum", valueNum);

        //选择楼宇时，默认选择第一层楼层
        (function () {
            timer = setTimeout(function () {

                $.ajax({

                    //此api中不包含phase数据
                    url: '/api/charts.index'+valueNum+'/build_floor/floor/1',
                    type: 'get',
                    dataType: 'json',
                    success: function (data) {
                        //设置值

                        $('.index-room-times').html(nameValue);
                        $('.index-room-num').html(data.data[0].room_number);
                        $('.index-room-floor').html(data.data[0].floor);
                        $('.index-room-squ').html(data.data[0].area);
                        $('.index-room-enterprise').html(data.data[0].enterprise_id);
                        //设置企业地点
                        $('.index-room-add').html(nameValue);

                        $('.index-room-plane')[0].innerHTML = data.data.svg;



                        //当json中data数大于1时，判断每层房间的租借情况
                        if (getJsonLength(data.data) > 0 ) {

                            for (let i = 0; i < (getJsonLength(data.data)-1); i++) {
                                //循环每一个房间
                                var floatInfo = data.data[i];

                                let flag = document.getElementById("room_01");

                                if(flag === null){
                                    break;
                                }

                                //判断租借状态
                                switch (floatInfo.status) {
                                    //未租状态
                                    case 0:
                                        //根据（拼接的）id,设置内容颜色填充
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#8ed8ff";
                                        break;
                                    //已租状态
                                    case 1:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#dedede";
                                        break;
                                    //已售状态
                                    case 2:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#ff839a";
                                        break;
                                    //已定状态
                                    case 3:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#8a95ff";
                                        break;
                                    //自留
                                    case 4:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#ffde83";
                                        break;
                                }
                            }
                        }
                    }
                })



            }, 100);

            $('.index-room-plane').on('mouseenter', '.room', showRoom)
        })();


        //点击楼层显示平面和默认信息
        $('.index-bulid-list').on('click', '.index-floor', showPlane)
        //鼠标悬浮楼层显示平面和默认信息
        $('.index-bulid-list').on('mouseenter', '.index-floor', function () {
            clearTimeout(timer);
            //获取当前楼层
            var floatNum = this.getAttribute("data-float");
            //存储当前楼层
            localStorage.setItem("floatNum", floatNum);


            timer = setTimeout(function () {

                $.ajax({
                    url: '/api/charts.index'+valueNum+'/build_floor/floor/' + floatNum,
                    type: 'get',
                    dataType: 'json',
                    success: function (data) {
                        //设置值

                        //console.log(data);

                        $('.index-room-times').html(data.data[0].phase);
                        $('.index-room-num').html(data.data[0].room_number);
                        $('.index-room-floor').html(data.data[0].floor);
                        $('.index-room-squ').html(data.data[0].area);
                        $('.index-room-enterprise').html(data.data[0].enterprise_id);
                        $('.index-room-plane')[0].innerHTML = data.data.svg;
                        //设置企业地点
                        $('.index-room-add').html(data.data[0].phase);



                        //当json中data数大于1时，判断每层房间的租借情况
                        if (getJsonLength(data.data) > 0 ) {


                            for (let i = 0; i < (getJsonLength(data.data)-1); i++) {
                                //循环每一个房间
                                var floatInfo = data.data[i];
                                let flag = document.getElementById("room_01");
                                //用来判断svg图中是否有房间
                                if(flag === null){
                                    break;
                                }

                                //判断租借状态
                                switch (floatInfo.status) {
                                    //未租状态
                                    case 0:
                                        //根据（拼接的）id,设置内容颜色填充
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#8ed8ff";
                                        break;
                                    //已租状态
                                    case 1:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#dedede";
                                        break;
                                    //已售状态
                                    case 2:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#ff839a";
                                        break;
                                    //已定状态
                                    case 3:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#8a95ff";
                                        break;
                                    //自留
                                    case 4:
                                        document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#ffde83";
                                        break;
                                }
                            }
                        }
                    }
                })



            }, 100);


        })


        //鼠标悬浮房间改变状态
        $('.index-room-plane').on('mouseenter', '.room', showRoom);
        //点击房间改变状态
        $('.index-room-plane').on('click', '.room', showRoom);

    })


    //平面显示
    function showPlane() {


        var valueNum = $("#buildNumber option:selected").attr("data-value");

        //存储float楼层数
        var floatNum = this.getAttribute("data-float");


        $.ajax({

            url: '/api/charts.index'+valueNum+'/build_floor/floor/' + floatNum,
            type: 'get',
            dataType: 'json',
            success: function (data) {

                $('.index-room-times').html(data.data[0].phase);
                $('.index-room-num').html(data.data[0].room_number);
                $('.index-room-floor').html(data.data[0].floor);
                $('.index-room-squ').html(data.data[0].area);
                $('.index-room-enterprise').html(data.data[0].enterprise_id);

                //设置企业地点
                $('.index-room-add').html(data.data[0].phase);

                $('.index-room-plane')[0].innerHTML = data.data.svg;

                if (getJsonLength(data.data) > 0 ) {
                    for (let i = 0; i < (getJsonLength(data.data)-1); i++) {
                        var floatInfo = data.data[i];

                        let flag = document.getElementById("room_01");

                        if(flag === null){
                            break;
                        }

                        //根据status状态码判断颜色
                        switch (floatInfo.status) {
                            case 0:
                                document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#8ed8ff";
                                break;
                            case 1:
                                document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#dedede";
                                break;
                            case 2:
                                document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#ff839a";
                                break;
                            case 3:
                                document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#8a95ff";
                                break;
                            case 4:
                                document.getElementById("room_" + getNumReg(floatInfo.room_number)).style.fill = "#ffde83";
                                break;
                        }
                    }
                }

            }
        })
    }

    //房间详情展示
    function showRoom() {

        var roomNum = localStorage.getItem("floatNum") + getNumReg(this.getAttribute("id"));


        var phaseNum = $("#buildNumber option:selected").attr("data-phase");


        $.ajax({
            url: '/api/charts.index/room_info',
            type: 'post',
            data: {
                phase:phaseNum,
                room_id: roomNum
            },
            dataType: 'json',
            success: function (data) {


                //console.log(data)


                //设置房间号
                $('.index-room-num').html(data.data[0].room_number);
                //设置楼层
                $('.index-room-floor').html(data.data[0].floor);
                //设置面积
                $('.index-room-squ').html(data.data[0].area);
                //设置项目名称
                $('.index-room-times').html(data.data[0].phase);
                //设置企业入驻
                $('.index-room-enterprise').html(data.data[0].enterprise_id);
                //设置企业地点
                 $('.index-room-add').html(data.data[0].phase)
            }
        })
    }


    //截取楼层后两位数，如1511 返回 11
    function getNumReg(num) {
        num = String(num);
        return num.substr(num.length - 2);
    }
    //获取json中data的length，并返回
    function getJsonLength(jsonData) {
        var jsonLength = 0;
        for (var item in jsonData) {
            jsonLength++;
        }

        return jsonLength;
    }



</script>
<script src="/public/echarts/echarts.common.min.js"></script>
<script src="/public/echarts/pie-charts.js"></script>

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

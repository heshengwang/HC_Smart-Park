<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:61:"/www/wwwroot/www.hacyy.com/app/admin/view/park/room_list.html";i:1541124233;s:58:"/www/wwwroot/www.hacyy.com/app/admin/view/public/base.html";i:1540776139;s:60:"/www/wwwroot/www.hacyy.com/app/admin/view/public/header.html";i:1541036748;s:62:"/www/wwwroot/www.hacyy.com/app/admin/view/public/left_nav.html";i:1539759652;s:62:"/www/wwwroot/www.hacyy.com/app/admin/view/public/head_nav.html";i:1539575931;s:66:"/www/wwwroot/www.hacyy.com/app/admin/view/park/ajax_room_list.html";i:1541038221;s:60:"/www/wwwroot/www.hacyy.com/app/admin/view/public/footer.html";i:1539660495;}*/ ?>
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
    <div class="row maintop">
        <div class="col-xs-12 col-sm-2">

            <a href="<?php echo url('api/excel.index/roomList'); ?>">
                <button class="btn btn-sm btn-danger">
                    <i class="ace-icon fa fa-bolt bigger-110"></i>
                    导出房源
                </button>
            </a>
        </div>
        <form name="room_list_sea" class="form-search" id="list-filter" method="post"
              action="<?php echo url('admin/Park/room_list'); ?>">
            <div class="col-xs-10 col-sm-5  margintop5">
                <select name="status" class="ajax_change">
                    <option value="">按租赁状态</option>
                    <option value="1" {if condition="$status eq '1'" }selected="selected" {
                    /if}>已租</option>
                    <option value="0" {if condition="$status eq '0'" }selected="selected" {
                    /if} >未租</option>
                    <option value="2" {if condition="$status eq '2'" }selected="selected" {
                    /if} >已售</option>
                    <option value="3" {if condition="$status eq '3'" }selected="selected" {
                    /if} >已定</option>
                    <option value="4" {if condition="$status eq '4'" }selected="selected" {
                    /if} >自留</option>
                </select>

                <select name="phase" class="ajax_change">
                    <option value="">按园区</option>
                    <?php foreach($building as $b): ?>
                    <option value="<?php echo $b['id']; ?>" {if $phase eq $b.id}selected{
                    /if}><?php echo $b['name']; ?></option>
                    <?php endforeach; ?>
                </select>

                <select name="floor" id="floor" class="ajax_change">
                    <option value="">按楼层</option>
                    <?php $__FOR_START_1179673262__=1;$__FOR_END_1179673262__=24;for($i=$__FOR_START_1179673262__;$i < $__FOR_END_1179673262__;$i+=1){ ?>
                    <option value=<?php echo $i; ?> {if condition="$floor eq $i" }selected="selected"><?php echo $i; ?>层</option>
                    <?php } ?>
                </select>

            </div>
            <div class="col-xs-4 col-sm-3 margintop5">
                <div class="input-group-btn">
                    <a href="<?php echo url('admin/Park/room_list'); ?>">
                        <button type="button" class="btn btn-sm  btn-purple ajax-display-all">
                            <span class="ace-icon fa fa-globe icon-on-right bigger-110"></span>
                            显示全部
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div>
                <table class="table table-striped table-bordered table-hover" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>园区</th>
                        <th>楼层</th>
                        <th>房间号</th>
                        <th class="hidden-sm hidden-xs">面积(㎡)</th>
                        <th>房租(元/㎡)</th>
                        <th>物业费(元/㎡)</th>
                        <th>空调费(元/㎡)</th>
                        <th class="hidden-sm hidden-xs">装修</th>
                        <th class="hidden-sm hidden-xs">入驻企业</th>
                        <th class="hidden-xs">状态</th>
                        <th style="border-right:#CCC solid 1px;">操作</th>
                    </tr>
                    </thead>

                    <tbody id="ajax-data">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
<tr>
    <td><?php echo getBuildingNameById($v['phase']); ?></td>
    <td><?php echo $v['floor']; ?></td>
    <td><?php echo $v['room_number']; ?></td>
    <td><?php echo $v['area']; ?></td>
    <td><?php echo $v['price']; ?></td>
    <td><?php echo $v['property']; ?></td>
    <td><?php echo $v['aircon']; ?></td>
    <?php if($v['decoration'] == 1): ?>
    <td>毛坯</td>
    <?php else: ?>
    <td>简装</td>
    <?php endif; ?>
    <td><?php echo getEnterpriseNameById($v['enterprise_id']); ?></td>
    <!--<td class="hidden-sm hidden-xs"><?php echo date('Y-m-d H:i:s',$v['create_time']); ?></td>-->
    <td class="hidden-xs">
        <?php if($v['status'] == 1): ?>
        <span class="red" title="已租">
					<div id="zt<?php echo $v['id']; ?>"><button class="btn btn-minier btn1">已租</button></div>
				</span>
        <?php elseif($v['status'] == 0): ?>
        <span class="red" title="未租">
					<div id="zt<?php echo $v['id']; ?>"><button class="btn btn-minier btn0">未租</button></div>
                </span>
        <?php elseif($v['status'] == 2): ?>
        <span class="red" title="已售">
					<div id="zt<?php echo $v['id']; ?>"><button class="btn btn-minier btn2">已售</button></div>
                </span>
        <?php elseif($v['status'] == 3): ?>
        <span class="red" title="已定">
					<div id="zt<?php echo $v['id']; ?>"><button class="btn btn-minier btn3">已定</button></div>
                </span>
        <?php elseif($v['status'] == 4): ?>
        <span class="red" title="自留">
					<div id="zt<?php echo $v['id']; ?>"><button class="btn btn-minier btn4">自留</button></div>
                </span>
        <?php endif; ?>
    </td>

    <td>
        <div class="hidden-sm hidden-xs action-buttons">
            <?php if($v['status'] == 0): ?>
            <a class="blue" href="<?php echo url('admin/Enterprise/enterprise_add',array('room_id'=>$v['room_number'],'phase'=>$v['phase'])); ?>" title="添加企业">
                <i class="ace-icon fa  bigger-130 iconfont icon-jia1"></i>
            </a>
            <?php else: ?>
            <a class="blue" href="<?php echo url('admin/enterprise/enterprise_info',array('id'=>$v['enterprise_id'])); ?>"
               title="查看入驻企业">
                <i class="ace-icon fa  bigger-130 iconfont icon-chakan"></i>
            </a>
            <?php endif; ?>
            <a class="blue" href="<?php echo url('admin/Park/room_edit',array('id'=>$v['id'])); ?>" title="修改">
                <i class="ace-icon fa  bigger-130 iconfont icon-brush"></i>
            </a>
            <a class="blue confirm-rst-url-btn"
               href="<?php echo url('admin/Park/room_delete',array('id'=>$v['id'],'p'=>input('p',1))); ?>" data-info="你确定要删除吗？"
               title="删除">
                <i class="ace-icon fa  bigger-130 iconfont icon-empty"></i>
            </a>
        </div>
        <div class="hidden-md hidden-lg">
            <div class="inline position-relative">
                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                </button>
                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                    <li>
                        <a href="<?php echo url('admin/Enterprise/enterprise_add',array('room_id'=>$v['room_number'],'phase'=>$v['phase'])); ?>" class="tooltip-success"
                           data-rel="tooltip" title="" data-original-title="添加企业">
											<span class="green">
												<i class="ace-icon fa iconfont icon-jia1 bigger-120"></i>
											</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo url('admin/Park/room_edit',array('id'=>$v['id'])); ?>" class="tooltip-success"
                           data-rel="tooltip" title="" data-original-title="修改">
											<span class="green">
												<i class="ace-icon fa iconfont icon-brush bigger-120"></i>
											</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo url('admin/Park/room_delete',array('id'=>$v['id'],'p'=>input('p',1))); ?>"
                           class="tooltip-error confirm-rst-url-btn" data-info="你确定要删除吗？" data-rel="tooltip" title=""
                           data-original-title="删除">
											<span class="red">
												<i class="ace-icon fa iconfont icon-empty bigger-120"></i>
											</span>
                        </a>
                    </li>
                    <?php if($v['status'] == 1): ?>
                    <li>
                        <a href="<?php echo url('admin/enterprise/enterprise_info',array('id'=>$v['enterprise_id'])); ?>"
                           class="tooltip-success" data-rel="tooltip" title="" data-original-title="查看企业信息">
											<span class="green">
												<i class="ace-icon iconfont icon-chakan bigger-120"></i>
											</span>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </td>
</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
    <td height="50" colspan="12" align="left"><?php echo $page; ?></td>
</tr>

                    </tbody>
                </table>

            </div>
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

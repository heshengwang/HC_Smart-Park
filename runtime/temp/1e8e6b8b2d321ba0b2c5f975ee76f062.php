<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/www.hacyy.com/app/admin/view/park/ajax_room_list.html";i:1541038221;}*/ ?>
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

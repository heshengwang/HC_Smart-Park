<?php
/**
 * Created by PhpStorm.
 * User: xpwsgg
 * Date: 2018/10/24
 * Time: 9:00
 */

namespace app\api\controller\excel;


use app\api\model\EnterpriseList;
use app\api\model\ParkBuilding;
use app\api\model\ParkRoom;
use think\Controller;
use think\Db;

/**
 * Class Index
 * @package app\api\controller\excel
 * 导出表格接口
 */
class Index extends Controller
{

    /**
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 企业列表
     */
    public function enterpriseList()
    {
        //页码
        $page = \input('page', '1', 'intval');
        //搜索关键字
        $key = \input('key', '');
        $model = new EnterpriseList();
        $list = $model->getEnterpriseList($page, $key);
        $data = [];
        foreach ($list as $k => $v) {
            $data[$k]['企业ID'] = $v['id'];
            $data[$k]['企业名称'] = $v['enterprise_list_name'];
            $data[$k]['房间号'] = $v['entry_info']['room'];
            $data[$k]['邀请码'] = $v['enterprise_list_code'];
        }
        $name = '入驻企业列表';
        $header = ['企业ID', '企业名称', '房间号', '邀请码'];
        \ExcelPull($name, $header, $data);
    }

    /**
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 导出楼宇列表
     */
    public function buildingList()
    {
        $model = new ParkBuilding();
        $list = $model->select();
        $data = [];
        foreach ($list as $k => $v) {
            $data[$k]['楼宇ID'] = $v['id'];
            $data[$k]['楼宇名称'] = $v['name'];
            $data[$k]['状态'] = $v['status'];
        }
        $name = '楼宇列表';
        $header = ['楼宇ID', '楼宇名称', '楼宇状态'];
        \ExcelPull($name, $header, $data);
    }

    /**
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 导出房源列表
     */
    public function roomList()
    {
        //按照租赁状态
        $status = input('status', '');
        //按照楼层
        $floor = \input('floor', '');
        //按照期数
        $phase = \input('phase', '');

        $where = array();
        if ($status !== '') {
            $where['status'] = $status;
        }
        if ($floor !== '') {
            $where['floor'] = $floor;
        }
        if ($phase !== '') {
            $where['phase'] = $phase;
        }
        $list = Db::name('ParkRoom')
            ->where($where)
            ->select();
        $data = [];
        $phaseArr = Db::name('ParkBuilding')->column('id,name');
        $decorationArr = [1 => '毛坯', 2 => '简装'];
        $statusArr = [
            0 => '未租',
            1 => '已租',
            2 => '已售',
            3 => '已定',
            4 => '自留'
        ];
        foreach ($list as $k => $v) {
            $data[$k]['园区'] = $phaseArr[$v['phase']];
            $data[$k]['楼层'] = $v['floor'];
            $data[$k]['房间号'] = $v['room_number'];
            $data[$k]['面积'] = $v['area'];
            $data[$k]['房租'] = $v['price'];
            $data[$k]['物业费'] = $v['property'];
            $data[$k]['空调费'] = $v['aircon'];
            $data[$k]['装修'] = $decorationArr[$v['decoration']];
            $data[$k]['入驻企业'] = \getEnterpriseNameById($v['enterprise_id']);
            $data[$k]['状态'] = $statusArr[$v['status']];
        }

        $name = '房源列表';
        $header = ['园区', '楼层', '房间号', '面积', '房租', '物业费', '空调费', '装修', '入驻企业', '状态'];
        \ExcelPull($name, $header, $data);
    }

    /**
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 导出企业合同列表
     */
    public function contractList()
    {
        $list = Db::name('EnterpriseEntryInfo eei')
            ->join('EnterpriseBank eb', 'eei.enterprise_id=eb.enterprise_id')
            ->join('EnterpriseList el', 'eei.enterprise_id=el.id')
            ->join('EnterpriseBillList ebl', 'eei.enterprise_id=ebl.enterprise_id')
            ->order('enterprise_list_addtime desc')
            ->select();
        $data = [];
        foreach ($list as $k => $v) {
            $data[$k]['企业名称'] = $v['enterprise_list_name'];
            $data[$k]['财务负责人'] = $v['financial_office'];
            $data[$k]['联系电话'] = $v['financial_office_phone'];
            $data[$k]['联系人邮箱'] = $v['financial_office_email'];
            $data[$k]['门牌号'] = $v['room'];
            $data[$k]['总面积'] = $v['area'];
            $data[$k]['保证金'] = $v['margin'];
            $data[$k]['签订日期'] = \date('Y-m-d', $v['signed_day']);
            $data[$k]['签订人'] = $v['signer'];
        }
        $name = '企业合同列表';
        $header = ['企业名称', '财务负责人', '联系电话', '联系人邮箱', '门牌号', '总面积', '保证金', '签订日期', '签订人'];
        \ExcelPull($name, $header, $data);
    }

    /**
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 企业账单列表
     */
    public function billList()
    {
        $list = Db::name('EnterpriseBillList ebl')
            ->join('EnterpriseEntryInfo eei', 'ebl.enterprise_id=eei.enterprise_id', 'LEFT')
            ->join('EnterpriseBank eb', 'ebl.enterprise_id=eb.enterprise_id', 'LEFT')
            ->join('EnterpriseList el', 'ebl.enterprise_id=el.id', 'LEFT')
            ->where('el.id', 'neq', '')
            ->order('bill_time')
            ->select();
        $data = [];
        foreach ($list as $k => $v) {
            $fee_handler = \getAdminUserNameById($v['fee_handler']);
            $invoice_handler = \getAdminUserNameById($v['invoice_handler']);
            if ($v['status'] == 0) {
                $status_text = '待缴费';
            } elseif ($v['status'] == 1) {
                $status_text = '待开票';
            } else {
                $status_text = '已完成';
            }
            $data[$k] = [
                '企业名称' => $v['enterprise_list_name'],
                '房租费' => $v['rent_amount'],
                '物业费' => $v['property_amount'],
                '空调费' => $v['aircon_amount'],
                '调整金额' => $v['discounted_amount'],
                '总计' => $v['amount'],
                '保证金' => $v['margin'],
                '签订日期' => \date('Y-m-d', $v['signed_day']),
                '签订人' => $v['signer'],
                '账单状态' => $status_text,
                '收款人' => $fee_handler,
                '开票人' => $invoice_handler,
            ];
        }
        $name = '企业账单列表';
        $header = ['企业名称', '房租费', '物业费', '空调费', '调整金额', '总计', '保证金', '签订日期', '签订人', '账单状态', '收款人', '开票人'];
        \ExcelPull($name, $header, $data);
    }
}

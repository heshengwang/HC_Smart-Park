<?php
/**
 * Created by PhpStorm.
 * User: xpwsg
 * Date: 2018/9/5
 * Time: 14:58
 */

namespace app\api\model;


use think\Model;

/**
 * Class ServiceComplains
 * @package app\api\model
 */
class ServiceComplains extends Model
{
    /**
     * @var bool
     */
    protected $autoWriteTimestamp = true;

    /**
     * @param $create_time
     * @return false|string
     * 发布时间读取器
     */
    public function getCreateTimeAttr($create_time)
    {
        return date('Y-m-d H:i:s', $create_time);
    }

    /**
     * @param $handler_time
     * @return false|string
     * 处理时间读取器
     */
    public function gethandlerTimeAttr($handler_time)
    {
        return date('Y-m-d H:i:s', $handler_time);
    }

    /**
     * @param $handler_id
     * @return mixed
     * 读取处理者username
     */
    public function getHandlerIdAttr($handler_id)
    {
        return \getAdminUserNameById($handler_id);
    }

    /**
     * @param $status
     * @return string
     * 返回中文化的处理状态
     */
    public function getStatusAttr($status)
    {
        switch ($status) {
            case 1;
                return '已处理';
                break;
            case 0;
                return '待处理';
                break;
            default;
                return '未知状态';
                break;
        }
    }

    /**
     * @param $type
     * @return string
     * 类型中文字符
     */
    public function getTypeAttr($type)
    {
        if ($type == 1) {
            return '投诉';
        } else {
            return '建议';
        }
    }

    /**
     * @param $uid
     * @return mixed|string
     * 返回用户名
     */
    public function getUserIdAttr($uid)
    {
        if (!empty($uid)) {
            return \getUserNameById($uid);
        } else {
            return '未知人员';
        }
    }

    /**
     * @param $pic_url
     * @return mixed|string
     * 返回图片数组
     */
    public function getPicUrlAttr($pic_url)
    {
        if (!empty($pic_url)) {
            return $pic_url = \unserialize($pic_url);
        } else {
            return '';
        }
    }

    /**
     * @param $user_id
     * @param $page
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 个人中心的投诉建议列表
     */
    public function getMyComplainsList($user_id, $page)
    {
        return $this->where('user_id', 'eq', $user_id)
            ->field('id,user_id,type,create_time,title,content,pic_url,status,handler_id,handler_time')
            ->order('create_time desc')
            ->page($page, 10)
            ->select();
    }
}


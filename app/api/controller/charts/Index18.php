<?php
/**
 * Created by PhpStorm.
 * User: xpwsg
 * Date: 2018/12/29
 * Time: 10:52
 */

namespace app\api\controller\charts;


use app\admin\model\ParkRoom;
use app\api\controller\Common;

/**
 * Class Index13
 * @package app\api\controller\charts
 * 海天教具6号
 */
class Index18 extends Common
{
    public function build_floor()
    {
        $floor = \input('floor', 1);
        $model = new ParkRoom();
        switch ($floor) {
            case 1:
                $return = $model
                    ->where('phase', 21)
                    ->where('floor', $floor)
                    ->select();
                $return['svg'] = <<<EFO
<svg width="650" height="248" viewBox="0 0 1621 620" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
 <g class="layer">
  <g id="svg_1" fill="#000000" transform="translate(0,723) scale(0.10000000149011612,-0.10000000149011612) ">
   <path id="svg_2" d="m1530,3775l0,-1775l5895,0l5895,0l0,1775l0,1775l-5895,0l-5895,0l0,-1775zm7270,0l0,-1715l-3605,0l-3605,0l0,1715l0,1715l3605,0l3605,0l0,-1715zm4460,0l0,-1715l-2210,0l-2210,0l0,1715l0,1715l2210,0l2210,0l0,-1715z"/>
   <path id="svg_3" d="m4484,4289c-17,-7 -17,-8 -1,-9c46,-5 102,-2 95,5c-9,9 -74,12 -94,4z"/>
   <path id="svg_4" d="m4641,4293c-1,-6 -11,-13 -23,-15c-17,-2 -24,-11 -26,-30c-3,-24 0,-28 22,-28c15,0 26,-7 29,-17c4,-17 5,-17 6,0c1,10 9,17 21,17c16,0 20,7 20,30c0,23 -5,30 -19,30c-11,0 -22,6 -24,13c-4,8 -6,9 -6,0zm-1,-43c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm40,0c0,-5 -7,-10 -15,-10c-8,0 -15,5 -15,10c0,6 7,10 15,10c8,0 15,-4 15,-10z"/>
   <path id="svg_5" d="m4890,4292c0,-5 -12,-8 -27,-7c-16,2 -19,0 -8,-2c25,-6 35,-21 35,-52c0,-19 -3,-21 -14,-12c-11,9 -15,9 -19,-1c-2,-7 -8,-10 -11,-6c-4,3 2,16 13,27l21,21l-22,0c-19,0 -23,-6 -24,-30c-1,-18 4,-30 12,-30c7,0 19,-3 27,-6c11,-4 19,5 27,30c6,20 16,36 21,36c15,0 10,-37 -7,-54c-13,-14 -13,-16 -1,-16c32,0 37,67 7,93c-22,19 -30,21 -30,9z"/>
   <path id="svg_6" d="m4991,4288c0,-9 -11,-19 -23,-21l-23,-4l22,-2c25,-1 23,-21 -6,-55c-14,-16 -14,-18 -1,-14c8,2 21,19 29,36c19,42 51,44 51,3c0,-23 -5,-31 -22,-34c-20,-4 -19,-4 5,-6c25,-1 27,2 27,39c0,36 -3,40 -24,40c-15,0 -26,7 -29,18c-4,15 -5,15 -6,0z"/>
   <path id="svg_7" d="m5152,4268c-2,-29 -6,-37 -24,-41l-23,-4l23,-2c13,0 22,-8 23,-18c0,-14 2,-15 6,-3c12,32 48,41 40,10c-3,-11 -1,-20 4,-20c8,0 11,18 11,70c0,40 -2,46 -11,31c-5,-8 -7,-21 -4,-29c5,-13 -12,-31 -29,-32c-4,0 -9,17 -11,38l-4,37l-1,-37z"/>
   <path id="svg_8" d="m5260,4293c0,-7 -8,-13 -17,-14c-15,0 -15,-2 2,-9c17,-7 17,-9 3,-9c-21,-1 -22,-5 -7,-33c8,-15 8,-22 0,-27c-6,-4 6,-8 26,-8c28,-1 33,1 20,8c-14,8 -15,13 -4,30c10,16 9,21 -3,29c-12,8 -12,10 5,11c15,0 16,2 5,6c-8,3 -18,11 -22,17c-5,8 -8,7 -8,-1zm18,-54c-2,-6 -8,-10 -13,-10c-5,0 -11,4 -13,10c-2,6 4,11 13,11c9,0 15,-5 13,-11z"/>
   <path id="svg_9" d="m5333,4292c-25,-4 -31,-18 -10,-25c9,-3 8,-8 -3,-22c-9,-11 -10,-16 -2,-11c8,5 12,-2 13,-26c1,-18 3,-25 6,-15c3,11 14,17 31,16c15,0 21,-3 14,-6c-6,-2 -9,-9 -6,-14c10,-17 34,12 34,42c0,24 -4,28 -32,32c-32,4 -32,4 5,5c20,1 37,6 37,11c0,10 -53,18 -87,13zm50,-49c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5zm0,-20c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_10" d="m5430,4238c0,-56 1,-58 17,-42c11,11 18,13 21,5c2,-6 11,-11 20,-10c11,0 12,2 5,6c-21,8 -15,39 7,40c11,1 20,-3 20,-8c0,-6 -4,-7 -10,-4c-5,3 -10,2 -10,-2c0,-12 22,-33 35,-33c5,0 3,5 -5,11c-9,6 -11,12 -5,15c6,2 9,22 7,43l-4,40l-49,-1l-49,-1l0,-59zm17,-10c-2,-13 -4,-3 -4,22c0,25 2,35 4,23c2,-13 2,-33 0,-45zm73,52c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm-53,-37c-3,-10 -5,-4 -5,12c0,17 2,24 5,18c2,-7 2,-21 0,-30zm46,10c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_11" d="m4393,4283c12,-3 17,-15 17,-43c0,-32 -4,-39 -22,-43c-13,-2 0,-4 27,-4c28,0 40,2 28,4c-19,4 -23,11 -23,43c0,28 5,40 18,43c9,3 -1,5 -23,5c-22,0 -32,-2 -22,-5z"/>
   <path id="svg_12" d="m4712,4233l1,-58l7,55c5,45 7,48 8,18c2,-39 16,-57 28,-36c4,6 2,14 -4,16c-19,6 -14,22 8,22c14,0 20,-7 20,-24c0,-13 -6,-26 -12,-29c-7,-2 -10,-8 -6,-12c12,-13 28,6 28,35c0,19 6,30 18,33c9,3 -2,5 -25,6c-53,1 -57,18 -5,24c30,3 28,4 -15,5l-53,2l2,-57z"/>
   <path id="svg_13" d="m5076,4244c5,-76 23,-76 29,0c3,39 1,46 -14,46c-16,0 -18,-7 -15,-46z"/>
   <path id="svg_14" d="m5567,4272c-19,-20 -23,-37 -7,-27c10,6 33,45 27,45c-2,0 -11,-8 -20,-18z"/>
   <path id="svg_15" d="m5619,4273c12,-23 29,-38 37,-31c2,3 -8,15 -22,29c-25,23 -26,23 -15,2z"/>
   <path id="svg_16" d="m5715,4281l50,-5l-55,-6l-55,-7l53,-1c50,-2 52,-3 52,-31c0,-16 -6,-31 -12,-34c-7,-2 -10,-8 -6,-12c16,-17 38,18 38,61l0,44l-57,-2l-58,-2l50,-5z"/>
   <path id="svg_17" d="m4350,4260c0,-5 5,-10 11,-10c5,0 7,5 4,10c-3,6 -8,10 -11,10c-2,0 -4,-4 -4,-10z"/>
   <path id="svg_18" d="m4495,4259c-17,-6 -17,-8 -2,-8c23,-1 22,-16 -3,-41c-11,-11 -15,-20 -10,-20c6,0 19,13 28,30c21,36 42,39 42,6c0,-18 -7,-26 -22,-29c-23,-4 -23,-4 0,-6c16,-1 26,6 29,20c4,16 8,17 14,7c5,-7 9,-8 9,-3c-1,32 -50,58 -85,44z"/>
   <path id="svg_19" d="m5120,4250c0,-5 5,-10 11,-10c5,0 7,5 4,10c-3,6 -8,10 -11,10c-2,0 -4,-4 -4,-10z"/>
   <path id="svg_20" d="m5572,4220l-23,-30l52,0c51,0 52,0 34,20c-19,21 -30,27 -20,10c7,-11 -22,-26 -31,-17c-3,3 -1,15 6,26c16,30 7,26 -18,-9z"/>
   <path id="svg_21" d="m5680,4227c0,-20 4,-23 30,-19c21,3 30,10 30,23c0,14 -7,19 -30,19c-25,0 -30,-4 -30,-23zm50,3c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_22" d="m4475,4229c-4,-6 -5,-12 -2,-15c2,-3 7,2 10,11c7,17 1,20 -8,4z"/>
   <path id="svg_23" d="m4356,4215c-3,-9 -6,-22 -5,-28c0,-7 5,-1 10,12c5,13 8,26 5,28c-2,2 -6,-3 -10,-12z"/>
   <path id="svg_24" d="m4800,4221c0,-6 4,-13 10,-16c6,-3 7,1 4,9c-7,18 -14,21 -14,7z"/>
   <path id="svg_25" d="m4910,3905c0,-16 6,-25 15,-25c21,0 19,-28 -2,-33c-13,-4 -12,-5 5,-6c32,-1 41,29 14,47c-27,17 -28,29 -4,35c13,4 11,5 -5,6c-18,1 -23,-4 -23,-24z"/>
   <path id="svg_26" d="m4974,3906c-10,-41 -1,-61 26,-61c27,0 36,20 26,61c-4,15 -14,24 -26,24c-12,0 -22,-9 -26,-24zm42,-12c8,-30 -10,-54 -27,-37c-13,13 -4,63 11,63c5,0 13,-12 16,-26z"/>
   <path id="svg_27" d="m5052,3918c-26,-26 -8,-83 24,-76c15,2 19,12 19,43c0,42 -19,57 -43,33zm33,-33c0,-16 -6,-30 -12,-32c-9,-3 -13,7 -13,32c0,25 4,35 13,33c6,-3 12,-17 12,-33z"/>
   <path id="svg_28" d="m5193,3908c1,-8 -10,-14 -25,-16c-24,-3 -28,-8 -27,-35l1,-32l8,30l8,30l2,-30l2,-30l8,30l7,30l5,-30l5,-30l2,28c0,15 6,27 11,27c6,0 10,9 10,20c0,11 -4,20 -10,20c-5,0 -9,-6 -7,-12z"/>
   <path id="svg_29" d="m10945,4229l-30,-7l30,-2c25,-2 26,-3 8,-7c-17,-3 -23,-11 -23,-29c0,-14 4,-22 10,-19c14,9 13,-8 -2,-23c-9,-9 -9,-12 1,-12c7,0 15,9 18,20c3,11 9,20 14,20c5,0 9,-9 9,-20c0,-15 7,-20 25,-20c17,0 25,5 24,18c0,10 -3,12 -6,5c-7,-18 -33,-16 -33,2c0,8 5,14 12,13c6,-2 14,5 16,15c2,13 -4,20 -20,25c-22,6 -22,7 7,12l30,6l-30,5c-16,2 -43,2 -60,-2zm55,-39c0,-5 -13,-10 -30,-10c-16,0 -30,5 -30,10c0,6 14,10 30,10c17,0 30,-4 30,-10z"/>
   <path id="svg_30" d="m11062,4232c-21,-3 -23,-8 -21,-53c2,-35 6,-46 14,-39c7,6 16,5 24,-3c14,-14 31,5 31,36c0,31 20,18 21,-15l2,-33l6,35c5,28 3,36 -11,38c-10,2 -18,7 -18,12c0,5 8,11 18,13c13,4 11,5 -5,6c-20,1 -23,-4 -23,-38c0,-22 -4,-42 -8,-45c-4,-2 -6,10 -4,29c6,48 0,60 -26,57zm18,-22c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_31" d="m10800,4180l0,-50l58,2l57,2l-52,3l-53,4l0,40c0,29 4,39 16,39c16,0 16,-7 -1,-55c-7,-20 -6,-20 9,-1c9,11 16,28 16,38c0,10 5,18 10,18c6,0 10,-14 10,-31c0,-23 4,-30 17,-27c9,2 18,9 19,16c1,7 0,8 -3,2c-9,-19 -23,-10 -23,14c0,15 7,26 18,29c9,3 -9,5 -40,6l-58,1l0,-50z"/>
   <path id="svg_32" d="m10833,3863c9,-2 17,-11 17,-18c0,-7 -8,-16 -17,-18c-17,-4 -17,-5 0,-6c25,-2 21,-29 -5,-34c-20,-4 -19,-4 5,-6c30,-1 49,25 27,39c-8,5 -9,10 -2,14c18,11 2,36 -22,35c-16,-1 -17,-2 -3,-6z"/>
   <path id="svg_33" d="m10884,3846c-10,-41 -1,-61 26,-61c27,0 36,20 26,61c-4,15 -14,24 -26,24c-12,0 -22,-9 -26,-24zm42,-12c8,-30 -10,-54 -27,-37c-13,13 -4,63 11,63c5,0 13,-12 16,-26z"/>
   <path id="svg_34" d="m10962,3858c-26,-26 -8,-83 24,-76c15,2 19,12 19,43c0,42 -19,57 -43,33zm33,-33c0,-16 -6,-30 -12,-32c-9,-3 -13,7 -13,32c0,25 4,35 13,33c6,-3 12,-17 12,-33z"/>
   <path id="svg_35" d="m11103,3848c1,-8 -10,-14 -25,-16c-24,-3 -28,-8 -27,-35l1,-32l8,30l8,30l2,-30l2,-30l8,30l7,30l5,-30l5,-30l2,28c0,15 6,27 11,27c6,0 10,9 10,20c0,11 -4,20 -10,20c-5,0 -9,-6 -7,-12z"/>
  </g>
  <path class="room" id="room_01" d="m893,185l425,1l-1,324l-428,0l4,-325z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="null" stroke="#000000" fill="#e5e5e5"/>
  <path class="room" id="room_02" d="m167,183l705,0l2,326c0,0 -709,2 -709,2c0,0 2,-328 2,-328z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="null" stroke="#000000" fill="#e5e5e5"/>
 </g>
</svg>
EFO;
                return \show(1, 'OK', $return, 200);
                break;

            default:
                return '未知楼层';
                break;
        }
    }
}
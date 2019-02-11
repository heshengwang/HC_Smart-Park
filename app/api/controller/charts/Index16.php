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
 * Class Index16
 * @package app\api\controller\charts
 * 海天教具4号
 */
class Index16 extends Common
{
    public function build_floor()
    {
        $floor = \input('floor', 1);
        $model = new ParkRoom();
        switch ($floor) {
            case 1:
                $return = $model
                    ->where('phase', 19)
                    ->where('floor', $floor)
                    ->select();
                $return['svg'] = <<<EFO
<svg width="650" height="248" viewBox="0 0 1621 620" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
 <g class="layer">
  <g id="svg_1" fill="#000000" transform="translate(0,723) scale(0.10000000149011612,-0.10000000149011612) ">
   <path id="svg_2" d="m1530,3775l0,-1775l5895,0l5895,0l0,1775l0,1775l-5895,0l-5895,0l0,-1775zm5870,0l0,-1715l-2905,0l-2905,0l0,1715l0,1715l2905,0l2905,0l0,-1715zm5860,0l0,-1715l-2910,0l-2910,0l0,1715l0,1715l2910,0l2910,0l0,-1715z"/>
   <path id="svg_3" d="m3705,4218c-9,-14 -11,-24 -5,-26c5,-2 10,-18 10,-36c0,-31 1,-32 38,-27c20,3 29,6 20,9c-10,2 -18,7 -18,12c0,5 8,11 18,13c14,4 14,5 -3,6c-17,1 -18,3 -5,11c13,8 13,11 1,19c-11,7 -10,10 5,14c11,3 6,5 -14,6c-19,1 -31,5 -27,11c12,20 -4,9 -20,-12zm35,-68c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_4" d="m3835,4230c4,-6 -5,-10 -19,-10c-14,0 -26,-3 -26,-7c0,-5 25,-8 55,-8c30,0 55,3 55,7c0,5 -11,8 -25,8c-14,0 -25,5 -25,10c0,6 -5,10 -11,10c-5,0 -7,-4 -4,-10z"/>
   <path id="svg_5" d="m3916,4223c-6,-14 -5,-15 5,-6c7,7 10,15 7,18c-3,3 -9,-2 -12,-12z"/>
   <path id="svg_6" d="m3989,4223c0,-12 -2,-14 -6,-4c-5,11 -7,11 -14,0c-6,-10 -9,-11 -9,-1c0,6 -4,12 -10,12c-20,0 -9,-29 13,-32c16,-2 23,-11 25,-33c2,-25 1,-27 -8,-12c-6,9 -17,17 -25,17c-7,0 -16,-8 -18,-17c-3,-10 -5,-2 -6,17c-1,21 -5,30 -10,25c-11,-12 -3,-65 10,-65c6,0 12,7 16,16c4,11 8,12 13,4c4,-6 18,-13 32,-14c21,-3 24,0 20,26c-2,15 -8,28 -13,28c-5,0 -9,5 -9,11c0,6 7,9 15,5c8,-3 15,-3 15,0c0,3 -7,12 -15,20c-13,14 -15,13 -16,-3z"/>
   <path id="svg_7" d="m4081,4223c-1,-25 -21,-32 -21,-8c0,8 -4,15 -9,15c-13,0 -22,-44 -10,-48c6,-3 5,-10 -3,-20c-11,-14 -9,-14 8,1c26,22 34,22 34,-2c0,-12 -9,-21 -26,-25c-15,-4 -24,-9 -21,-12c6,-7 97,32 97,41c0,3 -9,1 -20,-5c-16,-9 -20,-8 -20,5c0,8 9,15 20,15c28,0 25,20 -2,21c-22,1 -22,1 2,9c23,7 23,8 3,9c-12,1 -24,7 -26,14c-3,6 -6,2 -6,-10z"/>
   <path id="svg_8" d="m4161,4231c-11,-7 -11,-9 0,-14c12,-5 12,-6 0,-6c-10,-1 -11,-4 -2,-15c8,-10 9,-16 1,-21c-19,-12 -10,-26 13,-19c21,6 21,6 -3,-15c-22,-20 -22,-21 -3,-12c15,8 24,8 28,1c5,-8 11,-7 21,1c11,9 17,9 29,-1c16,-13 21,0 6,16c-13,13 -1,64 15,64c8,0 14,-7 14,-15c0,-8 -6,-15 -12,-15c-10,0 -9,-3 1,-9c9,-6 11,-17 6,-32c-6,-19 -5,-21 5,-13c6,7 12,28 13,48c1,32 4,36 28,36c15,0 29,-7 33,-15c4,-10 -1,-15 -15,-15c-13,0 -18,4 -13,13c4,7 2,7 -7,-2c-11,-10 -11,-15 -1,-18c18,-7 15,-31 -5,-36c-10,-3 2,-5 27,-5c25,0 37,2 28,5c-21,5 -24,29 -5,36c20,8 41,-9 34,-27c-4,-9 -2,-16 3,-16c9,0 12,18 12,70c0,40 -2,46 -11,31c-5,-7 -6,-22 -4,-32c7,-24 -10,-25 -28,-2c-10,11 -10,14 -1,9c6,-4 12,-4 12,1c0,4 -11,13 -25,20c-14,6 -25,7 -25,2c0,-14 -38,-11 -43,4c-4,10 -6,10 -6,0c-1,-7 -12,-13 -26,-13c-14,0 -25,6 -25,13c-1,6 -6,2 -13,-10c-12,-22 -30,-20 -38,4c-2,8 -9,9 -18,4zm79,-42c0,-11 -4,-17 -10,-14c-5,3 -10,13 -10,21c0,8 5,14 10,14c6,0 10,-9 10,-21zm-25,-27c0,-12 -4,-21 -10,-19c-5,1 -9,8 -7,15c2,6 -2,12 -8,12c-5,0 -10,5 -10,11c0,6 8,9 18,7c10,-2 17,-12 17,-26z"/>
   <path id="svg_9" d="m4460,4233c0,-7 -8,-13 -17,-14c-15,0 -15,-2 2,-9c17,-7 17,-9 3,-9c-21,-1 -22,-5 -7,-33c8,-15 8,-22 -2,-28c-6,-5 6,-7 29,-6c28,1 50,10 67,26l25,23l0,-33c0,-42 7,-36 12,10c2,28 8,36 28,41l25,7l-27,1c-16,1 -28,8 -31,19c-4,16 -5,16 -6,0c-1,-12 -10,-18 -28,-19c-24,-2 -25,-2 -6,-6c19,-4 21,-8 13,-23c-13,-23 -47,-43 -60,-35c-6,4 -5,14 3,26c10,16 9,21 -3,29c-12,8 -12,10 5,11c15,0 16,2 5,6c-8,3 -18,11 -22,17c-5,8 -8,7 -8,-1zm18,-54c-2,-6 -8,-10 -13,-10c-5,0 -11,4 -13,10c-2,6 4,11 13,11c9,0 15,-5 13,-11z"/>
   <path id="svg_10" d="m4653,4232c-25,-4 -31,-18 -10,-25c9,-3 8,-8 -3,-22c-9,-11 -10,-16 -2,-11c8,5 12,-2 13,-26c1,-18 3,-25 6,-15c3,11 14,17 31,16c15,0 21,-3 14,-6c-6,-2 -9,-9 -6,-14c10,-17 34,12 34,42c0,24 -4,28 -32,32c-32,4 -32,4 5,5c20,1 37,6 37,11c0,10 -53,18 -87,13zm50,-49c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5zm0,-20c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_11" d="m4750,4178c0,-56 1,-58 17,-42c11,11 18,13 21,5c2,-6 11,-11 20,-10c11,0 12,2 5,6c-21,8 -15,39 7,40c11,1 20,-3 20,-8c0,-6 -4,-7 -10,-4c-5,3 -10,2 -10,-2c0,-12 22,-33 35,-33c5,0 3,5 -5,11c-9,6 -11,12 -5,15c6,2 9,22 7,43l-4,40l-49,-1l-49,-1l0,-59zm17,-10c-2,-13 -4,-3 -4,22c0,25 2,35 4,23c2,-13 2,-33 0,-45zm73,52c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm-53,-37c-3,-10 -5,-4 -5,12c0,17 2,24 5,18c2,-7 2,-21 0,-30zm46,10c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_12" d="m4887,4212c-19,-20 -23,-37 -7,-27c10,6 33,45 27,45c-2,0 -11,-8 -20,-18z"/>
   <path id="svg_13" d="m4939,4213c12,-23 29,-38 37,-31c2,3 -8,15 -22,29c-25,23 -26,23 -15,2z"/>
   <path id="svg_14" d="m5035,4221l50,-5l-55,-6l-55,-7l53,-1c50,-2 52,-3 52,-31c0,-16 -6,-31 -12,-34c-7,-2 -10,-8 -6,-12c16,-17 38,18 38,61l0,44l-57,-2l-58,-2l50,-5z"/>
   <path id="svg_15" d="m3799,4189c-13,-4 -17,-7 -9,-8c8,-1 21,-10 27,-20c10,-16 10,-20 -5,-23c-9,-2 4,-4 29,-4c33,1 42,4 33,11c-15,11 -7,29 16,37c23,8 -64,14 -91,7zm61,-19c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_16" d="m3948,4183c7,-3 16,-2 19,1c4,3 -2,6 -13,5c-11,0 -14,-3 -6,-6z"/>
   <path id="svg_17" d="m4892,4160l-23,-30l52,0c51,0 52,0 34,20c-19,21 -30,27 -20,10c7,-11 -22,-26 -31,-17c-3,3 -1,15 6,26c16,30 7,26 -18,-9z"/>
   <path id="svg_18" d="m5000,4167c0,-20 4,-23 30,-19c21,3 30,10 30,23c0,14 -7,19 -30,19c-25,0 -30,-4 -30,-23zm50,3c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_19" d="m4580,4173c0,-13 29,-38 35,-31c3,3 -4,13 -15,23c-11,10 -20,13 -20,8z"/>
   <path id="svg_20" d="m3676,4155c-3,-9 -6,-22 -5,-28c0,-7 5,-1 10,12c5,13 8,26 5,28c-2,2 -6,-3 -10,-12z"/>
   <path id="svg_21" d="m4230,3845c0,-16 6,-25 15,-25c21,0 19,-28 -2,-33c-14,-4 -13,-5 4,-6c12,0 25,4 28,9c9,14 55,12 55,-2c0,-10 2,-10 8,-1c9,15 3,83 -7,83c-4,0 -15,-13 -24,-30c-17,-29 -19,-29 -43,-14c-28,19 -31,31 -6,37c13,4 11,5 -5,6c-18,1 -23,-4 -23,-24zm100,-15c0,-11 -7,-20 -15,-20c-13,0 -14,4 -5,20c6,11 13,20 15,20c3,0 5,-9 5,-20z"/>
   <path id="svg_22" d="m4372,3858c-26,-26 -8,-83 24,-76c15,2 19,12 19,43c0,42 -19,57 -43,33zm33,-33c0,-16 -6,-30 -12,-32c-9,-3 -13,7 -13,32c0,25 4,35 13,33c6,-3 12,-17 12,-33z"/>
   <path id="svg_23" d="m4513,3848c1,-8 -10,-14 -25,-16c-24,-3 -28,-8 -27,-35l1,-32l8,30l8,30l2,-30l2,-30l8,30l7,30l5,-30l5,-30l2,28c0,15 6,27 11,27c6,0 10,9 10,20c0,11 -4,20 -10,20c-5,0 -9,-6 -7,-12z"/>
   <path id="svg_24" d="m9855,4218c-9,-14 -11,-24 -5,-26c5,-2 10,-18 10,-36c0,-31 1,-32 38,-27c20,3 29,6 20,9c-10,2 -18,7 -18,12c0,5 8,11 18,13c14,4 14,5 -3,6c-17,1 -18,3 -5,11c13,8 13,11 1,19c-11,7 -10,10 5,14c11,3 6,5 -14,6c-19,1 -31,5 -27,11c12,20 -4,9 -20,-12zm35,-68c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_25" d="m9985,4230c4,-6 -5,-10 -19,-10c-14,0 -26,-3 -26,-7c0,-5 25,-8 55,-8c30,0 55,3 55,7c0,5 -11,8 -25,8c-14,0 -25,5 -25,10c0,6 -5,10 -11,10c-5,0 -7,-4 -4,-10z"/>
   <path id="svg_26" d="m10084,4233c5,-9 1,-13 -11,-14c-10,-1 -4,-5 12,-9c23,-6 25,-8 8,-9c-33,-2 -37,-19 -6,-24l28,-4l-30,-2c-30,-3 -30,-3 -5,-11l25,-7l-25,-11c-17,-7 -20,-11 -8,-11c9,-1 20,4 23,10c4,6 14,8 22,5c8,-3 11,-1 8,4c-3,6 4,10 17,11c23,1 23,1 -2,9c-25,8 -25,8 5,9c31,1 25,15 -10,24c-18,4 -17,5 3,6c19,1 21,3 10,15c-9,10 -17,11 -25,4c-9,-7 -18,-6 -30,3c-11,10 -14,10 -9,2z"/>
   <path id="svg_27" d="m10187,4226c-4,-9 -2,-16 4,-16c6,0 7,-6 1,-16c-5,-9 -6,-28 -4,-42l6,-27l7,25c7,24 7,24 8,3c1,-19 7,-23 36,-23c31,0 35,3 35,25c0,23 -4,25 -41,25c-34,0 -39,3 -35,18c8,23 -9,50 -17,28z"/>
   <path id="svg_28" d="m10233,4233c9,-2 25,-2 35,0c9,3 1,5 -18,5c-19,0 -27,-2 -17,-5z"/>
   <path id="svg_29" d="m10332,4182c-1,-31 1,-51 4,-44c3,6 18,12 32,12c21,0 24,2 12,10c-13,9 -13,11 0,20c13,9 13,10 0,10c-13,0 -13,1 0,10c12,8 9,10 -13,10c-16,0 -26,4 -22,9c3,5 2,12 -3,15c-5,3 -9,-21 -10,-52zm25,-2c1,-11 -2,-20 -8,-20c-5,0 -9,9 -9,20c0,11 4,20 8,20c4,0 8,-9 9,-20z"/>
   <path id="svg_30" d="m10453,4219c-3,-12 -11,-18 -19,-15c-8,3 -14,1 -14,-4c0,-6 7,-10 15,-10c10,0 15,-10 15,-28c0,-25 4,-28 34,-29c31,-1 34,2 39,31c2,17 1,40 -4,51c-7,17 -8,17 -8,3c-1,-19 -21,-26 -21,-8c0,6 -8,10 -17,11c-12,1 -10,4 7,9l25,8l-23,1c-16,1 -26,-6 -29,-20zm50,-46c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5zm0,-20c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_31" d="m10600,4230c0,-5 -7,-10 -15,-10c-11,0 -15,-12 -15,-48l0,-48l40,4l40,4l0,44c0,32 -4,44 -15,44c-8,0 -15,5 -15,10c0,6 -4,10 -10,10c-5,0 -10,-4 -10,-10zm0,-35c0,-8 -4,-15 -10,-15c-5,0 -10,7 -10,15c0,8 5,15 10,15c6,0 10,-7 10,-15zm40,0c0,-8 -4,-15 -10,-15c-5,0 -10,7 -10,15c0,8 5,15 10,15c6,0 10,-7 10,-15zm-40,-40c0,-8 -4,-15 -10,-15c-5,0 -10,7 -10,15c0,8 5,15 10,15c6,0 10,-7 10,-15zm40,0c0,-8 -4,-15 -10,-15c-5,0 -10,7 -10,15c0,8 5,15 10,15c6,0 10,-7 10,-15z"/>
   <path id="svg_32" d="m10683,4232c-25,-4 -31,-18 -10,-25c9,-3 8,-8 -3,-22c-9,-11 -10,-16 -2,-11c8,5 12,-2 13,-26c1,-18 3,-25 6,-15c3,11 14,17 31,16c15,0 21,-3 14,-6c-6,-2 -9,-9 -6,-14c10,-17 34,12 34,42c0,24 -4,28 -32,32c-32,4 -32,4 5,5c20,1 37,6 37,11c0,10 -53,18 -87,13zm50,-49c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5zm0,-20c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_33" d="m10780,4178c0,-56 1,-58 17,-42c11,11 18,13 21,5c2,-6 11,-11 20,-10c11,0 12,2 5,6c-21,8 -15,39 7,40c11,1 20,-3 20,-8c0,-6 -4,-7 -10,-4c-5,3 -10,2 -10,-2c0,-12 22,-33 35,-33c5,0 3,5 -5,11c-9,6 -11,12 -5,15c6,2 9,22 7,43l-4,40l-49,-1l-49,-1l0,-59zm17,-10c-2,-13 -4,-3 -4,22c0,25 2,35 4,23c2,-13 2,-33 0,-45zm73,52c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm-53,-37c-3,-10 -5,-4 -5,12c0,17 2,24 5,18c2,-7 2,-21 0,-30zm46,10c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_34" d="m10378,4223c18,-4 22,-11 22,-43c0,-21 -6,-41 -12,-43c-8,-3 -6,-6 5,-6c14,-1 17,8 17,49c0,48 -1,50 -27,49c-24,-2 -25,-2 -5,-6z"/>
   <path id="svg_35" d="m10917,4212c-19,-20 -23,-37 -7,-27c10,6 33,45 27,45c-2,0 -11,-8 -20,-18z"/>
   <path id="svg_36" d="m10969,4213c12,-23 29,-38 37,-31c2,3 -8,15 -22,29c-25,23 -26,23 -15,2z"/>
   <path id="svg_37" d="m11065,4221l50,-5l-55,-6l-55,-7l53,-1c50,-2 52,-3 52,-31c0,-16 -6,-31 -12,-34c-7,-2 -10,-8 -6,-12c16,-17 38,18 38,61l0,44l-57,-2l-58,-2l50,-5z"/>
   <path id="svg_38" d="m10220,4205c0,-10 10,-15 30,-15c20,0 30,5 30,15c0,10 -10,15 -30,15c-20,0 -30,-5 -30,-15zm43,-2c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_39" d="m9949,4189c-13,-4 -17,-7 -9,-8c8,-1 21,-10 27,-20c10,-16 10,-20 -5,-23c-9,-2 4,-4 29,-4c33,1 42,4 33,11c-15,11 -7,29 16,37c23,8 -64,14 -91,7zm61,-19c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_40" d="m10922,4160l-23,-30l52,0c51,0 52,0 34,20c-19,21 -30,27 -20,10c7,-11 -22,-26 -31,-17c-3,3 -1,15 6,26c16,30 7,26 -18,-9z"/>
   <path id="svg_41" d="m11030,4167c0,-20 4,-23 30,-19c21,3 30,10 30,23c0,14 -7,19 -30,19c-25,0 -30,-4 -30,-23zm50,3c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_42" d="m9826,4155c-3,-9 -6,-22 -5,-28c0,-7 5,-1 10,12c5,13 8,26 5,28c-2,2 -6,-3 -10,-12z"/>
   <path id="svg_43" d="m10306,4155c-9,-26 -7,-32 5,-12c6,10 9,21 6,23c-2,3 -7,-2 -11,-11z"/>
   <path id="svg_44" d="m10423,4155c-3,-9 -3,-18 -1,-21c3,-3 8,4 11,16c6,23 -1,27 -10,5z"/>
   <path id="svg_45" d="m10546,4155c-9,-26 -7,-32 5,-12c6,10 9,21 6,23c-2,3 -7,-2 -11,-11z"/>
   <path id="svg_46" d="m10320,3845c0,-16 6,-25 15,-25c21,0 19,-28 -2,-33c-13,-4 -12,-5 5,-6c32,-1 41,29 14,47c-27,17 -28,29 -4,35c13,4 11,5 -5,6c-18,1 -23,-4 -23,-24z"/>
   <path id="svg_47" d="m10384,3846c-10,-41 -1,-61 26,-61c27,0 36,20 26,61c-4,15 -14,24 -26,24c-12,0 -22,-9 -26,-24zm42,-12c8,-30 -10,-54 -27,-37c-13,13 -4,63 11,63c5,0 13,-12 16,-26z"/>
   <path id="svg_48" d="m10462,3858c-26,-26 -8,-83 24,-76c15,2 19,12 19,43c0,42 -19,57 -43,33zm33,-33c0,-16 -6,-30 -12,-32c-9,-3 -13,7 -13,32c0,25 4,35 13,33c6,-3 12,-17 12,-33z"/>
   <path id="svg_49" d="m10603,3848c1,-8 -10,-14 -25,-16c-24,-3 -28,-8 -27,-35l1,-32l8,30l8,30l2,-30l2,-30l8,30l7,30l5,-30l5,-30l2,28c0,15 6,27 11,27c6,0 10,9 10,20c0,11 -4,20 -10,20c-5,0 -9,-6 -7,-12z"/>
  </g>
  <path class="room" id="room_01" d="m754,183l565,1l0,326l-569,1l4,-328z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="null" stroke="#000000" fill="#e5e5e5"/>
  <path class="room" id="room_02" d="m165,182l566,1l-1,327l-566,-2l1,-326z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="null" stroke="#000000" fill="#e5e5e5"/>
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
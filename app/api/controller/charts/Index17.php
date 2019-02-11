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
 * 海天教具5号
 */
class Index17 extends Common
{
    public function build_floor()
    {
        $floor = \input('floor', 1);
        $model = new ParkRoom();
        switch ($floor) {
            case 1:
                $return = $model
                    ->where('phase', 20)
                    ->where('floor', $floor)
                    ->select();
                $return['svg'] = <<<EFO
<svg width="650" height="248" viewBox="0 0 1621 620" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
 <g class="layer">
  <g id="svg_1" fill="#000000" transform="translate(0,723) scale(0.10000000149011612,-0.10000000149011612) ">
   <path id="svg_2" d="m1530,3775l0,-1775l5895,0l5895,0l0,1775l0,1775l-5895,0l-5895,0l0,-1775zm5470,0l0,-1715l-2705,0l-2705,0l0,1715l0,1715l2705,0l2705,0l0,-1715zm1800,0l0,-1715l-880,0l-880,0l0,1715l0,1715l880,0l880,0l0,-1715zm4460,0l0,-1715l-2210,0l-2210,0l0,1715l0,1715l2210,0l2210,0l0,-1715z"/>
   <path id="svg_3" d="m3705,4218c-9,-14 -11,-24 -5,-26c5,-2 10,-18 10,-36c0,-31 1,-32 38,-27c20,3 29,6 20,9c-10,2 -18,7 -18,12c0,5 8,11 18,13c14,4 14,5 -3,6c-17,1 -18,3 -5,11c13,8 13,11 1,19c-11,7 -10,10 5,14c11,3 6,5 -14,6c-19,1 -31,5 -27,11c12,20 -4,9 -20,-12zm35,-68c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_4" d="m3835,4230c4,-6 -5,-10 -19,-10c-14,0 -26,-3 -26,-7c0,-5 25,-8 55,-8c30,0 55,3 55,7c0,5 -11,8 -25,8c-14,0 -25,5 -25,10c0,6 -5,10 -11,10c-5,0 -7,-4 -4,-10z"/>
   <path id="svg_5" d="m3975,4230c-4,-6 -14,-10 -24,-10c-14,0 -17,-6 -13,-32c4,-26 2,-30 -12,-25c-12,5 -16,0 -15,-21c1,-15 3,-20 6,-11c2,10 12,19 22,22c14,3 17,11 13,33c-2,16 -2,26 2,23c4,-4 8,-21 8,-38c1,-23 6,-31 20,-31c10,0 18,5 18,12c0,6 3,8 7,4c5,-4 -1,-14 -11,-22c-26,-18 -6,-18 30,1c16,8 45,15 64,14c19,0 29,-3 23,-6c-15,-6 -17,-23 -3,-23c15,0 32,40 24,58c-4,9 -7,26 -8,37c-1,15 -9,20 -31,21l-30,2l28,-5c20,-3 27,-9 23,-20c-3,-8 -6,-17 -6,-19c0,-2 -7,-4 -16,-4c-10,0 -14,6 -10,15c3,8 1,15 -4,15c-6,0 -10,-9 -10,-20c0,-16 7,-20 31,-20c17,0 28,-4 24,-10c-3,-5 -22,-10 -41,-10c-33,0 -34,1 -31,35c4,30 1,35 -17,35c-12,0 -16,-4 -11,-8c14,-9 19,-72 6,-72c-11,0 -21,25 -21,55c0,24 -25,41 -35,25zm25,-24c0,-8 -7,-16 -15,-20c-10,-4 -15,1 -15,14c0,11 7,20 15,20c8,0 15,-6 15,-14z"/>
   <path id="svg_6" d="m4201,4231c-1,-7 -7,-11 -16,-7c-16,6 -40,-28 -30,-44c3,-6 15,-10 26,-10c33,0 22,-28 -13,-33c-18,-2 -4,-4 32,-4c36,0 53,2 38,4c-34,5 -37,30 -5,36l22,4l-22,2c-28,1 -31,21 -3,21c11,0 20,5 20,10c0,6 -9,10 -19,10c-11,0 -22,6 -24,13c-4,9 -6,9 -6,-2zm-1,-41c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_7" d="m4291,4225c-1,-15 -3,-17 -10,-7c-6,11 -9,9 -13,-6c-4,-15 -2,-19 8,-15c17,6 18,-9 2,-25c-9,-9 -9,-12 -1,-12c7,0 14,-10 16,-22c4,-20 5,-20 7,5c3,38 4,40 14,56c7,11 10,11 17,0c7,-12 9,-11 10,1c0,10 3,8 9,-5c12,-27 12,-55 1,-55c-5,0 -7,10 -4,23c3,16 2,18 -5,8c-8,-11 -10,-11 -14,0c-3,9 -6,8 -11,-5c-4,-10 -3,-15 3,-11c6,3 10,2 10,-4c0,-5 -6,-11 -12,-14c-7,-2 1,-4 17,-4c35,-1 45,11 45,55c0,28 -3,32 -25,32c-14,0 -25,6 -25,13c0,6 -6,3 -12,-8c-11,-19 -11,-19 -19,0c-7,20 -8,20 -8,0z"/>
   <path id="svg_8" d="m4472,4208c-2,-29 -6,-37 -24,-41l-23,-4l23,-2c13,0 22,-8 23,-18c0,-14 2,-15 6,-3c12,32 48,41 40,10c-3,-11 -1,-20 4,-20c8,0 11,18 11,70c0,40 -2,46 -11,31c-5,-8 -7,-21 -4,-29c5,-13 -12,-31 -29,-32c-4,0 -9,17 -11,38l-4,37l-1,-37z"/>
   <path id="svg_9" d="m4580,4233c0,-7 -8,-13 -17,-14c-15,0 -15,-2 2,-9c17,-7 17,-9 3,-9c-21,-1 -22,-5 -7,-33c8,-15 8,-22 0,-27c-6,-4 6,-8 26,-8c28,-1 33,1 20,8c-14,8 -15,13 -4,30c10,16 9,21 -3,29c-12,8 -12,10 5,11c15,0 16,2 5,6c-8,3 -18,11 -22,17c-5,8 -8,7 -8,-1zm18,-54c-2,-6 -8,-10 -13,-10c-5,0 -11,4 -13,10c-2,6 4,11 13,11c9,0 15,-5 13,-11z"/>
   <path id="svg_10" d="m4653,4232c-25,-4 -31,-18 -10,-25c9,-3 8,-8 -3,-22c-9,-11 -10,-16 -2,-11c8,5 12,-2 13,-26c1,-18 3,-25 6,-15c3,11 14,17 31,16c15,0 21,-3 14,-6c-6,-2 -9,-9 -6,-14c10,-17 34,12 34,42c0,24 -4,28 -32,32c-32,4 -32,4 5,5c20,1 37,6 37,11c0,10 -53,18 -87,13zm50,-49c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5zm0,-20c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_11" d="m4750,4178c0,-56 1,-58 17,-42c11,11 18,13 21,5c2,-6 11,-11 20,-10c11,0 12,2 5,6c-21,8 -15,39 7,40c11,1 20,-3 20,-8c0,-6 -4,-7 -10,-4c-5,3 -10,2 -10,-2c0,-12 22,-33 35,-33c5,0 3,5 -5,11c-9,6 -11,12 -5,15c6,2 9,22 7,43l-4,40l-49,-1l-49,-1l0,-59zm17,-10c-2,-13 -4,-3 -4,22c0,25 2,35 4,23c2,-13 2,-33 0,-45zm73,52c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm-53,-37c-3,-10 -5,-4 -5,12c0,17 2,24 5,18c2,-7 2,-21 0,-30zm46,10c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_12" d="m4396,4184c5,-76 23,-76 29,0c3,39 1,46 -14,46c-16,0 -18,-7 -15,-46z"/>
   <path id="svg_13" d="m4887,4212c-19,-20 -23,-37 -7,-27c10,6 33,45 27,45c-2,0 -11,-8 -20,-18z"/>
   <path id="svg_14" d="m4939,4213c12,-23 29,-38 37,-31c2,3 -8,15 -22,29c-25,23 -26,23 -15,2z"/>
   <path id="svg_15" d="m5035,4221l50,-5l-55,-6l-55,-7l53,-1c50,-2 52,-3 52,-31c0,-16 -6,-31 -12,-34c-7,-2 -10,-8 -6,-12c16,-17 38,18 38,61l0,44l-57,-2l-58,-2l50,-5z"/>
   <path id="svg_16" d="m3799,4189c-13,-4 -17,-7 -9,-8c8,-1 21,-10 27,-20c10,-16 10,-20 -5,-23c-9,-2 4,-4 29,-4c33,1 42,4 33,11c-15,11 -7,29 16,37c23,8 -64,14 -91,7zm61,-19c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_17" d="m4440,4190c0,-5 5,-10 11,-10c5,0 7,5 4,10c-3,6 -8,10 -11,10c-2,0 -4,-4 -4,-10z"/>
   <path id="svg_18" d="m4892,4160l-23,-30l52,0c51,0 52,0 34,20c-19,21 -30,27 -20,10c7,-11 -22,-26 -31,-17c-3,3 -1,15 6,26c16,30 7,26 -18,-9z"/>
   <path id="svg_19" d="m5000,4167c0,-20 4,-23 30,-19c21,3 30,10 30,23c0,14 -7,19 -30,19c-25,0 -30,-4 -30,-23zm50,3c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_20" d="m3676,4155c-3,-9 -6,-22 -5,-28c0,-7 5,-1 10,12c5,13 8,26 5,28c-2,2 -6,-3 -10,-12z"/>
   <path id="svg_21" d="m4230,3845c0,-16 6,-25 15,-25c21,0 19,-28 -2,-33c-13,-4 -12,-5 5,-6c32,-1 41,29 14,47c-27,17 -28,29 -4,35c13,4 11,5 -5,6c-18,1 -23,-4 -23,-24z"/>
   <path id="svg_22" d="m4294,3846c-10,-41 -1,-61 26,-61c27,0 36,20 26,61c-4,15 -14,24 -26,24c-12,0 -22,-9 -26,-24zm42,-12c8,-30 -10,-54 -27,-37c-13,13 -4,63 11,63c5,0 13,-12 16,-26z"/>
   <path id="svg_23" d="m4372,3858c-26,-26 -8,-83 24,-76c15,2 19,12 19,43c0,42 -19,57 -43,33zm33,-33c0,-16 -6,-30 -12,-32c-9,-3 -13,7 -13,32c0,25 4,35 13,33c6,-3 12,-17 12,-33z"/>
   <path id="svg_24" d="m4513,3848c1,-8 -10,-14 -25,-16c-24,-3 -28,-8 -27,-35l1,-32l8,30l8,30l2,-30l2,-30l8,30l7,30l5,-30l5,-30l2,28c0,15 6,27 11,27c6,0 10,9 10,20c0,11 -4,20 -10,20c-5,0 -9,-6 -7,-12z"/>
   <path id="svg_25" d="m7125,4218c-9,-14 -11,-24 -5,-26c5,-2 10,-18 10,-36c0,-31 1,-32 38,-27c20,3 29,6 20,9c-10,2 -18,7 -18,12c0,5 8,11 18,13c14,4 14,5 -3,6c-17,1 -18,3 -5,11c13,8 13,11 1,19c-11,7 -10,10 5,14c11,3 6,5 -14,6c-19,1 -31,5 -27,11c12,20 -4,9 -20,-12zm35,-68c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_26" d="m7255,4230c4,-6 -5,-10 -19,-10c-14,0 -26,-3 -26,-7c0,-5 25,-8 55,-8c30,0 55,3 55,7c0,5 -11,8 -25,8c-14,0 -25,5 -25,10c0,6 -5,10 -11,10c-5,0 -7,-4 -4,-10z"/>
   <path id="svg_27" d="m7336,4227c3,-10 9,-15 12,-12c3,3 0,11 -7,18c-10,9 -11,8 -5,-6z"/>
   <path id="svg_28" d="m7460,4221c0,-12 8,-21 23,-24c19,-4 19,-4 -5,-6c-21,-1 -25,-5 -21,-21c5,-18 15,-24 36,-21c4,0 7,-4 7,-10c0,-6 -9,-8 -22,-4c-18,5 -20,4 -8,-4c22,-16 40,-13 40,6c0,13 3,14 12,5c7,-7 17,-12 23,-12c5,0 3,5 -5,10c-10,6 -11,10 -2,10c6,0 12,3 12,8c0,4 -19,7 -42,6c-26,-2 -31,0 -13,2c52,8 63,16 35,24c-25,8 -25,8 -2,9c17,1 22,6 20,19c-2,12 -15,18 -46,20c-36,3 -42,0 -42,-17zm68,2c-10,-2 -28,-2 -40,0c-13,2 -5,4 17,4c22,1 32,-1 23,-4z"/>
   <path id="svg_29" d="m7577,4220c-10,-12 -10,-13 3,-4c9,7 23,8 35,3c17,-6 17,-8 3,-8c-10,-1 -18,-8 -18,-16c0,-10 11,-15 35,-15c24,0 35,5 35,15c0,8 -8,15 -17,16c-12,1 -10,4 7,9c21,7 22,8 5,10c-64,6 -77,4 -88,-10z"/>
   <path id="svg_30" d="m7728,4232c-28,-3 -29,-4 -32,-72c-1,-30 0,-30 49,-30l50,0l-1,46c-2,60 -7,64 -66,56zm23,-24c1,-7 1,-16 0,-20c-2,-12 14,-9 27,4c9,9 12,9 12,0c0,-7 -1,-12 -2,-13c-2,0 -23,-2 -47,-5c-32,-4 -42,-2 -39,7c2,7 11,14 19,17c11,3 11,2 -1,-7c-13,-9 -13,-11 3,-11c9,0 17,6 17,14c0,8 -8,17 -17,19c-14,4 -12,5 5,6c12,0 23,-5 23,-11zm29,8c0,-3 -4,-8 -10,-11c-5,-3 -10,-1 -10,4c0,6 5,11 10,11c6,0 10,-2 10,-4zm-50,-66c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10zm50,0c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_31" d="m7892,4208c-2,-29 -6,-37 -24,-41l-23,-4l23,-2c13,0 22,-8 23,-18c0,-14 2,-15 6,-3c12,32 48,41 40,10c-3,-11 -1,-20 4,-20c8,0 11,18 11,70c0,40 -2,46 -11,31c-5,-8 -7,-21 -4,-29c5,-13 -12,-31 -29,-32c-4,0 -9,17 -11,38l-4,37l-1,-37z"/>
   <path id="svg_32" d="m8000,4233c0,-7 -8,-13 -17,-14c-15,0 -15,-2 2,-9c17,-7 17,-9 3,-9c-21,-1 -22,-5 -7,-33c8,-15 8,-22 0,-27c-6,-4 7,-7 29,-8c31,-2 44,3 59,23c16,20 20,21 25,8c8,-22 8,-22 -11,-26c-10,-2 5,-4 32,-4c28,0 42,2 33,4c-21,4 -21,7 -8,33c10,17 7,19 -22,20c-32,2 -32,2 7,9c39,7 39,7 8,9c-24,1 -33,6 -33,18c0,15 -2,14 -15,-3c-13,-16 -16,-17 -25,-4c-8,13 -10,13 -10,-2c0,-10 7,-18 15,-18c20,0 19,-13 -3,-41c-25,-30 -59,-21 -40,11c11,17 10,22 -2,30c-12,8 -12,10 5,11c15,0 16,2 5,6c-8,3 -18,11 -22,17c-5,8 -8,7 -8,-1zm18,-54c-2,-6 -8,-10 -13,-10c-5,0 -11,4 -13,10c-2,6 4,11 13,11c9,0 15,-5 13,-11zm107,-9c-3,-5 -10,-10 -16,-10c-5,0 -9,5 -9,10c0,6 7,10 16,10c8,0 12,-4 9,-10z"/>
   <path id="svg_33" d="m8180,4208c0,-18 -3,-44 -6,-58c-6,-24 -6,-25 9,-5c15,18 16,18 17,3c0,-11 7,-18 18,-17c10,0 12,3 5,6c-20,7 -15,22 6,20c11,0 19,-6 18,-11c-1,-5 7,-11 18,-13c11,-1 14,0 7,3c-6,3 -9,10 -6,16c4,6 0,15 -7,20c-11,7 -11,11 -1,15c6,2 12,16 12,29c0,22 -4,24 -45,24c-44,0 -45,-1 -45,-32zm68,15c-10,-2 -28,-2 -40,0c-13,2 -5,4 17,4c22,1 32,-1 23,-4zm-41,-33c1,-11 -2,-20 -8,-20c-5,0 -9,9 -9,20c0,11 4,20 8,20c4,0 8,-9 9,-20zm33,-10c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_34" d="m8313,4232c-25,-4 -31,-18 -10,-25c9,-3 8,-8 -3,-22c-9,-11 -10,-16 -2,-11c8,5 12,-2 13,-26c1,-18 3,-25 6,-15c3,11 14,17 31,16c15,0 21,-3 14,-6c-6,-2 -9,-9 -6,-14c10,-17 34,12 34,42c0,24 -4,28 -32,32c-32,4 -32,4 5,5c20,1 37,6 37,11c0,10 -53,18 -87,13zm50,-49c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5zm0,-20c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_35" d="m8410,4178c0,-56 1,-58 17,-42c11,11 18,13 21,5c2,-6 11,-11 20,-10c11,0 12,2 5,6c-21,8 -15,39 7,40c11,1 20,-3 20,-8c0,-6 -4,-7 -10,-4c-5,3 -10,2 -10,-2c0,-12 22,-33 35,-33c5,0 3,5 -5,11c-9,6 -11,12 -5,15c6,2 9,22 7,43l-4,40l-49,-1l-49,-1l0,-59zm17,-10c-2,-13 -4,-3 -4,22c0,25 2,35 4,23c2,-13 2,-33 0,-45zm73,52c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm-53,-37c-3,-10 -5,-4 -5,12c0,17 2,24 5,18c2,-7 2,-21 0,-30zm46,10c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_36" d="m7378,4223c12,-2 30,-2 40,0c9,3 -1,5 -23,4c-22,0 -30,-2 -17,-4z"/>
   <path id="svg_37" d="m7816,4184c5,-76 23,-76 29,0c3,39 1,46 -14,46c-16,0 -18,-7 -15,-46z"/>
   <path id="svg_38" d="m8547,4212c-19,-20 -23,-37 -7,-27c10,6 33,45 27,45c-2,0 -11,-8 -20,-18z"/>
   <path id="svg_39" d="m8599,4213c12,-23 29,-38 37,-31c2,3 -8,15 -22,29c-25,23 -26,23 -15,2z"/>
   <path id="svg_40" d="m8695,4221l50,-5l-55,-6l-55,-7l53,-1c50,-2 52,-3 52,-31c0,-16 -6,-31 -12,-34c-7,-2 -10,-8 -6,-12c16,-17 38,18 38,61l0,44l-57,-2l-58,-2l50,-5z"/>
   <path id="svg_41" d="m7219,4189c-13,-4 -17,-7 -9,-8c8,-1 21,-10 27,-20c10,-16 10,-20 -5,-23c-9,-2 4,-4 29,-4c33,1 42,4 33,11c-15,11 -7,29 16,37c23,8 -64,14 -91,7zm61,-19c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_42" d="m7337,4180c3,-11 0,-26 -6,-34c-9,-11 0,-13 52,-13c51,0 54,1 15,4c-46,4 -48,6 -48,34c0,16 -4,29 -9,29c-5,0 -7,-9 -4,-20z"/>
   <path id="svg_43" d="m7365,4174l0,-25l18,22l17,21l0,-21c0,-14 6,-21 20,-21c11,0 20,4 20,10c0,5 -7,7 -15,4c-9,-4 -15,0 -15,9c0,8 6,18 13,20c6,3 -4,6 -23,6c-31,1 -35,-2 -35,-25z"/>
   <path id="svg_44" d="m7572,4179c-8,-12 -9,-18 -3,-15c5,4 12,-4 14,-16c3,-15 5,-9 6,15c1,43 0,44 -17,16z"/>
   <path id="svg_45" d="m7860,4190c0,-5 5,-10 11,-10c5,0 7,5 4,10c-3,6 -8,10 -11,10c-2,0 -4,-4 -4,-10z"/>
   <path id="svg_46" d="m8552,4160l-23,-30l52,0c51,0 52,0 34,20c-19,21 -30,27 -20,10c7,-11 -22,-26 -31,-17c-3,3 -1,15 6,26c16,30 7,26 -18,-9z"/>
   <path id="svg_47" d="m8660,4167c0,-20 4,-23 30,-19c21,3 30,10 30,23c0,14 -7,19 -30,19c-25,0 -30,-4 -30,-23zm50,3c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_48" d="m7096,4155c-3,-9 -6,-22 -5,-28c0,-7 5,-1 10,12c5,13 8,26 5,28c-2,2 -6,-3 -10,-12z"/>
   <path id="svg_49" d="m7600,4156c0,-8 9,-18 20,-21c29,-9 60,3 53,21c-7,19 -73,19 -73,0zm55,-7c-7,-11 -35,-12 -35,-1c0,4 9,8 20,9c11,1 18,-2 15,-8z"/>
   <path id="svg_50" d="m7804,3856c-3,-8 -3,-19 0,-25c4,-5 2,-12 -3,-16c-17,-10 0,-35 24,-35c23,0 40,22 27,35c-3,3 -7,16 -7,28c0,25 -32,36 -41,13zm34,-7c-2,-6 -8,-10 -13,-10c-5,0 -11,4 -13,10c-2,6 4,11 13,11c9,0 15,-5 13,-11zm0,-47c2,-7 -3,-12 -12,-12c-9,0 -16,7 -16,16c0,17 22,14 28,-4z"/>
   <path id="svg_51" d="m7874,3857c-12,-32 0,-72 23,-75c43,-6 42,78 -1,86c-9,2 -19,-3 -22,-11zm36,-33c0,-24 -4,-34 -12,-32c-24,8 -22,68 2,68c5,0 10,-16 10,-36z"/>
   <path id="svg_52" d="m7993,3832c-30,-3 -33,-6 -32,-35l1,-32l8,30c6,24 8,26 9,8c2,-34 37,-30 44,5c3,15 5,27 4,27c-1,0 -17,-1 -34,-3z"/>
   <path id="svg_53" d="m9615,4218c-9,-14 -11,-24 -5,-26c5,-2 10,-18 10,-36c0,-31 1,-32 38,-27c20,3 29,6 20,9c-10,2 -18,7 -18,12c0,5 8,11 18,13c14,4 14,5 -3,6c-17,1 -18,3 -5,11c13,8 13,11 1,19c-11,7 -10,10 5,14c11,3 6,5 -14,6c-19,1 -31,5 -27,11c12,20 -4,9 -20,-12zm35,-68c0,-5 -4,-10 -10,-10c-5,0 -10,5 -10,10c0,6 5,10 10,10c6,0 10,-4 10,-10z"/>
   <path id="svg_54" d="m9745,4230c4,-6 -5,-10 -19,-10c-14,0 -26,-3 -26,-7c0,-5 25,-8 55,-8c30,0 55,3 55,7c0,5 -11,8 -25,8c-14,0 -25,5 -25,10c0,6 -5,10 -11,10c-5,0 -7,-4 -4,-10z"/>
   <path id="svg_55" d="m9902,4208c-2,-29 -6,-37 -24,-41c-23,-4 -23,-4 -1,-6c12,0 24,-9 26,-18c4,-17 5,-17 6,0c0,9 7,17 14,17c9,0 9,2 0,8c-6,4 -13,23 -16,42l-4,35l-1,-37z"/>
   <path id="svg_56" d="m10000,4230c0,-5 -13,-10 -29,-10c-27,0 -29,-3 -33,-45c-2,-25 0,-45 4,-45c5,0 8,9 8,19c0,15 6,19 25,16c14,-1 25,2 25,6c0,5 -6,9 -12,9c-9,0 -9,3 1,9c11,7 9,10 -10,14c-23,4 -22,4 4,6c25,1 27,-2 27,-36c0,-29 -3,-34 -12,-25c-15,15 -25,15 -31,-1c-3,-9 4,-12 24,-11c16,1 32,-2 35,-7c8,-13 24,-1 24,19c0,14 -2,14 -9,3c-6,-10 -11,-5 -16,20c-5,22 -4,34 4,37c6,2 11,11 11,20c0,15 -2,15 -10,2c-6,-10 -10,-11 -10,-2c0,6 -4,12 -10,12c-5,0 -10,-4 -10,-10z"/>
   <path id="svg_57" d="m10085,4229c-16,-4 -25,-7 -18,-8c7,0 10,-8 7,-16c-5,-12 3,-15 35,-15c29,0 41,4 41,14c0,8 6,16 13,19c22,7 -47,13 -78,6zm48,-26c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_58" d="m10253,4218l17,-28l-41,0l-42,0l19,23l19,22l-23,-20c-21,-17 -22,-21 -8,-31c21,-15 20,-30 -1,-44c-12,-8 -13,-10 -3,-7c8,2 19,13 25,25c12,28 45,29 45,3c0,-11 -7,-22 -15,-24c-11,-4 -10,-4 2,-3c11,1 19,11 22,26c1,14 7,27 11,30c5,3 -3,16 -18,30l-27,25l18,-27z"/>
   <path id="svg_59" d="m10546,4223c-10,-38 4,-106 19,-92c8,9 14,79 9,94c-8,20 -22,19 -28,-2z"/>
   <path id="svg_60" d="m10621,4208c-1,-26 -6,-38 -18,-41c-16,-4 -16,-5 -1,-6c9,0 18,-9 20,-18c8,-36 14,20 7,62l-6,40l-2,-37z"/>
   <path id="svg_61" d="m10742,4208c-2,-29 -6,-37 -24,-41l-23,-4l23,-2c13,0 22,-8 23,-18c0,-14 2,-15 6,-3c12,32 48,41 40,10c-3,-11 -1,-20 4,-20c5,0 9,10 10,23c0,12 2,32 3,44c1,12 -1,28 -6,35c-5,8 -8,2 -8,-18c0,-20 -6,-34 -16,-38c-23,-9 -22,-9 -27,32l-4,37l-1,-37z"/>
   <path id="svg_62" d="m10850,4233c0,-7 -8,-13 -17,-14c-15,0 -15,-2 2,-9c17,-7 17,-9 3,-9c-21,-1 -22,-5 -7,-33c8,-15 8,-22 0,-27c-6,-4 6,-8 26,-8c28,-1 33,1 20,8c-14,8 -15,13 -4,30c10,16 9,21 -3,29c-12,8 -12,10 5,11c15,0 16,2 5,6c-8,3 -18,11 -22,17c-5,8 -8,7 -8,-1zm18,-54c-2,-6 -8,-10 -13,-10c-5,0 -11,4 -13,10c-2,6 4,11 13,11c9,0 15,-5 13,-11z"/>
   <path id="svg_63" d="m10923,4232c-25,-4 -31,-18 -10,-25c9,-3 8,-8 -3,-22c-9,-11 -10,-16 -2,-11c8,5 12,-2 13,-26c1,-18 3,-25 6,-15c3,11 14,17 31,16c15,0 21,-3 14,-6c-6,-2 -9,-9 -6,-14c10,-17 34,12 34,42c0,24 -4,28 -32,32c-32,4 -32,4 5,5c20,1 37,6 37,11c0,10 -53,18 -87,13zm50,-49c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5zm0,-20c-7,-2 -21,-2 -30,0c-10,3 -4,5 12,5c17,0 24,-2 18,-5z"/>
   <path id="svg_64" d="m11020,4178c0,-56 1,-58 17,-42c11,11 18,13 21,5c2,-6 11,-11 20,-10c11,0 12,2 5,6c-21,8 -15,39 7,40c11,1 20,-3 20,-8c0,-6 -4,-7 -10,-4c-5,3 -10,2 -10,-2c0,-12 22,-33 35,-33c5,0 3,5 -5,11c-9,6 -11,12 -5,15c6,2 9,22 7,43l-4,40l-49,-1l-49,-1l0,-59zm17,-10c-2,-13 -4,-3 -4,22c0,25 2,35 4,23c2,-13 2,-33 0,-45zm73,52c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10zm-53,-37c-3,-10 -5,-4 -5,12c0,17 2,24 5,18c2,-7 2,-21 0,-30zm46,10c-7,-2 -19,-2 -25,0c-7,3 -2,5 12,5c14,0 19,-2 13,-5z"/>
   <path id="svg_65" d="m9826,4184c5,-76 23,-76 29,0c3,39 1,46 -14,46c-16,0 -18,-7 -15,-46z"/>
   <path id="svg_66" d="m10339,4221c28,-5 32,-8 20,-18c-8,-6 -25,-13 -39,-16c-25,-4 -25,-4 3,-6c19,-1 27,-6 27,-20c0,-11 -6,-21 -12,-24c-7,-2 -10,-8 -6,-12c12,-12 28,5 28,30c0,18 6,25 28,28l27,4l-30,2l-30,1l25,20l25,20l-50,-2c-44,-1 -46,-1 -16,-7z"/>
   <path id="svg_67" d="m10429,4228c-1,-5 -2,-62 0,-80c2,-28 21,-21 21,8c0,14 4,23 10,19c5,-3 7,-12 3,-20c-8,-23 5,-18 18,6c6,12 7,19 1,15c-12,-7 -34,17 -30,34c3,10 -20,28 -23,18z"/>
   <path id="svg_68" d="m10485,4220c-13,-6 -15,-9 -5,-9c19,-1 25,-62 7,-73c-8,-5 -7,-8 5,-8c22,0 25,7 29,54c4,42 -4,50 -36,36z"/>
   <path id="svg_69" d="m10666,4184c5,-76 23,-76 29,0c3,39 1,46 -14,46c-16,0 -18,-7 -15,-46z"/>
   <path id="svg_70" d="m11157,4212c-19,-20 -23,-37 -7,-27c10,6 33,45 27,45c-2,0 -11,-8 -20,-18z"/>
   <path id="svg_71" d="m11209,4213c12,-23 29,-38 37,-31c2,3 -8,15 -22,29c-25,23 -26,23 -15,2z"/>
   <path id="svg_72" d="m11305,4221l50,-5l-55,-6l-55,-7l53,-1c50,-2 52,-3 52,-31c0,-16 -6,-31 -12,-34c-7,-2 -10,-8 -6,-12c16,-17 38,18 38,61l0,44l-57,-2l-58,-2l50,-5z"/>
   <path id="svg_73" d="m9709,4189c-13,-4 -17,-7 -9,-8c8,-1 21,-10 27,-20c10,-16 10,-20 -5,-23c-9,-2 4,-4 29,-4c33,1 42,4 33,11c-15,11 -7,29 16,37c23,8 -64,14 -91,7zm61,-19c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_74" d="m9870,4190c0,-5 5,-10 11,-10c5,0 7,5 4,10c-3,6 -8,10 -11,10c-2,0 -4,-4 -4,-10z"/>
   <path id="svg_75" d="m10031,4184c0,-11 3,-14 6,-6c3,7 2,16 -1,19c-3,4 -6,-2 -5,-13z"/>
   <path id="svg_76" d="m10710,4190c0,-5 5,-10 11,-10c5,0 7,5 4,10c-3,6 -8,10 -11,10c-2,0 -4,-4 -4,-10z"/>
   <path id="svg_77" d="m11162,4160l-23,-30l52,0c51,0 52,0 34,20c-19,21 -30,27 -20,10c7,-11 -22,-26 -31,-17c-3,3 -1,15 6,26c16,30 7,26 -18,-9z"/>
   <path id="svg_78" d="m11270,4167c0,-20 4,-23 30,-19c21,3 30,10 30,23c0,14 -7,19 -30,19c-25,0 -30,-4 -30,-23zm50,3c0,-5 -9,-10 -20,-10c-11,0 -20,5 -20,10c0,6 9,10 20,10c11,0 20,-4 20,-10z"/>
   <path id="svg_79" d="m10061,4153c2,-24 2,-25 6,-5c5,25 23,30 23,7c0,-9 9,-15 25,-15c14,0 25,-5 25,-11c0,-8 5,-8 15,1c8,7 15,21 15,31c0,16 -8,19 -55,19c-54,0 -55,-1 -54,-27zm88,0c0,-10 -3,-13 -5,-7c-3,7 -15,10 -27,8c-21,-4 -21,-4 -2,5c29,14 35,13 34,-6z"/>
   <path id="svg_80" d="m9586,4155c-3,-9 -6,-22 -5,-28c0,-7 5,-1 10,12c5,13 8,26 5,28c-2,2 -6,-3 -10,-12z"/>
   <path id="svg_81" d="m10333,3863c9,-2 17,-11 17,-18c0,-7 -8,-16 -17,-18c-17,-4 -17,-5 0,-6c25,-2 21,-29 -5,-34c-20,-4 -19,-4 5,-6c30,-1 49,25 27,39c-8,5 -9,10 -2,14c18,11 2,36 -22,35c-16,-1 -17,-2 -3,-6z"/>
   <path id="svg_82" d="m10384,3846c-10,-41 -1,-61 26,-61c27,0 36,20 26,61c-4,15 -14,24 -26,24c-12,0 -22,-9 -26,-24zm42,-12c8,-30 -10,-54 -27,-37c-13,13 -4,63 11,63c5,0 13,-12 16,-26z"/>
   <path id="svg_83" d="m10462,3858c-26,-26 -8,-83 24,-76c15,2 19,12 19,43c0,42 -19,57 -43,33zm33,-33c0,-16 -6,-30 -12,-32c-9,-3 -13,7 -13,32c0,25 4,35 13,33c6,-3 12,-17 12,-33z"/>
   <path id="svg_84" d="m10603,3848c1,-8 -10,-14 -25,-16c-24,-3 -28,-8 -27,-35l1,-32l8,30l8,30l2,-30l2,-30l8,30l7,30l5,-30l5,-30l2,28c0,15 6,27 11,27c6,0 10,9 10,20c0,11 -4,20 -10,20c-5,0 -9,-6 -7,-12z"/>
  </g>
  <path class="room" id="room_01" d="m893,185c0,0 423,-1 423,-1c0,0 5,327 5,327c0,0 -431,-1 -431,-1c0,0 3,-325 3,-325z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke="#000000" fill="#e5e5e5"/>
  <path class="room" id="room_02" d="m708,182l164,1l2,328l-165,1l-1,-330z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="null" stroke="#000000" fill="#e5e5e5"/>
  <path class="room" id="room_03" d="m164,182l526,1l2,328l-526,-1l-2,-328z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="null" stroke="#000000" fill="#e5e5e5"/>
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
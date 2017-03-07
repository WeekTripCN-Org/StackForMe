<?php
namespace factory;

/**
 * 实体鸡
 *
 * @author WeekTrip<weektrip@weektrip.cn>
 */
 class Chicken implements AnimalInterface
 {
     /**
      * 构造函数
      *
      * @return void
      */
     public function __construct()
     {
         echo "Produce a chicken. \n";
     }
 }

<?php

class Brave extends Human
 {
  //オーバーライド
   /************** 中略 **************/
  const MAX_HITPOINT = 120;
  public $hitPoint = self::MAX_HITPOINT;
  private $attackPoint = 30;

  public function __construct($name)
  {
    parent::__construct($name, $this->hitPoint, $this->attackPoint);
  }


  public function doAttack($enemy)
  {
    if(rand(1, 3) === 1) {
      // スキルの発動
      echo "『" .$this->getName() . "』のスキルが発動した！\n";
      echo "『ぜんりょくぎり』！！\n";
      echo $enemy->getName(). " に " . $this->attackPoint * 1.5 . " のダメージ！\n";
      $enemy->tookDamage($this->attackPoint * 1.5);
    } else {
      parent::doAttack($enemy);
    }
    return true;

  }
}

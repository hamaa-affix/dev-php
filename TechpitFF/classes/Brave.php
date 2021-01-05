<?php

class Brave extends Human {
  //オーバーライド
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

<?php

class Enemy
{
  const MAX_HITPOINT = 50; // 最大HPの定義 定数
  private $name; // 敵の名前
  private $hitPoint = 50; // 現在のHP
  private $attackPoint = 10; // 攻撃力

  //========== ここから追加する ==========
  public function __construct($name, $attackPoint)
  {
      $this->name = $name;
      $this->attackPoint = $attackPoint;
  }

  public function getHitPoint()
  {
      return $this->hitPoint;
  }

  public function getAttackPoint()
  {
      return $this->attackPoint;
  }

  public function getName(): String {
    return $this->name;
  }

  public function doAttack($human) {
    echo "『" .$this->name . "』の攻撃！\n";
    echo "【" . $human->getName() . "】に " . $this->attacPoint . " のダメージ！\n";
    $human->tookDamage($this->attacPoint);
  }

  public function tookDamage($damage) {
    $this->hitPoint -= $damage;
    if($this->hitPoint < 0) $this->hitPoint = 0;
  }
}

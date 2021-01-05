<?php

class Enemy
{
  const MAX_HITPOINT = 50;
  private $name;
  public function __construct($name) {
    $this->name = $name;
  }
  public $hitPoint = 50;
  public $attacPoint = 10;

  public function doAttack($human) {
    echo "『" .$this->name . "』の攻撃！\n";
    echo "【" . $human->getName() . "】に " . $this->attacPoint . " のダメージ！\n";
    $human->tookDamage($this->attacPoint);
  }

  public function tookDamage($damage) {
    $this->hitPoint -= $damage;
    if($this->hitPoint < 0) $this->hitPoint = 0;
  }

  public function getName(): String {
    return $this->name;
  }
}

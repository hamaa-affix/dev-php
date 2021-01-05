<?php

class Human
{
	// プロパティ
	const MAX_HITPOINT = 100; // 最大HPの定義 定数
	private $name; // 人間の名前
	protected $attackPoint; // 攻撃力
	public $hitPoint = 100; // 現在のHP

	public function __construct($name, $attackPoint) {
		$this->name = $name;
		$this->attackPoint = $attackPoint;
	}

	public function doAttack($enemy) {
		echo "『".$this->name."』の攻撃！\n";
		echo "【" . $enemy->getName() . "】に " . $this->attackPoint . " のダメージ！\n";
		$enemy->tookDamage($this->attackPoint);
	}

	public function tookDamage($damage) {
		$this->hitPoint -= $damage;
		// HPが0未満にならないための処理
		if($this->hitPoint < 0) $this->hitPoint = 0;
	}

	public function getName() {
		return $this->name;
	}
}

<?php

echo "処理のはじまりはじまり～！\n\n";
require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once("./classes/Brave.php");


$tiida = new Brave("ティーダ", 20);
$goblin = new Enemy("ゴブリン");

// $tiida->name = "ティーダ";
// $goblin->name = "ゴブリン";

echo $tiida->getName() . "\n";
echo $goblin->getName() . "\n";

$randam_damage = rand(0, 20);

$turn = 1;

while($tiida->hitPoint > 0 && $goblin->hitPoint > 0) {
  echo "***". $turn ++."ターン目 ***\n\n"; ;
  // 現在のHPの表示
  echo $tiida->getName() . "　：　" . $tiida->hitPoint . "/" . $tiida::MAX_HITPOINT . "\n";
  echo $goblin->getName(). "　：　" . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n";
  echo "\n";
  // 攻撃
  $tiida->doAttack($goblin);
  echo "\n";
  $goblin->doAttack($tiida);
  echo "\n";
}


echo "★★★ 戦闘終了 ★★★\n\n";
echo $tiida->getName() . "　：　" . $tiida->hitPoint . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->getName() . "　：　" . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n\n";

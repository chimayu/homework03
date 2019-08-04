<?php

class Character
{
  // ゲームタイトル
  public $title;
  // キャラ名
  private $name;

  //コンストラクタ
  function __construct($title, $name)
  {
    echo $title . ' の主人公は ' . $name . ' です。<br>';
  }

  protected function getHeroineName($new_name)
  {
    $this->name = $new_name;
    echo 'このゲームのヒロインは ' . $new_name . ' です。<br>';
  }
}


class ChildCharacter extends Character
{
  
  //コンストラクタ
  public function __construct($new_name)
  {
    $this->getHeroineName($new_name);
  }
}

//インスタンス化
$ff4a = new Character('FF4','セシル');
$ff4b = new ChildCharacter('ローザ');

$ff5 = new Character('FF5','バッツ');

$ff6 = new Character('FF6','ロック');

$ff7 = new Character('FF7','クラウド');
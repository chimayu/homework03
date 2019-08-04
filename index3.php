<?php
class User
{
  //メンバー
  public $name;

  //コンストラクタ
  public function __construct($name){
    //引数をメンバー変数に格納
    $this->name = $name;
  }

  protected function changeName($new_name){
    $this->name = $new_name;
  }
}

//classを継承
class ChildUser extends User{
  public function subChangeName($new_name){
    //protectedの関数は子クラスから呼ぶことは可能
    $this->changeName($new_name);
  }
};

//インスタンス化
$user = new User('sato');
echo $user->name;//sato

//Userクラスを継承したクラスをインスタンス化
$new_user = new ChildUser('kato');

$new_user->subChangeName('chinko');
echo $new_user->name;//chinko

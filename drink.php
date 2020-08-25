<?php
// menu.phpを読み込む
require_once('menu.php');

// Menuクラスを継承したDrinkクラスを作成
class Drink extends Menu {
  // $typeというprivateなプロパティを定義
  private $type;

  // Menuクラスに__constructを記述
  public function __construct($name, $price, $image, $type) {
    // 親クラスのコンストラクトを呼び出す
    // $this->name = $name;
    // $this->price = $price;
    // $this->image = $image;
    // self::$count++;

    parent::__construct($name, $price, $image);
      $this->type = $type;
      
    $this->type = $type;
  }

  // getTypeメソッドを定義する
  public function getType() {
    return $this->type;
  }

// setTypeメソッドを定義する
public function setType($type) {
  $this->type=$type;
  }

}

?>
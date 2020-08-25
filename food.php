<?php
// menu.phpを読み込む
require_once('menu.php');

// Menuクラスを継承したFoodクラスを作成
class Food extends Menu {
  // $spicinessというprivateなプロパティを定義する
  private $spiciness;

  // 親クラスの__constructをオーバーライトする
  public function __construct($name, $price, $image, $spiciness) {
    parent::__construct($name, $price, $image);
    $this->spiciness = $spiciness;
  }

  // getSpicinessメソッドを定義
  public function getSpiciness() {
    return $this->spiciness;
  }

}

?>
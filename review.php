<?php
// Reviewクラスを定義する
class Review {
  private $menuName;

  private $body;

  // Reviewクラスにコンストラクトを定義する
  public function __construct($menuName, $body) {
    $this->menuName = $menuName;
    $this->body = $body;
  }

  //それぞれのプロパティのゲッターを定義する
  public function getMenuName() {
    return $this->menuName;
  }

  public function getBody() {
    return $this->body;
  }
}

?>
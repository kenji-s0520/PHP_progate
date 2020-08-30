<?php
// Reviewクラスを定義する
class Review {
  private $menuName;

  // $userNameというprivateなプロパティを定義
  private $userName;

  private $body;

  // Reviewクラスにコンストラクトを定義する
  // 2つめの引数として$userNameを追加  practice8の追加
  public function __construct($menuName, $userName, $body) {
    $this->menuName = $menuName;

    $this->userName = $userName;

    $this->body = $body;
  }

  //それぞれのプロパティのゲッターを定義する
  public function getMenuName() {
    return $this->menuName;
  }

  public function getBody() {
    return $this->body;
  }

  // getUserメソッドを定義
  public function getUser($users) {
    foreach ($users as $user) {
      if ($user->getName() == $this->userName) { // UserインスタンスがもつnameプロパティとReviewインスタンスがもつuserNameプロパティを記述  practice8
        return $user;   // userNameプロパティの値と一致するnameプロパティをもつUserインスタンスを戻り値とする   practice8
      }
    }
  }
}

?>
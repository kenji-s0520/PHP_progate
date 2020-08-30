<?php
// Reviewクラスを定義する
class Review {
  private $menuName;

  // $userNameというprivateなプロパティを定義
  //private $userName;   practice9

  // $userNameを$userIdに書き換える  practice9
  private $userId;

  private $body;

  // Reviewクラスにコンストラクトを定義する
  // 2つめの引数として$userNameを追加  practice8の追加
  // 引数の$userNameを$userIdに書き換える  practice9
  public function __construct($menuName, $userId, $body) {   // practice9
    $this->menuName = $menuName;

    $this->userId = $userId;  // $userNameを$userIdに書き換える

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
      // $userのidプロパティと、インスタンス自身のuserIdプロパティを比べるように書き換える  practice9
      if ($user->getId() == $this->userId) {
      //if ($user->getName() == $this->userName) { // UserインスタンスがもつnameプロパティとReviewインスタンスがもつuserNameプロパティを記述  practice8
        return $user;   // userNameプロパティの値と一致するnameプロパティをもつUserインスタンスを戻り値とする   practice8
      }
    }
  }
}

?>
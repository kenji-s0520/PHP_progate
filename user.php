<?php
// Userクラスを定義する
class User {
  // $idというprivateなプロパティを定義  practice9
  private $id;
  private $name;
  private $gender;

  // $countというprivateなクラスプロパティを、初期値を数値の0として定義  practice9
  private static $count = 0;

  public function __construct($name, $gender) {
    $this->name = $name;
    $this->gender = $gender;

    // クラスプロパティ$countの値に1を足してください  practice9
    self::$count++;

    // idプロパティにクラスプロパティ$countnの値を代入する  practice9
    $this->id = self::$count;
  }

  // getIdメソッドを定義する
  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
  }

  public function getGender() {
    return $this->gender;
  }
}

?>
<?php
  class Menu {
    protected $name;
    protected $price;
    protected $image;
    private $orderCount = 0;
    // クラスプロパティ$countのアクセス権をprivateに、初期値を数値の0にする
    protected static $count = 0;
    public static function getCount() {
      return self::$count;
    }

    public function __construct($name, $price, $image) {
      $this->name = $name;

      $this->price = $price;

      $this->image = $image;

      // クラスプロパティcountの値に１を足していく
      self::$count++;
    }

    public function hello() {
      echo '私は'.$this->name.'です';
    }

    public function getName() {
      return $this->name;
    }

    public function getImage() {
      return $this->image;
    }

    public function getOrderCount() {
      return $this->orderCount;
    }

    public function setOrderCount($orderCount) {
      $this->orderCount = $orderCount;
    }

    public function getTaxIncludedPrice() {
      return floor($this->price * 1.10);
    }

    // getTotalPriceメソッドを定義
    public function getTotalPrice() {
      return $this->getTaxIncludedPrice() * $this->orderCount;
    }
  }
?>
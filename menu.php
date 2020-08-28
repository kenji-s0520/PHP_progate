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

    // getReviewsメソッドを定義する
    public function getReviews($reviews) {
      foreach ($reviews as $review) {
        if ($review->getMenuName() == $this->name) {
          $reviewsForMenu[] = $review;
        }
      }
      return $reviewsForMenu;
    }

    //public static function getCount(){
      //return self::$count;
    //}

    // findByNameというクラスメソッドを定義
    public static function findByName($menus, $name){
      foreach ($menus as $menu){
        if ($menu->getName() == $name){
          return $menu;
        }
      }
    }
  }
?>
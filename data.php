<?php
  // menu.phpを読み込んでください
  // require_once('menu.php');

  // drink.phpとfood.phpを読み込む
  require_once('drink.php');
  require_once('food.php');

  // $juice = new Menu('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');

  // $juiceをDrinkクラスのインスタンスとする
  $juice = new Drink('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png', 'アイス');

  // $juiceのセッターを用いて$typeプロパティに'アイス'を代入
  // $juiceのnewの引数に代入のため、削除 最新
  //$juice->setType('アイス');

  //$coffee = new Menu('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');

  // $coffeeをDrinkクラスのインスタンスとする
  $coffee = new Drink('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png', 'ホット');

  // $coffeeのセッターを用いて$typeプロパティに'ホット'を代入
  // $coffeeのnewの引数に代入のため、削除 最新
  //$coffee->setType('ホット');

  // $curry = new Menu('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');

  // $curryをFoodクラスのインスタンスとする
  $curry = new Food('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png', 3);

  // $pasta = new Menu('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

  // $pastaをFoodクラスのインスタンスとする
  $pasta = new Food('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png', 1);

  $juice->setOrderCount(2);

  $menus = array($juice, $coffee, $curry, $pasta);

?>
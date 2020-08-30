<?php
  // menu.phpを読み込んでください
  // require_once('menu.php');

  // drink.phpとfood.phpを読み込む
  require_once('drink.php');
  require_once('food.php');

  // review.phpを読み込む
  require_once('review.php');

  // user.phpを読み込む
  require_once('user.php');

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

  //$juice->setOrderCount(2);

  $menus = array($juice, $coffee, $curry, $pasta);

  // 変数$user1にUserクラスのインスタンスを代入する
  $user1 = new User('suzuki', 'male');

  // 変数$user2にUserクラスのインスタンスを代入する
  $user2 = new User('tanaka', 'female');

  // 変数$review1にReviewクラスのインスタンスを代入する
  //$review1 = new Review($juice->getName(), '果肉たっぷりのオレンジジュースです！');

  // 変数$review2にReviewクラスのインスタンスを代入する
  //$review2 = new Review($curry->getName(), '具がゴロゴロしていてとてもおいしいです');

  //変数$reviewsに$review1と$review2を要素とする配列を代入する
  //$reviews = array($review1, $review2);

  // 以下にReviewインスタンス生成用のコードを作成  practice8
  $users = array($user1, $user2);

  $review1 = new Review($juice->getName(), $user1->getName(), '果肉たっぷりのオレンジジュースです！');
  $review2 = new Review($curry->getName(), $user1->getName(), '具がゴロゴロしていてとてもおいしいです');
  $review3 = new Review($coffee->getName(), $user1->getName(), '香りがいいです');
  $review4 = new Review($pasta->getName(), $user1->getName(), 'ソースが絶品です。また食べたい。');
  $review5 = new Review($juice->getName(), $user2->getName(), '普通のジュース');
  $review6 = new Review($curry->getName(), $user2->getName(), '値段の割においしいカレーだと思いました');
  $review7 = new Review($coffee->getName(), $user2->getName(), '苦味がちょうどよくて、おすすめです');
  $review8 = new Review($pasta->getName(), $user2->getName(), '具材にこだわりを感じました。');
  
  $reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);


?>
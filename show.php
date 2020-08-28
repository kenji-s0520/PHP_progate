<?php
// menu.phpを読み込む
require_once('menu.php');
// data.phpを読み込む
require_once('data.php');

// $_GETでクエリ情報の値を受け取って、変数$memuNameに代入
$menuName = $_GET['name'];
//Menuクラスに対してfindByNameというクラスメソッドを呼び出す
$menu = Menu::findByName($menus, $menuName);
  echo $menu->getName();

// $menuに対して$reviewsを引数としてgetReviewaメソッドを呼び出して、戻り値を変数$menuReviewsに代入
$menuReviews = $menu->getReviews($reviews);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="review-wrapper">
    <div class="review-menu-item">
      <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
      <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
  
      <?php if ($menu instanceof Drink): ?>
        <p class="menu-item-type"><?php echo $menu->getType() ?></p>
      <?php else: ?>
        <?php for ($i = 0; $i < $menu->getSpiciness(); $i++): ?>
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class='icon-spiciness'>
        <?php endfor ?>
      <?php endif ?>
      <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?></p>
    </div>
    
    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/review.png" class='icon-review'>
          <h4>レビュー一覧</h4>
        </div>
        <!-- foreach文を書いてください -->
        <?php foreach ($menuReviews as $review): ?>
          <h3><?php echo $review->getMenuName() ?></h3>
            <p><?php echo $review->getBody() ?></p>
        <?php endforeach ?>
        
      </div>
    </div>
    <a href="index.php">← メニュー一覧へ</a>
  </div>
</body>
</html>
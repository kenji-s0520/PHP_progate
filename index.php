<?php
  require_once('data.php'); // data.phpを読み込む
  require_once('menu.php'); // menu.phpを読み込む
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <!-- Menuクラスに対してgetCountメソッドを呼び出して、クラスプロパティ$countを表示する -->
    <h3>メニュー<?php echo Menu::getCount() ?>品</h3>
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name">
            <!-- メニュー名にshow.phpのリンクを設定する 
                  nameのクエリ情報を追加する-->
              <a href="show.php?name=<?php echo $menu->getName() ?>">
              <?php echo $menu->getName() ?>
              </a>
            </h3>
            <!-- if文を用いて、$menuがDrinkクラスのインスタンスであるときだけgetTypeメソッドを呼び出す -->
            <?php if ($menu instanceof Drink): ?>
            <!-- $menuのゲッターを用いてtypeプロパティを表示 -->
              <p class="menu-item-type"><?php echo $menu->getType() ?></p>
            <!-- elseを用いてmenuのゲッターがFoodクラスのインスタンスであるときだけgetSpicinessを呼び出す -->
            <?php else: ?>
              <!-- <p>辛さ:<?php echo $menu->getSpiciness() ?></p> -->
              <!-- for文を用いて、spicinessプロパティの数だけ繰り返し処理を行う -->
              <?php for($i=0; $i<$menu->getSpiciness(); $i++): ?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class="icon-spiciness">
              <?php endfor ?>
            <?php endif ?>
            <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
            <span>個</span>
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>
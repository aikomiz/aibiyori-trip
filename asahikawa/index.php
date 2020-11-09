<?php

$arrays	= array(

  0 => array(
    'name' => 'as-yukibi',
    'title' => '雪の美術館',
    'kana' => 'ゆきのびじゅつかん',
    'address' => '北海道旭川市南が丘3丁目1-1',
    'time' => '閉館しました',
    'url' => 'https://www.facebook.com/SnowCrystalMuseum/',
    'text01' => '惜しまれながら閉館、美しい美術館',
    'text02' => 
    '<p class="text">雪の美術館は、コロナウイルスの影響を受け、<br>2020年6月30日に閉館しました。</p>
     <p class="text">螺旋階段や、雪をモチーフにした装飾で彩られた素敵な空間でした。</p>
     <p class="text">館内では、衣装を着て写真撮影をする方もいました。<br>すごく世界観のある写真になりそう。</p>
     <p class="text">ピアノの音色もきれいでした。</p>',
     'alt01' => '雪の美術館の館内写真',
     'alt02' => '雪の美術館外観の写真',
     'alt03' => '雪の美術館外観の写真',
     'alt04' => '雪の美術館外観の写真',
     'alt05' => '雪の美術館館内の写真。螺旋階段。',
     'alt06' => '雪の美術館の写真。空色の天井。',
  ),

  1 => array(
    'name' => 'as-ueno',
    'title' => '上野ファーム',
    'kana' => 'うえのふぁーむ',
    'address' => '北海道旭川市永山町１６丁目１８６−２',
    'time' => '現在冬季休業中。<br>2021年度ガーデン公開期間は4月23日～10月17日までを予定。',
    'url' => 'http://www.uenofarm.net/index.php',
    'text01' => 'ひょっこり小人があらわれそう',
    'text02' => 
    '<p class="text">ガーデニングの聖地ともいわれる上野ファームへ</p><p class="text">天気はあいにくの雨でしたが、<br>貸し出し用の傘がありました。</p>
     <p class="text">とても広い園内で、<br>植物や小物で、すてきな空間がつくられていました。</p>
     <p class="text">雨の水滴に滴るお花も、きれいでした。</p>
     <p class="text">また、のんびりとした時間を過ごしに行きたいです。</p>',
     'alt01' => '上野ファームの植物写真。ピンク色のバラ。雨に濡れている。',
     'alt02' => '上野ファームの植物写真。小人の看板。',
     'alt03' => '上野ファームの植物写真。紫色のお花。',
     'alt04' => '上野ファームの植物写真。遠くに小屋が見える。',
     'alt05' => '上野ファームの植物写真。シラカバの木。',
     'alt06' => '上野ファームの植物写真。',
  ),

  


);


 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <title>旭川編 | あいびより</title>
  <meta name="description" content="旭川旅行に行った時の思い出です。雪の美術館、上野ガーデンなど・・・">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/common.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../assets/js/common.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>
    $(function(){
      $('.slider').bxSlider({
        ticker: true,
        minSlides: 1,
        maxSlides: 10,
        slideWidth: 300,
        slideMargin: 10,
        speed: 70000
      });
    });
  </script>

</head>
<body>

<header class="l-header">
  <div class="header-inner">
    <h1 class="logo"><img class="logo-img" src="../assets/img/logo02.png" alt="あいびより"></h1>
  </div>
</header>

<main class="l-main">

  <?php 
    foreach($arrays as $key => $value){
      //var_dump($value) ;
      //foreachの開始
  //　PHPを閉じる、 以下から繰り返したいhtml　?>

  <section class="l-section <?php echo ($value['name']); ?>">
    <div class="l-container">
      <div class="l-title">
        <h2 class="title"><?php echo ($value["title"]); ?><span class="sub_title"><?php echo ($value["kana"]); ?></span></h2>
        <div class="shopinfo_block">
          <div class="shopinfo">
            <p><?php echo ($value["address"]); ?></p>
            <p><?php echo ($value["time"]); ?></p>
            <p class="home"><a href="<?php echo ($value['url']); ?>" target="_blank"><i class="fa fa-home"></i></a></p>
          </div>
        </div>
      </div>
      <div class="l-main_block">
        <div class="l-image">
          <span class="image"><img src="../assets/img/<?php echo ($value['name']); ?>01.jpg" alt="<?php echo ($value["alt01"]); ?>"></span>
        </div>
        <div class="l-text">
          <h3 class="title"><?php echo ($value["text01"]); ?></h3>
          <?php echo ($value["text02"]); ?>
        </div>
      </div>
    </div>
    <div class="l-sub_block">
      <ul class="slider sub_img_list">
        <li>
          <img src="../assets/img/<?php echo ($value['name']); ?>02.jpg" alt="<?php echo ($value["alt02"]); ?>">
        </li>
        <li>
          <img src="../assets/img/<?php echo ($value['name']); ?>03.jpg" alt="<?php echo ($value["alt03"]); ?>">
        </li>
        <li>
          <img src="../assets/img/<?php echo ($value['name']); ?>04.jpg" alt="<?php echo ($value["alt04"]); ?>">
        </li>
        <li>
          <img src="../assets/img/<?php echo ($value['name']); ?>05.jpg" alt="<?php echo ($value["alt05"]); ?>">
        </li>
        <li>
          <img src="../assets/img/<?php echo ($value['name']); ?>06.jpg" alt="<?php echo ($value["alt06"]); ?>">
        </li>
      </ul>
    </div>
  </section>

  <?php
    } //foreachの閉じかっこ
  ?>

</main>

<footer class="l-footer">
  <p><small>travel.aibiyori.com</small></p>
</footer>

<p class="pagetop"><a href="#"><img src="../assets/img/pagetop.png" alt="ページの先頭に戻る"></a></p>

</body>
</html>
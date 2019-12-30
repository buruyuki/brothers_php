<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Brothers</title>
<link rel ="stylesheet" href="resources/styles.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css">
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

</head>

<body>
<div class="header">

<h1>Brothers Official site</h1>

<div class="slider">
<!--スライダーのコンテンツ（画像）を記述-->
  <section class="regular slider">
    <div>
      <img src="https://avatars1.githubusercontent.com/u/51830305?s=460&v=4">
      ぶる
    </div>
    <div>
      <img src="https://avatars1.githubusercontent.com/u/59357198?s=460&v=4">
      ほそ
    </div>
  </section>
</div>
<!--スライダーのレイアウト・動作設定を記述-->
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        autoplay: true,//自動再生あり
        autoplaySpeed: 2000,//自動再生でのスライダー切替スピード2000ms(2秒)
      });
    });
  </script>

<h2>気ままな仲間たちのダラダラ生活</h2>

<ul>
<li>ブラザーズとは</li>
<li>連盟加盟員</li>
<li>作品コーナー</li>
<li>訪問者数</li>
</ul>


</body>








<a href="https://github.com/buruyuki/brothers">GitHubはこちら &gt;&gt;</a>

</html>

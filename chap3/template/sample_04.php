<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>Practice</h2>
	
<h3>現在の時刻（タイムオブジェクトを使用）</h3>
	
<pre>
<?php
/* ここに、PHPのプログラムを記述します */
/* タイムゾーンを指定（しないと日本でない時間で表示される） */
date_default_timezone_set('Asia/Tokyo');
/* date */
$today = new DateTime();
/* インスタンス->メソッド */
print('現在は、' . $today-> format('G時 i分 s秒'). 'です');
print("\n\n");
?>
</pre>
</main>
</body>    
</html>
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
	
<h3>変数に計算結果を保存</h3>
	
<pre>
<?php
/* ここに、PHPのプログラムを記述します */
$sum = 100+1050+200;
?>
<p>合計金額は<?php print($sum); ?>円です。<br>
税込み金額は<?php print($sum * 1.08); ?>円です。<br>
</p>

</pre>
</main>
</body>    
</html>
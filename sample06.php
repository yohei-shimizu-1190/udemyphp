
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
(100 / 3000 * 100)の
答えは通常では 3.3333333...
小数点以下を消す（floor）<?php print(floor(100 / 3000 * 100)); ?>  3になる。
切り上げ(ceil) <?php print(ceil(100 / 3000 * 100)); ?>  4になる。
四捨五入(round) <?php print(round(100 / 3000 * 100, 3)); ?> 第2引数にどこまで表示するかを与える。今回は3.33になる
</pre>
</main>
</body>    
</html>
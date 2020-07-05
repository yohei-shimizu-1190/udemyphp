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
<?php
print(date('n/j/(D)', time() + 60 * 60 * 24));
// ↑明日の時間を表示させた
// print(time());タイムスタンプを表示（1970/1/1 を0 としたもの）
?>

</pre>
</main>
</body>    
</html>
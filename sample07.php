
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
2016年01月31日のように月と日は2桁で表示したい時
<?php
$date = sprintf('%04d年 %02d月 %02d日 %s', 2016, 01, 31, 金);
// 0で不足分を補う(半角空白で補うことも可能)
// 4か2桁に修正する。
// dは数字に変換すること。異なった形式が来たら0で補われる。sは文字列
print($date);


print sprintf("%s 君は %s を %d 個食べました。", "太郎", "りんご", 7)
// 太郎 君は りんご を 7 個食べました。
?>
</pre>
</main>
</body>    
</html>
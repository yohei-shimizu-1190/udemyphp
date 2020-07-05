
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
$zip = '９00-5432';
$zip = mb_convert_kana($zip, 'a', 'utf-8');
// aは英数字を半角に直す処理をしてくれる。今回はーがあるため、dにしていない。
if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
    // 正規表現（ピーレグマッチ）Aとzをつけないと、acd500-8225fggもOKとなってしまう！
    // 現在はHTML5のブラウザのチェック機能を使うことが多いみたい
    print('郵便番号:' . $zip);
} else {
    print('郵便番号は正式ではありません');
}
?>
</pre>
</main>
</body>    
</html>
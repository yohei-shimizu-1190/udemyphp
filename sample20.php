
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
$age = '２３';

$age = mb_convert_kana($age, 'n', 'utf-8');
// mb_convert_kanaは 全角を半角に直してくれる！！
// nを渡すと、「全角」数字を「半角」に変換します。
if (is_numeric($age)) {
    print($age . '歳です');
} else {
    print('数字ではありません');
}
?>
</pre>
</main>
</body>    
</html>
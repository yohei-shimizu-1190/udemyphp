
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
// 連想配列
$fruits = [
  'apple'=>'りんご',
  'grape'=>'ぶどう',
  'lemon'=>'レモン'
];
// キー(index) = lemon
// 値 = レモン

// print($fruits['lemon']);
// ＝＞ レモン

foreach ($fruits as $fluit) {
    print($fluit . "\n");
};
// りんご
// ぶどう
// レモン

foreach ($fruits as $english => $japanese) {
    print($english . ':' . $japanese . "\n");
};

// apple:りんご
// grape:ぶどう
// lemon:レモン

?>

</pre>
</main>
</body>    
</html>
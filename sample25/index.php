<?php
session_start();
//  セッションを使う設定文

// セッションはウェブサーバーに保存されるため、ブラウザを閉じると消滅する
// クッキーはブラウザに保存される
// 変数はそのページにのみ保存される
$_SESSION['session_message'] = '値をセッションに保存しました';
// グローバル変数
?>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<a href="page02.php">Page02</a>
</pre>
</main>
</body>    
</html>

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
  お名前: <?php print($_REQUEST['my_name']); ?>
  <!-- $_REQUEST['my_name']のブラケット内にinputのname属性と同じ文字を入れることで、そのinputに入力された値を取得できる。 -->
  <!-- $_POSTや$_GETもあるが、前の送信されるinputのmethod属性と合わせないとエラーとなる -->
  <!-- $_REQUESTはget,postどちらでもエラーにならないが、秘密情報ではpostを指定するべき！！ -->
  <!-- getはurlに情報をんのせて送信するが、postは情報を裏側で送信する。 -->
<!-- ただ、これだけではXXS（クロスサイトスクリプティング）を防げないため、以下のように記述 -->
  お名前: <?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?>
  <!-- htmlspecialcharsはhtmlのタグ(aタグとか)で表示されるものをエスケープできる！ -->
  <!-- パラメーターは2つ必要で、1つめの引数は何をエスケープするか、2つ目はどのようにエスケープするのかを示す。
  基本的に第二引数のエスケープの種類は一番強い(?) ENT_QUOTES(エントクウォーツ) を指定する形がいい -->
  <!-- ENT_QUOTESは '' や"" も文字に変換する -->
</pre>
</main>
</body>    
</html>
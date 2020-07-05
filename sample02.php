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
for ($i=1; $i<=365; $i++) {
    print(date('n/j/(D)', strtotime($i . 'day')));
    print "\n";
}

for ($i=1; $i<=365; $i++) :
    print(date('n/j/(D)', strtotime($i . 'day')));
    print "\n";
endfor;
// { }ではなく、 コロン〜endfoge もわかりやすいためよくつかわれる

while(...) :
    ...
endwhile;

?>

</pre>
</main>
</body>    
</html>
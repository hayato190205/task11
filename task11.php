<?php
// ある10進数の正の整数nが与えられたとき、n の桁数を数字で出力せよ。
// [実行結果例]
// n = 1142
// 4

$n = filter_input(INPUT_POST, 'n', FILTER_VALIDATE_INT);
$N = strlen($n);
$errors = array();

if (!is_numeric($n))
{
  $errors['num'] = 'nには数字を入力してください';
}

?>


<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>数字の桁数</title>
  </head>
  <body>
    <form action="" method="post">
    n: <input type="text" name="n">
    <input type="submit" value="送信"><br>
    <?php if (is_numeric($n)) : ?>
      <?php echo htmlspecialchars($N, ENT_QUOTES, "utf-8"); ?>
    <?php else : ?>
      <?php echo htmlspecialchars($errors['num'], ENT_QUOTES, "utf-8"); ?>
    <?php endif; ?>
  </body>
  </html>
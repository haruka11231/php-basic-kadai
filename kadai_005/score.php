<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>テストの平均点</title>
 </head>
 
 <body>
  <?php
  //変数を作成し、値を代入する
  $score1 = 80;
  $score2 = 60;
  $score3 = 55;
  $score4 = 40;
  $score5 = 100;
  $score6 = 25;
  $score7 = 80;
  $score8 = 95;
  $score9 = 30;
  $score10 = 60;

   // 合計点を算出する
  $total_score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
  ?>

  <p>
   <!-- //合計点を出力する -->
     <?php
      echo $total_score;
      echo '<br>';
     ?>
   <!-- //平均点を出力する -->
   <?php
    $average_score = $total_score / 10;
      echo $average_score;
      echo '<br>';
     ?>

  </p>
 </body>
 
 </html>
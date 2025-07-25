<!DOCTYPE html>

<head>
<meta charset="UTF-8">
  <title>PHP基礎編</title>
  </head>

<body>
  <p>
    <?php
    $item = ['name'=> 'onion', 'price'=> 200,'origin'=> '北海道'];
    // 連想配列の値を出力する
    foreach ($item as $key => $value) {
      echo "{$key} : {$value}<br>"; 
    }
    ?>
  </p>
  </body>
</html>

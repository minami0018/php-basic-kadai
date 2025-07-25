<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
       function sort_2way($array,$order){
        if ($order === 'asc') {
            sort($array);
            echo "昇順にソートします。<br> ";
        } else {
            rsort($array);
            echo "降順にソートします。<br> ";

        } 
        foreach ($array as $num) {
            echo "{$num} <br>";
        }
      }

        // 配列を用意する
        $nums = [15,4,18,23,10];
        sort_2way($nums,'asc');
        echo '<br>';
        sort_2way($nums,'desc');
       
        ?>
    </p>
</body>

</html>
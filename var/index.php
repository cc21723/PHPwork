<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Var 變數</title>
</head>

<body>
    <?php
    define("PI", 3.14159); //宣告變數PI
    
    $age = 3;
    $name = "秘密";
    $ename = "Snow";
    //未加""程式為以為是常數;
    
    echo "我今年 $age 歲";
    echo "<br>";

    echo PI;
    echo "<hr>";
    $name = "小明";
    $age = 20;
    echo "姓名是", $name, "年齡是", $age, "歲";
    echo "<hr>";
    echo "Hello, world!";  // 輸出文字
    echo "<br>";
    print "Hello again!";  // 與 echo 類似，但功能較單純
    echo "<br>";
    if ($age >= 18) {
        echo "成年了";
    } else {
        echo "未成年";
    }

    $a = 10;
    $b = 50;

    [$a, $b] = [$b, $a];

    echo "a=" . $a;
    echo " b=" . $b;
    echo "<br>";
    echo "a = $a, b = $b";

    ?>
</body>

</html>
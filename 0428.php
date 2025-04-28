<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>流程結構練習</h1>
    <h2>判斷成績及格學生</h2>
    <h3>給定一個成績數字，判斷是否及格(60)分"</h3>
    <?php

    $score = "99";

    // 判斷是否為數字(is_numeric || is_int)
    if (!is_numeric($score) || $score > 100 || $score < 0) {
        echo "<span style='color: red;'>錯誤：請輸入合法的成績數字</span>" . "<br>";
    } else {
        // 顯示成績
        echo "你的成績是 " . $score . "分" . "<br>";
        echo "判定結果：";

        // 判斷及格或不及格，並加上顏色
        if ($score >= 60 && $score <= 100) {
            echo "<span style='color: green;'>及格</span>";
        } else if ($score >= 0 && $score < 60) {
            echo "<span style='color: red;'>不及格</span>";
        }
    }


    echo "<br>";
    echo "<hr>";
    echo "<br>";

    $level = ($score >= 60) ? '判定結果：及格' : '判定結果：不及格';
    echo $level;

    ?>
    <hr>
    <h2>分配成績等級</h2>
    <h3>給定一個成績數字，根據成績所在的區間，給定等級</h3>
    <ul>
        <li>0 ~ 59 => E</li>
        <li>60 ~ 69 => D</li>
        <li>70 ~ 79 => C</li>
        <li>80 ~ 89 => B</li>
        <li>90 ~ 100 => A</li>
    </ul>
    <?php

    $level = '';
    // $score = "30";
    if (!is_numeric($score) || $score > 100 || $score < 0) {
        echo "<span style='color: red;'>錯誤：請輸入合法的成績數字</span>" . "<br>";
    } else {
        echo "成績為", $score, "分", "<br>";

        if ($score < 100 && $score >= 90) {
            $level = 'A';
        } else if ($score < 90 && $score >= 80) {
            $level = 'B';
        } else if ($score < 80 && $score >= 70) {
            $level = 'C';
        } else if ($score < 70 && $score >= 60) {
            $level = 'D';
        } else if ($score < 60 && $score >= 0) {
            $level = 'E';
        }
        echo "等級為：", $level;
    }




    echo "<hr>";
    ?>
    <h2>依據學生成績等級給予評價</h2>
    <h3>根據學生不同的成績等級在網頁上印出不同的文字評價</h3>
    <br>
    <?php
    switch ($level) {
        case "A":
            echo "表現優良，請繼續保持";
            break;
        case "B":
            echo "值得肯定，還有進步空間";
            break;
        case "C":
            echo "需要更多的練習";
            break;
        case "D":
            echo "需要加強基本功";
            break;
        case "E":
            echo "是否無心學業?";
            break;
        default:
            echo "<span style='color: red;'>格式錯誤</span>";

    }
    ?>

</body>

</html>
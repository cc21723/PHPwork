<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop 迴圈</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap');

        body {
            margin: 3% auto;
            padding: 30px 20px;
            font-family: 'Patrick Hand', cursive;
            background-color: #fff0f5;
            width: 90%;
            max-width: 1024px;
            border-radius: 16px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border: 4px dashed #E16B8C;
            text-align: left;
            color: #333;
        }

        h2,
        h3,
        h5 {
            color: #E16B8C;
            font-size: 1.8em;
            margin-top: 40px;
        }

        ul {
            list-style: none;
            padding-left: 1em;
        }

        li::before {
            content: "🍭 ";
            margin-right: 6px;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            font-size: 16px;
            width: 100%;
            max-width: 900px;
        }

        th,
        td {
            border: 1px solid #555;
            padding: 10px 15px;
            text-align: center;
        }

        /* th .ans::before {
            content: "✨ ";
        } */

        th {
            background-color: #f9dce3;
        }

        td {
            background-color: #fff;
        }

        h1 {
            text-align: center;
            color: #E16B8C;
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        
        @media (max-width: 600px) {
            h1 {
                font-size: 2em;
            }
        }
    </style>
</head>

<body>
    <h1>🎀 Loop 迴圈學習</h1>

    <h2>📈 使用 for 迴圈產生以下數列</h2>
    <ul>
        <li>1,3,5,7,9……n</li>
        <li>10,20,30,40,50,60……n</li>
        <li>3,5,7,11,13,17……97</li>
    </ul>
    <?php
    // 1. 印出 1, 3, 5, ..., 19
    for ($i = 1; $i <= 20; $i += 2) {
        echo $i . ",";
    }

    echo "<br>";

    // 2. 印出 10, 20, ..., 90
    for ($i = 1; $i < 10; $i++) {
        echo $i * 10 . ",";
    }

    // 3. 印出 10, 20, ..., 100
    for ($x = 10; $x <= 100; $x += 10) {
        echo $x . ",";
    }
    echo "<br>";

    // 4. 找出 3 ~ 100 的奇數質數
    for ($j = 3; $j <= 100; $j += 2) {
        $test = true;
        for ($i = 2; $i < $j; $i++) {
            if ($j % $i == 0) {
                $test = false;
                break;
            }
        }
        if ($test) {
            echo $j . ",";
        }
    }
    ?>

    <h2>🎲 威力彩電腦選號（不重覆號碼，使用 while 迴圈）</h2>
    <ul>
        <li>使用亂數函式 rand($a, $b) 來產生號碼</li>
        <li>將產生的號碼存入陣列中</li>
        <li>每次存入時會先檢查是否重覆</li>
        <li>完成選號後將陣列內容印出</li>
    </ul>
    <?php
    $wu = [];
    while (count($wu) < 6) {
        $num = rand(1, 49);
        if (!in_array($num, $wu)) {
            $wu[] = $num;
        }
    }
    echo implode(", ", $wu);
    ?>

    <h2>📊 九九乘法表</h2>
    <h5>🧮 表格排列</h5>
    <table>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>$j x $i = " . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <h5>🌸 交叉結果呈現</h5>
    <table>
        <?php
        echo "<tr><th></th>";
        for ($i = 1; $i <= 9; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <h3>📐 斜角九九乘法表</h3>
    <table>
        <?php
        echo "<tr><th></th>";
        for ($i = 1; $i <= 9; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= 9; $j++) {
                if ($i >= $j) { //$i >= $j顯示左下 $i<=$j 顯示右上
                    echo "<td>" . ($i * $j) . "</td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>
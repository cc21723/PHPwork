<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop 迴圈</title>
</head>

<body>
    <h2>使用for迴圈來產生以下的數列</h2>
    <ul>
        <li>1,3,5,7,9……n</li>
        <li>10,20,30,40,50,60……n</li>
        <li>3,5,7,11,13,17……97</li>
    </ul>
    <?php
    // 1. 印出 1, 3, 5, ..., 19
    for ($i = 1; $i <= 20; $i += 2) { // 從 1 開始，每次增加 2，直到大於 20 停止
        echo "", $i, ",";
    }

    echo "<br>";

    // 2. 印出 10, 20, ..., 90（修正）
    for ($i = 1; $i < 10; $i += 1) {
        echo $i * 10, ",";
    }

    // 3. 印出 10, 20, ..., 100
    for ($x = 10; $x <= 100; $x += 10) {
        echo "", $x, ",";
    }
    echo "<br>";

    // 4. 找出 3 ~ 100 的奇數質數
    for ($j = 3; $j <= 100; $j += 2) {
        $test = true;
        $count = 0;
        for ($i = 2; $i < $j; $i++) {
            $count++;
            if ($j % $i == 0) {
                $test = false;
                break;
            }
        }
        if ($test) {
            echo $j, ",";
        }
    }
    // for ($num = 3; $num <= 97; $num++) { //從3跑到97
    //     $isPrime = true; // 先假設它是質數
    
    //     //檢查這個數字是不是質數
    //     for ($i = 2; $i <= sqrt($num); $i++) { // 只要檢查到√num就好
    //         if ($num % $i == 0) {
    //             $isPrime = false; // 有被整除，就不是質數
    //             break;
    //         }
    //     }
    
    //     if ($isPrime) {
    //         echo $num;
    //         if ($num != 97) { // 最後一個97後面不要逗號
    //             echo ", ";
    //         }
    //     }
    // }
    ?>




    <?php
    // foreach ($students as $index => $student) {
    //     echo $student . ": " . implode(", ", $score[$index]) . "<br>";
    // }
    // 開始畫表格
    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    // 表格標題列
    echo "<tr>";
    echo "<th></th>"; // 左上角空白
    foreach ($class as $subject) {
        echo "<th>{$subject}</th>";
    }
    echo "</tr>";

    // 學生資料列
    foreach ($students as $index => $student) {
        echo "<tr>";
        echo "<td>{$student}</td>";
        foreach ($score[$index] as $subjectScore) {
            echo "<td>{$subjectScore}</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
    <!-- <h2>利用程式來產生陣列</h2>
    <ul>
        <li>以迴圈的方式產生一個九九乘法表</li>
        <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
        <li>再以迴圈方式將陣列內容印出</li>
    </ul> -->

    <?php
    // $gugu=[]; //空陣列
    
    // for( $i = 1; $i < 10; $i++ ) {
    //     for( $j = 1; $j <10; $j++ ) {
    //     $gugu[] = "{$i}x{$j}=".($i*$j);
    //     }   
    // }
    //印陣列內容
    // echo implode("<br> ", $gugu);
    // foreach ($gugu as $item ) {
    //     echo $item."<br>";
    // }
    ?>

    <h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
    <ul>
        <li>使用亂數函式rand($a,$b)來產生號碼</li>
        <li>將產生的號碼順序存入陣列中</li>
        <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
        <li>完成選號後將陣列內容印出</li>
    </ul>
    <?php
    $wu = []; //空陣列
    // for( $i = 1; $i < 7; $i++) {
    //     $num = rand(1,49);
    //     if(!in_array($num,$wu)){
    //         $wu[] = $num;
    //  }
    // }
    
    foreach ($wu as $item) {
        echo $item . ",";
    }

    while (count($wu) < 6) {
        $num = rand(1, 49); //產生1~49的隨機數字
    
        if (!in_array($num, $wu)) { //判斷陣列內有無此號碼
            $wu[] = $num; //號碼加入陣列
        }
    }
    echo implode(", ", $wu);
    // foreach ($wu as $item) {
    //     echo $item. ",";
    // }
    ?>
    <h2>九九乘法表</h2>
    <ul>
        <li>以表格排列的九九乘法表</li>
        <table border="1">
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
        <br>
        <li>以交叉計算結果呈現的九九乘法表</li>
        <style>
            table {
                border-collapse: collapse;
                margin: 20px auto;
                font-size: 16px;
            }

            th,
            td {
                border: 1px solid #555;
                padding: 10px 15px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }

            td {
                background-color: #fff;
            }
        </style>
        <table border="1">
            <?php

            // 表格標題列
            echo "<tr>";
            echo "<th></th>"; // 左上角空白
            
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";
            for ($i = 1; $i <= 9; $i++) {
                echo "<tr>";
                echo "<th> $i</th>";
                for ($j = 1; $j <= 9; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }



            ?>
        </table>

        <br>
        <li>票價表</li>
        <style>
            table {
                border-collapse: collapse;
                margin: 20px auto;
                font-size: 16px;
            }

            th,
            td {
                border: 1px solid #555;
                padding: 10px 15px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }

            td {
                background-color: #fff;
            }
        </style>
        <table border="1">
            <?php

            // 表格標題列
            echo "<tr><th></th>";// 左上角空白
            
            //標題列
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            //表格內容
            for ($i = 1; $i <= 9; $i++) {
                echo "<tr>";
                echo "<th> $i</th>";
                for ($j = 1; $j <= 9; $j++) {
                    if ($j >= $i) {
                        echo "<td>" . ($i * $j) . "</td>";
                    } else {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }



            ?>
        </table>


    </ul>
</body>

</html>
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

    <h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
    <ul>
        <li>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</li>
        <li>公元年分除以4不可整除，為平年。</li>
        <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
        <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
    </ul>
    <?php

    $year = 2204;
    // if ($year <= 0) {
    //     echo "格式錯誤";
    // } else if ($year % 4 != 0) {
    //     echo "{$year} 平年";
    // } else if ($year % 100 != 0) {
    //     echo "{$year} 閏年";
    // } else if ($year % 400 != 0) {
    //     echo "{$year} 平年";
    // } else{
    //     echo "{$year} 閏年";
    // }
    if ($year <= 0) {
        echo "格式錯誤";
    } else {
        echo "{$year} " . (($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) ? "閏年" : "平年");
    }
    ?>
    <br>
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
    <hr>
    <h1>陣列操作練習</h1>
    <h2>建立一個學生成績陣列</h2>
    <h3>設計一個陣列(一維或多維)來存放學生的成績資料</h3>
    <?php
    $class = ["國文", "英文", "數學", "地理", "歷史"];
    $students = ["judy", "amo", "john", "peter", "hebe"];
    $score = [
        [95, 64, 70, 90, 84],
        [88, 78, 54, 81, 71],
        [45, 60, 68, 70, 62],
        [59, 32, 77, 54, 42],
        [71, 62, 80, 62, 64],
    ];

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
        <table border="1">
            <?php

            // 表格標題列
            echo "<tr>";
            echo "<th></th>"; // 左上角空白

            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";
            
        
            ?>
        </table>

    </ul>



</body>

</html>
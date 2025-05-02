<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 陣列</title>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <style>
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

        h1, h2, h3 {
            color: #E16B8C;
            margin-top: 1em;
        }

        h1::before {
            content: "📘 ";
        }

        h2::before {
            content: "📋 ";
        }

        h3::before {
            content: "✏️ ";
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 90%;
            font-size: 18px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #E16B8C;
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #ffe4ec;
            color: #E16B8C;
        }

        td {
            background-color: #fffafc;
        }

        @media (max-width: 600px) {
            body {
                font-size: 16px;
            }

            table {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
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

    echo "<table>";
    echo "<tr><th>學生</th>";
    foreach ($class as $subject) {
        echo "<th>{$subject}</th>";
    }
    echo "</tr>";

    foreach ($students as $index => $student) {
        echo "<tr><td>{$student}</td>";
        foreach ($score[$index] as $subjectScore) {
            echo "<td>{$subjectScore}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>

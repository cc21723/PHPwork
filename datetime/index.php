<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>時間及日期處理</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Patrick Hand', cursive;
            background-color: #fff0f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 960px;
            background-color: #fff;
            border-radius: 16px;
            padding: 40px 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border: 4px dashed #E16B8C;
            text-align: left;
        }

        h1 {
            color: #E16B8C;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-align: center;
        }

        h2 {
            color: #8a3e5c;
            font-size: 1.8em;
            margin: 30px 0 15px;
            border-left: 6px solid #E16B8C;
            padding-left: 12px;
        }

        ul,
        ol {
            padding-left: 20px;
            margin: 15px 0 25px;
        }

        ul li,
        ol li {
            background-color: #ffe0eb;
            padding: 10px 15px;
            margin-bottom: 10px;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        ul li:hover,
        ol li:hover {
            background-color: #fcd1e2;
        }

        hr {
            border: none;
            border-top: 2px dashed #E16B8C;
            margin: 40px 0;
        }
    </style>
</head>

<body>
    <!-- 
        date(“Y-m-d”,$time)
        strtotime(“+1 days”,$date_string)
        日期函式參數表
        基本單位是秒
        date_default_timezone_set() - 設置程式執行期間的時區 
    -->
    <div class="container">
        <h1>日期函式應用練習</h1>
        <h2>給定兩個日期，計算中間間隔天數</h2>
        <?php



        ?>
        <hr>
        <h2>計算距離自己下一次生日還有幾天</h2>
        <?php



        ?>
        <hr>
        <h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
        <ul>
            <li>2021/10/05</li>
            <li>10月5日 Tuesday</li>
            <li>2021-10-5 12:9:5</li>
            <li>2021-10-5 12:09:05</li>
            <li>今天是西元2021年10月5日 上班日(或假日)</li>
        </ul>
        <?php



        ?>
        <hr>

        <h2>利用迴圈來計算連續五個周一的日期</h2>
        <ol>
            <li>2021-10-04 星期一</li>
            <li>2021-10-11 星期一</li>
            <li>2021-10-18 星期一</li>
            <li>2021-10-25 星期一</li>
            <li>2021-11-01 星期一</li>
        </ol>
        <?php



        ?>
        <hr>

        <h2>線上月曆製作</h2>
        <ul>
            <li>以表格方式呈現整個月份的日期</li>
            <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
            <li>嘗試以block box或flex box的方式製作月曆</li>
        </ul>
        <?php



        ?>
        <hr>
    </div>

</body>

</html>
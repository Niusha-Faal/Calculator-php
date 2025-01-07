<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="calculator">

    <h1>Calculator</h1>

    <form method="post">
        <input type="text" id="num1" name="num1" placeholder="عدد اول">
        <br>
        <input type="text" id="num2" name="num2" placeholder="عدد دوم">
        <br>
        <input type="text" id="result" name="output" placeholder='خروجی' readonly
            value="<?php 
                if (isset($_POST['calculate'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operation = $_POST['operation'];
                    $result = "";

                    if (is_numeric($num1) && is_numeric($num2)) {
                        switch ($operation) {
                            case "plus":
                                $result = $num1 + $num2;
                                break;
                            case "minus":
                                $result = $num1 - $num2;
                                break;
                            case "multiply":
                                $result = $num1 * $num2;
                                break;
                            case "divide":
                                    $result = $num1 / $num2;
                                break;
                        }
                    }
                    else {
                        $result = "لطفاً اعداد معتبر وارد کنید.";
                    }
                    echo $result; 
                }
            ?>">
        <br><br>
        <select class="button" name="operation">
            <option value="plus">جمع</option>
            <option value="minus">تفریق</option>
            <option value="multiply">ضرب</option>
            <option value="divide">تقسیم</option>
        </select>

        <div class="buttons">
            <button class="button" type="submit" name="calculate">محاسبه</button>
            <button class="button" type="reset">بازنشانی</button>
        </div>
    </form>
    </div>
</body>
</html>
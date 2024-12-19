<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์การคำนวณค่า BMI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ผลลัพธ์การคำนวณค่า BMI</h1>
        <?php
        if (isset($_GET['weight']) && isset($_GET['height'])) {
            $weight = floatval($_GET['weight']);
            $height = floatval($_GET['height']) / 100; // แปลงเป็นเมตร

            if ($height > 0) {
                $bmi = $weight / ($height * $height);
                $bmi = round($bmi, 2);

                echo "<p>BMI: " . $bmi . "</p>";
            } else {
                echo "<p>ข้อมูลส่วนสูงไม่ถูกต้อง</p>";
            }
        } else {
            echo "<p>กรุณากรอกข้อมูลให้ครบถ้วน</p>";
        }
        ?>
    </div>
</body>
</html>

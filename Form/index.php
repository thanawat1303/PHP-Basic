<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css.css" rel="stylesheet">
    <title>Sign up</title>
</head>
<body>
    <div class="background">
        <form class="form-signup" method="POST" action="member.php">
            <p class="head-form">SIGN UP</p>
            <div class="body-form">
                <label class="filedInput">
                    FULLNAME
                    <div class="frameInput">
                        <input class="box-input" type="text" name="fullname">
                    </div>
                </label>
                <label class="filedInput">
                    EMAIL
                    <div class="frameInput">
                        <input class="box-input" type="email" name="email">
                    </div>
                </label>
                <div class="genandday">
                    <div class="gendar">
                        เพศ
                        <div class="box-select">
                            <select name="gendar">
                                <option hidden selected value="">เลือกเพศ</option>
                                <option value="ชาย">ชาย</option>
                                <option value="หญิง">หญิง</option>
                            </select>
                        </div>
                    </div>
                    <div class="day">
                        วันเกิด
                        <div class="box-day">
                            <input type="date" name="date">
                        </div>
                    </div>
                </div>
                <div class="frame-sm">
                    <button type="submit" class="submit" name="submit">
                        SUBMIT
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>